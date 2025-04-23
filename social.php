<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon">
    <title>Portfolio</title> 
</head> 
<body>

    <nav class="menu">
        <div class="logo-img">
            <img src="imagens/teste_logo2.png" alt="logo2">
        </div>

        <div class="header">

            <div class="header-links">
                <div class="panqueca">
                <a href="index.html">Início</a>
                    <a href="about.html">Sobre</a>
                    <a href="certifications.html">Certificados</a>
                    <a href="social.php">Social</a>
                    <a href="listaaluno.php">Cadastro</a>
                </div>
        </div>
    </nav>

    
    <section class="section-about" id="section-about">
        <div class="tamanho-video">
        <div class="contact-text">
                    <h1>E&S Studio</h1>
        </div>
            <video autoplay muted loop id="myVideo">
                <source src="videos/backsocial.mp4" type="video/mp4">
              </video>      
        </div>          
    </section>

     
<script>
    var video = document.getElementById("myVideo");
    var btn = document.getElementById("myBtn");
    
    function myFunction() {
      if (video.paused) {
        video.play();
        btn.innerHTML = "Pause";
      } else {
        video.pause();
        btn.innerHTML = "Play";
      }
    }
    </script>

<section class="section-social-media" id="section-social-media"> 
    <div class="es-sm">
        <div class="box-social-media-sabrina">
            <div class="aaa">
            <div class="titulo-links-sm">
                <h1>Continue por dentro da minha jornada!</h1>
            </div>
                <div class="img-social-media-sabrina">
            <img src="img-galeria-sasa/sasa-contact.png" alt="sabrina-sm">
        </div>
            </div>
        
        <div class="box-links-sm">
            <div class="links-sm">
           
                
                <a href="https://br.linkedin.com/" target="_blank"><i class="bi bi-linkedin"></i></a>
                
                <a href=" https://workspace.google.com/intl/pt-BR/gmail/" target="_blank"><i class="bi bi-envelope"></i></a>

                <a href="https://github.com/sabrinasantana17" target="_blank"><i class="bi bi-github"></i></a>

                <a href="https://pt-br.facebook.com/" target="_blank"><i class="bi bi-facebook"></i></a>

                <a href="https://www.instagram.com/__sabrina.s17/" target="_blank"><i class="bi bi-instagram"></i></a>

                <a href="https://x.com" target="_blank"><i class="bi bi-twitter-x"></i></a>
                
            </div>
        </div>
    </div> 
    <br><br><br><br>

    <div class="box-social-media-ellis">
        <div class="aaa">
        <div class="titulo-links-sm">
                <h1>Siga-me para acompanhar meus projetos!</h1>
            </div>
            <div class="img-social-media-ellis">
            <img src="imagens/eu-removebg-preview.png" alt="ellis-sm">
        </div>
        </div>
        
        <div class="box-links-sm">
            <div class="links-sm">
                
                <a href="https://www.linkedin.com/in/ellis-xavier-093835354/" target="_blank"><i class="bi bi-linkedin"></i></a>    
                
                <a href=" https://workspace.google.com/intl/pt-BR/gmail/" target="_blank"><i class="bi bi-envelope"></i></a>
            
                <a href="https://github.com/EllisCarvalho3" target="_blank"><i class="bi bi-github"></i></a>

                <a href="https://pt-br.facebook.com/" target="_blank"><i class="bi bi-facebook"></i></a>

                <a href="https://www.instagram.com/elliscarv" target="_blank"><i class="bi bi-instagram"></i></a>

                <a href="https://x.com" target="_blank"><i class="bi bi-twitter-x"></i></a>
               
            </div>
        </div>
    </div>
    </div>
</section>

    <footer>
        <span class="footer-title">E&S Studio</span>
        <ul class="socials">
            <li><a href="https://wa.me/qr/KNIVFKKZMUUXH1"><i class="bi bi-whatsapp"></i></a></li>
            <li><a href="https://pt-br.facebook.com/"><i class="bi bi-facebook"></i></a></li>
            <li><a href="https://x.com/"><i class="bi bi-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/elliscarv/"><i class="bi bi-instagram"></i></a></li>
        </ul>
        <div class="info">
            <ul>
                <li class="footer-list_header">Oferece</li>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Categorias</a></li>
                <li><a href="contact.php">Contato</a></li>
            </ul>
    
            <ul>
                <li class="footer-list_header">Documentos</li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Políticas de Privacidade</a></li>
                <li><a href="#">Termos de Serviço</a></li>
                <li><a href="#">Cookies</a></li>
            </ul>
    
            <ul>
                <li class="footer-list_header">Para você</li>
                <li><a href="#">Manuais</a></li>
                <li><a href="#">Tutoriais</a></li>
                <li><a href="#">Dicas e Truques</a></li>
                <li><a href="#">F&Q</a></li>
            </ul>
    
            <ul>
                <li class="footer-list_header">Trabalhe conosco</li>
                <li><a href="#">Afiliar</a></li>
                <li><a href="#">Colaborações</a></li>
                <li><a href="#">Patrocinadores</a></li>
                <li><a href="#">Parcerias</a></li>
        </div>
        <p>Copyright &copy 2025 E&S Studio. Todos os diereitos reservados. </p>
    </footer>
    
</body>
</html>