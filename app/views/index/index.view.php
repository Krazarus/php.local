<?php require('app/views/partials/header.php'); ?>


<div class="container">

    <div class="row">
        <div class="col-xs-12">
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem corporis dicta dignissimos dolore dolores
                enim,
                exercitationem expedita, id labore libero molestias nisi officia provident sint, suscipit totam velit
                vitae
                voluptatibus.</p>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <form method="POST" action="/comment">
                <div class="form-group">
                    <textarea class="form-control" rows="3" name="text"></textarea>
                </div>
                <input type="hidden" name="parent_id" value="0">
                <input type="hidden" name="level" value="1">

                <button type="submit" class="btn btn-info "<?php if(empty($_SESSION)){ ?> disabled <?php   } ?>>Reply</button>
                <hr>
            </form>
        </div>
    </div>


    <?php require('app/views/index/_partials/comment.view.php'); ?>



    <br>
    <br>

</div>


<?php require('app/views/partials/footer.php'); ?>
