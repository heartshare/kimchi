/*
	Background Stretcher jQuery Plugin
	� 2009 ajaxBlender.com
	For any questions please visit www.ajaxblender.com 
	or email us at support@ajaxblender.com
	
	Version: 1.2
*/
jQuery.noConflict();
;(function(jQuery){
	/*  Variables  */
	var container = null;
	var allImgs = '', allLIs = '', containerStr = '';
	
	var element = this;
	var _bgStretcherPause = false;
	var _bgStretcherTm = null;
	
	jQuery.fn.bgStretcher = function(settings){
		settings = jQuery.extend({}, jQuery.fn.bgStretcher.defaults, settings);
		jQuery.fn.bgStretcher.settings = settings;
		
		function _build(){
			if(!settings.images.length){ return; }
			
			_genHtml();
			
			containerStr = '#' + settings.imageContainer;
			container = jQuery(containerStr);
			allImgs = '#' + settings.imageContainer + ' IMG';
			allLIs = '#' + settings.imageContainer + ' LI';
			
			jQuery(allLIs).hide();
			jQuery(allLIs + ':first').show().addClass('bgs-current');
			
			if(!container.length){ return; }
			jQuery(window).resize(_resize);
			
			if(settings.slideShow && jQuery(allImgs).length > 1){
				_bgStretcherTm = setTimeout('jQuery.fn.bgStretcher.slideShow()', settings.nextSlideDelay);
			}
			_resize();
		};
		
		function _resize(){
			var winW = jQuery(window).width();
			var winH = jQuery(window).height();
			var imgW = 0, imgH = 0;

			//	Update container's height
			container.width(winW);
			container.height(winH);
			
			//	Non-proportional resize
			if(!settings.resizeProportionally){
				imgW = winW;
				imgH = winH;
			} else {
				var initW = settings.imageWidth, initH = settings.imageHeight;
				var ratio = initH / initW;
				
				imgW = winW;
				imgH = winW * ratio;
				
				if(imgH < winH){
					imgH = winH;
					imgW = imgH / ratio;
				}
			}
			
			//	Apply new size for images
			if(!settings.resizeAnimate){
				jQuery(allImgs).width(imgW).height(imgH);
			} else {
				jQuery(allImgs).animate({width: imgW, height: imgH}, 'normal');
			}
		};
		
		function _genHtml(){
			var code = '<div id="' + settings.imageContainer + '" class="bgstretcher"><ul>';
			for(i = 0; i < settings.images.length; i++){
				code += '<li><img src="' + settings.images[i] + '" alt="" /></li>';
			}
			code += '</ul></div>';
			jQuery(code).appendTo('body');
		};
		
		/*  Start bgStretcher  */
		_build();
	};
	
	jQuery.fn.bgStretcher.play = function(){
       _bgStretcherPause = false;
       jQuery.fn.bgStretcher._clearTimeout();
       jQuery.fn.bgStretcher.slideShow();
       
	};
	
	jQuery.fn.bgStretcher._clearTimeout = function(){
       if(_bgStretcherTm != null){
           clearTimeout(_bgStretcherTm);
           _bgStretcherTm = null;
       }
	}
	
	jQuery.fn.bgStretcher.pause = function(){
	   _bgStretcherPause = true;
	   jQuery.fn.bgStretcher._clearTimeout();
	};
	
	jQuery.fn.bgStretcher.slideShow = function(){
		var current = jQuery(containerStr + ' LI.bgs-current');
		var next = current.next();
		if(!next.length){
			next = jQuery(containerStr + ' LI:first');
		}
		
		jQuery(containerStr + ' LI').removeClass('bgs-current');
		next.addClass('bgs-current');
		
		next.fadeIn( jQuery.fn.bgStretcher.settings.slideShowSpeed );
		current.fadeOut( jQuery.fn.bgStretcher.settings.slideShowSpeed );
		
		if(!_bgStretcherPause){
		  _bgStretcherTm = setTimeout('jQuery.fn.bgStretcher.slideShow()', jQuery.fn.bgStretcher.settings.nextSlideDelay);
		}
	};
	
	/*  Default Settings  */
	jQuery.fn.bgStretcher.defaults = {
		imageContainer:             'bgstretcher',
		resizeProportionally:       true,
		resizeAnimate:              false,
		images:                     [],
		imageWidth:                 1024,
		imageHeight:                768,
		nextSlideDelay:             5000,
		slideShowSpeed:             'normal',
		slideShow:                  true
	};
		
	jQuery.fn.bgStretcher.settings = {};
})(jQuery);