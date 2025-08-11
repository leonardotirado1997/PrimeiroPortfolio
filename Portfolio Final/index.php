<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <!-- Box icons  -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Custom css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/clavedesol.png">
</head>

<body>
    <header>
        <a href="#" class="logo">Portfolio</a>
        <div class="nav">
            <a href="#home">Início</a>
            <a href="#services">Serviços</a>
            <a href="#portfolio">Projetos</a>
            <a href="#contact">Contato</a>
            <a href="#about">Sobre mim</a>
        </div>
    </header>

    <!-- home section -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Olá, Eu sou</h3>
            <h1>Leonardo Tirado</h1>
            <h3>Analista de Sistemas, <span> Professor</span> e <span> Musico</span></h3>
            <p> Estudante de Análise e Desenvolvimento de Sistemas e professor de música. Este portfólio
                reflete minha jornada e habilidades, com um foco especial em tecnologia. Minha formação em andamento e
                paixão pela música me permitem integrar criatividade e inovação em meus projetos. Estou em busca de
                novos desafios e oportunidades para aplicar e expandir meus conhecimentos. Explore meu portfólio e
                sinta-se à vontade para entrar em contato para conversarmos sobre colaborações ou
                oportunidades na área de tecnologia e música.</p>

            <div class="social-media">
                <a href="https://github.com/leonardotirado1997" target="_blank"><i class='bx bxl-github'></i></a>
                <a href="https://www.linkedin.com/in/leonardo-pires-tirado-697377210/" target="_blank"><i class='bx bxl-linkedin'></i></a>
                <a href="https://www.youtube.com/@leopires1997" target="_blank"><i class='bx bxl-youtube'></i></a>
            </div>
            <div>
                <a href="img/Currículo - Leonardo Tirado.pdf" target="_blank" class="btn">Currículo Profissional</a>
            </div>
        </div>
        <div class="home-img">
            <img src="img/Leo.png" alt="Foto de perfil">
        </div>

    </section>
    <!-- /home section -->

    <!-- service section -->
    <section class="services" id="services">
        <h2>Meus <span>Serviços</span></h2>

        <div class="services-container">
            <div class="services-box">
                <i class='bx bx-code-alt'></i>
                <h3>Progamação Web</h3>

                <p> Programador Web com experiência em HTML para estruturação de páginas, CSS para estilização e
                    JavaScript para interatividade.
                    Crio sites responsivos e funcionais.</p>

                <a href="#portfolio" class="btn">Leia mais</a>
            </div>
            <div class="services-box">
                <i class='bx bxl-php'></i>
                <h3>Programação de Sistemas</h3>

                <p>Possuo experiência intermediária em programação de sistemas, com ênfase em desenvolvimento
                    de aplicações web.
                    Tenho conhecimento sólido em bancos de dados SQL, incluindo a criação, manutenção e otimização de
                    consultas e estruturas de dados.
                </p>

                <a href="#portfolio" class="btn">Leia mais</a>
            </div>
            <div class="services-box">
                <i class='bx bx-music'></i>
                <h3>Gravação e Produção Musical</h3>

                <p>Especialista em gravação e produção musical com experiência na (DAW) Reaper e em uma ampla gama de
                    plugins.
                    Capaz de capturar, editar e mixar áudio de forma eficiente,
                    aplicando técnicas avançadas para garantir a qualidade sonora dos projetos.</p>

                <a href="#portfolio" class="btn">Leia mais</a>
            </div>

            <div class="services-box">
                <i class='bx bxs-graduation'></i>
                <h3>Professor</h3>

                <p>Atuo como professor, dedicado a oferecer uma educação de qualidade e a promover o desenvolvimento das
                    habilidades dos alunos.
                    Comprometido em criar um ambiente de aprendizado eficaz e inspirador.</p>

                <a href="#portfolio" class="btn">Leia mais</a>
            </div>


        </div>
    </section>
    <!-- service section -->

    <!-- portfolio section -->
    <section class="portfolio" id="portfolio">
        <h2>Meus <span>Projetos</span></h2>

        <div class="portfolio-container"></div>
        <div class="portfolio-box">
            <img src="img/barber.jpeg" alt="Portfolio 0">

            <div class="portfolio-layer">
                <h4>Barbearia DioSanto</h4>

                <p>O projeto "Barbearia DioSanto" consiste na criação de um site moderno e funcional para uma barbearia,
                    com o objetivo de promover os serviços oferecidos e facilitar o contato dos clientes com o
                    estabelecimento. O site foi desenvolvido com uma interface atraente, priorizando a usabilidade e a
                    experiência do usuário.
                </p>
                <a href="#"><i class='bx bx-cut'></i></a>
            </div>
        </div>

        <div class="portfolio-box">
            <img src="img/roupakids.jpeg" alt="Portfolio 1">

            <div class="portfolio-layer">
                <h4>Hadassa Kids</h4>

                <p>O projeto "Hadassa Kids" é uma solução completa para uma loja de roupas infantis, que inclui o
                    desenvolvimento de um site e um sistema de controle de estoque personalizado. O site foi criado para
                    apresentar e comercializar os produtos de forma online, com um design atrativo e fácil de navegar,
                    oferecendo uma experiência amigável tanto para os pais quanto para os pequenos. Paralelamente, o
                    sistema de controle de estoque gerencia o inventário da loja de maneira eficiente, monitorando a
                    entrada e saída de produtos em tempo real e facilitando o processo de reposição de estoque.
                </p>
                <a href="#"><i class='bx bx-store'></i></box-icon></a>
            </div>
        </div>
        <div class="portfolio-box">
            <img src="img/tecnology.webp" alt="Portfolio 2">

            <div class="portfolio-layer">
                <h4>Controle de Estoque SENAC</h4>

                <p>O projeto foi desenvolvido para atender às necessidades da Faculdade SENAC São José dos Pinhais,
                    criando um sistema de controle de
                    estoque eficiente e personalizado. O sistema foi projetado para gerenciar o inventário de materiais
                    e suprimentos da instituição voltadas ao curso de gastronomia, garantindo a organização e o controle
                    em tempo real dos itens
                    disponíveis, otimizando os processos internos e facilitando a reposição.
                </p>
                <a href="#"><i class='bx bxs-bowl-hot'></i></a>
            </div>
        </div>
        <div class="portfolio-box">
            <img src="img/roupaadulto.jpeg" alt="Portfolio 4">

            <div class="portfolio-layer">
                <h4>Kairós</h4>

                <p>O projeto "Kairós" é um site desenvolvido para uma loja de roupas, com foco em destacar os
                    produtos e facilitar o processo de compra online. O site foi projetado para ser elegante e moderno,
                    proporcionando uma navegação simples e atraente para os clientes.</p>
                <a href="#"><i class='bx bx-store'></i></a>
            </div>
        </div>
        <div class="portfolio-box">
            <img src="img/carros.jpeg" alt="Portfolio 5">

            <div class="portfolio-layer">
                <h4>Locadora de Veículos</h4>

                <p> Desenvolvi um sistema de programação para uma locadora de carros, que automatiza o gerenciamento de reservas, veículos e clientes.
                    O sistema permite que os administradores controlem a disponibilidade dos carros, façam o cadastro de novos veículos e clientes,
                    além de gerenciar o processo de locação e devolução de maneira eficiente.
                </p>
                <a href="#"><i class='bx bxs-car'></i></a>
            </div>
        </div>
        <div class="portfolio-box">
            <img src="img/studio.jpg" alt="Portfolio 5">

            <div class="portfolio-layer">
                <h4>Gravação e Produção Musical</h4>

                <p>Além da minha atuação profissional, sou apaixonado por gravação e produção musical. Nos meus momentos
                    livres, gosto de gravar voz e violão, explorando minha criatividade e aprimorando minhas habilidades
                    musicais.
                </p>
                <a href="https://www.youtube.com/@leopires1997" target="_blank"><i class='bx bx-music'></i></a>
            </div>
        </div>
        </div>
    </section>
    <!-- portfolio section -->

    <!-- contact section  -->
    <section class="contact" id="contact">
        <h2>Envie uma mensagem para <span>mim!</span></h2>

        <form action="salvar.php" method="post">
            <div class="input-box">
                <input type="text" placeholder="Nome Completo" name="name" required>
                <input type="email" placeholder="E-mail" name="email" required>
            </div>
            <div class="input-box">
                <input type="tel" placeholder="Telefone" name="telefone" required>
                <input type="text" placeholder="Assunto" name="assunto" required>
            </div>
            <textarea cols="30" rows="8" placeholder="Mensagem" name="mensagem"></textarea>
            <button class="btn">Enviar Mensagem!</button>
        </form>
    </section>
    <!-- /contact section -->

    <!-- Sobre -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="img/Leo2.png" alt="Sobre mim">
        </div>
        <div class="about-content">
            <h3>Sobre mim,</h3>
            <h1>Analista de <span>Sistemas,</span> <span>Professor</span> e <span>Musico</span></h1>
            <p> Combinando tecnologia e educação,
                desenvolvo soluções inovadoras e compartilho conhecimento.
                Sempre buscando novos desafios e oportunidades de crescimento.</p>

            <a href="#" class="btn">Voltar ao topo</a>
        </div>

        <div class="bible-verse">
            <sub>
                ¹Levanto os meus olhos para os montes e pergunto:
                <span>De onde me vem o socorro?</span><br>
                ²O meu socorro vem do <span>Senhor</span>, que fez os céus e a terra.<br>
                <span>Sl 121: 1-2</span>
            </sub>
        </div>
    </section>
    <!-- /Sobre -->
    <footer>
        <p>Copyright &copy; 2024 by &lt;/Leonardo Tirado&gt;. Todos os direitos Reservados.</p>
    </footer>
</body>

</html>