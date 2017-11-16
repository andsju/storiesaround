<!DOCTYPE html>
<?php if (!defined('VALID_INCL')) {
    die('Restricted access');
} ?>
<html lang="<?php echo $lang; ?>">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?php echo $page_title; ?></title>

    <?php
    //load css files
    foreach ($css_files as $css):
        echo "\n\t" . '<link rel="stylesheet" type="text/css" href="' . $css . '" />';
    endforeach;

    echo "\n";
    echo "\n\t" . '<script src="' . CMS_DIR . '/cms/libraries/jquery/jquery.min.js"></script>';
    echo "\n\t" . '<script src="https://www.google.com/jsapi"></script>';
    echo "\n\t" . '<link rel="icon" type="image/png" href="' . CMS_DIR . '/cms/css/images/favicon.ico" />';
    echo "\n";
    ?>

</head>

<body style="<?php echo $body_style; ?>" class="cms-edit">

