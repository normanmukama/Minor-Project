</main>
        <!-- MAIN -->
    </section>
    <!-- section for navigation bar ends here -->

    <!--Html for the footer-->
<footer class="footer">
    <!-- <div class="hr"></div> -->

</footer>

<script src="assets3/jquery/jquery-3.6.1.min.js"></script>
<script src="jquery.validate.min.js"></script>
<script src="assets3/datatables.min.js"></script>
<script src="assets3/pdfmake.min.js"></script>
<script src="assets3/vfs_fonts.js"></script>
<script src="assets3/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets3/dataTables.responsive.min.js"></script>
<script src="assets3/sweetalert.min.js"></script>
    <script src="asset3s/java.js"></script>
    <script src="assets3/index.js"></script>

 
    <script>
        $(document).ready(function(){
            var data = $('#dataTable').DataTable(
        {
            responsive: "true",
            buttons: [
              
            {
            extend: 'excel',
            text: 'Excel <i class="bx bx-export"></i>',
            titleAttr: 'Export to PDF',
            className: 'btn btn-sm m-1 mt-3 btn-Success'
            },
            {
            extend: 'pdf',
            text: 'Pdf <i class="bx bx-export"></i>',
            titleAttr: 'Export to PDF',
            className: 'btn btn-sm m-1 mt-3 btn-warning'
            },
            {
            extend: 'copy',
            text: 'Copy <i class="bx bx-copy-alt"></i>',
            titleAttr: 'copy',
            className: 'btn btn-sm m-1 mt-3 btn-primary'
            },
            {
            extend: 'print',
            text: 'Print <i class="bx bx-printer"></i>',
            titleAttr: 'Print',
            className: 'btn btn-sm m-1 mt-3 btn-danger'
            }
        ]
        })
        data.buttons().container().appendTo("#example_wrapper .col-md-6:eq(0)");
    });
   
    </script>
</body>
</html>