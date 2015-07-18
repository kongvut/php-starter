<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php include "menu.php"; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item active"><span class="glyphicon glyphicon-flag"></span> เมนูหลัก</a>
                    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-facetime-video"></span> จัดการ Youtube</a>
                    <a href="?page=content_list" class="list-group-item"><span class="glyphicon glyphicon-list-alt"></span> จัดการบันทึก</a>
                    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-book"></span> จัดการหน้า</a>
                    
                    <a href="#" class="list-group-item active"><span class="glyphicon glyphicon-cog"></span> การตั้งค่า</a>
                    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-lock"></span> เปลี่นรหัสผ่าน</a>
                    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-remove-sign"></span> ออกจาระบบ</a>
                </div>
            </div>
            <!-- Blog Sidebar Widgets Column -->
            
            <div class="col-md-9">
                <div class="panel panel-primary">
                    <div class="panel-heading">ระบบจัดการ</div>
                    <div class="panel-body">
                      <?php include 'admin/'.$_GET['page'].".php"; ?>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
