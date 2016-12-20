<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>农牧大家评-高级用户中心</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/Public/css/amazeui.min.css">
    <link rel="stylesheet" href="/Public/css/petshow.css?6">
	<link rel="stylesheet" href="/Public/css/animate.min.css">
	<link href="http://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="/Public/js/jquery.min.js"></script>
    <script src="/Public/js/amazeui.min.js"></script>
    <script src="/Public/js/gcenter.js"></script>
    <script src="/Public/js/amazeui.lazyload.min.js"></script>
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
                    <a href="/">
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
                <button class="am-btn am-btn-danger am-topbar-btn am-btn-sm"><span class="am-icon-pencil"></span>注册</button>
            </div>

            <div class="am-topbar-right">
                <button class="am-btn am-btn-danger am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 登录</button>
            </div>
        </div>
    </div>
</header>

  <div style="margin-top:5px;width:70%;margin-right:15%;margin-left:15%;"  data-am-widget="intro"
       class="am-intro am-cf am-intro-default">
		<h3><i class="am-icon-user-plus"></i>高级用户中心</h3>
		<img id="imgoo" src="/Public/img/a2.jpg" style="width:100px;height:100px;" alt="头像" class="am-img-thumbnail am-circle">
		
		<span id="jiushi6" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 400, height: 225}">
 <i  class="am-icon-wrench"></i>修改头像
</span>
		
		<span style="margin-left:5%;">
					  <span><i class="am-icon-user"></i><span>逗比王</span></span>&nbsp;
					  <span><i class="am-icon-thumbs-o-up"></i><span>10人喜欢</span></span>&nbsp;
					  <span><i class="am-icon-comments"></i><span>6 条评论</span></span>&nbsp;
					  <span><i class="am-icon-book"></i><span>19篇文章</span></span>&nbsp;
					  <span><i class="am-icon-image"></i><span>20张图片 </span></span>&nbsp;
					  <span><i class="am-icon-file-movie-o"></i><span>0个视频</span></span>&nbsp;
					  <span><i class="am-icon-eye"></i><span>126 次查看</span></span>&nbsp;
					 <span><i class="am-icon-clock-o"></i><span>注册时间:2015.08.12</span></span>
		</span>	

		

  </div>
  
 
	
	
  </div>
</div>

<div style="width:70%;margin-left:15%;margin-left:15%;margin-bottom:100px;" data-am-widget="tabs"
       class="am-tabs am-tabs-default"
        >
      <ul class="am-tabs-nav am-cf">
          <li class="am-active"><a href="[data-tab-panel-0]" onclick=getme();><i class="am-icon-user"></i>自我介绍</a></li>
		  <li class=""><a href="[data-tab-panel-1]" onclick=getarticle();><i class="am-icon-file"></i>文章</a></li>
          <li class=""><a href="[data-tab-panel-2]" onclick=getpic();><i class="am-icon-picture-o"></i>图片</a></li>
		  <li class=""><a href="[data-tab-panel-3]" onclick=getinfo();><i class="am-icon-picture-o"></i>用户信息</a></li>
      </ul>

      <div class="am-tabs-bd">
          <div data-tab-panel-0 class="am-tab-panel am-active">
            <p style="font-size:20px;margin-top:15px;">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($data['self']); ?>&nbsp;&nbsp;
			
<span
  
  data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 400, height: 225}">
  <i id="jianshao" class="am-icon-edit"></i>
</span>
			
			</p>
			
			
			
			
          </div>
		  
		  
          <div data-tab-panel-1 class="am-tab-panel ">
		   
		   <a href=""><button style="margin-top:10px;" type="button" class="am-btn am-btn-default"><i class="am-icon-plus"></i>新增文章</button></a>



								
								
								<div class="am-scrollable-horizontal">
								  <table style="margin-top:20px;" class="am-table am-table-bordered am-table-striped am-text-nowrap">
									 <tr>
									  <th><i class="am-icon-tag"></i>序号</th> 
										<th><i class="am-icon-tag"></i>文章title</th> 
										<th><i class="am-icon-book"></i>内容详细</th> 
										<th><i class="am-icon-clock-o"></i>发布时间</th>
										<th><i class="am-icon-pencil"></i>编辑</th>
										<th><i class="am-icon-close"></i>删除</th>
									</tr>
									<?php if(is_array($article)): foreach($article as $key=>$art): ?><tr>
										<td><?php echo ($art['id']); ?></td>
										<td><?php echo ($art['title']); ?></td> 
										<td>{substr($art['content'],0,30).'......'}</td> 
										<td>{date('Y-m-d H:i:s',$art['pubtime'])}</td>
										<td><a href="" title="">编辑</a></td>
										<td><a href="" title="">删除</a></td>
									</tr><?php endforeach; endif; ?>
								  </table>
								  <?php echo ($page); ?>
								</div>
		  </div>
          <div data-tab-panel-2 class="am-tab-panel ">
		   <a href="www.baidu.com"><button style="margin-top:10px;" type="button" class="am-btn am-btn-default"><i class="am-icon-plus"></i>新增图片</button></a>
										<ul id='imgadd8' data-am-widget="gallery" class="am-gallery am-avg-sm-2
							  am-avg-md-3 am-avg-lg-4 am-gallery-default" data-am-gallery="{ pureview: true }" >

                <?php if(is_array($pic)): foreach($pic as $key=>$pic): ?><li>
									<div class="am-gallery-item">
										<a href="http://s.amazeui.org/media/i/demos/bing-1.jpg" class="">
										  <img src="http://s.amazeui.org/media/i/demos/bing-1.jpg"  alt="远方 有一个地方 那里种有我们的梦想"/>
											<h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
											<div class="am-gallery-desc">2375-09-26</div>
										</a>
										<a href="">删除</a>
									</div>
								  </li><?php endforeach; endif; ?>                
                
							  </ul>
							  <!---如果刷新的话这个会显示正在刷新中<i class="am-icon-spinner am-icon-spin"></i>---->
							  <!-- <span>
                                <?php if($picsum > 8): ?><iclass="am-icon-refresh"></i>滑动获取更多图片
                                  <?php else: ?>
                                  <iclass="am-icon-refresh"></i>已无更多图片
                                  <i class="am-icon-spinner am-icon-spin"></i>图片正在获取中......<?php endif; ?>
                                </span> -->

							  
							  
		  </div>
		  <div data-tab-panel-3 class="am-tab-panel ">
		   
		   
		   
		   
	       
		<ul class="am-list-static">
		
		  <li><i class="am-icon-newspaper-o"></i>用户名称:<?php echo ($userinfo['username']); ?>  &nbsp;&nbsp;
		  <span data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 400, height: 225}">
  <i id="jiushi1" class="am-icon-edit"></i>
