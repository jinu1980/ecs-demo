<!DOCTYPE html>
<html lang="en">

    <head>
        
    </head>

    <body>
        <div class="container">
            <div class="hero-unit">
                
                <p>Your PHP application is now running on a container in Amazon ECS.</p>
                <p>Release 4.04</p>
                <?php
                        $myfile = fopen("/var/www/my-vol/date", "r") or die("");
                        echo fread($myfile,filesize("/var/www/my-vol/date"));
                        fclose($myfile);
                ?>

            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

</html>
