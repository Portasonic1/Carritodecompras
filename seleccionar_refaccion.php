<!– PARA EJEMPLO DASC — >
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

    </head>
    <body>
        <!--código que incluye el menú responsivo-->
        <?php include'inc/incluye_menu.php' ?>
        <!--termina código que incluye el menú responsivo-->
        <div class="container">
            <div class="jumbotron">
                <h2>Lista de productos</h2>
                <?php
                $sel = $con->prepare("SELECT *from producto");
                $sel->execute();
                $res = $sel->get_result();
                ?>
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <th>Id Producto</th>
                    <th>Marca</th>
                    <th>Nombre del producto</th>
                    <th>Descripcion del producto</th>
                    <th>imagen</th>
                    <th>precio</th>
                    
                    </thead>
                    <tfoot>
                    <th>Id Producto</th>
                    <th>Marca</th>
                    <th>Nombre del producto</th>
                    <th>Descripcion del producto</th>
                    <th>imagen</th>
                    <th>precio</th>                   
                    </tfoot>
                    <tbody>
                        <?php while ($f = $res->fetch_assoc()) { ?>
                            <tr>
                                <td>
                                    <?php echo $f['producto_id'] ?>
                                </td>
                                <td>
                                    <?php echo $f['marca_id'] ?>
                                </td>
                                <td>
                                    <?php echo $f['producto_nombre'] ?>
                                </td>
                                <td>
                                    <?php echo $f['producto_descripcion'] ?>
                                </td>
                                <td>                               <a href="<?php echo $f['producto_imagen'] ?>"> 

                                    <img class="img-fluid" width="200" height="200" src="<?php echo $f['producto_imagen'] ?>" />
                                </a> 
                                </td>
                                <td>
                                    <?php echo $f['precio'] ?>
                                </td>
                                
                            </tr>
                            <?php
                        }
                        $sel->close();
                        $con->close();
                        ?>
                    <tbody>
                </table>

            </div>
        </div>
        <?php include'inc/incluye_datatable_pie.php'; ?>
    </body>
</html>
