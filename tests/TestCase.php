<?php

namespace Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication,RefreshDatabase;

    const ENDPOINT = '/api/';

    public function setUp(): void
    {
        parent::setUp();
//        $this->seedData();
    }

    protected function seedData()
    {
        $this->seed('DatabaseSeeder');
    }

    protected function makePost($route, $data)
    {
        return $this->post($route, $data, ['Accept' => 'application/json']);
    }

    protected function makeGet($route)
    {
        return $this->post($route, ['Accept' => 'application/json']);
    }
}
