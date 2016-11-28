<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>微管家</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/bootstrap.css" />

    <!-- 可选的Bootstrap主题文件（一般不用引入）
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">-->
    <link rel="stylesheet" href="/Public/Home/css/index.css">
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/about_us.css" />
    </head>
    <body>
        <!--navbar-->
        <div class="row clearfix">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 column">
                <div class="logo"></div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2 column">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-8 column">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="/Home">首页</a>
                        </li>
                        <li>
                            <a href="/Home/ProjectManager/centerPage">项目中心</a>
                        </li>
                        <li>
                            <a href="#">产品中心</a>
                        </li>
                        <li>
                            <a href="/Home/Index/aboutUs">关于我们</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if(!empty($nickname)): ?><li>
                                <a href="/Home/UserManager/info"><span class="glyphicon glyphicon-user"></span><span id="navbar_nickname"><?php echo ($nickname); ?></span></a>
                            </li>
                            <li>
                                <a href="/Home/UserManager/userExit">退出</a>
                            </li>
                            <?php else: ?>
                            <li>
                                <a href="/Home/UserManager/loginPage">登录</a>
                            </li>
                            <li>
                                <a href="/Home/UserManager/registerPage">注册</a>
                            </li><?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
        <!--content-->
        <div class="container">
            <div class="row clearfix">
                <div class="col-sm-12 col-md-12 col-lg-12 column">
                    <div class="jumbotron">
                        <h1>
                            Hello, world!
                        </h1>
                        <p>
                            This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.
                        </p>
                        <p>
                             <a class="btn btn-primary btn-large" href="#">Learn more</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-sm-12 col-md-12 col-lg-12 column bottom_content">
                    <div class="tabbable" id="tabs-429858">
                        <ul class="nav nav-tabs">
                            <li>
                                 <a href="#panel-about-us" data-toggle="tab">关于我们</a>
                            </li>
                            <li class="active">
                                 <a href="#panel-growth-history" data-toggle="tab">成长历史</a>
                            </li>
                            <li>
                                 <a href="#panel-business-cooperation" data-toggle="tab">商务合作</a>
                            </li>
                            <li>
                                 <a href="#panel-join-us" data-toggle="tab">加入我们</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="panel-about-us">
                                <p>
                                    I'm in Section 1.
                                </p>
                            </div>
                            <div class="tab-pane active" id="panel-growth-history">
                                <p>
                                    Howdy, I'm in Section 2.
                                </p>
                            </div>
                            <div class="tab-pane" id="panel-business-cooperation">
                                <p>
                                    Howdy, I'm in Section 3.
                                </p>
                            </div>
                            <div class="tab-pane" id="panel-join-us">
                                <p>
                                    Howdy, I'm in Section 4.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer-->
        <div class="row clearfix footer">
    <div class="col-sm-12 col-md-12 col-lg-12 column">
        <p class="text-center">
            Copyright © 2011-2016 www.weiguanjia.com. All Rights Reserved software college of Hebei Normal University
        </p>
        <p class="text-center">冀 ICP 备 2016110.3485A</p>
    </div>
</div>
    </body>
<!-- jQuery文件。务必在bootstrap.min.js 之前引入-->
<script type="text/javascript" src="/Public/Home/js/jquery3.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件-->
<script type="text/javascript" src="/Public/Home/js/bootstrap.js"></script>
</html>