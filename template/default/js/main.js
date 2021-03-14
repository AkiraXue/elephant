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
});

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
