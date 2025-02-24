var wow = new WOW({
	boxClass: 'wow',
	animateClass: 'animated',
	offset: 150,
	mobile: false,
	live: true
});
wow.init();
$(function() {

	var a = document.querySelector(".navbar-toggle");
	$(".navbar-nav").on("click",function (e) {
		if (e.target.className != 'dropdown-toggle') {
			a.click();
		}
	});

	var clientWidth = $(window).width();
	if (clientWidth > 768) {
		var headH = $('.pcHead').height();
		$('.pcHead .menuListBox').css({ "top": headH});

		var scrollFunc = function (e) {
			e = e || window.event;
			if (e.wheelDelta) { //第一步：先判断浏览器IE，谷歌滑轮事件
				if (e.wheelDelta > 0) { //当滑轮向上滚动时
					$('.menuBox').css({opacity: 1, height: '41px'});
					$('.hSearchBox').css({bottom: '10px'});
				}
				if (e.wheelDelta < 0) { //当滑轮向下滚动时
					$('.menuBox').css({opacity: 0, height: 0});
					$('.hSearchBox').css({bottom: '25px'});
				}
			} else if (e.detail) { //Firefox滑轮事件
				if (e.detail> 0) { //当滑轮向滚动时
					$('.menuBox').css({opacity: 0, height: 0});
					$('.hSearchBox').css({bottom: '25px'});
				}
				if (e.detail< 0) { //当滑轮向下上下滚动时
					$('.menuBox').css({opacity: 1, height: '41px'});
					$('.hSearchBox').css({bottom: '10px'});
				}
			}
		}
		//给页面绑定滑轮滚动事件
		if (document.addEventListener) {//firefox
			document.addEventListener('DOMMouseScroll', scrollFunc, false);
		}
		//滚动滑轮触发scrollFunc方法 //ie 谷歌
		window.onmousewheel = document.onmousewheel = scrollFunc;

		$('.pcHead .hSearch').on('click', function(){
			var pDom = $('.pcHead .hSearchBox');
			if (!pDom.hasClass('on')) {
				pDom.addClass('on');
			} else {
				console.log('搜索');
			}
		});
	} else {
		$('.mCollapse').on('click', function(){
			$('.mSearchContainer').hide();
			if (!$(this).hasClass('on')) {
				$('.mHead').addClass('on');
				$(this).addClass('on').siblings().removeClass('on');
				$('.mCollapseMenuBox').toggle();
			} else {
				$('.mHead').removeClass('on');
				$(this).removeClass('on');
				$('.mCollapseMenuBox').toggle();
			}

		});
		$('.mSearchBox').on('click', function(){
			$('.mCollapseMenuBox').hide();
			if (!$(this).hasClass('on')) {
				$('.mHead').addClass('on');
				$(this).addClass('on').siblings().removeClass('on');
				$('.mSearchContainer').toggle();
			} else {
				$('.mHead').removeClass('on');
				$(this).removeClass('on');
				$('.mSearchContainer').toggle();
			}

		});

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

		$('.mCollapseMenu .dropdownToggle').on('click', function() {
			$(this).siblings('.dropdownMenu').toggle();
		});
	}


});

function setSubNavHeight(obj) {
	var navMaxH = $('.dropdown-pc > .dropdown-menu > li').size() * 34 + 10;
	var subNavMaxH = $(obj).parent().find('.dropdown-menu li').size() * 34 + 10;
	if (navMaxH < subNavMaxH) {
		$('.dropdown-pc > .dropdown-menu').css({'height': subNavMaxH});
		$(obj).parent().find('.dropdown-menu').css({'height': subNavMaxH});
	} else  {
		$('.dropdown-pc > .dropdown-menu').css({'height': navMaxH});
		$(obj).parent().find('.dropdown-menu').css({'height': navMaxH});
	}
}

// 导航效果
function head() {
	var onk = false;

	if ($("header").hasClass("on")) {
		return false
	} else {
		if ($(window).width() > 1025) {
			$("header").hover(function() {
				if (onk) {
					return false
				} else {
					$("header").addClass("on");
				}

			}, function() {
				if (onk) {

				} else {
					$("header").removeClass("on");
				}

			})
		}
	}
}

// 带参数效果
function getUrlParam(name) {
	var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
	var r = window.location.search.substr(1).match(reg);
	if (r != null) return unescape(r[2]);
	return null;
}

// 页面内滚动效果
// a,点击谁， b，滚动到谁的位置上（-减去顶部固定的内容高度）
function sfgd(a, b) {
	var mgtop = $(b).offset().top;
	$(a).click(function() {
		$("html,body").stop().animate({
			scrollTop: mgtop
		}, 1000);
	})
}

// 页内导航定位效果
//a到什么位置，b谁定位添加样式
function sf_nav(a, b) {
	$(window).scroll(function() {
		var wtop = $(window).scrollTop();
		var mgtop = $(a).offset().top;
		if (mgtop < wtop) {
			$("header").hide();
			$(b).addClass("on");
		} else {
			$(b).removeClass("on");
			$("header").show();
		}
	});
}
