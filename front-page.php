<?php get_header(); ?>

<main>
    <!-- メインループ -->
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article>
        <div class="post-contents">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </article>
    <?php endwhile; else: ?>
    <?php endif; ?>

    <!-- サブループ -->
    <div class="home-news-wrap">
        <div class="home-news-container">
            <div class="home-news-col">
                <h2>News</h2>
                <div class="home-news">
                    <div class="home-news-box">
                    <?php $args = array(
                        'orderby' => 'date',
                        'order' => 'DESC',
                        );
                    $new_query = new WP_Query($args);
                    if($new_query->have_posts()): while($new_query->have_posts()): $new_query->the_post(); ?>
                    <!-- 表示させるコンテンツ -->
                    <dl>
                        <dt><time><?php echo get_the_date(); ?></time></dt>
                        <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
                    </dl>
                    <!-- ここまでコンテンツ -->
                    <?php endwhile; wp_reset_postdata(); else: ?>
                        <p>お知らせはありません</p>
                    <?php endif; ?>
                    </div>
                    <div class="home-news-btn">
                        <a href="<?php echo esc_url(home_url('/news')); ?>">MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer();//誤動作を防ぐため最終行には閉じタグを書かない