<?php
session_start();
require_once './config/config.php';
require_once 'includes/auth_validate.php';


// Sanitize if you want
$customer_id = 1;

$edit = true;


//Handle update request. As the form's action attribute is set to the same script, but 'POST' method, 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    //Get customer id form query string parameter.
    $customer_id = 1;

    //Get input data
    $data_to_update = filter_input_array(INPUT_POST);
    if( $_FILES['logo']['name'] != ''){

        $data_to_update['logo'] = $_FILES['logo']['name'];
        $name_array = $_FILES['logo']['name'];
        $tmp_name_array = $_FILES['logo']['tmp_name'];
   
        move_uploaded_file($tmp_name_array,"../assets/images/".$name_array);
    }
    if( $_FILES['imagen_p1']['name'] != ''){

        $data_to_update['imagen_p1'] = $_FILES['imagen_p1']['name'];
        $name_array = $_FILES['imagen_p1']['name'];
        $tmp_name_array = $_FILES['imagen_p1']['tmp_name'];
   
        move_uploaded_file($tmp_name_array,"../assets/images/".$name_array);
    }
    if( $_FILES['imagen_p2']['name'] != ''){

        $data_to_update['imagen_p2'] = $_FILES['imagen_p2']['name'];
        $name_array = $_FILES['imagen_p2']['name'];
        $tmp_name_array = $_FILES['imagen_p2']['tmp_name'];
   
        move_uploaded_file($tmp_name_array,"../assets/images/".$name_array);
    }
    if( $_FILES['imagen_p3']['name'] != ''){

        $data_to_update['imagen_p3'] = $_FILES['imagen_p3']['name'];
        $name_array = $_FILES['imagen_p3']['name'];
        $tmp_name_array = $_FILES['imagen_p3']['tmp_name'];
   
        move_uploaded_file($tmp_name_array,"../assets/images/".$name_array);
    }
    if( $_FILES['imagen_p4']['name'] != ''){

        $data_to_update['imagen_p4'] = $_FILES['imagen_p4']['name'];
        $name_array = $_FILES['imagen_p4']['name'];
        $tmp_name_array = $_FILES['imagen_p4']['tmp_name'];
   
        move_uploaded_file($tmp_name_array,"../assets/images/".$name_array);
    }
    if( $_FILES['imagen_1']['name'] != ''){

        $data_to_update['imagen_1'] = $_FILES['imagen_1']['name'];
        $name_array = $_FILES['imagen_1']['name'];
        $tmp_name_array = $_FILES['imagen_1']['tmp_name'];
   
        move_uploaded_file($tmp_name_array,"../assets/images/".$name_array);
    }
    if( $_FILES['imagen_2']['name'] != ''){

        $data_to_update['imagen_2'] = $_FILES['imagen_2']['name'];
        $name_array = $_FILES['imagen_2']['name'];
        $tmp_name_array = $_FILES['imagen_2']['tmp_name'];
   
        move_uploaded_file($tmp_name_array,"../assets/images/".$name_array);
    }if( $_FILES['imagen_3']['name'] != ''){

        $data_to_update['imagen_3'] = $_FILES['imagen_3']['name'];
        $name_array = $_FILES['imagen_3']['name'];
        $tmp_name_array = $_FILES['imagen_3']['tmp_name'];
   
        move_uploaded_file($tmp_name_array,"../assets/images/".$name_array);
    }
    if( $_FILES['imagen_cafeteria']['name'] != ''){

        $data_to_update['imagen_cafeteria'] = $_FILES['imagen_cafeteria']['name'];
        $name_array = $_FILES['imagen_cafeteria']['name'];
        $tmp_name_array = $_FILES['imagen_cafeteria']['tmp_name'];
   
        move_uploaded_file($tmp_name_array,"../assets/images/".$name_array);
    }
    if( $_FILES['imagen_spot']['name'] != ''){

        $data_to_update['imagen_spot'] = $_FILES['imagen_spot']['name'];
        $name_array = $_FILES['imagen_spot']['name'];
        $tmp_name_array = $_FILES['imagen_spot']['tmp_name'];
   
        move_uploaded_file($tmp_name_array,"../assets/images/".$name_array);
    }
    if( $_FILES['video']['name'] != ''){

        $data_to_update['video'] = $_FILES['video']['name'];
        $name_array = $_FILES['video']['name'];
        $tmp_name_array = $_FILES['video']['tmp_name'];
   
        move_uploaded_file($tmp_name_array,"../assets/images/".$name_array);
    }
    if( $_FILES['imagen_producto_1']['name'] != ''){

        $data_to_update['imagen_producto_1'] = $_FILES['imagen_producto_1']['name'];
        $name_array = $_FILES['imagen_producto_1']['name'];
        $tmp_name_array = $_FILES['imagen_producto_1']['tmp_name'];
   
        move_uploaded_file($tmp_name_array,"../assets/images/".$name_array);
    }
    if( $_FILES['imagen_producto_2']['name'] != ''){

        $data_to_update['imagen_producto_2'] = $_FILES['imagen_producto_2']['name'];
        $name_array = $_FILES['imagen_producto_2']['name'];
        $tmp_name_array = $_FILES['imagen_producto_2']['tmp_name'];
   
        move_uploaded_file($tmp_name_array,"../assets/images/".$name_array);
    }
    if( $_FILES['imagen_producto_3']['name'] != ''){

        $data_to_update['imagen_producto_3'] = $_FILES['imagen_producto_3']['name'];
        $name_array = $_FILES['imagen_producto_3']['name'];
        $tmp_name_array = $_FILES['imagen_producto_3']['tmp_name'];
   
        move_uploaded_file($tmp_name_array,"../assets/images/".$name_array);
    }
    


    $db->where('id',$customer_id);
    $stat = $db->update('principal', $data_to_update);

    if($stat)
    {
        $_SESSION['success'] = "Principal actualizado satisfactoriamente!";
        //Redirect to the listing page,
        header('location: principal.php');
        //Important! Don't execute the rest put the exit/die. 
        exit();
    }
}


//If edit variable is set, we are performing the update operation.
if($edit)
{
    $db->where('id', $customer_id);
    //Get data to pre-populate the form.
    $principal = $db->getOne("principal");
}
?>


<?php
    include_once 'includes/header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <h2 class="page-header">Editar Página principal</h2>
    </div>
    <!-- Flash messages -->
    <?php
        include('./includes/flash_messages.php')
    ?>

    <form class="" action="" method="post" enctype="multipart/form-data" id="contact_form">
        
        <?php
            //Include the common form for add and edit  
            require_once('./includes/forms/principal_form.php'); 
        ?>
    </form>
</div>




<?php include_once 'includes/footer.php'; ?>