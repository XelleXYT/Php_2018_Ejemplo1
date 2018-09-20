<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba de Php con Bootstrap</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <button id="button1" class="btn btn-primary">Primary</button>
                </div>
                <div class="col-4">
                    <input id="name_input" name="user_name" type="text" placeholder="Usuario">
                </div>
                <div class="col-4"></div>
            </div>
        </div>

        <?php
        // put your code here
        ?>
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>

    <script>
        
        // Document ready executes when page is fully downloaded.
        $(document).ready(function () {
            $('#name_input').hide(); // Hide 
        });
        
        
        $('#button1').click(function () {

            // Console log
            console.log("point1");
            
            // Makes visible the hidden box (With a 200 milliseconds delay)
            $('#name_input').show(200);

            // Both do same thing (Change the content of the input):
            // $('#name_input').val("Why are you running?"); // Using IDs (Only 1 ID per object)
            // $('input[name=user_name]').val("Why are you running?"); // Using internal variables (All objects with same variable value)

        });
    </script>
</html>
