<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/Doctor.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <title>top</title>
<?php wp_head(); ?>
</head>
<body>
<header class="white">
    <ul class="header-right">   
        <li><a class="a-opacity white" href="#"><span>ACCESS</span></a></li>
        <li><a class="a-opacity white" href="#"><span>MENU</span></a></li>
    </ul>
    <img src="<?php echo get_template_directory_uri(); ?>/asset/hanatsubaki-9.svg">
    <h1 class ="main-logo">
        <svg><use xlink:href="#icon-logo"></use></svg>
    </h1>
    <nav>
        <?php wp_nav_menu();?>
    </nav>
</header>
<main>
<!-- ニュース -->
    <section class="news">
        <div class="news-wrapper">
            <div class ="information">
                <ul>
                <?php $posts_info_array = get_posts( 'numberposts=6' );?>
                    <?php $count=0;?>
                    <?php foreach($posts_info_array as $post):?> 
                        <?php setup_postdata($post);?> 
                        <?php $count++;?>
                        <li>
                            <article>
                                <a class="a-opacity black" href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                    <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/asset/sts_thumbail_logo.jpg" 
                                                <?php if($count<=2):?>
                                                    width="180"
                                                    height="180"
                                                <?php else :?>
                                                    width="100"
                                                    height="100"
                                                <?php endif;?>
                                                alt="デフォルト画像"
                                            >
                                    <?php endif ; ?>
                                    <div
                                        <?php if($count<=2):?>
                                            <?php post_class( 'big-information');?>
                                        <?php else :?>
                                            <?php post_class('small-information');?>
                                        <?php endif;?>
                                    >
                                        <h3
                                            <?php if($count<=2):?>
                                                <?php post_class( 'big-time');?>
                                            <?php else :?>
                                                <?php post_class('small-time');?>
                                            <?php endif;?>
                                        >
                                            <time><?php the_time('Y.m.d'); ?></time>
                                        </h3>
                                        <p><?php the_title(); ?></p>
                                    </div>
                                </a>
                            </article>
                        </li>
                <?php 
                    endforeach;
                    wp_reset_query(); 
                ?>
                </ul>
                <a class="more-link gold" href="#">
                    <span>MORE</span>  
                    <svg class="icon icon-arrow"><use xlink:href="#icon-arrow"></use></svg>
                </a>
            </div>
            <a class="attention gold" href="<?php echo get_post_permalink(236);?>">※<?php echo get_post_field('post_title',236);?></a>
            <ul class="ul-advertisement">
                <li><a class="a-opacity" href="#"><img src="<?php echo get_template_directory_uri(); ?>/asset/advertising-1.png"></a></li>
                <li><a class="a-opacity" href="#"><img src="<?php echo get_template_directory_uri(); ?>/asset/advertising-2.png"></a></li>
                <li><a class="a-opacity" href="#"><img src="<?php echo get_template_directory_uri(); ?>/asset/advertising-3.png"></a></li>
                <li><a class="a-opacity" href="#"><img src="<?php echo get_template_directory_uri(); ?>/asset/advertising-4.png"></a></li>
            </ul>
        </div>
    </section>
