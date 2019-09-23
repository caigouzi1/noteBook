<?php

namespace tests\bench\commodity\items;

use tests\TestCase;

class SkuTest extends TestCase
{
    public function testAllFailure()
    {
        $this->visit('/bench/commodity/items/sku/all')->seeJson(['errCode' => -1]);
    }

    public function testAllSuccess()
    {
        $this->makeRequest('post', '/bench/commodity/items/sku/all')->seeJson(['errCode' => 0]);
        $this->makeRequest('post', '/bench/commodity/items/sku/all', [])->seeJson(['errCode' => 0]);
    }

    public function testSaveFailure()
    {
        $this->visit('/bench/commodity/items/sku/save')->seeJson(['errCode' => -1]);
        $this->makeRequest('post', '/bench/commodity/items/sku/save')->seeJson(['errCode' => -2]);
    }

    public function testDeleteFailure()
    {
        $this->visit('/bench/commodity/items/sku/delete')->seeJson(['errCode' => -1]);
        $this->makeRequest('post', '/bench/commodity/items/sku/delete')->seeJson(['errCode' => -2]);
    }
}
