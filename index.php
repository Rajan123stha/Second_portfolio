<?php get_header(); ?>

<section class="blogs-section max-w-4xl mx-auto my-16">
    <h2 class="text-3xl text-left">My recent blogs</h2>

    <div class="blogs-container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
        <!-- Blog Card 1 -->
        <?php while (have_posts()) {

            the_post();
            $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
            ?>
            <a href="<?php the_permalink(); ?>"
                class="blog-card rounded-lg overflow-hidden hover:scale-105 transition-transform duration-200 shadow-lg">
                <img src="<?php echo $imagepath[0] ?>" alt="Blog Image" class="w-full h-40 object-cover">
                <div class="blog-content p-4">
                    <h3 class="text-lg blog-title"><?php the_title(); ?>
                    </h3>
                    <p class="text-sm text-muted mt-2"><?php echo get_the_date(); ?></p>
                </div>
            </a>
        <?php } ?>


    </div>
</section>

<?php get_footer(); ?>