// Closes expanded navbar on click even if the click is not on the toggler button.
document.addEventListener("click", () => {
  if (document.querySelector(".navbar-collapse").classList.contains("show")) {
    document.querySelector(".navbar-toggler").click();
  }
});

// Dark / light theme toggle.
const themeToggler = document.getElementById("theme-toggler");

// Sets proper theme on load.

if (document.documentElement.getAttribute("data-bs-theme") === "dark"){
  themeToggler.firstElementChild.classList.remove("d-none");
  themeToggler.lastElementChild.classList.add("d-none");
} else {
  themeToggler.firstElementChild.classList.add("d-none");
  themeToggler.lastElementChild.classList.remove("d-none");
};

// Handles theme toggler button.
themeToggler.addEventListener("click", () => {
  if (document.documentElement.getAttribute("data-bs-theme") === "dark") {
    document.documentElement.setAttribute("data-bs-theme", "light");
    themeToggler.firstElementChild.classList.add("d-none");
    themeToggler.lastElementChild.classList.remove("d-none");
    document.cookie = "theme=light; SameSite=Lax; max-age=" + 86400*30;
  } else {
    document.documentElement.setAttribute("data-bs-theme", "dark");
    themeToggler.firstElementChild.classList.remove("d-none");
    themeToggler.lastElementChild.classList.add("d-none");
    document.cookie = "theme=dark; SameSite=Lax; max-age=" + 86400*30;
  }
});

// Language toggle.
const languageToggler = document.getElementById("language-toggler");
languageToggler.addEventListener("click", () => toggleLanguageSwitch());

function hideThemeToggler(hide = true) {
  if (hide === true) {
    document.getElementById("theme-toggler").classList.add("d-none");
  } else {
    document.getElementById("theme-toggler").classList.remove("d-none");
  }
};

function toggleLanguageSwitch() {
  
  if (languageToggler.firstElementChild.classList.contains("text-info")) {
    document.cookie = "lang=cs; SameSite=Lax; max-age=" + 86400*30;
    location.reload();
  } else {
    document.cookie = "lang=en; SameSite=Lax; max-age=" + 86400*30;
    location.reload();
  }
};

// Show More button
const btnShowMore = document.getElementById("showMore");


// Project cards section
let projectsFilePath = "./assets/data/projects-";
projectsFilePath += document.documentElement.getAttribute("lang");
projectsFilePath += ".json";

fetch(projectsFilePath)
  .then((response) => response.json())
  .then((data) => {
    const cardsContainer = document.getElementById("projectCards");

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
  const container = document.createElement("div");
  container.classList.add("col-10", "col-sm-6", "col-lg-4", "p-2");
  let techStackTags = "";
  techStack.forEach((tag) => {
    techStackTags += ` <span class="text-bg-info opacity-75">${String(
      tag
    )}</span>`;
  });

  let containerHTML =
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
    containerHTML += `<a href="${liveUrl}" class="btn btn-outline-info" target="_blank">`

    if(document.documentElement.getAttribute("lang") === "cs"){
      containerHTML += `Živý náhled</a>`
    } else {
      containerHTML += `Live Preview</a>`
    }
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

// Contact form submit
const btnSubmit = document.querySelector("button[type='submit']");
const contactForm = document.getElementById("contactForm");

contactForm.addEventListener("submit", async (e) =>{
  e.preventDefault();
  const inputName = e.target.name;
  const inputEmail = e.target.email;
  const inputMessage = e.target.message;
  
  if(!inputName.validity.valid || !inputEmail.validity.valid || !inputMessage.validity.valid){
    return;
  } else {
    setSubmitBtnContent(1);
    let responseCode = await postFormData(inputName.value,inputEmail.value, inputMessage.value);
    if(responseCode === 200){
      setSubmitBtnContent(2);
    } else {
      setSubmitBtnContent(3);
      alert("Form submission failed due to a server error. Please retry later.")
    }
  }
});


async function postFormData(name, email, message){
  const formData = new FormData();
  formData.append("name", name);
  formData.append("email", email);
  formData.append("message", message);

  const response = await fetch("src/sendEmail.php",{
    method: "POST",
    body: formData
  });

  return response.status;
}

function setSubmitBtnContent(elementIndex){
  const btnSubmitChildren = document.querySelector("button[type='submit']").children;
  if(elementIndex >= btnSubmitChildren.length){
    return;
  }

  for(var i = 0; i < btnSubmitChildren.length; ++i){
    btnSubmitChildren[i].classList.add("d-none");
  }

  btnSubmitChildren[elementIndex].classList.remove("d-none");
}