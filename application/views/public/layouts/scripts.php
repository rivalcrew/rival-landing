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
<script>
    /**
     * Keep in mind that your scripts may not always be executed after the theme is completely ready,
     * you might need to observe the `theme:load` event to make sure your scripts are executed after the theme is ready.
     */
    $(document).on('theme:init', () => {
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        // particlesJS.load('comingsoon', 'assets/javascript/pages/particles-comingsoon.json');
        // Set the date we're counting down to
        var countDownDate = new Date('August 10, 2023 15:37:25').getTime();
        var countDownFormater = function(i) {
            return i < 10 ? '0' + i : i;
        }
        // Update the count down every 1 second
        var countDown = setInterval(function() {
            // Get todays date and time
            var now = new Date().getTime();
            // Find the distance between now an the count down date
            var distance = countDownDate - now;
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            // Display the result in the element with id='clock'
            document.querySelector('#clock').innerHTML = '' + '<div class="countdown-item">' + countDownFormater(days) + ' <small>Days<\/small><\/div>' + '<div class="countdown-item">' + countDownFormater(hours) + ' <small>Hr<\/small><\/div>' + '<div class="countdown-item">' + countDownFormater(minutes) + ' <small>Min<\/small><\/div>' + '<div class="countdown-item">' + countDownFormater(seconds) + ' <small>Sec<\/small><\/div>';
            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(countDown);
                document.querySelector('#clock').innerHTML = 'We\'ll Live Soon';
            }
        }, 1000);
    })
</script>
<!-- END PLUGINS JS -->

<!-- BEGIN THEME JS -->
<script src="<?= base_url() ?>assets/javascript/theme.min.js"></script>
<!-- END THEME JS -->

<!-- BEGIN PAGE LEVEL JS -->
<!-- your js for specific page goes here -->
<!-- END PAGE LEVEL JS -->