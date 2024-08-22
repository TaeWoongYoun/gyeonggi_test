<?php $conn = mysqli_connect('localhost', 'root', '', 'gy')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            height: 100%;
        }
        .join_back{
            width: 100%; 
            height: 100vh; 
            background: rgba(0, 0, 0, 0.3);
        }
        .join_modal{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 450px; 
            height: 350px; 
            background-color: #fff;
        }
        .join_modal h1{
            text-align: center;
            line-height: 100px;
            font-size: 44px;
        }
        .id_box{
            width: 350px;
            margin-left: 50px;
            height: 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .id_box input{
            width: 240px;
            height: 50px;
            border: 1px solid black;
            font-size: 20px;
            padding-left: 10px;
        }
        .id_box button{
            width: 90px;
            height: 50px;
            border: 1px solid black;
            background-color: #000;
            color: #fff;
            font-size: 18px;
        }
        .input_box{
            margin-top: 10px;
            width: 350px;
            margin-left: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .input_box input{
            width: 100%;
            height: 100%;
            border: 1px solid black;
            font-size: 20px;
            padding-left: 10px;
        }
        .input_box button{
            width: 120px;
            height: 40px;
            background-color: #fff;
            border: 1px solid #000;
            margin: 10px;
            font-size: 18px;
        }
    </style>

    <div class="join_back">
        <div class="join_modal">
            <h1>회원가입</h1>
            <form action="join_process.php" method="post">
                <p class="id_box"><input type="text" name="id" id="id" placeholder="아이디"> <button type="button" id="check_id">중복확인</button></p>
                <input type="hidden" name="ok" id="ok" value="0">
                <p class="input_box"><input type="text" name="name" id="name" placeholder="이름"></p>
                <p class="input_box"><input type="password" name="pw" id="pw" placeholder="비밀번호"></p>
                <p class="input_box"><button type="submit" class="submit">회원가입</button> <button type="reset">취소</button></p>
            </form>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/join.js"></script>
</body>
</html>