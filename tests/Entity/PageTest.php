<?php namespace Tests\Entity;

use BookStack\Entities\Models\Page;
use Tests\TestCase;

class PageTest extends TestCase
{
    public function test_page_delete()
    {
        $page = Page::query()->first();
        $this->assertNull($page->deleted_at);

        $deleteViewReq = $this->asEditor()->get($page->getUrl('/delete'));
        $deleteViewReq->assertSeeText('Are you sure you want to delete this page?');

        $deleteReq = $this->delete($page->getUrl());
        $deleteReq->assertRedirect($page->getParent()->getUrl());
        $this->assertActivityExists('page_delete', $page);

        $page->refresh();
        $this->assertNotNull($page->deleted_at);
        $this->assertTrue($page->deletions()->count() === 1);

        $redirectReq = $this->get($deleteReq->baseResponse->headers->get('location'));
        $redirectReq->assertNotificationContains('Page Successfully Deleted');
    }
}