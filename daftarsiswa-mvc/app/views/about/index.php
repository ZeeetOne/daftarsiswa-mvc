<div class="container">
    <h1 class="mt-3">About Me</h1>
    <!-- <img src="<?= BASE_URL ?>img/profile.jpg" alt="Daffa Sulthon Kautsar" width="200" class="shadow"> -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner shadow">
            <div class="carousel-item">
                <img src="<?= BASE_URL ?>img/profile2.jpg" class="d-block w-100" alt="..." width="100" height="470">
            </div>
            <div class="carousel-item active">
                <img src="<?= BASE_URL ?>img/profile.jpg" class="d-block w-100" alt="..." width="100" height="470">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <p>Halo, Nama saya adalah <?= $data['name'] ?>, umur saya <?= $data['age'] ?> tahun dan saya adalah seorang <?= $data['job'] ?> </p>
</div>