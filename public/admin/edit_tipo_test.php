<?php
session_start();
require_once './config/config.php';
require_once 'includes/auth_validate.php';


// Sanitize if you want
$tipo_test_id = filter_input(INPUT_GET, 'tipo_test_id', FILTER_VALIDATE_INT);
$operation = filter_input(INPUT_GET, 'operation',FILTER_SANITIZE_STRING); 
($operation == 'edit') ? $edit = true : $edit = false;


//Handle update request. As the form's action attribute is set to the same script, but 'POST' method, 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    //Get customer id form query string parameter.
    $tipo_test_id = filter_input(INPUT_GET, 'tipo_test_id', FILTER_SANITIZE_STRING);

    //Get input data
    $data_to_update = filter_input_array(INPUT_POST);
   
    $db->where('id_tipo_test',$tipo_test_id);
    $stat = $db->update('tipo_test', $data_to_update);

    if($stat)
    {
        $_SESSION['success'] = "Test updated successfully!";
        //Redirect to the listing page,
        header('location: tipo_test.php');
        //Important! Don't execute the rest put the exit/die. 
        exit();
    }
}


//If edit variable is set, we are performing the update operation.
if($edit)
{
    $db->where('id_tipo_test', $tipo_test_id);
    //Get data to pre-populate the form.
    $product = $db->getOne("tipo_test");
}
?>


<?php
    include_once 'includes/header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <h2 class="page-header">Update Test</h2>
    </div>
    <!-- Flash messages -->
    <?php
        include('./includes/flash_messages.php')
    ?>

    <form class="" action="" method="post" enctype="multipart/form-data" id="contact_form">
        
        <?php
            //Include the common form for add and edit  
            require_once('./includes/forms/tipo_test_form.php'); 
        ?>
    </form>
</div>




<?php include_once 'includes/footer.php'; ?>