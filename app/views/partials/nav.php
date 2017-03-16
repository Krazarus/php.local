<?php
if (!session_id()) {
    session_start();
}

//echo '<pre>';
//var_dump($array['first_name']);
//echo '</pre>';
////        die();

ini_set('error_reporting', 0);
ini_set('display_errors', 0);
$array = (array)$_SESSION['userDetails'];


//session_unset();
//var_dump($_SESSION);
?>


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li><a href="#">Link</a></li>

            </ul>


            <ul class="nav navbar-nav navbar-right">

                <?php
                if (empty($_SESSION['userDetails'])) {
                    echo "<li><a href=\"/login\">Sign In with Facebook</a></li>";
                    echo "<li><div class=\"alert alert-info alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span></button>
                                <strong>Warning! </strong>You are not logged in. You can't leave comments.
                            </div>
                          </li>";
                } else {
                    echo '<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                            aria-haspopup="true" aria-expanded="false">
                            ' . $array['first_name'] . ' ' . $array['last_name'] . ' <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/logout">logout</a></li>
                            </ul>
                        </li>';
                } ?>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>



