<a href="index.php?c=newState">Добавить статью</a>
<hr>
<div>
    <?foreach ($states as $state):?>
        <div>
            <hr>
            <h2><?=$state['title']?></h2>
            <a href="index.php?c=state&id=<?=$state['id']?>">Узнать больше</a>
            <hr>
        </div>
    <?endforeach;?>
</div>