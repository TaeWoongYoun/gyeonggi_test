    <!-- 헤더 영역 -->
    <?php require('./headandfoot/header.php')?>
    <!-- 헤더 영역 -->
    <!-- 컨텐츠 영역 -->
    <div class="content">
    <?php
    if ($_GET['id'] == 'admin') {
        // 관리자 마이페이지
        require('./mypage/mypage_admin.php');
    } else if ($_GET['id'] == 'guide1' || $_GET['id'] == 'guide2') {
        // 해설가 마이페이지
        require('./mypage/mypage_guide.php');
    } else if ($_GET['id'] == '') {
        echo "
            <script>
                alert('로그인한 회원만 접근 가능합니다.');
                location.href = 'index.php'
            </script>";
    } else {
        // 일반회원 마이페이지
        require('./mypage/mypage_urse.php');
    }
    ?>
    </div>
    <!-- 컨텐츠 영역 -->
    <!-- 푸터 영역 -->
    <?php require('./headandfoot/footer.php')?>
    <!-- 푸터 영역 -->