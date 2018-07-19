<?php if (!defined('THINK_PATH')) exit();?><!-- 继承的基类文件(首页完整的代码) -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="/MovieProject/Public/Home/Css/moviemouse_header.css">
		
	<link rel="stylesheet" type="text/css" href="/MovieProject/Public/Home/Css/movieSort.css">
	<link rel="stylesheet" type="text/css" href="/MovieProject/Public/Home/Css/hotshowinglist.css">

		<link rel="stylesheet" type="text/css" href="/MovieProject/Public/Home/Css/moviemouse_footer.css">
		<title>热映口碑榜</title>
	</head>
	<body>
		<!-- 头部 -->
		<div class="fhearder">
			<div class="fhwrap">
				<a></a>
				<div class="fhwleft01">
					<div class="fhwl011">
						<div>
							西安
						<span class="fhwl011_caret"></span>
						</div>
					</div>
				</div>
				<div class="fhwl_nav">
					<ul>
						<li><a href="<?php echo U('Index/index');?>">首页</a>
						<li><a href="<?php echo U('Movie/movie');?>">电影</a>
						<li><a href="<?php echo U('Cinema/cinema');?>">影院</a>
						<li><a href="<?php echo U('Rank/rank');?>">榜单</a>
						<li><a href="<?php echo U('Hot/hot');?>">热点</a>
					</ul>
				</div>
				<div class="fhwr_login">
					<div>
						<img src="/MovieProject/Public/Home/Images/fixation/FixationTop/login.png" alt="" />
						<span class="fhwl011_caret"></span>
						<ul>
							<li>
								<a href="">登录</a>
							</li>
						</ul>
					</div>
				</div>
				<form target="_blank" class="fhwr_sform">
					<input type="search" class="fhwrs_search" maxlength="32" placeholder="找影视剧、演唱会"/>
					<input type="submit" class="fhwrs_submit" value=""/>
				</form>
				<div class="fhwc_app">
					<a>
						<span class="fhwca_phone"></span>
						<span class="fhwca_load">APP下载</span>
						<span class="fhwl011_caret"></span>
						<div class="fhwca_down">
							<p class="fhwcad_code">扫码下载APP</p>
							<p class="fhwcad_seat">选座更优惠</p>
						</div>
					</a>
				</div>
			</div>
		</div>
		<!-- 模板继承 -->
		
	<div class="ms_placeholder" style="height: 81px;"></div>
	<div class="ms_snav">
		<ul class="mss_navbar">
			<li><a href="<?php echo U('Rank/hotshowinglist');?>">热映口碑榜</a></li>
			<li><a href="<?php echo U('Rank/TheMostAnticipatedList');?>">最受期待榜</a></li>
			<li><a href="<?php echo U('Rank/boxOfficePoint');?>">国内票房榜</a></li>
			<li><a href="<?php echo U('Rank/TheNorthAmericanBoxOffice');?>">北美票房榜</a></li>
			<li><a href="<?php echo U('Rank/topOneHundredPoint');?>">TOP100榜</a></li>
		</ul>
	</div>

		
