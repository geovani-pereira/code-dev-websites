<script>
$(document).ready(function() {

        $(".carousel").swiperight(function() {
            $(this).carousel('prev');
        });
        $(".carousel").swipeleft(function() {
            $(this).carousel('next');
        });

    });
</script>

//ATENÇÃO================================
//Utilizar o arquivo mobile.custom.min.js