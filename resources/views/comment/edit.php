<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit comment</title>
</head>
<body>
<h1>Edit comment</h1>
<form action="<?php echo url('comment/update',$comment->id) ?>" method="post">
    <?php echo csrf_field() ?>
    <input type="hidden" name="_method" value="put">
    <input value="<?php echo $comment->post_id ?>" type="number" name="post_id" min="1" required placeholder="Enter post id here">
    <br>
    <br>
    <textarea name="comment" id="" cols="30" rows="10" placeholder="Enter comment here"><?php echo $comment->comment ?></textarea>
    <br>
    <br>
    <button>Update</button>
</form>
</body>
</html>