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
            font-family: ���õ����� Regular;
            border:2px border-color:#3333FF;
            border-radius: 8px;/*�𼭸� �ձ۰�*/
        }
div.calender{
position: absolute;
top:170pt;
left:100pt;
}



p{
font-family: ���õ����� Regular;
}
b{
font-family: ���õ����� Regular;
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
alert("JHA��Ʃ����� ������ �����Ͻðڽ��ϱ�?")
}
        var today = new Date();//���� ��¥//�� ��ǻ�� ������ �������� today�� Date ��ü�� �־���
        var date = new Date();//today�� Date�� �����ִ� ����
        function prevCalendar() {//���� ��
        // ���� ���� today�� ���� �����ϰ� �޷¿� today�� �־���
        //today.getFullYear() ���� �⵵//today.getMonth() ��  //today.getDate() �� 
        //getMonth()�� ���� ���� �޾� ���Ƿ� �������� ����Ϸ��� -1�� �������
         today = new Date(today.getFullYear(), today.getMonth() - 1, today.getDate());
         buildCalendar(); //�޷� cell ����� ��� 
        }
 
        function nextCalendar() {//���� ��
            // ���� ���� today�� ���� �����ϰ� �޷¿� today �־���
            //today.getFullYear() ���� �⵵//today.getMonth() ��  //today.getDate() �� 
            //getMonth()�� ���� ���� �޾� ���Ƿ� �������� ����Ϸ��� +1�� �������
             today = new Date(today.getFullYear(), today.getMonth() + 1, today.getDate());
             buildCalendar();//�޷� cell ����� ���
        }
        function buildCalendar(){//���� �� �޷� �����
            var doMonth = new Date(today.getFullYear(),today.getMonth(),1);
            //�̹� ���� ù° ��,
            //new�� ���� ���� : new�� ���� �̹����� ���� ���� ��Ȯ�ϰ� �޾ƿ´�.     
            //new�� ���� �ʾ����� �̹����� �޾ƿ����� +1�� ������Ѵ�. 
            //�ֳĸ� getMonth()�� 0~11�� ��ȯ�ϱ� ����
            var lastDate = new Date(today.getFullYear(),today.getMonth()+1,0);
            //�̹� ���� ������ ��
            //new�� ���ָ� ��Ȯ�� ���� ������, getMonth()+1�� ���ָ� �����޷� �Ѿ�µ�
            //day�� 1���� �����ϴ°� �ƴ϶� 0���� �����ϱ� ������ 
            //��� �� ������ ������(1��)�� ���������� 1 ���� 0, �� ���� �������� �� �������� �ȴ�
            var tbCalendar = document.getElementById("calendar");
            //��¥�� ���� ���̺� ���� ����, �� ���� �� ����
            var tbCalendarYM = document.getElementById("tbCalendarYM");
            //���̺� ��Ȯ�� ��¥ ��� ����
            //innerHTML : js �� HTML�� ���� ǥ�� ���� �ٲ۴�
            //new�� ���� �ʾƼ� month�� +1�� ������� �Ѵ�. 
             tbCalendarYM.innerHTML = today.getFullYear() + "�� " + (today.getMonth() + 1) + "��"; 
 
             /*while�� �̹����� ������ �����޷� �Ѱ��ִ� ����*/
            while (tbCalendar.rows.length > 2) {
            //���� ������
            //�⺻ �� ũ��� body �κп��� 2�� �����Ǿ� �ִ�.
                  tbCalendar.deleteRow(tbCalendar.rows.length-1);
                  //���̺��� tr ���� ��ŭ�� �� ������ -1ĭ ������� 
                //30�� ���ķ� �����޿� ������� ���� ��� �̾�����.
             }
             var row = null;
             row = tbCalendar.insertRow();
             //���̺� ���ο� �� ����//��, �ʱ�ȭ
             var cnt = 0;// count, ���� ������ �����ִ� ����
            // 1���� ���۵Ǵ� ĭ�� ���߾� ��
             for (i=0; i<doMonth.getDay(); i++) {
             /*�̹����� day��ŭ ����*/
                  cell = row.insertCell();//�� ��ĭ��ĭ ��� ������ִ� ����
                  cnt = cnt + 1;//���� ������ ��� �������� ��ġ�ϰ� ���ִ� ����
             }
            /*�޷� ���*/
             for (i=1; i<=lastDate.getDate(); i++) { 
             //1�Ϻ��� ������ �ϱ��� ����
                  cell = row.insertCell();//�� ��ĭ��ĭ ��� ������ִ� ����
                  cell.innerHTML = i;//���� 1���� ������ day���� HTML ������ �־���
                  cnt = cnt + 1;//���� ������ ��� �������� ��ġ�ϰ� ���ִ� ����
              if (cnt % 7 == 1) {/*�Ͽ��� ���*/
                  //1������ 7�� �̹Ƿ� �Ͽ��� ���ϱ�
                  //��ȭ����������� 7�� �������� �������� 1�̸� cnt�� 1��°�� ��ġ���� �ǹ��Ѵ�
                cell.innerHTML = "<font color=red>" + i
                //1��°�� cell���� ��ĥ
            }    
              if (cnt%7 == 0){/* 1������ 7�� �̹Ƿ� ����� ���ϱ�*/
                  //��ȭ����������� 7�� �������� �������� 0�̸� cnt�� 7��°�� ��ġ���� �ǹ��Ѵ�
                  cell.innerHTML = "<font color=blue>" + i
                  //7��°�� cell���� ��ĥ
                   row = calendar.insertRow();
                   //����� ������ �� ���� �߰�
              }
              /*������ ��¥�� ����� ĥ�ϱ�*/
              if (today.getFullYear() == date.getFullYear()
                 && today.getMonth() == date.getMonth()
                 && i == date.getDate()) {
                  //�޷¿� �ִ� ��,�ް� �� ��ǻ���� ���� ��,���� ����, ���� ������ �ϰ� ������
                cell.bgColor = "#AACCAA"; 
               }
             }
        }
