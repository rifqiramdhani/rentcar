<footer class="app-footer">
    <div>
        <span>&copy; 2020 Copyright <a href="https://bcs.co.id/">PT Bonli Cipta Sejahtera</a> </span>
    </div>
    <div class="ml-auto">
        <span>Developed by</span>
        <a href="#">Fathia</a>
    </div>
</footer>

<script src="<?= base_url('assets/vendors/jquery/js/jquery.min.js') ?>">
</script>
<script src="<?= base_url('assets/vendors/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/pace-progress/js/pace.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/@coreui/coreui/js/coreui.min.js') ?>"></script>
<!-- form validation -->
<script src="<?= base_url('assets/node_modules/bootstrap-validator/dist/validator.min.js') ?>"></script>
<!-- datatables -->
<script src="<?= base_url('assets/vendors/datatables/datatables.min.js') ?>"></script>
<!-- custom js -->
<script src="<?= base_url('assets/js/custom.js') ?>" type="text/javascript" charset="utf-8"></script>
<!-- fontawesome -->
<script src="<?= base_url('assets/js/all.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<!-- sweetaler 2 -->
<script src="<?= base_url('assets/js/sweetalert2.all.min.js') ?>"></script>
<!-- custom file input -->
<script src="<?= base_url('assets/node_modules/bs-custom-file-input/dist/bs-custom-file-input.min.js') ?>"></script>
<script>
    // Setup datatables 
    $(document).ready(function() {
        //init custom file input
        bsCustomFileInput.init()

        // sweetalert
        const flashdata = $('.flash-data').data('flashdata');
        const title = $('.flash-data').data('title');
        const type = $('.flash-data').data('type');

        if (flashdata) {
            Swal.fire({
                title: title,
                text: flashdata,
                icon: type
            })
        }

        // Setup datatables
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
            return {
                "iStart": oSettings._iDisplayStart,
                "iEnd": oSettings.fnDisplayEnd(),
                "iLength": oSettings._iDisplayLength,
                "iTotal": oSettings.fnRecordsTotal(),
                "iFilteredTotal": oSettings.fnRecordsDisplay(),
                "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
            };
        };

        //----------------------footer content-----------------------

        //datamobil
        $("#datamobil").dataTable()

        //hapus datadetailkriteria
        $("#datadetailkriteria").on('click', '.remove', function() {
            var id = $(this).data('id');
            var nama = $(this).data('nama');

            Swal.fire({
                title: 'Apakah yakin?',
                text: "Ingin Menghapus Data " + nama,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#db3325',
                cancelButtonColor: '#f5a732',
                confirmButtonText: "Hapus",
                cancelButtonText: "Cancel",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "staffsdm/detail-kriteria/deletedata.php?id=" + id,
                        type: 'DELETE',
                        error: function(xhr, textStatus, error) {
                            console.log(xhr.responseText);
                            console.log(xhr.statusText);
                            console.log(textStatus);
                            console.log(error);
                        },
                        success: function(data) {
                            if (data) {
                                console.log(data)
                                Swal.fire({
                                    title: 'Kesalahan!',
                                    text: 'Cek console untuk melihat pesan kesalahan',
                                    icon: 'error'
                                })
                            } else {
                                $("#" + id).remove();
                                Swal.fire({
                                    title: 'Data detail kriteria rekrutmen',
                                    text: 'Data Berhasil Dihapus!',
                                    icon: 'success'
                                })
                            }
                        }
                    });
                }
            })
        })




    });
</script>
</body>

</html>