<!-- GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
<!-- End GOOGLE FONT -->

<!-- BEGIN PLUGINS STYLES -->
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/flatpickr/flatpickr.min.css">
<!-- END PLUGINS STYLES -->

<!-- BEGIN THEME STYLES -->
<link rel="stylesheet" href="<?= base_url() ?>assets/stylesheets/theme.min.css" data-skin="default">
<link rel="stylesheet" href="<?= base_url() ?>assets/stylesheets/theme-dark.min.css" data-skin="dark">
<link rel="stylesheet" href="<?= base_url() ?>assets/stylesheets/custom.css">
<!-- Disable unused skin immediately -->
<script>
    var skin = localStorage.getItem('skin') || 'default';
    var isCompact = JSON.parse(localStorage.getItem('hasCompactMenu'));
    var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');

    // Disable unused skin immediately
    disabledSkinStylesheet.setAttribute('rel', '');
    disabledSkinStylesheet.setAttribute('disabled', true);

    // add loading class to html immediately
    if (isCompact == true) document.querySelector('html').classList.add('preparing-compact-menu');
    document.querySelector('html').classList.add('loading');
</script>
<!-- END THEME STYLES -->