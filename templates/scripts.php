<script type="text/javascript" src="js/script.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<!-- Script que cambia dinámicamente la clase 'active' -->
<script type="text/javascript">
    //Cambiar el class='active' en el nav
    $(document).ready(function () {
        // Ejemplo URL hhtp://domain.com/page.html
        var current_location = window.location.href.split('/');  //['http:', '', '', 'domain.com', 'page.html']
        var page;
        page = current_location[current_location.length - 1];  //page.html está en la posición 4
        if (page != "")
            $('.nav li a').removeClass('active');  //Borramos la clase active de la página anterior
        $('.nav li a[href*="'+page+'"]').addClass('active');  //Añadimos class active al enlace de la página
    });
</script>

<!--<script src="validator.js"></script> -->

<!-- Script para el formulario de registro: ventana modal -->
<script>
    $(document).ready(function () {
        $('#btnSubmit').click(function (event) {
            //Previene que se envíe el formulario de la forma habitual
            event.preventDefault();
          //  $('#registroForm').modal('hide');  //Oculta pop-up
            var request = $.ajax({
                type: "POST",
                async: true,
                url:   $('#registroForm').attr('action'),  //ejecuta script php
                data: $('#registroForm').serialize()
            }).done(function (data) {
                $('#RegistroSuccess').html(data)  //Muestra mensaje
            });
            request.fail(function(jqHQR, testStatus) {
                alert("failure");
            });
        });
        $('#btnReset').click(function () {
            $('#mail').val("");
            $('#password').val("");
        });
        $('.close').click(function () {
            $('#RegistroSuccess').html("");
        });
    });

</script>