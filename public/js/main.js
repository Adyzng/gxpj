function js_menu() {

	return {
		initNavMenu: function(curIdx) {
			var ptop = $('.nav_menu ul').offset().top;
			var menuLst = $('.nav_menu ul').children();

			if (curIdx >= menuLst.length) {
				curIdx = menuLst.length - 1;
			}

			var curOffset = $(menuLst[curIdx]).offset();
			$(menuLst).each(function(i, o) {
				if (curIdx == i) {
					$(o).children('a').addClass('m_nav_hover');
				} else {
					$(o).children('a').removeClass('m_nav_hover');
				}
			});


			$('#lanPos').css('top', curOffset.top - ptop)
						.show();

			$('.nav_menu ul li').hover(function() {
				$('#lanPos').css('top', $(this).offset().top - ptop);
			}, function() {
				$('#lanPos').css('top', curOffset.top - ptop);
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
		}
	}
}