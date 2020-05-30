<div>
    <form method="post">
        <div>
            <?foreach ($validate as $value):?>
                <p><?=$value?></p>
            <?endforeach;?>
        </div>
        <input type="text" name="title" value="<?=$params['title']?>"  placeholder="Название статьи"><br>
        <textarea name="content" id="" cols="30" rows="10" placeholder="Текст статьи"><?=$params['content']?></textarea><br>
        <input type="submit">
    </form>
</div>