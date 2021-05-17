<!-- svgソース元 -->
<?php get_template_part('svg');?>
<footer>
    <div class="footer-top">
        <div class="follow-section">
            <div class="follow-section-left">
                <svg class="follow-icon"><use xlink:href="#type-followus"/></svg>
                <ul>
                    <li>
                        <a class="a-opacity" href="#">
                            <svg class="sns-icon"><use xlink:href="#facebook-icon"/></svg>
                        </a>
                    </li>
                    <li> 
                        <a class="a-opacity" href="#">
                            <svg class="sns-icon"><use xlink:href="#twitter-icon"/></svg>
                        </a>                       
                    </li>
                    <li>                        
                        <a class="a-opacity" href="#">
                            <svg class="sns-icon"><use xlink:href="#insta-icon"/></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="language-section">
            <div class="language-section-left ">
                <svg class="language-icon"><use xlink:href="#type-language"/></svg>
                <ul>
                    <li><a class="a-opacity black" href="#">ENGLISH</a></li>
                    <li><a class="a-opacity black" href="#">简体中文</a></li>
                </ul>
            </div>
            <ul class="language-section-right black">
                <li><a class="a-opacity white" href="#">利用規約</a></li>
                <li><a class="a-opacity white" href="#">個人情報について
                    <svg class="icon icon-blank"><use xlink:href="#icon-blank"></use></svg></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <ul>
            <a class="a-opacity" href="#">
                <svg class="shiseido-icon"><use xlink:href="#icon-shiseido"/></svg>
            </a>
            <li><a class="black a-opacity" href="#">資生堂グループ企業情報サイト</a></li>
        </ul>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>