</script>
</head>
<body>
<h1 align="center"><b>Contact Me</b></h1>
<p align="center">
����Ư���� ��걸 û�ķ�47�� 100 JHA_phpto studio<br>
Tel : 010-1234-1234<br>
Email : asdsdfgg123@gmail.com
</p><hr width="100%" size = "1">
<div class ="image">
<img src="contact.jpg" width="1400" align="top" hspace="20" vspace="20">
</div>

<div class = "calender">
    <p></p>
<table id="calendar" border="3" align="center" style="border-color:#000000 ">
    <tr><!-- label�� ���콺�� Ŭ���� ���ϰ� ���� -->
        <td><label onclick="prevCalendar()"><</label></td>
        <td align="center" id="tbCalendarYM" colspan="5">
        yyyy�� m��</td>
        <td><label onclick="nextCalendar()">>
            
        </label></td>
    </tr>
    <tr>
        <td align="center"><font color ="red">��</td>
        <td align="center">��</td>
        <td align="center">ȭ</td>
        <td align="center">��</td>
        <td align="center">��</td>
        <td align="center">��</td>
        <td align="center"><font color ="blue">��</td>
    </tr> 
</table>
<script language="javascript" type="text/javascript">
    buildCalendar();//
</script>
</div>


<div class="content">
<form valign="center">
<p>�ɼ�
<input type = "checkbox" name = "a1">html
<input type = "checkbox" name = "a2" checked>�亯�� ���Ϸ� �ޱ�
</p><hr>
<p>�̸� : <input type = "text" name = "name"><br>
�̸���(���̵�) : <input type = "text">@<select size = "1">
<option>�����ϼ���<option>gmail.com<option>hanmail.com<option>naver.com<option>daum.com</select>
<input type = "submit" value = "�ߺ� Ȯ��"><br>
��й�ȣ: <input type = "password" name = "pw"><br>
�޴�����ȣ: <input type = "text" name = "mobile" maxlength = "13" value="010-"><br>
</p>
<hr>
<p>
�湮�Ͻ� ��¥�� �����ּ���.<input type = "text" name = "date"><br>
�����Ͻ� �۾��� ������ �������ּ���.<br>
<input type = "checkbox" name = "a1" checked>�����Կ�<br>
<input type = "checkbox" name = "a2">��ǰ����<br>
<input type = "checkbox" name = "a3">�������<br></p>
<hr>

<p>���� : 
<textarea rows="6", cols= "40">��� ���� ��б۷� ����˴ϴ�</textarea>
<input type = "reset" value = "�ʱ�ȭ">
</p><hr>
</form>

<p> ÷������ :</p>
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
	echo "���ε� ����";
}
}
fclose($fp);
?>
</div>
<div class="bottom">
<font align="center" face="���õ����� Regular">(C) 2018, by Jo Hyun-ah_Photo Studio</font>
</div>
</body>
</html>