<?php
/*
Template Name: LoA Request Form
*/

//wp_enqueue_script('underscore');
wp_enqueue_script('underscore-template-settings');
wp_enqueue_script('backbone');
wp_enqueue_script('form-loa', get_template_directory_uri().'/js/form-loa.js', array('jquery','underscore',/* 'underscore-template-settings', */'backbone-full', 'backbone-forms'),'',true);

get_header(); ?>

	<div id="primary" class="content-area">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'image', 'hero'); ?>
			
			<script id="tpl" type="text/template">
				<div id="student-info-wrap">
					<% studentInfoForm %>
				</div>
			</script>
			
			<main id="main-content" class="site-main" role="main">

				<?php get_template_part( 'content', 'page' ); ?>
				
				<div id="spinner" style="display:none;">
					<img src="//cdnjs.cloudflare.com/ajax/libs/galleriffic/2.0.1/css/loader.gif" />
					<span>Loading Student Data&hellip;</span>
				</div>

		<?php endwhile; // end of the loop. ?>
		
		<div id="form-container"></div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
