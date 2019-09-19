<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['student']['name'] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['student']['nis'] ?></h6>
            <p class="card-text"><?= $data['student']['email'] ?></p>
            <p class="card-text"><?= $data['student']['majority'] ?></p>
            <a href="<?= BASE_URL ?>student" class="card-link">Back</a>
        </div>
    </div>
</div>