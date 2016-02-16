<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head(); ?>
</head>

<body>

    <div class="container">
        <header class="row">
            <div class="twelve columns">
                    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                    <p><?php bloginfo('description'); ?></p>
            </div>
        </header>
        <!------ END OF HEADER - BEGIN SECTION CONTENT ----->