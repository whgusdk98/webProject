<!DOCTYPE html>
<html>
<head>
<title>contact me</title>
<STYLE TYPE = "text/css">




        td{
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 20px;
            font-family: 경기천년바탕 Regular;
            border:2px border-color:#3333FF;
            border-radius: 8px;/*모서리 둥글게*/
        }
div.calender{
position: absolute;
top:170pt;
left:100pt;
}



p{
font-family: 경기천년바탕 Regular;
}
b{
font-family: 경기천년바탕 Regular;
}

div.content{
position: absolute;
top:131pt;
left:550pt;
padding:20pt;
height:386pt;
width: 350pt;
background:#E0E0E0;
}

div.bottom{
position: relative;
width:100%;
text-align: center;
}
</STYLE>

<script type ="text/javascript">
function result(){
alert("JHA스튜디오에 메일을 전송하시겠습니까?")
}
        var today = new Date();//오늘 날짜//내 컴퓨터 로컬을 기준으로 today에 Date 객체를 넣어줌
        var date = new Date();//today의 Date를 세어주는 역할
        function prevCalendar() {//이전 달
        // 이전 달을 today에 값을 저장하고 달력에 today를 넣어줌
        //today.getFullYear() 현재 년도//today.getMonth() 월  //today.getDate() 일 
        //getMonth()는 현재 달을 받아 오므로 이전달을 출력하려면 -1을 해줘야함
         today = new Date(today.getFullYear(), today.getMonth() - 1, today.getDate());
         buildCalendar(); //달력 cell 만들어 출력 
        }
 
        function nextCalendar() {//다음 달
            // 다음 달을 today에 값을 저장하고 달력에 today 넣어줌
            //today.getFullYear() 현재 년도//today.getMonth() 월  //today.getDate() 일 
            //getMonth()는 현재 달을 받아 오므로 다음달을 출력하려면 +1을 해줘야함
             today = new Date(today.getFullYear(), today.getMonth() + 1, today.getDate());
             buildCalendar();//달력 cell 만들어 출력
        }
        function buildCalendar(){//현재 달 달력 만들기
            var doMonth = new Date(today.getFullYear(),today.getMonth(),1);
            //이번 달의 첫째 날,
            //new를 쓰는 이유 : new를 쓰면 이번달의 로컬 월을 정확하게 받아온다.     
            //new를 쓰지 않았을때 이번달을 받아오려면 +1을 해줘야한다. 
            //왜냐면 getMonth()는 0~11을 반환하기 때문
            var lastDate = new Date(today.getFullYear(),today.getMonth()+1,0);
            //이번 달의 마지막 날
            //new를 써주면 정확한 월을 가져옴, getMonth()+1을 해주면 다음달로 넘어가는데
            //day를 1부터 시작하는게 아니라 0부터 시작하기 때문에 
            //대로 된 다음달 시작일(1일)은 못가져오고 1 전인 0, 즉 전달 마지막일 을 가져오게 된다
            var tbCalendar = document.getElementById("calendar");
            //날짜를 찍을 테이블 변수 만듬, 일 까지 다 찍힘
            var tbCalendarYM = document.getElementById("tbCalendarYM");
            //테이블에 정확한 날짜 찍는 변수
            //innerHTML : js 언어를 HTML의 권장 표준 언어로 바꾼다
            //new를 찍지 않아서 month는 +1을 더해줘야 한다. 
             tbCalendarYM.innerHTML = today.getFullYear() + "년 " + (today.getMonth() + 1) + "월"; 
 
             /*while은 이번달이 끝나면 다음달로 넘겨주는 역할*/
            while (tbCalendar.rows.length > 2) {
            //열을 지워줌
            //기본 열 크기는 body 부분에서 2로 고정되어 있다.
                  tbCalendar.deleteRow(tbCalendar.rows.length-1);
                  //테이블의 tr 갯수 만큼의 열 묶음은 -1칸 해줘야지 
                //30일 이후로 담을달에 순서대로 열이 계속 이어진다.
             }
             var row = null;
             row = tbCalendar.insertRow();
             //테이블에 새로운 열 삽입//즉, 초기화
             var cnt = 0;// count, 셀의 갯수를 세어주는 역할
            // 1일이 시작되는 칸을 맞추어 줌
             for (i=0; i<doMonth.getDay(); i++) {
             /*이번달의 day만큼 돌림*/
                  cell = row.insertCell();//열 한칸한칸 계속 만들어주는 역할
                  cnt = cnt + 1;//열의 갯수를 계속 다음으로 위치하게 해주는 역할
             }
            /*달력 출력*/
             for (i=1; i<=lastDate.getDate(); i++) { 
             //1일부터 마지막 일까지 돌림
                  cell = row.insertCell();//열 한칸한칸 계속 만들어주는 역할
                  cell.innerHTML = i;//셀을 1부터 마지막 day까지 HTML 문법에 넣어줌
                  cnt = cnt + 1;//열의 갯수를 계속 다음으로 위치하게 해주는 역할
              if (cnt % 7 == 1) {/*일요일 계산*/
                  //1주일이 7일 이므로 일요일 구하기
                  //월화수목금토일을 7로 나눴을때 나머지가 1이면 cnt가 1번째에 위치함을 의미한다
                cell.innerHTML = "<font color=red>" + i
                //1번째의 cell에만 색칠
            }    
              if (cnt%7 == 0){/* 1주일이 7일 이므로 토요일 구하기*/
                  //월화수목금토일을 7로 나눴을때 나머지가 0이면 cnt가 7번째에 위치함을 의미한다
                  cell.innerHTML = "<font color=blue>" + i
                  //7번째의 cell에만 색칠
                   row = calendar.insertRow();
                   //토요일 다음에 올 셀을 추가
              }
              /*오늘의 날짜에 노란색 칠하기*/
              if (today.getFullYear() == date.getFullYear()
                 && today.getMonth() == date.getMonth()
                 && i == date.getDate()) {
                  //달력에 있는 년,달과 내 컴퓨터의 로컬 년,달이 같고, 일이 오늘의 일과 같으면
                cell.bgColor = "#AACCAA"; 
               }
             }
        }
