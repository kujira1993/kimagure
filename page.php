<?php
/**
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage きまぐれ蔵人
 */

get_header(); ?>

<div id="contents" class="content u-cf">

	<div id="main" class="content_main_wrap">

		<div class="content_main_inner">

		    <div class="c-section_wrap page_container">
				<div class="main-wrap">
					<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>
		    </div>

		</div>

	</div>

	<?php get_sidebar(); ?>

</div>

    <?php get_footer(); ?>