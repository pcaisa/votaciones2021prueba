
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SISTEMA DE VOTACIONES </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>NUEVO</h1>
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 
<input type="text" name="name"><br>
<input class="form-control validate[required]" type="number" name="limonesusados" min="1" max="5"/>
 
<input type="submit" class="btn btn-primary" name="submit" value="Submit Form"><br>
 
</form>
                                   
                               
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Dni</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        
                                            <tr>
                                                <th><?php
 
if(isset($_POST['submit']))
{
$name = $_POST['name'];
 
echo "<b> $name </b>";
 
}

?></th>
                                                <th><?php
 
if(isset($_POST['submit']))
{
$n = $_POST['limonesusados'];
 
echo "<b> $n </b>";
 
}

?></th>  
                                                
                                                <th><a  href="alumno.php" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>