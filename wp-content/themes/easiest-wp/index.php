<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="page-header">
		<div class="header-area">
			<div class="panel-site-title">
				<p class="site-title"><a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a></p>
				<p class="site-subtitle"><?php bloginfo( 'description' ); ?></p>
			</div>

			<?php if ( has_nav_menu( 'global' ) ) : ?>
				<?php wp_nav_menu( array(
					'theme_location'  => 'global',
					'menu_id'         => 'global-menu',
					'container'       => 'nav',
					'container_class' => 'global-nav',
				) ); ?>
			<?php endif; ?>

		</div>
	</header>

	<div class="hero"></div>
	<div class="content-area has-side-col">
		<div class="main-column">
			<h1 class="box-heading box-heading-main-col">Blog</h1>
			<div class="box-content">

				<?php if ( have_posts() ) : ?>

					<ul class="archive">

						<?php while ( have_posts() ) : ?>

							<?php the_post(); ?>

							<li class="item-archive">
								<div class="time-and-thumb-archive">
									<time class="pub-date" datetime="<?php echo get_the_date( DATE_W3C ); ?>"><?php echo get_the_date(); ?></time>
									<?php if ( has_post_thumbnail() ) : ?>
										<p class="thumb thumb-archive"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'easiestwp-thumbnail' ); ?></a></p>
									<?php endif; ?>
								</div>
								<div class="data-archive">
									<p class="list-categories-archive"><?php the_category( ', ' ); ?></p>
									<h2 class="title-archive"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<p class="list-tags-archive"><?php the_tags(); ?></p>
								</div>
							</li>

						<?php endwhile; ?>

					</ul>

				<?php else : ?>

					<p>投稿がありません。</p>

				<?php endif; ?>

			</div>

			<?php the_posts_pagination( array(
				'prev_text' => '<img class="arrow" src="' . get_theme_file_uri() . '/images/arrow-left.png" srcset="' . get_theme_file_uri() . '/images/arrow-left@2x.png 2x" alt="前へ">',
				'next_text' => '<img class="arrow" src="' . get_theme_file_uri() . '/images/arrow-right.png" srcset="' . get_theme_file_uri() . '/images/arrow-right@2x.png 2x" alt="次へ">',
			) ); ?>

		</div>

		<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
			<ul class="side-column">
				<?php dynamic_sidebar( 'sidebar' ); ?>
			</ul>
		<?php endif; ?>

	</div>

	<footer class="page-footer">
		<div class="footer-widget-area">
			<?php if ( is_active_sidebar( 'footer' ) ) : ?>
				<ul class="footer-widgets">
					<?php dynamic_sidebar( 'footer' ); ?>
				</ul>
			<?php endif; ?>
			<div class="back-to-top">
				<a href="#"><img src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/arrow-up.png" srcset="<?php echo esc_url( get_theme_file_uri() ); ?>/images/arrow-up@2x.png 2x" alt="">TOP</a>
			</div>
		</div>
		<div class="copyright">
			<p>Copyright ©  Gijutsu-Hyohron Co., Ltd.</p>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>