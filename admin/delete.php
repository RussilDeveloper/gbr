<?php include('users/includes/init.php');

if($_GET['type'] == 'lead'){
    
    Clients::deleteLEad($db,$_GET['id']);
    
    header('location:  leads.php');
    exit();
}

if($_GET['type'] == 'time'){
    
    Clients::deletetimemanagement($db,$_GET['id']);
    
    header('location:  timemanagement.php');
    exit();
}

if($_GET['type'] == 'date'){
    
    Clients::deletedatemanagement($db,$_GET['id']);
    
    header('location:  datemanagement.php');
    exit();
}

if($_GET['type'] == 'doctor'){
    
    Clients::deleteDoctor($db,$_GET['id']);
    
    header('location:  doctors.php');
    exit();
}

?>