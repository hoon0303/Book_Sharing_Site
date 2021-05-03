<?
$id = $_POST['id'];
$pw = $_POST['pw'];
$name = $_POST['name'];

	include "conn.php";
	$query = "insert into member(id,pw,name) values('$id','$pw','$name')";
	mysqli_query($connect,$query);

?>
<script>
alert('회원가입이 완료되었습니다.');
location.href='index.html';
</script>