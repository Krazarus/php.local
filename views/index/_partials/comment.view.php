<?php function doOutputList($comments)
{ ?>
    <?php foreach ($comments as $comment) { ?>
    <div class="media">
        <?php if (isset($comment->childs)): ?>
            <div class="media-left">
                <a href="#">
                    <img src="https://www.proza.ru/photos/malenkajaskazka.jpg" class="media-object"
                         style="width:45px">
                </a>
            </div>
            <div class="media-body">
                <?php require('views/index/_partials/comment-body.view.php'); ?>
                <?php doOutputList($comment->childs) ?>
            </div>
        <?php else: ?>
            <div class="media-left">
                <a href="#">
                    <img src="https://www.proza.ru/photos/malenkajaskazka.jpg" class="media-object"
                         style="width:45px">
                </a>
            </div>
            <div class="media-body">
                <?php require('views/index/_partials/comment-body.view.php'); ?>
            </div>
        <?php endif; ?>
    </div>
<?php } ?>

<?php } ?>

<?php doOutputList($comments); ?>