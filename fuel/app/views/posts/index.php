<?php foreach($posts as $post) : ?>
<div class="blog-post">
    <h2 class="blog-post-title"><?php echo $post->title;?></h2>
    <p class="blog-post-meta"><?php echo $post->create_date;?></p>
    <?php echo Str::truncate($post->body,100);?>
    <br><br>
    <a class="btn btn-default" href="/posts/view/<?php echo $post->id; ?>">view More</a>
</div><!-- /.blog-post -->

<?php  endforeach; ?>