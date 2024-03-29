<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $data['title'] ?> - MVC</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>css/bootstrap.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style=" background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand" href="<?= BASE_URL ?>">Madinatul Qur'an</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="<?= BASE_URL ?>">Home</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL ?>student">Student</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL ?>about">About</a>
                </div>
            </div>
        </div>
    </nav>