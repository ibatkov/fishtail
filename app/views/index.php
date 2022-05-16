<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fish Tail</title>
    <link href="views/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-header {
            background-color: rgba(107, 153, 198, 1) !important;
        }
    </style>
</head>
<body>
<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">Про нас</h4>
                    <p class="text-muted"><strong>Fish tail</strong> - это простой сокращатель ссылок, предоставляющий
                        вам возможность не
                        только уменьшить размер большой ссылки, но и просматривать статистику переходов по ним</p>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-header shadow-sm">
        <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <img src="views/img/logo.svg" width="30" height="30" alt="FishTail">
                <div style="font-size: 1.5rem"><strong>FishTail</strong></div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>
<main>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">Сократи свою ссылку</h1>
                <p class="col-lg-10 fs-4">Эй, парень, твоя ссылка слишком длинная. Мне кажется форма справа - то что
                    тебе нужно</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-6">
                <form class="p-4 p-md-5 border rounded-3 bg-light">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="link" name="Link[link]" placeholder="Ссылка">
                        <label for="link">Ссылка</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="slug" name="Link[slug]" placeholder="Желаемый хвост (Можно не заполнять)">
                        <label for="slug">Желаемый хвост (Можно не заполнять)</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Сократить!</button>
                    <hr class="my-4">
                    <small class="text-muted">Нажимая Сократить! Вы соглашаетесь <a href="#">с правилами использования.</a></small>
                </form>
            </div>
        </div>
    </div>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Прежде чем сокращать</h1>
                <p class="lead">Нужно правила прочитать. А то вдруг ты злоумышленик! Не бойся, они не длинные</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                </div>            </div>
            <div class="col-lg-6">
                <img src="bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>
</main>
<script src="views/js/bootstrap.bundle.min.js"></script>
</body>
</html>