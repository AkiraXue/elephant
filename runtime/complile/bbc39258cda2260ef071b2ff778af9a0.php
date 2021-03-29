<!DOCTYPE html>
<html>
	<head>
		<title>{pboot:pagetitle}</title>
		<meta charset="utf-8">
		<meta name="renderer" content="webkit" />
		<meta name="force-rendering" content="webkit" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
		<meta name="keywords" content="{pboot:pagekeywords}">
		<meta name="description" content="{pboot:pagedescription}">
		<link rel="stylesheet" href="{pboot:sitetplpath}/css/bootstrap.min.css" />
		<link rel="stylesheet" href="{pboot:sitetplpath}/css/font-awesome.min.css" />
		<link rel="stylesheet" href="{pboot:sitetplpath}/css/swiper.min.css" />
		<link rel="stylesheet" href="{pboot:sitetplpath}/css/public.css?31" />
		<link rel="stylesheet" href="{pboot:sitetplpath}/css/main.css?34" />
		<link rel="stylesheet" href="{pboot:sitetplpath}/css/media.css?31" />
		<link rel="stylesheet" href="{pboot:sitetplpath}/css/style.css?32" />
		<script type="text/javascript" src="{pboot:sitetplpath}/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="{pboot:sitetplpath}/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="{pboot:sitetplpath}/js/swiper.min.js"></script>
		<script type="text/javascript" src="{pboot:sitetplpath}/js/wow.min.js"></script>
		<script type="text/javascript" src="{pboot:sitetplpath}/js/main.js?1"></script>
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

<link rel="stylesheet" href="{pboot:sitetplpath}/css/animate.css?24" />
<link rel="stylesheet" href="{pboot:sitetplpath}/css/style.css?24" />

<div class="dcWrap">

    
<!-- nav pc start -->
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
                <li class="menuItem productMenu">
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
                <li class="menuItem">
                    <a  href="{pboot:sitepath}/scientificCenter">科研中心</a>
                </li>
                <li class="menuItem dropdown">
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

        $('.menuTitle').on('click', function () {
            $('.mHead').addClass('on');
        });

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
            <li class=""><a href="{pboot:sitepath}/stars">明星产品</a></li>
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
                    <img src="img/search_d.png" />
                </div>
            </form>
        </div>
    </div>

</div>
<!-- nav mobile stop -->


    <div class="productInfoBox clearfix">
        <div class="infoLeft proinfo-a">
            <ul class="breadcrumb">
                <li><a href="/">首页</a></li>
                <li><a href="{pboot:sitepath}/stars">明星产品</a></li>
                <li class="active">产品详情</li>
            </ul>
            <div class="productImgBox wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;padding: 0 20px 48px;">
                <img class="proinfo-a1" src="{content:ico}">
                <div class="proinfo-a2">
                    <div class="swiper-container proinfo-swiper swiper-container-horizontal">
                        <div class="swiper-wrapper">
<!--                            swiper-slide-active-->
<!--                            swiper-slide-next-->
                            {pboot:if({content:ispics})}
                            {pboot:pics id={content:id} }
                            <div class="swiper-slide swiper-slide-img" style="width: 92px; margin-right: 20px;">
                                <img src="[pics:src]" />
                            </div>
                            {/pboot:pics}
                            {/pboot:if}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="infoRight proinfo-b wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;" style="padding-bottom: 30px;">
            <div class="proinfo-b1">{content:title}</div>
            <div class="proinfo-b2">
                <p>
                    <span style="font-family: arial, helvetica, sans-serif; font-size: 16px;">
                    {content:content}
                    </span>
                    <br>
                </p>
            </div>
            <div class="proinfo-b3">

                {pboot:if("{content:ext_ml}")}
                <p class="volume"><span style="opacity: 0.7;">容量：<i class="volumeNum">{content:ext_ml}</i> <i class="originPrice deleteLine">{content:ext_current_ml}</i></span></p>
                {/pboot:if}

                <p class="price"><span style="opacity: 0.7;">价格：<i class="priceNum">￥{content:ext_price}</i> <i class="originPrice deleteLine">{content:ext_origin_price}</i></span></p>
            </div>
            <div class="btn"><a href="{content:ext_tmall_link}">立即购买 - {content:ext_price}</a></div>
        </div>
    </div>

    <div class="mainProductBox productListBox otherProductBox" style="padding-top: 30px;">
        <div class="mainProductCon">
            <div class="titleBox clearfix">
                <div class="title">猜你喜欢</div>
                <div class="btnBox">
                    <img id="leftarrow" class="arrowBtn" src="{pboot:sitetplpath}/img/index/leftarrow.png" />
                    <img id="rightarrow" class="arrowBtn" src="{pboot:sitetplpath}/img/index/rightarrow.png" />
                </div>
            </div>
            <div class="swiper-container productSwiper" id="product">
                <div class="swiper-wrapper">

                    {pboot:list scode=1}
                    <div class="swiper-slide">
                        <a href="[list:link]">
                            <div class="productItem">
                                <img class="productImg" src="[list:ico]" />
                                <div class="productInfo">
                                    <span class="text">​[list:title]</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    {/pboot:list}

                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">
    var mySwiper;

    $(function() {
        var clientWidth = $(window).width();
        initProductSwiper();
        var aH = $('.proinfo-a').height();
        var bH = 0;
        if (clientWidth > 768) {
            bH = $('.proinfo-b').height() + 200;
        } else {
            bH = $('.proinfo-b').height() + 60;
        }
        if (aH < bH) {
            $('.proinfo-a').height(bH);
        }

        // banner轮播
        var myiban = new Swiper('.proinfo-swiper', {
            autoplayDisableOnInteraction: false,
            paginationClickable: true,
            slidesPerView: 5,
            spaceBetween: 20,
            breakpoints: {
                767: {
                    slidesPerView: 4,
                    spaceBetween: 10
                }
            }

        });

        //切换图片
        $(".swiper-slide-img img").on('click', function() {
            var imgs = $(this).attr("src");
            console.log('imgs => ' + imgs);
            $(".proinfo-a1").attr("src", imgs);
        });
    });


    window.onresize = function(){
        mySwiper.destroy();
        initProductSwiper();
    };

    function initProductSwiper() {
        var clientWidth = $(window).width();
        var slidesPerView = 4;
        if (clientWidth <= 768) slidesPerView = '2';
        mySwiper = new Swiper('#product', {
            autoplay: 5000, //可选选项，自动滑动
            loop: true,
            slidesPerView: slidesPerView,
            spaceBetween: 24,
            prevButton:'#leftarrow',
            nextButton:'#rightarrow',
        })
    }
</script>


		<footer >
            <div class="dcFooter">
                <div class="footBox">
                    <div class="footImg">
                        <a href="#"><img src="{pboot:sitetplpath}/img/footImg_0.png" /></a>
                        <a href="#"><img src="{pboot:sitetplpath}/img/footImg_1.png" /></a>
                        <a href="#"><img src="{pboot:sitetplpath}/img/footImg_2.png" /></a>
                    </div>
                    <a target="_blank" href="https://beian.miit.gov.cn">
                        <span class="text">上海上美化妆品有限公司版权所有 沪ICP备 15047150号-2<span>
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
  0 => '/data/wwwroot/default/template/default/comm/header.html',
  1 => '/data/wwwroot/default/template/default/comm/nav.html',
  2 => '/data/wwwroot/default/template/default/comm/footer.html',
  3 => '/data/wwwroot/default/template/default/comm/nav-pc.html',
  4 => '/data/wwwroot/default/template/default/comm/nav-m.html',
); ?>