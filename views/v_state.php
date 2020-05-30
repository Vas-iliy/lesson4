<div>
    <?foreach ($state as $st):?>
        <div>
            <h2><?=$st['title']?></h2>
            <p><?=$st['content']?></p>
        </div>
    <?endforeach;?>

    <hr>
    <a href="redactorState.php?id=<?=$id?>">Редактировать</a>
    <a href="deleteState.php?id=<?=$id?>">Удалить</a>
    <hr>
    <a href="index.php">На главную</a>
</div>