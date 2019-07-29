<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo site_url(); ?>">Katalog</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li>
                <a href="<?php echo site_url(); ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo site_url('pages/profil'); ?>">Profil</a>
            </li>
            <li>
                <a href="<?php echo site_url('pages/kontak'); ?>">Kontak</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <?php 
        if (!$this->ion_auth->logged_in())
        {
            ?>
            <li>
                <a href="<?php echo site_url('login'); ?>">Login</a>
            </li>
            <?php
        } else {
            ?>
            <li>
                <a href="<?php echo site_url('pages/dashboard'); ?>">Dashboard</a>
            </li>
            <li>
                <a href="<?php echo site_url('login/logout'); ?>">Logout</a>
            </li>
            <?php
        }
        ?>            
        </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>