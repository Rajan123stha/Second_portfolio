<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/blogPage.css">
    <script src="<?php echo get_template_directory_uri(); ?>/css/blogPage.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body class="bg-dark text-light">
    <header class="bg-dark-header py-4 sticky top-0 z-10">
        <div class="container mx-auto flex justify-between items-center">
            <div class="logo text-xl font-bold">Portfolio</div>
            <div class="flex justify-between items-center ml-auto">
                <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'menu_class' => 'flex space-x-6')); ?>
                <div class="dropdown relative">
                    <button id="theme-toggle" class="text-white px-4 py-2 rounded inline-flex items-center">
                        <span class="theme-color"></span>
                        <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul class="dropdown-content absolute hidden text-gray-700 pt-1 right-0">
                        <li class="theme-option">
                            <a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                                href="#">Light</a>
                        </li>
                        <li class="theme-option">
                            <a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                                href="#">Dark</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


    </header>