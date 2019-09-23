<?php

namespace tests/dock\users;

use tests\TestCase;

class AddressTest extends TestCase
{
    public function testAllFailure()
    {
        $this->visit('/dock/users/addr/all')->seeJson(['errCode' => -1]);
    }

    public function testAllSuccess()
    {
        $this->makeRequest('post', '/dock/users/addr/all')->seeJson(['errCode' => 0]);
        $this->makeRequest('post', '/dock/users/addr/all', [])->seeJson(['errCode' => 0]);
    }

    public function testSaveFailure()
    {
        $this->visit('/dock/users/addr/save')->seeJson(['errCode' => -1]);
        $this->makeRequest('post', '/dock/users/addr/save')->seeJson(['errCode' => -2]);
    }

    public function testDeleteFailure()
    {
        $this->visit('/dock/users/addr/delete')->seeJson(['errCode' => -1]);
        $this->makeRequest('post', '/dock/users/addr/delete')->seeJson(['errCode' => -2]);
    }
}
