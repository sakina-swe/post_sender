<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Post sender</title>
</head>
<body>
<form action="/post" method="post">
    <div class="container">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Create a Post</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="text" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>

    </div>
</form>

<?php require "view/post_list.php"?>
</body>
</html>
