<?php get_header(); ?>

<div id="contents" class="content u-cf">

	<div id="main" class="content_main_wrap">

		<div class="content_main_inner">

		    <div class="c-section_wrap page_container">
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
				<h2 class="ttl"><?php the_title(); ?></h2>
				<p class="day"><?php echo get_the_date(); ?></p>
				<?php the_content(); ?>
				<?php endwhile; endif; ?>
		    </div>

			<div id="prev_next" class="clearfix">  
				<?php
				$prevpost = get_adjacent_post(false, '', true); //前の記事
				$nextpost = get_adjacent_post(false, '', false); //次の記事
				if( $prevpost or $nextpost ){ //前の記事、次の記事いずれか存在しているとき
				?>
				<?php
				 if ( $prevpost ) { //前の記事が存在しているとき
				  echo '<a href="' . get_permalink($prevpost->ID) . '" title="' . get_the_title($prevpost->ID) . '" id="prev" class="clearfix">
				        <div id="prev_title">PREV</div>
				        ' . get_the_post_thumbnail($prevpost->ID, array(100,100)) . '
				        <p>' . get_the_title($prevpost->ID) . '</p></a>';
				 } else { //前の記事が存在しないとき
				 echo  '<div id="prev_no"><a href="' .home_url('/'). '"><div id="prev_next_home"><i class="fa fa-home"></i>
				  </div></a></div>';
				 }
				 if ( $nextpost ) { //次の記事が存在しているとき
				  echo '<a href="' . get_permalink($nextpost->ID) . '" title="'. get_the_title($nextpost->ID) . '" id="next" class="clearfix">  
				        <div id="next_title">NEXT</div>
				        ' . get_the_post_thumbnail($nextpost->ID, array(100,100)) . '
						<p>'. get_the_title($nextpost->ID) . '</p></a>';
				 } else { //次の記事が存在しないとき
				 echo '<div id="next_no"><a href="' .home_url('/'). '"><div id="prev_next_home"><i class="fa fa-home"></i>
				 </div></a></div>';
				 }
				?>
				<?php } ?>
			</div>

		</div>

	</div>

	<?php get_sidebar(); ?>

</div>

    <?php get_footer(); ?>