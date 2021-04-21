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


<link rel="stylesheet" href="{pboot:sitetplpath}/css/index.css?32" />
<link rel="stylesheet" href="{pboot:sitetplpath}/css/animate.css?30" />
<link rel="stylesheet" href="{pboot:sitetplpath}/css/mCustomScrollbar.css?30" />

<script type="text/javascript" src="{pboot:sitetplpath}/js/wow.min.js"></script>
<script type="text/javascript" src="{pboot:sitetplpath}/js/adaptive-version2.js"></script>
<script type="text/javascript" src="{pboot:sitetplpath}/js/mCustomScrollbar.js"></script>

<script>
	window['adaptive'].desinWidth = 750;
	window['adaptive'].init();
</script>

<style>
	@media (max-width: 768px) {
		.navbar-brand > .logoImg{background-image: url({pboot:sitetplpath}/img/logo_light.png);}
	}
</style>


<div class="dcWrap">

	<!-- nav start -->
	
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
	<!-- nav stop -->

	<!-- banner start -->
	<!--PC端使用-->
<div class="swiper-container ibanner ibanner-pc por swiper-container-horizontal">

    <div class="wfull-video">
        <div class="full-video">
            <video id="loadding-video" muted="" autoplay="" src="{pboot:sitetplpath}/img/index/video-pc.mp4"></video>
        </div>
    </div>
    <div class="swiper-wrapper">

        {pboot:list scode=1 filter=isheadline|1}
        <div class="swiper-slide" style="background-image: url([list:ext_banner]); width: 100%;"
             data-swiper-slide-index="[list:scode]">
            <a href="[list:link]">
                <div class="ibanner-div">
                    <div class="iban-d1"></div>
                    <div class="iban-d2"></div>
                </div>
            </a>
        </div>
        {/pboot:list}

    </div>
<!--    <div class="sf-ban-cli"></div>-->
</div>
<div class="w1750 ibanner-span-cont">
    <div class="swiper-pagination ibanner-span ibanner-span-pc swiper-pagination-clickable swiper-pagination-bullets"  style="display: none;">

<!--        <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>-->
<!--        <span class="swiper-pagination-bullet"></span>-->
<!--        <span class="swiper-pagination-bullet"></span>-->

        {pboot:list scode=1  filter=isheadline|1}
        <span class="swiper-pagination-bullet {pboot:if('[nav:scode]'=='{sort:tcode}')}swiper-pagination-bullet-active{/pboot:if}"></span>
        {/pboot:list}

    </div>
</div>


<!--手机端使用-->
<div class="wfull-video1 ibanner-m swiper-container-horizontal">
    <div class="full-video">
        <video id="loadding-video" muted="" autoplay="" loop="" playsinline="" onplay="this.style.opacity = 1;" src="{pboot:sitetplpath}/img/index/video-m.mp4" poster=""></video>
    </div>
</div>
<div class="swiper-container ibanner ibanner-m swiper-container-horizontal">
    <div class="swiper-wrapper">

        {pboot:list scode=1 filter=isheadline|1}
        <div class="swiper-slide" style="background-image: url([list:ext_banner]);">
            <a href="[list:link]">
                <div class="ibanner-div"></div>
            </a>
        </div>
        {/pboot:list}

    </div>
<!--    <div class="sf-ban-cli"></div>-->
</div>


<div class="w1750 ibanner-span-cont ibanner-span-cont-m">
    <div class="swiper-pagination ibanner-span ibanner-span-m swiper-pagination-clickable swiper-pagination-bullets">
        {pboot:list scode=1  filter=isheadline|1}
        <span class="swiper-pagination-bullet {pboot:if('[nav:scode]'=='{sort:tcode}')}swiper-pagination-bullet-active{/pboot:if}"></span>
        {/pboot:list}
    </div>
</div>

	<!-- banner stop -->

	<!-- recommend start -->
	<div class="mainProductBox wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
    <div class="mainProductCon">
        <div class="titleBox clearfix">
            <div class="title" style="text-align: center;">主推系列</div>
        </div>
        <div class="swiper-container productSwiper" id="product">
            <div class="swiper-wrapper">

                {pboot:list scode=1 filter=isrecommend|1 order='sorting asc'}
                <div class="swiper-slide" style="background-image:url([list:ext_bg_img]);">
                    <a href="[list:link]" style="display: block;">
                        <div class="product-recommend-img">
                            <img class="swiperProduct" src="[list:ext_pic]"/>
                        </div>
                        <div class="product-recommend-txt">
                            <span class="swiperText">[list:sortname]</span>
                        </div>
                    </a>
                </div>
                {/pboot:list}
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <img id="leftarrow" class="arrowBtn" src="{pboot:sitetplpath}/img/index/leftarrow.png" />
        <img id="rightarrow" class="arrowBtn" src="{pboot:sitetplpath}/img/index/rightarrow.png" />
    </div>
