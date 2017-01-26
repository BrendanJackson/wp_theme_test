<html>
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>

</head>
<body>

	<header role='banner' class="site_header">

		<a href="<?php echo home_url(); ?>" class="logo"></a>
		<h1>
			<a href="<?php echo home_url(); ?>">
				<?php bloginfo('name'); ?>
			</a>
		</h1>
		<p> 
			<a href="<?php echo home_url(); ?>">
				<?php bloginfo('description'); ?>
			</a>
		</p>

	</header>

	<!-- Posts Area -->
	<main class="posts_area">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post" role="article" itemscope itemtype="http://schema.org/Article">
			<h1 class="title">
				<a href="<?php the_permalink() ?>">
					<?php the_title(); ?>
				</a>
			</h1>
			<div class="post_meta">
				<time class="post_date" datetime="<?php the_time('Y-m-d'); ?>" itemprop="datePublished">
					<?php the_time(__('F j, Y')); ?>
				</time>
			</div>
			<div class="postcontent_list" itemprop="articleBody" data-type-cleanup="true">

				<?php the_content('Read More &raquo;'); ?>

			</div>
		</article>

		<?php endwhile; endif; ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-6">BS TEST</div>
			<div class="col-sm-12 col-md-6">BS TEST</div>
		</div>
	</div>

	<div class="nav_links">
		<?php posts_nav_link(); ?>
	</div>


</main>

<!-- Footer -->
<footer class="site_footer">
	Copyright <?php echo date('Y'); ?> My Company.
</footer>

</div>

<!-- End blog display -->

<?php wp_footer(); ?>
</body>
</html>