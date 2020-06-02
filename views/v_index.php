
<div>
    <?foreach ($states as $state):?>
        <div>
            <hr>
            <h2><?=$state['title']?></h2>
            <a href="<?=BASE_URL?>state/<?=$state['id']?>">Узнать больше</a>
            <hr>
        </div>
    <?endforeach;?>
</div>