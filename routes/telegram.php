<?php

declare(strict_types=1);

$bot = new Bot($_ENV['TOKEN']);
$post = new Post();

$updates = json_decode(file_get_contents('php://input'));

if(isset($updates->message)) {
    $message = $updates->message;
    $chat_id = $message->chat->id;
    $text = $message->text;
    $first_name = $message->from->first_name;
    if ($text == "/start") {
        $bot->handleStartCommand($chat_id, $first_name);
        $post->createUser($chat_id);
    }
}