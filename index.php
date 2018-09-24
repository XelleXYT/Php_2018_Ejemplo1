<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba de Php con Bootstrap</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color: #666">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-center" style="color:#fff">Ejemplo inicio sesión Php</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <br/><br/>
                    <form action="login.php">
                        <input id="name_input" class="form-control" type="text" placeholder="Usuario" required="required"><br/>
                        <input id="pass_input" class="form-control" type="password" placeholder="Contraseña" required="required"><br/>
                        <button id="button1" class="btn btn-primary btn-block" type="submit">Iniciar sesión</button><br/>
                        <input class="form-control" data-validation="date" data-validation-format="dd-mm-yyyy" placeholder="Fecha (dd-mm-yyyy)">
                    </form>
                </div>
                <div class="col-4"></div>
            </div>
        </div>

        <?php
        // put your code here
        ?>
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

    <script>

        // Document ready executes when page is fully downloaded.

        $(document).ready(function () {
            //$('#name_input').hide(); // Hide 
        });

        $.validate({
            lang: 'es'
        });

        /*
         $('#button1').click(function () {
         
         // Console log
         console.log("point1");
         
         // Makes visible the hidden box (With a 200 milliseconds delay)
         $('#name_input').show(200);
         
         // Both do same thing (Change the content of the input):
         // $('#name_input').val("Why are you running?"); // Using IDs (Only 1 ID per object)
         // $('input[name=user_name]').val("Why are you running?"); // Using internal variables (All objects with same variable value)
         });
         */

    </script>
</html>
