<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/Doctor.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/contact.css">
    <title><?php the_title();?></title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="header-top">
        <h1><a href="<?echo get_the_permalink(73);?>"><svg><use xlink:href="#icon-logo"></use></svg></a></h1>
        <h2>お問い合わせフォーム</h2>
    </div>
</header>
<div class="contents-wrapper">
<?php the_content();?>
</div>
<?php get_template_part('svg');?>
<?php wp_footer(); ?>
</body>
</html>

