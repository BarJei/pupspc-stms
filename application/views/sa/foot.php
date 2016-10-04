        <script src="<?php echo base_url('node_modules/jquery/dist/jquery.js'); ?>"></script>

        <script src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
        
        <script src="<?php echo base_url('node_modules/datatables.net/js/jquery.dataTables.js'); ?>"></script>

        <script src="<?php echo base_url('node_modules/angular/angular.js'); ?>"></script>
        
        <script src="<?php echo base_url('node_modules/angular-datatables/dist/angular-datatables.js'); ?>"></script>
        
        <script src="<?php echo base_url('node_modules/angular-datatables/dist/plugins/bootstrap/angular-datatables.bootstrap.js'); ?>"></script>

        <script src="<?php echo base_url('node_modules/angular-route/angular-route.js'); ?>"></script>

        <script src="<?php echo base_url('node_modules/angular-animate/angular-animate.js'); ?>"></script>

        <script src="<?php echo base_url('node_modules/angular-loading-bar/build/loading-bar.js'); ?>"></script>

        <script src="<?php echo base_url('node_modules/angular-sanitize/angular-sanitize.js'); ?>"></script>

        <script src="<?php echo base_url('node_modules/angular-strap/dist/angular-strap.js'); ?>"></script>

        <script src="<?php echo base_url('node_modules/angular-strap/dist/angular-strap.tpl.js'); ?>"></script>

        <!-- <script src="<?php echo base_url('node_modules/jquery-ui/jquery-ui.js'); ?>"></script> -->

        <script src="<?php echo base_url('assets/js/clock.js'); ?>"></script>

        <script src="<?php echo base_url('ng/controllers/sa/script.js'); ?>"></script>

        <script src="<?php echo base_url('ng/controllers/sa/main-controller.js'); ?>"></script>

        <script src="<?php echo base_url('ng/controllers/sa/student-controller.js'); ?>"></script>

        <script>
            $(function(){

            //tooltip
            $('[data-toggle=tooltip]').hover(function() { 
            // on mouseenter
            $(this).tooltip('show');
        }, function(){
            // on mouseleave
            $(this).tooltip('hide');
        });

        });
    </script>

</body>
</html>
