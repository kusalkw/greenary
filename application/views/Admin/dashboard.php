<?php include 'includes/header.php';

if($this->session->flashdata('Welcome')){
    echo "<h3>".$this->session->userdata('Welcome')."</h3>";


}

?>

<?php include 'includes/footer.php';