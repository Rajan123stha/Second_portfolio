<?php
get_header();
the_post();

?>

<head>
    <script src="<?php echo get_template_directory_uri(); ?>/css/blogPage.css"></script>
</head>
<section id="top-section" class="max-w-screen-lg mx-auto p-6">
    <header class="text-left mb-4">
        <div class="flex items-center text-sm text-gray-500 mb-6">
            <a href="#" class="flex items-center text-blue-600 hover:underline">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-blue-600" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M10.707 1.293a1 1 0 00-1.414 0l-8 8a1 1 0 101.414 1.414L10 3.414l7.293 7.293a1 1 0 001.414-1.414l-8-8zM3 9.293a1 1 0 00-1.707.707v7a1 1 0 001 1h4a1 1 0 001-1V13a1 1 0 112 0v3a1 1 0 001 1h4a1 1 0 001-1v-7a1 1 0 00-1.707-.707L10 10.586 3 9.293z" />
                </svg>
            </a>
            <span class="mx-2">&gt;</span>
            <a href="#" class="text-blue-600 hover:underline">INSIDE GOOGLE</a>
            <span class="mx-2">&gt;</span>
            <a href="#" class="text-blue-600 hover:underline">A MESSAGE FROM OUR CEO</a>
        </div>
        <h1 class="text-3xl md:text-4xl font-bold  mb-8">
            <?php the_title(); ?>
        </h1>
        <div class="text-sm text-gray-500 space-y-1">
            <p><?php echo get_the_date(); ?> <span class="ml-3">13 min read</span></p>

        </div>
    </header>
    <div class="flex justify-between items-center mb-8 mt-4">
        <?php $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
        <!-- Profile Section on the Left -->
        <article class="flex items-center">
            <img src="<?php echo $imagepath[0] ?>" alt="Sundar Pichai" class="w-12 h-12 rounded-full mr-4" />
            <div>
                <p class="font-bold"><?php the_author(); ?></p>
                <p class="text-sm text-gray-500">CEO of Google and Alphabet</p>
            </div>
        </article>
        <!-- Share Button on the Right -->
        <button class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Share</button>
    </div>
    <div class="w-full">
        <img src="<?php echo $imagepath[0] ?>" alt="Google I/O 2024" class="w-full rounded-lg" />
    </div>
</section>




<!-- Sidebar -->
<div class="flex">
    <aside class="hidden lg:block sticky top-20 h-screen p-4 w-60 bg-gray-200">
        <nav class="space-y-4">
            <a href="#section1" class="block hover:text-blue-600">Section 1</a>
            <a href="#section2" class="block hover:text-blue-600">Section 2</a>
            <a href="#section3" class="block hover:text-blue-600">Section 3</a>
            <!-- Add more sections as needed -->
        </nav>
    </aside>

    <div class="flex-1">
        <!-- Main content here -->
        <section id="section1" class="p-8">Content for Section 1</section>
        <section id="section2" class="p-8">Content for Section 2</section>
        <section id="section3" class="p-8">Content for Section 3</section>
    </div>
</div>

<?php
//     <div id="sidebar" class="md:block md:w-72 fixed top-16  w-[250px] sidebar">
//         <div class="p-6 ml-36">
//             <h3 class="text-lg font-bold mb-4">In this story</h3>
//             <ul id="sidebar-list" class="space-y-3 text-left dark:text-white">
//                 <!-- Sidebar items will be dynamically inserted here -->
//             </ul>
//         </div>
//     </div>

//     <!-- Main Content -->
//     <div id="main-content" class="p-6 md:px-16 mt-8 content ">
//         <div id="content" class="w-[33%]">
//             <!-- Main content will be dynamically inserted here -->

//         </div>
//     </div>
// </div>
?>
<?php //the_content(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/JS/blogPage.js"></script>

<section id="related-blogs">
    <!-- RelatedBlogs component will be included here -->
</section>



<?php
get_footer();
?>