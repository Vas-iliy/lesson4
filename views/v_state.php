<div>
    <?foreach ($state as $st):?>
        <div>
            <h2><?=$st['title']?></h2>
            <p><?=$st['content']?></p>
        </div>
    <?endforeach;?>

    <hr>
    <a href="<?=BASE_URL?>redactorState/<?=$id?>">Редактировать</a>
    <a href="<?=BASE_URL?>deleteState/<?=$id?>">Удалить</a>
</div>