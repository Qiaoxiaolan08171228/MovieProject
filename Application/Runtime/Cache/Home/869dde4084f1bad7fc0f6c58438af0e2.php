<?php if (!defined('THINK_PATH')) exit();?><!-- 继承的基类文件(首页完整的代码) -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="/MovieProject/Public/Home/Css/moviemouse_header.css">
		
	<link rel="stylesheet" type="text/css" href="/MovieProject/Public/Home/Css/hotshowinglist.css">
	<link rel="stylesheet" type="text/css" href="/MovieProject/Public/Home/Css/movieSort.css">

		<link rel="stylesheet" type="text/css" href="/MovieProject/Public/Home/Css/moviemouse_footer.css">
		<title>TOP100榜</title>
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
			<img src="/MovieProject/Public/Home/Images/other/Billboard/TopOneHundredPoint/bawang1.jpg">
			</li>
			<li id="showitli" >
				<ol id="showit">
					<a href=""><li id="zla">霸王别姬</li></a>
					<li id="zlcator">主演：张国荣,张丰毅,巩俐</li>	
					<li id="showtime">上映时间：1993-01-01(中国香港)</li>
				</ol>
			</li>
			<li id="pingfen"><i id="pingfbig">9.</i><i id="pingfsmall">6</i></li>
	    </ul>
	</div>
	<!-- num2 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist2ul_li">
				<i>2</i>
			</li>
			   	<li><img src="/MovieProject/Public/Home/Images/other/Billboard/TopOneHundredPoint/xiaoshengke2.jpg"></li>
			   	<li id="showitli">
				<ol id="showit">
					<a href=""><li id="zla">肖申克的救赎</li></a>
					<li id="zlcator">主演：蒂姆·罗宾斯,摩根·弗里曼,鲍勃·冈顿</li>
					<li id="showtime">上映时间：1994-10-14(美国)</li>
				</ol>
			</li>
			<li id="pingfen"><i id="pingfbig">9.</i><i id="pingfsmall">5</i></li>
	    </ul>
	</div>
	<!--num3-->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist2ul_li">
				<i>3</i>
			</li>
			<li><img src="/MovieProject/Public/Home/Images/other/Billboard/TopOneHundredPoint/luomajiari3.jpg"></li>
			<li id="showitli">
				<ol id="showit">
					<a href=""><li id="zla">罗马假日</li></a>
					<li id="zlcator">主演：格利高利·派克,奥黛丽·赫本,埃迪·艾伯特</li>
					<li id="showtime">上映时间：1953-09-02(美国)</li>
				</ol>
			</li>
			<li id="pingfen"><i id="pingfbig">9.</i><i id="pingfsmall">1</i></li>
		</ul>
	</div>
	<!--  num4 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist3ul_li">
				<i>4</i>
			</li>
			<li><img src="/MovieProject/Public/Home/Images/other/Billboard/TopOneHundredPoint/leon4.jpg"></li>
			<li id="showitli">
				<ol id="showit">
					<a href=""><li id="zla">这个杀手不太冷</li></a>
					<li id="zlcator">主演：让·雷诺,加里·奥德曼,娜塔莉·波特曼</li>
					<li id="showtime">上映时间：1994-09-14(法国)</li>
				</ol>
			</li>
			<li id="pingfen"><i id="pingfbig">9.</i><i id="pingfsmall">5</i></li>
		</ul>
	</div>
	<!-- num5 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist3ul_li">
				<i>5</i>
			</li>
			<li>
			   	<img src="/MovieProject/Public/Home/Images/other/Billboard/TopOneHundredPoint/taitannike5.jpg">
			   	</li>
			<li id="showitli">
				<ol id="showit">
					<a href=""><li id="zla">泰坦尼克号</li></a>
					<li id="zlcator">主演：莱昂纳多·迪卡普里奥,凯特·温丝莱特,比利·赞恩</li>
					<li id="showtime">上映时间：1998-04-03</li>
				</ol>
			</li>
			<li id="pingfen"><i id="pingfbig">9.</i><i id="pingfsmall">4</i></li>
		</ul>
	</div>
	<!-- num6 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist3ul_li">
				<i>6</i>
			</li>
			<li>
			   	<img src="/MovieProject/Public/Home/Images/other/Billboard/TopOneHundredPoint/jiaofu6.jpg">
			</li>
			<li id="showitli">
				<ol id="showit">
					<a href=""><li id="zla">教父</li></a>
					<li id="zlcator">主演：马龙·白兰度,阿尔·帕西诺,詹姆斯·凯恩</li>
					<li id="showtime">上映时间：1972-03-24(美国)</li>
				</ol>
			</li>
			<li id="pingfen"><i id="pingfbig">9.</i><i id="pingfsmall">3</i></li>
		</ul>
	</div> 
	<!--  num7 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist3ul_li">
				<i>7</i>
			</li>
			<li><img src="/MovieProject/Public/Home/Images/other/Billboard/TopOneHundredPoint/longmao7.jpg"></li>
			<li id="showitli">
				<ol id="showit">
					<a href=""><li id="zla">龙猫</li></a>
					<li id="zlcator">主演：日高法子,坂本千夏,糸井重里</li>
					<li id="showtime">上映时间：1988-04-16(日本)</li>
				</ol>
			</li>
			<li id="pingfen"><i id="pingfbig">9.</i><i id="pingfsmall">3</i></li>
		</ul>
	</div> 
	<!--  num8 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist3ul_li">
				<i>8</i>
			</li>
			<li>
			   	<img src="/MovieProject/Public/Home/Images/other/Billboard/TopOneHundredPoint/tangbohu8.jpg">
			</li>
			<li id="showitli">
				<ol id="showit">
					<a href=""><li id="zla">唐伯虎点秋香</li></a>
					<li id="zlcator">主演：周星驰,巩俐,郑佩佩
					</li>
					<li id="showtime">上映时间：1993-07-01(中国香港)</li>
				</ol>
			</li>
			<li id="pingfen"><i id="pingfbig">9.</i><i id="pingfsmall">5</i></li>
		</ul>
	</div> 
	<!--  num9 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist3ul_li">
				<i>9</i>
			</li>
			<li>
			   	<img src="/MovieProject/Public/Home/Images/other/Billboard/TopOneHundredPoint/qianyuqianvun9.jpg">
			</li>
			<li id="showitli">
				<ol id="showit">
					<a href=""><li id="zla">千与千寻</li></a>
					<li id="zlcator"> 主演：柊瑠美,入野自由,夏木真理</li>
					<li id="showtime">上映时间：2001-07-20(日本)</li>
				</ol>
			</li>
			<li id="pingfen"><i id="pingfbig">9.</i><i id="pingfsmall">4</i></li>
		</ul>
	</div>
	<!--   num10 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist3ul_li">
	<i>4</i>
		    </li>
			<li>
			   	<img src="/MovieProject/Public/Home/Images/other/Billboard/TopOneHundredPoint/hunduanlanqiao10.jpg">
			</li>
			<li id="showitli">
				<ol id="showit">
					<a href=""><li id="zla">魂断蓝桥</li></a>
					<li id="zlcator">主演：费雯·丽,罗伯特·泰勒,露塞尔·沃特森</li>
					<li id="showtime">上映时间：1940-05-17(美国)</li>
				</ol>
			</li>
			<li id="pingfen">
			   	<i id="pingfbig">9.</i><i id="pingfsmall">5</i>
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