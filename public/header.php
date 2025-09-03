<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Personal website of Fedy Rahmatullah. An IT and Data Enthusiast.">
    <meta name="author" content="Fedy Rahmatullah">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="Fedy Rahmatullah, IT Enthusiast, Data Analysis, Personal Portfolio, Projects, Experience">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/mediaqueries.css" />
    <link rel="stylesheet" href="assets/css/project-style.css" />
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="assets/img/favicon.png" rel="icon">
    <title><?php echo isset($title) ? $title : 'Default Title'; ?></title>


    <meta property="og:title" content="Hi I'm Fedy.">
    <meta property="og:description" content="Personal website of Fedy Rahmatullah. An IT and Data Enthusiast.">
    <meta property="og:image" content="https://fedyr.com/assets/img/favicon.png">
    <meta property="og:url" content="https://fedyr.com">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Fedy Rahmatullah - IT Enthusiast & Data Analyst | Portfolio">
    <meta name="twitter:description" content="Personal website of Fedy Rahmatullah, an IT enthusiast and data analyst. Discover projects, experience, and insights into data analysis.">
    <meta name="twitter:image" content="https://fedyr.com/assets/img/favicon.png">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Person",
      "name": "Fedy Rahmatullah",
      "description": "IT Enthusiast and Data Analyst. Personal website showcasing projects and experience.",
      "url": "https://fedyr.com",
      "image": "https://fedyr.com/assets/img/favicon.png"
    }
    </script>
</head>
<body>
    <nav id="desktop-nav">
        <div onclick="location.href='index.php'" class="logo">Fedy Rahmatullah</div>
        <div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </div>
    </nav>
    <nav id="hamburger-nav">
        <div onclick="location.href='index.php'" aria-label="Home" class="logo">Fedy Rahmatullah</div>
        <div class="hamburger-menu">
            <div class="hamburger-icon" aria-label="Toggle Menu" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu-links">
                <li><a href="index.php" onclick="toggleMenu()">Home</a></li>
                <li><a href="projects.php" onclick="toggleMenu()">Projects</a></li>
                <li><a href="about.php" onclick="toggleMenu()">About</a></li>
            </div>
        </div>
    </nav>
