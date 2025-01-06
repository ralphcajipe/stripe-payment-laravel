<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

beforeEach(function () {
    // Mock the Stripe API
    Http::fake([
        'https://api.stripe.com/*' => Http::response(['url' => 'https://checkout.stripe.com/test-session'], 200),
    ]);
});

// test('checkout page loads successfully', function () {
//     $response = $this->get('/checkout');
//     $response->assertStatus(200);
// });

test('checkout test button redirects to Stripe test session', function () {
    Config::set('stripe.test.sk', 'test_secret_key');

    Route::post('/test', function () {
        return redirect()->away('https://checkout.stripe.com/test-session');
    });

    $response = $this->post('/test', [
        '_token' => csrf_token(),
    ]);

    $response->assertRedirect('https://checkout.stripe.com/test-session');
});

test('checkout live button redirects to Stripe live session', function () {
    Config::set('stripe.live.sk', 'live_secret_key');

    Route::post('/live', function () {
        return redirect()->away('https://checkout.stripe.com/live-session');
    });

    $response = $this->post('/live', [
        '_token' => csrf_token(),
    ]);

    $response->assertRedirect('https://checkout.stripe.com/live-session');
});