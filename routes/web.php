<?php
Router::post("/post", fn() => require "controllers/createPost.php");
Router::get("/", fn() => require "view/home.php");