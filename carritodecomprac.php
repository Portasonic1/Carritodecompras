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
	<div class="container">
		<?php
		$connect = mysql_connect('localhost', 'root', '', 'carritodecompras');
		$query = 'SELECT * FROM producto ORDER by id ASC';
		$result = mysql_query($connect, $query);
		if($result);
			if(mysql_num_rows($result)>0);
				while ($product = mysql_fetch_assoc($result));
				print_r($product);
				?>
				<div class="col-sm-4 col-md-3">
					<form method="post" action="index.php?action=add&id<?php echo $product['id']; ?>">
						<div class="products">
							<img src="<?php echo $product['producto_imagen']; ?>" class="img_responsive"/>
							<h4 class="text-info"><?php echo $product['producto_nombre']; ?></h4>
							<h4>$ <?php echo $product['precio']; ?> </h4>
							<input type="text" name="quantity" class="form-control" value="i" />
							<input type="hidden" name="name" value="<?php echo $product['producto_nombre']; ?>" />
							<input type="hidden" name="precio" value="<?php echo $product['precio']; ?>" />
							<input type="submit" name="add_to_cart" class="btn btn-info" value="Add tp cart" />
						</div>
					</form>					
				</div>
				<?php 
			endwhile;
		endif;
	endif;
	?>
</div>
</body>
</html>