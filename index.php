<?php get_header(); ?>

<!-- CAROUSEL SLIDER ============================================== -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="image-blaah">
        <img class="image-resized d-block w-100" src="<?php echo get_bloginfo('template_url') ?>/img/photo-1524593985013-50293eff52f8.jpeg" alt=""/>
      </div>
    </div>
    <div class="carousel-item">
      <div class="image-blaah">
        <img class="image-resized d-block w-100" src="<?php echo get_bloginfo('template_url') ?>/img/hero-green.jpeg" alt=""/>
      </div>
    </div>
    <div class="carousel-item">
      <div class="image-blaah">
        <img class="image-resized d-block w-100" src="<?php echo get_bloginfo('template_url') ?>/img/photo-1524593985013-50293eff52f8.jpeg" alt=""/>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- ASIDE ARTICLE SECTION ============================================================ -->
<div class="container">
  <div class="row">
    <div class="col-md-4 article-aside">
      <form class="form-inline my-2 my-lg-2">
        <input class="form-control mr-sm-2" type="search" placeholder="Search Recipe" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <div class="recent-recipes">
        <h3 class="recent-recipes--title text-center">
          RECENT RECIPES
        </h3>
        <aside class="aside">
          <div class="row">
              <div class="col-sm-3">
                <div class="recent-recipes-image">
                  <img class="recipe-block--img" src="<?php echo get_bloginfo('template_url') ?>/img/berries.jpeg"/>
                  <!-- <img class="recent-recipes--img" src="img/berries.jpeg" alt=""> -->
                </div>
              </div>
              <div class="col-sm-9">
                <p class="recent--recipes--title">
                  <a href="#">Grilled Chicken Salad with Fruit Seasonal </a>
                </p>
              </div>
            </div>
        </aside>
        <!--  -->
        <aside class="aside">
          <div class="row">
              <div class="col-sm-3">
                <div class="recent-recipes-image">
                  <img class="recipe-block--img" src="<?php echo get_bloginfo('template_url') ?>/img/berries.jpeg"/>
                  <!-- <img class="recent-recipes--img" src="img/berries.jpeg" alt=""> -->
                </div>
              </div>
              <div class="col-sm-9">
                <p class="recent--recipes--title">
                  <a href="#">Grilled Chicken Salad with Seasonal Fruit</a>
                </p>
              </div>
            </div>
        </aside>
        <!--  -->
        <aside class="aside">
          <div class="row">
            <div class="col-sm-3">
              <div class="recent-recipes-image">
                <img class="recipe-block--img" src="<?php echo get_bloginfo('template_url') ?>/img/berries.jpeg"/>
                <!-- <img class="recent-recipes--img" src="img/berries.jpeg" alt=""> -->
              </div>
            </div>
            <div class="col-sm-9">
              <p class="recent--recipes--title">
                <a href="#">Grilled Chicken Salad with Seasonal Fruit</a>
              </p>
            </div>
          </div>
        </aside>
        <!--  -->
        <aside class="aside">
          <div class="row">
            <div class="col-sm-3">
              <div class="recent-recipes-image">
                <img class="recipe-block--img" src="<?php echo get_bloginfo('template_url') ?>/img/berries.jpeg"/>
                <!-- <img class="recent-recipes--img" src="img/berries.jpeg" alt=""> -->
              </div>
            </div>
            <div class="col-sm-9">
              <p class="recent--recipes--title">
                <a href="#">Grilled Chicken Salad with Seasonal Fruit</a>
              </p>
            </div>
          </div>
        </aside>
        <!--  -->
      </div>
    <!-- ============================ -->
    <div class="popular-category">
      <div class="popular-category--title">
        <p>
          POPULAR GATEGORIES
        </p>
      </div>
      <ul class="popular-category--list">
        <li class="popular-category--list--item">
          <a href="#"> &#8250; Popular </a>
        </li>
        <li class="popular-category--list--item">
          <a href="#"> 
            <span class="oi" data-glyph="chevron-right"></span>
            &#8250; Healthy </a>
        </li>
        <li class="popular-category--list--item">
          <a href="#"> &#8250; Quick and Easy </a>
        </li>
        <li class="popular-category--list--item">
          <a href="#"> &#8250; Recommended </a>
        </li>
        <li class="popular-category--list--item">
          <a href="#"> &#8250; Newest </a>
        </li>
      </ul>
    </div>
    </div>
<!-- MAIN ARTICLE RECIPE-BLOCK CATEG ===========================================  -->
    <div class="col-md-8">
    <?php
      while(have_posts()){
        the_post(); ?>
        <div class="recipe-block">
        <div class="row">
          <div class="col-4 recipe-block-section">
            <div class="recipe-block--image">
              <?php the_post_thumbnail(); ?>
            </div>
          </div>
          <div class="col-8 recipe-block--details text-center">
            <h2 class="recipe-block-title">
              <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
            </h2>
            <div class="recipe-block--description">
              <p>
                In <span class="category"><?php echo get_the_category_list(', '); ?></span> on <span class="date"> <?php the_time('jS M Y'); ?> </span>
              </p>
              <p>
                Time to cook <span class="cooking-duration">1 Hour 45 Minutes</span>
              </p>
            </div>
          </div>
        </div>
      </div>

     <?php } 
      echo paginate_links();
     ?>
     <!--  -->
    </div>
  </div>
</div>
<?php get_footer(); ?>