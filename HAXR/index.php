<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>	
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
<?php wp_head(); ?>
</head>

<body>
	
	<h1>h a x r - o u s</h1>
	
	<section>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<article>
				
				<h2>
					
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
						
						<?php the_title(); ?></a>
					
				</h2>
				
				<?php the_content(); ?>
				
			</article>
			
		<?php endwhile; endif; ?>
		
	</section>
	
</body>

</html>
