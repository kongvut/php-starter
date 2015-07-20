<?php
$id=$_GET['id'];

//change action
if($id){
  include_once "db_connect.php";
  //+ read
  $sql ="UPDATE tbl_content SET total_read=total_read+1 WHERE id = '$id';";
  $res = $mysqli->query($sql);

  //ดึงข้อมูล
  $sql ="SELECT * FROM tbl_content WHERE id = '$id';";
  $res = $mysqli->query($sql);
  $dbarr = $res->fetch_assoc();
  if(!$res->num_rows){
    echo 'ไม่พบข้อมูล';
    exit;
  }

}
?>
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
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1><?php echo $dbarr['title']; ?></h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#"><?php echo $dbarr['createby']; ?></a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> เขียนไว้วันที่ <?php echo $dbarr['createtime']; ?></p>

                <hr>

                <!-- Post Content -->
                <p><?php echo $dbarr['content']; ?></p>
                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
                <!-- Comment -->

            </div>
            <!-- Blog Sidebar Widgets Column -->
            
            <div class="col-md-4">

  
                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>กิจกรรม</h4>
                    <div class="row">
                        <div class="col-lg-12">
                           <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                              <li role="presentation" class="active"><a href="#listpost" aria-controls="listpost" role="tab" data-toggle="tab">โพสต์ล่าสุด</a></li>
                              <li role="presentation"><a href="#toppost" aria-controls="toppost" role="tab" data-toggle="tab">อ่านมากที่สุด</a></li>
                            </ul>
                          
                            <!-- Tab panes -->
                            <div class="tab-content">
                              <div role="tabpanel" class="tab-pane active" id="listpost">
                                <ul class="list-unstyled">
                                    <?php
                                    $i=1;
                                    $sql = "SELECT * FROM tbl_content ORDER BY id DESC LIMIT 0,10;";
                                    $res = $mysqli->query($sql);
                                    while($dbarr = $res->fetch_assoc()) {
                                    ?>
                                    <li><a href="#"><?php echo $i.'. '.$dbarr['title']; $i++; ?></a></li>
                                    <?php } ?>
                                </ul>
                              </div>
                              <div role="tabpanel" class="tab-pane" id="toppost">
                                <ul class="list-unstyled">
                                    <?php
                                    $i=1;
                                    $sql = "SELECT * FROM tbl_content ORDER BY total_read DESC LIMIT 0,10;";
                                    $res = $mysqli->query($sql);
                                    while($dbarr = $res->fetch_assoc()) {
                                    ?>
                                    <li><a href="#"><?php echo $i.'. '.$dbarr['title']; $i++; ?> (<?php echo $dbarr['total_read']; ?>)</a></li>
                                    <?php } ?>
                                </ul>
                              </div>
                            </div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>ความคิดเห็นล่าสุด</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">1. Lorem ipsum dolor sit amet, consectetur adipisicing...</a>
                        </li>
                        <li><a href="#">2. Lorem ipsum dolor sit amet, consectetur adipisicing...</a>
                        </li>
                        <li><a href="#">3. Lorem ipsum dolor sit amet, consectetur adipisicing...</a>
                        </li>
                        <li><a href="#">4. Lorem ipsum dolor sit amet, consectetur adipisicing...</a>
                        </li>
                    </ul>
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
