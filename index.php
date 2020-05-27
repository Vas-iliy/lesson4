<?php
include_once ('model/article.php');
$states = selectState();

?>

<a href="newState.php">Добавить статью</a>
<hr>
<div>
    <?foreach ($states as $state):?>
    <div>
        <hr>
        <h2><?=$state['title']?></h2>
        <a href="state.php?id=<?=$state['id']?>">Узнать больше</a>
        <hr>
    </div>
    <?endforeach;?>
</div>
