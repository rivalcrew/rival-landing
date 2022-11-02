<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- BEGIN BASE JS -->
<script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/popper.js/umd/popper.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- END BASE JS -->

<!-- BEGIN PLUGINS JS -->
<script src="<?= base_url() ?>assets/vendor/stacked-menu/js/stacked-menu.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/particles.js/particles.js"></script>
<script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('.phone').inputmask('+6019-999 99999');
        $('.phone').inputmask({
            "placeholder": ""
        });
        $('.idNo').inputmask('999999-99-9999');
        $('.idNo').inputmask({
            "placeholder": ""
        });
        $('.phoneHome').inputmask('03-9999 9999');
        $('.phoneHome').inputmask({
            "placeholder": ""
        });
    });
</script>
<script type="text/javascript">
    var fdata = '<?= $this->session->flashdata('message') ?>';
    msg = fdata ? JSON.parse(fdata) : fdata;
    if (msg) {
        icon = msg['status'] ? "check" : "times";
        color = msg['status'] ? "success" : "danger";
        $('#msg .modal-title').text(msg['title']);
        $('#msg .modal-body i').after(' ' + msg['msg']);
        $('#msg .modal-body i').addClass('fa fa-' + icon + ' text-' + color);
        $('#msg').modal('show');
    }
</script>
<!-- END PAGE LEVEL JS -->