<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div id="contents" class="content u-cf">

	<div id="main" class="content_main_wrap">

	<?php query_posts('post_type=post&paged='.$paged); ?>
	<ul class="post_wrap">
		<h2 class="c-sec_ttl"><?php the_title(); ?></h2>
		<!--ループここから-->
		<?php query_posts('showposts=10&paged='.$paged); ?>
		<?php if(have_posts()): ?>
		<?php while ( have_posts() ) : the_post(); ?>
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
		<!--記事がなかった場合に表示-->
		<?php endwhile; else: ?>
		<?php _e('記事が見つかりませんでした。'); ?>
		<?php endif; ?>
		<!--ページネーション-->
		<?php if (function_exists('responsive_pagination')) {
		  responsive_pagination($additional_loop->max_num_pages);
		} ?>
		<!--ループここまで-->
	</ul>

	</div>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>