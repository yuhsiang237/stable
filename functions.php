<?php
register_nav_menus(
array(
'primary-menu' => __( '主選單' )
)
);



function wp_pagenavi() {
global $wp_query;
$max = $wp_query->max_num_pages;
if ( !$current = get_query_var('paged') ) $current =
1;
$args['base'] = str_replace(999999999, '%#%',
get_pagenum_link(999999999));
$args['total'] = $max;
$args['current'] = $current;
$args['prev_text'] = '<-Prev';
$args['next_text'] = 'Next->';
if ( $max > 1 ){ $pages = '<div
class="wp-pagenavi"><span class="pages">共 ' . $max . '
頁 &nbsp;&nbsp;</span>';
echo $pages . paginate_links($args) . '</div>';}
}
if ( function_exists('register_sidebar') ){
register_sidebar(array(
'name' => '側邊欄',
'id' => 'sidebar',
'description' => '顯示於每個網頁的右方。',
'before_widget' => '<section id="%1$s"

class="sidebar-right">',

'after_widget' => '</section>',
'before_title' => '<h1 class="sidebar-title">',
'after_title' => '</h1>'
));
}


function displaycomments($comment, $args, $depth){  $GLOBALS['comment'] = $comment;?>
<li class="comment-list-box">
	<div class="comment-author">
      <?php echo get_avatar( $comment, 40 ); ?>
   </div>
   <div class="comment-fn">
<?php printf(__('<span class="fn">%s</span>'), get_comment_author_link()) ?>
   </div>
   <div class="comment-meta">
<?php printf(__('%1$s @ %2$s'), get_comment_date(), get_comment_time()) ?> <?php edit_comment_link() ?>
</div>
<?php if ($comment->comment_approved == '0') : ?>
<em class="comment-approved">你的迴響正在審核中。 </em>
<?php endif;?>
<?php comment_text() ?>
<?php comment_reply_link(array_merge( $args,
array('depth' => $depth, 'max_depth' =>
$args['max_depth']))) ?>
<?php }
