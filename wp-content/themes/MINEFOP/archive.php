<?php get_header();?>
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
		<?php get_template_part('includes/post/section-archive');?>
	</div>
</div>
</section>

<?php get_footer();?>