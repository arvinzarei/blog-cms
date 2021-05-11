<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>

<section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">Show Comment</h1>
</section>
<section class="row my-3">
    <section class="col-12">
        <h1 class="h4 border-bottom"><?php echo $comment['id']; ?></h1>
        <p class="text-secondary border-bottom"><?php echo $comment['user_id']; ?></p>
        <p class="text-secondary border-bottom"><?php echo $comment['article_id']; ?></p>
        <p class="text-secondary border-bottom"><?php echo $comment['comment']; ?></p>
        <p class="text-secondary border-bottom"><?php echo $comment['status']; ?></p>
        <p class="text-secondary border-bottom"><?php echo $comment['created_at']; ?></p>
        <?php if($comment['status']  == 'seen') {?>
            <a role="button" class="btn btn-sm btn-success text-white" href="http://localhost/admin-panel/comment/approved/<?php echo $comment['id']; ?>">click to approved</a>
        <?php } else{?>
            <a role="button" class="btn btn-sm btn-warning text-white" href="http://localhost/admin-panel/comment/approved/<?php echo $comment['id']; ?>">click to not approved</a>
        <?php } ?>
    </section>
</section>

<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>
