    <!-- 헤더 영역 -->
    <?php require('./headandfoot/header.php')?>
    <!-- 헤더 영역 -->
    <!-- 컨텐츠 영역 -->
    <div class="content">
    <?php
    if ($_GET['id'] == 'admin') {
        require('./reservation/reservation_admin.php');
    } else if ($_GET['id'] == 'guide1' || $_GET['id'] == 'guide2') {
        require('./reservation/reservation.guide.php');
    } else {
        require('./reservation/reservation_user.php');
    }
    ?>
    </div>
    <!-- 컨텐츠 영역 -->
    <!-- 푸터 영역 -->
    <?php require('./headandfoot/footer.php')?>
    <!-- 푸터 영역 -->