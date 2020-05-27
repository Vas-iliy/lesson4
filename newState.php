<?php
include_once ('model/article.php');
$params = ['title' => '', 'content' => ''];

if ($_POST['title']) {
    $params['title'] = $_POST['title'];
    $params['content'] = $_POST['content'];
    $state = insertState($params);
    header('Location:index.php');
}

?>

<div>
    <form method="post">
        <input type="text" name="title" required placeholder="Название статьи"><br>
        <textarea name="content" id="" cols="30" rows="10" required placeholder="Текст статьи"></textarea><br>
        <input type="submit">
    </form>
</div>
