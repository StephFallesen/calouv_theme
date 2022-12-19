<?php get_header(); ?>
<section class="hero">
    <a href="../#nyeste" class="hero__wrapper">
        <div class="wrapper">
            <div class="wrapper__heading">
                <span>SHOP VORES NYESTE</span>
                <h1>Styles</h1>
                <div class="btn">Udforsk nu</div>
            </div>
        </div>
    </a>
</section>

<section class="shop-section">
    <h2 class="shop-section__heading">Best Sellers</h2>
    <p class="shop-section__body">Vores best sellers ses herunder, så du kan følge med i de nyeste trends på unikt dametøj! <br>Selvom Calouv er i Odense, kan du nu købe vores unikke tøj, hvor som helst!</p>
    <div class="items">
        <?php echo do_shortcode('[best_selling_products limit="4"]'); ?>
    </div>
</section>

<section class="shop-section">
    <h2 class="shop-section__heading" id="nyeste">Nyeste styles</h2>
    <p class="shop-section__body">Her ser du vores nyeste og mest cool styles!</p>
    <div class="items">
        <?php echo do_shortcode('[products limit="8" orderbyid="id" order="DESC"]', '[ti_wishlists_addtowishlist]'); ?>
    </div>
</section>

<?php get_footer(); ?>