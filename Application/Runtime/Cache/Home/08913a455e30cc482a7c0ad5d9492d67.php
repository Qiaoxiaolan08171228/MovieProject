<?php if (!defined('THINK_PATH')) exit();?><!-- 继承的基类文件(首页完整的代码) -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="/MovieProject/Public/Home/Css/moviemouse_header.css">
		
	<link rel="stylesheet" type="text/css" href="/MovieProject/Public/Home/Css/hotshowinglist.css">
	<link rel="stylesheet" type="text/css" href="/MovieProject/Public/Home/Css/movieSort.css">

		<link rel="stylesheet" type="text/css" href="/MovieProject/Public/Home/Css/moviemouse_footer.css">
		<title>最受期待榜</title>
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
				<p class="newLook">本月新增想看:<span class="lookNumber">3504.0</span>人</p>
				<p class="totalOffice">总想看:3504.0人</p>
			</div>
	    </ul>
	</div>
	<!-- num2 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist2ul_li">
				<i>2</i>
			</li>
			<li><img src="/MovieProject/Public/Home/Images/other/Billboard/AmericanBoxOffice/dunkeerke2.jpg"></li>
			<li id="showitAmericaOffice">
				<ol id="showit">
					<a href=""><li id="zla">敦刻尔克</li></a>
					<li id="zlcator">主演：菲昂·怀特海德,汤姆·格林-卡尼,米歇尔·贝尔</li>
					<li id="showtime">上映时间：2017-09-01</li>
				</ol>
			</li>
			<div class="boxOffice">
				<p class="newLook">本月新增想看:<span class="lookNumber">1140.0</span>人</p>
				<p class="totalOffice">总想看:1.54亿人</p>
			</div>
		</ul>
	</div>
	<!--num3-->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist2ul_li">
				<i>3</i>
			</li>
			<li><img src="/MovieProject/Public/Home/Images/other/Billboard/AmericanBoxOffice/qiangjiejianguodian3.jpg"></li>
			<li id="showitAmericaOffice">
				<ol id="showit">
					<a href=""><li id="zla">抢劫坚果店2</li></a>
					<li id="zlcator">主演：威尔·阿奈特,杰夫·敦哈姆,凯瑟琳·海格尔</li>
					<li id="showtime">上映时间：2017-08-11(加拿大)</li>
				</ol>
			</li>
			<div class="boxOffice">
				<p class="newLook">本月新增想看:<span class="lookNumber">893.0</span>人</p>
				<p class="totalOffice">总想看:893.0人</p>
			</div>
		</ul>
	</div>
	<!--  num4 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist3ul_li">
				<i>4</i>
			</li>
			<li><img src="/MovieProject/Public/Home/Images/other/Billboard/AmericanBoxOffice/heianta4.png"></li>
			<li id="showitAmericaOffice">
				<ol id="showit">
					<a href=""><li id="zla">黑暗塔</li></a>
					<li id="zlcator">主演：伊德瑞斯·艾尔巴,马修·麦康纳,阿比·丽</li>
					<li id="showtime">上映时间：2017-08-04(美国)</li>
				</ol>
			</li>
			<div class="boxOffice">
				<p class="newLook">本月新增想看:<span class="lookNumber">787.0</span>人</p>
				<p class="totalOffice">总想看:3430.0人</p>
			</div>
		</ul>
	</div>
	<!-- num5 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist3ul_li">
				<i>5</i>
			</li>
			<li>
			   	<img src="/MovieProject/Public/Home/Images/other/Billboard/AmericanBoxOffice/biaoqingqihuanmaoxian5.png">
			</li>
			<li id="showitAmericaOffice">
				<ol id="showit">
					<a href=""><li id="zla">表情奇幻冒险</li></a>
					<li id="zlcator">主演：T·J·米勒,詹姆斯·柯登,安娜·法瑞丝</li>
					<li id="showtime">上映时间：2017-07-28(美国)</li>
				</ol>
			</li>
			<div class="boxOffice">
				<p class="newLook">本月新增想看:<span class="lookNumber">660.0</span>人</p>
				<p class="totalOffice">总想看:6359.0人</p>
			</div>
		</ul>
	</div>
	<!-- num6 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist3ul_li">
				<i>6</i>
			</li>
			<li>
			   	<img src="/MovieProject/Public/Home/Images/other/Billboard/AmericanBoxOffice/haifanjiemei6.png">
			</li>
			<li id="showitAmericaOffice">
				<ol id="showit">
					<a href=""><li id="zla">嗨翻姐妹行</li></a>
					<li id="zlcator">主演：贾达·萍克·史密斯,奎恩·拉提法,雷吉娜·赫尔</li>
					<li id="showtime">上映时间：2017-07-21(美国)</li>
				</ol>
			</li>
			<div class="boxOffice">
				<p class="newLook">本月新增想看:<span class="lookNumber">652.0</span>人</p>
				<p class="totalOffice">总想看:9719.0人</p>
			</div>
		</ul>
	</div> 
	<!--  num7 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist3ul_li">
				<i>7</i>
			</li>
			<li><img src="/MovieProject/Public/Home/Images/other/Billboard/AmericanBoxOffice/zhizhuxia7.jpg"></li>
			<li id="showitAmericaOffice">
				<ol id="showit">
					<a href=""><li id="zla">蜘蛛侠：英雄归来</li></a>
					<li id="zlcator">主演：汤姆·赫兰德,玛丽莎·托梅,赞达亚</li>
					<li id="showtime">上映时间：2017-09-08</li>
				</ol>
			</li>
			<div class="boxOffice">
				<p class="newLook">本月新增想看:<span class="lookNumber">610.0</span>人</p>
				<p class="totalOffice">总想看:3.06人</p>
			</div>
		</ul>
	 </div> 
	<!--  num8 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist3ul_li">
				<i>8</i>
		    </li>
			<li>
			   	<img src="/MovieProject/Public/Home/Images/other/Billboard/AmericanBoxOffice/buangjia8.jpg">
			</li>
			<li id="showitAmericaOffice">
				<ol id="showit">
					<a href=""><li id="zla">绑架</li></a>
					<li id="zlcator">主演：哈莉·贝瑞,帕特里克·卡恩斯,卢·坦普尔</li>
					<li id="showtime">上映时间：2017-08-04(美国)</li>
				</ol>
			</li>
			<div class="boxOffice">
				<p class="newLook">本月新增想看:<span class="lookNumber">522.0</span>人</p>
				<p class="totalOffice">总想看:1939人</p>
			</div>
		</ul>
	</div> 
	<!--  num9 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist3ul_li">
				<i>9</i>
		    </li>
			<li>
			   	<img src="/MovieProject/Public/Home/Images/other/Billboard/AmericanBoxOffice/bolizhicheng9.png">
			</li>
			<li id="showitAmericaOffice">
				<ol id="showit">
					<a href=""><li id="zla">玻璃城堡</li></a>
					<li id="zlcator">主演：布丽·拉尔森,伍迪·哈里森,娜奥米·沃茨</li>
					<li id="showtime">上映时间：2017-08-11(美国)</li>
				</ol>
			</li>
			<div class="boxOffice">
				<p class="newLook">本月新增想看:<span class="lookNumber">487.0</span>人</p>
				<p class="totalOffice">总想看:487.0人</p>
			</div>
		</ul>
	</div>
	<!--   num10 -->
	<div id="hslist1">
		<ul id="hslist1ul">
			<li id="hslist3ul_li">
				<i>10</i>
			</li>
			<li>
			   	<img src="/MovieProject/Public/Home/Images/other/Billboard/AmericanBoxOffice/jihanbao10.jpg">
			</li>
			<li id="showitAmericaOffice">
				<ol id="showit">
					<a href=""><li id="zla">极寒之城</li></a>
					<li id="zlcator">主演：查理兹·塞隆,詹姆斯·麦卡沃伊,约翰·古德曼</li>
					<li id="showtime">上映时间：2017-07-28(美国)</li>
				</ol>
			</li>
			<div class="boxOffice">
				<p class="newLook">本月新增想看:<span class="lookNumber">457.0</span>人</p>
				<p class="totalOffice">总想看:4282.0人</p>
			</div>
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