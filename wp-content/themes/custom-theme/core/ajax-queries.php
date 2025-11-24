<?php
/**
 * Send message form to Telegram
 */
add_action('wp_ajax_sendToTelegram', 'sendToTelegram');
add_action('wp_ajax_nopriv_sendToTelegram', 'sendToTelegram');

function sendToTelegram(): void {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $chatId = get_field('chat-id', 'option');

    $botToken = '7183884989:AAHRcCVVmSaC9fmSrhGlcGW-Ak6cgtiViZk';
    $data = [
        'chat_id' => $chatId,
        'text' => "<b>Имя</b>: $name\n<b>Телефон</b>: $phone",
        'parse_mode' => 'HTML'
    ];

    $response = file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?".http_build_query($data));

    if ($response) {
        wp_send_json_success('Good');
    } else {
        wp_send_json_error('Error');
    }
}