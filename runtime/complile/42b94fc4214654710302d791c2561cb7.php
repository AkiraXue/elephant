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
		<link rel="stylesheet" href="{pboot:sitetplpath}/css/public.css?26" />
		<link rel="stylesheet" href="{pboot:sitetplpath}/css/main.css?26" />
		<link rel="stylesheet" href="{pboot:sitetplpath}/css/media.css?26" />
		<link rel="stylesheet" href="{pboot:sitetplpath}/css/style.css?26" />
		<script type="text/javascript" src="{pboot:sitetplpath}/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="{pboot:sitetplpath}/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="{pboot:sitetplpath}/js/swiper.min.js"></script>
		<script type="text/javascript" src="{pboot:sitetplpath}/js/wow.min.js"></script>
		<script type="text/javascript" src="{pboot:sitetplpath}/js/main.js"></script>
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


<div class="dcWrap">

    <script type="text/javascript" src="{pboot:sitetplpath}/js/main.js"></script>

<div class="dcHead">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">切换导航</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{pboot:sitepath}/">
					<div class="logoImg"></div>
				</a>
			</div>
			<div class="navbar-left leftcollapse">
				<div class="navbar-collapse collapse" id="navbar-collapse">
					<ul class="nav navbar-nav">

						<li class="dropdown-m"><a href="{pboot:sitepath}/stars">明星产品</a></li>
						<li class="dropdown dropdown-pc">
							<a href="{pboot:sitepath}/stars" class="dropdown-toggle" data-toggle="dropdown">
								明星产品
							</a>
							<ul class="dropdown-menu">
								{pboot:nav parent=1}
								<li class="dropdown dropdown-menu-parent">
									<a class="dropdown-toggle" href="[nav:link]?md=[nav:scode]" data-toggle="dropdown">
										[nav:name]
										 <i class="fa fa-angle-right pull-right"></i>
									</a>
									<ul class="dropdown-menu dropdown-menu-child" data-scode="[nav:scode]">
										{pboot:2nav parent=[nav:scode]}
										<li><a href="[2nav:link]?md=[nav:scode]&nd=[2nav:scode]">[2nav:name]</a></li>
										{/pboot:2nav}
									</ul>
								</li>
								{/pboot:nav}

							</ul>
						</li>


						<li class=""><a href="{pboot:sitepath}/scientificCenter">科研中心</a></li>

						<li class="dropdown-m"><a href="{pboot:sitepath}/about">关于小象</a></li>
						<li class="dropdown dropdown-pc">
							<a href="{pboot:sitepath}/about" class="dropdown-toggle" data-toggle="dropdown">
								关于小象
							</a>
							<ul class="dropdown-menu">
								{pboot:nav parent=3}
								<li><a href="{pboot:sitepath}/about?md=[nav:n]">[nav:name]</a></li>
								{/pboot:nav}
							</ul>
						</li>

						<li class="">
							<a target="_blank" href="https://hsxx.tmall.com/search.htm?spm=a220m.1000858.1000725.3.d6e376771Mxb9u&user_number_id=2707252427&rn=874a5afc4a37c3f4595a655d6f24033d&keyword=%BA%EC%C9%AB%D0%A1%CF%F3">
								天猫旗舰店
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="navbar-right searchBox">
				<form action="{pboot:scaction}"  method="get">
					<input class="searchInput" type="text" name="title" placeholder="搜索你喜欢的产品" />
					<i class="searchIcon fa fa-search"></i>
				</form>
			</div>
		</div>
	</nav>

</div>

    <div class="dcMenu">
    <div class="menuTitle">明星产品</div>
    <div class="menuListBox product-a wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">

        {pboot:nav parent=1}
        <ul class="menuList">
            <li class="listTitle">[nav:name]</li>
            {pboot:2nav parent=[nav:scode]}
            <li class="{pboot:if('[2nav:scode]'=='{sort:scode}')}active{/pboot:if}">
                <a href="[2nav:link]">[2nav:name]</a>
            </li>
            {/pboot:2nav}
        </ul>
        {/pboot:nav}
    </div>
</div>

<script type="text/javascript">
    $(function() {
        // 点击分类刷新内容
        $(".menuList li:not('.listTitle')").click(function() {
            $('.menuListBox').find("li:not('.listTitle')").removeClass("active");
            $(this).addClass("active");

            var itop = $(".product-b").offset().top;
            $("html,body").stop().animate({
                scrollTop: itop
            }, 1000);
        });

        var _md = getUrlParam("md");
        var _nd = getUrlParam("nd");
        if (_md != null && _nd != null) {
            $('.menuListBox').find('.menuList').eq(_md)
                .find("li:not('.listTitle')").eq(_nd).addClass('active');

            var itop = $(".product-b").offset().top;
            $("html,body").stop().animate({
                scrollTop: itop
            }, 1000);
        }
    });

    // 带参数效果
    function getUrlParam(name){
        var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if (r!=null) return unescape(r[2]); return null;
    }
</script>


    <div class="product-b">
        <div class="w1200">
            <ul class="product-b-ul">
                {pboot:list num=24 page=1}
                <li>
                    <a href="[list:link]" target="_blank">
                        <div class="product-b1">
                            <img src="[list:ico]" alt="​[list:subtitle]">
                        </div>
                        <div class="product-b2">
                            <div class="product-b2-a">​[list:title]</div>
                        </div>
                    </a>
                </li>
                {/pboot:list}

            </ul>

            <div class="page">
                {pboot:if({page:count} > 1)}
<div class="pagination">

    {pboot:2if(({page:current} > 2) && ({page:count} > 5))}
    <a class="first-page" href="{page:index}" data-href="{page:index}">&nbsp;</a>
    {/pboot:2if}

    {pboot:2if(({page:current} > 1) && ({page:count} > 4))}
    <a class="prev" href="{page:pre}" data-href="{page:pre}">&nbsp;</a>
    {/pboot:2if}

<!--    <a class="active" href="javascript:void(0)" data-href="#">{page:current}</a>-->

    {page:numbar}

    {pboot:2if(({page:current} < ({page:count} - 1)) && ({page:count} > 4))}
    <a class="next" href="{page:next}" data-href="{page:next}">&nbsp;</a>
    {/pboot:2if}

    {pboot:2if(({page:current} < ({page:count} - 2)) && ({page:count} > 5))}
    <a class="last-page" href="{page:last}" data-href="{page:last}">&nbsp;</a>
    {/pboot:2if}
</div>


<script>
    $(function() {
        $('.page-num-current').addClass('active');
    });
</script>

{/pboot:if}


            </div>
        </div>

    </div>

</div>


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
  2 => '/data/wwwroot/default/template/default/product/menu.html',
  3 => '/data/wwwroot/default/template/default/comm/page.html',
  4 => '/data/wwwroot/default/template/default/comm/footer.html',
); ?>