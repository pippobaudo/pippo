
		$(document).ready(function(){
			$('a[rel*=facebox]').click(function(){
				$('.box_info_user').css('display', 'none');
				var id = $(this).attr('href');
				$(id).css('display', 'block');
			});
			
			$('.close').click(function(){
//				$('.box_info_user').css('display', 'none');
				$('.box_info_user').fadeOut(1000);
			});
			
			$('.take_a_tour').click(function(){
				top.location.href = 'take-a-feature-tour.html';
			});
/*
			$('a[rel*=facebox]').facebox({
	        	loadingImage : 'js/mylibs/facebox/loading.gif',
	        	closeImage   : 'js/mylibs/facebox/closelabel.png'
	      })
	*/
		});