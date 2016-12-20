<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>农牧大家评-首页</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/Public/css/amazeui.min.css">
    <link rel="stylesheet" href="/Public/css/petshow.css?6">
    <link rel="stylesheet" href="/Public/css/animate.min.css">
    <script src="/Public/js/jquery.min.js"></script>
    <script src="/Public/js/amazeui.min.js"></script>
    <script src="/Public/js/countUp.min.js"></script>
    <script src="/Public/js/amazeui.lazyload.min.js"></script>
    <script src="/Public/js/dianzan.js"></script>
</head>
<body>
<header class="am-topbar am-topbar-fixed-top am-topbar-inverse">
    <div class="amz-container">
        <h1 class="am-topbar-brand">
            <a href="#" class="am-topbar-logo">
                <img src="/Public/img/logo.png?1" alt="">
            </a>
        </h1>
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
                data-am-collapse="{target: '#doc-topbar-collapse-5'}">
            <span class="am-sr-only">
                导航切换
            </span>
            <span class="am-icon-bars">
            </span>
        </button>
		
        <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse-5">
            <ul class="am-nav am-nav-pills am-topbar-nav">
                <li class="am-active">
                    <a href="#">
                        首页
                    </a>
                </li>
                 <li >
                    <a href="#">
                        农牧趣闻
                    </a>
                </li>
                <li>
                    <a href="#">
                        农牧服务
                    </a>
                </li>
                <li>
                    <a href="#">
                        农牧专题
                    </a>
                </li>
				<li>
                    <a href="#">
                        关于我们
                    </a>
                </li>
				
            </ul>
			<div class="am-topbar-right">
                <a href="<?php echo U('User/register');?>" title=""><button class="am-btn am-btn-danger am-topbar-btn am-btn-sm"><span class="am-icon-pencil"></span>注册</button></a>
            </div>

            <div class="am-topbar-right">
                <a href="<?php echo U('User/login');?>" title=""><button class="am-btn am-btn-danger am-topbar-btn am-btn-sm"><span class="am-icon-user"></span>登录</button></a>
            </div>
            
        </div>
    </div>
</header>
<div class="get">
    <div class="am-g">
        <div class="am-u-lg-12">
            <div class="get-title">
                <div class="get_font_left"><span style="font-size:18px">已经有</span></div>
                <div class="get_font_center" id="banner_num"></div>
                <div class="get_font_rigth"><span style="font-size:18px">位农牧人</span></div>
            </div>

            <div style="font-size:26px;filter:alpha(opacity=50); -moz-opacity:0.9; -khtml-opacity: 0.9; opacity: 0.9; " class="font_line">
			<span style="font-size:18px">农牧人自己的故事,农牧大家评</span>
			</div>
            <p>
                <a href="###" class="am-btn am-btn-sm get-btn  am-radius banner_ios am-icon-apple"> App store</a> <a
                    href="###" class="am-btn am-btn-sm  am-radius get-btn banner_android am-icon-android"> Android</a>
            </p>
        </div>
    </div>
</div>


<div class="am-g am-imglist">
    <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2
  am-avg-md-3 am-avg-lg-6 am-gallery-default">
  <?php $n = -1; ?>
    <?php if(is_array($data)): foreach($data as $key=>$v): $n += 1; ?>
        <li>
            <div class="am-gallery-item am_list_block">
                <a href="###" class="am_img_bg">
                    <img class="am_img animated" src="/Public/img/loading.gif"
                         data-original="http://img.petshow.cc/pet_show/2015_08/6d3c22171da582f569702bad45d9a4c6.jpg"
                         alt="远方 有一个地方 那里种有我们的梦想"/>
                </a>

                <div class="am_listimg_info"><a href="javascript:void(0);" title="点我点我" onclick="finger(<?php echo ($v['uid']); ?>);"><span class="am-icon-heart" id="finger<?php echo ($v['uid']); ?>" ><?php echo ($zan[$n]); ?></span></a>
                <span class="am-icon-comments"> 67</span><span class="am_imglist_time">15分钟前</span></div>
            </div>
            <a class="am_imglist_user"><span class="am_imglist_user_ico"><img src="/Public/img/tx.jpg" alt=""></span><span
            class="am_imglist_user_font">路见不平Eason吼</span></a>
        </li><?php endforeach; endif; ?>
    </ul>
</div>
<footer class="am_footer">
    <div class="am_footer_con">
        <div class="am_footer_link">
            <span>关于农牧大家评</span>
            <ul>
                <li><a href="###">关于我们</a></li>
                <li><a href="###">发展历程</a></li>
                <li><a href="###">友情链接</a></li>
            </ul>
        </div>


        <div class="am_footer_don">
            <span>农牧大家评</span>
            <dl>
                <dt><img src="/Public/img/footdon.png?1" alt=""></dt>
                <dd>一起来分享我们的农牧人故事,农牧大家评。
                    <a href="###" class="footdon_pg ">
                        <div class="foot_d_pg am-icon-apple "> App store</div>
                    </a><a href="###" class="footdon_az animated">
                        <div class="foot_d_az am-icon-android "> Android</div>
                    </a></dd>

            </dl>
        </div>

        <div class="am_footer_erweima">
            <div class="am_footer_weixin"><img src="/Public/img/wx.jpg" alt="">

                <div class="am_footer_d_gzwx am-icon-weixin"> 关注微信</div>
            </div>
            <div class="am_footer_ddon"><img src="/Public/img/wx.jpg" alt="">

                <div class="am_footer_d_dxz am-icon-cloud-download"> 扫码下载</div>
            </div>

        </div>

    </div>
    <div class="am_info_line">Copyright(c)2016 <span>nongmushow</span> All Rights Reserved</div>
</footer>
<script src="/Public/js/petshow.js"></script>
</body>
</html>