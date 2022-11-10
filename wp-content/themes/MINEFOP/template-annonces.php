<?php
/* 

Template Name: annonces

*/

get_header();

?>

<ul class="navbar-nav ms-auto mt-2 mt-lg-0">
    <li class="nav-item">
        <a class="btn btn-warning  me-1" href="#">Connexion</a>
    </li>
    <li class="nav-item">
        <a class="btn btn-warning " href="#">S’enregistré</a>
    </li>
</ul>
</div>
</div>
</nav>

<section class="py-3 bg-secondary" style="background-image:url('<?php bloginfo('template_directory');?>/assets/img/convention-gicam-cfps_1000x500_20210917162731 1.png'); background-repeat:no-repeat; background-size:cover; height:35vh;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-white fw-bold text-center">Actualite</h1>
        </div>
    </div>
</div>
  </section>

<section class="py-3 mt-3">
<div class="container">
	<div class="row">
        
         <!-- the loop -->
		<?php

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'Annonces',
    'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );
  
if ( $arr_posts->have_posts() ) :
  
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <!-- the loop -->

<!-- post section -->
        <div class="col-md-4">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="card">
            <img src=" <?php
            if ( has_post_thumbnail() ) :
                the_post_thumbnail();
            endif;
            ?>" class="card-img-top">
                <div class="card-body">
                    <h5><?php the_title(); ?></h5>
                    <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Read More</a>
                </div>
            </div>
            </article>
        </div>
        <!-- post section -->

        <!-- end the call -->
        <?php
    endwhile;
endif;
        ?>
<!-- end the call -->


	</div>
</div>
</section>




<?php get_footer(); ?>