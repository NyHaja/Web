<!-- <?php
    $messageConfirmation = "";
    require_once("assets/php/lang/local.php");
?> -->
<header class="header">
    <ul>
        <li>
            <a href="?lang=fr">
                <img src="/assets/images/france.png" alt="fr" id="flag-icon">
            </a>
        </li>
        <li>
            <a href="?lang=en">
                <img src="/assets/images/royaume-uni.png" alt="en" id="flag-icon">
            </a>
        </li>
    </ul>

    <a href="#" class="logo">Ny Haja.</a>

    <nav class="navbar">
        <a href="#home" class="active"><?php echo $STRAD["accueil"]?></a>
        <a href="#about"><?php echo $STRAD["a_propos"]?></a>
        <a href="#experience"><?php echo $STRAD["formations"]?></a>
        <a href="#portfolio"><?php echo $STRAD["portfolio"]?></a>
        <a href="#contact"><?php echo $STRAD["contact"]?></a>
    </nav>

    <div class="bx bx-moon" id="darkMode-icon"></div>

    <div class="bx bx-menu" id="menu-icon"></div>
</header>