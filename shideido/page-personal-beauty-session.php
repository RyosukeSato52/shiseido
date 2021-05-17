<?php get_header();?>
<main>
    <section class="main-top">
        <div class="main-contents-wrapper">
            <div class="floor-icon">
                <p class="gold">4F</p>
                <svg class="icon-floor-4"><use xlink:href="#icon-floor-4"></use></svg>
            </div>
            <h2 class="gold"><?php the_title();?></h2>
            <h3 class="gold">個室での美容レッスン</h3>
            <ul class="ul-icon">
                <li class="lesson-icon white">LESSON</li>
                <li class="conseling-icon white">COUNSELING</li>
            </ul>
            <p>豊富な知識を持つビューティカウンセラーによる<br class="br-812px">個室での美容レッスン。<br>
                機器を使った分析をもとに、<br class="br-812px">美しくなるためのテクニックを学びながら、<br>
                身につけることができます。</p>
            <img src="<?php echo get_template_directory_uri(); ?>/asset/floor-section/floor-4.jpg">
            <ul class="ul-news">
                <?php
                    $args = array (
                        'post_type'      => 'post', // 投稿タイプ
                        'posts_per_page' => 2, // 取得する投稿数
                    ); 
                    $myposts = get_posts($args);
                    foreach($myposts as $post):
                        setup_postdata($post);
                ?>
                <li><time><?php the_time('Y.m.d'); ?></time><a class="a-opacity black"href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <p class="gold">VIEW MORE<svg class="icon-down"><use xlink:href="#icon-down"></use></svg></p>
                <?php
                    endforeach;
                    wp_reset_query(); 
                ?>
            </ul>
            <ul class="ul-advertisement">
                <li><a class="a-opacity" href="#"><img src="<?php echo get_template_directory_uri(); ?>/asset/floor-section/2018-03-13_08-23-07_943024.png"></a></li>
                <li><a class="a-opacity" href="#"><img src="<?php echo get_template_directory_uri(); ?>/asset/floor-section/2018-02-26_00-55-15_115268.png"></a></li>
            </ul>
            <nav><ul class="ul-nav_main-top">
                <li><a class="gold" href="#">
                    パーツメイクアップレッスン
                    <svg class="icon-down"><use xlink:href="#icon-down"></use></svg></a>
                </li>
                <li><a class="gold" href="#">
                    ゴールデンバランスメイクアップレッスン
                    <svg class="icon-down"><use xlink:href="#icon-down"></use></svg></a>
                </li>
                <li><a class="gold" href="#">
                    ゴールデンバランス&<br>パーソナルカラーメイクアップレッスン
                    <svg class="icon-down"><use xlink:href="#icon-down"></use></svg></a>
                </li>
                <li><a class="gold" href="#">
                    アディショナルカラーメイクアップレッスン
                    <svg class="icon-down"><use xlink:href="#icon-down"></use></svg></a>
                </li>
                <li><a class="gold" href="#">
                    イメージメイクアップレッスン
                    <svg class="icon-down"><use xlink:href="#icon-down"></use></svg></a>
                </li>
                <li><a class="gold" href="#">
                    アドバンシングメイクアップレッスン
                    <svg class="icon-down"><use xlink:href="#icon-down"></use></svg></a>
                </li>
            </ul></nav>
        </div>
    </section>
    <section class="makeup-manu">
        <h3 class="gold">メイクアップメニュー</h3>
        <article>
            <div class="main-contents-wrapper">
                <ul class="ul-article">
                    <dl>
                        <dt><h4 class="gold">パーツメイクアップレッスン</h4></dt>
                        <dd><h5>パーツメイクを極めたいかたの集中レッスン</h5></dd>
                        <dd class="p-article">完璧なベースメイクのための「肌づくり＆ほお」印象を決める「眉」、魅力度アップのための「目もと」、品格アップの「口もと」から、コースを選択してください。完成度を高めたいポイントや苦手を克服したいパーツがあるかたにおすすめの集中レッスンです。</dd>
                        <dd class="price-article">12,000円<span>（税抜）</span></dd>
                        <dd><span>レッスン時間 約60分(所要時間約80分)</span></dd>
                    </dl>
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/floor-section/makeup-menu-parts.jpg">
                </ul>
                <a class="link-lesson gold a-opacity" href="#">レッスンの流れ</a>
                <div class="reservation">
                    <div class="reservation-wrapper">
                        <h4 class="gold">ご予約</h4>
                        <p class="text-1-reserve gold">当日から一ヶ月先までのご予約を<br class="br-812px">お電話にて承ります。</p>
                        <p class="text-2-reserve">ご予約前に必ずご一読ください。</p>
                        <a class="a-detail gold" href="#">
                            <span>パーソナルビューティー<br class="br-812px">セッションのご予約について</span>
                            <svg class="icon-arrow"><use xlink:href="#icon-arrow"></use></svg>
                        </a>
                        <ul>
                            <li>※予約時間より15分以上遅れた場合は、キャンセル扱いとなります。</li>
                            <li>※回線が混雑する場合がございます。つながらない場合はしばらく経ってからおかけ直しください。</li>
                        </ul>
                        <p class="tel-reserve">Tel 03-3571-1482</p>
                        <p class="time-reserve">受付時間 11:00-20:00</p>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <div class="main-contents-wrapper">
                <ul class="ul-article">
                    <dl>
                        <dt><h4 class="gold">パーツメイクアップレッスン</h4></dt>
                        <dd><h5>パーツメイクを極めたいかたの集中レッスン</h5></dd>
                        <dd class="p-article">完璧なベースメイクのための「肌づくり＆ほお」印象を決める「眉」、魅力度アップのための「目もと」、品格アップの「口もと」から、コースを選択してください。完成度を高めたいポイントや苦手を克服したいパーツがあるかたにおすすめの集中レッスンです。</dd>
                        <dd class="price-article">12,000円<span>（税抜）</span></dd>
                        <dd><span>レッスン時間 約60分(所要時間約80分)</span></dd>
                    </dl>
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/floor-section/makeup-menu-parts.jpg">
                </ul>
                <a class="link-lesson gold a-opacity" href="#">レッスンの流れ</a>
                <div class="reservation">
                    <div class="reservation-wrappar">
                        <h4 class="gold">ご予約</h4>
                        <p class="text-1-reserve gold">当日から一ヶ月先までのご予約をお電話にて承ります。</p>
                        <p class="text-2-reserve">ご予約前に必ずご一読ください。</p>
                        <a class="a-detail gold" href="#">
                            <span>パーソナルビューティー<br class="br-812px">セッションのご予約について</span>
                            <svg class="icon-arrow"><use xlink:href="#icon-arrow"></use></svg>
                        </a>
                        <ul>
                            <li>※予約時間より15分以上遅れた場合は、キャンセル扱いとなります。</li>
                            <li>※回線が混雑する場合がございます。つながらない場合はしばらく経ってからおかけ直しください。</li>
                        </ul>
                        <p class="tel-reserve">Tel 03-3571-1482</p>
                        <p class="time-reserve">受付時間 11:00-20:00</p>
                        <a class="a-web white a-opacity" href="#">
                            <span>WEB予約</span>
                            <svg class="web-arrow icon-arrow"><use xlink:href="#icon-arrow"></use></svg>
                        </a>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <div class="main-contents-wrapper">
                <ul class="ul-article">
                    <dl>
                        <dt><h4 class="gold">パーツメイクアップレッスン</h4></dt>
                        <dd><h5>パーツメイクを極めたいかたの集中レッスン</h5></dd>
                        <dd class="p-article">完璧なベースメイクのための「肌づくり＆ほお」印象を決める「眉」、魅力度アップのための「目もと」、品格アップの「口もと」から、コースを選択してください。完成度を高めたいポイントや苦手を克服したいパーツがあるかたにおすすめの集中レッスンです。</dd>
                        <dd class="price-article">12,000円<span>（税抜）</span></dd>
                        <dd><span>レッスン時間 約60分(所要時間約80分)</span></dd>
                    </dl>
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/floor-section/makeup-menu-parts.jpg">
                </ul>
                <a class="link-lesson gold a-opacity" href="#">レッスンの流れ</a>
                <div class="reservation">
                    <div class="reservation-wrappar">
                        <h4 class="gold">ご予約</h4>
                        <p class="text-1-reserve gold">当日から一ヶ月先までのご予約を<br class="br-812px">お電話にて承ります。</p>
                        <p class="text-2-reserve">ご予約前に必ずご一読ください。</p>
                        <a class="a-detail gold" href="#">
                            <span>パーソナルビューティー<br class="br-812px">セッションのご予約について</span>
                            <svg class="icon-arrow"><use xlink:href="#icon-arrow"></use></svg>
                        </a>
                        <ul>
                            <li>※予約時間より15分以上遅れた場合は、キャンセル扱いとなります。</li>
                            <li>※回線が混雑する場合がございます。つながらない場合はしばらく経ってからおかけ直しください。</li>
                        </ul>
                        <p class="tel-reserve">Tel 03-3571-1482</p>
                        <p class="time-reserve">受付時間 11:00-20:00</p>
                        <a class="a-web white a-opacity" href="#">
                            <span>WEB予約</span>
                            <svg class="web-arrow icon-arrow"><use xlink:href="#icon-arrow"></use></svg>
                        </a>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <div class="main-contents-wrapper">
                <ul class="ul-article">
                    <dl>
                        <dt><h4 class="gold">パーツメイクアップレッスン</h4></dt>
                        <dd><h5>パーツメイクを極めたいかたの集中レッスン</h5></dd>
                        <dd class="p-article">完璧なベースメイクのための「肌づくり＆ほお」印象を決める「眉」、魅力度アップのための「目もと」、品格アップの「口もと」から、コースを選択してください。完成度を高めたいポイントや苦手を克服したいパーツがあるかたにおすすめの集中レッスンです。</dd>
                        <dd class="price-article">12,000円<span>（税抜）</span></dd>
                        <dd><span>レッスン時間 約60分(所要時間約80分)</span></dd>
                    </dl>
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/floor-section/makeup-menu-parts.jpg">
                </ul>
                <a class="link-lesson gold a-opacity" href="#">レッスンの流れ</a>
                <div class="reservation">
                    <div class="reservation-wrappar">
                        <h4 class="gold">ご予約</h4>
                        <p class="text-1-reserve gold">当日から一ヶ月先までのご予約を<br class="br-812px">お電話にて承ります。</p>
                        <p class="text-2-reserve">ご予約前に必ずご一読ください。</p>
                        <a class="a-detail gold" href="#">
                            <span>パーソナルビューティー<br class="br-812px">セッションのご予約について</span>
                            <svg class="icon-arrow"><use xlink:href="#icon-arrow"></use></svg>
                        </a>
                        <ul>
                            <li>※予約時間より15分以上遅れた場合は、キャンセル扱いとなります。</li>
                            <li>※回線が混雑する場合がございます。つながらない場合はしばらく経ってからおかけ直しください。</li>
                        </ul>
                        <p class="tel-reserve">Tel 03-3571-1482</p>
                        <p class="time-reserve">受付時間 11:00-20:00</p>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <div class="main-contents-wrapper">
                <ul class="ul-article">
                    <dl>
                        <dt><h4 class="gold">パーツメイクアップレッスン</h4></dt>
                        <dd><h5>パーツメイクを極めたいかたの集中レッスン</h5></dd>
                        <dd class="p-article">完璧なベースメイクのための「肌づくり＆ほお」印象を決める「眉」、魅力度アップのための「目もと」、品格アップの「口もと」から、コースを選択してください。完成度を高めたいポイントや苦手を克服したいパーツがあるかたにおすすめの集中レッスンです。</dd>
                        <dd class="price-article">12,000円<span>（税抜）</span></dd>
                        <dd><span>レッスン時間 約60分(所要時間約80分)</span></dd>
                    </dl>
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/floor-section/makeup-menu-parts.jpg">
                </ul>
                <a class="link-lesson gold a-opacity" href="#">レッスンの流れ</a>
                <div class="reservation">
                    <div class="reservation-wrappar">
                        <h4 class="gold">ご予約</h4>
                        <p class="text-1-reserve gold">当日から一ヶ月先までのご予約を<br class="br-812px">お電話にて承ります。</p>
                        <p class="text-2-reserve">ご予約前に必ずご一読ください。</p>
                        <a class="a-detail gold" href="#">
                            <span><br class="br-812px">セッションのご予約について</span>
                            <svg class="icon-arrow"><use xlink:href="#icon-arrow"></use></svg>
                        </a>
                        <ul>
                            <li>※予約時間より15分以上遅れた場合は、キャンセル扱いとなります。</li>
                            <li>※回線が混雑する場合がございます。つながらない場合はしばらく経ってからおかけ直しください。</li>
                        </ul>
                        <p class="tel-reserve">Tel 03-3571-1482</p>
                        <p class="time-reserve">受付時間 11:00-20:00</p>
                        <a class="a-web white a-opacity" href="#">
                            <span>WEB予約</span>
                            <svg class="web-arrow icon-arrow"><use xlink:href="#icon-arrow"></use></svg>
                        </a>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <div class="main-contents-wrapper">
                <ul class="ul-article">
                    <dl>
                        <dt><h4 class="gold">パーツメイクアップレッスン</h4></dt>
                        <dd><h5>パーツメイクを極めたいかたの集中レッスン</h5></dd>
                        <dd class="p-article">完璧なベースメイクのための「肌づくり＆ほお」印象を決める「眉」、魅力度アップのための「目もと」、品格アップの「口もと」から、コースを選択してください。完成度を高めたいポイントや苦手を克服したいパーツがあるかたにおすすめの集中レッスンです。</dd>
                        <dd class="price-article">12,000円<span>（税抜）</span></dd>
                        <dd><span>レッスン時間 約60分(所要時間約80分)</span></dd>
                    </dl>
                </ul>
                <div class="reservation">
                    <div class="reservation-wrappar">
                        <h4 class="gold">ご予約</h4>
                        <p class="text-1-reserve gold">当日から一ヶ月先までのご予約を<br class="br-812px">お電話にて承ります。</p>
                        <p class="text-2-reserve">ご予約前に必ずご一読ください。</p>
                        <a class="a-detail gold" href="#">
                            <span>パーソナルビューティー<br class="br-812px">セッションのご予約について</span>
                            <svg class="icon-arrow"><use xlink:href="#icon-arrow"></use></svg>
                        </a>
                        <ul>
                            <li>※予約時間より15分以上遅れた場合は、キャンセル扱いとなります。</li>
                            <li>※回線が混雑する場合がございます。つながらない場合はしばらく経ってからおかけ直しください。</li>
                        </ul>
                        <p class="tel-reserve">Tel 03-3571-1482</p>
                        <p class="time-reserve">受付時間 11:00-20:00</p>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <?php get_template_part('recommend');?>
</main>
<?php get_footer();?>