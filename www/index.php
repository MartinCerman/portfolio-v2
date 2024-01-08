<!DOCTYPE html>
<html lang="cs" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Moje osobní stránka která obsahuje portfolio, tech stack co používám, odkazy na GitHub a další užitečné věci.">
    <meta name="keywords" content="HTML,CSS,JavaScript,portfolio,dotnet,csharp">
    <meta name="author" content="Martin Čerman">
    <title>MartinCerman.eu</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="container-xl">
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h1 class="display-6">Martin Čerman .eu</h1>
            </a>
            <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#headerNav" aria-controls="headerNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="headerNav">
                <ul class="navbar-nav w-sm-75 ms-sm-auto ms-sm-5 d-flex justify-content-around text-center">
                    <li class="nav-item ms-lg-5">
                        <a class="nav-link" aria-current="page" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex gap-2 align-items-center position-absolute end-0 top-0">
                <div id="theme-toggler">
                    <svg class="bi" width="20" height="20" fill="currentColor">
                        <use xlink:href="./assets/images/icons/bootstrap-icons.svg#sun-fill" />
                    </svg>
                    <svg class="bi d-none" width="20" height="20" fill="currentColor">
                        <use xlink:href="./assets/images/icons/bootstrap-icons.svg#moon-fill" />
                    </svg>
                </div>
                <div id="language-toggler">
                    <span class="text-info">EN</span> / <span class="text-secondary small">CZ</span>
                </div>
            </div>

        </div>
    </nav>
    <main>
        <!-- About -->
        <section id="about" class="my-5">
            <div class="w-sm-75 pe-5">
                <p class="text-secondary mb-0">Hello, I'm</p>
                <h2 class="h1 fw-light mb-0">Martin Čerman</h2>
                <p class="lead text-info">Junior Back-End Developer</p>
                <p class="pe-5 lead">I am a junior programmer and I am currently studying a course focused on web applications and object-oriented programming at the Technical University of Ostrava.</p>
            </div>
            <div class="accordion" id="aboutMeAccordion">
                <div class="w-100 text-center">
                    <svg class="bi text-info border border-1 border-info rounded-5" width="60" height="30" fill="currentColor" data-bs-toggle="collapse" data-bs-target="#itemOne" aria-expanded="false" aria-controls="collapseOne">
                        <use xlink:href="./assets/images/icons/bootstrap-icons.svg#chevron-double-down" />
                    </svg>
                </div>
                <div id="itemOne" class="collapse">
                    <div class="d-flex flex-column flex-md-row align-items-center">
                        <img class="w-50 ms-1" style="max-width: 326px;" src="./assets/images/Robot-flying.png" alt="Robot">
                        <p class="w-sm-75 lead">Je mi něco přes 30 let a jsem z Vysočiny. Vždy mě zajímalo jak se tvoří hry a k programování jsem se dostal právě od pokusů v herním enginu Unreal Engine 5, který je postavený na C++. Nakonec právě programování v C++ mě velmi rychle začlo bavíc více než vývoj her samotných a po pár měsících samostudia jsem získal možnost zúčastnit se kurzu <a class="link-primary" target="_blank" href="http://kurzy.vsb.cz/rekval-kurzy/programovani-obsah.php">OOP a programování www aplikací</a> a databází pořádaným VŠB - Technická univerzita Ostrava, kterým právě procházím.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About -->
        <!-- Skills -->
        <section id="skills">
        <h2 class="display-4 text-center">Skills</h2>
        <h3 class="h1 fw-light mb-0">Primary</h3>
        <p class="text-secondary lh-1">- Technologies I use the most and study further.</p>
        <p><span class="px-1 me-1 text-bg-info opacity-75">C#</span> <span class="px-1 me-1 text-bg-info opacity-75">.NET</span> <span class="px-1 me-1 text-bg-info opacity-75">ASP.NET Core</span> <span class="px-1 me-1 text-bg-info opacity-75">SQL</span> <span class="px-1 me-1 text-bg-info opacity-75">Visual Studio 2022</span> <span class="px-1 me-1 text-bg-info opacity-75">Git</span> <span class="px-1 me-1 text-bg-info opacity-75">GitHub</span></p>
        <h3 class="h1 fw-light mb-0">Secondary</h3>
        <p class="text-secondary lh-1">- Technologies I possess basic knowledge in and use occasionally.</p>
        <p><span class="px-1 me-1 text-bg-info opacity-75">PHP</span> <span class="px-1 me-1 text-bg-info opacity-75">JavaScript</span> <span class="px-1 me-1 text-bg-info opacity-75">HTML</span> <span class="px-1 me-1 text-bg-info opacity-75">CSS</span> <span class="px-1 me-1 text-bg-info opacity-75">SASS</span> <span class="px-1 me-1 text-bg-info opacity-75">Bootstrap</span> <span class="px-1 me-1 text-bg-info opacity-75">C++</span> <span class="px-1 me-1 text-bg-info opacity-75">VS Code</span> <span class="px-1 me-1 text-bg-info opacity-75">MySQL</span> <span class="px-1 me-1 text-bg-info opacity-75">MS SQL Server</span> <span class="px-1 me-1 text-bg-info opacity-75">VMware Workstation</span></p>
        <h3 class="h1 fw-light mb-0">Other</h3>
        <p class="text-secondary lh-1">- At least I know what you're talking about, if that counts.</p>
        <p><span class="px-1 me-1 text-bg-info opacity-75">Visual Basic</span> <span class="px-1 me-1 text-bg-info opacity-75">Java</span> <span class="px-1 me-1 text-bg-info opacity-75">React</span> <span class="px-1 me-1 text-bg-info opacity-75">Linux</span> <span class="px-1 me-1 text-bg-info opacity-75">Docker</span> <span class="px-1 me-1 text-bg-info opacity-75">ITIL</span></p>
        </section>
        <!-- /Skills -->
        <!-- Projects -->
        <section id="projects" class="container">
            <h2 class="display-4 text-center">Projects</h2>
            <div id="projectCards" class="d-flex flex-wrap justify-content-sm-start justify-content-center">
                <!-- Content generated by index.js -->
            </div>
        </section>
        <!-- /Projects -->
        <!-- Contact -->
        <section id="contact" class="container mt-3">
            <h2 class="display-4 text-center">Contact Me</h2>
            <form action="" class="col-md-8 col-10 px-lg-5 p-2 mx-auto">
                <div class="form-floating mb-2">
                    <input class="form-control border-dark-subtle" type="text" name="name" id="name" placeholder="Name" required>
                    <label for="name" class="text-muted small">Name:</label>
                </div>
                <div class="form-floating mb-2">
                    <input class="form-control border-dark-subtle" type="email" name="email" id="email" placeholder="E-mail" required>
                    <label for="email" class="text-muted small">E-mail:</label>
                </div>
                <div class="form-floating mb-2">
                    <textarea class="form-control border-dark-subtle" name="message" id="message" placeholder="Message" required></textarea>
                    <label for="message" class="text-muted small">Message:</label>
                </div>
                <button class="btn btn-outline-info" type="submit">Submit</button>
            </form>
        </section>
        <!-- /Contacts -->
    </main>
    <footer>

    </footer>
    <script src="./assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/index.js"></script>
</body>

</html>