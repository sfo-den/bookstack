<?php namespace Tests;

use BookStack\Entities\Models\Page;
use BookStack\Entities\Tools\PageContent;
use BookStack\Facades\Theme;
use BookStack\Theming\ThemeEvents;
use File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\CommonMark\ConfigurableEnvironmentInterface;

class ThemeTest extends TestCase
{
    protected $themeFolderName;
    protected $themeFolderPath;

    public function test_translation_text_can_be_overridden_via_theme()
    {
        $this->usingThemeFolder(function () {
            $translationPath = theme_path('/lang/en');
            File::makeDirectory($translationPath, 0777, true);

            $customTranslations = '<?php
            return [\'books\' => \'Sandwiches\'];
        ';
            file_put_contents($translationPath . '/entities.php', $customTranslations);

            $homeRequest = $this->actingAs($this->getViewer())->get('/');
            $homeRequest->assertElementContains('header nav', 'Sandwiches');
        });
    }

    public function test_theme_functions_file_used_and_app_boot_event_runs()
    {
        $this->usingThemeFolder(function ($themeFolder) {
            $functionsFile = theme_path('functions.php');
            app()->alias('cat', 'dog');
            file_put_contents($functionsFile, "<?php\nTheme::listen(\BookStack\Theming\ThemeEvents::APP_BOOT, function(\$app) { \$app->alias('cat', 'dog');});");
            $this->runWithEnv('APP_THEME', $themeFolder, function () {
                $this->assertEquals('cat', $this->app->getAlias('dog'));
            });
        });
    }

    public function test_event_commonmark_environment_configure()
    {
        $callbackCalled = false;
        $callback = function ($environment) use (&$callbackCalled) {
            $this->assertInstanceOf(ConfigurableEnvironmentInterface::class, $environment);
            $callbackCalled = true;
            return $environment;
        };
        Theme::listen(ThemeEvents::COMMONMARK_ENVIRONMENT_CONFIGURE, $callback);

        $page = Page::query()->first();
        $content = new PageContent($page);
        $content->setNewMarkdown('# test');

        $this->assertTrue($callbackCalled);
    }

    public function test_event_web_middleware_before()
    {
        $callbackCalled = false;
        $requestParam = null;
        $callback = function ($request) use (&$callbackCalled, &$requestParam) {
            $requestParam = $request;
            $callbackCalled = true;
        };

        Theme::listen(ThemeEvents::WEB_MIDDLEWARE_BEFORE, $callback);
        $this->get('/login', ['Donkey' => 'cat']);

        $this->assertTrue($callbackCalled);
        $this->assertInstanceOf(Request::class, $requestParam);
        $this->assertEquals('cat', $requestParam->header('donkey'));
    }

    public function test_event_web_middleware_before_return_val_used_as_response()
    {
        $callback = function (Request $request) {
            return response('cat', 412);
        };

        Theme::listen(ThemeEvents::WEB_MIDDLEWARE_BEFORE, $callback);
        $resp = $this->get('/login', ['Donkey' => 'cat']);
        $resp->assertSee('cat');
        $resp->assertStatus(412);
    }

    public function test_event_web_middleware_after()
    {
        $callbackCalled = false;
        $requestParam = null;
        $responseParam = null;
        $callback = function ($request, Response $response) use (&$callbackCalled, &$requestParam, &$responseParam) {
            $requestParam = $request;
            $responseParam = $response;
            $callbackCalled = true;
            $response->header('donkey', 'cat123');
        };

        Theme::listen(ThemeEvents::WEB_MIDDLEWARE_AFTER, $callback);

        $resp = $this->get('/login', ['Donkey' => 'cat']);
        $this->assertTrue($callbackCalled);
        $this->assertInstanceOf(Request::class, $requestParam);
        $this->assertInstanceOf(Response::class, $responseParam);
        $resp->assertHeader('donkey', 'cat123');
    }

    public function test_event_web_middleware_after_return_val_used_as_response()
    {
        $callback = function () {
            return response('cat456', 443);
        };

        Theme::listen(ThemeEvents::WEB_MIDDLEWARE_AFTER, $callback);

        $resp = $this->get('/login', ['Donkey' => 'cat']);
        $resp->assertSee('cat456');
        $resp->assertStatus(443);
    }

    protected function usingThemeFolder(callable $callback)
    {
        // Create a folder and configure a theme
        $themeFolderName = 'testing_theme_' . rtrim(base64_encode(time()), "=");
        config()->set('view.theme', $themeFolderName);
        $themeFolderPath = theme_path('');
        File::makeDirectory($themeFolderPath);

        call_user_func($callback, $themeFolderName);

        // Cleanup the custom theme folder we created
        File::deleteDirectory($themeFolderPath);
    }

}