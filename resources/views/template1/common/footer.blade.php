{{ Html::script("/public/template1/js/jquery.js") }}
{{ Html::script("/public/template1/js/bootstrap.min.js") }}
{{ Html::script("/public/template1/js/jquery.scrollUp.js") }}

<!-- jQuery UI JS -->
{{ Html::script("/public/template1/js/jquery-ui-v1.10.3.js") }}

<!-- Just Gage -->
{{ Html::script("/public/template1/js/justgage/justgage.js") }}
{{ Html::script("/public/template1/js/justgage/raphael.2.1.0.min.js") }}

<!-- Flot Charts -->
{{ Html::script("/public/template1/js/flot/jquery.flot.js") }}
{{ Html::script("/public/template1/js/flot/jquery.flot.orderBar.min.js") }}
{{ Html::script("/public/template1/js/flot/jquery.flot.stack.min.js") }}
{{ Html::script("/public/template1/js/flot/jquery.flot.pie.min.js") }}
{{ Html::script("/public/template1/js/flot/jquery.flot.tooltip.min.js") }}
{{ Html::script("/public/template1/js/flot/jquery.flot.resize.min.js") }}

<!-- Custom JS -->
{{ Html::script("/public/template1/js/menu.js") }}
{{ Html::script("/public/template1/js/custom-index2.js") }}


<script type="text/javascript">
    //ScrollUp
    $(function () {
        $.scrollUp({
            scrollName: 'scrollUp', // Element ID
            topDistance: '300', // Distance from top before showing element (px)
            topSpeed: 300, // Speed back to top (ms)
            animation: 'fade', // Fade, slide, none
            animationInSpeed: 400, // Animation in speed (ms)
            animationOutSpeed: 400, // Animation out speed (ms)
            scrollText: 'Top', // Text for element
            activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });
    });
</script>

</body>

<!-- Mirrored from iamsrinu.com/bluemoon-admin-theme8/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Mar 2016 07:33:06 GMT -->
</html>