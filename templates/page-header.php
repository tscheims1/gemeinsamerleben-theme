<div class="page-header">
  <h1>
    <?php 
    global $post;
	if(is_object($post))
		echo $post->post_title;
    ?>
  </h1>
</div>
