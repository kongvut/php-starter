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
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="view.php">Blog Post Title</a>
                </h2>
                <p class="lead">
                    by <a href="#">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> เขียนไว้วันที่ August 28, 2013 at 10:00 PM</p>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Second Blog Post -->
                <h2>
                    <a href="view.php">Blog Post Title</a>
                </h2>
                <p class="lead">
                    by <a href="#">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> เขียนไว้วันที่ August 28, 2013 at 10:45 PM</p>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora ipsam distinctio minima dolorum perferendis labore impedit voluptates!</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

              
                <hr>

                <!-- Pager -->
                <ul class="pager">
                    <!--<li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>-->
                    <li class="next">
                        <a href="#">More &rarr;</a>
                    </li>
                </ul>

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
                                    <li><a href="#">1. Lorem ipsum dolor sit amet, consectetur adipisicing...</a>
                                    </li>
                                    <li><a href="#">2. Lorem ipsum dolor sit amet, consectetur adipisicing...</a>
                                    </li>
                                    <li><a href="#">3. Lorem ipsum dolor sit amet, consectetur adipisicing...</a>
                                    </li>
                                    <li><a href="#">4. Lorem ipsum dolor sit amet, consectetur adipisicing...</a>
                                    </li>
                                    <li><a href="#">5. Lorem ipsum dolor sit amet, consectetur adipisicing...</a>
                                    </li>
                                    <li><a href="#">6. Lorem ipsum dolor sit amet, consectetur adipisicing...</a>
                                    </li>
                                    <li><a href="#">7. Lorem ipsum dolor sit amet, consectetur adipisicing...</a>
                                    </li>
                                    <li><a href="#">8. Lorem ipsum dolor sit amet, consectetur adipisicing...</a>
                                    </li>
                                </ul>
                              </div>
                              <div role="tabpanel" class="tab-pane" id="toppost">
                                <ul class="list-unstyled">
                                    <li><a href="#">1. Lorem ipsum dolor sit amet, consectetur adipisicing...</a>
                                    </li>
                                    <li><a href="#">2. Lorem ipsum dolor sit amet, consectetur adipisicing...</a>
                                    </li>
                                    <li><a href="#">3. Lorem ipsum dolor sit amet, consectetur adipisicing...</a>
                                    </li>
                                    <li><a href="#">4. Lorem ipsum dolor sit amet, consectetur adipisicing...</a>
                                    </li>
                                    <li><a href="#">5. Lorem ipsum dolor sit amet, consectetur adipisicing...</a>
                                    </li>
                                    <li><a href="#">6. Lorem ipsum dolor sit amet, consectetur adipisicing...</a>
                                    </li>
                                    <li><a href="#">7. Lorem ipsum dolor sit amet, consectetur adipisicing...</a>
                                    </li>
                                    <li><a href="#">8. Lorem ipsum dolor sit amet, consectetur adipisicing...</a>
                                    </li>
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
