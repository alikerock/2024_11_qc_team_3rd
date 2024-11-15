<?php
session_start();
// print_r($_SESSION); 
if (!isset($title)) {
  $title = '';
}
include_once($_SERVER['DOCUMENT_ROOT'] . '/qc/admin/inc/dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> <?= $title; ?> - quantumcode</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST']; ?>/qc/admin/css/common.css">
    <?php
    if (isset($summernote_css)) {
      echo $summernote_css;
    }
    if (isset($lecture_css)) {
      echo $lecture_css;
    }
    if (isset($teacher_css)) {
      echo $teacher_css;
    }
    if (isset($member_css)) {
      echo $member_css;
    }
    ?>
    <!-- Core Style CSS -->
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST']; ?>/qc/admin/css/core-style.css">

  </head>
  <!-- Favicon -->


  <!-- Bootstrap, jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
  <?php
  if (isset($summernote_js)) {
    echo $summernote_js;
  }
  ?>
</head>

<body>

  <nav class="d-flex flex-column align-items-center justify-content-between">
    <div class="nav_aside_menu">
      <h1 class="top_logo d-flex justify-content-center">
        <a href="/qc/admin/index.php"><img src="http://<?= $_SERVER['HTTP_HOST']; ?>/qc/admin/img/core-img/Normal_Logo.svg" alt="탑 로고"></a>
      </h1>
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nav_cate_dashboard" aria-expanded="false" aria-controls="nav_cate_dashboard">
              <img src="http://<?= $_SERVER['HTTP_HOST']; ?>/qc/admin/img/icon-img/SquaresFour.svg" alt="대시보드 아이콘"> 대시보드
            </button>
          </h2>
          <ul id="nav_cate_dashboard" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <li>대시보드</li>
          </ul>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nav_cate_Sales" aria-expanded="false" aria-controls="nav_cate_Sales">
              <img src="http://<?= $_SERVER['HTTP_HOST']; ?>/qc/admin/img/icon-img/ChartLineUp.svg" alt="매출관리 아이콘"> 매출관리
            </button>
          </h2>
          <ul id="nav_cate_Sales" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <li><a href="">매출목록</a></li>
          </ul>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nav_cate_lecture" aria-expanded="false" aria-controls="nav_cate_lecture">
              <img src="http://<?= $_SERVER['HTTP_HOST']; ?>/qc/admin/img/icon-img/Book.svg" alt="강의 관리 아이콘"> 강의 관리
            </button>
          </h2>
          <ul id="nav_cate_lecture" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/qc/admin/lecture/lecture_list.php">강의 목록</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/qc/admin/lecture/lecture_insert.php">강의 등록</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/qc/admin/lecture/category_list.php">카테고리 관리</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/qc/admin/lecture/lecture_review.php">수강평</a></li>
          </ul>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nav_cate_member" aria-expanded="false" aria-controls="nav_cate_member">
              <img src="http://<?= $_SERVER['HTTP_HOST']; ?>/qc/admin/img/icon-img/UsersFour.svg" alt="회원 관리 아이콘"> 회원 관리
            </button>
          </h2>
          <ul id="nav_cate_member" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/qc/admin/members/member_list.php">회원 목록</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/qc/admin/members/member_insert.php">회원 등록</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/qc/admin/members/member_overview.php">회원 총괄</a></li>
          </ul>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nav_cate_instructor" aria-expanded="false" aria-controls="nav_cate_instructor">
              <img src="http://<?= $_SERVER['HTTP_HOST']; ?>/qc/admin/img/icon-img/ChalkboardSimple.svg" alt="강사 관리 아이콘"> 강사 관리
            </button>
          </h2>
          <ul id="nav_cate_instructor" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/qc/admin/teachers/teacher_list.php">강사 목록</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/qc/admin/teachers/teacher_insert.php">강사 등록</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/qc/admin/teachers/teacher_overview.php">강사 총괄</a></li>
          </ul>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nav_cate_coupon" aria-expanded="false" aria-controls="nav_cate_coupon">
              <img src="http://<?= $_SERVER['HTTP_HOST']; ?>/qc/admin/img/icon-img/Ticket.svg" alt="쿠폰 관리 아이콘"> 쿠폰 관리
            </button>
          </h2>
          <ul id="nav_cate_coupon" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/qc/admin/coupon/couponlist.php">쿠폰 목록</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/qc/admin/coupon/coupon_regis.php">쿠폰 등록</a></li>
          </ul>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nav_cate_board" aria-expanded="false" aria-controls="nav_cate_board">
              <img src="http://<?= $_SERVER['HTTP_HOST']; ?>/qc/admin/img/icon-img/Article.svg" alt="게시판 관리 아이콘"> 게시판 관리
            </button>
          </h2>
          <ul id="nav_cate_board" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/qc/admin/board/notice_list.php">공지사항</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/qc/admin/board/qna_list.php">FAQ</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/qc/admin/board/qna_list.php">Q&A</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/qc/admin/board/free_board.php">자유게시판</a></li>
          </ul>
        </div>
      </div>
    </div>

    <?php
      if(!isset($_SESSION['AUID'])){
    ?>
    <div class="admin_account d-flex gap-3 align-items-center">
      <p class="tt_02">로그인 이전입니다.</p>
      <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/qc/admin/login.php">로그인</a>
    </div>

    <?php
      } else{
    ?>
    <div class="admin_account d-flex gap-3 align-items-center">
      <p class="tt_02"><?= $_SESSION['AUID'] ?>의 페이지입니다.</p>
      <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/qc/admin/logout.php">로그아웃</a>
    </div>
    <?php
      } 
    ?>
  </nav>
  

  <div class="nav_header">
    <h2 class="main_tt"> <?= $title ?></h2>
  </div>

  <div class="page_wapper">
    <div class="content">