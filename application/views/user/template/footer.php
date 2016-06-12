            <!-- Footer Start -->
            <footer class="footer"><?php echo date('Y'); ?> © ODBMS.
            </footer>
            <!-- Footer Ends -->

        </section>
        <!-- Main Content Ends -->
          

        <!-- js placed at the end of the document so the pages load faster -->
        
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/modernizr.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/pace.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/wow.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.nicescroll.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/assets/chat/moment-2.2.1.js'); ?>"></script>

        <!-- Counter-up -->
        <script src="<?php echo base_url('assets/js/waypoints.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/jquery.counterup.min.js'); ?>" type="text/javascript"></script>

        <!-- EASY PIE CHART JS -->
        <script src="<?php echo base_url('assets/assets/easypie-chart/easypiechart.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/assets/easypie-chart/jquery.easypiechart.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/assets/easypie-chart/example.js'); ?>"></script>


        <!--C3 Chart-->
        <script src="<?php echo base_url('assets/assets/c3-chart/d3.v3.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/assets/c3-chart/c3.js'); ?>"></script>

        <!-- sparkline --> 
        <script src="<?php echo base_url('assets/assets/sparkline-chart/jquery.sparkline.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/assets/sparkline-chart/chart-sparkline.js'); ?>" type="text/javascript"></script> 

        <!-- sweet alerts -->
        <script src="<?php echo base_url('assets/assets/sweet-alert/sweet-alert.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/assets/sweet-alert/sweet-alert.init.js'); ?>"></script>

        <script src="<?php echo base_url('assets/assets/modal-effect/js/classie.js'); ?>"></script>
        <script src="<?php echo base_url('assets/assets/modal-effect/js/modalEffects.js'); ?>"></script>

        <script src="<?php echo base_url('assets/js/jquery.app.js'); ?>"></script>
        <!-- Chat -->
        <script src="<?php echo base_url('assets/js/jquery.chat.js'); ?>"></script>

        <script src="<?php echo base_url('assets/assets/datatables/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/assets/datatables/dataTables.bootstrap.js'); ?>"></script>

        <script src="<?php echo base_url('assets/assets/notifications/notify.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/assets/notifications/notify-metro.js'); ?>"></script>
        <script src="<?php echo base_url('assets/assets/notifications/notifications.js'); ?>"></script>

        <!-- Todo -->
        <script src="<?php echo base_url('assets/js/jquery.todo.js'); ?>"></script>
        <script src="<?php echo base_url('assets/assets/timepicker/bootstrap-datepicker.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

        <script type="text/javascript">
            <?php
            $msg = $this->session->flashdata('msg'); 
            if(!empty($msg)) {
                ?>
                $.Notification.notify('success', 'top right', 'Success', '<?php echo $msg; ?>');
                <?php
            }
            $err = $this->session->flashdata('err'); 
            if(!empty($err)) {
                ?>
                $.Notification.notify('error', 'top right', 'Error', '<?php echo $err; ?>');
                <?php
            }
            ?>
        /* ==============================================
             Counter Up
             =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
    

    </body>

<!-- Mirrored from coderthemes.com/velonic_2.1/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Dec 2015 15:58:41 GMT -->
</html>
