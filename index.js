document.addEventListener('DOMContentLoaded', function() {
    $('#check_id').click(function(e){
        var uid = $('#id').val();
        if (!/^[A-Za-z0-9]*$/.test(uid)){
            alert('아이디는 영어와 숫자 조합으로 입력해주세요.');
            e.preventDefault();
            return false;
        }
        $.ajax({url:'check_id.php', data:{id:uid}, method:'POST', 
            success : function(data){
                if (data > 0) alert('사용중인 아이디입니다.')
                else {
                    alert('사용 가능한 아이디입니다.');
                    $('#ok').val(1);
                }
            }
        })
    })
    $("#id").change(function(){
        $('#ok').val(0);
    });
    document.querySelector('.submit').addEventListener('click', function(e) {
        const name = document.getElementById('name').value;
        const pw = document.getElementById('pw').value;
        const ok = document.getElementById('ok').value;

        if (name === '') {
            alert('이름을 입력해주세요.')
            e.preventDefault();
            return false;
        } else if (!/^[가-힣]+$/.test(name)) {
            alert('이름을 한글만 입력해주세요.')
            e.preventDefault();
            return false;
        } else if (pw === '') {
            alert('비밀번호를 입력해주세요.')
            e.preventDefault();
            return false;
        } else if (!/^[A-Za-z0-9]*$/.test(pw)) {
            alert('비밀번호는 영문과 숫자 조합으로 입력해주세요.')
            e.preventDefault();
            return false;
        } else if (ok != 1) {
            alert('중복확인을 먼저 진행해주세요.')
            e.preventDefault();
            return false;
        }
    })
})