</script>
</head>
<body>
<h1 align="center"><b>Contact Me</b></h1>
<p align="center">
서울특별시 용산구 청파로47길 100 JHA_phpto studio<br>
Tel : 010-1234-1234<br>
Email : asdsdfgg123@gmail.com
</p><hr width="100%" size = "1">
<div class ="image">
<img src="contact.jpg" width="1400" align="top" hspace="20" vspace="20">
</div>

<div class = "calender">
    <p></p>
<table id="calendar" border="3" align="center" style="border-color:#000000 ">
    <tr><!-- label은 마우스로 클릭을 편하게 해줌 -->
        <td><label onclick="prevCalendar()"><</label></td>
        <td align="center" id="tbCalendarYM" colspan="5">
        yyyy년 m월</td>
        <td><label onclick="nextCalendar()">>
            
        </label></td>
    </tr>
    <tr>
        <td align="center"><font color ="red">일</td>
        <td align="center">월</td>
        <td align="center">화</td>
        <td align="center">수</td>
        <td align="center">목</td>
        <td align="center">금</td>
        <td align="center"><font color ="blue">토</td>
    </tr> 
</table>
<script language="javascript" type="text/javascript">
    buildCalendar();//
</script>
</div>


<div class="content">
<form valign="center">
<p>옵션
<input type = "checkbox" name = "a1">html
<input type = "checkbox" name = "a2" checked>답변을 메일로 받기
</p><hr>
<p>이름 : <input type = "text" name = "name"><br>
이메일(아이디) : <input type = "text">@<select size = "1">
<option>선택하세요<option>gmail.com<option>hanmail.com<option>naver.com<option>daum.com</select>
<input type = "submit" value = "중복 확인"><br>
비밀번호: <input type = "password" name = "pw"><br>
휴대폰번호: <input type = "text" name = "mobile" maxlength = "13" value="010-"><br>
</p>
<hr>
<p>
방문하실 날짜를 적어주세요.<input type = "text" name = "date"><br>
문의하실 작업의 종류를 선택해주세요.<br>
<input type = "checkbox" name = "a1" checked>사진촬영<br>
<input type = "checkbox" name = "a2">상품구매<br>
<input type = "checkbox" name = "a3">기부정보<br></p>
<hr>

<p>내용 : 
<textarea rows="6", cols= "40">모든 글은 비밀글로 저장됩니다</textarea>
<input type = "reset" value = "초기화">
</p><hr>
</form>

<p> 첨부파일 :</p>
<form method="post" action="Contact.php" enctype="multipart/form-data">
<input type="file" name="filename">
<input type="submit" value="Upload">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="SEND" onclick = "result()">
</form>
<?php
$src = $_FILES['filename']['tmp_name'];
$dst = $_FILES['filename']['name'];
$type = $_FILES['filename']['type'];
$ext = substr($dst,-4,4);

ini_set("date.timezone","Asia/Seoul");
$add = date("ymdHis",time());

$new = substr($dst,0,strlen($dst)-4);
$new_name =$new.$add.$ext;
if(move_uploaded_file($src, "./abcd/".$new_name)){
$fp = fopen("./abcd/$new_name","r");
switch($ext){
case ".jpg":
	echo "<img src ='./abcd/$new_name'>";
	break;
case ".JPG":
	echo "<img src ='./abcd/$new_name'>";
	break;
case ".gif":
	echo "<img src ='./abcd/$new_name'>";
	break;
case ".GIF":
	echo "<img src ='./abcd/$new_name'>";
	break;
case ".png":
	echo "<img src ='./abcd/$new_name'>";
	break;
case ".PNG":
	echo "<img src ='./abcd/$new_name'>";
	break;
case ".txt":
	echo fread($fp,filesize('./abcd/'));
	break;
case ".TXT":
	echo fread($fp,filesize('./abcd/'));
	break;
default:
	echo "업로드 실패";
}
}
fclose($fp);
?>
</div>
<div class="bottom">
<font align="center" face="경기천년바탕 Regular">(C) 2018, by Jo Hyun-ah_Photo Studio</font>
</div>
</body>
</html>