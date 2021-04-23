<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Question01RegistrationInformation;

class Question01RegistrationInformationTest extends TestCase
{
    /**
     *
     */
    public function test_callMeGetTest()
    {
        $response = $this->get('/api/call/me');
        $return_contents = $response->content();
        $encoded_return_contents = json_decode($return_contents, true);

        $this->assertEquals($encoded_return_contents['message'], Question01RegistrationInformation::MESSAGE___CALL_ME_GET);
    }

    /**
     *
     */
    public function test_callMePostTest()
    {
        $response = $this->post('/api/call/me');
        $return_contents = $response->content();
        $encoded_return_contents = json_decode($return_contents, true);

        $this->assertEquals($encoded_return_contents['message'], Question01RegistrationInformation::MESSAGE___CALL_ME_POST);
    }

    /**
     *
     */
    public function test_challenge_usersGetTest()
    {
        $response = $this->get('/api/challenge_users');
        $return_contents = $response->content();
        $encoded_return_contents = json_decode($return_contents, true);
        $this->assertEquals($encoded_return_contents['message'], Question01RegistrationInformation::MESSAGE___CHALLENGE_USERS_GET);
    }

    /**
     *
     */
    public function test_challenge_usersPost_NameBlankTest()
    {
        $response = $this->post('/api/challenge_users');
        $return_contents = $response->content();
        $encoded_return_contents = json_decode($return_contents, true);
        $this->assertEquals($encoded_return_contents['message'], Question01RegistrationInformation::MESSAGE___CHALLENGE_USERS_POST___NAME_BLANK);
    }

    /**
     *
     */
    public function test_challenge_usersPost_EmailBlankTest()
    {
        $response = $this->post('/api/challenge_users', [
            'name' => 'test_user'
        ]);
        $return_contents = $response->content();
        $encoded_return_contents = json_decode($return_contents, true);
        $this->assertEquals($encoded_return_contents['message'], Question01RegistrationInformation::MESSAGE___CHALLENGE_USERS_POST___EMAIL_BLANK );
    }

    /**
     *
     */
    public function test_challenge_usersPost_EmailAlreadyUsedTest()
    {
        $response = $this->post('/api/challenge_users', [
            'name'  => 'test_user',
            'email' => 'foo@gmail.com'
        ]);
        $return_contents = $response->content();
        $encoded_return_contents = json_decode($return_contents, true);
        $this->assertEquals($encoded_return_contents['message'], Question01RegistrationInformation::MESSAGE___CHALLENGE_USERS_POST___EMAIL_ALREADY_USED );
    }

    /**
     *
     */
    public function test_challenge_usersPost_EmailInvalidInputTest()
    {
        $response = $this->post('/api/challenge_users', [
            'name'  => 'test_user',
            'email' => 'foo'
        ]);
        $return_contents = $response->content();
        $encoded_return_contents = json_decode($return_contents, true);
        $this->assertEquals($encoded_return_contents['message'], Question01RegistrationInformation::MESSAGE___CHALLENGE_USERS_POST___EMAIL_INVALID );
    }

}
