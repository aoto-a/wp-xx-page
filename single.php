<?php get_header(); ?>

<main>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article>
        <div class="post-contents">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <div class="post-thumb">
                <?php if(has_post_thumbnail()): the_post_thumbnail(); else: ?><!-- アイキャッチ画像を表示 -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/post-thumb.jpg" alt=""><!-- アイキャッチ画像が登録されていないとき用の画像（imagesフォルダに用意しておく） -->
                <?php endif; ?>
            </div>
            <?php the_content(); ?>
    </article>
    <?php endwhile; else: ?>
        <p>投稿はありません。</p>
    <?php endif; ?>
</main>

<?php get_footer();//誤動作を防ぐため最終行には閉じタグを書かない