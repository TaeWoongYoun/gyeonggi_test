<?php $conn = mysqli_connect('localhost', 'root', '', 'gy')?>
<?php
    $id = $_POST['id'];
    $sql = "SELECT * FROM user WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    echo mysqli_num_rows($result);
?>