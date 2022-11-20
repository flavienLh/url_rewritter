<?php
require_once ('./config/config.php');
// left menu items
$menu = [
    'index' => 'Home'
];

function getActiveLink($link) {
    if ($_SERVER['REQUEST_URI'] === "/php-projet-1/$link.php") return 'active';
}
?>
<nav>
    <ul>
        <?php foreach($menu as $link => $name) : ?>
            <li>
                <a href="./<?= $link ?>.php" class="<?= getActiveLink($link) ?>"><?= $name ?></a>
            </li>
        <?php endforeach ?>
    </ul>

    <!-- right menu items -->
    <ul>
        <!-- session : login or (logout and dashboard) -->
        <?php if (!isset($_SESSION['email'])) : ?>
            <li>
                <a href="./login.php" class="<?= getActiveLink('login') ?>">Login</a>
            </li>
            <br>
            <li>
                <a href="./register.php" class="<?= getActiveLink('register') ?>">Register</a>
            </li>
        <?php else : ?>
            <li>
                <a href="./deconnexion.php">Logout</a>
            </li>
            <li>
                <a href="./dashboard.php" class="<?= getActiveLink('dashboard') ?>">Dashboard</a>
            </li>
           
        <?php endif ?>
        <!-- theme -->
        <li class="btn-theme">
            <input type="checkbox" id="cbo-theme">
            <label for="cbo-theme">
                <svg viewBox="0 0 384 512" class="day">
                    <path d="M112.1 454.3c0 6.297 1.816 12.44 5.284 17.69l17.14 25.69c5.25 7.875 17.17 14.28 26.64 14.28h61.67c9.438 0 21.36-6.401 26.61-14.28l17.08-25.68c2.938-4.438 5.348-12.37 5.348-17.7L272 415.1h-160L112.1 454.3zM192 0C90.02 .3203 16 82.97 16 175.1c0 44.38 16.44 84.84 43.56 115.8c16.53 18.84 42.34 58.23 52.22 91.45c.0313 .25 .0938 .5166 .125 .7823h160.2c.0313-.2656 .0938-.5166 .125-.7823c9.875-33.22 35.69-72.61 52.22-91.45C351.6 260.8 368 220.4 368 175.1C368 78.8 289.2 .0039 192 0zM288.4 260.1c-15.66 17.85-35.04 46.3-49.05 75.89h-94.61c-14.01-29.59-33.39-58.04-49.04-75.88C75.24 236.8 64 206.1 64 175.1C64 113.3 112.1 48.25 191.1 48C262.6 48 320 105.4 320 175.1C320 206.1 308.8 236.8 288.4 260.1zM176 80C131.9 80 96 115.9 96 160c0 8.844 7.156 16 16 16S128 168.8 128 160c0-26.47 21.53-48 48-48c8.844 0 16-7.148 16-15.99S184.8 80 176 80z"/>
                </svg>
                <svg viewBox="0 0 512 512" class="night">
                    <path d="M421.6 379.9c-.6641 0-1.35 .0625-2.049 .1953c-11.24 2.143-22.37 3.17-33.32 3.17c-94.81 0-174.1-77.14-174.1-175.5c0-63.19 33.79-121.3 88.73-152.6c8.467-4.812 6.339-17.66-3.279-19.44c-11.2-2.078-29.53-3.746-40.9-3.746C132.3 31.1 32 132.2 32 256c0 123.6 100.1 224 223.8 224c69.04 0 132.1-31.45 173.8-82.93C435.3 389.1 429.1 379.9 421.6 379.9zM255.8 432C158.9 432 80 353 80 256c0-76.32 48.77-141.4 116.7-165.8C175.2 125 163.2 165.6 163.2 207.8c0 99.44 65.13 183.9 154.9 212.8C298.5 428.1 277.4 432 255.8 432z"/>
                </svg>
            </label>
        </li>
    </ul>
</nav>
