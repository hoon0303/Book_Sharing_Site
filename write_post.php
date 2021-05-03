<?
	$b_name = $_POST['b_name'];
	$book_name = $_POST['book_name'];
	$phone = $_POST['phone'];
	$writer = $_POST['writer'];
	
	$names = 'img/'.$b_name.'/';
	
	include "conn.php";
	define('FILE_UPLOAD_PATH', $names);
	$image = $_FILES['img']['name'];
	$target = FILE_UPLOAD_PATH . $image;
	move_uploaded_file($_FILES['img']['tmp_name'], $target); 
	$temp = $_FILES['img']['name'];
	
	$query = "insert into board(b_name,img,book_name,phone,writer) values('$b_name','$temp','$book_name','$phone','$writer')";
	mysqli_query($connect,$query);
	
	

		
?>
<html lang="kor">
<head>
   <meta charset="utf-8">
</head>
</html>
<script>
	alert("글 등록이 완료되었습니다");
	location.href='cprogram.html?b_name=<?=$b_name?>';
</script>