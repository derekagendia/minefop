<?php get_header(); ?>

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


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade w-100" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/convention-gicam-cfps_1000x500_20210917162731 1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="display-3 fw-bold">Postulez pour des bourses qui vous permettent de réaliser vos objectifs de carrière</h2>
                            <p> <a class="btn btn-warning fw-bold" href="#">S’enregistré</a></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/convention-gicam-cfps_1000x500_20210917162731 1.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="display-3 fw-bold">Postulez pour des bourses qui vous permettent de réaliser vos objectifs de
                                <p> <a class="btn btn-warning fw-bold" href="#">S’enregistré</a></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/convention-gicam-cfps_1000x500_20210917162731 1.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="display-3 fw-bold">Postulez pour des bourses qui vous permettent de réaliser vos objectifs de
                                <p> <a class="btn btn-warning fw-bold" href="#">S’enregistré</a></p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- end of header -->
<section class="py-5 bg-success text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h5 class="text-center">Bourses National <br>accordees</h5>
                <h1 class="text-white text-center">2000</h1>
            </div>
            <div class="col-md-4">
                <h5 class="text-center"> Bourses international <br>accordees</h5>
                <h1 class="text-white text-center">2000</h1>
            </div>
            <div class="col-md-4">
                <h5 class="text-center">Nombre de <br>beneficiaires</h5>
                <h1 class="text-white text-center">2000</h1>
            </div>
        </div>
    </div>

</section>

<!-- section -->

<section class="py-3 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="fw-bold text-danger">Postuler pour une bourse de formation professionel</h1>
                <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus libero voluptatum animi incidunt doloremque quibusdam provident aut consequuntur delectus velit nostrum, totam accusantium repellendus magnam quasi, aperiam enim optio amet? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus libero voluptatum animi incidunt doloremque quibusdam provident aut consequuntur delectus velit nostrum, totam accusantium repellendus magnam quasi, aperiam enim optio amet?</p>
            </div>
            <div class="col-md-6">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/Group79.png" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="py-3" style="background-color:#EEF5EC;">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center text-danger mt-5 mb-3 fw-bold">Actualités</h1>
            </div>
        </div>
        <div class="row">
            <!-- the loop -->
            <?php

            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'Actualite',
                'posts_per_page' => 3,
            );
            $arr_posts = new WP_Query($args);

            if ($arr_posts->have_posts()) :

                while ($arr_posts->have_posts()) :
                    $arr_posts->the_post();
            ?>
            <!-- the loop -->


                    <!-- post section -->
                    <div class="col-md-4">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="card">
                                <img src=" <?php
                                            if (has_post_thumbnail()) :
                                                the_post_thumbnail();
                                            endif;
                                            ?>" class="card-img-top">
                                <div class="card-body">
                                    <h6 class="fw-bold"><?php the_title(); ?></h6>
                                    <a href="<?php the_permalink(); ?>">Lire plus</a>
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

        <div class="row justify-content-center">
            <div class="col-md-6">
                <center>
                    <a href="#" class="btn btn-warning fw-bold">Voir tous les articles</a>
                </center>
            </div>
        </div>


    </div>
</section>

<section class="py-5 mt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-4 fw-bold text-danger">Partenaire</h1>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="" class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="" class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="" class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-5 mt-3 bg-danger text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Restez informé des dernières
                    actualités du MINEFOP</h1>
            </div>
            <div class="col-md-6">
                <div class="">
                    <h3 class="fw-bold">Abonnez-vous à notre newsletter</h3>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text bg-warning text-dark" id="basic-addon2">Souscrire</a></span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>