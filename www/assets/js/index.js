document.addEventListener("click", () => {
  // Closes expanded navbar on click even if the click is not on the toggler button.
  if (document.querySelector(".navbar-collapse").classList.contains("show")) {
    document.querySelector(".navbar-toggler").click();
  }

  // Handles navbar transformation when it collapses.
  if (document.querySelector(".navbar-toggler").ariaExpanded === "true") {
    document.querySelector("h1").classList.remove("d-none");
    hideThemeToggler();
  } else {
    setTimeout(() => {
      hideThemeToggler(false);
      document.querySelector("h1").classList.add("d-none");
    }, 370);
  }
});

// Dark / light theme toggle.
var toggler = document.getElementById("theme-toggler");
toggler.addEventListener("click", () => {
  if (document.documentElement.getAttribute("data-bs-theme") === "dark") {
    document.documentElement.setAttribute("data-bs-theme", "light");
    toggler.firstElementChild.classList.add("d-none");
    toggler.lastElementChild.classList.remove("d-none");
  } else {
    document.documentElement.setAttribute("data-bs-theme", "dark");
    toggler.firstElementChild.classList.remove("d-none");
    toggler.lastElementChild.classList.add("d-none");
  }
});

var hideThemeToggler = (hide = true) => {
  if (hide === true) {
    document.getElementById("theme-toggler").classList.add("d-none");
  } else {
    document.getElementById("theme-toggler").classList.remove("d-none");
  }
};
