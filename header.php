<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
	<div class="header">
		<div class="logo">
		<?php 
			// test if file logo.png exists
		?>
			<img src="<?php get_theme_file_uri( 'assets/images/logo.png' ); ?>" />
		</div>
		<div class="tagline">
			<?php
				$tagline = get_bloginfo('description');
				if($tagline != '') {
					echo "<p>" . esc_html($tagline) . "</p>";
				}
			?>
		</div>
	</div>
