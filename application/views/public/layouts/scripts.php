<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- BEGIN BASE JS -->
<script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/popper.js/umd/popper.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- END BASE JS -->

<!-- BEGIN PLUGINS JS -->
<script src="<?= base_url() ?>assets/vendor/pace-progress/pace.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/stacked-menu/js/stacked-menu.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/particles.js/particles.js"></script>
<script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
<script src="<?= base_url() ?>assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<script>
    /**
     * Keep in mind that your scripts may not always be executed after the theme is completely ready,
     * you might need to observe the `theme:load` event to make sure your scripts are executed after the theme is ready.
     */
    $(document).on('theme:init', () => {
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        // particlesJS.load('auth-header', 'assets/javascript/pages/particles.json');
    })
</script>
<!-- END PLUGINS JS -->

<!-- BEGIN THEME JS -->
<script src="<?= base_url() ?>assets/javascript/theme.min.js"></script>
<!-- END THEME JS -->

<!-- BEGIN PAGE LEVEL JS -->
<!-- your js for specific page goes here -->
<script src="<?= base_url() ?>assets/javascript/pages/dataTables.bootstrap.js"></script>
<script src="<?= base_url() ?>assets/javascript/pages/datatables-responsive-demo.js"></script>
<!-- END PAGE LEVEL JS -->