</div>

<style>
    .productSwiper .swiper-slide {
        width: 30%;
        -moz-background-size:100% 100%;
        background-size:100% 100%;
    }
    .product-recommend-img {
        overflow: hidden;
        text-align: center;
    }
    .product-recommend-img img{
        padding: 10% 13% 16% 13%;
        transition: all .3s;
        -webkit-transition: all .3s;
    }

    .productSwiper .swiper-slide:hover .product-recommend-img img {
        transform: scale(1.08);
        transition: all .3s;
        -webkit-transition: all .3s;
    }
</style>

	<!-- recommend stop -->

	<!-- recommend video start -->
	<div class="videoBox hidden">
		<video id="myVideo" class="myvideo" src="{pboot:sitetplpath}/img/index/video.mp4" poster="{pboot:sitetplpath}/img/index/video.png"
			   x5-playsinline="" playsinline="true" webkit-playsinline="true" x-webkit-airplay="true"
			   x5-video-player-type="h5" x5-video-player-fullscreen="" x5-video-orientation="portraint"
			   autoplay="" loop="" muted="muted">您的浏览器不支持 video 标签。</video>
	</div>
	<!-- recommend video stop  -->

	<!-- scientific start -->
	<div class="scientificCenterBox wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
    <div class="row">
        <div class="col-lg-8 col-xs-12 col-sm-8">
            <div class="scientificInfo">
                <div class="title">科研中心</div>
                <div class="description">截至2020年8月，上美集团已获得专利188项；<br />日本和中国研发团队共开发日本医药部外品35个，韩国功能性化妆品（美白、抗衰老）11个<br />与全球高等学府、科研机构展开联动，自主形成多项核心化妆品研发配方与工艺</div>
                <div class="detailBox">
                    <div class="row">
                        <div class="col-lg-4 col-xs-6">
                            <div class="detailTitle"><span class="num">188</span> 项</div>
                            <div class="detailLabel">获得专利</div>
                        </div>
                        <div class="col-lg-4 col-xs-6">
                            <div class="detailTitle"><span class="num">35</span> 个</div>
                            <div class="detailLabel">日本医药部外品</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-xs-12 col-sm-4">
            <img class="scientificImg" src="{pboot:sitetplpath}/img/index/scientificPic.png" />
        </div>
    </div>
</div>
	<!-- scientific stop -->

</div>

