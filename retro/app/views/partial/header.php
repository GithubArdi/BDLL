<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php if(isset($title)) { echo $title." |"; } ?> Retro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo base_url('css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo base_url('css/themify-icons.css') ?>" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo base_url('css/bootstrap.css') ?>" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo base_url('css/theme-navy.css') ?>" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo base_url('css/custom.css') ?>" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Oswald:300,400,600,700" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/font-oswald.css') ?>" rel="stylesheet" type="text/css">
    </head>

    <body class="scroll-assist">

<?php view('partial/navbar') ?>