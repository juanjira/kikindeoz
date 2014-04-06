<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="public/favicon.ico">

    <title>URL SHORTENER </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="stylesheet" href="../public/font-awesome/css/font-awesome.css">

    <!--[if lt IE 9]>
    <script src="dist/html5shiv.js"></script>
    <![endif]-->
    
    
  </head>

  <body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 fondo-blanco">
                        
                    <form action="agrega" method="post" role="form">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Introduce la url</label>
                        <input type="url" class="form-control" id="url" name="url" placeholder="Ejem: http://www.google.com">
                      </div>
                      
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>

                    <?php if(empty($uris)) echo "<h1>0 Urls Registradas</h1>";
                    else{?>
                    <h1>Listado de Urls</h1>
                    <div class="table-responsive">
                        <table class="table table-hover">
                         <thead>
                             <tr>
                                 <th>Url Original</th>
                                 <th>Contador</th>
                                 <th>Url Nueva</th>
                                 <th>Ver P&aacute;gina</th>
                             </tr>
                         </thead>
                         <tbody>   
                    <?php
                    foreach($uris as $obj){
                    ?>
                        <tr>
                            <td><?php echo $obj->url_original;?></td>
                            <td><?php echo $obj->contador;?></td>
                            <td><?php echo base_url()."ver/".$obj->url_nueva;?></td>
                            <td><a href="<?php echo base_url()."ver/".$obj->url_nueva;?>" target="_blank">Ver</a></td>
                        </tr>    
                    <?php   } ?>
                          </tbody>  
                      </table>
                    </div>

                    <?php
                    }
                    ?>
            </div>        


        </div>
              
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/index.js"></script>
  </body>
</html>
