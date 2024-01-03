// Closes expanded navbar on click even if the click is not on the toggler button.
document.addEventListener("click", () => {
  if (document.querySelector(".navbar-collapse").classList.contains("show")) {
    document.querySelector(".navbar-toggler").click();
  }
});

// Dark / light theme toggle.
var themeToggler = document.getElementById("theme-toggler");
themeToggler.addEventListener("click", () => {
  if (document.documentElement.getAttribute("data-bs-theme") === "dark") {
    document.documentElement.setAttribute("data-bs-theme", "light");
    themeToggler.firstElementChild.classList.add("d-none");
    themeToggler.lastElementChild.classList.remove("d-none");
  } else {
    document.documentElement.setAttribute("data-bs-theme", "dark");
    themeToggler.firstElementChild.classList.remove("d-none");
    themeToggler.lastElementChild.classList.add("d-none");
  }
});

// Language toggle.
var languageToggler = document.getElementById("language-toggler");
languageToggler.addEventListener("click", () => toggleLanguageSwitch());

var hideThemeToggler = (hide = true) => {
  if (hide === true) {
    document.getElementById("theme-toggler").classList.add("d-none");
  } else {
    document.getElementById("theme-toggler").classList.remove("d-none");
  }
};

var toggleLanguageSwitch = () => {
  if(languageToggler.firstElementChild.classList.contains("text-info")){
    languageToggler.firstElementChild.classList.remove("text-info");
    languageToggler.firstElementChild.classList.add("small");

    languageToggler.lastElementChild.classList.add("text-info");
    languageToggler.lastElementChild.classList.remove("small");
  } else {
    languageToggler.firstElementChild.classList.remove("small");
    languageToggler.firstElementChild.classList.add("text-info");

    languageToggler.lastElementChild.classList.add("small");
    languageToggler.lastElementChild.classList.remove("text-info");
  }
}