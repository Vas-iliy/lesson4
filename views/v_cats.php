<h2>Категории</h2>
<hr>
<div>
    <?foreach ($cats as $cat):?>
        <div>
            <a href="<?=BASE_URL?>cats/<?=$cat['id_cat']?>" style="color: #1e7e34"><?=$cat['title_cat']?></a>
            <hr>
        </div>
    <?endforeach;?>
</div>