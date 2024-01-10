<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo self::title; ?></title>
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL; ?>css/style.css">
    </head>
    <body>
        <header>
            <div class="center">
                <div class="logo"><h2>DankiCode</h2></div>
                <?php
                    foreach ($this->menu_items as $value) {
                        echo '<a href="'.INCLUDE_PATH.strtolower($value).'">' . $value . '</a>';
                    }
                ?>
            </div> <!-- center -->
        </header>
