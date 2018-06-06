<div class="layout">

    <!--===========layout-header================-->
    <div class="layout-header am-hide-sm-only" data-am-sticky>
        <!--topbar start-->
        <div class="topbar">
            <div class="container">
                <div class="am-g">
                    <div class="am-u-md-3">
                        <div class="topbar-left">
                            <i class="am-icon-globe"></i>
                            <div class="am-dropdown" data-am-dropdown>
                                <button class="am-btn am-btn-primary am-dropdown-toggle" data-am-dropdown-toggle>
                                    Language <span class="am-icon-caret-down"></span></button>
                                <ul class="am-dropdown-content">
                                    <li><a href="#">English</a></li>
                                    <li class="am-divider"></li>
                                    <li><a href="#">Chinese</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-md-9">
                        <div class="topbar-right am-text-right am-fr">

                            <a href="html/login.html">登录</a>
                            <a href="html/register.html">注册</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--topbar end-->
        <div class="header-box" style="box-shadow: 0 4px 8px 0 rgba(7,17,27,.1)">
            <!--header start-->
            <div class="container">
                <div class="header">
                    <div class="am-g">
                        <div class="am-u-lg-2 am-u-sm-12">
                            <div class="logo">
                                <a href=""><img src="{{asset('theme/web/images/logo.png')}}" alt=""/></a>
                            </div>
                        </div>
                        <div class="am-u-md-10">
                            <div class="header-right am-fr">

                                <!--nav start-->
                                <div class="nav-contain">
                                    <div class="nav-inner">
                                        <ul class="am-nav am-nav-pills am-nav-justify">
                                            <li class=""><a href="./index.html">首页</a></li>
                                            <li>
                                                <a href="#">产品中心</a>
                                                <!-- sub-menu start-->
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="html/product1.html">产品展示1</a></li>
                                                    <li class="menu-item"><a href="html/product2.html">产品展示2</a></li>
                                                    <li class="menu-item"><a href="html/product3.html">产品展示3</a></li>
                                                </ul>
                                                <!-- sub-menu end-->
                                            </li>
                                            <li><a href="html/example.html">客户案例</a></li>
                                            <li><a href="html/solution.html">解决方案</a></li>
                                            <li>
                                                <a href="html/news.html">新闻中心</a>
                                                <!-- sub-menu start-->
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="html/news-content.html">公司动态</a></li>
                                                    <li class="menu-item"><a href="html/404-dark.html">行业动态</a></li>
                                                    <li class="menu-item"><a href="html/404-light.html">精彩专题</a></li>
                                                </ul>
                                                <!-- sub-menu end-->
                                            </li>
                                            <li><a href="html/about.html">关于我们</a></li>
                                            <li><a href="html/join.html">加入我们</a></li>
                                            <li><a href="html/contact.html">联系我们</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--nav end-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header end-->


        </div>
    </div>

    <!--mobile header start-->
    <div class="m-header">
        <div class="am-g am-show-sm-only">
            <div class="am-u-sm-2">
                <div class="menu-bars">
                    <a href="#doc-oc-demo1" data-am-offcanvas="{effect: 'push'}"><i
                                class="am-menu-toggle-icon am-icon-bars"></i></a>
                    <!-- 侧边栏内容 -->
                    <nav data-am-widget="menu" class="am-menu  am-menu-offcanvas1" data-am-menu-offcanvas>
                        <a href="javascript: void(0)" class="am-menu-toggle"></a>

                        <div class="am-offcanvas">
                            <div class="am-offcanvas-bar">
                                <ul class="am-menu-nav am-avg-sm-1">
                                    <li><a href="./index.html" class="">首页</a></li>
                                    <li class="am-parent">
                                        <a href="#" class="">产品中心</a>
                                        <ul class="am-menu-sub am-collapse ">
                                            <li class="">
                                                <a href="html/product1.html" class="">产品展示1</a>
                                            </li>
                                            <li class="">
                                                <a href="html/product2.html" class="">产品展示2</a>
                                            </li>
                                            <li class="">
                                                <a href="html/product3.html" class="">产品展示3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="html/example.html" class="">客户案例</a></li>
                                    <li class=""><a href="html/solution.html" class="">解决方案</a></li>
                                    <li class="am-parent">
                                        <a href="html/news.html" class="">新闻中心</a>
                                        <ul class="am-menu-sub am-collapse  ">
                                            <li class="">
                                                <a href="html/news-content.html" class="">公司动态</a>
                                            </li>
                                            <li class="">
                                                <a href="html/404-dark.html" class="">行业动态</a>
                                            </li>
                                            <li class="">
                                                <a href="html/404-light.html" class="">精彩专题</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="html/about.html" class="">关于我们</a></li>
                                    <li class=""><a href="html/join.html" class="">加入我们</a></li>
                                    <li class=""><a href="html/contact.html" class="">联系我们</a></li>
                                    <li class="am-parent">
                                        <a href="" class="nav-icon nav-icon-globe">Language</a>
                                        <ul class="am-menu-sub am-collapse  ">
                                            <li>
                                                <a href="#">English</a>
                                            </li>
                                            <li class="">
                                                <a href="#">Chinese</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="html/login.html" class="">登录</a></li>
                                    <li class=""><a href="html/register.html" class="">注册</a></li>
                                </ul>

                            </div>
                        </div>
                    </nav>

                </div>
            </div>
            <div class="am-u-sm-5 am-u-end">
                <div class="m-logo">
                    <a href=""><img src="assets/images/logo.png" alt=""></a>
                </div>
            </div>
        </div>
        <!--mobile header end-->
    </div>

</div>