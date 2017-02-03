<?php require('views/partials/header.php'); ?>

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
            <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-info ">Reply</button>
            <button type="submit" class="btn btn-default">Cancel</button>
            <hr>
        </div>
    </div>


    <?php require('views/index/_partials/comment.view.php'); ?>

    <div class="row">
        <div class="col-xs-12 ">
            <button type="button" class="btn btn-default  btn-block">Show more</button>
        </div>
    </div>
    <br>
    <br>
</div>


<?php require('views/partials/footer.php'); ?>