<div id="hotshowing">
	<div id="hslist">
	    <p id="hsp1">2017-08-10<span id="hspspan">已更新</span></p><br>
	    <p id="hsp2">榜单规则：将昨日国内热映的影片，按照评分从高到低排列取前10名，每天上午10点更新。相关数据来源于“影乐专业版”及“影乐电影库”。</p>
	</div>  
	<!--num1-->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist1ul_li">
				<i><img src="/MovieProject/Public/Home/Images/other/Billboard/hotshowing/numberone.jpg"></i>
			</li>
			<li id="hslist1ul_img1">
			   	<img src="/MovieProject/Public/Home/Images/other/Billboard/hotshowing/zhanlang1.jpg">
			</li>
			<li id="showitli" >
				<ol id="showit">
					<a href=""><li id="zla">战狼</li></a>
					<li id="zlcator">主演：吴京,弗兰克·格里罗,吴刚 </li>	
					<li id="showtime">上映时间：2017-07-27</li>
				</ol>
			</li>
			<li id="pingfen"><i id="pingfbig">9.</i><i id="pingfsmall">7</i></li>
	    </ul>
	</div>
	<!-- num2 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist2ul_li">
				<i>2</i>
			</li>
			<li><img src="/MovieProject/Public/Home/Images/other/Billboard/hotshowing/xuezhanxiangjiang2.jpg"></li>
			<li id="showitli">
				<ol id="showit">
					<a href=""><li id="zla">血战湘江</li></a>
					<li id="zlcator">主演：王霙,保剑锋,董勇</li>
					<li id="showtime">上映时间：2017-06-30</li>
				</ol>
			</li>
			<li id="pingfen"><i id="pingfbig">9.</i><i id="pingfsmall">2</i></li>
		</ul>
	</div>
	<!--num3-->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist2ul_li">
				<i>3</i>
		    </li>
			<li><img src="/MovieProject/Public/Home/Images/other/Billboard/hotshowing/shanguangshaonv3.jpg"></li>
			<li id="showitli">
				<ol id="showit">
					<a href=""><li id="zla">闪光少女</li></a>
					<li id="zlcator">主演：徐璐,彭昱畅,刘泳希</li>
					<li id="showtime">上映时间：2017-07-20</li>
				</ol>
			</li>
			<li id="pingfen"><i id="pingfbig">9.</i><i id="pingfsmall">2</i></li>
		</ul>
	</div>
	<!--  num4 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist3ul_li">
				<i>4</i>
			</li>
			<li><img src="/MovieProject/Public/Home/Images/other/Billboard/hotshowing/jianjundaye4.jpg"></li>
			<li id="showitli">
				<ol id="showit">
					<a href=""><li id="zla">建军大业</li></a>
					<li id="zlcator">主演：刘烨,朱亚文,黄志忠</li>
					<li id="showtime">上映时间：2017-07-27</li>
				</ol>
			</li>
			<li id="pingfen"><i id="pingfbig">9.</i><i id="pingfsmall">1</i></li>
		</ul>
	</div>
	<!-- num5 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist3ul_li">
				<i>5</i>
			</li>
			<li>
			   	<img src="/MovieProject/Public/Home/Images/other/Billboard/hotshowing/woshimalibu5.png">
			   	</li>
			<li id="showitli">
				<ol id="showit">
					<a href=""><li id="zla">我是马布里</li></a>
					<li id="zlcator">主演：史蒂芬.马布里,何冰,吴尊</li>
					<li id="showtime">上映时间：2017-08-04</li>
				</ol>
			</li>
			<li id="pingfen"><i id="pingfbig">8.</i><i id="pingfsmall">9</i></li>
		</ul>
	</div>
	<!-- num6 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist3ul_li">
				<i>6</i>
			</li>
			<li>
			   	<img src="/MovieProject/Public/Home/Images/other/Billboard/hotshowing/daxianglinwang6.jpg">
			</li>
			<li id="showitli">
				<ol id="showit">
					<a href=""><li id="zla">大象林旺之一炮成名</li></a>
					<li id="zlcator">主演：宋晓宇,李垚,徐炜</li>
					<li id="showtime">上映时间：2017-08-04</li>
				</ol>
			</li>
			<li id="pingfen"><i id="pingfbig">8.</i><i id="pingfsmall">9</i></li>
		</ul>
	</div> 
	<!--  num7 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist3ul_li">
				<i>7</i>
			</li>
			<li><img src="/MovieProject/Public/Home/Images/other/Billboard/hotshowing/atangqiyu7.jpg"></li>
			<li id="showitli">
				<ol id="showit">
					<a href=""><li id="zla">阿唐奇遇</li></a>
					<li id="zlcator">主演：石磊,袁泽宇,芒来</li>
					<li id="showtime">上映时间：2017-07-21</li>
				</ol>
			</li>
			<li id="pingfen"><i id="pingfbig">9.</i><i id="pingfsmall">1</i></li>
		</ul>
	</div> 
	<!--  num8 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist3ul_li">
				<i>8</i>
			</li>
			<li>
			   	<img src="/MovieProject/Public/Home/Images/other/Billboard/hotshowing/shengtounaiba8.jpg">
			</li>
			<li id="showitli">
				<ol id="showit">
					<a href=""><li id="zla">神偷奶爸3</li></a>
					<li id="zlcator">主演：史蒂夫·卡瑞尔,克里斯汀·韦格,崔·帕克
					</li>
					<li id="showtime">上映时间：2017-07-07</li>
				</ol>
			</li>
			<li id="pingfen"><i id="pingfbig">8.</i><i id="pingfsmall">8</i></li>
		</ul>
	</div> 
	<!--  num9 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist3ul_li">
				<i>9</i>
		    </li>
			<li>
			   	<img src="/MovieProject/Public/Home/Images/other/Billboard/hotshowing/gangrenboqi9.jpg">
			</li>
			<li id="showitli">
				<ol id="showit">
					<a href=""><li id="zla">冈仁波齐</li></a>
					<li id="zlcator">主演：杨培,尼玛扎堆,斯朗卓嘎</li>
					<li id="showtime">上映时间：2017-06-20</li>
				</ol>
			</li>
			<li id="pingfen"><i id="pingfbig">8.</i><i id="pingfsmall">8</i></li>
		</ul>
	</div>
	<!--   num10 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist3ul_li">
				<i>10</i>
		    </li>
			<li>
			   	<img src="/MovieProject/Public/Home/Images/other/Billboard/hotshowing/tutu10.jpg">
			</li>
			<li id="showitli">
				<ol id="showit">
					<a href=""><li id="zla">大耳朵图图之美食狂想曲</li></a>
					<li id="zlcator">主演：豆豆,范楚绒,胡谦</li>
					<li id="showtime">上映时间：2017-07-28</li>
				</ol>
			</li>
			<li id="pingfen">
			   	<i id="pingfbig">8.</i><i id="pingfsmall">7</i>
			</li>
		</ul>
	</div>
</div>

        <!-- 尾部 -->
		<div class="footer" style="visibility: visible;">
    		<p class="friendly-links">友情链接 :
        		<a href="http://www.meituan.com" data-query="utm_source=wwwmaoyan" target="_blank">美团网</a>
        		<span> </span>
        		<a href="http://i.meituan.com/client" target="_blank">美团下载</a>
    		</p>
    		<p>©2016猫眼电影 maoyan.com
        		<a href="https://tsm.miit.gov.cn/pages/EnterpriseSearchList_Portal.aspx?type=0&amp;keyword=京ICP证160733号&amp;pageNo=1" target="_blank">京ICP证160733号</a>
        		<a href="http://www.miibeian.gov.cn" target="_blank">京ICP备16022489号-1</a>
        		京公网安备 11010502030881号
        		<a href="/about/licence" target="_blank">网络文化经营许可证</a>
        		<a href="http://www.meituan.com/about/rules" target="_blank">电子公告服务规则</a>
    		</p>
    		<p>北京猫眼文化传媒有限公司</p>
		</div>
	</body>
</html>