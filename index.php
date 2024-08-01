<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body class="bg-dark text-light">
    <header class="bg-dark-header py-4 sticky top-0">
        <div class="container mx-auto flex justify-between items-center">
            <div class="logo text-xl font-bold">bimsina</div>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#" id="theme-toggle">Dark</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="px-6">
        <section class="intro text-left my-24 max-w-4xl mx-auto">
            <h1 class="text-3xl">Hi! <span class="wave">👋</span> my name is</h1>
            <h2 class="text-5xl text-highlight">Bibek Timsina</h2>
            <p class="description text-2xl">I craft software solutions</p>
            <p class="mt-4">I'm a software engineer based in Kathmandu, Nepal. I love building things for the web.</p>
            <div class="icons flex space-x-4 mt-4">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fas fa-envelope"></i></a>
            </div>
            <a href="#" class="resume-button inline-block mt-4 py-2 px-4">See my resume</a>
        </section>

        <section class="publications max-w-4xl mx-auto my-16">
            <h2 class="text-3xl mb-8">My recent publications</h2>
            <div class="publication p-4 rounded-lg mb-4">
                <h3 class="text-xl">Plagiarism Detection in Programming Assignments using Machine Learning</h3>
                <p>Journal of Artificial Intelligence and Capsule Networks</p>
                <p>Bibek Timsina, Nishesh Awale, Mitesh Pandey, Anish Dulal</p>
                <div class="icons flex space-x-4 mt-2">
                    <a href="https://scholar.google.com" target="_blank"><i class="fas fa-graduation-cap"></i></a>
                    <a href="https://www.researchgate.net" target="_blank"><i class="fab fa-researchgate"></i></a>
                    <a href="path/to/pdf" target="_blank"><i class="fas fa-file-pdf"></i></a>
                </div>
            </div>
        </section>

        <section class="experience max-w-4xl mx-auto my-16">
            <h2 class="text-3xl mb-8">Experience</h2>
            <div class="experience-card p-4 rounded-lg mb-4 flex flex-col md:flex-row">
                <div class="date text-muted text-sm mb-2 md:mb-0 md:w-40">Jun 2022 - Present</div>
                <div class="details">
                    <h3 class="text-xl">Senior Software Engineer @ Growthzilla</h3>
                    <p class="text-sm text-muted"><i class="fas fa-map-marker-alt"></i> Remote</p>
                    <ul class="points list-disc list-inside mt-2 text-base">
                        <li>Worked as a Senior Software Engineer and Project Manager to bring multiple products to life.
                        </li>
                        <li>Led product development for various projects including Digital Signage Solutions and
                            Productivity Tools.</li>
                        <li>Developed multiple internal CLI tools to streamline developer workflows and enhance
                            productivity.</li>
                        <li>Managed full stack development, from database design to deployment.</li>
                    </ul>
                    <div class="tags flex flex-wrap mt-2 gap-2">
                        <span class="tag p-0.5">PostgreSQL</span>
                        <span class="tag p-0.5">Next.js</span>
                        <span class="tag p-0.5">Node</span>
                        <span class="tag p-0.5">Typescript</span>
                        <span class="tag p-0.5">TRPC</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="blogs-section max-w-4xl mx-auto my-16">
            <h2 class="text-3xl text-left">My recent blogs</h2>
            <div class="blogs-container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
                <a href="http://localhost:5173/"
                    class="blog-card rounded-lg overflow-hidden hover:scale-105 transition-transform duration-200 shadow-lg">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/blog.png" alt="Blog 1 Image"
                        class="w-full h-40 object-cover">
                    <div class="blog-content p-4">
                        <h3 class="text-lg">Testing the limits of Supabase + Postgres in a serverless environment</h3>
                        <p class="text-sm text-muted mt-2">Jul 2, 2024</p>
                    </div>
                </a>
                <a href="http://localhost:5173/"
                    class="blog-card rounded-lg overflow-hidden hover:scale-105 transition-transform duration-200 shadow-lg">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/blog.png" alt="Blog 2 Image"
                        class="w-full h-40 object-cover">
                    <div class="blog-content p-4">
                        <h3 class="text-lg">Using TRPC with Cloudflare Workers in a monorepo</h3>
                        <p class="text-sm text-muted mt-2">Jun 30, 2024</p>
                    </div>
                </a>
                <a href="blog3.html"
                    class="blog-card rounded-lg overflow-hidden hover:scale-105 transition-transform duration-200 shadow-lg">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/blog.png" alt="Blog 3 Image"
                        class="w-full h-40 object-cover">
                    <div class="blog-content p-4">
                        <h3 class="text-lg">Tips And Tricks to make Flutter Development easier</h3>
                        <p class="text-sm text-muted mt-2">Oct 2, 2019</p>
                    </div>
                </a>
            </div>
            <div class="btn mt-8 text-center">
                <a href="blogs.html" class="view-all-btn py-2 px-6">View all</a>
            </div>
        </section>

        <section class="projects-section max-w-4xl mx-auto my-16">
            <h2 class="text-3xl">My projects</h2>
            <div class="projects-container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
                <a href="project1.html"
                    class="project-card rounded-lg overflow-hidden hover:scale-105 transition-transform duration-200">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/blog.png" alt="Project 1 Image"
                        class="w-full h-40 object-cover">
                    <div class="project-content p-4">
                        <h3 class="text-lg">e-Connect</h3>
                        <p class="tags text-sm text-muted mt-2"><span class="tag">Flutter</span> <span
                                class="tag">React</span></p>
                    </div>
                </a>
                <a href="project2.html"
                    class="project-card rounded-lg overflow-hidden hover:scale-105 transition-transform duration-200">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/blog.png" alt="Project 2 Image"
                        class="w-full h-40 object-cover">
                    <div class="project-content p-4">
                        <h3 class="text-lg">Flutter UI Templates</h3>
                        <p class="tags text-sm text-muted mt-2"><span class="tag">Flutter</span> <span
                                class="tag">Next.js</span></p>
                    </div>
                </a>
                <a href="project3.html"
                    class="project-card rounded-lg overflow-hidden hover:scale-105 transition-transform duration-200">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/blog.png" alt="Project 3 Image"
                        class="w-full h-40 object-cover">
                    <div class="project-content p-4">
                        <h3 class="text-lg">TMDB Movies App</h3>
                        <p class="tags text-sm text-muted mt-2"><span class="tag">Flutter</span> <span class="tag">TMDB
                                API</span></p>
                    </div>
                </a>
                <a href="project4.html"
                    class="project-card rounded-lg overflow-hidden hover:scale-105 transition-transform duration-200">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/blog.png" alt="Project 4 Image"
                        class="w-full h-40 object-cover">
                    <div class="project-content p-4">
                        <h3 class="text-lg">reWalls</h3>
                        <p class="tags text-sm text-muted mt-2"><span class="tag">Flutter</span></p>
                    </div>
                </a>
                <a href="project5.html"
                    class="project-card rounded-lg overflow-hidden hover:scale-105 transition-transform duration-200">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/blog.png" alt="Project 5 Image"
                        class="w-full h-40 object-cover">
                    <div class="project-content p-4">
                        <h3 class="text-lg">Sliding Crossword</h3>
                        <p class="tags text-sm text-muted mt-2"><span class="tag">Flutter</span></p>
                    </div>
                </a>
            </div>
        </section>
    </main>
    <footer class="bg-dark-footer py-4 text-center text-white">
        <div class="container mx-auto flex flex-col items-center">
            <div class="social-icons mb-4">
                <a href="https://github.com/yourusername" target="_blank" class="mx-2 text-white hover:text-green-500">
                    <i class="fab fa-github fa-lg"></i>
                </a>
                <a href="https://github.com/yourusername" target="_blank" class="mx-2 text-white hover:text-green-500">
                    <i class="fab fa-facebook fa-lg"></i>
                </a>
                <a href="https://linkedin.com/in/yourprofile" target="_blank"
                    class="mx-2 text-white hover:text-green-500">
                    <i class="fab fa-linkedin fa-lg"></i>
                </a>
                <a href="mailto:your.email@example.com" class="mx-2 text-white hover:text-green-500">
                    <i class="fas fa-envelope fa-lg"></i>
                </a>
            </div>
            <p class="text-sm">
                &copy; 2024 Bibek Timsina. All rights reserved.
            </p>
        </div>
    </footer>
    <script src="<?php echo get_template_directory_uri(); ?>/JS/script.js"></script>
</body>

</html>