<?php
    foreach($data as $row) { ?>
        <div>
            <h1><?php echo $row['title']; ?></h1>
            <p><?php echo $row['content']; ?></p>
            <a href="?posts/<?php echo $row['url']; ?>">Редактировать</a>
        </div>
<?php
    }
?>