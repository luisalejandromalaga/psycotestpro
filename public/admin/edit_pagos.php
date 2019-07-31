<?php
session_start();
require_once './config/config.php';
require_once 'includes/auth_validate.php';


// Sanitize if you want
$pagos_id = filter_input(INPUT_GET, 'pago_id', FILTER_VALIDATE_INT);
$operation = filter_input(INPUT_GET, 'operation',FILTER_SANITIZE_STRING); 
($operation == 'edit') ? $edit = true : $edit = false;


//Handle update request. As the form's action attribute is set to the same script, but 'POST' method, 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    //Get pagos id form query string parameter.
    $pagos_id = filter_input(INPUT_GET, 'pago_id', FILTER_SANITIZE_STRING);

    //Get input data
    $data_to_update = filter_input_array(INPUT_POST);
    
    $db->where('id',$pagos_id);
    $stat = $db->update('pagos', $data_to_update);

    if($stat)
    {
        $_SESSION['success'] = "Pago updated successfully!";
        //Redirect to the listing page,
        header('location: pagos.php');
        //Important! Don't execute the rest put the exit/die. 
        exit();
    }
}


//If edit variable is set, we are performing the update operation.
if($edit)
{
    $db->where('id', $pagos_id);
    //Get data to pre-populate the form.
    $pagos = $db->getOne("pagos");
}
?>


<?php
    include_once 'includes/header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <h2 class="page-header">Update pagos</h2>
    </div>
    <!-- Flash messages -->
    <?php
        include('./includes/flash_messages.php')
    ?>

    <form class="" action="" method="post" enctype="multipart/form-data" id="contact_form">
        
        <?php
            //Include the common form for add and edit  
            require_once('./includes/forms/pagos_form.php'); 
        ?>
    </form>
</div>




<?php include_once 'includes/footer.php'; ?>