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
  
  if (languageToggler.firstElementChild.classList.contains("text-info")) {
    document.cookie = "lang=cs; max-age=" + 86400*30;
    location.reload();
  } else {
    document.cookie = "lang=en; max-age=" + 86400*30;
    location.reload();
  }
};

// Project cards section
fetch("./assets/data/projects.json")
  .then((response) => response.json())
  .then((data) => {
    console.log(data);
    var cardsContainer = document.getElementById("projectCards");

    data
      .sort((a, b) => new Date(b.date) - new Date(a.date))
      .forEach((project) => {
        cardsContainer.appendChild(createProjectCard(
          project.imgPath,
          project.title,
          project.description,
          project.liveUrl,
          project.codeUrl,
          project.techStack,
          project.date
        ));
        console.log(project);
      });
  });

// Generates HTML markup from card data and returns container element.
function createProjectCard(
  imgPath,
  title,
  description,
  liveUrl,
  codeUrl,
  techStack,
  date
) {
  var container = document.createElement("div");
  container.classList.add("col-10", "col-sm-6", "col-lg-4", "p-2");
  var techStackTags = "";
  techStack.forEach((tag) => {
    techStackTags += ` <span class="text-bg-info opacity-75">${String(
      tag
    )}</span>`;
  });

  var containerHTML =
    `
  <div class="card shadow-info border-info-subtle">
    <img class="card-img-top object-fit-contain" style="max-height: 175px;" src="${imgPath}" alt="${title}">
    <div class="d-flex flex-column card-body p-2">
      <div class="d-flex justify-content-between">
          <h5 class="card-title">${title}</h5>
          <div class="text-secondary small text-nowrap">${new Date(date).toLocaleDateString()}</div>
      </div>
      <p class="mb-1"><span class="text-info">Tech Stack:</span>` +
    techStackTags +
    `</p>
      <p class="card-text">${description}</p>
      <div class="mt-auto d-flex justify-content-between">
    `
    
  if(String(liveUrl) != 0){
    containerHTML += `<a href="${liveUrl}" class="btn btn-outline-info" target="_blank">Live preview</a>`
  }
  
  containerHTML +=`
          <a href="${codeUrl}" class="btn btn-outline-info" target="_blank">GitHub</a>
      </div>
    </div>
  </div>
  `;

  container.innerHTML = containerHTML;

  return container;
}
