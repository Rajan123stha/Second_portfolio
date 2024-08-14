document.addEventListener("DOMContentLoaded", () => {
  const sections = [
    "Gemini Era",
    "Multimodality and long context",
    "AI agents",
    "Breaking new ground",
    "Search",
    "More intelligent Gemini experiences",
    "Responsible AI",
    "Creating the future",
  ];

  const content = {
    "Gemini Era": "<p>This is the content for the Gemini Era section.</p>",
    "Multimodality and long context":
      "<p>Content for Multimodality and long context section.</p>",
    "AI agents": "<p>Content for AI agents section.</p>",
    "Breaking new ground": "<p>Content for Breaking new ground section.</p>",
    Search: "<p>Content for Search section.</p>",
    "More intelligent Gemini experiences":
      "<p>Content for More intelligent Gemini experiences section.</p>",
    "Responsible AI": "<p>Content for Responsible AI section.</p>",
    "Creating the future":
      "<p>Content for CreThis is the content for the Gemini Era section Content for Content for Creating the future section.  </p>",
  };

  let currentSection = ""; // Default section
  const sidebarList = document.getElementById("sidebar-list");
  const mainContent = document.getElementById("main-content");

  // Function to render the sidebar
  const renderSidebar = () => {
    sections.forEach((section) => {
      const listItem = document.createElement("li");
      listItem.className = `cursor-pointer font-medium relative pl-4 ${
        currentSection === section ? "text-blue-500" : "text-gray-700"
      }`;
      listItem.innerHTML = `
        <div class="absolute left-0 top-0 h-full w-1 ${
          currentSection === section ? "bg-blue-500" : "bg-black"
        }"></div>
        <a href="#${section.replace(/ /g, "-")}" class="pl-3">${section}</a>
      `;
      sidebarList.appendChild(listItem);
    });
  };

  // Function to render the main content sections
  const renderContent = () => {
    sections.forEach((section) => {
      const sectionDiv = document.createElement("div");
      sectionDiv.id = section.replace(/ /g, "-");
      sectionDiv.className = "section mb-12";
      sectionDiv.innerHTML = `
        <h2 class="text-2xl font-bold mb-4">${section}</h2>
        <div>${content[section]}</div>
      `;
      mainContent.appendChild(sectionDiv);
    });
  };

  // Function to handle scroll and update the sidebar
  const handleScroll = () => {
    const sectionOffsets = sections
      .map((section) => {
        const element = document.getElementById(section.replace(/ /g, "-"));
        if (!element) return null;

        return { section, offset: element.offsetTop };
      })
      .filter(Boolean);

    const scrollPosition = window.scrollY + window.innerHeight / 2;

    for (let i = sectionOffsets.length - 1; i >= 0; i--) {
      if (scrollPosition >= sectionOffsets[i].offset) {
        if (currentSection !== sectionOffsets[i].section) {
          currentSection = sectionOffsets[i].section;
          updateSidebar(currentSection); // Function to update sidebar
        }
        break;
      }
    }
  };

  // Function to update sidebar active state
  const updateSidebar = (section) => {
    const sidebarItems = sidebarList.querySelectorAll("li");
    sidebarItems.forEach((item) => {
      const link = item.querySelector("a").innerText;
      if (link === section) {
        item.classList.add("text-blue-500");
        item.querySelector("div").classList.add("bg-blue-500");
      } else {
        item.classList.remove("text-blue-500");
        item.querySelector("div").classList.remove("bg-blue-500");
      }
    });
  };

  // Initialize content and sidebar
  renderContent();
  renderSidebar();
  window.addEventListener("scroll", handleScroll);
});

window.addEventListener("scroll", function () {
  const mainContent = document.querySelector(".main-section");
  const sidebar = document.querySelector(".sidebar");
  const mainContentRect = mainContent.getBoundingClientRect();

  if (
    mainContentRect.top <= 0 &&
    mainContentRect.bottom + 20 > window.innerHeight
  ) {
    sidebar.style.position = "fixed";
    sidebar.style.top = "4";
  } else if (
    mainContentRect.top > 0 ||
    mainContentRect.bottom <= window.innerHeight
  ) {
    sidebar.style.position = "sticky";
    sidebar.style.top = "4"; // Adjust as per your design
  }
});
