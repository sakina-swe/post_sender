<?php
$post = new Post();
$posts = $post->getAllPosts();
?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Posts</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($posts as $post): ?>
        <tr>
            <th scope="row"><?php echo $post['id'] ?></th>
            <td><?php echo $post['post'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>