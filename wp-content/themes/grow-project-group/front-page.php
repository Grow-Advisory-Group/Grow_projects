<?php get_header(); ?>
<?php if (gpg_has_editor_content(get_queried_object_id())) : ?>
<main id="main" class="gpg-editor-content"><div class="container section"><?php while (have_posts()) : the_post(); the_content(); endwhile; ?></div></main>
<?php else : ?>
<?php get_template_part('templates/content/home'); ?>
<?php endif; ?>
<?php get_footer(); ?>