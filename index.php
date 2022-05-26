<?php
get_header();
while (have_posts()) {
    the_post(); ?>
    <main class="container">
        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <?php the_content() ?>
        <hr>
    </main>
<?php }
get_footer();

?>
<!-- end -->