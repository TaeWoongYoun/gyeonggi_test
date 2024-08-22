<?php $conn = mysqli_connect('localhost', 'root', '', 'gy')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>달빛기행축제</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>
    <?php $id = isset($_GET['id']) ? mysqli_real_escape_string($conn, $_GET['id']) : ''?>
    <!-- 헤더 영역 -->
    <div class="header_area">
        <header>
            <div class="logo">
                <img src="대지 3.png" alt="">
            </div>
            <nav>
                <ul class="main_menu">
                    <li><a href="index.php">홈</a></li>
                    <li><a href="#">소개</a>
                        <ul class="sub_menu sub_menu01">
                            <li><a href="sub01.html">달빛기행축제란</a></li>
                            <li><a href="#">지역별 달빛기행축제 안내</a></li>
                            <li><a href="course.html">코스소개</a></li>
                        </ul>
                    </li>
                    <li><a href="#">참여/소식</a>
                        <ul class="sub_menu sub_menu02">
                            <li><a href="#">공지사항</a></li>
                            <li><a href="sub02.html">문화달력</a></li>
                            <li><a href="event.html">퀴즈 이벤트 참가</a></li>
                        </ul>
                    </li>
                    <li><a href="#">굿즈SHOP</a></li>
                    <li><a href="reservation.php?id=<?= $id?>">예약하기</a></li>
                    <li><a href="#">마이페이지</a></li>
                </ul>
            </nav>
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM user WHERE id = '$id'";
                $result = mysqli_query($conn, $sql);
                if ($row = mysqli_fetch_array($result)) {
                    echo "
                    <div class='sgin_btn'>
                        <div class='login_btn'>
                            <i class='fa-solid fa-user'></i>
                            <p>{$row['name']}</p>
                        </div>
                        <a href='index.php'>
                            <div class='join_btn'>
                                <i class='fa-solid fa-door-closed'></i>
                                <p>로그아웃</p>
                            </div>
                        </a>
                    </div>";
                }
            } else {
                echo "
                <div class='sgin_btn'>
                    <a href='login.php'>
                        <div class='login_btn'>
                            <i class='fa-solid fa-right-to-bracket'></i>
                            <p>로그인</p>
                        </div>
                    </a>
                    <a href='join.php'>
                        <div class='join_btn'>
                            <i class='fa-solid fa-user-plus'></i>
                            <p>회원가입</p>
                        </div>
                    </a>
                </div>";
            }
            ?>
        </header>
    </div>
    <!-- 헤더 영역 -->