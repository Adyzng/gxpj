function js_gxpj() {

	return {
		initNavMenu: function(curIdx) {
			var ptop = $('.nav_menu ul').offset().top;
			var menuLst = $('.nav_menu ul').children();
			var $curOffset = null;

			console.log('curIdx : ' + curIdx);
			console.log('li len : ' + menuLst.length);

			if (curIdx >= menuLst.length) {
				curIdx = menuLst.length - 1;
			} else if (curIdx < 0) {
				$curOffset = null;
			} else {
				$curOffset = $(menuLst[curIdx]).offset();
			};


			if (curIdx < 0) {
				$('#lanPos').hide();
			} else {
				$('#lanPos').css('top', $curOffset.top - ptop)
					.show();
			}


			$('.nav_menu ul li').each(function(i, o) {
				if (curIdx == i) {
					$(o).children('a').addClass('m_nav_hover');
				} else {
					$(o).children('a').removeClass('m_nav_hover');
				}
			});


			$('.nav_menu ul li').hover(function() {
				$('#lanPos').css('top', $(this).offset().top - ptop);
			}, function() {
				if (curIdx < 0) {
					$('#lanPos').hide();
				} else {
					$('#lanPos').css('top', $curOffset.top - ptop);
				}
			})

			/*
			$('.nav_menu ul li').click(function() {
				var curLi = this;
				$('.nav_menu ul li').each(function(i, o) {
					if (curLi == o) {
						$(o).children('a').addClass('m_nav_hover');
					} else {
						$(o).children('a').removeClass('m_nav_hover');
					}
				})
			})
			*/
		},

		initToTop: function() {
			var $backTop = this.$backTop = $(
				'<div class="gxpjfixed">' +
					'<a class="gotop gxtn" title="返回顶部">' +
						'<span class="up-icon"></span>' +
					'</a>' +
				'</div>');

			$('body').append($backTop);

			$backTop.click(function() {
				$("html, body").animate({
					scrollTop: 0
				}, 500);
			});

			var timmer = null;
			$(window).bind("scroll", function() {
				var d = $(document).scrollTop(),
					e = $(window).height();
				0 < d ? $backTop.css("bottom", "10px") : $backTop.css("bottom", "-90px");
				clearTimeout(timmer);
				timmer = setTimeout(function() {
					clearTimeout(timmer)
				}, 500);
			});
		}
	}
}