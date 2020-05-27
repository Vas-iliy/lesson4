<?php
    include_once ('model/article.php');
    $id = $_GET['id'];
    $oldState = selectStateContent($id);
    $params = ['title' => '', 'content' => ''];

    if ($_POST['title']) {
        $params['title'] = $_POST['title'];
        $params['content'] = $_POST['content'];
        $update = insertStateUpdate($params, $id);
        if ($update) {
            header('Location:index.php');
        }
    }

?>

<div>
    <?foreach ($oldState as $state):?>
        <form method="post">
            <input type="text" name="title" value="<?=$state['title']?>" required><br>
            <textarea name="content" id="" cols="30" rows="10"><?=$state['content']?></textarea><br>
            <input type="submit">
        </form>
    <?endforeach;?>
</div>
