    <!-- 헤더 영역 -->
    <?php require('./headandfoot/header.php')?>
    <!-- 헤더 영역 -->
    <!-- 컨텐츠 영역 -->
    <div class="content">
    <?php
    if ($_GET['id'] == 'admin') {
        echo '1';
    } else if ($_GET['id'] == 'guide1' || $_GET['id'] == 'guide2') {
        echo '2';
    } else if ($_GET['id'] == '') {
        echo "
            <script>
                alert('회원가입을 먼저 진행해주세요.');
                location.href = 'join.php'
            </script>";
    } else {
        echo "3";
    }
    ?>
    </div>
    <!-- 컨텐츠 영역 -->
    <!-- 푸터 영역 -->
    <?php require('./headandfoot/footer.php')?>
    <!-- 푸터 영역 -->