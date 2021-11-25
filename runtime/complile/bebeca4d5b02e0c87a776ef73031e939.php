<!DOCTYPE html>
<html>
	<head>
		<meta name="baidu-site-verification" content="code-fMKAfj5U9w" />
		<title>{pboot:pagetitle}</title>
		<meta charset="utf-8">
		<meta name="renderer" content="webkit" />
		<meta name="force-rendering" content="webkit" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
		<meta name="keywords" content="{pboot:pagekeywords}">
		<meta name="description" content="{pboot:pagedescription}">
		<link rel="stylesheet" href="{pboot:sitetplpath}/css/bootstrap.min.css?1" />
		<link rel="stylesheet" href="{pboot:sitetplpath}/css/font-awesome.min.css?1" />
		<link rel="stylesheet" href="{pboot:sitetplpath}/css/swiper.min.css?1" />
		<link rel="stylesheet" href="{pboot:sitetplpath}/css/public.css?31" />
		<link rel="stylesheet" href="{pboot:sitetplpath}/css/main.css?42" />
		<link rel="stylesheet" href="{pboot:sitetplpath}/css/media.css?32" />
		<link rel="stylesheet" href="{pboot:sitetplpath}/css/style.css?32" />
		<script type="text/javascript" src="{pboot:sitetplpath}/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="{pboot:sitetplpath}/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="{pboot:sitetplpath}/js/swiper.min.js"></script>
		<script type="text/javascript" src="{pboot:sitetplpath}/js/wow.min.js"></script>
		<script type="text/javascript" src="{pboot:sitetplpath}/js/main.js?4"></script>
	</head>
	<script>
		var _hmt = _hmt || [];
		(function() {
			var hm = document.createElement("script");
			hm.src = "https://hm.baidu.com/hm.js?2ff1243653623ccaa9c2926cdf205b31";
			var s = document.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(hm, s);
		})();
	</script>
	<body>


<link rel="stylesheet" href="{pboot:sitetplpath}/css/animate.css" />
<link rel="stylesheet" href="{pboot:sitetplpath}/css/style.css?1" />

<script type="text/javascript" src="{pboot:sitetplpath}/js/wow.min.js"></script>
<script type="text/javascript" src="{pboot:sitetplpath}/js/adaptive-version2.js"></script>

<script>
    window['adaptive'].desinWidth = 750;
    window['adaptive'].init();
</script>

<div class="dcWrap">

    
<!-- nav pc start -->
<?$php_url=get_current_url();?>
<!-- pc端nav效果 -->
<div class="dcHead pcHead">
    <div class="headCon">

        <!-- logo -->
        <div class="logoBox">
            <a href="{pboot:sitepath}/">
                <span class="logo"></span>
            </a>
        </div>

        <!-- nav -->
        <div class="menuBox">
            <ul class="menuCon">
                <li class="menuItem productMenu <?=strstr($php_url, 'stars') || strstr($php_url, 'product') ? 'active' : '' ?>">
                    <a href="{pboot:sitepath}/stars">明星产品</a>
                    <div class="menuListBox">
                        <div class="menuListCon fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">

                            {pboot:nav parent=1}
                            <ul class="menuList">
                                <li class="listTitle" data-link="[nav:link]?md=[nav:scode]">
                                    <img src="[nav:ico]" />
                                    [nav:name]
                                </li>

                                {pboot:2nav parent=[nav:scode]}
                                <li><a href="[2nav:link]?md=[nav:scode]&nd=[2nav:scode]">[2nav:name]</a></li>
                                {/pboot:2nav}
                            </ul>
                            {/pboot:nav}

                        </div>
                    </div>
                </li>
                <li class="menuItem  <?=strstr($php_url, 'scientificCenter') ? 'active' : '' ?>">
                    <a  href="{pboot:sitepath}/scientificCenter">科研中心</a>
                </li>
                <li class="menuItem dropdown <?=strstr($php_url, 'about') ? 'active' : '' ?>">
                    <a  href="{pboot:sitepath}/about">关于小象</a>
                    <ul class="dropdown-menu">

                        {pboot:nav parent=3}
                        <li><a href="{pboot:sitepath}/about?md=[nav:n]">[nav:name]</a></li>
                        {/pboot:nav}

                    </ul>
                </li>
                <li class="menuItem">
                    <a target="_blank" href="https://hsxx.tmall.com/search.htm?spm=a220m.1000858.1000725.3.d6e376771Mxb9u&user_number_id=2707252427&rn=874a5afc4a37c3f4595a655d6f24033d&keyword=%BA%EC%C9%AB%D0%A1%CF%F3">
                        天猫旗舰店
                    </a>
                </li>
            </ul>
        </div>

        <!-- h search -->
        <form action="{pboot:scaction}"  method="get" class="hSearchCon">
            <div class="hSearchBox">
                <input class="hSearchInput" type="text" name="title" placeholder="搜索你喜欢的产品" />
                <div class="hSearch"></div>
            </div>
        </form>

    </div>