<!-- サービス -->
    <section class="service">
        <h2>SERVICE</h2>
        <ul class="floor-ul">
            <li>
                <h3 class="gold">4F</h3>
                <div class="floor-article">                
                    <article>
                        <?php $page_id=get_page_by_path('personal-beauty-session');?>
                        <div class="article_floor">
                            <h4 class="gold"><?php echo get_the_title($page_id);?></h4>
                            <ul class="icon-ul">
                                <li class="lesson-icon white icon-space">LESSON</li>
                                <li class="counseling-icon white icon-space">COUNSELING</li>
                            </ul>
                            <p><?php echo get_post_field('post_content', $page_id);?></p>
                            <a class="detail-link gold" href="<?php echo get_post_permalink($page_id);?>">
                                <span>詳しく見る</span>
                                <svg class="icon icon-arrow"><use xlink:href="#icon-arrow"></use></svg>
                            </a>
                        </div>
                        <?php echo get_the_post_thumbnail($page_id); ?>
                    </article>
                </div>
                <div class="floor-article">                
                    <article>
                        <?php $page_id=get_page_by_path('shiseido-the-tables');?>
                        <div class="article_floor">
                            <h4 class="gold"><?php echo get_the_title($page_id);?></h4>
                            <!-- タグは無視 -->
                            <ul class="icon-ul">
                                <li class="event-icon white icon-space">EVENT & SEMINAR</li>
                                <li class="shopping-icon white icon-space">SHOPPING</li>
                                <li class="cafe-icon white icon-space">CAFE</li>
                            </ul>
                            <p><?php echo get_post_field('post_content', $page_id);?></p>
                            <a class="detail-link gold" href="<?php echo get_post_permalink($page_id);?>">
                                <span>詳しく見る</span>
                                <svg class="icon icon-arrow"><use xlink:href="#icon-arrow"></use></svg>
                            </a>
                        </div>
                        <?php echo get_the_post_thumbnail($page_id); ?>
                    </article>
                </div>
            </li>
            <li>
                <h3 class="gold">3F</h3>
                <div class="floor-article">                
                    <article>
                        <?php $page_id=get_page_by_path('beauty-boost-bar-photo-studio');?>
                        <div class="article_floor">
                            <h4 class="gold"><?php echo get_the_title($page_id);?></h4>
                            <!-- タグは無視 -->
                            <ul class="icon-ul">
                                <li class="hair-icon white icon-space">HAIR & MAKEUP</li>
                                <li class="photo-icon white icon-space">PHOTO STUDIO</li>
                            </ul>
                            <p><?php echo get_post_field('post_content', $page_id);?></p>
                            <a class="detail-link gold" href="<?php echo get_post_permalink($page_id);?>">
                                <span>詳しく見る</span>
                                <svg class="icon icon-arrow"><use xlink:href="#icon-arrow"></use></svg>
                            </a>
                        </div>
                        <?php echo get_the_post_thumbnail($page_id); ?>
                    </article>
                </div>
                <div class="floor-article">                
                    <article>
                        <?php $page_id=get_page_by_path('espace-cle-de-peau-beaute');?>
                        <div class="article_floor">
                            <h4 class="gold"><?php echo get_the_title($page_id);?></h4>
                            <!-- タグは無視 -->
                            <ul class="icon-ul">
                                <li class="esthetic-icon white icon-space">ESTHETIC</li>
                                <li class="counseling-icon white icon-space">COUNSELING</li>
                            </ul>
                            <p><?php echo get_post_field('post_content', $page_id);?></p>
                            <a class="detail-link gold" href="<?php echo get_post_permalink($page_id);?>">
                                <span>詳しく見る</span>
                                <svg class="icon icon-arrow"><use xlink:href="#icon-arrow"></use></svg>
                            </a>
                        </div>
                        <?php echo get_the_post_thumbnail($page_id); ?>
                    </article>
                </div>
            </li>
            <li>
                <h3 class="gold">2F</h3>
                <div class="floor-article">                
                    <article>
                        <?php $page_id=get_page_by_path('beauty-square-2');?>
                        <div class="article_floor">
                            <h4 class="gold"><?php echo get_the_title($page_id);?></h4>
                            <!-- タグは無視 -->
                            <ul class="icon-ul">
                                <li class="shopping-icon white icon-space">SHOPPING</li>
                                <li class="counseling-icon white icon-space">COUNSELING</li>
                            </ul>
                            <p><?php echo get_post_field('post_content', $page_id);?></p>
                            <a class="detail-link gold" href="<?php echo get_post_permalink($page_id);?>">
                                <span>詳しく見る</span>
                                <svg class="icon icon-arrow"><use xlink:href="#icon-arrow"></use></svg>
                            </a>
                        </div>
                        <?php echo get_the_post_thumbnail($page_id); ?>
                    </article>
                </div>
                <div class="floor-article">                
                    <article>
                        <?php $page_id=get_page_by_path('beauty-up-cabin');?>
                        <div class="article_floor">
                            <h4 class="gold"><?php echo get_the_title($page_id);?></h4>
                            <!-- タグは無視 -->
                            <ul class="icon-ul">
                                <li class="esthetic-icon white icon-space">ESTHETIC</li>
                                <li class="counseling-icon white icon-space">COUNSELING</li>
                            </ul>
                            <p><?php echo get_post_field('post_content', $page_id);?></p>
                            <a class="detail-link gold" href="<?php echo get_post_permalink($page_id);?>">
                                <span>詳しく見る</span>
                                <svg class="icon icon-arrow"><use xlink:href="#icon-arrow"></use></svg>
                            </a>
                        </div>
                        <?php echo get_the_post_thumbnail($page_id); ?>
                    </article>
                </div>
            </li>
            <li>
                <h3 class="gold">1F</h3>
                <div class="floor-article">                
                    <article>
                        <?php $page_id=get_page_by_path('beauty-square-1');?>
                        <div class="article_floor">
                            <h4 class="gold"><?php echo get_the_title($page_id);?></h4>
                            <!-- タグは無視 -->
                            <ul class="icon-ul">
                                <li class="shopping-icon white icon-space">SHOPPING</li>
                                <li class="counseling-icon white icon-space">COUNSELING</li>
                            </ul>
                            <p><?php echo get_post_field('post_content', $page_id);?></p>
                            <a class="detail-link gold" href="<?php echo get_post_permalink($page_id);?>">
                                <span>詳しく見る</span>
                                <svg class="icon icon-arrow"><use xlink:href="#icon-arrow"></use></svg>
                            </a>
                        </div>
                        <?php echo get_the_post_thumbnail($page_id); ?>
                    </article>
                </div>
                <div class="floor-article">                
                    <article>
                        <?php $page_id=get_page_by_path('styling-bar');?>
                        <div class="article_floor">
                            <h4 class="gold"><?php echo get_the_title($page_id);?></h4>
                            <!-- タグは無視 -->
                            <ul class="icon-ul">
                                <li class="hair-icon white icon-space">HAIR & MAKEUP</li>
                                <li class="counseling-icon white icon-space">COUNSELING</li>
                            </ul>
                            <p><?php echo get_post_field('post_content', $page_id);?></p>
                            <a class="detail-link gold" href="<?php echo get_post_permalink($page_id);?>">
                                <span>詳しく見る</span>
                                <svg class="icon icon-arrow"><use xlink:href="#icon-arrow"></use></svg>
                            </a>
                        </div>
                        <?php echo get_the_post_thumbnail($page_id); ?>
                    </article>
                </div>
            </li>
        </ul>
    </section>
</main>
<?php get_footer(); ?>