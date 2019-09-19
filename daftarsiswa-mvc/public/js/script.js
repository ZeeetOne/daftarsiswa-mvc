$(function () {

    // Add Student Data Modal
    $('.add-button').on('click', function () {
        $('#formModalLabel').html('Add Student Data');
        $('.modal-footer button[type=submit]').html('Add Data');
    });


    // menampilkan modal edit
    $('.edit-modal').on('click', function () {
        $('#formModalLabel').html('Edit Student Data');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/wpu/daftarsiswa-mvc/public/student/edit')

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/wpu/daftarsiswa-mvc/public/student/geteditdata',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#id').val(data.id);
                $('#name').val(data.name);
                $('#nis').val(data.nis);
                $('#email').val(data.email);
                $('#majority').val(data.majority);
            }
        });
    });


    // menampilkan sweet alert pada delete button
    $('.delete-button').on('click', function (e) {
        e.preventDefault();
        const link_delete = $(this).attr('href');

        Swal.fire({
            title: 'Are you sure?',
            text: "Student data will be deleted!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete Data!'
        }).then((result) => {
            if (result.value) {
                document.location.href = link_delete;
            }
        })
    });

});