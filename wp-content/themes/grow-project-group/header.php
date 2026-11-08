<?php /** Theme header. */ ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main">Skip to content</a>
<div class="internal-note">CONCEPT WEBSITE PREVIEW <span>Architectural designs, imagery and project details require approval before public release.</span></div>
<header class="site-header">
<a aria-label="Grow Project Group homepage" class="wordmark" href="<?php echo esc_url(home_url('/')); ?>"><strong>GROW</strong><small>PROJECT GROUP</small></a>
<button aria-expanded="false" aria-label="Toggle menu" class="nav-toggle" type="button">MENU <span>☰</span></button>
<nav aria-label="Main navigation" class="site-nav" id="site-navigation">
<?php foreach (array('developments'=>'Our developments','about'=>'About us','approach'=>'Our approach','lifestyle'=>'Lifestyle','team'=>'Project team','contact'=>'Enquire') as $slug=>$label): ?>
<a class="<?php echo $slug==='contact'?'nav-contact-button':''; ?>" href="<?php echo esc_url(home_url('/'.$slug.'/')); ?>"><?php echo esc_html($label); ?></a>
<?php endforeach; ?>
</nav></header>