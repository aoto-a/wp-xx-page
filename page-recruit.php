<?php get_header(); ?>

<main>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article>
        <div class="post-contents">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </article>
    <?php endwhile; else: ?>
    <?php endif; ?>
</main>

<?php get_footer();//誤動作を防ぐため最終行には閉じタグを書かない