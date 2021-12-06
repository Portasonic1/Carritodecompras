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
<body>
		<!--código que incluye el menú responsivo-->
        <?php include'inc/incluye_menu.php' ?>
        <!--termina código que incluye el menú responsivo-->
        <div class="container">  
                <div class="col-sm-4 col-md-3">
                <form method="post">
                        <?php
                $sel = $con->prepare("SELECT *from producto");
                $sel->execute();
                $res = $sel->get_result();
                ?>
                        <div class="products">  

                            <?php while ($f = $res->fetch_assoc())  ?>                                             
                            <img class="img-responsive" width="200" height="200" src="<?php echo $f['producto_imagen'] ?>"/>
                            <h4 class="text-info"><?php echo $f['producto_nombre']; ?></h4>
                            <h4> <?php echo $f['precio']; ?> </h4>
                            <input type="text" name="quantity" class="form-control" value="i"/>
                            <input type="hidden" name="name" value="<?php echo $f['producto_nombre'] ?>"/>
                            <input type="hidden" name="price" value="<?php echo $f['precio'] ?>" />
                            <input type="submit" name="add_to_cart" class="btn btn-info" value="Add to cart" />
                        </div>
                    </form>
                </div>            
        </div>        
</body>

</html>