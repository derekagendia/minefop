<!-- the loop -->

<?php if(have_posts() ): 
while(have_posts()): 
the_post();
?>
<!-- the loop -->

<!-- call the post category -->

        <h1 class="fw-bold"><?php the_title();?></h1>
        <p><?php echo get_the_date();?></p>
        <p><?php the_content();?></p>
        
    </div>
</div>


<?php endwhile; else: endif;?>

<!-- call the post category -->