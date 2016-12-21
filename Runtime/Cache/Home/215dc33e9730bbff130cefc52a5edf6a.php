<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>农牧大家评-农牧人领地</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/Public/css/amazeui.min.css">
    <link rel="stylesheet" href="/Public/css/petshow.css?6">
	<link rel="stylesheet" href="/Public/css/animate.min.css">
	<link href="http://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="/Public/js/jquery.min.js"></script>
    <script src="/Public/js/amazeui.min.js"></script>
    <script src="/Public/js/amazeui.lazyload.min.js"></script>
	
<link href="http://cdn.ycku.com/wp-content/themes/prowerV5/style.css" rel="stylesheet">


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
                    <a href="Home/Index/index">
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
<?php if($_COOKIE['username']== null ): ?><div class="am-topbar-right">
                <a href="<?php echo U('Home/User/register');?>"><span class="am-btn am-btn-danger am-topbar-btn am-btn-sm"><span class="am-icon-pencil"></span>注册</span></a>
            </div>

            <div class="am-topbar-right">
                <a href="<?php echo U('Home/User/login');?>"><span class="am-btn am-btn-danger am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 登录</span></a>
            </div>
   
<?php else: ?>
            <div class="am-topbar-right">
                <span class="am-btn am-btn-danger am-topbar-btn am-btn-sm"><a href="<?php echo U('Home/User/logout');?>"><span class="am-icon-power-off"></span>退出</span></a>
            </div>

            <div class="am-topbar-right">
                <a href="<?php echo U('Home/User/pcenter');?>"><span class="am-btn am-btn-danger am-topbar-btn am-btn-sm"><span class="am-icon-user"></span>欢迎您,<span style="color:orange;font-size:15px;" id="cookieusername"><?php echo (cookie('username')); ?></span></span></span></a>
            </div><?php endif; ?>
        </div>
    </div>
</header>

<div style="margin-top:20px;width:70%;margin-left:15%;margin-right:15%;" data-am-widget="paragraph"
           class="am-paragraph am-paragraph-default"
           
           data-am-paragraph="{ tableScrollable: true, pureview: true}">
 <h3><i class="am-icon-user-plus"></i>农牧人<span style="color:red;"><?php echo ($guser['username']); ?></span>的领地</h3> 
<img  id="imgoo" src="/Public/img/a2.jpg" style="display:inline-block;width:80px;height:80px;" alt="头像" class="am-img-thumbnail am-circle"/>

<span style="font-size:18px;margin-left:1%">
<i class="am-icon-thumbs-o-up"></i><?php echo ($zan); ?>人赞</span>

<span style="font-size:18px;margin-left:1%">
<i class="am-icon-eye"></i>126次查看</span>

<span style="font-size:18px;margin-left:1%">
<i class="am-icon-comments"></i>136条评论 </span>

<span style="font-size:18px;margin-left:1%">
<i class="am-icon-book"></i><?php echo ($count); ?>篇文章</span>

<span style="font-size:18px;margin-left:1%">
<i class="am-icon-image"></i>39张图片</span>

<span style="font-size:18px;margin-left:1%">
<i class="am-icon-clock-o"></i>注册时间:<?php echo ($guser['regtime']); ?></span>
  
  








