<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Auth Base System</title>

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-5.3.2/css/bootstrap.min.css') ?>">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome-free-6.5.1/css/all.min.css') ?>">

</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <span class="fs-4"><i class="fa-solid fa-user-lock"></i> Auth Base System</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="login" class="btn btn-primary"><i class="fa-solid fa-right-to-bracket"></i> Login</a></li>
            </ul>
        </header>
    </div>

    <div class="container py-4">
        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Bem-vindo ao Auth Base System</h1>
                <p class="col-md-8 fs-4">Facilite a implementação de autenticação em seus projetos <a href="https://codeigniter.com/" target="_blank">CodeIgniter4</a> e concentre-se no desenvolvimento das funcionalidades 
                    específicas do seu sistema com o Auth Base System. Simplifique. Reutilize. Avance.</p>
                <a href="login" class="btn btn-outline-primary btn-lg">Acessar tela de login</a>
                <a href="https://github.com/HRSoaresFilho/auth-base-system" target="_blank" class="btn btn-dark btn-lg"><i class="fa-brands fa-github"></i></a>
            </div>
        </div>
    </div>

    <footer class="footer w-100 position-fixed bottom-0 mt-auto py-3 bg-body-tertiary text-center">
        <div class="container">
            <span class="text-body-secondary">2023 @devHumberto.com.br</span>
        </div>
    </footer>

    <script src="<?= base_url('assets/bootstrap-5.3.2/js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>