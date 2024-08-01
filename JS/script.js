document.getElementById("theme-toggle").addEventListener("click", function () {
  document.body.classList.toggle("dark");
  document.body.classList.toggle("light");
  this.textContent = document.body.classList.contains("dark")
    ? "Light"
    : "Dark";
  localStorage.setItem(
    "theme",
    document.body.classList.contains("dark") ? "dark" : "light"
  );
});

document.addEventListener("DOMContentLoaded", function () {
  if (localStorage.getItem("theme") === "dark") {
    document.body.classList.add("dark");
    document.body.classList.remove("light");
    document.getElementById("theme-toggle").textContent = "Light";
  } else {
    document.body.classList.add("light");
    document.body.classList.remove("dark");
    document.getElementById("theme-toggle").textContent = "Dark";
  }
});



// Facebook:https://www.facebook.com/sharer.php?u=[post-url]
//Linkedin: https://www.linkedin.com/shareArticle?url=[post-url]&title=[post-title]