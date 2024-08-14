<?php
get_header();

?>
<div class="title">
    <h1><?php the_title(); ?></h1>
</div>
<section class="projects-section max-w-4xl mx-auto my-16">
    <h2 class="text-3xl">My projects</h2>
    <div class="projects-container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
        <template id="project-card-template">
            <a href="#"
                class="project-card rounded-lg overflow-hidden hover:scale-105 transition-transform duration-200">
                <img src="" alt="Project Image" class="w-full h-40 object-cover">
                <div class="project-content p-4">
                    <h3 class="text-lg project-title tooltip-container"></h3>
                    <p class="tags text-sm text-muted mt-2"></p>
                </div>
            </a>
        </template>
    </div>
</section>
<?php
get_footer();
?>