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

<link rel="stylesheet" href="{pboot:sitetplpath}/css/animate.css?20210310" />
<link rel="stylesheet" href="{pboot:sitetplpath}/css/style.css?20210310" />

<script type="text/javascript" src="{pboot:sitetplpath}/js/wow.min.js"></script>
<script type="text/javascript" src="{pboot:sitetplpath}/js/adaptive-version2.js"></script>

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

    <div class="dcBanner">
        <div class="bannerImgBox">
            <img class="bannerImg" src="{pboot:sitetplpath}/img/scientific/banner.png" />
        </div>
    </div>
    <div class="mainTeamBox wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
        <div class="mainTeamCon">
            <div class="titleBox clearfix">
                <div class="title">国际化科研团队</div>
                <div class="btnBox">
                    <img id="leftarrow" class="arrowBtn arrowLeft" src="{pboot:sitetplpath}/img/index/leftarrow.png" />
                    <img id="rightarrow" class="arrowBtn arrowRight" src="{pboot:sitetplpath}/img/index/rightarrow.png" />
                </div>
            </div>
            <div class="swiper-container teamSwiper" style="padding: 0 10px;" id="team">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="teamItem">
                            <img class="swiperTeam" src="{pboot:sitetplpath}/img/scientific/ky_0.png?1" />
                            <div class="textBox">
                                <span class="title">胡新成</span>
                                <span class="subTitle">上美全球研发中心总监</span>
                                <span class="description animated">日本大阪店立大学博士，拥有25年日化及彩妆研发经验。曾任宝洁护肤研发总监，成功建立了宝洁亚洲护肤技术团队，为我国民族化妆品培养了众多研发骨干人才。</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="teamItem">
                            <img class="swiperTeam" src="{pboot:sitetplpath}/img/scientific/ky_1.png?1" />
                            <div class="textBox">
                                <span class="title">ROBERT BAO HA</span>
                                <span class="subTitle">上美全球研发中心 首席科学家</span>
                                <span class="description">1988年加入宝洁集团，2011-2018年任职宝洁（美国）首席科学家，主攻功效成分的配方运用、配方机理研究等方向，曾获10项美国专利。</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="teamItem">
                            <img class="swiperTeam" src="{pboot:sitetplpath}/img/scientific/ky_2.png?1" />
                            <div class="textBox">
                                <span class="title">谷口 登志也</span>
                                <span class="subTitle">日本神户研究所首席彩妆工程师</span>
                                <span class="description">服务宝洁30年，为蜜丝佛陀、SK-II 、Cover girl等品牌打造备受全球欢迎的粉底液，曾主导研发令宝洁引以为傲的SEC专利，至今无人超越。</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="teamItem">
                            <img class="swiperTeam" src="{pboot:sitetplpath}/img/scientific/ky_3.png?1" />
                            <div class="textBox">
                                <span class="title">山田 耕作</span>
                                <span class="subTitle">日本神户研究所首席护肤研究员</span>
                                <span class="description">日本薬剤師，一生在宝洁致力于高端护肤和彩妆的研究开发，成功推出备受世界瞩目的SK-II和蜜丝佛陀产品，拥有防晒等技术专利。</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="teamItem">
                            <img class="swiperTeam" src="{pboot:sitetplpath}/img/scientific/ky_4.png?1" />
                            <div class="textBox">
                                <span class="title">付 さん</span>
                                <span class="subTitle">日本神户研究所所长</span>
                                <span class="description">日本东京工业大学博士，宝洁进入亚太地区后美白领域第一代配方师，曾任宝洁技术总监、联合利华全球总监，多次荣获全球技术创新大奖。</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="scientificCenterBox scientificDetailBox wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
        <div class="scientificInfo">
            <div class="detailBox scientificDetail clearfix">
                <div class="detailItem">
                    <img class="detailIcon" src="{pboot:sitetplpath}/img/scientific/icon_1.png?1" />
                    <div class="detailTitle"><span class="num">188</span> 项</div>
                    <div class="detailLabel">获得专利</div>
                </div>
                <div class="detailItem">
                    <img class="detailIcon" src="{pboot:sitetplpath}/img/scientific/icon_2.png?1" />
                    <div class="detailTitle"><span class="num">35</span> 个</div>
                    <div class="detailLabel">日本医药部外品</div>
                </div>
            </div>
        </div>
    </div>

    <div class="addressInfoBox">
        <div class="addressInfoCon">
            <div class="infoItem wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="addressiImgBox">
                    <img src="{pboot:sitetplpath}/img/scientific/a_1.png" />
                </div>
                <div class="addressInfo">
                    <img class="markIcon" src="{pboot:sitetplpath}/img/scientific/n_1.png?1" />
                    <div class="title">上海奉贤</div>
                    <div class="description">即上海中翊日化有限公司，系上美的主力工厂。其位于上海市奉贤区，是上美旗下设备先进、自动化、体系化的产研基地，致力于成为智慧核心工厂。目前，工厂一期已正式投产，日设计产能120万瓶。二期竣工后，一二期占地面积达150亩。</div>
                </div>

            </div>
            <div class="infoItem wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="addressiImgBox p2">
                    <img src="{pboot:sitetplpath}/img/scientific/a_2.png" />
                </div>
                <div class="addressInfo p2">
                    <img class="markIcon" src="{pboot:sitetplpath}/img/scientific/n_2.png?1" />
                    <div class="title">日本冈山</div>
                    <div class="description">日本冈山生产基地是上美旗下高端的纯日本制造工厂，其位于环境绝佳的冈山县胜央工业园区。工厂配备了日本高品质的内料制造机器，坚持日本配方、原料直采。同时，冈山工厂距上美神户科研中心仅2小时车程，实现高效率的研产一体，代表着日本化妆品制造的生产标准。</div>
                </div>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">
    var mySwiper;
    $(function(){
        var clientWidth = $(window).width();
        if (clientWidth > 768) {
            $(document).off('click.bs.dropdown.data-api');
        } else {
            $(document).on('click.bs.dropdown.data-api');
        }

        initProductSwiper();
    })

    window.onresize = function(){
        mySwiper.destroy();
        initProductSwiper();
    }

    function initProductSwiper() {
        var clientWidth = $(window).width();
        var slidesPerView = 4;
        var spaceBetween = 40;
        if (clientWidth <= 768) {
            slidesPerView = '2';
            spaceBetween = 24;
        }
        mySwiper = new Swiper('#team', {
            autoplay: 5000, //可选选项，自动滑动
            loop: true,
            slidesPerView: slidesPerView,
            spaceBetween: 40,
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

</html><?php return array (
  0 => '/data/wwwroot/default/template/default/comm/header.html',
  1 => '/data/wwwroot/default/template/default/comm/nav.html',
  2 => '/data/wwwroot/default/template/default/comm/footer.html',
  3 => '/data/wwwroot/default/template/default/comm/nav-pc.html',
  4 => '/data/wwwroot/default/template/default/comm/nav-m.html',
); ?>