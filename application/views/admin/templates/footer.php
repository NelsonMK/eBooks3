            <footer class="footer">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-left">
                        <p>&copy; Copyright <?php echo date('Y'); ?>. All rights reserved.</p>
                    </div>
                    <div class="col  col-sm-6 ml-sm-auto text-center text-sm-right">
                        <p><a target="_blank" href="#">The Official M-Devs</a></p>
                    </div>
                </div>
            </footer>

                        <!-- end footer -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->

    <script src="<?php echo admin_assets() ?>js/vendors.js"></script>

    <script src="<?php echo admin_assets() ?>js/chart.js/Chart.js"></script>

    <!-- custom app -->
    <script src="<?php echo admin_assets() ?>js/app.js"></script>

    <script src="<?php echo admin_assets() ?>js/jquery.uploadfile.min.js"></script>



    <script type="text/javascript">
        $(document).ready(function () {          
          setTimeout(function() {
            $('.succWrap').slideUp("slow");
          }, 3000);
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {          
          setTimeout(function() {
            $('.errorWrap').slideUp("slow");
          }, 10000);
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            toastr.options = {
                "progressBar": true,
                "closeButton": true,
                "preventDuplicates": true
            }
        });
    </script>

</body>


</html>