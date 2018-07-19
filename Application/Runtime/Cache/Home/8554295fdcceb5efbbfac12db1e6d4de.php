<?php if (!defined('THINK_PATH')) exit();?><!-- 继承的基类文件(首页完整的代码) -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="/MovieProject/Public/Home/Css/moviemouse_header.css">
		<link type="text/css" rel="stylesheet" href="/MovieProject/Public/Home/Css/movieSort.css"/>
		<link rel="stylesheet" type="text/css" href="/MovieProject/Public/Home/Css/moviemouse_footer.css">
		<title>电影</title>
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
			<li><a href="">正在热映</a></li>
			<li><a href="">即将上映</a></li>
			<li><a href="">经典影片</a></li>
		</ul>
    </div>

		
<div class="ms_main">
	<div class="msm_channel">
		<div class="msmc_panel">
			<ul class="msmcp_lines">
				<li class="msmcp_line">
					<div class="msmcptags_title">类型：</div>
					<ul class="msmcp_tags"> 
						<li><a href="">全部</a></li>
						<li><a href="">爱情</a></li>
						<li><a href="">喜剧</a></li>
						<li><a href="">动画</a></li>
						<li><a href="">剧情</a></li>
						<li><a href="">恐怖</a></li>
						<li><a href="">惊悚</a></li>
						<li><a href="">科幻</a></li>
						<li><a href="">动作</a></li>
						<li><a href="">悬疑</a></li>
						<li><a href="">犯罪</a></li>
						<li><a href="">冒险</a></li>
						<li><a href="">战争</a></li>
						<li><a href="">奇幻</a></li>
						<li><a href="">运动</a></li>
						<li><a href="">家庭</a></li>
						<li><a href="">古装</a></li>
						<li><a href="">武侠</a></li>
						<li><a href="">西部</a></li>
						<li><a href="">历史</a></li>
						<li><a href="">传记</a></li>
						<li><a href="">情色</a></li>
						<li><a href="">歌舞</a></li>
						<li><a href="">黑色电影</a></li>
						<li><a href="">短片</a></li>
						<li><a href="">纪录片</a></li>
						<li><a href="">其他</a></li>
					</ul>
				</li>
				<li class="msmcp_line">
					<div class="msmcptags_title">区域：</div>
					<ul class="msmcp_tags">
						<li><a href="">全部</a></li>
						<li><a href="">大陆</a></li>
						<li><a href="">美国</a></li>
						<li><a href="">韩国</a></li>
						<li><a href="">日本</a></li>
						<li><a href="">中国香港</a></li>
						<li><a href="">中国台湾</a></li>
						<li><a href="">泰国</a></li>
						<li><a href="">印度</a></li>
						<li><a href="">法国</a></li>
						<li><a href="">英国</a></li>
						<li><a href="">俄罗斯</a></li>
						<li><a href="">意大利</a></li>
						<li><a href="">西班牙</a></li>
						<li><a href="">德国</a></li>
						<li><a href="">波兰</a></li>
						<li><a href="">澳大利亚</a></li>
						<li><a href="">伊朗</a></li>
						<li><a href="">其他</a></li>
					</ul>
				</li>
				<li class="msmcp_line">
					<div class="msmcptags_title">年代：</div>
					<ul class="msmcp_tags">
						<li><a href="">全部</a></li>
						<li><a href="">2017以后</a></li>
						<li><a href="">2017</a></li>
						<li><a href="">2016</a></li>
						<li><a href="">2015</a></li>
						<li><a href="">2014</a></li>
						<li><a href="">2013</a></li>
						<li><a href="">2012</a></li>
						<li><a href="">2011</a></li>
						<li><a href="">2000-2010</a></li>
						<li><a href="">90年代</a></li>
						<li><a href="">80年代</a></li>
						<li><a href="">70年代</a></li>
						<li><a href="">其他</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="msmc_mpanel">
			<div class="msmcm_sorter">
				<div class="msmcms_sort">
					<ul>
						<li>
							<span>
								<span class="clickImg msmcms_radio"></span>
								<span>按热门排序</span>
							</span>
						</li>
						<li>
							<span>
								<span class="clickImg msmcms_radio"></span>
								<span>按时间排序</span>
							</span>
						</li>
						<li>
							<span>
								<span class="clickImg msmcms_radio"></span>
								<span>按评价排序</span>
							</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="msmcm_list">
				<dl class="msmcml_list">
					<dd></dd>
				</dl>
			</div>
			<div class="msmcm_pager"></div>	
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