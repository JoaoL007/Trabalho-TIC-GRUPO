<?php
// Header do site - será desenvolvido pelo Eduardo
?>
<header class="site-header">
    <div class="container">
        <div class="logo">
            <img src="assets/images/logo.svg" alt="RoboNews Logo" class="logo-img">
            <h1>RoboNews</h1>
        </div>
        <div class="header-info">
            <p>Portal de Notícias de Robótica</p>
        </div>
    </div>
</header>

<style>
    .site-header {
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        padding: 20px 0;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        color: white;
    }

    .site-header .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .site-header .logo {
        text-align: left;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .site-header .logo .logo-img {
        width: 48px;
        height: 48px;
        object-fit: contain;
        filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
    }

    .site-header .logo h1 {
        font-size: 32px;
        font-weight: 700;
        margin: 0;
        color: white;
    }

    .site-header .header-info p {
        font-size: 16px;
        margin: 0;
        color: rgba(255, 255, 255, 0.9);
        font-weight: 500;
    }

    /* Responsividade */
    @media (max-width: 768px) {
        .site-header .container {
            flex-direction: column;
            gap: 10px;
            text-align: center;
        }

        .site-header .logo h1 {
            font-size: 28px;
        }

        .site-header .header-info p {
            font-size: 14px;
        }
    }
</style>