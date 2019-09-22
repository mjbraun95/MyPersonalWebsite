<header>
    <div id="navbar">
        <a href="index.php" <?php if ($currentPage === 'About') {echo 'class="active"';} ?>>About</a></li>
        <a href="projects.php" <?php if ($currentPage === 'Projects') {echo 'class="active"';} ?>>Projects</a></li>
        <a href="pdfs/resume.pdf" target="_blank" <?php if ($currentPage === 'Resume') {echo 'class="active"';} ?>>Resume</a></li>
        <a href="contact.php" <?php if ($currentPage === 'Contact') {echo 'class="active"';} ?>>Contact</a></li>
        <a href="https://github.com/mjbraun95/" target="_blank" <?php if ($currentPage === 'Github') {echo 'class="active"';} ?>>Github</a></li>
        <a href="https://www.linkedin.com/in/matthewbraun4/" target="_blank" <?php if ($currentPage === 'LinkedIn') {echo 'class="active"';} ?>>LinkedIn</a></li>

    </div>
    <script src="navbar.js"></script>
</header>
<body>
    <div class="titlehead"><h2><?php echo($title); ?></h2></div>