<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/Doctor.css">
    <?php if (is_single()):?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/news.css">
    <?php else:?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/floor.css">
    <?php endif;?>
    <title><?php the_title();?></title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="header-top">
        <h1><a href="<?echo get_the_permalink(73);?>"><svg><use xlink:href="#icon-logo"></use></svg></a></h1>
        <nav>
            <ul>
                <li><a class="a-opacity black" href="#">ACCESS</a></li>
                <li><a class="a-opacity black" href="#">MENU</a></li>
            </ul>
        </nav>
    </div>
    <div class="header-bottom">
        <nav>
            <ol>
                <li><a class="a-opacity black" href="<?echo get_the_permalink(73);?>">トップ</a></li>
                <?php if (is_single()):?>
                    <li><a class="a-opacity header-nav black" href="#">NEWS ＆ TOPICS</a></li>
                    <li class="header-nav black"><?php the_title();?></li>
                <?php else:?>
                    <li class="header-nav black"><?php the_title();?></li>
                <?php endif;?>
            </ol>
        </nav>
    </div>
</header>