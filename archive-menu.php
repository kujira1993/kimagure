<?php
/*
Template Name: menu
*/
get_header(); ?>

<div id="contents" class="content u-cf">
	<div id="main" class="content_main_wrap">
		<div class="menu_wrap">
			<h2 class="menu_wrap_ttl">LUNCH time menu <span class="menu_wrap_ttl_time">11:00 〜 15:00（LO 14:30）</span></h2>
			<ul class="menu_list_wrap u-cf">
				<!--ループここから-->
				<?php
				$temp = $wp_query;
				$wp_query = null;
				$wp_query = new WP_Query();
				$wp_query->query('post_type=lunch menu' . '&paged=' . $paged . '&posts_per_page=10');
				?>
				<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
					<li class="u-cf">
						<p class="menu_img"><?php if(has_post_thumbnail()): ?><?php the_post_thumbnail(); ?><?php endif; ?></p>
						<p class="menu_catch_copy"><?php echo get_post_meta($post->ID , 'catch_copy' ,true); ?></p>
						<p class="menu_name"><?php the_title();?></p>
						<p class="menu_price">¥<?php echo get_post_meta($post->ID , 'price' ,true); ?></p>
						<p class="menu_set_price">セット：¥<?php echo get_post_meta($post->ID , 'set_price' ,true); ?></p>
					</li>
				<?php endwhile; ?>
				<!--ループここまで-->
			</ul>

			<h2 class="menu_wrap_bar_ttl">Bar time menu <span class="menu_wrap_ttl_time">
			木・金・土　18:00 〜 23:00（LO 22:30）<br>（月・火・水 パーティー予約のみ受付）</span></h2>
			<ul class="menu_list_wrap u-cf">
				<li class="u-cf">
					
				</li>
			</ul>
		</div>
	</div>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>