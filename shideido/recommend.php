<aside class="recommend">
    <h3 class="gold">RECOMMEND</h3>
    <article>
        <ul class="ul-1">
            <?php
                $args = array (
                    'post_type'      => 'post', // 投稿タイプ
                    'posts_per_page' => 2, // 取得する投稿数
                ); 
                $myposts = get_posts($args);
                foreach($myposts as $post):
                    setup_postdata($post);
            ?>
            <li class="li-1 a-opacity">
                <a class="white" href="<?php the_permalink(); ?>">
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
    <div class="hash-tag_recommend">
    </div>
</aside> 