</div>

<script type="text/javascript">
    $(function () {
        var clientWidth = $(window).width();
        if (clientWidth > 768) {
            $('.videoBox').removeClass('hidden');

            var bannerH = $('.ibanner-pc').height();

            $(window).scroll(function() {
                var wtop = $(window).scrollTop();
                if (wtop > bannerH -30) {
                    $('.pcHead').addClass('on');
                } else {
                    $('.pcHead').removeClass('on');
                }
            });

        } else {

            $(window).scroll(function() {
                var wtop = $(window).scrollTop();
                if (wtop > 60) {
                    $('.mHead').addClass('on');
                } else {
                    $('.mHead').removeClass('on');
                }

                $('.mCollapse').removeClass('on');
                $('.mSearchBox').removeClass('on');

                $('.mCollapseMenuBox').hide();
                $('.mSearchContainer').hide();

            });

            $('.videoBox').addClass('hidden');

            $('#myVideo').stop().hide(0);
        }
    });

</script>
<!-- nav pc stop -->

<!-- nav mobile start -->
<!-- 移动端nav效果 -->
<div class="dcHead mHead">
    <div class="mNavBox">
        <div class="mCollapse"></div>
        <div class="mLogoBox"><a href="{pboot:sitepath}/"></a></div>
        <div class="mSearchBox"></div>
    </div>
    <div class="mCollapseMenuBox">
        <ul class="mCollapseMenu">
            <li class="dropdown">
                <!-- href="{pboot:sitepath}/stars" -->
                <a class="dropdownToggle">明星产品</a>
                <ul class="dropdownMenu">
                    {pboot:nav parent=1}
                    <li><a href="[nav:link]?md=[nav:scode]">[nav:name]</a></li>
                    {/pboot:nav}
                </ul>
            </li>
            <li class=""><a href="{pboot:sitepath}/scientificCenter">科研中心</a></li>
            <li class=""><a href="{pboot:sitepath}/about">关于小象</a></li>
            <li class="">
                <a target="_blank" href="https://hsxx.tmall.com/search.htm?spm=a220m.1000858.1000725.3.d6e376771Mxb9u&user_number_id=2707252427&rn=874a5afc4a37c3f4595a655d6f24033d&keyword=%BA%EC%C9%AB%D0%A1%CF%F3">
                    天猫旗舰店
                </a>
            </li>
        </ul>
    </div>

    <div class="mSearchContainer">
        <div class="mSearchCon">
            <form action="{pboot:scaction}"  method="get">
                <div class="mSearchItem">
                    <input type="text" name="title" placeholder="请输入搜索内容" />
                    <img src="{pboot:sitetplpath}/img/search_d.png" />
                </div>
            </form>
        </div>
    </div>

</div>

<!-- nav mobile stop -->

<script type="text/javascript">
    $(function () {
        $(".menuTitle").click(function(){
            if($(".product-a").is(":hidden")){
                $(".product-a").slideDown();
                $(".menuTitle").removeClass("on");
            }else{
                $(".product-a").slideUp();
                $(".menuTitle").addClass("on");
            }
        })
    })
