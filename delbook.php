<?
   $no = $_GET['no'];
   $b_name = $_GET['b_name'];
    @$connect = mysql_connect("localhost","pbd2857","mbh681214!");
   mysql_select_db("pbd2857");      
	
	$query = "delete from board where no=$no";
    mysql_query($query,$connect);
   

?>

<html lang="kor">
<head>
   <meta charset="utf-8">
</head>

<script>
   alert('삭제완료');
	location.href='cprogram.html?b_name=<?=$b_name?>';
</script>
</html>