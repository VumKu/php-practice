<?php include __DIR__ . '/connect_parts/config.php'; 


$output= [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有新增'

];


if(isset($_POST['input'])){

    $output['input'] = $_POST['input'];


}

?>