</script>

    <div class="sf-nav" style="position: absolute;top: 0;left: 0;width: 100%;">
        <div class="sf-nav-pos">
            <div class="w1200">
                <div class="sf-nav-a on">品牌介绍</div>
                <div class="sf-nav-a">品牌奖项</div>
                <div class="sf-nav-a">品牌新闻</div>
            </div>
        </div>
    </div>

    <div class="dcBanner">
        <!-- <div class="bannerImgBox">
            <img class="bannerImg" src="img/brand/banner.png" />
        </div> -->
        <div class="ibanner brand-video">
            <div class="wfull-video">
                <div class="full-video">
                    <video id="loadding-video" muted="" autoplay="" src="{pboot:sitetplpath}/img/brand/video.mp4"></video>
                </div>
            </div>
            <div class="z-video-bg" style="background:url({pboot:sitetplpath}/img/brand/banner.png) no-repeat 0 center; background-size:cover;">
                <!-- <div class="video-btn">
                    <img src="img/brand/img11.png" alt="">
                </div> -->
            </div>
        </div>
        <!--手机端使用-->
        <div class="wfull-video1 brand-video ibanner-m">
            <div class="full-video brand-video-a">
                <video id="loadding-video2" muted="" playsinline="" autoplay="" preload=""
                       src="{pboot:sitetplpath}/img/brand/video.mp4"
                       poster="{pboot:sitetplpath}/img/brand/banner.png">
                </video>
            </div>
            <div class="z-video-bg" style="background:url({pboot:sitetplpath}/img/brand/banner.png) no-repeat 0 center;background-size:cover;">
                <!-- <div class="video-btn">
                    <img src="img/brand/img11.png" alt="">
                </div> -->
            </div>
        </div>
    </div>

    <!-- introduce start -->
    <div class="brandInfo brandInfoBox">
    <div class="brandModule module0">
        <div class="moduleLeft w60 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
            <div class="brandImgBox">
                <img src="{pboot:sitetplpath}/img/brand/about_pic2.png" />
            </div>
        </div>
        <div class="moduleRight w40 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
            <div class="brandTextBox">
                <div class="title">品牌简介</div>
                <div class="description">
