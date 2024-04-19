<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/ruang-admin.min.js"></script>
<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>
<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
<script src="js/demo/chart-bar-demo.js"></script>
<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Bootstrap Touchspin -->
<script src="vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
<!-- Select2 -->
<script src="vendor/select2/dist/js/select2.min.js"></script>

<!-- Page level custom scripts -->
<script>
    $(document).ready(function() {
        //crud barang
        $('.delete-btn').click(function() {
            var barangId = $(this).data('barang-id');
            var barangNama = $(this).data('barang-nama');
            $('#deleteModal').find('.modal-body').html('Anda yakin ingin menghapus data "' + barangNama + '"?');
            $('#deleteModal').find('form').attr('action', '/delete-barang/' + barangId);
        });

        $('.edit-btn').click(function() {
            var barangId = $(this).data('barang-id');
            var barangNama = $(this).data('barang-nama');
            var barangStok = $(this).data('barang-stok');
            var barangHargaJual = $(this).data('barang-harga-jual');
            var barangHargaBeli = $(this).data('barang-harga-beli');

            $('#editModal').find('#editNamaProduk').val(barangNama);
            $('#editModal').find('#editStok').val(barangStok);
            $('#editModal').find('#editHargaJual').val(barangHargaJual);
            $('#editModal').find('#editHargaBeli').val(barangHargaBeli);

            $('#editModal').find('form').attr('action', '/update-barang/' + barangId);
        });
        //end crud barang

        $('#dataTableHover').DataTable(); // ID From dataTable with Hover

        $('#touchSpin3').TouchSpin({
            min: 0,
            max: 100,
            initval: 0,
            boostat: 5,
            maxboostedstep: 10,
            verticalbuttons: true,
        });

        // Select2 Single  with Placeholder
        $('.select2-single-placeholder').select2({
            placeholder: "Select Customer",
            allowClear: true
        });
    });
</script>
