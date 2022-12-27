<?php get_header(); ?>

<main>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article>
        <h2><?php the_category(); ?></h2>
        <div class="post-contents">
            <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <time><?php echo get_the_date(); ?> <?php echo get_the_time('A h:i'); ?></time>
            <div class="post-excerpt">
                <?php the_excerpt(); ?>
            </div>
    </article>
    <?php endwhile; else: ?>
        <p>投稿はありません。</p>
    <?php endif; ?>
</main>

<?php get_footer();//誤動作を防ぐため最終行には閉じタグを書かない