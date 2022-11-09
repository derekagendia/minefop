<!-- the loop -->

<?php if(have_posts() ): 
while(have_posts()): 
the_post();
?>
<!-- the loop -->


<!-- call the post category -->
<div class="col-md-4">
<div class="card border-0 shadow mb-3">
<?php if(has_post_thumbnail()):?>
    <img src="<?php the_post_thumbnail_url();?>" class="img-fluid">
<?php endif;?>
    <div class="card-body">
        <h6 class="fw-bold"><?php the_title();?></h6>
       
        <a href="<?php the_permalink(); ?>" class="btn btn-link">Lire l'article</a>
    </div>
</div>
</div>



<?php endwhile; else: endif;?>

<!-- call the post category -->