<script type="text/javascript">
	var mySwiper;
	$(function() {
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

		var _md = getUrlParam("md");
		if (_md == 0) {
			$(".ibody").css("top", "0");
			$(".loadding").hide();
		} else {
			var winw = $(window).width();
			if (winw > 1024) {
				var userAgent = navigator.userAgent; // 谷歌浏览器不能自动播放，需要有交互事件，判断为谷歌浏览器，执行其他方式。
				if (userAgent.indexOf("Chrome") > -1) {
					$(".loadding-a").show();
					$(".loadding").click(function() {
						vkp();
						$(".loadding-a").fadeOut();
					})

				} else {
					vkp();
				}
			}
		}

		window.onresize = function(){
			var clientWidth = $(window).width();
			if (clientWidth > 768) {
				$(document).off('click.bs.dropdown.data-api');
				$('.videoBox').removeClass('hidden');
			} else {
				$(document).on('click.bs.dropdown.data-api', function(){
					var isExpand = $('#navbar-collapse').attr('aria-expanded');
					if (isExpand == 'true') {
						$('.navbar-header').css({'background-color': '#ffffff'});
						$('.dcHead .navbar-brand > .logoImg').css({'background-image': 'url({pboot:sitetplpath}/img/logo_red.png)', "display": 'block'});
						$('.navbar-default .navbar-toggle .icon-bar').css({'background-color': '#888'});
					} else {
						$('.navbar-header').css({'background-color': ''});
						$('.dcHead .navbar-brand > .logoImg').css({'background-image': 'url({pboot:sitetplpath}/img/logo_light.png)', "display": 'none'});
						$('.navbar-default .navbar-toggle .icon-bar').css({'background-color': '#fff'});
					}
				});
				$('.videoBox').addClass('hidden');
				$('#myVideo').stop().hide(0);
			}

			var _md = getUrlParam("md");
			if (_md == 0) {
				$(".ibody").css("top", "0");
				$(".loadding").hide();
			} else {
				var winw = $(window).width();
				if (winw > 1024) {
					var userAgent = navigator.userAgent; // 谷歌浏览器不能自动播放，需要有交互事件，判断为谷歌浏览器，执行其他方式。
					if (userAgent.indexOf("Chrome") > -1) {
						$(".loadding-a").show();
						$(".loadding").click(function() {
							vkp();
							$(".loadding-a").fadeOut();
						})

					} else {
						vkp();
					}
				}
			}

			mySwiper.destroy();
			initProductSwiper();

			setTimeout(function() {
				$(".wfull-video").stop().hide(0);
				$('.ibanner-span-cont .swiper-pagination').show();
				var myiban = new Swiper('.ibanner-pc', {
					pagination: '.ibanner-span-pc',
					loop: true,
					autoplayDisableOnInteraction: false,
					paginationClickable: true,
					speed: 800,
					autoplay: 4000
				});
			}, 5000)
		}
		window.onload = function() {
			setTimeout(function() {
				$(".wfull-video").stop().hide(0);
				$('.ibanner-span-cont .swiper-pagination').show();
				var myiban = new Swiper('.ibanner-pc', {
					pagination: '.ibanner-span-pc',
					loop: true,
					autoplayDisableOnInteraction: false,
					paginationClickable: true,
					speed: 800,
					autoplay: 4000
				});
			}, 5000)


		}

		var myiban = new Swiper('.ibanner-m', {
			pagination: '.ibanner-span-m',
			loop: true,
			autoplayDisableOnInteraction: false,
			paginationClickable: true,
			speed: 800,
			autoplay: 4000
		});

		var video = document.getElementById("loadding-video");
		video.addEventListener('ended', function() {
			$(".loadding").fadeOut(500);
			$(".ibody").fadeIn(500);
		}, false);

		// initBannerSwiper();

		// $('#productMenu .menuItem').on('click', function(){
		// 	$(this).addClass('active').siblings().removeClass('active');
		// 	var key = $(this).attr('data-key');
		// 	var len = $('#product').find('.swiper-slide').length;
		// 	$('#product').find('.swiper-slide').each(function(index, item){
		// 		if (index >= (key * 4) && index <= (key * 4 + 3)) {
		// 			$(item).show();
		// 		}  else {
		// 			$(item).hide();
		// 		}
		// 	})
		// 	initProductSwiper();
		// })

		// initProduct();
		initProductSwiper();
	})

	function initProduct() {
		var key = 0;
		$('#productMenu .menuItem').eq(0).addClass('active').siblings().removeClass('active');
		var len = $('#product').find('.swiper-slide').length;
		$('#product').find('.swiper-slide').each(function(index, item){
			if (index >= (key * 4) && index <= (key * 4 + 3)) {
				$(item).show();
			}  else {
				$(item).hide();
			}
		})
		initProductSwiper();
	}
	function vkp() {
		var myVideo = document.getElementById('loadding-video');
		myVideo.play();

	}

	// banner轮播
	function initBannerSwiper() {
		var mySwiper = new Swiper('#banner', {
			autoplay: 5000, //可选选项，自动滑动
			pagination: '.swiper-pagination',
			loop: true,
		})
	}

	function initProductSwiper() {
		var clientWidth = $(window).width();
		var slidesPerView = 3;
		if (clientWidth <= 768) slidesPerView = '1.2';
		mySwiper = new Swiper('#product', {
			autoplay: 5000, //可选选项，自动滑动
			loop: true,
			slidesPerView: slidesPerView,
			spaceBetween: 24,
			prevButton: '#leftarrow',
			nextButton: '#rightarrow',
		})
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
  0 => '/data/wwwroot/elephant/template/default/comm/header.html',
  1 => '/data/wwwroot/elephant/template/default/comm/nav-common.html',
  2 => '/data/wwwroot/elephant/template/default/index/banner.html',
  3 => '/data/wwwroot/elephant/template/default/index/recommend.html',
  4 => '/data/wwwroot/elephant/template/default/index/scientific.html',
  5 => '/data/wwwroot/elephant/template/default/comm/footer.html',
  6 => '/data/wwwroot/elephant/template/default/comm/nav-pc.html',
  7 => '/data/wwwroot/elephant/template/default/comm/nav-m.html',
); ?>