
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Dinamicos</title>
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/validationEngine.jquery.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-es.js"></script>
  <style>
    .top-buffer {
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <div id="container ">
    <div class="row-fluid top-buffer">
      <div class="col-lg-6 col-lg-offset-3 text-center">
        <form id="miform" method="post" name="miform" action="guarda.php">
		



   

   
          <table id="tblprod" class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>id</th>
                <th>Nombre</th>
				<th>eliminar</th>
				
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>
                  <div class="form-group col-lg-4">
                    <input class="form-control validate[required]" name="nombre[]" />
					</div>
					<div class="form-group col-lg-4">
					<input class="form-control validate[required]" type="number" name="limonesusados[]" min="1" max="5"/>
  
                  </div>
                </td>
				<td>
		<div class="form-group col-lg-4">
				<a href="index.html?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-danger">Eliminar</a>
				</div>
				</td>
              </tr>
            </tbody>
          </table>
          <button id="btnadd" class="btn btn-primary">Agregar Nuevo</button>
		  
        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(function() {
      var count = 1;
      jQuery("#miform").validationEngine({
        promptPosition: "centerRight:0,-5"
      });

      $(document).on("click", "#btnadd", function(event) {
        count++;
        $('#tblprod tr:last').after('<tr><td>' + count + '</td><td><div class="form-group col-lg-4"><input class="form-control validate[required]" name=" nombre[]" /></div><div class="form-group col-lg-4"><input class="form-control validate[required]" type="number" name="limonesusados[]" min="1" max="5"/> </div></td></tr>');
        event.preventDefault();

      });

    });
  </script>

</body>

</html>