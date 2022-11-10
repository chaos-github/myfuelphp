<div class="blog-post">
    <h2 class="blog-post-title"><?php echo $post->title;?></h2>
    <p class="blog-post-meta"><?php echo $post->create_date;?></p>
    <?php echo $post->body;?>
    <br><br>
    <a class="btn btn-default" href="/posts/view/<?php echo $post->id; ?>">view More</a>
</div><!-- /.blog-post -->