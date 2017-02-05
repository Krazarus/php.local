<?php foreach ($commentsFirstLevel as $comment) : ?>
<div class="row">
    <div class="col-xs-1">
        <img src="https://www.proza.ru/photos/malenkajaskazka.jpg" class="media-object" style="width:45px">
    </div>
    <div class="col-xs-10">
        <h4 class="media-heading"><?= $comment->user_id; ?>
            <small><i>Posted on February 19, 2016</i></small>
        </h4>
        <p><?= $comment->text; ?></p>
    </div>
    <div class="col-xs-1">
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"><span class="glyphicon glyphicon-option-vertical"
                                                aria-hidden="true"></span>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Edit</a></li>
                <li><a href="#">Delete</a></li>
            </ul>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <form method="POST" action="/comment">
            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#demo">Reply</button>
            <div id="demo" class="collapse">
                <div class="form-group">
                    <textarea class="form-control" rows="3" name="text"></textarea>
                </div>
                <input type="hidden" name="parent_id" value="<?php echo $newCommentId; ?>">
                <input type="hidden" name="level" value="2">
                <button type="submit" class="btn btn-info ">Reply</button>
                <button type="submit" class="btn btn-default">Cancel</button>
                <br>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <a href="">View all replies</a>
    </div>
</div>
<br>
<?php endforeach; ?>

<?php require('views/index/_partials/comment-replice.view.php'); ?>