</span>
		  
		  
		  
		  <li><i class="am-icon-user"></i>真实姓名:刘能</li>
		  <li><i class="am-icon-mobile"></i>手机号码:<?php echo ($userinfo['mobile']); ?>  &nbsp;&nbsp; <span data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 400, height: 225}">
  <i id="jiushi2" class="am-icon-edit"></i>
</span></li>
		  <li><i class="am-icon-envelope-o"></i>邮箱:<?php echo ($userinfo['email']); ?>  &nbsp;&nbsp; <span data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 400, height: 225}">
  <i id="jiushi3" class="am-icon-edit"></i>
</span></li>
		  <li><i class="am-icon-location-arrow"></i>居住地:<?php echo ($data['address']); ?>  &nbsp;&nbsp; <span data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 400, height: 225}">
  <i id="jiushi4" class="am-icon-edit"></i>
</span></li>
<li><i class="am-icon-lock"></i>密码:*******  &nbsp;&nbsp; <span data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 400, height: 225}">
  <i id="jiushi5" class="am-icon-edit"></i>
</span></li>
		</ul>		   
		
</div>
      </div>
	  
	  
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
  <div class="am-modal-dialog">
    <div  class="am-modal-hd">
      <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
    </div>
    <div id="xianshi" class="am-modal-bd">
      留空
    </div>
  </div>
</div>



<form style="display:none" id="biaodan1" action="http://www.baidu.com" method="post">
<div  style="font-size:16px;margin-bottom:8px;">自我介绍修改</div>
<span >(不要超过20个字)</span>
<input type="text" name="jieshao" value="">
<input type="submit" value="提交" value="提交">
</form>



<form style="display:none" id="biaodan2" action="http://www.baidu.com" method="post">
<div style="font-size:16px;margin-bottom:8px;">用户名称修改</div>
<span >(请输入正确的用户名称)</span>
<input  type="text" name="jieshao" value="">
<input type="submit" value="提交" value="提交">
</form>



<form style="display:none" id="biaodan3" action="http://www.baidu.com" method="post">
<div  style="font-size:16px;margin-bottom:8px;">手机号码修改</div>
<span>(请输入正确的手机号码)</span>
<input  type="text" name="jieshao" value="">
<input type="submit" value="提交" value="提交">
</form>



<form style="display:none" id="biaodan4" action="http://www.baidu.com" method="post">
<div  style="font-size:16px;margin-bottom:8px;">邮箱修改</div>
<span >(请输入正确的邮箱)</span>
<input type="text" name="jieshao" value="">
<input type="submit" value="提交" value="提交">
</form>



<form style="display:none" id="biaodan5" action="http://www.baidu.com" method="post">
<div  style="font-size:16px;margin-bottom:8px;">居住地修改</div>
<span>(请输入正确的居住地)</span>
<input  type="text" name="jieshao" value="">
<input type="submit" value="提交" value="提交">
</form>

<form style="display:none" id="biaodan6" action="http://www.baidu.com" method="post">
<div  style="font-size:16px;margin-bottom:8px;">密码修改</div>
新&nbsp&nbsp;密&nbsp&nbsp;码:<input style="margin-bottom:10px"  type="text" name="password" value=""><br/>
确认密码:<input style="margin-bottom:10px"  type="text" name="repassword" value=""><br/>
<input type="submit" value="提交" value="提交">
</form>

<form  style="display:none" id="biaodan7" action="http://www.baidu.com" method="post" enctype="multipart/form-data" >
	<div  style="font-size:16px;margin-bottom:8px;">头像修改</div>
	<p><input type="file" name="pic"></p>	
	<p><input type="submit" value="提交"></p>
	</form>
 

 <script>
 $('#jianshao').click(function(){
		var html=$('#biaodan1').html();
		$('#xianshi').html(html);
 });
 
 
  $('#jiushi1').click(function(){
  var html=$('#biaodan2').html();
		$('#xianshi').html(html);
 });
 
 
 
  $('#jiushi2').click(function(){
  var html=$('#biaodan3').html();
		$('#xianshi').html(html);
 });
 
 
  $('#jiushi3').click(function(){
		var html=$('#biaodan4').html();
		$('#xianshi').html(html);
 });
 
   $('#jiushi4').click(function(){
		var html=$('#biaodan5').html();
		$('#xianshi').html(html);
 });
 
  $('#jiushi5').click(function(){
		var html=$('#biaodan6').html();
		$('#xianshi').html(html);
 });
 
 $('#jiushi6').click(function(){
		var html=$('#biaodan7').html();
		$('#xianshi').html(html);
 });
 
 </script>




	  
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
<script src="/Public/js/petshow.js"></script>
</body>
</html>