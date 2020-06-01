<div>
    <?foreach ($state as $st):?>
        <div>
            <h2><?=$st['title']?></h2>
            <p><?=$st['content']?></p>
        </div>
    <?endforeach;?>

    <hr>
    <a href="index.php?c=redactorState&id=<?=$id?>">Редактировать</a>
    <a href="index.php?c=deleteState&id=<?=$id?>">Удалить</a>
</div>