<!--                    红色小象，上海上美化妆品股份有限公司旗下源自日本先端技术的专业母婴护理品牌，创立于2015年。品牌标识源于大象妈妈对小象“持久的母爱与呵护”。红色小象以“科学守护新生”为理念，致力于研发“中国婴幼童及妈妈孕前孕后专业护理产品”，通过日本科技及匠心品质，一站式满足“所有妈妈对爱的挑剔”。2019年，红色小象延伸产品线，打造更多妈妈宝宝都喜欢的全品类产品，根据天猫官方数据显示，红色小象稳居母婴化妆品品类Top1。-->
                    红色小象，适合中国婴童肌肤。源自日本尖端技术的专业母婴护理品牌，主打分年龄、分区域、分步骤精细化儿童护肤理念，一站式满足“所有妈妈对爱的挑剔”。
                </div>
                <div class="line vertical"></div>
            </div>
        </div>
    </div>
    <div class="brandModule module1">
        <div class="moduleRight w60 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
            <div class="brandImgBox">
                <img src="{pboot:sitetplpath}/img/brand/about_3.png" />
            </div>
        </div>
        <div class="moduleLeft w40 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
            <div class="brandTextBox">
                <div class="title">品牌故事</div>
                <div class="description">
                    大象妈妈，是陆地上最伟大的妈妈。比人类的月怀胎更久，小象要在母亲腹中孕育22个月才会来到世间。<br />
                    象宝宝往往超过200公斤，这对母体来说是个不小的负担 小象五年左右才能熟练使用自己的鼻子，在妈妈身边待上几年才会离开。在此期间，小象总是被保护在象群中间，享受着母亲和族群 的悉心呵护。<br />
                    红色，是象征幸福和温暖的颜色，也象征着每一位妈妈的爱 象妈妈从孕育的那一刻，就成为了世间最伟大的母亲 我们相信，每位妈妈都愿意用更多的爱与呵护 让宝贝成为世间最幸福的“红色小象”。
                </div>
                <div class="line horizontal"></div>
            </div>

        </div>

    </div>
    <div class="brandModule module2">
        <div class="moduleLeft w40 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
            <div class="brandImgBox">
                <img src="{pboot:sitetplpath}/img/brand/about_4.png" />
            </div>
        </div>
        <div class="moduleRight w60 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
            <div class="brandTextBox">
                <div class="title">品牌大事记</div>
                <div class="description">
                    <p>2015年，红色小象品牌于中国上海创立。</p>
                    <p>2016年，签约明星赵薇为红色小象品牌首位代言人。</p>
                    <p>2016年，红色小象开始投放综艺节目，独家冠名芒果TV《妈妈是超人》，并成为湖南卫视《快乐大本营》特约合作伙伴。</p>
                    <p>2017年，红色小象独家冠名CCTV-8黄金强档剧场。</p>
                    <p>2018年，签约明星林志颖为品牌第二位代言人。</p>
                    <p>2018年，红色小象继续加大综艺节目投放，先后赞助江苏卫视《了不起的孩子》，并冠名湖南金鹰卡通频道《人偶总动员》。</p>
                    <p>2019年，红色小象在行业内首创儿童牛油果植物彩妆，入围天猫小黑盒。</p>
                    <p>2019年，红色小象花露水获美伊大赏TOP·孕婴童类儿童洗护大奖，根据千牛后台数据显示，产品上线至今销量已突破50w支。</p>
                    <p>2019年，根据千牛后台数据显示，红色小象桃叶精华婴儿爽身露占据天猫同品类 TOP1。</p>
                    <p>2020年，签约明星辣妈董璇为品牌星推官。</p>
                    <p>2020年，红色小象益生元南极冰藻系列产品引爆全渠道，备受追捧。</p>
                    <p>2020年，在湖南卫视热播剧《以家人之名》投放硬广，积极活跃品牌形象。</p>
                    <p>2021年，与超级IP迪士尼达成年度合作。</p>
                    <p>2021年，携手优酷视频《奇妙的蛋生》，持续关爱女性群体。</p>
                    <p>2021年，打造红色小象专家天团，崔玉涛、郑玉巧、周高俊、褚岩，儿科、皮肤科专家强强联合。</p>
                    <p>2021年，与“老爸评测”建立深度合作，男/女童氨基酸洗发水获老爸抽检绿标。</p>
                </div>
                <div class="line vertical"></div>
            </div>
        </div>
    </div>
</div>

    <!-- introduce stop -->

    <!-- awards start -->
    <div class="awards brandAwardsBox">
    <div class="brandAwardsCon">
        <div class="title">
            <span>品牌奖项</span>
        </div>
        <div class="brandAwards swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="swiperAwards">
                        <img class="awardImg" src="{pboot:sitetplpath}/img/brand/award_1.png" />
                        <div class="awardText">
                            <span class="text1">2021亿邦动力</span>
                            <span class="text2">新消费·成长TOP100</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiperAwards">
                        <img class="awardImg" src="{pboot:sitetplpath}/img/brand/award_2.png" />
                        <div class="awardText">
                            <span class="text1">2021年度天猫母婴亲子</span>
                            <span class="text2">最具影响力品牌</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiperAwards">
                        <img class="awardImg" src="{pboot:sitetplpath}/img/brand/award_3.png" />
                        <div class="awardText">
                            <span class="text1">2021京东超市宝贝趴</span>
                            <span class="text2">最具潜力店铺奖 创新营销奖</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiperAwards">
                        <img class="awardImg" src="{pboot:sitetplpath}/img/brand/award_4.png?1" />
                        <div class="awardText">
                            <span class="text1">2021京东超市年度亿元俱乐部新增品牌代表</span>
                            <span class="text2">年度最具创新奖</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiperAwards">
                        <img class="awardImg" src="{pboot:sitetplpath}/img/brand/award_5.png" />
                        <div class="awardText">
                            <span class="text1">2021京东母婴洗护行业峰会</span>
                            <span class="text2">母婴洗护行业领袖奖</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiperAwards">
                        <img class="awardImg" src="{pboot:sitetplpath}/img/brand/award_6.png" />
                        <div class="awardText">
                            <span class="text1">2021中国新消费品牌Growth50</span>
                            <span class="text2">年度增长力品牌</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
    var awardsSwiper;

    initAwardsSwiper();

    window.onresize = function(){
        awardsSwiper.destroy();
        initAwardsSwiper();
    }

    function initAwardsSwiper() {
        var clientWidth = $(window).width();
        var slidesPerView = 3;
        if (clientWidth <= 768) slidesPerView = '1.5';
        awardsSwiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            autoplay: 2000, //可选选项，自动滑动
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: slidesPerView,
            coverflow: {
                rotate: 0,
                stretch: 0,
                depth: 300,
                modifier: 1,
                slideShadows : false
            }
        });
    }
