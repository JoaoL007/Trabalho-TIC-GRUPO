<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoboNews - Menu</title>
    
</head>
<body>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');

            function updateActiveStateBasedOnURL() {
                const currentPath = window.location.pathname;
                navLinks.forEach(link => {
                    const linkHref = link.getAttribute('href');
                    const normalizedLink = linkHref.replace('./', '').replace(/^\/+/, '');
                    if (currentPath.endsWith(normalizedLink) || 
                        (normalizedLink === 'index.php' && (currentPath.endsWith('/') || currentPath.endsWith('/index.php')))) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });
            }

            updateActiveStateBasedOnURL();
        });
    </script>
</body>
</html>