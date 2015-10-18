<?php

use BookStack\EmailConfirmation;

class AuthTest extends TestCase
{

    public function testAuthWorking()
    {
        $this->visit('/')
            ->seePageIs('/login');
    }

    public function testLogin()
    {
        $this->visit('/')
            ->seePageIs('/login');

        $this->login('admin@admin.com', 'password')
            ->seePageIs('/')
            ->see('BookStack');
    }

    public function testPublicViewing()
    {
        $settings = app('BookStack\Services\SettingService');
        $settings->put('app-public', 'true');
        $this->visit('/')
            ->seePageIs('/')
            ->see('Sign In');
    }

    public function testRegistrationShowing()
    {
        // Ensure registration form is showing
        $this->setSettings(['registration-enabled' => 'true']);
        $this->visit('/login')
            ->see('Sign up')
            ->click('Sign up')
            ->seePageIs('/register');
    }

    public function testNormalRegistration()
    {
        // Set settings and get user instance
        $this->setSettings(['registration-enabled' => 'true']);
        $user = factory(\BookStack\User::class)->make();

        // Test form and ensure user is created
        $this->visit('/register')
            ->see('Sign Up')
            ->type($user->name, '#name')
            ->type($user->email, '#email')
            ->type($user->password, '#password')
            ->press('Create Account')
            ->seePageIs('/')
            ->see($user->name)
            ->seeInDatabase('users', ['name' => $user->name, 'email' => $user->email]);
    }

    public function testConfirmedRegistration()
    {
        // Set settings and get user instance
        $this->setSettings(['registration-enabled' => 'true', 'registration-confirmation' => 'true']);
        $user = factory(\BookStack\User::class)->make();

        // Mock Mailer to ensure mail is being sent
        $mockMailer = Mockery::mock('Illuminate\Contracts\Mail\Mailer');
        $mockMailer->shouldReceive('send')->with('emails/email-confirmation', Mockery::type('array'), Mockery::type('callable'))->twice();
        $this->app->instance('mailer', $mockMailer);

        // Go through registration process
        $this->visit('/register')
            ->see('Sign Up')
            ->type($user->name, '#name')
            ->type($user->email, '#email')
            ->type($user->password, '#password')
            ->press('Create Account')
            ->seePageIs('/register/confirm')
            ->seeInDatabase('users', ['name' => $user->name, 'email' => $user->email, 'email_confirmed' => false]);

        // Test access and resend confirmation email
        $this->login($user->email, $user->password)
            ->seePageIs('/register/confirm/awaiting')
            ->see('Resend')
            ->visit('/books')
            ->seePageIs('/register/confirm/awaiting')
            ->press('Resend Confirmation Email');

        // Get confirmation
        $user = $user->where('email', '=', $user->email)->first();
        $emailConfirmation = EmailConfirmation::where('user_id', '=', $user->id)->first();


        // Check confirmation email button and confirmation activation.
        $this->visit('/register/confirm/' . $emailConfirmation->token . '/email')
            ->see('Email Confirmation')
            ->click('Confirm Email')
            ->seePageIs('/')
            ->see($user->name)
            ->notSeeInDatabase('email_confirmations', ['token' => $emailConfirmation->token])
            ->seeInDatabase('users', ['name' => $user->name, 'email' => $user->email, 'email_confirmed' => true]);
    }

    public function testUserControl()
    {
        $user = factory(\BookStack\User::class)->make();
        // Test creation
        $this->asAdmin()
            ->visit('/users')
            ->click('Add new user')
            ->type($user->name, '#name')
            ->type($user->email, '#email')
            ->select(2, '#role')
            ->type($user->password, '#password')
            ->type($user->password, '#password-confirm')
            ->press('Save')
            ->seeInDatabase('users', $user->toArray())
            ->seePageIs('/users')
            ->see($user->name);
        $user = $user->where('email', '=', $user->email)->first();

        // Test editing
        $this->asAdmin()
            ->visit('/users')
            ->click($user->name)
            ->seePageIs('/users/' . $user->id)
            ->see($user->email)
            ->type('Barry Scott', '#name')
            ->press('Save')
            ->seePageIs('/users')
            ->seeInDatabase('users', ['id' => $user->id, 'name' => 'Barry Scott'])
            ->notSeeInDatabase('users', ['name' => $user->name]);
        $user = $user->find($user->id);

        // Test Deletion
        $this->asAdmin()
            ->visit('/users/' . $user->id)
            ->click('Delete user')
            ->see($user->name)
            ->press('Confirm')
            ->seePageIs('/users')
            ->notSeeInDatabase('users', ['name' => $user->name]);
    }

    public function testLogout()
    {
        $this->asAdmin()
            ->visit('/')
            ->seePageIs('/')
            ->visit('/logout')
            ->visit('/')
            ->seePageIs('/login');
    }

    /**
     * Perform a login
     * @param string $email
     * @param string $password
     * @return $this
     */
    private function login($email, $password)
    {
        return $this->visit('/login')
            ->type($email, '#email')
            ->type($password, '#password')
            ->press('Sign In');
    }
}
