<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/qc/admin/inc/header.php');
?>

<!-- 추후 이쁘게 바꿔야함.-->

<div class="">
  <h1>로그인</h1>
  <div class="row">
    <div class="col-md-6">
      <h2>관리자 로그인!</h2>
      <form action="login_ok.php" method="POST">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="userid" name="userid" placeholder="administrator ID">
            <label for="userid">User ID</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="userpw" name="userpw" placeholder="Password">
            <label for="userpw">Password</label>
          </div>
          <button class="btn btn-primary mt-3">로그인</button>
        </form>
    </div>
    <div class="col-md-6">
      <h2>강사 로그인</h2>
      <form action="login_ok_teacher.php" method="POST">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="id" name="id" placeholder="teacher ID">
            <label for="id">teacher ID</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="password" name="password" placeholder="password">
            <label for="password">Password</label>
          </div>
          <button class="btn btn-primary mt-3">로그인</button>
        </form>
    </div>
  </div>
  
</div>

<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/qc/admin/inc/footer.php');
?>
