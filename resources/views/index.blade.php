<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Perdidos & Achados</title>

    <!-- Fonts -->
    <link href="{{asset('/css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/bootstrap-icons/bootstrap-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">

</head>

<body>
    <div class="container-fluid">
        <!-- ======= Header ======= -->
        <header class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Perdidos & Achados</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sobre Nós</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" aria-expanded="false">
                                    Serviços
                                </a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Procurar</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <!-- ======= Fim Header ======= -->
        <!-- ======= Main ======= -->

        <main class="row">
            conteúdo principal
        </main>

        <!-- Fim Main -->

        <!-- ======= Footer ======= -->
        <footer class="row" id="footer">

            <div class="footer-newsletter">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <h4>Junte-se a nossa Newsletter</h4>
                            <p>Subrescreva o seu email e receba notificações</p>
                            <form action="" method="post">
                                <input type="email" name="email"><input type="submit" value="Subscrever">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-6 footer-contacto">
                            <h3>Perdidos e Achados</h3>
                            <p>
                                Villa de Viana <br>
                                Luanda<br><br>
                                <strong>Telefone:</strong> +244 924 229 202<br>
                                <strong>Email:</strong> perdidos@gmail.com<br>
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Links Rápidos</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Sobre nós</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Serviços</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Termos e responsabilidades</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Politicas de privacidade</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Nossos Serviços</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Publicação de artigos desaparecidos</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Relatório de artigos procurado</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Localização do artigo</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Nossas Redes Social</h4>
                            <p>Nos acompanhe nas redes sociais</p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container footer-bottom clearfix">
                <div class="copyright">
                    &copy; Copyright <strong><span>Perdidos e Achados</span></strong>. Todos os direitos reservados</div>
            </div>
        </footer>
        <!-- fim Footer -->
    </div>
</body>

</html>