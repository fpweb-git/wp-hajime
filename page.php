<?php
get_header();
while (have_posts()) {
    the_post(); ?>
    <main class="container">
        <?php
        $parentId = wp_get_post_parent_id(get_the_ID());
        if ($parentId) {
        ?>
            <nav>
                <ul>
                    <li><a href="<?php echo get_permalink($parentId) ?>"><small><?php echo get_the_title($parentId); ?></small></a></li>
                    <li>|</li>
                    <li><small><?php the_title(); ?></small></li>
                </ul>
            </nav>
        <?php } else {
        ?>
            <nav style="float: right;">
                <ul>
                    <small>
                        <?php wp_list_pages(array(
                            'title_li' => '',
                            'child_of' => get_the_ID(),
                            'sort_column' => 'menu_order'
                        )); ?>
                    </small>
                </ul>
            </nav>
        <?php }
        ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </main>
<?php }
get_footer();

?>