</script>
    <!-- awards stop -->

    <!-- news start -->
    <div class="brandNews brandNewsBox">
    <div class="brandNewsCon wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
        <div class="title">品牌新闻</div>
        <div class="brandNewsListBox">
            <div class="row">
                <div class="col-lg-4 col-xs-6 col-md-6 col-sm-6" onclick="jumpLink('https://mp.weixin.qq.com/s/NYQVGu5DBJMJ0RbfKHjuGQ')">
                    <div class="brandNewsItem">
                        <div class="brandNewsImg">
                            <img src="{pboot:sitetplpath}/img/brand/news_1.jpg" />
                        </div>
                        <div class="brandNewsText">
                            <p class=""><a href="https://mp.weixin.qq.com/s/NYQVGu5DBJMJ0RbfKHjuGQ" target="_blank">获测评大V和育儿专家推荐，红色小象新品凭什么？</a></p>
                            <div class="detail clearfix">
                                <span class="detailDate pull-left">2021/06/22</span>
                                <span class="detailMore pull-right">查看更多<i class="fa fa-angle-double-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-6 col-md-6 col-sm-6" onclick="jumpLink('https://mp.weixin.qq.com/s/QnVbE9Ssve_VqFhskAVWdg')">
                    <div class="brandNewsItem">
                        <div class="brandNewsImg">
                            <img src="{pboot:sitetplpath}/img/brand/news_2.jpg" />
                        </div>
                        <div class="brandNewsText">
                            <p class=""><a href="https://mp.weixin.qq.com/s/QnVbE9Ssve_VqFhskAVWdg" target="_blank">上美集团红色小象入选“超级新‘申’代品牌力A计划”</a></p>
                            <div class="detail clearfix">
                                <span class="detailDate pull-left">2021/10/15</span>
                                <span class="detailMore pull-right">查看更多<i class="fa fa-angle-double-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-6 col-md-6 col-sm-6" onclick="jumpLink('https://mp.weixin.qq.com/s/VdI_sUBRjBJgpdQUgDE3uA')">
                    <div class="brandNewsItem">
                        <div class="brandNewsImg">
                            <img src="{pboot:sitetplpath}/img/brand/news_3.jpg" />
                        </div>
                        <div class="brandNewsText">
                            <p class=""><a href="https://mp.weixin.qq.com/s/VdI_sUBRjBJgpdQUgDE3uA" target="_blank">红色小象x丁香医生联名礼盒上线，专业守护宝宝敏感肌</a></p>
                            <div class="detail clearfix">
                                <span class="detailDate pull-left">2021/11/08</span>
                                <span class="detailMore pull-right">查看更多<i class="fa fa-angle-double-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-6 col-md-6 col-sm-6" onclick="jumpLink('https://mp.weixin.qq.com/s/p6HLRb7uzcj1oiufl1lwQQ')">
                    <div class="brandNewsItem">
                        <div class="brandNewsImg">
                            <img src="{pboot:sitetplpath}/img/brand/news_4.jpg?1" />
                        </div>
                        <div class="brandNewsText">
                            <p class=""><a href="https://mp.weixin.qq.com/s/p6HLRb7uzcj1oiufl1lwQQ" target="_blank">获老爸评测&五大儿科专家联袂推荐，红色小象有多硬核？</a></p>
                            <div class="detail clearfix">
                                <span class="detailDate pull-left">2021/09/07</span>
                                <span class="detailMore pull-right">查看更多<i class="fa fa-angle-double-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-6 col-md-6 col-sm-6" onclick="jumpLink('https://mp.weixin.qq.com/s/UjLZ9SL4zLlzLM8L-aIaGA')">
                    <div class="brandNewsItem">
                        <div class="brandNewsImg">
                            <img src="{pboot:sitetplpath}/img/brand/news_5.jpg" />
                        </div>
                        <div class="brandNewsText">
                            <p class=""><a href="https://mp.weixin.qq.com/s/UjLZ9SL4zLlzLM8L-aIaGA" target="_blank">红色小象获2021中国化妆品蓝玫奖最具影响力品牌</a></p>
                            <div class="detail clearfix">
                                <span class="detailDate pull-left">2021/09/16</span>
                                <span class="detailMore pull-right">查看更多<i class="fa fa-angle-double-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-6 col-md-6 col-sm-6" onclick="jumpLink('https://mp.weixin.qq.com/s/tDpmWUprhXvyl2jdF3Beaw')">
                    <div class="brandNewsItem">
                        <div class="brandNewsImg">
                            <img src="{pboot:sitetplpath}/img/brand/news_6.jpg" />
                        </div>
                        <div class="brandNewsText">
                            <p class=""><a href="https://mp.weixin.qq.com/s/tDpmWUprhXvyl2jdF3Beaw" target="_blank">中国婴童适合的护肤品，听医生专家们怎么说</a></p>
                            <div class="detail clearfix">
                                <span class="detailDate pull-left">2021/06/02</span>
                                <span class="detailMore pull-right">查看更多<i class="fa fa-angle-double-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function jumpLink(link) {
        window.open(link, '_blank');
    }