<div style="width:100%;margin-bottom:100px;" data-am-widget="tabs" class="am-tabs am-tabs-default" >
      <ul class="am-tabs-nav am-cf">
          <li class="am-active"><a href="[data-tab-panel-0]"><i class="am-icon-user"></i>自我介绍</a></li>
		  <li class=""><a href="[data-tab-panel-1]"><i class="am-icon-file"></i>文章</a></li>
          <li class=""><a href="[data-tab-panel-2]"><i class="am-icon-picture-o"></i>图片</a></li>
      </ul>
	  
      <div class="am-tabs-bd">
          <div data-tab-panel-0 class="am-tab-panel am-active">
            <p style="font-size:20px;margin-top:15px;">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="gself"><?php echo ($guser['self']); ?></span>&nbsp;&nbsp;
			</p>
      </div>
 
		  
       <div data-tab-panel-1 class="am-tab-panel ">
								<div class="am-scrollable-horizontal">
 <table style="text-align:center;margin-top:20px;" class="am-table am-table-bordered am-table-striped am-text-nowrap">
	 <tr>
	  <th style="text-align:center;"><i class="am-icon-tag"></i>序号</th> 
		<th style="text-align:center;"><i class="am-icon-tag"></i>文章title</th> 
		<th style="text-align:center;"><i class="am-icon-clock-o"></i>发布时间</th>
	</tr>
	<?php if(is_array($article)): foreach($article as $key=>$ax): ?><tr>
		<td><?php echo ($ax['shunxu']); ?></td>
		<td style="text-align:left;"><a href="<?php echo U('Home/Publish/articleShow',array('aid'=>$ax['id']));?>"><?php echo ($ax['title']); ?></a></td> 
		<td><?php echo ($ax['pubtime']); ?></td>
	</tr><?php endforeach; endif; ?>
  </table>
  <?php echo ($show); ?>
								</div>
		  </div>
          <div data-tab-panel-2 class="am-tab-panel ">
										<ul data-am-widget="gallery" class="am-gallery am-avg-sm-2
							  am-avg-md-3 am-avg-lg-4 am-gallery-default" data-am-gallery="{ pureview: true }" >
								  <li>
									<div class="am-gallery-item">
										<a href="http://s.amazeui.org/media/i/demos/bing-1.jpg" class="">
										  <img src="http://s.amazeui.org/media/i/demos/bing-1.jpg"  alt="远方 有一个地方 那里种有我们的梦想"/>
											<h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
											<div class="am-gallery-desc">2375-09-26</div>
										</a>
									</div>
								  </li>
								  <li>
									<div class="am-gallery-item">
										<a href="http://s.amazeui.org/media/i/demos/bing-2.jpg" class="">
										  <img src="http://s.amazeui.org/media/i/demos/bing-2.jpg"  alt="某天 也许会相遇 相遇在这个好地方"/>
											<h3 class="am-gallery-title">某天 也许会相遇 相遇在这个好地方</h3>
											<div class="am-gallery-desc">2375-09-26</div>
										</a>
									</div>
								  </li>
								  <li>
									<div class="am-gallery-item">
										<a href="http://s.amazeui.org/media/i/demos/bing-3.jpg" class="">
										  <img src="http://s.amazeui.org/media/i/demos/bing-3.jpg"  alt="不要太担心 只因为我相信"/>
											<h3 class="am-gallery-title">不要太担心 只因为我相信</h3>
											<div class="am-gallery-desc">2375-09-26</div>
										</a>
									</div>
								  </li>
								  <li>
									<div class="am-gallery-item">
										<a href="http://s.amazeui.org/media/i/demos/bing-4.jpg" class="">
										  <img src="http://s.amazeui.org/media/i/demos/bing-4.jpg"  alt="终会走过这条遥远的道路"/>
											<h3 class="am-gallery-title">终会走过这条遥远的道路</h3>
											<div class="am-gallery-desc">2375-09-26</div>
										</a>
									</div>
								  </li>
								   <li>
									<div class="am-gallery-item">
										<a href="http://s.amazeui.org/media/i/demos/bing-4.jpg" class="">
										  <img src="http://s.amazeui.org/media/i/demos/bing-4.jpg"  alt="终会走过这条遥远的道路"/>
											<h3 class="am-gallery-title">终会走过这条遥远的道路</h3>
											<div class="am-gallery-desc">2375-09-26</div>
										</a>
									</div>
								  </li>
								   <li>
									<div class="am-gallery-item">
										<a href="http://s.amazeui.org/media/i/demos/bing-4.jpg" class="">
										  <img src="http://s.amazeui.org/media/i/demos/bing-4.jpg"  alt="终会走过这条遥远的道路"/>
											<h3 class="am-gallery-title">终会走过这条遥远的道路</h3>
											<div class="am-gallery-desc">2375-09-26</div>
										</a>
									</div>
								  </li>
								   <li>
									<div class="am-gallery-item">
										<a href="http://s.amazeui.org/media/i/demos/bing-4.jpg" class="">
										  <img src="http://s.amazeui.org/media/i/demos/bing-4.jpg"  alt="终会走过这条遥远的道路"/>
											<h3 class="am-gallery-title">终会走过这条遥远的道路</h3>
											<div class="am-gallery-desc">2375-09-26</div>
										</a>
									</div>
								  </li>
								  <li>
									<div class="am-gallery-item">
										<a href="http://s.amazeui.org/media/i/demos/bing-4.jpg" class="">
										  <img src="http://s.amazeui.org/media/i/demos/bing-4.jpg"  alt="终会走过这条遥远的道路"/>
											<h3 class="am-gallery-title">终会走过这条遥远的道路</h3>
											<div class="am-gallery-desc">2375-09-26</div>
										</a>
									</div>
								  </li>
								  
							  </ul>
							  <!---如果刷新的话这个会显示正在刷新中<i class="am-icon-spinner am-icon-spin"></i>---->
							  <span><i  class="am-icon-refresh"></i>获取更多图片</span>
							  <i class="am-icon-spinner am-icon-spin"></i>图片正在获取中......
							  
		  </div>
		 
