<?php

declare(strict_types=1);

(new Post())->createPost($_POST['text']);
(new Bot($_ENV['TOKEN']))->sendPost($_POST['text']);
header('Location: /home');
exit();