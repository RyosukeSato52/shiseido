<?php get_header(); ?>
<main>
    <section class="news">
        <h2 class="gold">NEWS & TOPICS</h2>
        <div class="contents-wrapper">
            <article class="article_news">
                <p class="time-title"><time><?php the_time('Y.m.d'); ?></time></p>
                <dl>
                    <dt><h3><?php the_title(); ?></h3></dt>
                    <dd class="hash-tag">
                    <?php
                        $i=0;
                        $j=0;
                        $k=0;
                        $categories=get_the_category();
                        foreach($categories as $category):
                            $name=$category->cat_name;
                            $parent = $category->parent;
                    ?>
                        <?php if($parent==19&&$i==0):?>
                            <ul>
                            <?php foreach($categories as $cat):
                                $parent = $cat->parent;
                                if($parent==19):
                                ?>
                                <li><a class="a-opacity gold" href="#"><?php echo $cat->cat_name;?></a></li>
                            <?php
                                $i++; 
                                endif;
                            endforeach;
                            ?>
                            </ul>
                        <?php elseif($parent==18&&$j==0):?>
                            <ul>
                            <?php foreach($categories as $cat):
                                $parent = $cat->parent;
                                if($parent==18):
                                ?>
                                <li><a class="a-opacity gold" href="#"><?php echo $cat->cat_name;?></a></li>
                            <?php
                                $j++; 
                                endif;
                            endforeach;
                                ?>
                            </ul>
                        <?php elseif($parent==20&&$k==0):?>
                            <ul>
                            <?php foreach($categories as $cat):
                                $parent = $cat->parent;
                                if($parent==20):
                                ?>
                                <li><a class="a-opacity gold" href="#"><?php echo $cat->cat_name;?></a></li>
                            <?php 
                                $k++;
                                endif;
                            endforeach;?>
                            </ul>
                        <?php endif;
                        endforeach;?>
                    </dd>
                    <dd>
                        <?php the_content();?>
                    </dd>
                </dl>
                <footer>
                    <ul class="share-items">
                        <svg class="share-icon"><use xlink:href="#type-share"></use></svg>
                        <li><a class="a-opacity" href="#"><svg><use xlink:href="#icon-share-fb"></use></svg></a></li>
                        <li><a class="a-opacity" href="#"><svg><use xlink:href="#icon-share-tw"></use></svg></a></li>
                        <li><a class="a-opacity" href="#"><svg><use xlink:href="#icon-share-line"></use></svg></a></li>
                    </ul>
                    <div class="hash-tag hash-tag_news">
                    <?php
                        $i=0;
                        $j=0;
                        $k=0;
                        $categories=get_the_category();
                        foreach($categories as $category):
                            $name=$category->cat_name;
                            $parent = $category->parent;
                    ?>
                        <?php if($parent==19&&$i==0):?>
                            <ul>
                            <?php foreach($categories as $cat):
                                $parent = $cat->parent;
                                if($parent==19):
                                ?>
                                <li><a class="a-opacity gold" href="#"><?php echo $cat->cat_name;?></a></li>
                            <?php
                                $i++; 
                                endif;
                            endforeach;
                            ?>
                            </ul>
                        <?php elseif($parent==18&&$j==0):?>
                            <ul>
                            <?php foreach($categories as $cat):
                                $parent = $cat->parent;
                                if($parent==18):
                                ?>
                                <li><a class="a-opacity gold" href="#"><?php echo $cat->cat_name;?></a></li>
                            <?php
                                $j++; 
                                endif;
                            endforeach;
                                ?>
                            </ul>
                        <?php elseif($parent==20&&$k==0):?>
                            <ul>
                            <?php foreach($categories as $cat):
                                $parent = $cat->parent;
                                if($parent==20):
                                ?>
                                <li><a class="a-opacity gold" href="#"><?php echo $cat->cat_name;?></a></li>
                            <?php 
                                $k++;
                                endif;
                            endforeach;?>
                            </ul>
                        <?php endif;
                        endforeach;?>
                    </div>
                    <a class="back-link gold" href="#">NEWS&TOPICSトップへ戻る</a>
                </footer>
            </article>
            <aside class="relation">
                <h3 class="gold">関連記事</h3>
                <article class="article_relation">
                    <ul class="ul-1">
                        <?php
                            $args = array (
                                'post_type'      => 'post', 
                                'posts_per_page' => 4, 
                            ); 
                            $myposts = get_posts($args);
                            foreach($myposts as $post):
                                setup_postdata($post);
                        ?>
                        <li class="li-1 a-opacity">
                            <a class="black" href="<?php the_permalink(); ?>">
                                <ul class="ul-2">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/asset/sts_thumbail_logo.jpg" width="100" height="100" alt="デフォルト画像" />
                                        <?php endif ; ?>
                                    <li>
                                        <div>
                                            <h4><time><?php the_time('Y.m.d'); ?></time></h4>
                                            <p><?php the_title(); ?></p>
                                        </div>
                                    </li>
                                </ul>
                            </a>
                        </li>
                        <?php
                            endforeach;
                            wp_reset_query(); 
                        ?>
                    </ul>
                </article>
            </aside>
        </div>
    </section>
    <?php get_template_part('recommend'); ?>
</main>
<?php get_footer(); ?>