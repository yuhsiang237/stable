<?php
if ( post_password_required() )
return; ?>

<h3 class="comment-title"><?php comments_number('沒有迴響', '迴響 (1)', '迴響 (%)' );?></h3>
<?php if ( have_comments() ) : ?>
   <ol class="comment-list">
      <?php
wp_list_comments('type=comment&callback=displaycomments'); ?>
   </ol>
   <div class="clearfix"></div>
   <div class="pagenavi">
<?php paginate_comments_links('prev_text=Prev Comments&next_text=Next Comments');?>
</div>
<?php else : ?>
	<?php if ( comments_open() ) : ?> <p>本文還沒有迴響，快來搶頭香!</p>
<?php else : ?>
<p class="nocomments">本文不開放迴響。</p>
   <?php endif; ?>
<?php endif; ?>
<?php comment_form("comment_notes_after=&comment_notes_befo re="); ?>
