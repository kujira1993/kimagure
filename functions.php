<?php 
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'rsd_link');

	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(300, 300, true);

	//レスポンシブなページネーションを作成する
	function responsive_pagination($pages = '', $range = 4){
	  $showitems = ($range * 2)+1;
	 
	  global $paged;
	  if(empty($paged)) $paged = 1;
	 
	  //ページ情報の取得
	  if($pages == '') {
	    global $wp_query;
	    $pages = $wp_query->max_num_pages;
	    if(!$pages){
	      $pages = 1;
	    }
	  }
	 
	  if(1 != $pages) {
	    echo '<ul class="pagination" role="menubar" aria-label="Pagination">';
	    //先頭へ
	    echo '<li class="first"><a href="'.get_pagenum_link(1).'"><span>First</span></a></li>';
	    //1つ戻る
	    echo '<li class="previous"><a href="'.get_pagenum_link($paged - 1).'"><span>Previous</span></a></li>';
	    //番号つきページ送りボタン
	    for ($i=1; $i <= $pages; $i++)     {
	      if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))       {
	        echo ($paged == $i)? '<li class="current"><a>'.$i.'</a></li>':'<li><a href="'.get_pagenum_link($i).'" class="inactive" >'.$i.'</a></li>';
	      }
	    }
	    //1つ進む
	    echo '<li class="next"><a href="'.get_pagenum_link($paged + 1).'"><span>Next</span></a></li>';
	    //最後尾へ
	    echo '<li class="last"><a href="'.get_pagenum_link($pages).'"><span>Last</span></a></li>';
	    echo '</ul>';
	  }
	}
 ?>