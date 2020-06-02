
<div>
    <?foreach ($state_cat as $value):?>
    <div>
    <a href="<?=BASE_URL?>state/<?=$value['id']?>" class="h3"><?=$value['title']?></a>
    </div>
    <?endforeach;?>
</div>