document.addEventListener("DOMContentLoaded", function () {
  const themeToggle = document.getElementById("theme-toggle");
  const themeOptions = document.querySelectorAll(".theme-option a");
  const dropdownContent = document.querySelector(".dropdown-content");

  const setTheme = (theme) => {
    document.body.classList.toggle("dark", theme === "dark");
    document.body.classList.toggle("light", theme === "light");
    themeToggle.firstChild.textContent =
      theme.charAt(0).toUpperCase() + theme.slice(1);
    localStorage.setItem("theme", theme);

    if (theme === "dark") {
      document.body.classList.add("bg-dark");
      document.body.classList.add("text-light");
      document.body.classList.remove("bg-light");
      document.body.classList.remove("text-dark");
      document.getElementById("theme-toggle").classList.remove("text-black");
    } else {
      document.body.classList.add("bg-light");
      document.body.classList.add("text-dark");
      document.body.classList.remove("bg-dark");
      document.body.classList.remove("text-light");
      document.getElementById("theme-toggle").classList.add("text-black");
    }
  };

  let savedTheme = localStorage.getItem("theme") || "dark";
  setTheme(savedTheme);

  themeToggle.addEventListener("click", function (event) {
    event.stopPropagation();
    dropdownContent.classList.toggle("hidden");
  });

  themeOptions.forEach((option) => {
    option.addEventListener("click", function (event) {
      event.preventDefault();
      setTheme(this.textContent.toLowerCase());
      dropdownContent.classList.add("hidden");
    });
  });

  // Close the dropdown when clicking outside of it
  window.addEventListener("click", function () {
    dropdownContent.classList.add("hidden");
  });

  // Prevent closing the dropdown when clicking inside it
  dropdownContent.addEventListener("click", function (event) {
    event.stopPropagation();
  });
});

//blog dynamic

document.addEventListener("DOMContentLoaded", function () {
  console.log(window.imageBasePath); // Check if the path is correct

  const template = document.getElementById("blog-card-template");
  const container = document.querySelector(".blogs-container");

  const blogData = [
    {
      href: "http://localhost:5173/",
      imgSrc: window.imageBasePath + "blog.png",
      title:
        "Testing the limits of Supabase + Postgres in a serverless environment",
      date: "Jul 2, 2024",
    },
    {
      href: "http://localhost:5173/",
      imgSrc: window.imageBasePath + "blog.png",
      title: "Using TRPC with Cloudflare Workers in a monorepo",
      date: "Jun 30, 2024",
    },
    {
      href: "blog3.html",
      imgSrc: window.imageBasePath + "blog.png",
      title: "Tips And Tricks to make Flutter Development easier",
      date: "Oct 2, 2019",
    },
    {
      href: "blog4.html",
      imgSrc: window.imageBasePath + "blog.png",
      title: "This is another blog for testing",
      date: "Oct 2, 2018",
    },
  ];

  // Show only the first 3 blogs
  blogData.slice(0, 3).forEach((blog) => {
    const clone = document.importNode(template.content, true);
    const link = clone.querySelector("a");
    const img = clone.querySelector("img");
    const title = clone.querySelector(".blog-title");
    const date = clone.querySelector(".text-muted");
    title.textContent = blog.title;
    title.setAttribute("title", blog.title);

    link.href = blog.href;
    img.src = blog.imgSrc;
    title.textContent = blog.title;
    date.textContent = blog.date;

    container.appendChild(clone);
  });
});

//Blog title truncate
document.addEventListener("DOMContentLoaded", function () {
  const maxLength = 50;
  const blogTitles = document.querySelectorAll(".blog-title");

  blogTitles.forEach((title) => {
    let text = title.textContent;
    if (text.length > maxLength) {
      text = text.slice(0, maxLength) + "...";
      title.textContent = text;
    }
  });
});

//dynamic project section
document.addEventListener("DOMContentLoaded", function () {
  console.log(window.imageBasePath); // Check if the path is correct

  const template = document.getElementById("project-card-template");
  const container = document.querySelector(".projects-container");

  const projectData = [
    {
      href: "project1.html",
      imgSrc: window.imageBasePath + "blog.png",
      title: "e-Connect",
      tags: ["Flutter", "React"],
    },
    {
      href: "project2.html",
      imgSrc: window.imageBasePath + "blog.png",
      title: "Flutter UI Templates",
      tags: ["Flutter", "Next.js"],
    },
    {
      href: "project3.html",
      imgSrc: window.imageBasePath + "blog.png",
      title: "TMDB Movies App",
      tags: ["Flutter", "TMDB API"],
    },
    {
      href: "project4.html",
      imgSrc: window.imageBasePath + "blog.png",
      title: "reWalls",
      tags: ["Flutter"],
    },
    {
      href: "project5.html",
      imgSrc: window.imageBasePath + "blog.png",
      title: "Sliding Crossword",
      tags: ["Flutter"],
    },
  ];

  projectData.forEach((project) => {
    const clone = document.importNode(template.content, true);
    const link = clone.querySelector("a");
    const img = clone.querySelector("img");
    const title = clone.querySelector(".project-title");
    const tags = clone.querySelector(".tags");

    link.href = project.href;
    img.src = project.imgSrc;

    // Set full title in title attribute for tooltip
    title.textContent = project.title;
    title.setAttribute("title", project.title); // This enables the tooltip

    // Create tags
    tags.innerHTML = project.tags
      .map((tag) => `<span class="tag">${tag}</span>`)
      .join(" ");

    container.appendChild(clone);
  });
});
