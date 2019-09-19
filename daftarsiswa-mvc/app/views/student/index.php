<div class="container mt-3 mb-5">
    <div class="row">
        <div class="col-lg-7">
            <?php Flasher::flash() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary add-button" data-toggle="modal" data-target="#formModal">
                Add Student Data
            </button>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-7">
            <form action="<?= BASE_URL ?>student/search" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Student Name..." name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit" id="keyword-button">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-7">
            <h3>List of Students</h3>
            <div class="list-group">
                <?php foreach ($data['students'] as $s) : ?>
                    <li class="list-group-item">
                        <?= $s['name'] ?>
                        <a class="btn btn-outline-danger btn-sm float-right ml-2 delete-button" href="<?= BASE_URL ?>student/delete/<?= $s['id'] ?>">Delete</a>
                        <a class="btn btn-outline-success btn-sm float-right ml-2 edit-modal" href="<?= BASE_URL ?>student/edit/<?= $s['id'] ?>" data-toggle="modal" data-target="#formModal" data-id="<?= $s['id'] ?>">Edit</a>
                        <a class="btn btn-outline-info btn-sm float-right ml-2" href="<?= BASE_URL ?>student/detail/<?= $s['id'] ?>">Detail</a>
                    </li>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Add Student Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL ?>student/add_student" method="post">
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="number" class="form-control" id="nis" name="nis">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
                    </div>
                    <div class="form-group">
                        <label for="majority">Majority</label>
                        <select class="form-control" id="majority" name="majority">
                            <option value="Software Engineering">Software Engineering</option>
                            <option value="Computer Network Engineering">Computer Network Engineering</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add Data</button>
                </form>
            </div>
        </div>
    </div>
</div>