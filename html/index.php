<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CYBERSECURITY</title>
    <link rel="icon" type="image/x-icon" href="../img/escudo.png">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div class="video-background" id="inicio">
        <video autoplay muted loop id="video-background">
            <source src="../videos/hack.mp4" type="video/mp4">
        </video>
        <div class="titulo-main">
            <h1>CYBERSECURITY</h1>
            <p class="frase">"La seguridad es un proceso, no un producto." <br> Bruce Schneier</p>
            <img src="../img/escudo.png" alt="Icono de ciberseguridad" class="frase-image">
        </div>
    </div>

    <header>
        <nav>
            <ul>
                <li><a href="#inicio" class="inicio-link">INICIO</a></li>
                <li><a href="#introduccion">INTRODUCCIÓN</a></li>
                <li><a href="#amenazas">AMENAZAS</a></li>
                <li><a href="#proteccion">PROTECCIÓN</a></li>
                <li><a href="#recursos">RECURSOS</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="introduccion">
            <h2>INTRODUCCIÓN A LA CIBERSEGURIDAD</h2>
            <p>La ciberseguridad protege sistemas, redes y programas de ataques digitales que buscan robar, alterar o destruir información, extorsionar a los usuarios o interrumpir operaciones críticas.</p>
            <div class="content-grid">
                <div class="content-item">
                    <h3>¿POR QUÉ ES IMPORTANTE?</h3>
                    <p>En un mundo cada vez más digitalizado, la ciberseguridad es esencial para proteger la privacidad, la integridad y la disponibilidad de la información. Sin una protección adecuada, las organizaciones y los individuos están expuestos a riesgos como el robo de datos, el fraude y la interrupción de servicios.</p>
                </div>
                <div class="content-item">
                    <h3>ÁREAS CLAVE</h3>
                    <ul>
                        <li><strong>Seguridad de redes:</strong> Protege la infraestructura de red contra accesos no autorizados.</li>
                        <li><strong>Seguridad de aplicaciones:</strong> Asegura que las aplicaciones sean seguras desde su diseño hasta su implementación.</li>
                        <li><strong>Gestión de identidades:</strong> Controla el acceso a los recursos mediante la autenticación y autorización.</li>
                        <li><strong>Respuesta a incidentes:</strong> Proporciona un enfoque estructurado para manejar y mitigar los ciberataques.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="amenazas">
            <h2>PRINCIPALES AMENAZAS</h2>
            <p>Las amenazas cibernéticas son cada vez más sofisticadas. Algunas de las más comunes incluyen:</p>
            <div class="content-grid">
                <div class="content-item">
                    <h3>MALWARE</h3>
                    <p>El malware es software malicioso diseñado para dañar sistemas o robar información. Incluye virus, gusanos, troyanos y spyware. Puede propagarse a través de correos electrónicos, descargas o dispositivos infectados.</p>
                </div>
                <div class="content-item">
                    <h3>PHISHING</h3>
                    <p>El phishing es un intento de engañar a los usuarios para que revelen información confidencial, como contraseñas o números de tarjetas de crédito. Los atacantes suelen hacerse pasar por entidades legítimas mediante correos electrónicos o sitios web falsos.</p>
                </div>
                <div class="content-item">
                    <h3>RANSOMWARE</h3>
                    <p>El ransomware es un tipo de malware que cifra los archivos de la víctima y exige un rescate para restaurar el acceso. Es una de las amenazas más lucrativas para los ciberdelincuentes.</p>
                </div>
                <div class="content-item">
                    <h3>ATAQUES DDoS</h3>
                    <p>Los ataques de denegación de servicio (DDoS) sobrecargan los sistemas con tráfico malicioso, dejándolos inoperativos. Estos ataques pueden afectar a sitios web, servidores y redes.</p>
                </div>
                <div class="content-item">
                    <h3>INGENIERÍA SOCIAL</h3>
                    <p>La ingeniería social es una técnica en la que los atacantes manipulan a las personas para que revelen información confidencial o realicen acciones que comprometan la seguridad. Esto puede incluir llamadas telefónicas falsas, mensajes de texto o interacciones en redes sociales.</p>
                </div>
                <div class="content-item">
                    <h3>INYECCIÓN SQL</h3>
                    <p>Los ataques de inyección SQL ocurren cuando un atacante inserta código malicioso en las consultas de una base de datos. Esto puede permitirles acceder, modificar o eliminar datos sensibles, comprometiendo la integridad de la información.</p>
                </div>
            </div>
        </section>

        <div class="carrusel-content">
            <div class="carrusel">
                <div class="carrusel-item">
                    <p>Malware</p>
                    <img src="../img/malware.jpeg" alt="Malware">
                </div>
                <div class="carrusel-item">
                    <img src="../img/phishing.jpeg" alt="Phishing">
                    <p>Phishing</p>
                </div>
                <div class="carrusel-item">
                    <p>Ransomware</p>
                    <img src="../img/ransomware.jpeg" alt="Ransomware">
                </div>
                <div class="carrusel-item">
                    <img src="../img/ddos.jpeg" alt="Ataques DDoS">
                    <p>Ataques DDoS</p>
                </div>
                <div class="carrusel-item">
                    <p>Ingeniería Social</p>
                    <img src="../img/ing-social.jpeg" alt="Ingeniería Social">
                </div>
                <div class="carrusel-item">
                    <img src="../img/sql-inyection.jpeg" alt="Inyección SQL">
                    <p>Inyección SQL</p>
                </div>
            </div>
        </div>

        <section id="proteccion">
            <h2>¿CÓMO PROTEGERSE?</h2>
            <p>Protegerse contra las amenazas cibernéticas requiere un enfoque proactivo. Aquí hay algunas recomendaciones:</p>
            <div class="content-grid">
                <div class="content-item">
                    <h3>CONTRASEÑAS SEGURAS</h3>
                    <p>Usa contraseñas largas y complejas, y cámbialas regularmente. Considera el uso de un gestor de contraseñas para almacenarlas de forma segura.</p>
                </div>
                <div class="content-item">
                    <h3>ACTUALIZACIONES DE SOFTWARE</h3>
                    <p>Mantén tu software y sistemas operativos actualizados para corregir vulnerabilidades. Las actualizaciones suelen incluir parches de seguridad críticos.</p>
                </div>
                <div class="content-item">
                    <h3>AUTENTICACIÓN DE DOS FACTORES</h3>
                    <p>Habilita la autenticación de dos factores (2FA) para agregar una capa adicional de seguridad. Esto requiere un segundo método de verificación, como un código enviado a tu teléfono.</p>
                </div>
            </div>
        </section>

        <section id="recursos">
            <h2>RECURSOS ADICIONALES</h2>
            <p>Aquí encontrarás enlaces útiles para aprender más sobre ciberseguridad:</p>
            <div class="content-grid">
                <div class="content-item">
                    <h3>DOCUMENTACIÓN OFICIAL</h3>
                    <ul>
                        <li><a href="https://www.enisa.europa.eu/" target="_blank">ENISA - Agencia de la UE para la Ciberseguridad</a>: Recursos y guías de ciberseguridad de la Unión Europea.</li>
                        <li><a href="https://www.incibe.es/" target="_blank">INCIBE - Instituto Nacional de Ciberseguridad de España</a>: Documentación y herramientas para la ciberseguridad en España.</li>
                        <li><a href="https://owasp.org/www-project-top-ten/" target="_blank">OWASP Top Ten</a>: Lista de los diez riesgos de seguridad más críticos en aplicaciones web.</li>
                    </ul>
                </div>
                <div class="content-item">
                    <h3>CURSOS EN LÍNEA</h3>
                    <ul>
                        <li><a href="https://www.coursera.org/" target="_blank">Coursera</a>: Ofrece cursos de ciberseguridad de universidades y empresas líderes.</li>
                        <li><a href="https://www.udemy.com/" target="_blank">Udemy</a>: Plataforma con cursos prácticos sobre ciberseguridad y hacking ético.</li>
                        <li><a href="https://hack4u.io/" target="_blank">Hack4u</a>: Plataforma con cursos prácticos sobre ciberseguridad y hacking ético de s4vitar.</li>
                </div>
                <div class="content-item">
                    <h3>HERRAMIENTAS ÚTILES</h3>
                    <ul>
                        <li><a href="https://www.kali.org/" target="_blank">Kali Linux</a>: Distribución de Linux especializada en pruebas de penetración y seguridad.</li>
                        <li><a href="https://www.wireshark.org/" target="_blank">Wireshark</a>: Analizador de protocolos de red para inspeccionar tráfico en tiempo real.</li>
                        <li><a href="https://www.zaproxy.org/" target="_blank">OWASP ZAP</a>: Herramienta de seguridad para encontrar vulnerabilidades en aplicaciones web.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="comentarios">
        <h2>COMENTARIOS</h2>
        <form action="..\php\enviar_comment.php" method="POST">
            <label for="nombreyapellido">Nombre y Apellido:</label>
            <input type="text" id="nombreyapellido" name="nombreyapellido" required>
    
            <label for="usuario">Nombre de Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
    
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>
    
            <label for="nota">Nota:</label>
            <textarea id="nota" name="nota" required></textarea>
    
            <button type="submit">Enviar</button>
        </form>
    
        
    </section>
    
    <section>
        
        <div id="comentarios-list">
            <?php include ("..\php\cargar_comment.php"); 
            ?>
        </div>

    </section>

</main>
    
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Contacto</h3>
                <p>Email: info@cybersecurity.com</p>
                <p>Teléfono: +123 456 789</p>
            </div>
            <div class="footer-section">
                <h3>Enlaces Rápidos</h3>
                <ul>
                    <li><a href="#introduccion">Introducción</a></li>
                    <li><a href="#amenazas">Amenazas</a></li>
                    <li><a href="#proteccion">Protección</a></li>
                    <li><a href="#recursos">Recursos</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Síguenos</h3>
                <ul>
                    <li><a href="https://facebook.com" target="_blank">Facebook</a></li>
                    <li><a href="https://twitter.com" target="_blank">Twitter</a></li>
                    <li><a href="https://linkedin.com" target="_blank">LinkedIn</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Cyberseguridad. Todos los derechos reservados.</p>
        </div>
    </footer>
    <a href="#inicio" class="nav-inicio">↑</a>
</body>
</html>