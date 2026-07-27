<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SmokeTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_loads(): void
    {
        $response = $this->get('/en');
        $response->assertStatus(200);
        $response->assertSee('Maisara Solutions');
    }

    public function test_arabic_locale_loads(): void
    {
        $response = $this->get('/ar');
        $response->assertStatus(200);
    }

    public function test_contact_page_loads(): void
    {
        $response = $this->get('/en/contact');
        $response->assertStatus(200);
        $response->assertSee('Contact');
    }

    public function test_health_check_returns_json(): void
    {
        $response = $this->get('/health');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'status',
            'checks',
            'timestamp',
        ]);
    }

    public function test_contact_form_submission(): void
    {
        $response = $this->post('/en/contact', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'message' => 'Test message',
        ]);

        $response->assertSessionHas('status');
        $this->assertDatabaseHas('contact_submissions', [
            'email' => 'test@example.com',
            'name' => 'Test User',
        ]);
    }
}
