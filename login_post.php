<?  session_start();
   @$connect = mysql_connect("localhost","pbd2857","mbh681214!");
  @mysql_select_db("pbd2857");      
  mysqli_set_charset($connect,'utf8');
   
   $id = $_POST['id'];
   $pw = $_POST['pw'];
   
   //아이디 중복검사를 위한 DB 불러오기
   $query = "select * from member where id='$id' and pw='$pw'";
   $result = mysql_query($query,$connect);
   $data = mysql_Fetch_Array($result);
   
   
   // 로그인 세션 등록
   if($data){
      $_SESSION['id'] = $id;
      echo "
      <script>
         alert('로그인 하였습니다.');
         location.href='index.html'
      </script>
      ";
   }else{      
      echo "
            <script>
               alert('회원정보가 없습니다.');
               history.back(1);
            </script>
         ";
   }
   
?>

<html lang="kor">
<head>
   <meta charset="utf-8">
</head>
</html>