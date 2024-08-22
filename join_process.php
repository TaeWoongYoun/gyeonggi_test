<?php $conn = mysqli_connect('localhost', 'root', '', 'gy')?>
<?php
    $id = $_POST['id'];
    $name = $_POST['name'];
    $pw = $_POST['pw'];

    $sql = "INSERT INTO user (id, name, pw) VALUES ('$id', '$name', '$pw')";
    mysqli_query($conn, $sql);
?>

<script>
    alert('회원가입이 완료되었습니다');
    location.href = 'index.php'
</script>