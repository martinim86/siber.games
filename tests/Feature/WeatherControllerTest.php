<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Laravel\BrowserKitTesting\TestCase as BaseTestCase;
use Tests\TestCase;

class WeatherControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_get_index_return_ok(): void
    {
        $response = $this->get('/weather');

        $response->assertStatus(200);
    }
    public function test_post_request_ok()
    {
        $response = $this->post('/weather', [
            'title' => 'Orel',
        ]);
        $response->assertStatus(200);

    }
    public function test_post_name_ok()
    {
        $response = $this->post('/weather', [
            'title' => 'Orel',
        ]);
        $response->assertSee('Orel');

    }
    
}
