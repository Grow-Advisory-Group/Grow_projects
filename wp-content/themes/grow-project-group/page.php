<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<?php if (gpg_has_editor_content(get_the_ID())) : ?>
<main id="main" class="gpg-editor-content"><div class="container section"><?php the_content(); ?></div></main>
<?php else : ?>
<?php
$slug = sanitize_file_name(get_post_field('post_name', get_the_ID()));
$path = get_template_directory() . '/templates/content/' . $slug . '.php';
if (file_exists($path)) { include $path; }
else { echo '<main id="main" class="container section"><h1>' . esc_html(get_the_title()) . '</h1></main>'; }
?>
<?php endif; ?>
<?php endwhile; ?>
<?php get_footer(); ?>