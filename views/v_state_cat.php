
<div>
    <?foreach ($state_cat as $value):?>
    <div>
    <a href="index.php?c=state&id=<?=$value['id']?>" class="h3"><?=$value['title']?></a>
    </div>
    <?endforeach;?>
</div>