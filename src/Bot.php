<?php

declare(strict_types=1);

use GuzzleHttp\Client;

class Bot
{
    private string $api;
    public PDO $pdo;
    public Client $http;

    public function __construct(string $token)
    {
        $this->api = "https://api.telegram.org/bot{$token}/";
        $this->http = new Client(['base_uri' => $this->api]);

        $this->pdo  = DB::connect();
    }


    public function handleStartCommand(int $chatId, string $first_name): void
    {
        $this->http->post('sendMessage', [
            'form_params' => [
                'chat_id' => $chatId,
                'text' => '✨Assalamu alaykum, ' . $first_name . '.' . "\n" . 'Welcome to your new bookish adventure📚! Congratulations on taking this step into the vast universe of stories, knowledge and imagination!',
            ]
        ]);
    }

    public function sendPost($post): void
    {
        $postClass = new Post();
        $users = $postClass->getChatId();
        foreach ($users as $user):
            $this->http->post('sendMessage', [
                'form_params' => [
                    'chat_id' => $user['chat_id'],
                    'text' => $post,
                ]
            ]);
        endforeach;
    }
}