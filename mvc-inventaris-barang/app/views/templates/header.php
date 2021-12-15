<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL ?>/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">   
        <a class="navbar-brand mr-4" href="<?= BASEURL ?>">
            <img src="<?= BASEURL ?>/img/small_logo.png" width="100" alt="Small logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>">Beranda</a>
                <a class="nav-link active" href="<?= BASEURL ?>/inventory">Inventaris</a>
                <a class="nav-link active" href="<?= BASEURL ?>/about">Tentang</a>
            </div>
        </div>

        <form class="form-inline" action="<?= BASEURL; ?>/login">
            <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
            <div class="mr-sm-4 mr-4 ml-4" style="width: 10rem; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                <p class="text-right p-0 mb-0 bg-transparent text-white"><?= ucwords($_SESSION['login']); ?></p>
            </div>
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" onclick="return confirm('Yakin ingin keluar?');">Logout</button>
        </form>
    </div>
</nav>