</script>

    <!-- news stop -->


</div>

<script type="text/javascript">
    var awardsSwiper;
    $(function(){
        var clientWidth = $(window).width();
        if (clientWidth > 768) {
            $(document).off('click.bs.dropdown.data-api');
        } else {
            $(document).on('click.bs.dropdown.data-api');
        }

        initAwardsSwiper();

        var myVideo = document.getElementById("loadding-video");
        var myVideo2 = document.getElementById("loadding-video2");
        $(".brand-video").click(function() {
            if ($(this).hasClass("cur")) {
                $(this).removeClass("cur");
                $(".z-video-bg").removeClass("cur");
                if ($(window).width() > 1024) {
                    myVideo.pause();
                } else {
                    myVideo2.pause();
                }

            } else {
                $(this).addClass("cur");
                $(".z-video-bg").addClass("cur");
                if ($(window).width() > 1024) {
                    myVideo.play();
                } else {
                    myVideo2.play();
                }
            }
        })

        $(".brand-video").addClass("cur");
        $(".z-video-bg").addClass("cur");
        if ($(window).width() > 1024) {
            myVideo.play();
        } else {
            myVideo2.play();
        }

        myVideo.addEventListener('ended', function() {
            $(".brand-video").removeClass("cur");
            $(".z-video-bg").removeClass("cur");
            if ($(window).width() > 1024) {
                myVideo.pause();
            } else {
                myVideo2.pause();
            }
        }, false);

        myVideo2.addEventListener('ended', function() {
            $(".brand-video").removeClass("cur");
            $(".z-video-bg").removeClass("cur");
            if ($(window).width() > 1024) {
                myVideo.pause();
            } else {
                myVideo2.pause();
            }
        }, false);

        // 页面导航被选中效果
        var mdsz = [".brandInfo", ".awards", ".brandNews"];
        var navh = $(".sf-nav").height();
        var winh = $(window).height();
        var mdt1 = $(".brandInfo").offset().top - winh + navh;
        var mdt2 = $(".awards").offset().top - winh + navh;
        var mdt3 = $(".brandNews").offset().top - winh + navh;
        var winw = $(window).width();

        $(window).scroll(function() {
            var wtop = $(window).scrollTop();
            if (wtop > 10) {
                $(".sf-nav").css({'visibility': 'visible'});
            } else {
                $(".sf-nav").css({'visibility': 'hidden'});
            }

            if (wtop > mdt1) {
                $('.dcHead').css({'position': 'relative'});
                $('.dcBanner').css({'margin-top': '0'});

                $(".sf-nav-a").eq(0).addClass("on").siblings(".sf-nav-a").removeClass("on");

            }
            if (wtop > mdt2) {
                $('.dcHead').css({'position': 'relative'});
                $(".sf-nav-a").eq(1).addClass("on").siblings(".sf-nav-a").removeClass("on");

            }
            if (wtop > mdt3) {
                $('.dcHead').css({'position': 'relative'});
                $(".sf-nav-a").eq(2).addClass("on").siblings(".sf-nav-a").removeClass("on");
            }

            var isExpand = $('#navbar-collapse').attr('aria-expanded');
            if (isExpand == 'true') {
                $('.dcHead').css({'position': 'fixed'});
            } else {
                $('.dcHead').css({'position': 'relative'});
            }
        });
        // 点击内页导航效果
        $(".sf-nav-a").click(function() {
            var inx = $(this).index();
            var lens = mdsz[inx];
            var itop = $(lens).offset().top - navh;

            $("html,body").stop().animate({
                scrollTop: itop
            }, 1000);
        });

        // 带参数进来效果
        var _md = getUrlParam("md");
        if (_md != null) {
            $(".sf-nav-a").eq(_md).click();
        }

        var video = document.getElementById("loadding-video");
        video.addEventListener('ended', function() {
            $(".loadding").fadeOut(500);
            $(".ibody").fadeIn(500);
        }, false);

    });

    window.onresize = function(){
        awardsSwiper.destroy();
        initAwardsSwiper();
    };

    function vkp() {
        var myVideo = document.getElementById('loadding-video');
        myVideo.play();

    }

    // 带参数效果
    function getUrlParam(name){
        var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if (r!=null) return unescape(r[2]); return null;
    }

    function initAwardsSwiper() {
        var clientWidth = $(window).width();
        var slidesPerView = 3;
        if (clientWidth <= 768) slidesPerView = '1.5';
        awardsSwiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            autoplay: 2000, //可选选项，自动滑动
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: slidesPerView,
            coverflow: {
                rotate: 0,
                stretch: 0,
                depth: 300,
                modifier: 1,
                slideShadows : false
            }
        });
    }
