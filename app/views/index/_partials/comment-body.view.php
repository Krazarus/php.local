<div class="row">
    <div class="col-xs-10">
        <h4 class="media-heading">
            <?= $comment->first_name , ' ' ,$comment->last_name; ?>
            <small><i><?= $comment->created_at; ?></i></small>
        </h4>
        <p><?= $comment->text; ?></p>
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
                <button type="submit" class="btn btn-info " <?php if(empty($_SESSION)){ ?> disabled <?php   } ?>>Reply</button>
                <br>
            </div>
        </form>
    </div>
</div>

