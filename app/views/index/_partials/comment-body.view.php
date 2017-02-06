<div class="row">
    <div class="col-xs-10">
        <h4 class="media-heading">
            <?= $comment->first_name , ' ' ,$comment->last_name; ?>
            <small><i><?= $comment->created_at; ?></i></small>
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
    <div class="col-xs-10">
        <form method="POST" action="/comment">
            <input type="hidden" name="parent_id" value="<?= $comment->id ?>">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#reply_form_<?= $comment->id ?>">Reply
            </button>
            <div id="reply_form_<?= $comment->id ?>" class="collapse">
                <div class="form-group">
                    <textarea class="form-control" rows="3" name="text"></textarea>
                </div>
                <button type="submit" class="btn btn-info ">Reply</button>
                <button type="submit" class="btn btn-default">Cancel</button>
                <br>
            </div>
        </form>
    </div>
</div>