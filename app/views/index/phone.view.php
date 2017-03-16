<?php require('app/views/partials/header.php'); ?>


<div class="container" xmlns="http://www.w3.org/1999/html">


    <?php
    //   die(var_dump($phones))

    ?>


    <div class="row">
        <div class="col-xs-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Phone number</th>
                    <th>Type</th>
                    <th>Comment</th>
                </tr>
                </thead>
                <tbody>

                    <?php foreach ($phones as $phone) : ?>
                        <tr>
                            <td><?= $phone->first_name ?></td>
                            <td><?= $phone->last_name ?></td>
                            <td>
                                <div class="form-group">
                                    <input type="number" class="form-control" id="number"
                                           placeholder="<?= $phone->number ?>">
                                </div>
                            </td>
                            <td><select class="form-control" type="type">
                                    <option selected disabled><?= $phone->type ?></option>
                                    <option>mobile</option>
                                    <option>home</option>
                                    <option>nope</option>
                                </select></td>
                            <td><input type="comment" class="form-control" placeholder="<?= $phone->comment ?>"></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
            <div class="clearfix">
                <button type="button" class="btn btn-success pull-right">Update info</button>
            </div>

            <hr>
        </div>
    </div>

</div>


<?php require('app/views/partials/footer.php'); ?>
