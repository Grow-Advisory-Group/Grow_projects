<?php get_header(); ?>
<?php while(have_posts()):the_post(); ?>
<?php
$slug=sanitize_file_name(get_post_field('post_name',get_the_ID()));
$path=get_template_directory().'/templates/content/'.$slug.'.php';
if(file_exists($path)) { include $path; }
else { echo '<main id="main" class="container section"><h1>'.esc_html(get_the_title()).'</h1>'; the_content(); echo '</main>'; }
?>
<?php endwhile; ?>
<?php get_footer(); ?>