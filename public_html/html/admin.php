<!DOCTYPE html>
<html lang="zh_TW">
<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="description" content="輝夜kaguya生存伺服器 | Minecraft PE">
    <meta name="keywords" content="輝夜伺服器, 輝夜, kaguya, Minecraft PE伺服器, Minecraft 手機版伺服器">
    <meta name="author" content="冰川">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">

    <!-- info -->
    <title>輝夜生存伺服器</title>
    <link rel="icon" href="../assets/hub/icon.ico">
    <!-- MDB CSS -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css"
      rel="stylesheet"
    />
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- css -->
    <link href="../css/admin.css" rel="stylesheet">
    <link href="../css/global.css" rel="stylesheet">
    <!-- icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- bootstrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- import anvbar -->
    <import id="anvbar"></import>
    
    <main class="container-fluid px-0 text-white" id="app">
      <div class="my-5"></div>
      <?php
      if ($_POST) {
        if ($_POST["name"] == "admin878" && $_POST["password"] == "!@#$%^&*()") {
          include ("../../private_html/admin.html");
          // if ($_POST["keep_login"]) {
          //   echo '<script>cookieStore.set("keep_login",true)</script>';
          // }
        }
        else {
          echo "<script>alert('帳號或密碼錯誤'); window.location.href='login.html' </script>";
        }
      }
      else {
        echo "<script>alert('請先登入'); window.location.href='login.html' </script>";
      }
      
      ?>
    </main>
    <!-- import footer -->
    <import id="footer"></import>
</body>

<!-- vue.js -->
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

<!-- javascript -->
<script  type="text/javascript" src="../js/global.js"></script>
<script type="text/javascript" src="../js/admin.js"></script>

<!-- MDB javascript -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"
></script>

</html>