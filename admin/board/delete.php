<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/qc/admin/inc/dbcon.php');

// GET 데이터 수신
$category = isset($_GET['category']) ? $_GET['category'] : 'all';
$pid=$_GET['pid'];



if ($category === 'all') {
    $sql = "DELETE FROM board WHERE pid = $pid";
} else {
    // 카테고리와 pid가 일치하는 글만 삭제
    $sql = "DELETE FROM board WHERE pid = $pid AND category = '$category'";
}


switch ($category) {
    case 'all':
        $redirect_url = '/admin/board/board_list.php?category=all'; 
        break;
    case 'qna':
        $redirect_url = '/admin/board/board_list.php?category=qna'; 
        break;
    case 'notice':
        $redirect_url = '/admin/board/board_list.php?category=notice'; 
        break;
    case 'event':
        $redirect_url = '/admin/board/board_list.php?category=event'; 
        break;
    case 'free':
        $redirect_url = '/admin/board/board_list.php?category=free'; 
        $un_redirect_url = '/admin/board/board_list.php';
        break;
    default:
        die("침몰");
  }
  

if($mysqli->query($sql) === true){
  echo "<script>
  alert('글 삭제 성공');
  location.href='$redirect_url';
  </script>";
}else{
  echo "<script>
  alert('글 삭제 실패');
  location.href='$un_redirect_url';
  </script>";
}



?>