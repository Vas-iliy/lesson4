<div>
    <div>
        <?foreach ($validate as $value):?>
            <p><?=$value?></p>
        <?endforeach;?>
    </div>
    <?foreach ($oldState as $state):?>
        <form method="post">
            <input type="text" name="title" value="<?=$state['title']?>" required><br>
            <textarea name="content" id="" cols="30" rows="10"><?=$state['content']?></textarea><br>
            <input type="submit">
        </form>
    <?endforeach;?>
</div>

