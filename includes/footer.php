<?php
// Footer do site
?>
<footer class="site-footer">
    <div class="footer-main">
        <div class="footer-container">
            <!-- About Section -->
            <div class="footer-section">
                <div class="footer-logo">
                    <img src="assets/images/logo-simple.svg" alt="RoboNews Logo">
                    <h3>RoboNews</h3>
                </div>
                <p class="footer-description">
                    Seu portal de notícias sobre robótica, inteligência artificial e as mais recentes inovações tecnológicas.
                </p>
                <div class="footer-social">
                    <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-link" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-section">
                <h4 class="footer-title">Links Rápidos</h4>
                <ul class="footer-links">
                    <li><a href="index.php"><i class="fas fa-chevron-right"></i> Início</a></li>
                    <li><a href="pages/noticias.php"><i class="fas fa-chevron-right"></i> Notícias</a></li>
                    <li><a href="pages/sobre.php"><i class="fas fa-chevron-right"></i> Sobre Nós</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Contato</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Política de Privacidade</a></li>
                </ul>
            </div>

            <!-- Categories -->
            <div class="footer-section">
                <h4 class="footer-title">Categorias</h4>
                <ul class="footer-links">
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Robótica Médica</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Inteligência Artificial</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Automação Industrial</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Robótica Doméstica</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Exploração Espacial</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="footer-section">
                <h4 class="footer-title">Newsletter</h4>
                <p class="newsletter-text">Receba as últimas notícias diretamente no seu email.</p>
                <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Obrigado por se inscrever!');">
                    <input type="email" placeholder="Seu email" required>
                    <button type="submit"><i class="fas fa-paper-plane"></i></button>
                </form>
                <div class="footer-contact">
                    <p><i class="fas fa-envelope"></i> contato@robonews.pt</p>
                    <p><i class="fas fa-phone"></i> +351 123 456 789</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="footer-container">
            <p class="copyright">
                &copy; <?php echo date('Y'); ?> RoboNews. Todos os direitos reservados.
            </p>
            <p class="developer-credit">
                Desenvolvido por: <span class="team-names">João, Eduardo, Carlos, Santiago</span>
            </p>
        </div>
    </div>
</footer>

<style>
/* Footer Styles */
.site-footer {
    background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
    color: #e2e8f0;
    margin-top: 4rem;
}

.footer-main {
    padding: 3rem 0 2rem;
}

.footer-container {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 2rem;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 3rem;
}

.footer-section {
    display: flex;
    flex-direction: column;
}

/* Logo Section */
.footer-logo {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    margin-bottom: 1rem;
}

.footer-logo img {
    width: 40px;
    height: 40px;
    filter: drop-shadow(0 2px 8px rgba(37, 99, 235, 0.5));
}

.footer-logo h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 1.5rem;
    font-weight: 800;
    color: #2563eb;
    margin: 0;
}

.footer-description {
    color: #cbd5e1;
    line-height: 1.6;
    margin-bottom: 1.5rem;
    font-size: 0.95rem;
}

/* Social Links */
.footer-social {
    display: flex;
    gap: 0.75rem;
}

.social-link {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(37, 99, 235, 0.1);
    border: 1px solid rgba(37, 99, 235, 0.3);
    border-radius: 8px;
    color: #3b82f6;
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 1rem;
}

.social-link:hover {
    background: #2563eb;
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(37, 99, 235, 0.4);
}

/* Footer Titles */
.footer-title {
    font-family: 'Poppins', sans-serif;
    font-size: 1.25rem;
    font-weight: 700;
    color: white;
    margin-bottom: 1.5rem;
    position: relative;
    padding-bottom: 0.75rem;
}

.footer-title::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 50px;
    height: 3px;
    background: linear-gradient(90deg, #2563eb, #3b82f6);
    border-radius: 2px;
}

/* Footer Links */
.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 0.75rem;
}

.footer-links a {
    color: #cbd5e1;
    text-decoration: none;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.95rem;
}

.footer-links a i {
    font-size: 0.7rem;
    color: #2563eb;
    transition: transform 0.3s ease;
}

.footer-links a:hover {
    color: #3b82f6;
    padding-left: 0.5rem;
}

.footer-links a:hover i {
    transform: translateX(3px);
}

/* Newsletter */
.newsletter-text {
    color: #cbd5e1;
    margin-bottom: 1rem;
    font-size: 0.95rem;
}

.newsletter-form {
    display: flex;
    margin-bottom: 1.5rem;
}

.newsletter-form input {
    flex: 1;
    padding: 0.75rem 1rem;
    border: 1px solid rgba(37, 99, 235, 0.3);
    background: rgba(30, 41, 59, 0.5);
    color: white;
    border-radius: 8px 0 0 8px;
    font-size: 0.95rem;
    outline: none;
    transition: all 0.3s ease;
}

.newsletter-form input::placeholder {
    color: #94a3b8;
}

.newsletter-form input:focus {
    border-color: #2563eb;
    background: rgba(30, 41, 59, 0.8);
}

.newsletter-form button {
    padding: 0.75rem 1.25rem;
    background: linear-gradient(135deg, #2563eb, #1e40af);
    color: white;
    border: none;
    border-radius: 0 8px 8px 0;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 1rem;
}

.newsletter-form button:hover {
    background: linear-gradient(135deg, #1e40af, #1e3a8a);
    transform: scale(1.05);
}

.footer-contact {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.footer-contact p {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #cbd5e1;
    font-size: 0.9rem;
}

.footer-contact i {
    color: #2563eb;
    width: 20px;
}

/* Footer Bottom */
.footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding: 1.5rem 0;
    margin-top: 2rem;
}

.footer-bottom .footer-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
}

.copyright {
    color: #94a3b8;
    font-size: 0.9rem;
}

.developer-credit {
    color: #94a3b8;
    font-size: 0.9rem;
}

.team-names {
    color: #3b82f6;
    font-weight: 600;
}

/* Responsive */
@media (max-width: 768px) {
    .footer-container {
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    .footer-bottom .footer-container {
        flex-direction: column;
        text-align: center;
    }

    .footer-social {
        justify-content: center;
    }
}
</style>