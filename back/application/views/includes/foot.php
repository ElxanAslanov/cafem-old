<!-- build:js /assets/js/core.min.js -->
<script src="<?php echo base_url("public") ?>/libs/bower/jquery/dist/jquery.js"></script>
<script src="<?php echo base_url("public") ?>/libs/bower/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url("public") ?>/libs/bower/jQuery-Storage-API/jquery.storageapi.min.js"></script>
<script src="<?php echo base_url("public") ?>/libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
<script src="<?php echo base_url("public") ?>/libs/bower/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="<?php echo base_url("public") ?>/libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="<?php echo base_url("public") ?>/libs/bower/PACE/pace.min.js"></script>
<!-- endbuild -->

<!-- build:js <?php echo base_url("public") ?>/assets/js/app.min.js -->
<!--<script src="--><?php //echo base_url("assets"); ?><!--/assets/js/library.js"></script>-->
<?php $this->load->view("includes/library") ?>
<script src="<?php echo base_url("public") ?>/assets/js/plugins.js"></script>
<script src="<?php echo base_url("public") ?>/assets/js/app.js"></script>
<!-- endbuild -->
<script src="<?php echo base_url("public") ?>/libs/bower/moment/moment.js"></script>
<script src="<?php echo base_url("public") ?>/libs/bower/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="<?php echo base_url("public") ?>/assets/js/fullcalendar.js"></script>

<script src="<?php echo base_url("public") ?>/assets/js/sweetalert2.all.js"></script>

<!--<script src="--><?php //echo base_url("public") ?><!--/assets/js/custom.js"></script>-->
<!--<script>-->
<!--    var upload =  Dropzone.forElement("#dropzone")-->
<!--        upload.on("complete",function (file) {-->
<!--            alert()-->
<!--        })-->
<!--</script>-->
</body>
</html>