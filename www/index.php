<?php

$locale = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
if (isset($_COOKIE["theme"])) {
    $theme = $_COOKIE["theme"];
} else {
    $theme = "dark";
}

if (!isset($_COOKIE["lang"])) {
    if ($locale === "cs") {
        setcookie("lang", "cs", [
            'expires' => time() + 86400 * 30,
            'path' => '/',
            'samesite' => 'Lax'
        ]);
        $textArray = require "./src/locale/cs.php";
        $csBtnClass = "text-info";
        $enBtnClass = "text-secondary small";
    } else {
        $locale = "en";
        setcookie("lang", "en", [
            'expires' => time() + 86400 * 30,
            'path' => '/',
            'samesite' => 'Lax'
        ]);
        $textArray = require "./src/locale/en.php";
        $enBtnClass = "text-info";
        $csBtnClass = "text-secondary small";
    }
} elseif ($_COOKIE["lang"] === "cs") {
    $locale = "cs";
    $textArray = require "./src/locale/cs.php";
    $csBtnClass = "text-info";
    $enBtnClass = "text-secondary small";
} else {
    $locale = "en";
    $textArray = require "./src/locale/en.php";
    $enBtnClass = "text-info";
    $csBtnClass = "text-secondary small";
}

?>

<!DOCTYPE html>
<html lang="<?= $locale ?>" data-bs-theme="<?= $theme ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $textArray["page-description"] ?>">
    <meta name="keywords" content="HTML,CSS,JavaScript,portfolio,dotnet,csharp">
    <meta name="author" content="Martin Čerman">
    <title>MartinCerman.eu</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="container-xl pt-5">
    <header id="header" class="navbar navbar-expand-sm">
        <nav class="container-fluid bg-body fixed-top pt-2">
            <a class="navbar-brand" href="#">
                <h1 class="display-6 d-sm-inline-block d-none">Martin Čerman .eu</h1>
            </a>
            <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#headerNav" aria-controls="headerNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon me-3"></span>
            </button>
            <div class="collapse navbar-collapse" id="headerNav">
                <ul class="navbar-nav w-sm-75 ms-sm-auto d-flex justify-content-around text-center">
                    <li class="nav-item ms-lg-5">
                        <a class="nav-link" aria-current="page" href="#about"><?= $textArray["header-about"] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills"><?= $textArray["header-skills"] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects"><?= $textArray["header-projects"] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><?= $textArray["header-contact"] ?></a>
                    </li>
                </ul>
            </div>
            <div class="d-flex gap-2 align-items-center position-absolute end-0 top-0 me-1">
                <div id="theme-toggler">
                    <svg class="bi" width="20" height="20" fill="currentColor">
                        <use xlink:href="./assets/images/icons/bootstrap-icons.svg#moon-fill" />
                    </svg>
                    <svg class="bi d-none" width="20" height="20" fill="currentColor">
                        <use xlink:href="./assets/images/icons/bootstrap-icons.svg#sun-fill" />
                    </svg>
                </div>
                <div id="language-toggler">
                    <span class="<?= $enBtnClass ?>">EN</span> / <span class="<?= $csBtnClass ?>">CZ</span>
                </div>
            </div>
        </nav>
    </header>
    <main data-bs-spy="scroll" data-bs-target="#header" data-bs-root-margin="0% 0% -20% 0%">
        <!-- About -->
        <section id="about" class="my-5">
            <div class="w-sm-75 pe-5">
                <p class="text-secondary mb-0"><?= $textArray["about-hello"] ?></p>
                <h2 class="h1 fw-light mb-0">Martin Čerman</h2>
                <p class="lead text-info"><?= $textArray["about-title"] ?></p>
                <p class="pe-5 lead"><?= $textArray["about-p1"] ?></p>
            </div>
            <div class="accordion" id="aboutMeAccordion">
                <div class="d-flex justify-content-center text-center mt-5">
                    <div role="navigation" id="showMore" class="text-info border border-1 border-info rounded-5 collapsed" data-bs-toggle="collapse" data-bs-target="#itemOne" aria-expanded="false" aria-controls="itemOne">
                        <p class="m-0"><?= $textArray["about-button"] ?></p>
                        <svg class="bi" width="150" height="30" fill="currentColor">
                            <use xlink:href="./assets/images/icons/bootstrap-icons.svg#chevron-double-down" />
                        </svg>
                    </div>
                </div>
                <div id="itemOne" class="collapse">
                    <div class="d-flex flex-column flex-md-row align-items-center">
                        <img class="w-50 ms-1" style="max-width: 326px;" src="./assets/images/Robot-flying.png" alt="Robot">
                        <p class="w-sm-75 lead"><?= $textArray["about-p2"] ?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About -->
        <!-- Skills -->
        <section id="skills" class="my-5">
            <h2 class="display-4 text-center"><?= $textArray["skills-heading"] ?></h2>
            <!-- Primary Skills -->
            <h3 class="h1 fw-light mb-0"><?= $textArray["skills-primary"] ?></h3>
            <p class="text-secondary lh-1"><?= $textArray["skills-primary-text"] ?></p>
            <p><span class="px-1 me-1 text-bg-info opacity-75">C#</span> <span class="px-1 me-1 text-bg-info opacity-75">.NET</span> <span class="px-1 me-1 text-bg-info opacity-75">ASP.NET Core</span> <span class="px-1 me-1 text-bg-info opacity-75">SQL</span> <span class="px-1 me-1 text-bg-info opacity-75">Visual Studio 2022</span> <span class="px-1 me-1 text-bg-info opacity-75">Git</span> <span class="px-1 me-1 text-bg-info opacity-75">GitHub</span></p>
            <!-- Secondary Skills -->
            <h3 class="h1 fw-light mb-0"><?= $textArray["skills-secondary"] ?></h3>
            <p class="text-secondary lh-1"><?= $textArray["skills-secondary-text"] ?></p>
            <p><span class="px-1 me-1 text-bg-info opacity-75">PHP</span> <span class="px-1 me-1 text-bg-info opacity-75">JavaScript</span> <span class="px-1 me-1 text-bg-info opacity-75">HTML</span> <span class="px-1 me-1 text-bg-info opacity-75">CSS</span> <span class="px-1 me-1 text-bg-info opacity-75">SASS</span> <span class="px-1 me-1 text-bg-info opacity-75">Bootstrap</span> <span class="px-1 me-1 text-bg-info opacity-75">C++</span> <span class="px-1 me-1 text-bg-info opacity-75">VS Code</span> <span class="px-1 me-1 text-bg-info opacity-75">MySQL</span> <span class="px-1 me-1 text-bg-info opacity-75">MS SQL Server</span> <span class="px-1 me-1 text-bg-info opacity-75">VMware Workstation</span></p>
            <!-- Other Skills -->
            <h3 class="h1 fw-light mb-0"><?= $textArray["skills-other"] ?></h3>
            <p class="text-secondary lh-1"><?= $textArray["skills-other-text"] ?></p>
            <p><span class="px-1 me-1 text-bg-info opacity-75">Visual Basic</span> <span class="px-1 me-1 text-bg-info opacity-75">Java</span> <span class="px-1 me-1 text-bg-info opacity-75">React</span> <span class="px-1 me-1 text-bg-info opacity-75">Linux</span> <span class="px-1 me-1 text-bg-info opacity-75">Docker</span> <span class="px-1 me-1 text-bg-info opacity-75">ITIL</span></p>
        </section>
        <!-- /Skills -->
        <!-- Projects -->
        <section id="projects" class="container my-5">
            <h2 class="display-4 text-center mb-3"><?= $textArray["projects-heading"] ?></h2>
            <div id="projectCards" class="d-flex flex-wrap justify-content-sm-start justify-content-center">
                <!-- Content generated by index.js -->
            </div>
        </section>
        <!-- /Projects -->
        <!-- Contact -->
        <section id="contact" class="container mt-3 my-5">
            <h2 class="display-4 text-center mb-0"><?= $textArray["contact-heading"] ?></h2>
            <div>
                <p class="text-secondary lh-1 col-10 mx-auto text-md-center"><?= $textArray["contact-p1"] ?></p>
            </div>
            <form id="contactForm" action="src/sendEmail.php" method="post" class="col-md-8 col-10 px-lg-5 p-2 mx-auto" target="_blank">
                <div class="form-floating mb-2">
                    <input class="form-control border-dark-subtle" type="text" name="name" id="name" placeholder="Name" required>
                    <label for="name" class="text-muted small"><?= $textArray["contact-name"] ?></label>
                </div>
                <div class="form-floating mb-2">
                    <input class="form-control border-dark-subtle" type="email" name="email" id="email" placeholder="E-mail" required>
                    <label for="email" class="text-muted small"><?= $textArray["contact-email"] ?></label>
                </div>
                <div class="form-floating mb-2">
                    <textarea class="form-control border-dark-subtle" name="message" id="message" placeholder="Message" required></textarea>
                    <label for="message" class="text-muted small"><?= $textArray["contact-message"] ?></label>
                </div>
                <button class="btn btn-outline-info d-flex align-items-center justify-content-center" type="submit">
                    <span class=""><?= $textArray["contact-submit"] ?></span>
                    <span class="d-none spinner-border text-info" style="width: 1.75rem; height: 1.75rem;" role="status" aria-hidden="true"></span>
                    <svg class="d-none bi text-success" width="40" height="40" fill="currentColor">
                        <use xlink:href="./assets/images/icons/bootstrap-icons.svg#check2" />
                    </svg>
                    <svg class="d-none bi text-info" width="35" height="35" fill="currentColor">
                        <use xlink:href="./assets/images/icons/bootstrap-icons.svg#x-lg" />
                    </svg>
                </button>
            </form>
        </section>
        <!-- /Contacts -->
    </main>
    <footer>
        <div class="text-center">
            <p><?= $textArray["footer-p1"] ?></p>
        </div>
    </footer>
    <script src="./assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/index.js"></script>
</body>

</html>