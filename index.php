<?php get_header(); ?>
<main class="px-6">
    <section class="intro text-left my-24 max-w-4xl mx-auto">
        <h1 class="text-3xl">Hi! <span class="wave">👋</span>, I am </h1>
        <h2 class="text-5xl text-highlight">Rajan Shrestha</h2>
        <p class="description text-xl mt-4">"Design is not just what it looks like and feels like. Design is how it
            works."
            - <span class="font-bold">Steve Jobs</span></p>
        <p class="mt-4">I'm a fornt-end developer based in Kathmandu, Nepal. I love building things for the web.</p>
        <div class="icons flex space-x-4 mt-4">
            <a href="#" class="tooltip"><i class="fab fa-github "> </i> <span class="tooltiptext">Github</span></a>
            <a href="#" class="tooltip"><i class="fab fa-linkedin"></i><span class="tooltiptext">Linkedin</span></a>
            <a href="#" class="tooltip"><i class="fas fa-envelope"></i><span class="tooltiptext">Email</span></a>
        </div>
        <a href="#" class="resume-button inline-block mt-4 py-2 px-4 tooltip">See my resume <span
                class="tooltiptext">View Resume</span></a>
    </section>

    <section class="publications max-w-4xl mx-auto my-16">
        <h2 class="text-3xl mb-8">My recent publications</h2>
        <div class="publication p-4 rounded-lg mb-4">
            <h3 class="text-xl">Plagiarism Detection in Programming Assignments using Machine Learning</h3>
            <p>Journal of Artificial Intelligence and Capsule Networks</p>
            <p>Bibek Timsina, Nishesh Awale, Mitesh Pandey, Anish Dulal</p>
            <div class="icons flex space-x-4 mt-2">
                <a href="https://scholar.google.com" target="_blank" class="tooltip"><i
                        class="fas fa-graduation-cap"></i><span class="tooltiptext">Google Scholar</span></a>
                <a href="https://www.researchgate.net" target="_blank" class="tooltip"><i
                        class="fab fa-researchgate"></i><span class="tooltiptext">ResearchGate</span></a>
                <a href="path/to/pdf" target="_blank" class="tooltip"><i class="fas fa-file-pdf"></i><span
                        class="tooltiptext">PDf</span></a>
            </div>
        </div>
    </section>

    <section class="experience max-w-4xl mx-auto my-16">
        <h2 class="text-3xl mb-8">Experience</h2>
        <div>
            <div class="p-4   border-b mb-4 flex flex-col md:flex-row shadow-md">
                <div class="date mt-8 text-muted text-sm mb-2 md:mb-0 md:w-40">July 2024 - Present</div>
                <div class="details border-l p-4">
                    <h3 class="text-xl">Internship @ Hiddenlayer Network </h3>
                    <p class="text-sm text-muted"><i class="fas fa-map-marker-alt"></i> Remote</p>
                    <ul class="points list-disc list-inside mt-2 text-sm">
                        <li>Worked as intern to develop wordpress themes.
                        </li>
                        <li>Led product development for various projects including Digital Signage Solutions and
                        </li>
                        <li>Developed multiple internal CLI tools to streamline developer workflows and enhance
                            productivity.</li>
                        <li>Managed full stack development, from database design to deployment.</li>
                    </ul>
                    <div class="tags flex flex-wrap mt-2 gap-2">
                        <span class="tag p-0.5">Html</span>
                        <span class="tag p-0.5">Css</span>
                        <span class="tag p-0.5">Php</span>
                        <span class="tag p-0.5">Javascript</span>
                        <span class="tag p-0.5">TRPC</span>
                    </div>
                </div>
            </div>
            <div class="border-b  p-4  mb-4 flex flex-col md:flex-row shadow-md">
                <div class="date text-muted mt-8 text-sm mb-2 md:mb-0 md:w-40">Jun 2023 - October 223 </div>
                <div class="details border-l p-4">
                    <h3 class="text-xl">Assistant Website Manger @ Thames College</h3>
                    <p class="text-sm text-muted"><i class="fas fa-map-marker-alt"></i> Hybrid</p>
                    <ul class="points list-disc list-inside mt-2 text-sm">
                        <li>Regularly update website content, including text, images, and videos.
                        </li>
                        <li>Assist in managing blog posts, including writing, editing, and publishing content.
                        </li>
                        <li>Ensure all website features and functions are working and Assist in
                            implementing SEO best practices</li>
                        <li>Identify and fix technical issues or bugs that affect the website’s performance or user
                            experience.</li>
                    </ul>
                    <div class="tags flex flex-wrap mt-2 gap-2">
                        <span class="tag p-0.5">CMS</span>
                        <span class="tag p-0.5">SEO</span>
                        <span class="tag p-0.5">Communication</span>
                        <span class="tag p-0.5">Research</span>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blogs-section max-w-4xl mx-auto my-16">
        <h2 class="text-3xl text-left">My recent blogs</h2>
        <div class="blogs-container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
            <template id="blog-card-template">
                <a href="#"
                    class="blog-card rounded-lg overflow-hidden hover:scale-105 transition-transform duration-200 shadow-lg">
                    <img src="" alt="Blog Image" class="w-full h-40 object-cover">
                    <div class="blog-content p-4">
                        <h3 class="text-lg blog-title "></h3>
                        <p class="text-sm text-muted mt-2"></p>
                    </div>
                </a>

            </template>


        </div>
        <div class="btn mt-8 text-center">
            <a href="blogs.html" class="view-all-btn py-2 px-6 tooltip">View all <span class="tooltiptext">View more
                    blogs</span></a>
        </div>
    </section>

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
</main>
<?php get_footer(); ?>