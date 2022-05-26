<?php get_header(); ?>
<main class="container">
    <h2>All articles</h2>
    <?php
    while (have_posts()) {
        the_post(); ?>
        <article>
            <header>
                <h3 style="margin-bottom: 0px;"><?php the_title() ?></h3>
                <a style="float: right;" href="<?php the_permalink() ?>"><button role="button" class="outline">Read</button></a>
            </header>
            <?php the_content() ?>
        </article>
    <?php }
    ?>
</main>
<?php get_footer(); ?>
<!-- end -->