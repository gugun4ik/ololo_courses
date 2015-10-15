<form method="post" action="">
    <label>Редактировать заголовок</label>
    <input type="text" name="title" value="<?php echo $data['title']; ?>"/>
    <label>Редактировать ссылку</label>
    <input type="text" name="url" value="<?php echo $data['url']; ?>"/>
    <label>Редактировать контент</label>
    <textarea id="editor1" name="txt" cols="100" rows="20"><?php echo $data['content']; ?></textarea>
    <button type="submit">Сохранить</button>
</form>
<script type="text/javascript">
    var ckeditor1 = CKEDITOR.replace( 'editor1' );
    AjexFileManager.init({
            returnTo: 'ckeditor',
            editor: ckeditor1
    });
</script>
