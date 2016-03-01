<?php get_header(); ?>

<div id="contents" class="content u-cf">
	<ul class="content_main_visual bxslider">
		<li><img src="<?php echo get_template_directory_uri(); ?>/images/kimagure_main_visual_01.png" width="100%" height="auto"></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/images/kimagure_main_visual_02.png" width="100%" height="auto" id="img2"></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/images/kimagure_main_visual_03.png" width="100%" height="auto" id="img3"></li>
	</ul>

	<div id="bx-pager">
		<a data-slide-index="0" href=""><img src="<?php echo get_template_directory_uri(); ?>/images/kimagure_main_visual_01.png" /></a>
		<a data-slide-index="1" href=""><img src="<?php echo get_template_directory_uri(); ?>/images/kimagure_main_visual_02.png" /></a>
		<a data-slide-index="2" href=""><img src="<?php echo get_template_directory_uri(); ?>/images/kimagure_main_visual_03.png" /></a>
	</div>

	<div id="main" class="content_main_wrap">
		<div class="content_main_inner">
			<div class="c-section_wrap u-cf">
				<h2 class="c-sec_ttl">きまぐれ蔵人からのお知らせ</h2>
				<ul class="post_wrap">
					<!--ループここから-->
		            <?php query_posts('showposts=5'); ?>
		            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
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
		            <!--ループここまで-->
				</ul>
				<a href="<?php the_permalink(); ?>/post-archive/" class="go_archive_button">> お知らせをすべて見る</a>
			</div>

			<div class="c-section_wrap u-cf">
				<h2 class="c-sec_ttl">きまぐれ蔵人のキャンペーン</h2>
				<div class="campaign_wrap">
					<ul>
						<p class="campaign_day">2011.11.11</p>
						<p class="campaign_detail">ここまでで１０文字。ここまでで１０文字。ここまでで１０文字。ここまでで１０文字。ここまでで１０文字。ここまでで１０文字。ここまでで１０文字。ここまでで１０文字。ここまでで１０文字。ここまでで１０文字。</p>
						<a href="<?php the_permalink(); ?>/campaign-archive/" class="campaign_catch"><img src="<?php echo get_template_directory_uri(); ?>/images/campaign_img_01.jpg" alt=""></a>
					</ul>
				</div>

				<a href="<?php the_permalink(); ?>/campaign-archive/" class="go_archive_button">> キャンペーンをすべて見る</a>
			</div>
		</div>
	</div>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>