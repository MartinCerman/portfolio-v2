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
                        <a class="nav-link" aria-current="page" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
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
        <section>
            <div class="w-sm-75 pe-5">
                <p class="text-secondary mb-0">Hello, I'm</p>
                <h2 class="h1 fw-light mb-0">Martin Čerman</h2>
                <p class="lead text-info">Junior Back-End Developer</p>
                <p class="pe-5 lead">I am a junior programmer and I am currently studying a course focused on web applications and object-oriented programming at the Technical University of Ostrava.</p>
            </div>
            <svg class="bi text-info border border-1 border-info rounded-5" width="60" height="30" fill="currentColor">
                <use xlink:href="./assets/images/icons/bootstrap-icons.svg#chevron-double-down" />
            </svg>
        </section>
        <!-- /About -->
        <!-- Skills -->
        <section>

        </section>
        <!-- /Skills -->
        <!-- Projects -->
        <section>

        </section>
        <!-- /Projects -->
        <!-- Contact -->
        <section>

        </section>
        <!-- /Contacts -->
    </main>
    <footer>

    </footer>
    <script src="./assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/index.js"></script>
</body>

</html>