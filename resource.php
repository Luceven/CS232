<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: index.html");
}
else {

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>大咖文书</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Top Navigation Bar-->
        <nav class="navbar navbar-inverse navbar-static-top" id="topbar" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">大咖文书</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="contactus.html">联系我们</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" id="loginDrop">注册与登录<i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-menu dropdown-login" >
                        <li><a id="beforeLogin" data-toggle="modal" data-target="#login-modal">Sign in/up</a></li>
                        <li><a id="afterLogin" style="display: none">Sign out</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
        </nav>

        <!-- 公司logo -->
        <div class="container">
            <div class="jumbotron">
                <h1>Logo Here</h1>
                <p>Some discriptions here</p>
            </div>
        </div>
        <!-- /.公司logo -->

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="aboutus.html">关于我们 <span class="sr-only">(current)</span></a></li>
                        <li><a href="application.html">留学申请</a></li>
                        <li><a href="course.html">诊断辅导</a></li>
                        <li class="active"><a href="resource.php">资源下载</a></li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="关键词搜索">
                    </div>
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                    </form>
                </div>
            <!-- /.navbar-collapse -->
            </div>
        <!-- /.container-fluid -->
        </nav>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">资源下载</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            为何要选择ACT考试？
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <pre><a href="http://pan.baidu.com/s/1mhDTEac">10个让你继续坚定不移选择ACT考试的理由！</a></pre><br/>
                            今年SAT考试进行了大幅改革后，由于所有的美国大学均同等接受ACT或SAT成绩，更多的学生转向ACT考试。据统计数据显示，59.2%的学生选择参加ACT考试，而只有47.7%的学生选择了SAT考试。<br/>
                            提取码：athi

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ACT考前必读
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <pre><a href="http://pan.baidu.com/s/1jHGF7Yu">考场12条黄金细则+3大时间管理办法！</a></pre><br/>
                            提取码：jkic
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ACT官方指南
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <pre><a href="http://pan.baidu.com/s/1jIHBHNS">美国高考ACT_2012-2013官方指南</a></pre><br/>
                            提取码：7jm2
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ACT准备工作
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <pre><a href="http://pan.baidu.com/s/1eSjnZNG">准备考ACT</a></pre><br/>
                          提取码：kfpy
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            阅读姿势
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <pre><a href="http://pan.baidu.com/s/1bpc84Lx">如何每分钟阅读8500字</a></pre><br/>
                          提取码：tfrt
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ACT历年真题
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <pre><a href="http://pan.baidu.com/s/1jI0aOho">ACT历年真题打包</a></pre><br/>
                          提取码：xgfb
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Princeton ACT Practice Questions
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <pre><a href="http://pan.baidu.com/s/1kUWS5vT">Princeton 1296 ACT Practice Questions</a></pre><br/>
                          提取码：wuf2
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ACT与SAT考试特点
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <pre><a href="http://pan.baidu.com/s/1nuOGVHn">2016年ACT与新SAT考试特点</a></pre><br/>
                          提取码：zpqb
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            SAT写作素材
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <pre><a href="http://pan.baidu.com/s/1kUUQDUn">SAT写作素材常见题目之创新类</a></pre><br/>
                          提取码：as63
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            阅读书单
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <pre><a href="http://pan.baidu.com/s/1qYj95YO">阅读终极书单</a></pre><br/>
                          提取码：vkdu
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            背单词
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <pre><a href="http://pan.baidu.com/s/1jIs9p7w">背单词的正确姿势</a></pre><br/>
                          提取码：4qwt
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            阅读姿势
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <pre><a href="http://pan.baidu.com/s/1bpc84Lx">如何每分钟阅读8500字</a></pre><br/>
                          提取码：tfrt
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-3 -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 2.1.4 -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/daka.js"></script>

</body>

</html>
<?php
}

?>