</script>


		<footer >
            <div class="dcFooter">
                <div class="footBox">
                    <div class="footImg">
                        <a target="_blank" href="https://hsxx.tmall.com/">
                            <img src="{pboot:sitetplpath}/img/footImg_0.png" />
                        </a>
                        <a class="wechat">
                            <img src="{pboot:sitetplpath}/img/footImg_1.png" />
                            <div class="weChatImg">
                                <img src="{pboot:sitetplpath}/img/scientific/wechat.png" />
                            </div>
                        </a>
                        <a target="_blank" href="https://weibo.com/loveBabyelephant"><img src="{pboot:sitetplpath}/img/footImg_2.png" /></a>
                    </div>
                    <a target="_blank" href="https://beian.miit.gov.cn">
                        <span class="text">上海上美化妆品股份有限公司 沪ICP备 15047150号-2<span>
                    </a>
                    <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31011402001581">
                        <span class="text">
                            <img class="beianImg" src="{pboot:sitetplpath}/img/beian.png" />
                            沪公网安备 31011402001581号
                        <span>
                    </a>
                </div>
            </div>

		</footer>

	</body>

	<script type="text/javascript">
		$(function(){
            var clientWidth = $(window).width();
            if (clientWidth > 768) {
                $(document).off('click.bs.dropdown.data-api');
            } else {
                $(document).on('click.bs.dropdown.data-api');
            }
		})
	</script>

</html>
<?php return array (
  0 => '/data/wwwroot/elephant/template/default/comm/header.html',
  1 => '/data/wwwroot/elephant/template/default/comm/nav.html',
  2 => '/data/wwwroot/elephant/template/default/about/introduce.html',
  3 => '/data/wwwroot/elephant/template/default/about/awards.html',
  4 => '/data/wwwroot/elephant/template/default/about/news.html',
  5 => '/data/wwwroot/elephant/template/default/comm/footer.html',
  6 => '/data/wwwroot/elephant/template/default/comm/nav-pc.html',
  7 => '/data/wwwroot/elephant/template/default/comm/nav-m.html',
); ?>