
<?php function doOutputList($comments)
{ ?>
    <?php foreach ($comments as $comment) { ?>
    <div class="media">
        <?php if (isset($comment->childs)): ?>
            <div class="media-left" style="width:245px">

            </div>
            <div class="media-body">
                <?php require('app/views/index/_partials/comment-body.view.php'); ?>
                <?php doOutputList($comment->childs) ?>
            </div>
        <?php else: ?>
            <div class="media-left" style="width:245px">

            </div>
            <div class="media-body">
                <?php require('app/views/index/_partials/comment-body.view.php'); ?>
            </div>
        <?php endif; ?>
    </div>
<?php } ?>

<?php } ?>

<?php doOutputList($comments); ?>


