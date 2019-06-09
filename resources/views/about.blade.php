<!DOCTYPE html>
<html lang="zh">

@include('layouts.header')

<body class="page-body boxed-container">
    <nav class="navbar horizontal-menu navbar-fixed-top">
        <div class="navbar-inner">
            <div class="navbar-brand">
                <a href="/" class="logo">
                    <img src="{{ asset('img/mybsatoshibl.png') }}" width="80%" alt="" class="hidden-xs">
                    <img src="{{ asset('img/mybsatoshi.png') }}" width="100%" alt="" class="visible-xs">
                </a>
            </div>
            <div class="navbar-mobile-clear"></div>
            {{--<a href="https://github.com/hui-ho/WebStack-Laravel" target="_blank"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>--}}
        </div>
    </nav>
    <div class="page-container">
        <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
        <div class="main-content" style="">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <!-- 关于项目 -->
                        <h4 class="text-gray">关于币聪</h4>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <blockquote>
                                        <p>币聪区块链：全球首款DAC媒体平台，使用人工智能、大数据、BSole系统、区块链技术等机制打造泛娱乐时代下的UGC、PGC内容，让内容TOKEN化、经济化。</p>
                                        </br>
                                    </blockquote>
                                </div>
                            </div>
                            <!-- 关于作者 -->
                            <h4 class="text-gray">关于作者</h4>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://www.idiot6.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="https://www.idiot6.com/">
                                        <div class="xe-comment-entry">
                                            <a class="xe-user-img">
                                                <img src="https://avatars1.githubusercontent.com/u/11025090?s=460&v=4" class="img-circle" width="40">
                                            </a>
                                            <div class="xe-comment">
                                                <a href="#" class="xe-user-name overflowClip_1">
                                                    <strong>詹强威.</strong>
                                                </a>
                                                <p class="overflowClip_2"> chuhemiao@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <br />
                                            <blockquote>
                                                <p>
                                                    这是一个开源区块链导航，而且是<a href="https://github.com/chuhemiao/WebStack-Laravel"> 开源 </a>的。你也可以拿来制作自己的区块链网址导航。如果你有更好的区块链技术或平台推荐，可以通过issue或邮件与我联系，一起维护一个开源去中心化社区，欢迎与我交流分享更多区块链技术。
                                                </p>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Footer -->
            <footer class="main-footer sticky footer-type-1 fixed">
                <div class="footer-inner">
                    <div class="footer-text">
                        &copy; 2019
                        <a href="/"><strong>Bsatoshi</strong></a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="/"><strong>首页</strong></a>

                    </div>
                    <div class="go-up">
                        <a href="#" rel="go-top">
                            <i class="fa-angle-up"></i>
                        </a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>