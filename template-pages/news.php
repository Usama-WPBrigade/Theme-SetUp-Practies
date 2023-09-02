<?php
/**
 * Template Name: News Template
 * 
 */

get_header();
$args = array(
    'post_type' => 'news', 
    'posts_per_page' => -1,
);

$news_query = new WP_Query($args);

if ($news_query->have_posts()) :
    ?>
    <div class='news-main-wrapper'>
    <?php
    while ($news_query->have_posts()) : $news_query->the_post();
        the_title('<h2>', '</h2>');
        ?>
        <div class="post-description"><?php echo wp_kses_post( wp_trim_words(get_the_excerpt(), 15) ); ?></div>
        <?php

    endwhile;
    wp_reset_postdata();
    ?>
    </div>
<?php
else :
    echo 'No news posts found.';
endif;

get_footer();