</div>
	  


<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="<?php echo ($guser['uid']); ?>" data-title="<?php echo ($guser['user']); ?>" data-url="Home/Guser/index/uid/<?php echo ($guser['uid']); ?>"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"inongmu"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
</script>
<!-- 多说公共JS代码 end -->


<div  class="am_tuya_cai">
<div class="am_tuya_cai_ti">猜你喜欢</div>
<div class="am-g am-imglist">
    <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2
  am-avg-md-3 am-avg-lg-4 am-gallery-default" >
  <li>
    <div class="am-gallery-item am_list_block">
      <a href="###" class="am_img_bg">
        <img class="am_img animated" src="/Public/img/loading.gif"    data-original="http://img.petshow.cc/pet_show/2015_08/6d3c22171da582f569702bad45d9a4c6.jpg" alt="远方 有一个地方 那里种有我们的梦想"/>
              </a>

    </div>
    <a class="am_imglist_user"><span class="am_imglist_user_ico"><img src="/Public/img/tx.jpg" alt=""></span><span class="am_imglist_user_font">路见不平Eason吼</span></a>
  </li>
    <li>
    <div class="am-gallery-item am_list_block">
      <a href="###" class="am_img_bg">
        <img class="am_img animated" src="/Public/img/loading.gif"    data-original="http://img.petshow.cc/pet_show/2015_08/6d3c22171da582f569702bad45d9a4c6.jpg" alt="远方 有一个地方 那里种有我们的梦想"/>
              </a>

    </div>
    <a class="am_imglist_user"><span class="am_imglist_user_ico"><img src="/Public/img/tx.jpg" alt=""></span><span class="am_imglist_user_font">路见不平Eason吼</span></a>
  </li>
    <li>
    <div class="am-gallery-item am_list_block">
      <a href="###" class="am_img_bg">
        <img class="am_img animated" src="/Public/img/loading.gif"    data-original="http://img.petshow.cc/pet_show/2015_08/6d3c22171da582f569702bad45d9a4c6.jpg" alt="远方 有一个地方 那里种有我们的梦想"/>
              </a>

    </div>
    <a class="am_imglist_user"><span class="am_imglist_user_ico"><img src="/Public/img/tx.jpg" alt=""></span><span class="am_imglist_user_font">路见不平Eason吼</span></a>
  </li>
    <li>
    <div class="am-gallery-item am_list_block">
      <a href="###" class="am_img_bg">
        <img class="am_img animated" src="/Public/img/loading.gif"    data-original="http://img.petshow.cc/pet_show/2015_08/6d3c22171da582f569702bad45d9a4c6.jpg" alt="远方 有一个地方 那里种有我们的梦想"/>
              </a>

    </div>
    <a class="am_imglist_user"><span class="am_imglist_user_ico"><img src="/Public/img/tx.jpg" alt=""></span><span class="am_imglist_user_font">路见不平Eason吼</span></a>
  </li>
</ul>
<div class="am_tuya_ckgd"><i class="am-icon-spinner am-icon-spin"></i><a href=""> 查看更多</a></div>
</div>


</div>

</div>



<footer  class="am_footer">
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


</body>
</html>