<?php
/**
 * Stripe Configuration (Secure Version)
 */

require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Stripe keys (loaded from .env)
define('STRIPE_PUBLISHABLE_KEY', $_ENV['STRIPE_PUBLISHABLE_KEY'] ?? 'pk_test_mock_key_for_development');
define('STRIPE_SECRET_KEY', $_ENV['STRIPE_SECRET_KEY'] ?? 'sk_test_mock_key_for_development');

// Stripe settings
define('STRIPE_CURRENCY', $_ENV['STRIPE_CURRENCY'] ?? 'usd');
define('STRIPE_COUNTRY', $_ENV['STRIPE_COUNTRY'] ?? 'US');

// Test card numbers for validation
$STRIPE_TEST_CARDS = [
    'valid' => [
        '4242424242424242', // Visa
        '5555555555554444', // Mastercard
        '378282246310005',  // American Express
    ],
    'decline' => [
        '4000000000000002' => 'Your card was declined.',
        '4000000000009995' => 'Your card has insufficient funds.',
        '4000000000009987' => 'Your card was reported as lost or stolen.',
    ]
];
?>
