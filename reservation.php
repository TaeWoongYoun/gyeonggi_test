    <!-- 헤더 영역 -->
    <?php require('./headandfoot/header.php')?>
    <!-- 헤더 영역 -->
    <!-- 컨텐츠 영역 -->
    <div class="content">
    <?php
    if ($_GET['id'] == 'admin') {
        // 관리자 예약하기 페이지
        require('./reservation/reservation_admin.php');
    } else if ($_GET['id'] == 'guide1' || $_GET['id'] == 'guide2') {
        // 해설가 예약하기 페이지
        require('./reservation/reservation.guide.php');
    } else {
        // 일반회원 예약하기 페이지
        require('./reservation/reservation_user.php');
    }
    ?>
    </div>
    <!-- 컨텐츠 영역 -->
    <!-- 푸터 영역 -->
    <?php require('./headandfoot/footer.php')?>
    <!-- 푸터 영역 -->