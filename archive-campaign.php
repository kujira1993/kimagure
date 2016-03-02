<?php
/*
Template Name: Archives Campaign
*/
get_header(); ?>

<div id="contents" class="content u-cf">

	<div id="main" class="content_main_wrap">

	<ul class="post_wrap">
		<h2 class="c-sec_ttl"><?php the_title(); ?></h2>
		<ul>
			<!--ループここから-->
			<?php
			$temp = $wp_query;
			$wp_query = null;
			$wp_query = new WP_Query();
			$wp_query->query('post_type=campaign' . '&paged=' . $paged . '&posts_per_page=10');
			?>
			<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>" class="post_wrap_item u-cf">
					<p class="post_thum"><?php if(has_post_thumbnail()): ?><?php the_post_thumbnail(); ?><?php endif; ?></p>
					<div class="post_txt_wrap">
						<h3 class="post_ttl"><?php the_title();?></h3>
						<p class="post_detail"><?php echo mb_substr(get_the_excerpt(),0, 40);?></p>
						<p class="post_day"><?php echo get_the_date(); ?></p>
					</div>
				</a>
			</li>
			<?php endwhile; ?>
			<!--ループここまで-->
			<?php if (function_exists('responsive_pagination')) {
			  responsive_pagination($additional_loop->max_num_pages);
			} ?>
		</ul>
		<!--ページネーション-->
		
		
	</ul>

	</div>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>