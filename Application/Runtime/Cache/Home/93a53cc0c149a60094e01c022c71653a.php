<?php if (!defined('THINK_PATH')) exit();?><!-- 继承的基类文件(首页完整的代码) -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="/MovieProject/Public/Home/Css/moviemouse_header.css">
		
	<link type="text/css" rel="stylesheet" href="/MovieProject/Public/Home/Css/hotshowinglist.css"/>
	<link type="text/css" rel="stylesheet" href="/MovieProject/Public/Home/Css/movieSort.css"/>

		<link rel="stylesheet" type="text/css" href="/MovieProject/Public/Home/Css/moviemouse_footer.css">
		<title>热点</title>
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
			<li><a href="<?php echo U('Hot/show');?>">热点首页</a></li>
			<li><a href="<?php echo U('Hot/news');?>">新闻资讯</a></li>
			<li><a href="<?php echo U('Hot/preview');?>">预告片</a></li>
			<li><a href="<?php echo U('Hot/atlas');?>">精彩图集</a></li>
		</ul>
    </div>

		
	<div class="content">
		<div class="ms_placeholder" style="height: 81px;"></div>
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
						<img src="/MovieProject/Public/Home/Images/other/Billboard/AmericanBoxOffice/nannabeier2-1.png">
					</li>
					<li id="showitAmericaOffice" >
						<ol id="showit">
							<a href=""><li id="zla">安娜贝尔2：诞生</li></a>
							<li id="zlcator">主演：艾丽西娅·维拉-贝利,米兰达·奥图,露露·威尔逊 </li>	
							<li id="showtime">上映时间：2017-08-11(美国)</li>
						</ol>
					</li>
					<div class="boxOffice">
					   	<p class="lastWeekOffice">上周末票房:<span class="officeNumber">3504.0</span>万</p>
					   	<p class="totalOffice">总票房:3504.0万</p>
					</div>
			    </ul>
			</div>
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