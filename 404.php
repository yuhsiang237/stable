

<?php get_header(); ?>
<div class="content"  class="row">
   <div class="article col-md-9">
   		<!--頁首文章-->
     <article class="article-content">
<h1>404 找不到網頁</h1> <p>
抱歉，找不到您所要的頁面，或許已經移除、暫時關 閉或發生錯誤。
</p>
<p>
您可經由<a href="<?php bloginfo('url');?>"
title="回到首頁">回到首頁</a>或以下搜尋框:
</p>
<?php get_search_form(); ?> 
      </article>
	</div>
   		<!--./頁首文章-->
   <div class="sidebar col-md-3">
	<?php get_sidebar(); ?>
   </div>
</div>
<?php get_footer(); ?>

