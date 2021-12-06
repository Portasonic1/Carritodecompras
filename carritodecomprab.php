<!DOCTYPE html>
<html>
<head>
	<title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--código que incluye Bootstrap-->
        <?php
        include'inc/incluye_bootstrap.php';
        include 'inc/incluye_datatable_head.php';
        include 'inc/conexion.php';
        ?>
        <!--termina código que incluye Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/cart.css" />
        </head>
</head>
<body>	
	<!--código que incluye el menú responsivo-->
        <?php include'inc/incluye_menu.php' ?>
        <!--termina código que incluye el menú responsivo-->
        <div class="container">
        	<div class="col-sm-4 col-md-3">
        		<?php
                $sel = $con->prepare("SELECT *from producto");
                $sel->execute();
                $res = $sel->get_result();
                ?>
        		<table id="example" class="table table-striped table-bordered" cellspacing="0">
        			<tbody>
        				<?php while ($op = $res->fetch_assoc()) { ?>
        					<tr>
        						<td>
        							<a href="<?php echo $op['producto_imagen'] ?>"> 

                                    <img class="img-responsive" width="200" height="200" src="<?php echo $f['producto_imagen'] ?>" />
                                	</a> 
        						</td>
        						<td>
        							<?php echo $op['producto_descripcion'] ?>
        						</td>
        						<td>
                                    <?php echo $op['precio'] ?>
                                </td>
        					</tr>
        			</tbody>
        		</table>
        	</div>        	
        </div>

</body>
</html>