<?php get_header();?>
  <div class="banner-section">
    <div class="banner--image">
    <img class="banner--img" src="<?php echo get_bloginfo('template_url') ?>/img/photo-1524593985013-50293eff52f8.jpeg" alt=""/>
    </div>
  </div>
<?php 
  while(have_posts()){
    the_post(); ?>
<div class="container">
  <div class="row">
    <div class="col-md-8 article--section">
      <article class="article">
        <h1 class="recipe-title">
          <?php the_title(); ?>
        </h1>
        <p class="recipe--timestamp">
          <span class="recipe-category"> <?php echo get_the_category_list(', '); ?> </span>
          <time datetime="2001-05-15T19:00"> <?php the_time('jS M'); ?> </time>
        </p>
          <?php the_post_thumbnail(); ?>
          <?php the_content(); ?>
        </p>
        <div class="ingredients">
            <h3 class="ingredient--title">Ingredients</h3>
          <ul class="ingredients--list">
            <li class="ingredient">
              2 tablespoon white miso (can sub red miso)
            </li>
            <li class="ingredient">
              3 tablespoons neutral oil (we used untoasted sesame but you can use grapeseed, canola, or avocado oil)
            </li>
            <li class="ingredient">
              1 teaspoon mirin (if you need to omit, slightly increase the maple syrup or sweetener of choice)
            </li>
            <li class="ingredient">
              1 teaspoon maple syrup (can sub honey or cane sugar)
            </li>
            <li class="ingredient">
              2 teaspoons shoyu or tamari (soy sauce)
            </li>
            <li class="ingredient">
              1/2 teaspoon toasted sesame oil
            </li>
            <li class="ingredient">
              1 tablespoon rice vinegar (can sub whatever good vinegar you have on hand but I'd stay away from balsamic)
            </li>
            <li class="ingredient">
              1/2 teaspoon chili flakes (optional)
            </li>
            <li class="ingredient">
              juice of 1/2 blood orange
            </li>
            <li class="ingredient">
              juice of 1/2 Meyer lemon
            </li>
          </ul>            
        </div>
        <div class="mid-img">
          <img src="<?php echo get_bloginfo('template_url') ?>/img/mid-img1.jpeg"/>
          <img src="<?php echo get_bloginfo('template_url') ?>/img/mid-img2.jpeg"/>
        </div>
        <div class="procedure">
          <h3 class="procedure-title">Instructions</h3>
          <p>
            Oven to 375', line a sheet with parchment. Toss the diced rhubarb with a sprinkle of sugar, teensy bit of salt and coconut or avocado oil. Roast for 10-12 minutes, just enough to take the crunch off. Remove to let it cool completely.
          </p>
          <p>
            Line a loaf pan with parchment and grease it with coconut oil or what have you.  In a large bowl, combine the coconut flour, flax, baking soda, and salt. In another bowl, whisk together the coconut oil, eggs,  orange zest and juice, maple and vanilla.
          </p>
          <p>
            Pour the batter into the prepared pan. Chop the remaining pistachios and sprinkle them on top of the loaf. I like to add a bit of turbinado sugar on top too.
          </p>
          <p>
            Bake the loaf for 35-45 minutes until a toothpick in the center comes out clean. Remove the bread and set it on a rack to cool completely. Cut it into thick slices and toast before serving. 
          </p>
        </div>

        <div class="tags">
          <span><a href="#">avocado</a></span>
          <span><a href="#">citrus</a></span>
          <span><a href="#">bread</a></span>
          <span><a href="#">halaal</a></span>
          <span><a href="#">salad</a></span>
          <span><a href="#">loaf</a></span>
          <span><a href="#">bread</a></span>
          <span><a href="#">gluten free</a></span>
        </div>
      </article>
    </div>

    <!--  -->
    <div class="col-md-4 article-aside">
      <form class="form-inline my-2 my-lg-2">
        <input id="search-term" class="form-control mr-sm-2" type="search" placeholder="Search Recipe" aria-label="Search">
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
      <!-- <aside>
        <div class="recipe-books">
          <h2 class="recipe-books-title">Recipe Books</h2>
          <p class="recipe-book-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis doloribus quibusdam non suscipit totam veniam nam!</p>
          <img class="recipe-books-img" src="img/photo-1494314671902-399b18174975.jpeg" alt="Black Coffee">
        </div>
      </aside> -->
    </div>
  </div>
</div>

<?php } ?>
<!-- <script src="https://use.fontawesome.com/6bbfc0af8a.js"></script> -->
<?php get_footer(); ?>