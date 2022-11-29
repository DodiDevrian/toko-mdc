    <footer class="sticky-footer content-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-lg-4 col-xl-4 col-sm-12 col-md-4">
              <div class="info-mdc">
                  <label class="title_info">Media Data Computer</label>
                  <p class="detail-info info-mdc">Media Data Komputer memberikan pelayanan pembelian produk dan pelayanan service yang berlokasi di Simpur Center, Tanjung Karang, Bandar Lampung, Lampung</p>
              </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-4 col-sm-12 col-md-4">
              <div class="info-mdc operasional">
                  <label class="title_info info-mdc">Jam Operasional</label>
                  <p>Senin - Jumat : 08:00-19:00</p>
              </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-4 col-sm-12 col-md-4">
              <div class="info-mdc operasional">
                  <label class="title_info info-mdc">Hubungi Kami</label>
                  <div class="social-media info-mdc">
                      <iconify-icon icon="logos:whatsapp-icon" width="25" height="25"></iconify-icon>
                      <p class="sm-info info-mdc">0813-6937-4444</p>
                  </div>

                  <div class="social-media info-mdc">
                      <iconify-icon icon="logos:google-gmail" width="25" height="25"></iconify-icon>
                      <p class="sm-info info-mdc">mdc@gmail.com</p>
                  </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Media Data Computer 2022</span>
            </div>
        </div>
    </footer>

        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url() ?>auth/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <!-- <script src="<?php echo base_url()?>assets/vendor/datatables/jquery.dataTables.min.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script> -->

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url()?>assets/js/demo/datatables-demo.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>assets/js/sb-admin-2.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>

    <!-- <script type="text/javascript">
        $(document).ready(function () {
            $('.example').DataTable({
                lengthMenu: [
                    [10, 25, 50, -1],
                    [10, 25, 50, 'All'],
                ],
            });
        });
    </script> -->

    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#table').DataTable( {
                lengthMenu: [
                    [10, 25, 50, -1],
                    [10, 25, 50, 'All'],
                ],
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print', 'colvis'
                ],

            } );

            table.buttons().container()
                .appendTo('#table_wrapper .col-md-5:eq(0)');
        } );
    </script>
    
</body>

</html>