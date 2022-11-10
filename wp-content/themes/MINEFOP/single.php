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

<section class="py-3 mt-3">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
            
			<?php get_template_part('includes/post/content');?>
		</div>
	</div>
</div>
</section>

<?php get_footer();?>