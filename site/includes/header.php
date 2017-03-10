<?php
/**
 * Created by PhpStorm.
 * User: meetg
 * Date: 05-03-2017
 * Time: 01:02
 */
?>
<link href="css/elements.css" rel="stylesheet">
<script src="js/my_js.js"></script>

<div class="" id="abc">
    <!-- Popup Div Starts Here -->
    <div id="popupContact">
        <!-- Contact Us Form -->
        <form action="#" id="form1" method="post" name="form">
            <img id="close" src="images/3.png" onclick ="div_hide()">
            <h2>Calculator</h2>
            <hr>
            <strong>Enter Rooftop area</strong>
            <input id="name" name="name" placeholder="Enter in squaremeter" type="text"><br>
            <a href="calculator.php" id="submit1">Submit</a>
        </form>
    </div>
    <!-- Popup Div Ends Here -->
</div>

<div class="brand">Prashant Solar</div>
<div class="address-bar">Green Is The New Gold</div>



<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            <a class="navbar-brand" href="index.php">Prashant Solar</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="about.php">About</a>
                </li>
                <li>
                    <a href="blog.php">Projects</a>
                </li>
                <li>
                    <a href="#" onclick="popup()">Calculator</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

