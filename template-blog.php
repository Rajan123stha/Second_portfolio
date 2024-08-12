<?php
//Template Name: Blog Page
get_header();

?>
<section id="top-section" class="max-w-screen-md mx-auto p-6">
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
            Google I/O 2024: An I/O for a new generation
        </h1>
        <div class="text-sm text-gray-500 space-y-1">
            <p>May 14, 2024 <span class="ml-3">13 min read</span></p>

        </div>
    </header>
    <div class="flex justify-between items-center mb-8 mt-4">
        <!-- Profile Section on the Left -->
        <article class="flex items-center">
            <img src="https://storage.googleapis.com/gweb-uniblog-publish-prod/images/sundar-208x208.width-400.format-webp.webp"
                alt="Sundar Pichai" class="w-12 h-12 rounded-full mr-4" />
            <div>
                <p class="font-bold">Sundar Pichai</p>
                <p class="text-sm text-gray-500">CEO of Google and Alphabet</p>
            </div>
        </article>
        <!-- Share Button on the Right -->
        <button class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Share</button>
    </div>
    <div class="w-full">
        <img src="https://storage.googleapis.com/gweb-uniblog-publish-prod/images/SP_Hero_Update_1.width-1200.format-webp.webp"
            alt="Google I/O 2024" class="w-full rounded-lg" />
    </div>
</section>



<?php
get_footer();
?>