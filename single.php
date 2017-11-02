<?php get_header(); ?>
<div class="content"  class="row">
   <div class="article col-md-9">
   		<!--頁首文章-->
		<?php while ( have_posts() ) : the_post(); ?>
		<article class="article-content">
		<h1 class="article-title"><a href="<?php
		the_permalink(); ?>"><?php the_title(); ?></a></h1>

		<div class="article-meta">
		<span><?php the_time('Y / n / j'); ?></span><span> &nbsp;</span>

		<span><?php the_category(' ,

		'); ?></span><span> </span>
		<span><?php the_tags('', ' , ',''); ?></span>
		</div>
		<?php the_content(); ?>
		<div class="clearfix"></div>
		</article>
		<?php endwhile; ?>
		<div id="comments">
			<?php comments_template(); ?>
		</div>
	</div>
   		<!--./頁首文章-->
   <div class="sidebar col-md-3">
	<?php get_sidebar(); ?>
   </div>
</div>
<?php get_footer(); ?>

