<?php
get_header();
while (have_posts()) {
    the_post(); ?>
    <main class="container">
        <h2><?php the_title() ?></h2>
        <?php the_content() ?>
    </main>
<?php }
get_footer();

?>