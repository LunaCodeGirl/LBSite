(function(a,b){

	// EASINGS
	jQuery.easing["jswing"]=jQuery.easing["swing"];jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(a,b,c,d,e){return jQuery.easing[jQuery.easing.def](a,b,c,d,e)},easeInQuad:function(a,b,c,d,e){return d*(b/=e)*b+c},easeOutQuad:function(a,b,c,d,e){return-d*(b/=e)*(b-2)+c},easeInOutQuad:function(a,b,c,d,e){if((b/=e/2)<1)return d/2*b*b+c;return-d/2*(--b*(b-2)-1)+c},easeInCubic:function(a,b,c,d,e){return d*(b/=e)*b*b+c},easeOutCubic:function(a,b,c,d,e){return d*((b=b/e-1)*b*b+1)+c},easeInOutCubic:function(a,b,c,d,e){if((b/=e/2)<1)return d/2*b*b*b+c;return d/2*((b-=2)*b*b+2)+c},easeInQuart:function(a,b,c,d,e){return d*(b/=e)*b*b*b+c},easeOutQuart:function(a,b,c,d,e){return-d*((b=b/e-1)*b*b*b-1)+c},easeInOutQuart:function(a,b,c,d,e){if((b/=e/2)<1)return d/2*b*b*b*b+c;return-d/2*((b-=2)*b*b*b-2)+c},easeInQuint:function(a,b,c,d,e){return d*(b/=e)*b*b*b*b+c},easeOutQuint:function(a,b,c,d,e){return d*((b=b/e-1)*b*b*b*b+1)+c},easeInOutQuint:function(a,b,c,d,e){if((b/=e/2)<1)return d/2*b*b*b*b*b+c;return d/2*((b-=2)*b*b*b*b+2)+c},easeInSine:function(a,b,c,d,e){return-d*Math.cos(b/e*(Math.PI/2))+d+c},easeOutSine:function(a,b,c,d,e){return d*Math.sin(b/e*(Math.PI/2))+c},easeInOutSine:function(a,b,c,d,e){return-d/2*(Math.cos(Math.PI*b/e)-1)+c},easeInExpo:function(a,b,c,d,e){return b==0?c:d*Math.pow(2,10*(b/e-1))+c},easeOutExpo:function(a,b,c,d,e){return b==e?c+d:d*(-Math.pow(2,-10*b/e)+1)+c},easeInOutExpo:function(a,b,c,d,e){if(b==0)return c;if(b==e)return c+d;if((b/=e/2)<1)return d/2*Math.pow(2,10*(b-1))+c;return d/2*(-Math.pow(2,-10*--b)+2)+c},easeInCirc:function(a,b,c,d,e){return-d*(Math.sqrt(1-(b/=e)*b)-1)+c},easeOutCirc:function(a,b,c,d,e){return d*Math.sqrt(1-(b=b/e-1)*b)+c},easeInOutCirc:function(a,b,c,d,e){if((b/=e/2)<1)return-d/2*(Math.sqrt(1-b*b)-1)+c;return d/2*(Math.sqrt(1-(b-=2)*b)+1)+c},easeInElastic:function(a,b,c,d,e){var f=1.70158;var g=0;var h=d;if(b==0)return c;if((b/=e)==1)return c+d;if(!g)g=e*.3;if(h<Math.abs(d)){h=d;var f=g/4}else var f=g/(2*Math.PI)*Math.asin(d/h);return-(h*Math.pow(2,10*(b-=1))*Math.sin((b*e-f)*2*Math.PI/g))+c},easeOutElastic:function(a,b,c,d,e){var f=1.70158;var g=0;var h=d;if(b==0)return c;if((b/=e)==1)return c+d;if(!g)g=e*.3;if(h<Math.abs(d)){h=d;var f=g/4}else var f=g/(2*Math.PI)*Math.asin(d/h);return h*Math.pow(2,-10*b)*Math.sin((b*e-f)*2*Math.PI/g)+d+c},easeInOutElastic:function(a,b,c,d,e){var f=1.70158;var g=0;var h=d;if(b==0)return c;if((b/=e/2)==2)return c+d;if(!g)g=e*.3*1.5;if(h<Math.abs(d)){h=d;var f=g/4}else var f=g/(2*Math.PI)*Math.asin(d/h);if(b<1)return-.5*h*Math.pow(2,10*(b-=1))*Math.sin((b*e-f)*2*Math.PI/g)+c;return h*Math.pow(2,-10*(b-=1))*Math.sin((b*e-f)*2*Math.PI/g)*.5+d+c},easeInBack:function(a,b,c,d,e,f){if(f==undefined)f=1.70158;return d*(b/=e)*b*((f+1)*b-f)+c},easeOutBack:function(a,b,c,d,e,f){if(f==undefined)f=1.70158;return d*((b=b/e-1)*b*((f+1)*b+f)+1)+c},easeInOutBack:function(a,b,c,d,e,f){if(f==undefined)f=1.70158;if((b/=e/2)<1)return d/2*b*b*(((f*=1.525)+1)*b-f)+c;return d/2*((b-=2)*b*(((f*=1.525)+1)*b+f)+2)+c},easeInBounce:function(a,b,c,d,e){return d-jQuery.easing.easeOutBounce(a,e-b,0,d,e)+c},easeOutBounce:function(a,b,c,d,e){if((b/=e)<1/2.75){return d*7.5625*b*b+c}else if(b<2/2.75){return d*(7.5625*(b-=1.5/2.75)*b+.75)+c}else if(b<2.5/2.75){return d*(7.5625*(b-=2.25/2.75)*b+.9375)+c}else{return d*(7.5625*(b-=2.625/2.75)*b+.984375)+c}},easeInOutBounce:function(a,b,c,d,e){if(b<e/2)return jQuery.easing.easeInBounce(a,b*2,0,d,e)*.5+c;return jQuery.easing.easeOutBounce(a,b*2-e,0,d,e)*.5+d*.5+c}})		
	// WAIT FOR IMAGES
	a.waitForImages={hasImageProperties:["backgroundImage","listStyleImage","borderImage","borderCornerImage"]};a.expr[":"].uncached=function(b){var c=document.createElement("img");c.src=b.src;return a(b).is('img[src!=""]')&&!c.complete};a.fn.waitForImages=function(b,c,d){if(a.isPlainObject(arguments[0])){c=b.each;d=b.waitForAll;b=b.finished}b=b||a.noop;c=c||a.noop;d=!!d;if(!a.isFunction(b)||!a.isFunction(c)){throw new TypeError("An invalid callback was supplied.")}return this.each(function(){var e=a(this),f=[];if(d){var g=a.waitForImages.hasImageProperties||[],h=/url\((['"]?)(.*?)\1\)/g;e.find("*").each(function(){var b=a(this);if(b.is("img:uncached")){f.push({src:b.attr("src"),element:b[0]})}a.each(g,function(a,c){var d=b.css(c);if(!d){return true}var e;while(e=h.exec(d)){f.push({src:e[2],element:b[0]})}})})}else{e.find("img:uncached").each(function(){f.push({src:this.src,element:this})})}var i=f.length,j=0;if(i==0){b.call(e[0])}a.each(f,function(d,f){var g=new Image;a(g).bind("load error",function(a){j++;c.call(f.element,j,i,a.type=="load");if(j==i){b.call(e[0]);return false}});g.src=f.src})})}
	// CSS ANIMATE
	var b = ["Webkit", "Moz", "O", "Ms", "Khtml", ""];
	var c = ["borderRadius", "boxShadow", "userSelect", "transformOrigin", "transformStyle", "transition", "transitionDuration", "transitionProperty", "transitionTimingFunction", "backgroundOrigin", "backgroundSize", "animation", "filter", "zoom", "columns", "perspective", "perspectiveOrigin", "appearance"];
	a.fn.cssSetQueue = function (b, c) {
		v = this;
		var d = v.data("cssQueue") ? v.data("cssQueue") : [];
		var e = v.data("cssCall") ? v.data("cssCall") : [];
		var f = 0;
		var g = {};
		a.each(c, function (a, b) {
			g[a] = b
		});
		while (1) {
			if (!e[f]) {
				e[f] = g.complete;
				break
			}
			f++
		}
		g.complete = f;
		d.push([b, g]);
		v.data({
			cssQueue : d,
			cssRunning : true,
			cssCall : e
		})
	};
	a.fn.cssRunQueue = function () {
		v = this;
		var a = v.data("cssQueue") ? v.data("cssQueue") : [];
		if (a[0])
			v.cssEngine(a[0][0], a[0][1]);
		else
			v.data("cssRunning", false);
		a.shift();
		v.data("cssQueue", a)
	};
	a.cssMerge = function (b, c, d) {
		a.each(c, function (c, e) {
			a.each(d, function (a, d) {
				b[d + c] = e
			})
		});
		return b
	};
	a.fn.cssAnimationData = function (a, b) {
		var c = this;
		var d = c.data("cssAnimations");
		if (!d)
			d = {};
		if (!d[a])
			d[a] = [];
		d[a].push(b);
		c.data("cssAnimations", d);
		return d[a]
	};
	a.fn.cssAnimationRemove = function () {
		var b = this;
		if (b.data("cssAnimations") != undefined) {
			var c = b.data("cssAnimations");
			var d = b.data("identity");
			a.each(c, function (a, b) {
				c[a] = b.splice(d + 1, 1)
			});
			b.data("cssAnimations", c)
		}
	};
	a.css3D = function (c) {
		a("body").data("cssPerspective", isFinite(c) ? c : c ? 1e3 : 0).cssOriginal(a.cssMerge({}, {
				TransformStyle : c ? "preserve-3d" : "flat"
			}, b))
	};
	a.cssPropertySupporter = function (d) {
		a.each(c, function (c, e) {
			if (d[e])
				a.each(b, function (a, b) {
					var c = e.substr(0, 1);
					d[b + c[b ? "toUpperCase" : "toLowerCase"]() + e.substr(1)] = d[e]
				})
		});
		return d
	};
	a.cssAnimateSupport = function () {
		var c = false;
		a.each(b, function (a, b) {
			c = document.body.style[b + "AnimationName"] !== undefined ? true : c
		});
		return c
	};
	a.fn.cssEngine = function (c, d) {
		function e(a) {
			return String(a).replace(/([A-Z])/g, "-$1").toLowerCase()
		}
		var f = this;
		var f = this;
		if (typeof d.complete == "number")
			f.data("cssCallIndex", d.complete);
		var g = {
			linear : "linear",
			swing : "ease",
			easeIn : "ease-in",
			easeOut : "ease-out",
			easeInOut : "ease-in-out"
		};
		var h = {};
		var i = a("body").data("cssPerspective");
		if (c.transform)
			a.each(b, function (a, b) {
				var d = b + (b ? "T" : "t") + "ransform";
				var g = f.cssOriginal(e(d));
				var j = c.transform;
				if (!g || g == "none")
					h[d] = "scale(1)";
				c[d] = (i && !/perspective/gi.test(j) ? "perspective(" + i + ") " : "") + j
			});
		c = a.cssPropertySupporter(c);
		var j = [];
		a.each(c, function (a, b) {
			j.push(e(a))
		});
		var k = false;
		var l = [];
		var m = [];
		if (j != undefined) {
			for (var n = 0; n < j.length; n++) {
				l.push(String(d.duration / 1e3) + "s");
				var o = g[d.easing];
				m.push(o ? o : d.easing)
			}
			l = f.cssAnimationData("dur", l.join(", ")).join(", ");
			m = f.cssAnimationData("eas", m.join(", ")).join(", ");
			var p = f.cssAnimationData("prop", j.join(", "));
			f.data("identity", p.length - 1);
			p = p.join(", ");
			var q = {
				TransitionDuration : l,
				TransitionProperty : p,
				TransitionTimingFunction : m
			};
			var r = {};
			r = a.cssMerge(r, q, b);
			var s = c;
			a.extend(r, c);
			if (r.display == "callbackHide")
				k = true;
			else if (r.display)
				h["display"] = r.display;
			f.cssOriginal(h)
		}
		setTimeout(function () {
			f.cssOriginal(r);
			var b = f.data("runningCSS");
			b = !b ? s : a.extend(b, s);
			f.data("runningCSS", b);
			setTimeout(function () {
				f.data("cssCallIndex", "a");
				if (k)
					f.cssOriginal("display", "none");
				f.cssAnimationRemove();
				if (d.queue)
					f.cssRunQueue();
				if (typeof d.complete == "number") {
					f.data("cssCall")[d.complete].call(f);
					f.data("cssCall")[d.complete] = 0
				} else
					d.complete.call(f)
			}, d.duration)
		}, 0)
	};
	a.str2Speed = function (a) {
		return isNaN(a) ? a == "slow" ? 1e3 : a == "fast" ? 200 : 600 : a
	};
	a.fn.cssAnimate = function (b, c, d, e) {
		var f = this;
		var g = {
			duration : 0,
			easing : "swing",
			complete : function () {},
			queue : true
		};
		var h = {};
		h = typeof c == "object" ? c : {
			duration : c
		};
		h[d ? typeof d == "function" ? "complete" : "easing" : 0] = d;
		h[e ? "complete" : 0] = e;
		h.duration = a.str2Speed(h.duration);
		a.extend(g, h);
		if (a.cssAnimateSupport()) {
			f.each(function (c, d) {
				d = a(d);
				if (g.queue) {
					var e = !d.data("cssRunning");
					d.cssSetQueue(b, g);
					if (e)
						d.cssRunQueue()
				} else
					d.cssEngine(b, g)
			})
		} else
			f.animate(b, g);
		return f
	};
	a.cssPresetOptGen = function (a, b) {
		var c = {};
		c[a ? typeof a == "function" ? "complete" : "easing" : 0] = a;
		c[b ? "complete" : 0] = b;
		return c
	};
	a.fn.cssFadeTo = function (b, c, d, e) {
		var f = this;
		opt = a.cssPresetOptGen(d, e);
		var g = {
			opacity : c
		};
		opt.duration = b;
		if (a.cssAnimateSupport()) {
			f.each(function (b, d) {
				d = a(d);
				if (d.data("displayOriginal") != d.cssOriginal("display") && d.cssOriginal("display") != "none")
					d.data("displayOriginal", d.cssOriginal("display") ? d.cssOriginal("display") : "block");
				else
					d.data("displayOriginal", "block");
				g.display = c ? d.data("displayOriginal") : "callbackHide";
				d.cssAnimate(g, opt)
			})
		} else
			f.fadeTo(b, opt);
		return f
	};
	a.fn.cssFadeOut = function (b, c, d) {
		if (a.cssAnimateSupport()) {
			if (!this.cssOriginal("opacity"))
				this.cssOriginal("opacity", 1);
			this.cssFadeTo(b, 0, c, d)
		} else
			this.fadeOut(b, c, d);
		return this
	};
	a.fn.cssFadeIn = function (b, c, d) {
		if (a.cssAnimateSupport()) {
			if (this.cssOriginal("opacity"))
				this.cssOriginal("opacity", 0);
			this.cssFadeTo(b, 1, c, d)
		} else
			this.fadeIn(b, c, d);
		return this
	};
	a.cssPx2Int = function (a) {
		return a.split("p")[0] * 1
	};
	a.fn.cssStop = function () {
		var c = this,
		d = 0;
		c.data("cssAnimations", false).each(function (e, f) {
			f = a(f);
			var g = {
				TransitionDuration : "0s"
			};
			var h = f.data("runningCSS");
			var i = {};
			if (h)
				a.each(h, function (b, c) {
					c = isFinite(a.cssPx2Int(c)) ? a.cssPx2Int(c) : c;
					var d = [0, 1];
					var e = {
						color : ["#000", "#fff"],
						background : ["#000", "#fff"],
						"float" : ["none", "left"],
						clear : ["none", "left"],
						border : ["none", "0px solid #fff"],
						position : ["absolute", "relative"],
						family : ["Arial", "Helvetica"],
						display : ["none", "block"],
						visibility : ["hidden", "visible"],
						transform : ["translate(0,0)", "scale(1)"]
					};
					a.each(e, function (a, c) {
						if ((new RegExp(a, "gi")).test(b))
							d = c
					});
					i[b] = d[0] != c ? d[0] : d[1]
				});
			else
				h = {};
			g = a.cssMerge(i, g, b);
			f.cssOriginal(g);
			setTimeout(function () {
				var b = a(c[d]);
				b.cssOriginal(h).data({
					runningCSS : {},
					cssAnimations : {},
					cssQueue : [],
					cssRunning : false
				});
				if (typeof b.data("cssCallIndex") == "number")
					b.data("cssCall")[b.data("cssCallIndex")].call(b);
				b.data("cssCall", []);
				d++
			}, 0)
		});
		return c
	};
	a.fn.cssDelay = function (a) {
		return this.cssAnimate({}, a)
	};
	a.fn.cssOriginal = a.fn.css;
	
	// SWIPE FUNCTION
	a.fn.swipe=function(b){if(!this)return false;var c={fingers:1,threshold:75,swipe:null,swipeLeft:null,swipeRight:null,swipeUp:null,swipeDown:null,swipeStatus:null,click:null,triggerOnTouchEnd:true,allowPageScroll:"auto"};var d="left";var e="right";var f="up";var g="down";var h="none";var i="horizontal";var j="vertical";var k="auto";var l="start";var m="move";var n="end";var o="cancel";var p="ontouchstart"in window,q=p?"touchstart":"mousedown",r=p?"touchmove":"mousemove",s=p?"touchend":"mouseup",t="touchcancel";var u="start";if(b.allowPageScroll==undefined&&(b.swipe!=undefined||b.swipeStatus!=undefined))b.allowPageScroll=h;if(b)a.extend(c,b);return this.each(function(){function J(){var a=I();if(a<=45&&a>=0)return d;else if(a<=360&&a>=315)return d;else if(a>=135&&a<=225)return e;else if(a>45&&a<135)return g;else return f}function I(){var a=y.x-z.x;var b=z.y-y.y;var c=Math.atan2(b,a);var d=Math.round(c*180/Math.PI);if(d<0)d=360-Math.abs(d);return d}function H(){return Math.round(Math.sqrt(Math.pow(z.x-y.x,2)+Math.pow(z.y-y.y,2)))}function G(a,b){if(c.allowPageScroll==h){a.preventDefault()}else{var l=c.allowPageScroll==k;switch(b){case d:if(c.swipeLeft&&l||!l&&c.allowPageScroll!=i)a.preventDefault();break;case e:if(c.swipeRight&&l||!l&&c.allowPageScroll!=i)a.preventDefault();break;case f:if(c.swipeUp&&l||!l&&c.allowPageScroll!=j)a.preventDefault();break;case g:if(c.swipeDown&&l||!l&&c.allowPageScroll!=j)a.preventDefault();break}}}function F(a,b){if(c.swipeStatus)c.swipeStatus.call(v,a,b,direction||null,distance||0);if(b==o){if(c.click&&(x==1||!p)&&(isNaN(distance)||distance==0))c.click.call(v,a,a.target)}if(b==n){if(c.swipe){c.swipe.call(v,a,direction,distance)}switch(direction){case d:if(c.swipeLeft)c.swipeLeft.call(v,a,direction,distance);break;case e:if(c.swipeRight)c.swipeRight.call(v,a,direction,distance);break;case f:if(c.swipeUp)c.swipeUp.call(v,a,direction,distance);break;case g:if(c.swipeDown)c.swipeDown.call(v,a,direction,distance);break}}}function E(a){x=0;y.x=0;y.y=0;z.x=0;z.y=0;A.x=0;A.y=0}function D(a){a.preventDefault();distance=H();direction=J();if(c.triggerOnTouchEnd){u=n;if((x==c.fingers||!p)&&z.x!=0){if(distance>=c.threshold){F(a,u);E(a)}else{u=o;F(a,u);E(a)}}else{u=o;F(a,u);E(a)}}else if(u==m){u=o;F(a,u);E(a)}b.removeEventListener(r,C,false);b.removeEventListener(s,D,false)}function C(a){if(u==n||u==o)return;var b=p?a.touches[0]:a;z.x=b.pageX;z.y=b.pageY;direction=J();if(p){x=a.touches.length}u=m;G(a,direction);if(x==c.fingers||!p){distance=H();if(c.swipeStatus)F(a,u,direction,distance);if(!c.triggerOnTouchEnd){if(distance>=c.threshold){u=n;F(a,u);E(a)}}}else{u=o;F(a,u);E(a)}}function B(a){var d=p?a.touches[0]:a;u=l;if(p){x=a.touches.length}distance=0;direction=null;if(x==c.fingers||!p){y.x=z.x=d.pageX;y.y=z.y=d.pageY;if(c.swipeStatus)F(a,u)}else{E(a)}b.addEventListener(r,C,false);b.addEventListener(s,D,false)}var b=this;var v=a(this);var w=null;var x=0;var y={x:0,y:0};var z={x:0,y:0};var A={x:0,y:0};try{this.addEventListener(q,B,false);this.addEventListener(t,E)}catch(K){}})}	

})(jQuery)




jQuery.noConflict();

/**************************************************************************
 * jquery.themepunch.revolution.js - jQuery Plugin for kenburn Slider
 * @version: 1.2.1 (16.08.2012)
 * @requires jQuery v1.4 or later 
 * @author Krisztian Horvath
**************************************************************************/




(function($,undefined){	
	
	
	
	////////////////////////////
	// THE PLUGIN STARTS HERE //
	////////////////////////////
	
	$.fn.extend({
	
		
		// OUR PLUGIN HERE :)
		revolution: function(options) {
	
		
			
		////////////////////////////////
		// SET DEFAULT VALUES OF ITEM //
		////////////////////////////////
		var defaults = {	
			delay:9000,												
			startheight:490,							
			startwidth:890,
			
			hideThumbs:200,
			
			thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
			thumbHeight:50,
			thumbAmount:5,
			
			navigationType:"both",					//bullet, thumb, none, both		(No Thumbs In FullWidth Version !)
			navigationArrows:"nexttobullets",		//nexttobullets, verticalcentered, none
			navigationStyle:"round",				//round,square,navbar
			
			touchenabled:"on",						// Enable Swipe Function : on/off
			onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off
			
			navOffsetHorizontal:0,
			navOffsetVertical:20,
			
			shadow:1,

			stopLoop:"off"
		};
		
			options = $.extend({}, $.fn.revolution.defaults, options);
		
				
			
			
			return this.each(function() {
											
				var opt=options;
				
				
				// CREATE SOME DEFAULT OPTIONS FOR LATER 
				opt.slots=4;
				opt.act=-1;
				opt.next=0;
				opt.origcd=opt.delay;
				
				// CHECK IF FIREFOX 13 IS ON WAY.. IT HAS A STRANGE BUG, CSS ANIMATE SHOULD NOT BE USED
				opt.firefox13 = ($.browser.mozilla)  && (parseInt($.browser.version,0)==13 ||  parseInt($.browser.version,0)==14);
				opt.ie = $.browser.msie && parseInt($.browser.version,0)<9;
				
				
				// BASIC OFFSET POSITIONS OF THE BULLETS
				if (opt.navOffsetHorizontal==undefined) opt.navOffsetHorizontal=0;
				if (opt.navOffsetVertical==undefined) opt.navOffsetVertical=0;
				
				// SHORTWAY USAGE OF OFFSETS
				opt.navOH = opt.navOffsetHorizontal;
				opt.navOV = opt.navOffsetVertical;
				
				
				// CATCH THE CONTAINER
				var container=$(this);
				container.append('<div class="tp-loader"></div>');
				
				// RESET THE TIMER 
				var bt=container.find('.tp-bannertimer');
				if (bt.length>0) {
					bt.css({'width':'0%'});
				};
				
				
				// WE NEED TO ADD A BASIC CLASS FOR SETTINGS.CSS
				container.addClass("tp-simpleresponsive");				
				opt.container=container;
				
				//if (container.height()==0) container.height(opt.startheight);
				
				// AMOUNT OF THE SLIDES
				opt.slideamount = container.find('ul:first li').length;
				
				// A BASIC GRID MUST BE DEFINED. IF NO DEFAULT GRID EXIST THAN WE NEED A DEFAULT VALUE, ACTUAL SIZE OF CONAINER
				if (opt.startwidth==undefined || opt.startwidth==0) opt.startwidth=container.width();
				if (opt.startheight==undefined || opt.startheight==0) opt.startheight=container.height();
				
				// OPT WIDTH && HEIGHT SHOULD BE SET
				opt.width=container.width();
				opt.height=container.height();
				
				// DEFAULT DEPENDECIES
				opt.bw = opt.startwidth / container.width();
				opt.bh = opt.startheight / container.height();
				
				// IF THE ITEM ALREADY IN A RESIZED FORM
				if (opt.width!=opt.startwidth) {
					
					opt.height = Math.round(opt.startheight * (opt.width/opt.startwidth));
					container.height(opt.height);
					
				}
				
				// LETS SEE IF THERE IS ANY SHADOW
				if (opt.shadow!=0) {
					container.parent().append('<div class="tp-bannershadow tp-shadow'+opt.shadow+'"></div>');
					
					container.parent().find('.tp-bannershadow').css({'width':opt.width});	
				}
				
				
						
				// IF IMAGES HAS BEEN LOADED		
				container.waitForImages(function() {
						// PREPARE THE SLIDES
						prepareSlides(container,opt);				
						
						// CREATE BULLETS
						createBullets(container,opt);
						createThumbs(container,opt);
						createArrows(container,opt);
						swipeAction(container,opt);
						
						if (opt.hideThumbs>0) hideThumbs(container,opt);
					
						container.waitForImages(function() {
							// START THE FIRST SLIDE
							container.find('.tp-loader').fadeOut(400);
							setTimeout(function() { 
								swapSlide(container,opt);
								// START COUNTDOWN
								countDown(container,opt);
							},1000);
						});
						
						
				});
				
				
				// IF RESIZED, NEED TO STOP ACTUAL TRANSITION AND RESIZE ACTUAL IMAGES
				$(window).resize(function() {
					
					if (container.outerWidth(true)!=opt.width) {
							
						containerResized(container,opt);
						
					}
				});
			})
		}

})

		//////////////////////////
		//	CONTAINER RESIZED	//
		/////////////////////////
		function containerResized(container,opt) {
			
			
			container.find('.defaultimg').each(function(i) {
												
						setSize($(this),opt);		
						
						opt.height = Math.round(opt.startheight * (opt.width/opt.startwidth));						
						container.height(opt.height);															
						
						setSize($(this),opt);												
						
						try{
							container.parent().find('.tp-bannershadow').css({'width':opt.width});
						} catch(e) {}
						
						var actsh = container.find('li:eq('+opt.act+') .slotholder');
						var nextsh = container.find('li:eq('+opt.next+') .slotholder');
						removeSlots(container);
						nextsh.find('.defaultimg').css({'opacity':0});
						actsh.find('.defaultimg').css({'opacity':1});
						
						setCaptionPositions(container,opt);
																		
						var nextli = container.find('li:eq('+opt.next+')');
						container.find('.caption').each(function() { $(this).stop(true,true);});
						animateTheCaptions(nextli, opt);		
						
						restartBannerTimer(opt,container);						
						
				});
		}
		
		
		
		////////////////////////////////
		//	RESTART THE BANNER TIMER //
		//////////////////////////////
		function restartBannerTimer(opt,container) {
						opt.cd=0;
						var bt=	container.find('.tp-bannertimer');							
							if (bt.length>0) {
								bt.stop();
								bt.css({'width':'0%'});
								bt.animate({'width':"100%"},{duration:(opt.delay-100),queue:false, easing:"linear"});
							}						
						clearTimeout(opt.thumbtimer);
						opt.thumbtimer = setTimeout(function() {
							moveSelectedThumb(container);
							setBulPos(container,opt);						
						},200);
		}
		
		function callingNewSlide(opt,container) {
						opt.cd=0;
						swapSlide(container,opt);
						
						// STOP TIMER AND RESCALE IT 
							var bt=	container.find('.tp-bannertimer');							
							if (bt.length>0) {
								bt.stop();
								bt.css({'width':'0%'});
								bt.animate({'width':"100%"},{duration:(opt.delay-100),queue:false, easing:"linear"});
							}
		}
		
		
		
		////////////////////////////////
		//	-	CREATE THE BULLETS -  //
		////////////////////////////////
		function createThumbs(container,opt) {
			
			var cap=container.parent();
			
			if (opt.navigationType=="thumb" || opt.navsecond=="both") {
						cap.append('<div class="tp-bullets tp-thumbs '+opt.navigationStyle+'"><div class="tp-mask"><div class="tp-thumbcontainer"></div></div></div>');																		
			}
			var bullets = cap.find('.tp-bullets.tp-thumbs .tp-mask .tp-thumbcontainer');
			var bup = bullets.parent();
			
			bup.width(opt.thumbWidth*opt.thumbAmount);
			bup.height(opt.thumbHeight);
			bup.parent().width(opt.thumbWidth*opt.thumbAmount);
			bup.parent().height(opt.thumbHeight);
			
			container.find('ul:first li').each(function(i) {
							var li= container.find("ul:first li:eq("+i+")");
							if (li.data('thumb') !=undefined) 
								var src= li.data('thumb')
							else
								var src=li.find("img:first").attr('src');
							bullets.append('<div class="bullet thumb"><img src="'+src+'"></div>');											
							var bullet= bullets.find('.bullet:first');				
				});
			bullets.append('<div style="clear:both"></div>');			
			var minwidth=1000;
			
			
			// ADD THE BULLET CLICK FUNCTION HERE
			bullets.find('.bullet').each(function(i) {
				var bul = $(this);
				
				if (i==opt.slideamount-1) bul.addClass('last');
				if (i==0) bul.addClass('first');
				bul.width(opt.thumbWidth);
				bul.height(opt.thumbHeight);
				if (minwidth>bul.outerWidth(true)) minwidth=bul.outerWidth(true);				
				
				bul.click(function() {
					if (opt.transition==0 && bul.index() != opt.act) {
						opt.next = bul.index();						
						callingNewSlide(opt,container);																		
					}
				});				
			});
			
			
			var max=minwidth*container.find('ul:first li').length;
			var thumbconwidth=bullets.parent().width();			
			opt.thumbWidth = minwidth;
			
			
			
				////////////////////////							
				// SLIDE TO POSITION  //
				////////////////////////							
				if (thumbconwidth<max) {
					$(document).mousemove(function(e) {
						$('body').data('mousex',e.pageX);							
					});
					
				
					
					// ON MOUSE MOVE ON THE THUMBNAILS EVERYTHING SHOULD MOVE :)
					
					bullets.parent().mouseenter(function() {
							var $this=$(this);
							$this.addClass("over");	
							var offset = $this.offset();
							var x = $('body').data('mousex')-offset.left;									
							var thumbconwidth=$this.width();	
							var minwidth=$this.find('.bullet:first').outerWidth(true);
							var max=minwidth*container.find('ul:first li').length;
							var diff=(max- thumbconwidth)+15;		
							var steps = diff / thumbconwidth;
							x=x-30;
							//if (x<30) x=0;
							//if (x>thumbconwidth-30) x=thumbconwidth;
															
							//ANIMATE TO POSITION
							var pos=(0-((x)*steps));										
							if (pos>0) pos =0;
							if (pos<0-max+thumbconwidth) pos=0-max+thumbconwidth;															
							moveThumbSliderToPosition($this,pos,200);							
					});
					
					bullets.parent().mousemove(function() {
							
									var $this=$(this);														
									
									//if (!$this.hasClass("over")) {
											var offset = $this.offset();
											var x = $('body').data('mousex')-offset.left;									
											var thumbconwidth=$this.width();	
											var minwidth=$this.find('.bullet:first').outerWidth(true);
											var max=minwidth*container.find('ul:first li').length;
											var diff=(max- thumbconwidth)+15;		
											var steps = diff / thumbconwidth;
											x=x-30;
											//if (x<30) x=0;
											//if (x>thumbconwidth-30) x=thumbconwidth;
																			
											//ANIMATE TO POSITION
											var pos=(0-((x)*steps));										
											if (pos>0) pos =0;
											if (pos<0-max+thumbconwidth) pos=0-max+thumbconwidth;															
											moveThumbSliderToPosition($this,pos,0);
									//} else {
										//$this.removeClass("over");
									//}
									
					});
					
					bullets.parent().mouseleave(function() {
									var $this=$(this);
									$this.removeClass("over");	
									moveSelectedThumb(container);
					});
				}								
		}
		
		
		///////////////////////////////
		//	SelectedThumbInPosition //
		//////////////////////////////
		function moveSelectedThumb(container) {
									
									var bullets=container.parent().find('.tp-bullets.tp-thumbs .tp-mask .tp-thumbcontainer');														
									var $this=bullets.parent();
									var offset = $this.offset();
									var minwidth=$this.find('.bullet:first').outerWidth(true);
									
									var x = $this.find('.bullet.selected').index() * minwidth;	
									var thumbconwidth=$this.width();	
									var minwidth=$this.find('.bullet:first').outerWidth(true);
									var max=minwidth*container.find('ul:first li').length;
									var diff=(max- thumbconwidth);		
									var steps = diff / thumbconwidth;
									
									//ANIMATE TO POSITION
									var pos=0-x;
								
									if (pos>0) pos =0;
									if (pos<0-max+thumbconwidth) pos=0-max+thumbconwidth;
									if (!$this.hasClass("over")) {
										moveThumbSliderToPosition($this,pos,200);
									}
		}
		
		
		////////////////////////////////////
		//	MOVE THUMB SLIDER TO POSITION //
		///////////////////////////////////
		function moveThumbSliderToPosition($this,pos,speed) {
			$this.stop();														
			$this.find('.tp-thumbcontainer').animate({'left':pos+'px'},{duration:speed,queue:false});																			
		}
		
		
		
		////////////////////////////////
		//	-	CREATE THE BULLETS -  //
		////////////////////////////////
		function createBullets(container,opt) {
			
			if (opt.navigationType=="bullet"  || opt.navigationType=="both") {
						container.parent().append('<div class="tp-bullets simplebullets '+opt.navigationStyle+'"></div>');												
			}
			
					
			var bullets = container.parent().find('.tp-bullets');
			
			container.find('ul:first li').each(function(i) {
							var src=container.find("ul:first li:eq("+i+") img:first").attr('src');
							bullets.append('<div class="bullet"></div>');											
							var bullet= bullets.find('.bullet:first');				
				});
			

			
			// ADD THE BULLET CLICK FUNCTION HERE
			bullets.find('.bullet').each(function(i) {
				var bul = $(this);
				if (i==opt.slideamount-1) bul.addClass('last');
				if (i==0) bul.addClass('first');
								
				bul.click(function() {
					if (opt.transition==0 && bul.index() != opt.act) {
						opt.next = bul.index();						
						callingNewSlide(opt,container);						
					}
				});
				
			});
						
			bullets.append('<div style="clear:both"></div>');			
			setBulPos(container,opt);
			
			$('#unvisible_button').click(function() {
				
				opt.navigationArrows=$('.select_navarrows .selected').data('value');
				opt.navigationType=$('.select_navigationtype .selected').data('value');				
				opt.hideThumbs=$('.select_navshow .selected').data('value');
				container.data('hidethumbs',opt.hideThumbs);
				
				var bhd = $('.select_bhposition .dragger');
				opt.navOffsetHorizontal = Math.round(((bhd.data('max') - bhd.data('min')) *  (bhd.position().left/410)) +  bhd.data('min'));
				
				var bvd = $('.select_bvposition .dragger');
				opt.navOffsetVertical = Math.round(((bvd.data('max') - bvd.data('min')) *  (bvd.position().left/410)) +  bvd.data('min'));
				
				var btr = $('.select_slidetime .dragger');
				opt.delay2 = Math.round((((btr.data('max') - btr.data('min')) *  (btr.position().left/410)) +  btr.data('min'))*1000);
				
				if (opt.delay2!=opt.delay) {				
							opt.delay=opt.delay2;
							opt.origcd = opt.delay;
							opt.cd=0;
							var bt=	container.find('.tp-bannertimer');							
							if (bt.length>0) {
								bt.stop();
								bt.css({'width':'0%'});
								bt.animate({'width':"100%"},{duration:(opt.delay-100),queue:false, easing:"linear"});
							}	
				}
				
				opt.onHoverStop = $('.select_hovers .selected').data('value');
				
				setBulPos(container,opt);	
				setTimeout(function() {
					setBulPos(container,opt);								
				},100);
			});
			
		}

		//////////////////////
		//	CREATE ARROWS	//
		/////////////////////
		function createArrows(container,opt) {
						
						var bullets = container.find('.tp-bullets');
						
						if (opt.navigationArrow!="none") container.parent().append('<div class="tp-leftarrow tparrows '+opt.navigationStyle+'"></div>');
						if (opt.navigationArrow!="none") container.parent().append('<div class="tp-rightarrow tparrows '+opt.navigationStyle+'"></div>');
						
						
						

						// 	THE LEFT / RIGHT BUTTON CLICK !	 //
						container.parent().find('.tp-rightarrow').click(function() {
							if (opt.transition==0) {
									opt.next = opt.next+1;						
									if (opt.next == opt.slideamount) opt.next=0;
									callingNewSlide(opt,container);
							}
						});
						
						container.parent().find('.tp-leftarrow').click(function() {
							if (opt.transition==0) {
									opt.next = opt.next-1;						
									if (opt.next < 0) opt.next=opt.slideamount-1;
									callingNewSlide(opt,container);
							}
						});
						
						setBulPos(container,opt);												
		}
		
		////////////////////////////
		// SET THE SWIPE FUNCTION //
		////////////////////////////
		function swipeAction(container,opt) {
			// TOUCH ENABLED SCROLL
				
				if (opt.touchenabled=="on")						
						container.swipe( {data:container, 
										swipeRight:function() 
												{ 
													
													if (opt.transition==0) {
															opt.next = opt.next-1;						
															if (opt.next < 0) opt.next=opt.slideamount-1;
															callingNewSlide(opt,container);
													}
												}, 
										swipeLeft:function() 
												{
													
													if (opt.transition==0) {
															opt.next = opt.next+1;						
															if (opt.next == opt.slideamount) opt.next=0;
															callingNewSlide(opt,container);
													}
												}, 
									allowPageScroll:"auto"} );
		}
			
			
			
			
		////////////////////////////////////////////////////////////////	
		// SHOW AND HIDE THE THUMBS IF MOUE GOES OUT OF THE BANNER  ///
		//////////////////////////////////////////////////////////////
		function hideThumbs(container,opt) {
			
			var bullets = container.parent().find('.tp-bullets');
			var ca = container.parent().find('.tparrows');
			
			if (bullets==null) {
				container.append('<div class=".tp-bullets"></div>');
				var bullets = container.parent().find('.tp-bullets');
			}
			
			if (ca==null) {
				container.append('<div class=".tparrows"></div>');
				var ca = container.parent().find('.tparrows');
			}
			
			
			//var bp = (thumbs.parent().outerHeight(true) - opt.height)/2;
			
			//	ADD THUMBNAIL IMAGES FOR THE BULLETS //					
			container.data('hidethumbs',opt.hideThumbs);
			
			
			
			try{ bullets.css({'opacity':0}); } catch(e) {}
			try { ca.css({'opacity':0}); } catch(e) {}
			
			bullets.hover(function() {				
				bullets.addClass("hovered");	
				clearTimeout(container.data('hidethumbs'));				
				bullets.cssAnimate({'opacity':1},{duration:200,queue:false});
				ca.animate({'opacity':1},{duration:200,queue:false});								
			}, 
			function() {
				
				bullets.removeClass("hovered");		
				if (!container.hasClass("hovered") && !bullets.hasClass("hovered"))
					container.data('hidethumbs', setTimeout(function() { 
						bullets.cssAnimate({'opacity':0},{duration:200,queue:false});
						ca.animate({'opacity':0},{duration:200,queue:false});						
					},opt.hideThumbs));
			});
			
			
			ca.hover(function() {				
				bullets.addClass("hovered");	
				clearTimeout(container.data('hidethumbs'));				
				bullets.cssAnimate({'opacity':1},{duration:200,queue:false});
				ca.animate({'opacity':1},{duration:200,queue:false});								
			}, 
			function() {
				
				bullets.removeClass("hovered");		
				if (!container.hasClass("hovered") && !bullets.hasClass("hovered"))
					container.data('hidethumbs', setTimeout(function() { 
						bullets.cssAnimate({'opacity':0},{duration:200,queue:false});
						ca.animate({'opacity':0},{duration:200,queue:false});						
					},opt.hideThumbs));
			});
			
			
			
			container.live('mouseenter', function() {				
				container.addClass("hovered");	
				clearTimeout(container.data('hidethumbs'));
				bullets.cssAnimate({'opacity':1},{duration:200,queue:false});
				ca.animate({'opacity':1},{duration:200,queue:false});				
			});
			
			container.live('mouseleave', function() {				
				container.removeClass("hovered");		
				if (!container.hasClass("hovered") && !bullets.hasClass("hovered"))
					container.data('hidethumbs', setTimeout(function() { 
								bullets.cssAnimate({'opacity':0},{duration:200,queue:false});
								ca.animate({'opacity':0},{duration:200,queue:false});								
					},opt.hideThumbs));
			});
			
		}


		
		
		
		
		
		//////////////////////////////
		//	SET POSITION OF BULLETS	//
		//////////////////////////////
		function setBulPos(container,opt) {
			
			/* FOR THE PREVIEW WE NEED TO HANDLE IF BOTH NAVIGATION IS LOADED */
			if (opt.navigationType=="both") {
					opt.navigationType="bullet";
					opt.navsecond = "both";
			}
			if (opt.navigationType=="none" && opt.navigationArrows!="none") opt.navigationArrows="verticalcentered";			
			
			
			
				opt.navOH = opt.navOffsetHorizontal * opt.bw;
				opt.navOV = opt.navOffsetVertical * opt.bh;
				if (opt.bw!=1) opt.navOH=0;
				
				// SOME HELP
				var cap=container.parent();
				var la=cap.find('.tp-leftarrow');
				var ra=cap.find('.tp-rightarrow');
				
				//////////////////////////////////////
				//	THE BULLET NAVIGATION POSITIONS //
				/////////////////////////////////////
				
				if (opt.navigationType=="bullet") {
						
							var bullets = cap.find('.tp-bullets.simplebullets');								
							bullets.css({'visibility':'visible'});
							try{ cap.find('.tp-thumbs').css({'visibility':'hidden'});} catch(e) {}
							
							var fulllong=bullets.width();
							if (!bullets.hasClass("tp-thumbs")) {
								fulllong=0;
								bullets.find('.bullet').each(function() { fulllong = fulllong + $(this).outerWidth(true);});
								bullets.css({'width':(fulllong)+"px"});			
							}
							
							var ldiff = cap.outerWidth()- opt.width;	
							
							bullets.css({'left':(opt.navOH) + (ldiff/2)+(opt.width/2 - fulllong/2)+"px", 'bottom':opt.navOV+"px"});

							if (opt.navigationArrows=="nexttobullets") {
								
								la.removeClass("large");
								ra.removeClass("large");
								la.removeClass("thumbswitharrow");
								ra.removeClass("thumbswitharrow");
								la.css({'visibility':'visible'});
								ra.css({'visibility':'visible'});
								var diff = 0; 
								
								la.css({'position':'absolute','left': (bullets.position().left - la.outerWidth(true))+"px",
															  'top':  bullets.position().top+"px"});
								
								ra.css({'position':'absolute','left': (bullets.outerWidth(true) + bullets.position().left)+"px",
															  'top':bullets.position().top+"px"});
							} else {
							
								if (opt.navigationArrows=="verticalcentered") {
									
									la.addClass("large");
									ra.addClass("large");
									la.css({'visibility':'visible'});
									ra.css({'visibility':'visible'});
									var decorh=cap.outerHeight();
									la.css({'position':'absolute','left': (ldiff/2)+"px",'top': (decorh/2)+"px"});
									ra.css({'position':'absolute','left': (opt.width - ra.outerWidth()+ldiff/2)+"px",'top': (decorh/2)+"px"});
								} else {
									
									la.css({'visibility':'hidden'});
									ra.css({'visibility':'hidden'});
								}
						}
					} else {
				
							//////////////////////////////////////
							//	THE THUMBS NAVIGATION POSITIONS //
							/////////////////////////////////////
							if (opt.navigationType=="thumb") {
								
								
								var thumbs=cap.find('.tp-thumbs');
								try{ cap.find('.tp-bullets').css({'visibility':'hidden'}); } catch(e) {}
								thumbs.css({'visibility':'visible'});
								
								
								
								var decorh=thumbs.parent().outerHeight();
								
								var ldiff = cap.outerWidth()- opt.width;	
								
								thumbs.css({'left':(opt.navOH) + (opt.width/2 - thumbs.width()/2)+"px"});
								thumbs.css({'bottom':(0-thumbs.outerHeight(true)  + (opt.navOV))+"px"});
								
									if (opt.navigationArrows=="verticalcentered") {
										
										la.css({'visibility':'visible'});
										ra.css({'visibility':'visible'});
										la.addClass("large");
										ra.addClass("large");
										la.css({'position':'absolute','left': (ldiff/2)+"px",'top': (cap.outerHeight()/2 )+"px"});
										ra.css({'position':'absolute','left': (opt.width - ra.outerWidth()+ldiff/2)+"px",'top': (cap.outerHeight()/2)+"px"});
									} else {
									
										la.css({'visibility':'hidden'});
										ra.css({'visibility':'hidden'});
									}
								
							} else {
								if (opt.navigationType=="none") {
									
									try{ cap.find('.tp-bullets').css({'visibility':'hidden'}); } catch(e) {}
									try{ cap.find('.tp-thumbs').css({'visibility':'hidden'});} catch(e) {}
									
									if (opt.navigationArrows!="none") {								
										var ldiff = cap.outerWidth()- opt.width;	
										
										la.css({'visibility':'visible'});
										ra.css({'visibility':'visible'});
										la.addClass("large");
										ra.addClass("large");
										la.css({'position':'absolute','left': (ldiff/2)+"px",'top': (cap.outerHeight()/2)+"px"});
										ra.css({'position':'absolute','left': (opt.width - ra.outerWidth()+ldiff/2)+"px",'top': (cap.outerHeight()/2)+"px"});
									} else {
										
										la.css({'visibility':'hidden'});
										ra.css({'visibility':'hidden'});
									}
								}
							} 
						} 
			
		}
		
		
		
		//////////////////////////////////////////////////////////
		//	-	SET THE IMAGE SIZE TO FIT INTO THE CONTIANER -  //
		////////////////////////////////////////////////////////
		function setSize(img,opt) {
		
		    
			opt.width=parseInt(opt.container.width(),0);
			opt.height=parseInt(opt.container.height(),0);
			
			opt.bw = opt.width / opt.startwidth;
			opt.bh = opt.height / opt.startheight;
			
			if (opt.bh>1) {
							opt.bw=1;
							opt.bh=1;
						}
			
			
			// IF IMG IS ALREADY PREPARED, WE RESET THE SIZE FIRST HERE
			if (img.data('orgw')!=undefined) {
				img.width(img.data('orgw'));
				img.height(img.data('orgh'));				
			}
			
			
			var fw = opt.width / img.width();
			var fh = opt.height / img.height();
			
			
			opt.fw = fw;
			opt.fh = fh;
			
			if (img.data('orgw')==undefined) {
				img.data('orgw',img.width());
				img.data('orgh',img.height());
			}
			
			
			
			if (opt.fullWidth=="on") {
					
					var cow = opt.container.parent().width();
					var coh = opt.container.parent().height();
					var ffh = coh / img.data('orgh');
					var ffw = cow / img.data('orgw');
					
					
					img.width(img.width()*ffh);
					img.height(coh);	
					
					if (img.width()<cow) {
						img.width(cow+50);						
						var ffw = img.width() / img.data('orgw');
						img.height(img.data('orgh')*ffw);
					}
					
					if (img.width()>cow) {
						img.data("fxof",(cow/2 - img.width()/2));	
						
						img.css({'position':'absolute','left':img.data('fxof')+"px"});
					}
										
			
			} else {
			
					img.width(opt.width);
					img.height(img.height()*fw);				
					
					if (img.height()<opt.height && img.height()!=0 && img.height()!=null) {
						
						img.height(opt.height);
						img.width(img.data('orgw')*fh);
					}
			}
			
			
			
			img.data('neww',img.width());
			img.data('newh',img.height());
			if (opt.fullWidth=="on") {
				opt.slotw=Math.ceil(img.width()/opt.slots);
			} else {
				opt.slotw=Math.ceil(opt.width/opt.slots);
			}
			opt.sloth=Math.ceil(opt.height/opt.slots);
			
		}
		
		
		
		
		/////////////////////////////////////////
		//	-	PREPARE THE SLIDES / SLOTS -  //
		///////////////////////////////////////
		function prepareSlides(container,opt) {
		
			container.find('.caption').each(function() { $(this).addClass($(this).data('transition')); $(this).addClass('start') });
			
			container.find('ul:first >li').each(function(j) {
				var li=$(this);
				if (li.data('link')!=undefined) {
					var link = li.data('link');
					li.append('<div class="caption sft slidelink" data-x="0" data-y="0" data-start="0"><a href="'+link+'"><div></div></a></div>');
					
				}
			});
			
			container.find('ul:first li >img').each(function(j) {

				var img=$(this);	
				img.addClass('defaultimg');				
				setSize(img,opt);				
				img.wrap('<div class="slotholder"></div>');
				img.css({'opacity':0});		
				img.data('li-id',j);
								
			});					
		}
		
		
		///////////////////////
		// PREPARE THE SLIDE //
		//////////////////////
		function prepareOneSlide(slotholder,opt,visible) {
				
				var sh=slotholder;					
				var img = sh.find('img')
				setSize(img,opt)
				var src = img.attr('src');
				var w = img.data('neww');
				var h = img.data('newh');
				var fulloff = img.data("fxof");
				if (fulloff==undefined) fulloff=0;
				
				
				var off=0;
				
				
				if (!visible) 
					var off=0-opt.slotw;
					
				for (var i=0;i<opt.slots;i++) 				
					sh.append('<div class="slot" style="position:absolute;top:0px;left:'+(fulloff+i*opt.slotw)+'px;overflow:hidden;width:'+opt.slotw+'px;height:'+h+'px"><div class="slotslide" style="position:absolute;top:0px;left:'+off+'px;width:'+opt.slotw+'px;height:'+h+'px;overflow:hidden;"><img style="position:absolute;top:0px;left:'+(0-(i*opt.slotw))+'px;width:'+w+'px;height:'+h+'px" src="'+src+'"></div></div>');									
											
		}
		
		
		///////////////////////
		// PREPARE THE SLIDE //
		//////////////////////
		function prepareOneSlideV(slotholder,opt,visible) {
				
				var sh=slotholder;					
				var img = sh.find('img')
				setSize(img,opt)
				var src = img.attr('src');
				var w = img.data('neww');
				var h = img.data('newh');
				var fulloff = img.data("fxof");
				if (fulloff==undefined) fulloff=0;
				var off=0;
				
				
				if (!visible) 
					var off=0-opt.sloth;
				
				for (var i=0;i<opt.slots;i++) 				
					sh.append('<div class="slot" style="position:absolute;top:'+(i*opt.sloth)+'px;left:'+(fulloff)+'px;overflow:hidden;width:'+w+'px;height:'+(opt.sloth)+'px"><div class="slotslide" style="position:absolute;top:'+off+'px;left:0px;width:'+w+'px;height:'+opt.sloth+'px;overflow:hidden;"><img style="position:absolute;top:'+(0-(i*opt.sloth))+'px;left:0px;width:'+w+'px;height:'+h+'px" src="'+src+'"></div></div>');									
											
		}
		
		
		///////////////////////
		// PREPARE THE SLIDE //
		//////////////////////
		function prepareOneSlideBox(slotholder,opt,visible) {
				
				var sh=slotholder;					
				var img = sh.find('img')
				setSize(img,opt)
				var src = img.attr('src');
				var w = img.data('neww');
				var h = img.data('newh');
				var fulloff = img.data("fxof");
				if (fulloff==undefined) fulloff=0;
				var off=0;
				
				
				
				
				// SET THE MINIMAL SIZE OF A BOX
				var basicsize = 0;
				if (opt.sloth>opt.slotw)  
					basicsize=opt.sloth
				else
					basicsize=opt.slotw;
				
				
				if (!visible) {
					var off=0-basicsize;
				}
				
				opt.slotw = basicsize;
				opt.sloth = basicsize;
				var x=0;
				var y=0;
				
				
				
				for (var j=0;j<opt.slots;j++) {
					
					y=0;
					for (var i=0;i<opt.slots;i++) 	{			
						
						
						sh.append('<div class="slot" '+
								  'style="position:absolute;'+
											'top:'+y+'px;'+
											'left:'+(fulloff+x)+'px;'+
											'width:'+basicsize+'px;'+
											'height:'+basicsize+'px;'+
											'overflow:hidden;">'+
											
								  '<div class="slotslide" data-x="'+x+'" data-y="'+y+'" '+
								  'style="position:absolute;'+
											'top:'+(0)+'px;'+
											'left:'+(0)+'px;'+
											'width:'+basicsize+'px;'+
											'height:'+basicsize+'px;'+
											'overflow:hidden;">'+
											
								  '<img style="position:absolute;'+
											'top:'+(0-y)+'px;'+
											'left:'+(0-x)+'px;'+
											'width:'+w+'px;'+
											'height:'+h+'px"'+
								  'src="'+src+'"></div></div>');									
						y=y+basicsize;						
					}
					x=x+basicsize;
				}
		}
		
		
		
		
		
		///////////////////////
		//	REMOVE SLOTS	//
		/////////////////////
		function removeSlots(container) {
			
			container.find('.slotholder .slot').each(function() {
				clearTimeout($(this).data('tout'));
				$(this).remove();
			});
			
		}
		
		
		////////////////////////
		//	CAPTION POSITION  //
		///////////////////////
		function setCaptionPositions(container,opt) {
			
			// FIND THE RIGHT CAPTIONS
			var actli = container.find('li:eq('+opt.act+')');
			var nextli = container.find('li:eq('+opt.next+')');
						
			// SET THE NEXT CAPTION AND REMOVE THE LAST CAPTION
			var nextcaption=nextli.find('.caption');
			
			if (nextcaption.find('iframe')==0) {
							
				// MOVE THE CAPTIONS TO THE RIGHT POSITION
				if (nextcaption.hasClass('hcenter'))
					nextcaption.css({'height':opt.height+"px",'top':'0px','left':(opt.width/2 - nextcaption.outerWidth()/2)+'px'});
				else
					if (nextcaption.hasClass('vcenter'))
						nextcaption.css({'width':opt.width+"px",'left':'0px','top':(opt.height/2 - nextcaption.outerHeight()/2)+'px'});			
			}
		}
		
		
		//////////////////////////////
		//                         //
		//	-	SWAP THE SLIDES -  //
		//                        //
		////////////////////////////
		function swapSlide(container,opt) {
			

			opt.transition = 1;
			
			try {
				var actli = container.find('li:eq('+opt.act+')');
			} catch(e) {  
				var actli=container.find('li:eq(1)');
			}
			
			var nextli = container.find('li:eq('+opt.next+')');
			
			var actsh = actli.find('.slotholder');
			var nextsh = nextli.find('.slotholder');
			actli.css({'visibility':'visible'});
			nextli.css({'visibility':'visible'});
			
			if ($.browser.msie && $.browser.version<9) {
				if (nextli.data('transition')=="boxfade") nextli.data('transition',"boxslide");
				if (nextli.data('transition')=="slotfade-vertical") nextli.data('transition',"slotzoom-vertical");
				if (nextli.data('transition')=="slotfade-horizontal") nextli.data('transition',"slotzoom-horizontal");
			}
			
			
			// IF DELAY HAS BEEN SET VIA THE SLIDE, WE TAKE THE NEW VALUE, OTHER WAY THE OLD ONE...
			if (nextli.data('delay')!=undefined) {
						opt.cd=0;
						opt.delay=nextli.data('delay');						
			} else {
				opt.delay=opt.origcd;
			}
			
			// RESET POSITION AND FADES OF LI'S
			actli.css({'left':'0px','top':'0px'});
			nextli.css({'left':'0px','top':'0px'});
			
			///////////////////////////////////////
			// TRANSITION CHOOSE - RANDOM EFFECTS//
			///////////////////////////////////////
			var nexttrans = 0;
			
			
				
				
			if (nextli.data('transition')=="boxslide") nexttrans = 0
			  else 
				if (nextli.data('transition')=="boxfade") nexttrans = 1
				  else
					if (nextli.data('transition')=="slotslide-horizontal") nexttrans = 2
					  else 
						if (nextli.data('transition')=="slotslide-vertical") nexttrans = 3
						  else 
						    if (nextli.data('transition')=="curtain-1") nexttrans = 4
							  else 
								if (nextli.data('transition')=="curtain-2") nexttrans = 5
								 else 
								   if (nextli.data('transition')=="curtain-3") nexttrans = 6
									 else
									   if (nextli.data('transition')=="slotzoom-horizontal") nexttrans = 7
									     else
											if (nextli.data('transition')=="slotzoom-vertical")  nexttrans = 8
											  else
												 if (nextli.data('transition')=="slotfade-horizontal")  nexttrans = 9
												    else 
													   if (nextli.data('transition')=="slotfade-vertical") nexttrans = 10
													      else
															if (nextli.data('transition')=="fade") nexttrans = 11
															 else 
																if (nextli.data('transition')=="slideleft")  nexttrans = 12
																	else 
																		if (nextli.data('transition')=="slideup") nexttrans = 13
																			else 
																				if (nextli.data('transition')=="slidedown") nexttrans = 14
																					else 
																						if (nextli.data('transition')=="slideright") nexttrans = 15;
																							else {
																								nexttrans=Math.round(Math.random()*16);
																								nextli.data('slotamount',Math.round(Math.random()*12+4));																								
																							}
			
			if (nextli.data('transition')=="slidehorizontal") {
					if (opt.act<opt.next)
						nexttrans = 12
					else
						nexttrans = 15
				}
				
			if (nextli.data('transition')=="slidevertical") {
					if (opt.act<opt.next)
						nexttrans = 13
					else
						nexttrans = 14
				}
				
				
			if (nexttrans>16) nexttrans = 15;
			if (nexttrans<0) nexttrans = 0;
										 
			
			/////////////////////////////////////////////
			// SET THE BULLETS SELECTED OR UNSELECTED  //
			/////////////////////////////////////////////
			
			
			container.parent().find(".bullet").each(function() {
				var bul = $(this);
				bul.removeClass("selected");								
				if (bul.index() == opt.next) bul.addClass('selected');
			});
			
			
			//////////////////////////////////////////////////////////////////
			// 		SET THE NEXT CAPTION AND REMOVE THE LAST CAPTION		//
			//////////////////////////////////////////////////////////////////					
					
					container.find('li').each(function() {
						var li = $(this);
						if (li.index!=opt.act && li.index!=opt.next) li.css({'z-index':16});
					});
					
					actli.css({'z-index':18});
					nextli.css({'z-index':20});
					nextli.css({'opacity':0});
			
			
			///////////////////////////
			//	ANIMATE THE CAPTIONS //
			///////////////////////////
			removeTheCaptions(actli,opt);
			animateTheCaptions(nextli, opt);		
			
			
		

			/////////////////////////////////////////////
			//	SET THE ACTUAL AMOUNT OF SLIDES !!     //
			//  SET A RANDOM AMOUNT OF SLOTS          //
			///////////////////////////////////////////
						if (nextli.data('slotamount')==undefined || nextli.data('slotamount')<1) {
							opt.slots=Math.round(Math.random()*12+4);
							if (nextli.data('transition')=="boxslide")
								opt.slots=Math.round(Math.random()*6+3);
						 } else {
							opt.slots=nextli.data('slotamount');
						}
			
			
		
			
			/////////////////////////////////////
			// THE SLOTSLIDE - TRANSITION I.  //
			////////////////////////////////////
			if (nexttrans==0) {
					
						if (opt.slots>15) opt.slots=15;
						
						nextli.css({'opacity':1});
						
						// PREPARE THE SLOTS HERE
						prepareOneSlideBox(actsh,opt,true);
						prepareOneSlideBox(nextsh,opt,false);
						
						//SET DEFAULT IMG UNVISIBLE
						nextsh.find('.defaultimg').css({'opacity':0});
						//actsh.find('.defaultimg').css({'opacity':0});

						
						// ALL NEW SLOTS SHOULD BE SLIDED FROM THE LEFT TO THE RIGHT
						
						nextsh.find('.slotslide').each(function(j) {
							var ss=$(this);
							ss.css({'top':(0-opt.sloth)+"px",'left':(0-opt.slotw)+"px"});	
							
							
							setTimeout(function() {
									
									if (opt.firefox13)
											ss.animate({'top':"0px",'left':'0px'},{duration:(400),queue:false,complete:function() {
																	if (j==(opt.slots*opt.slots)-1) {
																		removeSlots(container);
																		nextsh.find('.defaultimg').css({'opacity':1});
																		actsh.find('.defaultimg').css({'opacity':0});
																		opt.act=opt.next;
																		opt.transition = 0;		
																		moveSelectedThumb(container);
																	}
																	
											}});
									
									else
									
											ss.cssAnimate({'top':"0px",'left':'0px'},{duration:(400),queue:false,complete:function() {
																	if (j==(opt.slots*opt.slots)-1) {
																		removeSlots(container);
																		nextsh.find('.defaultimg').css({'opacity':1});
																		actsh.find('.defaultimg').css({'opacity':0});
																		if ($.browser.msie && $.browser.version<9) actsh.find('.defaultimg').css({'opacity':1});
																		
																		opt.act=opt.next;
																		opt.transition = 0;		
																		moveSelectedThumb(container);
																	}
																	
											}});
							},j*15);
						});
			}
			
			
			
			/////////////////////////////////////
			// THE SLOTSLIDE - TRANSITION I.  //
			////////////////////////////////////
			if (nexttrans==1) {
					

						if (opt.slots>15) opt.slots=15;
						nextli.css({'opacity':1});
						
						// PREPARE THE SLOTS HERE
						//prepareOneSlideBox(actsh,opt,true);
						prepareOneSlideBox(nextsh,opt,false);
						
						//SET DEFAULT IMG UNVISIBLE
						nextsh.find('.defaultimg').css({'opacity':0});
						//actsh.find('.defaultimg').css({'opacity':0});

						
						// ALL NEW SLOTS SHOULD BE SLIDED FROM THE LEFT TO THE RIGHT
						
						nextsh.find('.slotslide').each(function(j) {
							var ss=$(this);
							ss.css({'opacity':0});								
							ss.find('img').css({'opacity':0});
							ss.find('img').css({'top':(Math.random()*opt.slotw-opt.slotw)+"px",'left':(Math.random()*opt.slotw-opt.slotw)+"px"});	
							
							
							var rand=Math.random()*1000+500;
							if (j==(opt.slots*opt.slots)-1) rand=1500;
							if (opt.firefox13) {
									ss.find('img').animate({'opacity':1,'top':(0-ss.data('y'))+"px",'left':(0-ss.data('x'))+'px'},{duration:rand,queue:false});
									ss.animate({'opacity':1},{duration:rand,queue:false,complete:function() {
															if (j==(opt.slots*opt.slots)-1) {
																removeSlots(container);
																nextsh.find('.defaultimg').css({'opacity':1});
																actsh.find('.defaultimg').css({'opacity':0});
																opt.act=opt.next;
																opt.transition = 0;			
																		moveSelectedThumb(container);														
															}
															
									}});
							} else {
									ss.find('img').cssAnimate({'opacity':1,'top':(0-ss.data('y'))+"px",'left':(0-ss.data('x'))+'px'},{duration:rand,queue:false});
									ss.cssAnimate({'opacity':1},{duration:rand,queue:false,complete:function() {
															if (j==(opt.slots*opt.slots)-1) {
																removeSlots(container);
																nextsh.find('.defaultimg').css({'opacity':1});
																actsh.find('.defaultimg').css({'opacity':0});
																if ($.browser.msie && $.browser.version<9) actsh.find('.defaultimg').css({'opacity':1});
																opt.act=opt.next;
																opt.transition = 0;			
																		moveSelectedThumb(container);														
															}
															
									}});
							}
							
						});
			}
			
			
			/////////////////////////////////////
			// THE SLOTSLIDE - TRANSITION I.  //
			////////////////////////////////////
			if (nexttrans==2) {
					

						
						nextli.css({'opacity':1});
						
						// PREPARE THE SLOTS HERE
						prepareOneSlide(actsh,opt,true);
						prepareOneSlide(nextsh,opt,false);
						
						//SET DEFAULT IMG UNVISIBLE
						nextsh.find('.defaultimg').css({'opacity':0});
						//actsh.find('.defaultimg').css({'opacity':0});

						// ALL OLD SLOTS SHOULD BE SLIDED TO THE RIGHT
						actsh.find('.slotslide').each(function() {
							var ss=$(this);	
							if (opt.firefox13) {							
									ss.animate({'left':opt.slotw+'px'},{duration:500,queue:false,complete:function() {
															removeSlots(container);
															nextsh.find('.defaultimg').css({'opacity':1});
															actsh.find('.defaultimg').css({'opacity':0});
															opt.act=opt.next;
															opt.transition = 0;			
																		moveSelectedThumb(container);													
															
									}});
								} else {
									ss.cssAnimate({'left':opt.slotw+'px'},{duration:500,queue:false,complete:function() {
															removeSlots(container);
															nextsh.find('.defaultimg').css({'opacity':1});
															actsh.find('.defaultimg').css({'opacity':0});
															opt.act=opt.next;
															opt.transition = 0;			
																		moveSelectedThumb(container);													
															
									}});
								}
						}); 
						
						// ALL NEW SLOTS SHOULD BE SLIDED FROM THE LEFT TO THE RIGHT
						nextsh.find('.slotslide').each(function() {
							var ss=$(this);
							ss.css({'left':(0-opt.slotw)+"px"});				
							if (opt.firefox13) {
									ss.animate({'left':'0px'},{duration:500,queue:false,complete:function() {
															removeSlots(container);
															nextsh.find('.defaultimg').css({'opacity':1});
															actsh.find('.defaultimg').css({'opacity':0});
															if ($.browser.msie && $.browser.version<9) actsh.find('.defaultimg').css({'opacity':1});
															opt.act=opt.next;
															opt.transition = 0;		
																		moveSelectedThumb(container);													
															
									}});
							} else {
									ss.cssAnimate({'left':'0px'},{duration:500,queue:false,complete:function() {
															removeSlots(container);
															nextsh.find('.defaultimg').css({'opacity':1});
															actsh.find('.defaultimg').css({'opacity':0});
															opt.act=opt.next;
															opt.transition = 0;		
																		moveSelectedThumb(container);													
															
									}});
							}
						});
			}
			
			
			
			/////////////////////////////////////
			// THE SLOTSLIDE - TRANSITION I.  //
			////////////////////////////////////
			if (nexttrans==3) {
					

						
						nextli.css({'opacity':1});
						
						// PREPARE THE SLOTS HERE
						prepareOneSlideV(actsh,opt,true);
						prepareOneSlideV(nextsh,opt,false);
						
						//SET DEFAULT IMG UNVISIBLE
						nextsh.find('.defaultimg').css({'opacity':0});
						//actsh.find('.defaultimg').css({'opacity':0});

						// ALL OLD SLOTS SHOULD BE SLIDED TO THE RIGHT
						actsh.find('.slotslide').each(function() {
							var ss=$(this);			
							if (opt.firefox13) {							
									ss.animate({'top':opt.sloth+'px'},{duration:500,queue:false,complete:function() {
															removeSlots(container);
															nextsh.find('.defaultimg').css({'opacity':1});
															actsh.find('.defaultimg').css({'opacity':0});
															opt.act=opt.next;
															opt.transition = 0;		
																		moveSelectedThumb(container);													
															
									}});
							} else {
									ss.cssAnimate({'top':opt.sloth+'px'},{duration:500,queue:false,complete:function() {
															removeSlots(container);
															nextsh.find('.defaultimg').css({'opacity':1});
															actsh.find('.defaultimg').css({'opacity':0});
															if ($.browser.msie && $.browser.version<9) actsh.find('.defaultimg').css({'opacity':1});
															opt.act=opt.next;
															opt.transition = 0;		
																		moveSelectedThumb(container);													
															
									}});
							}
						}); 
						
						// ALL NEW SLOTS SHOULD BE SLIDED FROM THE LEFT TO THE RIGHT
						nextsh.find('.slotslide').each(function() {
							var ss=$(this);
							ss.css({'top':(0-opt.sloth)+"px"});	
							if (opt.firefox13) {									
								ss.animate({'top':'0px'},{duration:500,queue:false,complete:function() {
													removeSlots(container);
													nextsh.find('.defaultimg').css({'opacity':1});
													actsh.find('.defaultimg').css({'opacity':0});
													opt.act=opt.next;
													opt.transition = 0;		
																moveSelectedThumb(container);													
													
								}});
							} else {
								ss.cssAnimate({'top':'0px'},{duration:500,queue:false,complete:function() {
													removeSlots(container);
													nextsh.find('.defaultimg').css({'opacity':1});
													actsh.find('.defaultimg').css({'opacity':0});
													if ($.browser.msie && $.browser.version<9) actsh.find('.defaultimg').css({'opacity':1});
													opt.act=opt.next;
													opt.transition = 0;		
																moveSelectedThumb(container);													
													
								}});
							}
						});
			}
			
			
			
			/////////////////////////////////////
			// THE SLOTSLIDE - TRANSITION I.  //
			////////////////////////////////////
			if (nexttrans==4) {
					

						
						nextli.css({'opacity':1});
						
						// PREPARE THE SLOTS HERE
						prepareOneSlide(actsh,opt,true);
						prepareOneSlide(nextsh,opt,true);
						
						//SET DEFAULT IMG UNVISIBLE
						nextsh.find('.defaultimg').css({'opacity':0});
						actsh.find('.defaultimg').css({'opacity':0});

						
						// ALL NEW SLOTS SHOULD BE SLIDED FROM THE LEFT TO THE RIGHT
						actsh.find('.slotslide').each(function(i) {
							var ss=$(this);							
							
							ss.cssAnimate({'top':(0+(opt.height))+"px",'opacity':1},{duration:300+(i*(70-opt.slots)),queue:false,complete:function() {
													
													
							}});
						});
						
						// ALL NEW SLOTS SHOULD BE SLIDED FROM THE LEFT TO THE RIGHT
						nextsh.find('.slotslide').each(function(i) {
							var ss=$(this);							
							ss.css({'top':(0-(opt.height))+"px",'opacity':0});				
							if (opt.firefox13) {
									ss.animate({'top':'0px','opacity':1},{duration:300+(i*(70-opt.slots)),queue:false,complete:function() {
															if (i==opt.slots-1) {
																removeSlots(container);
																nextsh.find('.defaultimg').css({'opacity':1});
																actsh.find('.defaultimg').css({'opacity':0});
																opt.act=opt.next;
																opt.transition = 0;	
																		moveSelectedThumb(container);														
															}
															
									}});
							} else {
									ss.cssAnimate({'top':'0px','opacity':1},{duration:300+(i*(70-opt.slots)),queue:false,complete:function() {
															if (i==opt.slots-1) {
																removeSlots(container);
																nextsh.find('.defaultimg').css({'opacity':1});
																actsh.find('.defaultimg').css({'opacity':0});
																if ($.browser.msie && $.browser.version<9) actsh.find('.defaultimg').css({'opacity':1});
																opt.act=opt.next;
																opt.transition = 0;	
																		moveSelectedThumb(container);														
															}
															
									}});
							}
						});
			}
			
			
			/////////////////////////////////////
			// THE SLOTSLIDE - TRANSITION I.  //
			////////////////////////////////////
			if (nexttrans==5) {
					

						
						nextli.css({'opacity':1});
						
						// PREPARE THE SLOTS HERE
						prepareOneSlide(actsh,opt,true);
						prepareOneSlide(nextsh,opt,true);
						
						//SET DEFAULT IMG UNVISIBLE
						nextsh.find('.defaultimg').css({'opacity':0});
						actsh.find('.defaultimg').css({'opacity':0});

						// ALL NEW SLOTS SHOULD BE SLIDED FROM THE LEFT TO THE RIGHT
						actsh.find('.slotslide').each(function(i) {
							var ss=$(this);							
							if (opt.firefox13) {
									ss.animate({'top':(0+(opt.height))+"px",'opacity':1},{duration:300+((opt.slots-i)*(70-opt.slots)),queue:false,complete:function() {																				
									}});
							} else {
									ss.cssAnimate({'top':(0+(opt.height))+"px",'opacity':1},{duration:300+((opt.slots-i)*(70-opt.slots)),queue:false,complete:function() {																				
									}});
							}
						});
						
						// ALL NEW SLOTS SHOULD BE SLIDED FROM THE LEFT TO THE RIGHT
						nextsh.find('.slotslide').each(function(i) {
							var ss=$(this);							
							ss.css({'top':(0-(opt.height))+"px",'opacity':0});				
							if (opt.firefox13) {
									ss.animate({'top':'0px','opacity':1},{duration:300+((opt.slots-i)*(70-opt.slots)),queue:false,complete:function() {
															if (i==0) {
																removeSlots(container);
																nextsh.find('.defaultimg').css({'opacity':1});
																actsh.find('.defaultimg').css({'opacity':0});
																opt.act=opt.next;
																opt.transition = 0;		
																																moveSelectedThumb(container);
															}
															
									}});
							} else {
										ss.cssAnimate({'top':'0px','opacity':1},{duration:300+((opt.slots-i)*(70-opt.slots)),queue:false,complete:function() {
															if (i==0) {
																removeSlots(container);
																nextsh.find('.defaultimg').css({'opacity':1});
																actsh.find('.defaultimg').css({'opacity':0});
																if ($.browser.msie && $.browser.version<9) actsh.find('.defaultimg').css({'opacity':1});
																opt.act=opt.next;
																opt.transition = 0;		
																																moveSelectedThumb(container);
															}
															
									}});
							}
						});
			}
			
			
			/////////////////////////////////////
			// THE SLOTSLIDE - TRANSITION I.  //
			////////////////////////////////////
			if (nexttrans==6) {
					

						
						nextli.css({'opacity':1});
						if (opt.slots<2) opt.slots=2;
						// PREPARE THE SLOTS HERE
						prepareOneSlide(actsh,opt,true);
						prepareOneSlide(nextsh,opt,true);
						
						//SET DEFAULT IMG UNVISIBLE
						nextsh.find('.defaultimg').css({'opacity':0});
						actsh.find('.defaultimg').css({'opacity':0});

						
						actsh.find('.slotslide').each(function(i) {
							var ss=$(this);							

							if (i<opt.slots/2)
								var tempo = (i+2)*60;
							else
								var tempo = (2+opt.slots-i)*60;
								
							if (opt.firefox13) {
									ss.animate({'top':(0+(opt.height))+"px",'opacity':1},{duration:300+tempo,queue:false,complete:function() {}});
							} else {
									ss.cssAnimate({'top':(0+(opt.height))+"px",'opacity':1},{duration:300+tempo,queue:false,complete:function() {}});
							}
						});
						
						// ALL NEW SLOTS SHOULD BE SLIDED FROM THE LEFT TO THE RIGHT
						nextsh.find('.slotslide').each(function(i) {
							var ss=$(this);							
							ss.css({'top':(0-(opt.height))+"px",'opacity':0});		
							if (i<opt.slots/2)
								var tempo = (i+2)*60;
							else
								var tempo = (2+opt.slots-i)*60;
								
							if (opt.firefox13) {
									ss.animate({'top':'0px','opacity':1},{duration:300+tempo,queue:false,complete:function() {
															if (i==Math.round(opt.slots/2)) {
																removeSlots(container);
																nextsh.find('.defaultimg').css({'opacity':1});
																actsh.find('.defaultimg').css({'opacity':0});
																opt.act=opt.next;
																opt.transition = 0;		
																																moveSelectedThumb(container);
															}
															
									}});
							} else {
									ss.cssAnimate({'top':'0px','opacity':1},{duration:300+tempo,queue:false,complete:function() {
															if (i==Math.round(opt.slots/2)) {
																removeSlots(container);
																nextsh.find('.defaultimg').css({'opacity':1});
																actsh.find('.defaultimg').css({'opacity':0});
																if ($.browser.msie && $.browser.version<9) actsh.find('.defaultimg').css({'opacity':1});
																opt.act=opt.next;
																opt.transition = 0;		
																																moveSelectedThumb(container);
															}
															
									}});
							}
						});
			}
			
			
			////////////////////////////////////
			// THE SLOTSZOOM - TRANSITION II. //
			////////////////////////////////////						
			if (nexttrans==7) {
						

						nextli.css({'opacity':1});
						
						// PREPARE THE SLOTS HERE
						prepareOneSlide(actsh,opt,true);
						prepareOneSlide(nextsh,opt,true);
						
						//SET DEFAULT IMG UNVISIBLE
						nextsh.find('.defaultimg').css({'opacity':0});
						//actsh.find('.defaultimg').css({'opacity':0});

						// ALL OLD SLOTS SHOULD BE SLIDED TO THE RIGHT
						actsh.find('.slotslide').each(function() {
							var ss=$(this).find('img');		
							if (opt.firefox13) {
									ss.animate({'left':(0-opt.slotw/2)+'px',
												   'top':(0-opt.height/2)+'px',
												   'width':(opt.slotw*2)+"px",
												   'height':(opt.height*2)+"px",
												   opacity:0
													},{duration:1000,queue:false,complete:function() {
															removeSlots(container);
															nextsh.find('.defaultimg').css({'opacity':1});
															actsh.find('.defaultimg').css({'opacity':0});
															opt.transition = 0;													
															opt.act = opt.next;
																															moveSelectedThumb(container);
													}});
							}	else	{
							
										ss.cssAnimate({'left':(0-opt.slotw/2)+'px',
												   'top':(0-opt.height/2)+'px',
												   'width':(opt.slotw*2)+"px",
												   'height':(opt.height*2)+"px",
												   opacity:0
													},{duration:1000,queue:false,complete:function() {
															removeSlots(container);
															nextsh.find('.defaultimg').css({'opacity':1});
															actsh.find('.defaultimg').css({'opacity':0});
															if ($.browser.msie && $.browser.version<9) actsh.find('.defaultimg').css({'opacity':1});
															opt.transition = 0;													
															opt.act = opt.next;
																															moveSelectedThumb(container);
													}});
							}
						}); 
						
						
						// ALL NEW SLOTS SHOULD BE SLIDED FROM THE LEFT TO THE RIGHT //
						///////////////////////////////////////////////////////////////
						nextsh.find('.slotslide').each(function(i) {
							var ss=$(this).find('img');
							ss.css({'left':(0)+'px',
									'top':(0)+'px',
									//'width':(opt.width*2)+"px",
									//'height':(opt.height*2)+"px",
									opacity:0});
							if (opt.firefox13) {
									ss.animate({'left':(0-i*opt.slotw)+'px',
												   'top':(0)+'px',
												   'width':(nextsh.find('.defaultimg').data('neww'))+"px",
												   'height':(nextsh.find('.defaultimg').data('newh'))+"px",
												   opacity:1
													},{duration:1000,queue:false});
							} else {
								 ss.cssAnimate({'left':(0-i*opt.slotw)+'px',
												   'top':(0)+'px',
												   'width':(nextsh.find('.defaultimg').data('neww'))+"px",
												   'height':(nextsh.find('.defaultimg').data('newh'))+"px",
												   opacity:1
													},{duration:1000,queue:false});
							}
						});
			}
			
			
			
			
			////////////////////////////////////
			// THE SLOTSZOOM - TRANSITION II. //
			////////////////////////////////////						
			if (nexttrans==8) {
						

						nextli.css({'opacity':1});
						
						// PREPARE THE SLOTS HERE
						prepareOneSlideV(actsh,opt,true);
						prepareOneSlideV(nextsh,opt,true);
						
						//SET DEFAULT IMG UNVISIBLE
						nextsh.find('.defaultimg').css({'opacity':0});
						//actsh.find('.defaultimg').css({'opacity':0});

						// ALL OLD SLOTS SHOULD BE SLIDED TO THE RIGHT
						actsh.find('.slotslide').each(function() {
							var ss=$(this).find('img');				
							if (opt.firefox13) {
									ss.animate({'left':(0-opt.width/2)+'px',
												   'top':(0-opt.sloth/2)+'px',
												   'width':(opt.width*2)+"px",
												   'height':(opt.sloth*2)+"px",
												   opacity:0
													},{duration:1000,queue:false,complete:function() {
															removeSlots(container);
															nextsh.find('.defaultimg').css({'opacity':1});
															actsh.find('.defaultimg').css({'opacity':0});
															opt.transition = 0;													
															opt.act = opt.next;
															moveSelectedThumb(container);
													}});
							} else {
							
											ss.cssAnimate({'left':(0-opt.width/2)+'px',
												   'top':(0-opt.sloth/2)+'px',
												   'width':(opt.width*2)+"px",
												   'height':(opt.sloth*2)+"px",
												   opacity:0
													},{duration:1000,queue:false,complete:function() {
															removeSlots(container);
															nextsh.find('.defaultimg').css({'opacity':1});
															actsh.find('.defaultimg').css({'opacity':0});
															if ($.browser.msie && $.browser.version<9) actsh.find('.defaultimg').css({'opacity':1});
															opt.transition = 0;													
															opt.act = opt.next;
															moveSelectedThumb(container);
													}});
							}
						}); 
						
						
						// ALL NEW SLOTS SHOULD BE SLIDED FROM THE LEFT TO THE RIGHT //
						///////////////////////////////////////////////////////////////
						nextsh.find('.slotslide').each(function(i) {
							var ss=$(this).find('img');
							ss.css({'left':(0)+'px',
									'top':(0)+'px',
									//'width':(opt.width*2)+"px",
									//'height':(opt.height*2)+"px",
									opacity:0});
							if (opt.firefox13) {		
									ss.animate({'left':(0)+'px',
												   'top':(0-i*opt.sloth)+'px',
												   'width':(nextsh.find('.defaultimg').data('neww'))+"px",
												   'height':(nextsh.find('.defaultimg').data('newh'))+"px",
												   opacity:1
													},{duration:1000,queue:false});
							} else {
									ss.cssAnimate({'left':(0)+'px',
												   'top':(0-i*opt.sloth)+'px',
												   'width':(nextsh.find('.defaultimg').data('neww'))+"px",
												   'height':(nextsh.find('.defaultimg').data('newh'))+"px",
												   opacity:1
													},{duration:1000,queue:false});
							}
						});
			}
			
			
			////////////////////////////////////////
			// THE SLOTSFADE - TRANSITION III.   //
			//////////////////////////////////////
			if (nexttrans==9) {
					

					
						nextli.css({'opacity':1});
						
						opt.slots = opt.width/20;
						
						prepareOneSlide(nextsh,opt,true);
						
						
						//actsh.find('.defaultimg').css({'opacity':0});
						nextsh.find('.defaultimg').css({'opacity':0});
						
						var ssamount=0;
						// ALL NEW SLOTS SHOULD BE SLIDED FROM THE LEFT TO THE RIGHT
						nextsh.find('.slotslide').each(function(i) {
							var ss=$(this);
							ssamount++;
							ss.css({'opacity':0});
							ss.data('tout',setTimeout(function() {	
											ss.animate({'opacity':1},{duration:300,queue:false});
											
											},i*4)
									);
							
						});
						
						setTimeout(function() {
									opt.transition = 0;
									opt.act = opt.next;	
									moveSelectedThumb(container);
							},(300+(ssamount*4)));
			}
			
			
			
			
			////////////////////////////////////////
			// THE SLOTSFADE - TRANSITION III.   //
			//////////////////////////////////////
			if (nexttrans==10) {
					

					
						nextli.css({'opacity':1});
						
						opt.slots = opt.height/20;
						
						prepareOneSlideV(nextsh,opt,true);
						
						
						//actsh.find('.defaultimg').css({'opacity':0});
						nextsh.find('.defaultimg').css({'opacity':0});
						
						var ssamount=0;
						// ALL NEW SLOTS SHOULD BE SLIDED FROM THE LEFT TO THE RIGHT
						nextsh.find('.slotslide').each(function(i) {
							var ss=$(this);
							ssamount++;
							ss.css({'opacity':0});
							ss.data('tout',setTimeout(function() {	
											ss.animate({'opacity':1},{duration:300,queue:false});
											
											},i*4)
									);
							
						});
						
						setTimeout(function() {
									opt.transition = 0;
									opt.act = opt.next;	
									moveSelectedThumb(container);									
							},(300+(ssamount*4)));
			}
			
			
			///////////////////////////
			// SIMPLE FADE ANIMATION //
			///////////////////////////
			
			if (nexttrans==11) {
					

					
						nextli.css({'opacity':1});
						
						opt.slots = 1;
						
						prepareOneSlide(nextsh,opt,true);
						
						
						//actsh.find('.defaultimg').css({'opacity':0});
						nextsh.find('.defaultimg').css({'opacity':0});
						
						var ssamount=0;
						// ALL NEW SLOTS SHOULD BE SLIDED FROM THE LEFT TO THE RIGHT
						nextsh.find('.slotslide').each(function(i) {
							var ss=$(this);
							ssamount++;
							ss.css({'opacity':0});
							ss.animate({'opacity':1},{duration:300,queue:false});							
						});
						
						setTimeout(function() {
									opt.transition = 0;
									opt.act = opt.next;	
									moveSelectedThumb(container);									
							},300);
			}
			
			
			
			
			
			if (nexttrans==12 || nexttrans==13 || nexttrans==14 || nexttrans==15) {
					
						nextli.css({'opacity':1});
						
						opt.slots = 1;
						
						prepareOneSlide(nextsh,opt,true);
						prepareOneSlide(actsh,opt,true);
						
						
						actsh.find('.defaultimg').css({'opacity':0});
						nextsh.find('.defaultimg').css({'opacity':0});
						
						var oow = opt.width;
						var ooh = opt.height;
						if (opt.fullWidth=="on") {
							oow=opt.container.parent().width();
							ooh=opt.container.parent().height();
							
						}
						
						// ALL NEW SLOTS SHOULD BE SLIDED FROM THE LEFT TO THE RIGHT						
						var ssn=nextsh.find('.slotslide')						
						if (nexttrans==12)
							ssn.css({'left':oow+"px"});
						else
							if (nexttrans==15)
								ssn.css({'left':(0-opt.width)+"px"});
							else
								if (nexttrans==13)
									ssn.css({'top':(ooh)+"px"});
								else
									if (nexttrans==14)
										ssn.css({'top':(0-opt.height)+"px"});
										
						if (opt.firefox13) {	
										ssn.animate({'left':'0px','top':'0px',opacity:1},{duration:1000,queue:false,complete:function() {
														removeSlots(container);
														nextsh.find('.defaultimg').css({'opacity':1});
														actsh.find('.defaultimg').css({'opacity':0});
														opt.transition = 0;													
														opt.act = opt.next;
														moveSelectedThumb(container);												
												}});					
						} else {
										ssn.cssAnimate({'left':'0px','top':'0px',opacity:1},{duration:1000,queue:false,complete:function() {
														removeSlots(container);
														nextsh.find('.defaultimg').css({'opacity':1});
														actsh.find('.defaultimg').css({'opacity':0});
														if ($.browser.msie && $.browser.version<9) actsh.find('.defaultimg').css({'opacity':1});
														opt.transition = 0;													
														opt.act = opt.next;
														moveSelectedThumb(container);												
												}});					
						}
										
						
						var ssa=actsh.find('.slotslide');
						if (opt.firefox13) {
								if (nexttrans==12)
									ssa.animate({'left':(0-oow)+'px',opacity:1},{duration:1000,queue:false});
								else
									if (nexttrans==15)
										ssa.animate({'left':(oow)+'px',opacity:1},{duration:1000,queue:false});
									else
										if (nexttrans==13)
											ssa.animate({'top':(0-ooh)+'px',opacity:1},{duration:1000,queue:false});
										else
											if (nexttrans==14)
												ssa.animate({'top':(ooh)+'px',opacity:1},{duration:1000,queue:false});
						} else {
								if (nexttrans==12)
									ssa.cssAnimate({'left':(0-oow)+'px',opacity:1},{duration:1000,queue:false});
								else
									if (nexttrans==15)
										ssa.cssAnimate({'left':(oow)+'px',opacity:1},{duration:1000,queue:false});
									else
										if (nexttrans==13)
											ssa.cssAnimate({'top':(0-ooh)+'px',opacity:1},{duration:1000,queue:false});
										else
											if (nexttrans==14)
												ssa.cssAnimate({'top':(ooh)+'px',opacity:1},{duration:1000,queue:false});
						}
						
						
						
						
			}
			
		
						
		}
		
				//////////////////////////
				//	REMOVE THE CAPTIONS //
				/////////////////////////				
				function removeTheCaptions(actli,opt) {
						actli.find('.caption').each(function(i) {
							var nextcaption=actli.find('.caption:eq('+i+')');																																							
							nextcaption.stop(true,true);
							clearTimeout(nextcaption.data('timer'));
							var easetype=nextcaption.data('easing');
							easetype="easeInOutSine";
							var ll = nextcaption.data('repx');
							var tt = nextcaption.data('repy');
							var oo = nextcaption.data('repo');
							
							
							if (nextcaption.find('iframe').length>0) {
									var par=nextcaption.find('iframe').parent();
									var iframe=par.html();
								setTimeout(function() {									
									nextcaption.find('iframe').remove();
									par.append(iframe);
								},nextcaption.data('speed'));
							}
							try {nextcaption.animate({'opacity':oo,'left':ll+'px','top':tt+"px"},{duration:nextcaption.data('speed'), easing:easetype});} catch(e) {}
						});
				}
		
				////////////////////////
				// SHOW THE CAPTION  //
				///////////////////////		
				function animateTheCaptions(nextli, opt) {
						
			
						nextli.find('.caption').each(function(i) {
						
								offsetx = opt.width/2 - opt.startwidth/2; 
						
								if (opt.bh>1) {							
									opt.bw=1;
									opt.bh=1;							
								}												
								
								if (opt.bw>1) {
									opt.bw=1;
									opt.bh=1;
								}
								
								var xbw = opt.bw;
								
								
								
								
								var nextcaption=nextli.find('.caption:eq('+i+')');																																							
								nextcaption.stop(true,true);
								
								
								if (nextcaption.hasClass("coloredbg")) offsetx=0;
								if (offsetx<0) offsetx=0;
								
								clearTimeout(nextcaption.data('timer'));
						
							   var imw =0;
							   var imh = 0;
							   
										if (nextcaption.find('img').length>0) {
											var im = nextcaption.find('img');
											if (im.data('ww') == undefined) im.data('ww',im.width());
											if (im.data('hh') == undefined) im.data('hh',im.height());
											
											var ww = im.data('ww');
											var hh = im.data('hh');
											
											
											im.width(ww*opt.bw);
											im.height(hh*opt.bh);
											imw = im.width();
											imh = im.height();
										} else {
										
											if (nextcaption.find('iframe').length>0) {
												var im = nextcaption.find('iframe');
												if (nextcaption.data('ww') == undefined) {
													nextcaption.data('ww',im.width());																										
												}
												if (nextcaption.data('hh') == undefined) nextcaption.data('hh',im.height());
												
												var ww = nextcaption.data('ww');
												var hh = nextcaption.data('hh');
												
												var nc =nextcaption;
													if (nc.data('fsize') == undefined) nc.data('fsize',parseInt(nc.css('font-size'),0) || 0);
													if (nc.data('pt') == undefined) nc.data('pt',parseInt(nc.css('paddingTop'),0) || 0);
													if (nc.data('pb') == undefined) nc.data('pb',parseInt(nc.css('paddingBottom'),0) || 0);
													if (nc.data('pl') == undefined) nc.data('pl',parseInt(nc.css('paddingLeft'),0) || 0);
													if (nc.data('pr') == undefined) nc.data('pr',parseInt(nc.css('paddingRight'),0) || 0);
													
													if (nc.data('mt') == undefined) nc.data('mt',parseInt(nc.css('marginTop'),0) || 0);
													if (nc.data('mb') == undefined) nc.data('mb',parseInt(nc.css('marginBottom'),0) || 0);
													if (nc.data('ml') == undefined) nc.data('ml',parseInt(nc.css('marginLeft'),0) || 0);
													if (nc.data('mr') == undefined) nc.data('mr',parseInt(nc.css('marginRight'),0) || 0);
													
													if (nc.data('bt') == undefined) nc.data('bt',parseInt(nc.css('borderTop'),0) || 0);
													if (nc.data('bb') == undefined) nc.data('bb',parseInt(nc.css('borderBottom'),0) || 0);
													if (nc.data('bl') == undefined) nc.data('bl',parseInt(nc.css('borderLeft'),0) || 0);
													if (nc.data('br') == undefined) nc.data('br',parseInt(nc.css('borderRight'),0) || 0);
													
													if (nc.data('lh') == undefined) nc.data('lh',parseInt(nc.css('lineHeight'),0) || 0);
																								
													
													nextcaption.css({
																	 'font-size': (nc.data('fsize') * opt.bw)+"px",
																	
																	 'padding-top': (nc.data('pt') * opt.bh) + "px",
																	 'padding-bottom': (nc.data('pb') * opt.bh) + "px",
																	 'padding-left': (nc.data('pl') * opt.bw) + "px",
																	 'padding-right': (nc.data('pr') * opt.bw) + "px",
																	 
																	 'margin-top': (nc.data('mt') * opt.bh) + "px",
																	 'margin-bottom': (nc.data('mb') * opt.bh) + "px",
																	 'margin-left': (nc.data('ml') * opt.bw) + "px",
																	 'margin-right': (nc.data('mr') * opt.bw) + "px",
																	 
																	 'border-top': (nc.data('bt') * opt.bh) + "px",
																	 'border-bottom': (nc.data('bb') * opt.bh) + "px",
																	 'border-left': (nc.data('bl') * opt.bw) + "px",
																	 'border-right': (nc.data('br') * opt.bw) + "px",
																	 
																	 'line-height': (nc.data('lh') * opt.bh) + "px",
																	 'height':(hh*opt.bh)+'px',
																	 'white-space':"nowrap"
																	 
																	 
													});
													
												im.width(ww*opt.bw);
												im.height(hh*opt.bh);
												imw = im.width();
												imh = im.height();
											} else {
											
													var nc =nextcaption;
													if (nc.data('fsize') == undefined) nc.data('fsize',parseInt(nc.css('font-size'),0) || 0);
													if (nc.data('pt') == undefined) nc.data('pt',parseInt(nc.css('paddingTop'),0) || 0);
													if (nc.data('pb') == undefined) nc.data('pb',parseInt(nc.css('paddingBottom'),0) || 0);
													if (nc.data('pl') == undefined) nc.data('pl',parseInt(nc.css('paddingLeft'),0) || 0);
													if (nc.data('pr') == undefined) nc.data('pr',parseInt(nc.css('paddingRight'),0) || 0);
													
													if (nc.data('mt') == undefined) nc.data('mt',parseInt(nc.css('marginTop'),0) || 0);
													if (nc.data('mb') == undefined) nc.data('mb',parseInt(nc.css('marginBottom'),0) || 0);
													if (nc.data('ml') == undefined) nc.data('ml',parseInt(nc.css('marginLeft'),0) || 0);
													if (nc.data('mr') == undefined) nc.data('mr',parseInt(nc.css('marginRight'),0) || 0);
													
													if (nc.data('bt') == undefined) nc.data('bt',parseInt(nc.css('borderTop'),0) || 0);
													if (nc.data('bb') == undefined) nc.data('bb',parseInt(nc.css('borderBottom'),0) || 0);
													if (nc.data('bl') == undefined) nc.data('bl',parseInt(nc.css('borderLeft'),0) || 0);
													if (nc.data('br') == undefined) nc.data('br',parseInt(nc.css('borderRight'),0) || 0);
													
													if (nc.data('lh') == undefined) nc.data('lh',parseInt(nc.css('lineHeight'),0) || 0);
																								
													
													nextcaption.css({
																	 'font-size': (nc.data('fsize') * opt.bw)+"px",
																	
																	 'padding-top': (nc.data('pt') * opt.bh) + "px",
																	 'padding-bottom': (nc.data('pb') * opt.bh) + "px",
																	 'padding-left': (nc.data('pl') * opt.bw) + "px",
																	 'padding-right': (nc.data('pr') * opt.bw) + "px",
																	 
																	 'margin-top': (nc.data('mt') * opt.bh) + "px",
																	 'margin-bottom': (nc.data('mb') * opt.bh) + "px",
																	 'margin-left': (nc.data('ml') * opt.bw) + "px",
																	 'margin-right': (nc.data('mr') * opt.bw) + "px",
																	 
																	 'border-top': (nc.data('bt') * opt.bh) + "px",
																	 'border-bottom': (nc.data('bb') * opt.bh) + "px",
																	 'border-left': (nc.data('bl') * opt.bw) + "px",
																	 'border-right': (nc.data('br') * opt.bw) + "px",
																	 
																	 'line-height': (nc.data('lh') * opt.bh) + "px",
																	 'white-space':"nowrap"
																	 
																	 
													});
													imh=nextcaption.outerHeight(true);
													imw=nextcaption.outerWidth(true);
												}
										}
								
										
								
								if (nextcaption.hasClass('fade')) {																						
									
									nextcaption.css({'opacity':0,'left':(xbw*nextcaption.data('x')+offsetx)+'px','top':(opt.bh*nextcaption.data('y'))+"px"});
								}
								
								
								
								if (nextcaption.hasClass('lfr')) {
									
									nextcaption.css({'opacity':1,'left':(5+opt.width)+'px','top':(opt.bh*nextcaption.data('y'))+"px"});
									
								}
								
								if (nextcaption.hasClass('lfl')) {
									
									nextcaption.css({'opacity':1,'left':(-5-imw)+'px','top':(opt.bh*nextcaption.data('y'))+"px"});
									
								}
								
								if (nextcaption.hasClass('sfl')) {
									
									nextcaption.css({'opacity':0,'left':((xbw*nextcaption.data('x'))-50+offsetx)+'px','top':(opt.bh*nextcaption.data('y'))+"px"});
								}
								
								if (nextcaption.hasClass('sfr')) {
									nextcaption.css({'opacity':0,'left':((xbw*nextcaption.data('x'))+50+offsetx)+'px','top':(opt.bh*nextcaption.data('y'))+"px"});
								}
								
								
								
								
								if (nextcaption.hasClass('lft')) {
									
									nextcaption.css({'opacity':1,'left':(xbw*nextcaption.data('x')+offsetx)+'px','top':(-5 - imh)+"px"});
									
								}
								
								if (nextcaption.hasClass('lfb')) {
									nextcaption.css({'opacity':1,'left':(xbw*nextcaption.data('x')+offsetx)+'px','top':(5+opt.height)+"px"});
									
								}
								
								if (nextcaption.hasClass('sft')) {
									nextcaption.css({'opacity':0,'left':(xbw*nextcaption.data('x')+offsetx)+'px','top':((opt.bh*nextcaption.data('y'))-50)+"px"});
								}
								
								if (nextcaption.hasClass('sfb')) {
									nextcaption.css({'opacity':0,'left':(xbw*nextcaption.data('x')+offsetx)+'px','top':((opt.bh*nextcaption.data('y'))+50)+"px"});
								}
								
								
								
								
								nextcaption.data('timer',setTimeout(function() { 
										if (nextcaption.hasClass('fade')) {		
											nextcaption.data('repo',nextcaption.css('opacity'));										
											nextcaption.animate({'opacity':1});
										}
										if (nextcaption.hasClass('lfr') || 
											nextcaption.hasClass('lfl') || 
											nextcaption.hasClass('sfr') || 
											nextcaption.hasClass('sfl') ||
											nextcaption.hasClass('lft') || 
											nextcaption.hasClass('lfb') || 
											nextcaption.hasClass('sft') || 
											nextcaption.hasClass('sfb')
											) 
										{	
											var easetype=nextcaption.data('easing');
											if (easetype==undefined) easetype="linear";
											nextcaption.data('repx',nextcaption.position().left);
											nextcaption.data('repy',nextcaption.position().top);
											
											nextcaption.data('repo',nextcaption.css('opacity'));
											nextcaption.animate({'opacity':1,'left':(xbw*nextcaption.data('x')+offsetx)+'px','top':opt.bh*(nextcaption.data('y'))+"px"},{duration:nextcaption.data('speed'), easing:easetype});
										}
								},nextcaption.data('start')));
								
						})
				}
		
		
		
		///////////////////////////
		//	-	COUNTDOWN	-	//
		/////////////////////////
		function countDown(container,opt) {
			opt.cd=0;
			
			var bt=container.find('.tp-bannertimer');
			if (bt.length>0) {
				bt.css({'width':'0%'});
				bt.animate({'width':"100%"},{duration:(opt.delay-100),queue:false, easing:"linear"});
			}
			opt.cdint=setInterval(function() {
				
				if (opt.conthover!=1) opt.cd=opt.cd+100;
				
				// STOP TIMER IF NO LOOP NO MORE NEEDED.
			    if (opt.stopLoop=="on" && opt.act==	container.find('>ul >li').length-1) {
						clearInterval(opt.cdint);
						container.find('.tp-bannertimer').css({'visibility':'hidden'});
				}
				
				if (opt.cd>=opt.delay) {
					opt.cd=0;
					// SWAP TO NEXT BANNER 
					opt.act=opt.next;
					opt.next=opt.next+1;
					if (opt.next>container.find('>ul >li').length-1) opt.next=0;
					
					
					// SWAP THE SLIDES
					swapSlide(container,opt);
					
					// Clear the Timer
					if (bt.length>0) {
						bt.css({'width':'0%'});
						bt.animate({'width':"100%"},{duration:(opt.delay-100),queue:false, easing:"linear"});
					}
				}
			},100);
			
			container.hover(
				function() {
					if (opt.onHoverStop=="on") {
						opt.conthover=1;
						bt.stop();
					}
				},
				function() {
					if (opt.onHoverStop=="on") {
						opt.conthover=0;
						bt.animate({'width':"100%"},{duration:((opt.delay-opt.cd)-100),queue:false, easing:"linear"});
					}
				});
		}

		
		
})(jQuery);			

/*! fancyBox v2.0.6 fancyapps.com | fancyapps.com/fancybox/#license */
(function(u,x,e,s){var p=e(u),o=e(x),a=e.fancybox=function(){a.open.apply(this,arguments)},y=!1,r=x.createTouch!==s,F=function(a){return a&&a.hasOwnProperty&&a instanceof e},q=function(a){return a&&"string"===e.type(a)},B=function(a){return q(a)&&0<a.indexOf("%")},m=function(b,c){c&&B(b)&&(b=a.getViewport()[c]/100*parseInt(b,10));return Math.ceil(b)},v=function(a,c){return m(a,c)+"px"};e.extend(a,{version:"2.0.6",defaults:{padding:15,margin:20,width:800,height:600,minWidth:100,minHeight:100,maxWidth:9999,
maxHeight:9999,autoSize:!0,autoHeight:!1,autoWidth:!1,autoResize:!r,autoCenter:!r,fitToView:!0,aspectRatio:!1,topRatio:0.5,fixed:!1,scrolling:"auto",wrapCSS:"",arrows:!0,closeBtn:!0,closeClick:!1,nextClick:!1,mouseWheel:!0,autoPlay:!1,playSpeed:3E3,preload:3,modal:!1,loop:!0,ajax:{dataType:"html",headers:{"X-fancyBox":!0}},iframe:{scrolling:"auto",preload:!0},keys:{next:{13:"right",34:"down",39:"right",40:"down"},prev:{8:"left",33:"up",37:"left",38:"up"},close:[27],play:[32],toggle:[70]},tpl:{wrap:'<div class="fancybox-wrap"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>',
image:'<img class="fancybox-image" src="{href}" alt="" />',iframe:'<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0"'+(e.browser.msie?' allowtransparency="true"':"")+"></iframe>",swf:'<object id="fancybox-swf{rnd}" name="fancybox-swf{rnd}" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%"><param name="wmode" value="transparent" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="{href}" /><embed src="{href}" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="100%" height="100%" wmode="transparent"></embed></object>',
error:'<p class="fancybox-error">The requested content cannot be loaded.<br/>Please try again later.</p>',closeBtn:'<div title="Close" class="fancybox-item fancybox-close"></div>',next:'<a title="Next" class="fancybox-nav fancybox-next"><span></span></a>',prev:'<a title="Previous" class="fancybox-nav fancybox-prev"><span></span></a>'},openEffect:"fade",openSpeed:250,openEasing:"swing",openOpacity:!0,openMethod:"zoomIn",closeEffect:"fade",closeSpeed:250,closeEasing:"swing",closeOpacity:!0,closeMethod:"zoomOut",
nextEffect:"elastic",nextSpeed:250,nextEasing:"swing",nextMethod:"changeIn",prevEffect:"elastic",prevSpeed:250,prevEasing:"swing",prevMethod:"changeOut",helpers:{overlay:{speedIn:0,speedOut:250,opacity:0.8,css:{cursor:"pointer"},closeClick:!0},title:{type:"float"}}},group:{},opts:{},coming:null,current:null,isActive:!1,isOpen:!1,isOpened:!1,player:{timer:null,isActive:!1},transitions:{},helpers:{},open:function(b,c){if(b)return c=e.isPlainObject(c)?c:{},a.close(!0),e.isArray(b)||(b=F(b)?e(b).get():
[b]),e.each(b,function(f,d){var j={},h,g,i,k,l;"object"===e.type(d)&&(d.nodeType&&(d=e(d)),F(d)?(j={href:d.attr("href"),title:d.attr("title"),isDom:!0,element:d},e.metadata&&e.extend(!0,j,d.metadata())):j=d);h=c.href||j.href||(q(d)?d:null);g=c.title!==s?c.title:j.title||"";k=(i=c.content||j.content)?"html":c.type||j.type;!k&&j.isDom&&(k=d.data("fancybox-type"),k||(k=(k=d.prop("class").match(/fancybox\.(\w+)/))?k[1]:null));if(q(h)&&(k||(a.isImage(h)?k="image":a.isSWF(h)?k="swf":h.match(/^#/)?k="inline":
q(d)&&(k="html",i=d)),"ajax"===k))l=h.split(/\s+/,2),h=l.shift(),l=l.shift();i||("inline"===k?h?i=e(q(h)?h.replace(/.*(?=#[^\s]+$)/,""):h):j.isDom&&(i=d):"html"===k?i=h:!k&&(!h&&j.isDom)&&(k="inline",i=d));e.extend(j,{href:h,type:k,content:i,title:g,selector:l});b[f]=j}),a.opts=e.extend(!0,{},a.defaults,c),c.keys!==s&&(a.opts.keys=c.keys?e.extend({},a.defaults.keys,c.keys):!1),a.group=b,a._start(a.opts.index||0)},cancel:function(){var b=a.coming;b&&!1!==a.trigger("onCancel")&&(a.hideLoading(),b.wrap&&
b.wrap.stop().trigger("onReset").remove(),a.coming=null,a.ajaxLoad&&a.ajaxLoad.abort(),a.ajaxLoad=null,a.imgPreload&&(a.imgPreload.onload=a.imgPreload.onerror=null))},close:function(b){a.cancel();a.current&&!1!==a.trigger("beforeClose")&&(a.unbindEvents(),!a.isOpen||!0===b?(e(".fancybox-wrap").stop().trigger("onReset").remove(),a._afterZoomOut()):(a.isOpen=a.isOpened=!1,e(".fancybox-item, .fancybox-nav").remove(),a.wrap.stop(!0).removeClass("fancybox-opened"),"fixed"===a.wrap.css("position")&&a.wrap.css(a._getPosition(!0)),
a.transitions[a.current.closeMethod]()))},play:function(b){var c=function(){clearTimeout(a.player.timer)},f=function(){c();a.current&&a.player.isActive&&(a.player.timer=setTimeout(a.next,a.current.playSpeed))},d=function(){c();e("body").unbind(".player");a.player.isActive=!1;a.trigger("onPlayEnd")};if(!0===b||!a.player.isActive&&!1!==b){if(a.current&&(a.current.loop||a.current.index<a.group.length-1))a.player.isActive=!0,e("body").bind({"afterShow.player onUpdate.player":f,"onCancel.player beforeClose.player":d,
"beforeLoad.player":c}),f(),a.trigger("onPlayStart")}else d()},next:function(b){q(b)||(b="down");a.current&&a.jumpto(a.current.index+1,b,"next")},prev:function(b){q(b)||(b="up");a.current&&a.jumpto(a.current.index-1,b,"prev")},jumpto:function(b,c,f){var d=a.current;if(d&&(b=parseInt(b,10),a.direction=c||(b>d.index?"right":"left"),a.router=f||"jumpto",d.loop&&(0>b&&(b=d.group.length+b%d.group.length),b%=d.group.length),d.group[b]!==s))a.cancel(),a._start(b)},reposition:function(b,c){var f;a.isOpen&&
(f=a._getPosition(c),b&&"scroll"===b.type?(delete f.position,a.wrap.stop(!0,!0).animate(f,200)):a.wrap.css(f))},update:function(b){var c=!b||b&&"orientationchange"===b.type,f=b&&"scroll"===b.type;c&&(clearTimeout(y),y=null);a.isOpen&&!y&&(c&&r&&(a.wrap.removeAttr("style").addClass("fancybox-tmp"),a.trigger("onUpdate")),y=setTimeout(function(){var d=a.current;y=null;if(d){a.wrap.removeClass("fancybox-tmp");if(d.autoResize&&!f||c){a._setDimension();a.trigger("onUpdate")}(d.autoCenter&&(!f||!d.canShrink)||
c)&&a.reposition(b);a.trigger("onUpdate")}},c?20:200))},toggle:function(b){a.isOpen&&(a.current.fitToView="boolean"===e.type(b)?b:!a.current.fitToView,a.update())},hideLoading:function(){o.unbind("keypress.fb");e("#fancybox-loading").remove()},showLoading:function(){var b,c;a.hideLoading();o.bind("keypress.fb",function(b){if(27===(b.which||b.keyCode))b.preventDefault(),a.cancel()});b=e('<div id="fancybox-loading"><div></div></div>').click(a.cancel).appendTo("body");a.coming&&!a.coming.fixed&&(c=a.getViewport(),
b.css({position:"absolute",top:0.5*c.h+c.y,left:0.5*c.w+c.x}))},getViewport:function(){return{x:p.scrollLeft(),y:p.scrollTop(),w:r&&u.innerWidth?u.innerWidth:p.width(),h:r&&u.innerHeight?u.innerHeight:p.height()}},unbindEvents:function(){a.wrap&&a.wrap.unbind(".fb");o.unbind(".fb");p.unbind(".fb")},bindEvents:function(){var b=a.current,c;b&&(p.bind("resize.fb orientationchange.fb"+(b.autoCenter&&!b.fixed?" scroll.fb":""),a.update),(c=b.keys)&&o.bind("keydown.fb",function(f){var d=f.which||f.keyCode,
j=f.target||f.srcElement;!f.ctrlKey&&(!f.altKey&&!f.shiftKey&&!f.metaKey&&(!j||!j.type&&!e(j).is("[contenteditable]")))&&e.each(c,function(c,g){if(1<b.group.length&&g[d]!==s)return a[c](g[d]),f.preventDefault(),!1;if(-1<e.inArray(d,g))return a[c](),f.preventDefault(),!1})}),e.fn.mousewheel&&b.mouseWheel&&a.wrap.bind("mousewheel.fb",function(c,d,j,h){for(var g=e(c.target||null),i=!1;g.length&&!i&&!g.is(".fancybox-skin")&&!g.is(".fancybox-wrap");)i=g[0]&&!(g[0].style.overflow&&"hidden"===g[0].style.overflow)&&
(g[0].clientWidth&&g[0].scrollWidth>g[0].clientWidth||g[0].clientHeight&&g[0].scrollHeight>g[0].clientHeight),g=e(g).parent();if(0!==d&&!i)if(1<a.group.length&&!b.canShrink){if(0<h||0<j)a.prev(0<h?"up":"left");else if(0>h||0>j)a.next(0>h?"down":"right");c.preventDefault()}else"fixed"===a.wrap.css("position")&&c.preventDefault()}))},trigger:function(b,c){var f,d=c||a[-1<e.inArray(b,["onCancel","beforeLoad","afterLoad"])?"coming":"current"];if(d){e.isFunction(d[b])&&(f=d[b].apply(d,Array.prototype.slice.call(arguments,
1)));if(!1===f)return!1;d.helpers&&e.each(d.helpers,function(c,f){if(f&&a.helpers[c]&&e.isFunction(a.helpers[c][b]))a.helpers[c][b](f,d)});e.event.trigger(b+".fb")}},isImage:function(a){return q(a)&&a.match(/\.(jp(e|g|eg)|gif|png|bmp)((\?|#).*)?$/i)},isSWF:function(a){return q(a)&&a.match(/\.(swf)((\?|#).*)?$/i)},_start:function(b){var c={},c=a.group[b]||null,f,d;if(!c)return!1;c=e.extend(!0,{},a.opts,c);f=c.margin;"number"===e.type(f)&&(c.margin=[f,f,f,f]);c.modal&&e.extend(!0,c,{closeBtn:!1,closeClick:!1,
nextClick:!1,arrows:!1,mouseWheel:!1,keys:null,helpers:{overlay:{css:{cursor:"auto"},closeClick:!1}}});c.autoSize&&(c.autoWidth=c.autoHeight=!0);"auto"===c.width&&(c.autoWidth=!0);"auto"===c.height&&(c.autoHeight=!0);c.group=a.group;c.index=b;a.coming=c;if(!1===a.trigger("beforeLoad"))a.coming=null;else{d=c.type;f=c.href;if(!d)return a.coming=null,a.current&&a.router&&"jumpto"!==a.router?(a.current.index=b,a[a.router](a.direction)):!1;a.isActive=!0;if("image"===d||"swf"===d)c.autoHeight=c.autoWidth=
!1,c.scrolling="visible";"image"===d&&(c.aspectRatio=!0);"iframe"===d&&r&&(c.scrolling="scroll");c.wrap=e(c.tpl.wrap).addClass("fancybox-"+(r?"mobile":"desktop")+" fancybox-type-"+d+" fancybox-tmp "+c.wrapCSS).appendTo("body");e.extend(c,{skin:e(".fancybox-skin",c.wrap).css("padding",v(c.padding)),outer:e(".fancybox-outer",c.wrap),inner:e(".fancybox-inner",c.wrap)});if("inline"===d||"html"===d){if(!c.content||!c.content.length)return a._error("content")}else if(!f)return a._error("href");"image"===
d?a._loadImage():"ajax"===d?a._loadAjax():"iframe"===d?a._loadIframe():a._afterLoad()}},_error:function(b){e.extend(a.coming,{type:"html",autoWidth:!0,autoHeight:!0,minWidth:0,minHeight:0,scrolling:"no",hasError:b,content:a.coming.tpl.error});a._afterLoad()},_loadImage:function(){var b=a.imgPreload=new Image;b.onload=function(){this.onload=this.onerror=null;a.coming.width=this.width;a.coming.height=this.height;a._afterLoad()};b.onerror=function(){this.onload=this.onerror=null;a._error("image")};b.src=
a.coming.href;(b.complete===s||!b.complete)&&a.showLoading()},_loadAjax:function(){var b=a.coming;a.showLoading();a.ajaxLoad=e.ajax(e.extend({},b.ajax,{url:b.href,error:function(b,f){a.coming&&"abort"!==f?a._error("ajax",b):a.hideLoading()},success:function(c,f){"success"===f&&(b.content=c,a._afterLoad())}}))},_loadIframe:function(){var b=a.coming,c=e(b.tpl.iframe.replace("{rnd}",(new Date).getTime())).attr("scrolling",r?"auto":b.iframe.scrolling).attr("src",b.href);e(b.wrap).bind("onReset",function(){try{c.hide().parent().empty()}catch(a){}});
b.iframe.preload&&(a.showLoading(),c.bind("load",function(){e(this).unbind().bind("load.fb",a.update).data("ready",1);a.coming.wrap.removeClass("fancybox-tmp").show();a._afterLoad()}));b.content=c.appendTo(b.inner);b.iframe.preload||a._afterLoad()},_preloadImages:function(){var b=a.group,c=a.current,f=b.length,d=c.preload?Math.min(c.preload,f-1):0,e,h;for(h=1;h<=d;h+=1)e=b[(c.index+h)%f],"image"===e.type&&e.href&&((new Image).src=e.href)},_afterLoad:function(){var b=a.coming,c=a.current,f,d;a.hideLoading();
if(!b||!1===a.trigger("afterLoad",b,c))a.coming.wrap.stop().trigger("onReset").remove(),a.coming=null;else{c&&a.trigger("beforeChange",c);a.unbindEvents();a.isOpened?(e(".fancybox-item, .fancybox-nav").remove(),c.wrap.stop(!0).removeClass("fancybox-opened"),a.transitions[c.prevMethod]()):e(".fancybox-wrap").not(b.wrap).stop().trigger("onReset").remove();c=b.content;f=b.type;d=b.scrolling;e.extend(a,{wrap:b.wrap,skin:b.skin,outer:b.outer,inner:b.inner,current:b});switch(f){case "inline":case "ajax":case "html":b.selector?
c=e("<div>").html(c).find(b.selector):F(c)&&(c=c.show().detach(),e(b.wrap).bind("onReset",function(){e(this).find(".fancybox-inner").children().appendTo("body").hide()}));break;case "image":c=b.tpl.image.replace("{href}",b.href);break;case "swf":c=b.tpl.swf.replace(/\{rnd\}/g,(new Date).getTime()).replace(/\{href\}/g,b.href)}"iframe"===b.type&&b.iframe.preload||b.inner.append(c);a.trigger("beforeShow");a._setDimension();b.pos=e.extend({},b.dim,a._getPosition(!0));b.inner.css("overflow","yes"===d?
"scroll":"no"===d?"hidden":d);b.wrap.removeClass("fancybox-tmp");a.isOpen=!1;a.coming=null;a.bindEvents();a.transitions[a.isOpened?b.nextMethod:b.openMethod]();a._preloadImages()}},_setDimension:function(){var b=a.getViewport(),c=0,f=!1,d=!1,f=a.wrap,j=a.skin,h=a.inner,g=a.current,d=g.width,i=g.height,k=g.minWidth,l=g.minHeight,n=g.maxWidth,t=g.maxHeight,r=g.scrolling,q=g.scrollOutside,w=g.margin,o=w[1]+w[3],p=w[0]+w[2],x,s,u,A,z,D,y,C,E;f.add(j).add(h).width("auto").height("auto");w=j.outerWidth(!0)-
j.width();x=j.outerHeight(!0)-j.height();s=o+w;u=p+x;A=B(d)?(b.w-s)*parseFloat(d)/100:d;z=B(i)?(b.h-u)*parseFloat(i)/100:i;if("iframe"===g.type){if(E=g.content,g.autoHeight&&1===E.data("ready"))try{E[0].contentWindow.document.location&&(h.width(A).height(9999),D=E.contents().find("body"),q&&D.css("overflow-x","hidden"),z=D.height())}catch(F){}}else if(g.autoWidth||g.autoHeight)h.addClass("fancybox-tmp"),g.autoWidth&&(A=h.width()),g.autoHeight&&(z=h.height()),h.removeClass("fancybox-tmp");d=m(A);i=
m(z);C=A/z;k=m(B(k)?m(k,"w")-s:k);n=m(B(n)?m(n,"w")-s:n);l=m(B(l)?m(l,"h")-u:l);t=m(B(t)?m(t,"h")-u:t);D=n;y=t;o=b.w-o;p=b.h-p;if(g.aspectRatio){if(d>n&&(d=n,i=d/C),i>t&&(i=t,d=i*C),d<k&&(d=k,i=d/C),i<l)i=l,d=i*C}else d=Math.max(k,Math.min(d,n)),i=Math.max(l,Math.min(i,t));if(g.fitToView)if(Math.min(b.w-s,n),t=Math.min(b.h-u,t),h.width(m(d)).height(m(i)),f.width(m(d+w)),b=f.width(),n=f.height(),g.aspectRatio)for(;(b>o||n>p)&&(d>k&&i>l)&&!(19<c++);)i=Math.max(l,Math.min(t,i-10)),d=i*C,d<k&&(d=k,i=
d/C),h.width(m(d)).height(m(i)),f.width(m(d+w)),b=f.width(),n=f.height();else d=Math.max(k,Math.min(d,d-(b-o))),i=Math.max(l,Math.min(i,i-(n-p)));q&&("auto"===r&&i<z&&d+w+q<o)&&(d+=q);h.width(m(d)).height(m(i));f.width(m(d+w));b=f.width();n=f.height();f=(b>o||n>p)&&d>k&&i>l;d=g.aspectRatio?d<D&&i<y&&d<A&&i<z:(d<D||i<y)&&(d<A||i<z);e.extend(g,{dim:{width:v(b),height:v(n)},origWidth:A,origHeight:z,canShrink:f,canExpand:d,wPadding:w,hPadding:x,wrapSpace:n-j.outerHeight(!0),skinSpace:j.height()-i});!E&&
(g.autoHeight&&i>l&&i<t&&!d)&&h.height("auto")},_getPosition:function(b){var c=a.current,f=a.getViewport(),d=c.margin,e=a.wrap.width()+d[1]+d[3],h=a.wrap.height()+d[0]+d[2],g={position:"absolute",top:d[0]+f.y,left:d[3]+f.x};c.autoCenter&&(c.fixed&&!b&&h<=f.h&&e<=f.w)&&(g={position:"fixed",top:d[0],left:d[3]});g.top=v(Math.max(g.top,g.top+(f.h-h)*c.topRatio));g.left=v(Math.max(g.left,g.left+0.5*(f.w-e)));return g},_afterZoomIn:function(){var b=a.current;if(b&&(a.isOpen=a.isOpened=!0,a.wrap.addClass("fancybox-opened").css("overflow",
"visible"),a.trigger("afterShow"),a.reposition(),(b.closeClick||b.nextClick)&&a.inner.css("cursor","pointer").bind("click.fb",function(c){if(!e(c.target).is("a")&&!e(c.target).parent().is("a"))a[b.closeClick?"close":"next"]()}),b.closeBtn&&e(b.tpl.closeBtn).appendTo(a.skin).bind("click.fb",a.close),b.arrows&&1<a.group.length&&((b.loop||0<b.index)&&e(b.tpl.prev).appendTo(a.outer).bind("click.fb",a.prev),(b.loop||b.index<a.group.length-1)&&e(b.tpl.next).appendTo(a.outer).bind("click.fb",a.next)),a.opts.autoPlay&&
!a.player.isActive))a.opts.autoPlay=!1,a.play()},_afterZoomOut:function(){var b=a.current;a.wrap.trigger("onReset").remove();e.extend(a,{group:{},opts:{},current:null,isActive:!1,isOpened:!1,isOpen:!1,router:!1,wrap:null,skin:null,outer:null,inner:null});a.trigger("afterClose",b)}});a.transitions={getOrigPosition:function(){var b=a.current,c=b.element,f=e(b.orig),d={},j=50,h=50,g=b.hPadding,i=b.wPadding;!f.length&&(b.isDom&&c.is(":visible"))&&(f=c.find("img:first"),f.length||(f=c));f.length?(d=f.offset(),
f.is("img")&&(j=f.outerWidth(),h=f.outerHeight())):(b=a.getViewport(),d.top=b.y+0.5*(b.h-h),d.left=b.x+0.5*(b.w-j));return d={top:v(d.top-0.5*g),left:v(d.left-0.5*i),width:v(j+i),height:v(h+g)}},step:function(b,c){var f,d,e=c.prop;d=a.current;var h=d.wrapSpace,g=d.skinSpace;if("width"===e||"height"===e)f=(b-c.start)/(c.end-c.start),c.start>c.end&&(f=1-f),d="width"===e?d.wPadding:d.hPadding,d=b-d,a.skin[e](m("width"===e?d:d-h*f)),a.inner[e](m("width"===e?d:d-h*f-g*f))},zoomIn:function(){var b=a.wrap,
c=a.current,f=c.pos,d=c.openEffect,j="elastic"===d,h=e.extend({opacity:1},f);delete h.position;j?(f=this.getOrigPosition(),c.openOpacity&&(f.opacity=0.1)):"fade"===d&&(f.opacity=0.1);b.css(f).animate(h,{duration:"none"===d?0:c.openSpeed,easing:c.openEasing,step:j?this.step:null,complete:a._afterZoomIn})},zoomOut:function(){var b=a.wrap,c=a.current,f=c.closeEffect,d="elastic"===f,e={opacity:0.1};d&&(e=this.getOrigPosition(),c.closeOpacity&&(e.opacity=0.1));b.animate(e,{duration:"none"===f?0:c.closeSpeed,
easing:c.closeEasing,step:d?this.step:null,complete:a._afterZoomOut})},changeIn:function(){var b=a.wrap,c=a.current,f=c.nextEffect,d=c.pos,e={opacity:1},h=a.direction,g;d.opacity=0.1;"elastic"===f&&(g="down"===h||"up"===h?"top":"left","down"===h||"right"===h?(d[g]=v(parseInt(d[g],10)-200),e[g]="+=200px"):(d[g]=v(parseInt(d[g],10)+200),e[g]="-=200px"));b.css(d).animate(e,{duration:"none"===f?0:c.nextSpeed,easing:c.nextEasing,complete:function(){setTimeout(a._afterZoomIn,10)}})},changeOut:function(){var b=
a.wrap,c=a.current,f=c.prevEffect,d={opacity:0.1},j=a.direction;"elastic"===f&&(d["down"===j||"up"===j?"top":"left"]=("up"===j||"left"===j?"-":"+")+"=200px");b.animate(d,{duration:"none"===f?0:c.prevSpeed,easing:c.prevEasing,complete:function(){e(this).trigger("onReset").remove()}})}};a.helpers.overlay={overlay:null,update:function(){var a,c;this.overlay.width("100%").height("100%");e.browser.msie||r?(a=Math.max(x.documentElement.scrollWidth,x.body.scrollWidth),c=Math.max(x.documentElement.offsetWidth,
x.body.offsetWidth),a=a<c?p.width():a):a=o.width();this.overlay.width(a).height(o.height())},beforeShow:function(b){var c;this.overlay||(b=e.extend(!0,{},a.defaults.helpers.overlay,b),c=this.overlay=e('<div id="fancybox-overlay"></div>').css(b.css).appendTo("body").bind("mousewheel",function(b){(!a.wrap||"fixed"===a.wrap.css("position")||a.wrap.is(":animated"))&&b.preventDefault()}),b.closeClick&&c.bind("click.fb",a.close),a.current.fixed&&!r?c.addClass("overlay-fixed"):(this.update(),this.onUpdate=
function(){this.update()}),c.fadeTo(b.speedIn,b.opacity))},afterClose:function(a){this.overlay&&this.overlay.fadeOut(a.speedOut||0,function(){e(this).remove()});this.overlay=null}};a.helpers.title={beforeShow:function(b){var c=a.current.title,b=b.type;c&&(c=e('<div class="fancybox-title fancybox-title-'+b+'-wrap">'+c+"</div>").appendTo("body"),"float"===b&&(c.width(c.width()).wrapInner('<span class="child"></span>'),a.current.margin[2]+=Math.abs(parseInt(c.css("margin-bottom"),10))),c.appendTo("over"===
b?a.inner:"outside"===b?a.wrap:a.skin))}};e.fn.fancybox=function(b){var c,f=e(this),d=this.selector||"",j=function(h){var g=this,i=c,j,l;!h.ctrlKey&&(!h.altKey&&!h.shiftKey&&!h.metaKey)&&!e(g).is(".fancybox-wrap")&&(j=b.groupAttr||"data-fancybox-group",l=e(g).attr(j),l||(j="rel",l=g[j]),l&&(""!==l&&"nofollow"!==l)&&(g=d.length?e(d):f,g=g.filter("["+j+'="'+l+'"]'),i=g.index(this)),b.index=i,!1!==a.open(g,b)&&h.preventDefault())},b=b||{};c=b.index||0;!d||!1===b.live?f.unbind("click.fb-start").bind("click.fb-start",
j):o.undelegate(d,"click.fb-start").delegate(d,"click.fb-start",j);return this};e.scrollbarWidth||(e.scrollbarWidth=function(){var a,c;a=e('<div style="width:50px;height:50px;overflow:auto"><div/></div>').appendTo("body");c=a.children();c=c.innerWidth()-c.height(99).innerWidth();a.remove();return c});o.ready(function(){a.defaults.scrollOutside=e.scrollbarWidth();a.defaults.fixed=e.support.fixedPosition||!(e.browser.msie&&e.browser.version<=6||r)})})(window,document,jQuery);
				
			

			   
			    /*!
 * Buttons helper for fancyBox
 * version: 1.0.3
 * @requires fancyBox v2.0 or later
 *
 * Usage:
 *     $(".fancybox").fancybox({
 *         buttons: {
 *             position : 'top'
 *         }
 *     });
 *
 * Options:
 *     tpl - HTML template
 *     position - 'top' or 'bottom'
 *
 */
(function ($) {
	//Shortcut for fancyBox object
	var F = $.fancybox;

	//Add helper object
	F.helpers.buttons = {
		tpl  : '<div id="fancybox-buttons"><ul><li><a class="btnPrev" title="Previous" href="javascript:;"></a></li><li><a class="btnPlay" title="Start slideshow" href="javascript:;"></a></li><li><a class="btnNext" title="Next" href="javascript:;"></a></li><li><a class="btnToggle" title="Toggle size" href="javascript:;"></a></li><li><a class="btnClose" title="Close" href="javascript:jQuery.fancybox.close();"></a></li></ul></div>',
		list : null,
		buttons: null,

		beforeLoad: function (opts, obj) {
			//Remove self if gallery do not have at least two items
			if (obj.group.length < 2) {
				obj.helpers.buttons = false;
				obj.closeBtn = true;

				return;
			}

			//Increase top margin to give space for buttons
			obj.margin[ opts.position === 'bottom' ? 2 : 0 ] += 30;
		},

		onPlayStart: function () {
			if (this.buttons) {
				this.buttons.play.attr('title', 'Pause slideshow').addClass('btnPlayOn');
			}
		},

		onPlayEnd: function () {
			if (this.buttons) {
				this.buttons.play.attr('title', 'Start slideshow').removeClass('btnPlayOn');
			}
		},

		afterShow: function (opts, obj) {
			var buttons = this.buttons;

			if (!buttons) {
				this.list = $(opts.tpl || this.tpl).addClass(opts.position || 'top').appendTo('body');

				buttons = {
					prev   : this.list.find('.btnPrev').click( F.prev ),
					next   : this.list.find('.btnNext').click( F.next ),
					play   : this.list.find('.btnPlay').click( F.play ),
					toggle : this.list.find('.btnToggle').click( F.toggle )
				}
			}

			//Prev
			if (obj.index > 0 || obj.loop) {
				buttons.prev.removeClass('btnDisabled');
			} else {
				buttons.prev.addClass('btnDisabled');
			}

			//Next / Play
			if (obj.loop || obj.index < obj.group.length - 1) {
				buttons.next.removeClass('btnDisabled');
				buttons.play.removeClass('btnDisabled');

			} else {
				buttons.next.addClass('btnDisabled');
				buttons.play.addClass('btnDisabled');
			}

			this.buttons = buttons;

			this.onUpdate(opts, obj);
		},

		onUpdate: function (opts, obj) {
			var toggle;

			if (!this.buttons) {
				return;
			}

			toggle = this.buttons.toggle.removeClass('btnDisabled btnToggleOn');

			//Size toggle button
			if (obj.canShrink) {
				toggle.addClass('btnToggleOn');

			} else if (!obj.canExpand) {
				toggle.addClass('btnDisabled');
			}
		},

		beforeClose: function () {
			if (this.list) {
				this.list.remove();
			}

			this.list    = null;
			this.buttons = null;
		}
	};

}(jQuery));

 /*!
 * Thumbnail helper for fancyBox
 * version: 1.0.6
 * @requires fancyBox v2.0 or later
 *
 * Usage:
 *     $(".fancybox").fancybox({
 *         thumbs: {
 *             width  : 50,
 *             height : 50
 *         }
 *     });
 *
 * Options:
 *     width - thumbnail width
 *     height - thumbnail height
 *     source - function to obtain the URL of the thumbnail image
 *     position - 'top' or 'bottom'
 *
 */
(function ($) {
	//Shortcut for fancyBox object
	var F = $.fancybox;

	//Add helper object
	F.helpers.thumbs = {
		wrap  : null,
		list  : null,
		width : 0,

		//Default function to obtain the URL of the thumbnail image
		source: function ( item ) {
			var href;

			if (item.element) {
				href = $(item.element).find('img').attr('src');
			}

			if (!href && item.type === 'image' && item.href) {
				href = item.href;
			}

			return href;
		},

		init: function (opts, obj) {
			var that = this,
				list,
				thumbWidth  = opts.width  || 50,
				thumbHeight = opts.height || 50,
				thumbSource = opts.source || this.source;

			//Build list structure
			list = '';

			for (var n = 0; n < obj.group.length; n++) {
				list += '<li><a style="width:' + thumbWidth + 'px;height:' + thumbHeight + 'px;" href="javascript:jQuery.fancybox.jumpto(' + n + ');"></a></li>';
			}

			this.wrap = $('<div id="fancybox-thumbs"></div>').addClass(opts.position || 'bottom').appendTo('body');
			this.list = $('<ul>' + list + '</ul>').appendTo(this.wrap);

			//Load each thumbnail
			$.each(obj.group, function (i) {
				var href = thumbSource( obj.group[ i ] );

				if (!href) {
					return;
				}

				$("<img />").load(function () {
					var width = this.width,
						height = this.height,
						widthRatio, heightRatio, parent;

					if (!that.list || !width || !height) {
						return;
					}

					//Calculate thumbnail width/height and center it
					widthRatio = width / thumbWidth;
					heightRatio = height / thumbHeight;
					parent = that.list.children().eq(i).find('a');

					if (widthRatio >= 1 && heightRatio >= 1) {
						if (widthRatio > heightRatio) {
							width = Math.floor(width / heightRatio);
							height = thumbHeight;

						} else {
							width = thumbWidth;
							height = Math.floor(height / widthRatio);
						}
					}

					$(this).css({
						width: width,
						height: height,
						top: Math.floor(thumbHeight / 2 - height / 2),
						left: Math.floor(thumbWidth / 2 - width / 2)
					});

					parent.width(thumbWidth).height(thumbHeight);

					$(this).hide().appendTo(parent).fadeIn(300);

				}).attr('src', href);
			});

			//Set initial width
			this.width = this.list.children().eq(0).outerWidth(true);

			this.list.width(this.width * (obj.group.length + 1)).css('left', Math.floor($(window).width() * 0.5 - (obj.index * this.width + this.width * 0.5)));
		},

		beforeLoad: function (opts, obj) {
			//Remove self if gallery do not have at least two items
			if (obj.group.length < 2) {
				obj.helpers.thumbs = false;

				return;
			}

			//Increase bottom margin to give space for thumbs
			obj.margin[ opts.position === 'top' ? 0 : 2 ] += ((opts.height || 50) + 15);
		},

		afterShow: function (opts, obj) {
			//Check if exists and create or update list
			if (this.list) {
				this.onUpdate(opts, obj);

			} else {
				this.init(opts, obj);
			}

			//Set active element
			this.list.children().removeClass('active').eq(obj.index).addClass('active');
		},

		//Center list
		onUpdate: function (opts, obj) {
			if (this.list) {
				this.list.stop(true).animate({
					'left': Math.floor($(window).width() * 0.5 - (obj.index * this.width + this.width * 0.5))
				}, 150);
			}
		},

		beforeClose: function () {
			if (this.wrap) {
				this.wrap.remove();
			}

			this.wrap  = null;
			this.list  = null;
			this.width = 0;
		}
	}

}(jQuery));

 /*!
 * Media helper for fancyBox
 * version: 1.0.1
 * @requires fancyBox v2.0 or later
 *
 * Usage:
 *     $(".fancybox").fancybox({
 *         media: {}
 *     });
 *
 *  Supports:
 *      Youtube
 *          http://www.youtube.com/watch?v=opj24KnzrWo
 *          http://youtu.be/opj24KnzrWo
 *      Vimeo
 *          http://vimeo.com/40648169
 *          http://vimeo.com/channels/staffpicks/38843628
 *          http://vimeo.com/groups/surrealism/videos/36516384
 *      Metacafe
 *          http://www.metacafe.com/watch/7635964/dr_seuss_the_lorax_movie_trailer/
 *          http://www.metacafe.com/watch/7635964/
 *      Dailymotion
 *          http://www.dailymotion.com/video/xoytqh_dr-seuss-the-lorax-premiere_people
 *      Twitvid
 *          http://twitvid.com/QY7MD
 *      Twitpic
 *          http://twitpic.com/7p93st
 *      Instagram
 *          http://instagr.am/p/IejkuUGxQn/
 *          http://instagram.com/p/IejkuUGxQn/
 *      Google maps
 *          http://maps.google.com/maps?q=Eiffel+Tower,+Avenue+Gustave+Eiffel,+Paris,+France&t=h&z=17
 *          http://maps.google.com/?ll=48.857995,2.294297&spn=0.007666,0.021136&t=m&z=16
 *          http://maps.google.com/?ll=48.859463,2.292626&spn=0.000965,0.002642&t=m&z=19&layer=c&cbll=48.859524,2.292532&panoid=YJ0lq28OOy3VT2IqIuVY0g&cbp=12,151.58,,0,-15.56
 */
(function ($) {
	//Shortcut for fancyBox object
	var F = $.fancybox;

	//Add helper object
	F.helpers.media = {
		beforeLoad : function(opts, obj) {
			var href = obj.href || '',
				type = false,
				rez;

			if ((rez = href.match(/(youtube\.com|youtu\.be)\/(v\/|u\/|embed\/|watch\?v=)?([^#\&\?]*).*/i))) {
				href = '//www.youtube.com/embed/' + rez[3] + '?autoplay=1&autohide=1&fs=1&rel=0&enablejsapi=1&hd=1';
				type = 'iframe';

			} else if ((rez = href.match(/vimeo.com\/((channels|groups)\/(.*)\/)?(\d+)\/?(.*)/))) {
				href = '//player.vimeo.com/video/' + rez[4] + '?hd=1&autoplay=1&show_title=1&show_byline=1&show_portrait=0&color=&fullscreen=1';
				type = 'iframe';

			} else if ((rez = href.match(/metacafe.com\/watch\/(\d+)\/?(.*)/))) {
				href = '//www.metacafe.com/fplayer/' + rez[1] + '/.swf?playerVars=autoPlay=yes';
				type = 'swf';

			} else if ((rez = href.match(/dailymotion.com\/video\/(.*)\/?(.*)/))) {
				href = '//www.dailymotion.com/swf/video/' + rez[1] + '?additionalInfos=0&autoStart=1';
				type = 'swf';

			} else if ((rez = href.match(/twitvid\.com\/([a-zA-Z0-9_\-\?\=]+)/i))) {
				href = '//www.twitvid.com/embed.php?autoplay=0&guid=' + rez[1];
				type = 'iframe';

			} else if ((rez = href.match(/twitpic\.com\/(?!(?:place|photos|events)\/)([a-zA-Z0-9\?\=\-]+)/i))) {
				href = '//twitpic.com/show/full/' + rez[1] + '/';
				type = 'image';

			} else if ((rez = href.match(/(instagr\.am|instagram\.com)\/p\/([a-zA-Z0-9_\-]+)\/?/i))) {
				href = '//' + rez[1] + '/p/' + rez[2] + '/media/?size=l';
				type = 'image';

			} else if ((rez = href.match(/maps\.google\.com\/(\?ll=|maps\/?\?q=)(.*)/i))) {
				href = '//maps.google.com/' + rez[1] + '' + rez[2] + '&output=' + (rez[2].indexOf('layer=c') > 0 ? 'svembed' : 'embed');
				type = 'iframe';
			}

			if (type) {
				obj.href = href;
				obj.type = type;

				obj.autoHeight = false;
			}
		}
	}

}(jQuery));

//** Smooth Navigational Menu- By Dynamic Drive DHTML code library: http://www.dynamicdrive.com
//** Script Download/ instructions page: http://www.dynamicdrive.com/dynamicindex1/ddlevelsmenu/
//** Menu created: Nov 12, 2008

//** Dec 12th, 08" (v1.01): Fixed Shadow issue when multiple LIs within the same UL (level) contain sub menus: http://www.dynamicdrive.com/forums/showthread.php?t=39177&highlight=smooth

//** Feb 11th, 09" (v1.02): The currently active main menu item (LI A) now gets a CSS class of ".selected", including sub menu items.

//** May 1st, 09" (v1.3):
//** 1) Now supports vertical (side bar) menu mode- set "orientation" to 'v'
//** 2) In IE6, shadows are now always disabled

//** July 27th, 09" (v1.31): Fixed bug so shadows can be disabled if desired.
//** Feb 2nd, 10" (v1.4): Adds ability to specify delay before sub menus appear and disappear, respectively. See showhidedelay variable below

var ddsmoothmenu={

//Specify full URL to down and right arrow images (23 is padding-right added to top level LIs with drop downs):
arrowimages: {down:[], right:[]},
transition: {overtime:300, outtime:300}, //duration of slide in/ out animation, in milliseconds
shadow: {enable:false, offsetx:5, offsety:5}, //enable shadow?
showhidedelay: {showdelay: 100, hidedelay: 200}, //set delay in milliseconds before sub menus appear and disappear, respectively

///////Stop configuring beyond here///////////////////////////

detectwebkit: navigator.userAgent.toLowerCase().indexOf("applewebkit")!=-1, //detect WebKit browsers (Safari, Chrome etc)
detectie6: document.all && !window.XMLHttpRequest,

getajaxmenu:function($, setting){ //function to fetch external page containing the panel DIVs
	var $menucontainer=$('#'+setting.contentsource[0]) //reference empty div on page that will hold menu
	$menucontainer.html("Loading Menu...")
	$.ajax({
		url: setting.contentsource[1], //path to external menu file
		async: true,
		error:function(ajaxrequest){
			$menucontainer.html('Error fetching content. Server Response: '+ajaxrequest.responseText)
		},
		success:function(content){
			$menucontainer.html(content)
			ddsmoothmenu.buildmenu($, setting)
		}
	})
},


buildmenu:function($, setting){
	var smoothmenu=ddsmoothmenu
	var $mainmenu=$("#"+setting.mainmenuid+">ul") //reference main menu UL
	$mainmenu.parent().get(0).className=setting.classname || "ddsmoothmenu"
	var $headers=$mainmenu.find("ul").parent()
	$headers.hover(
		function(e){
			$(this).children('a:eq(0)').addClass('selected')
		},
		function(e){
			$(this).children('a:eq(0)').removeClass('selected')
		}
	)
	$headers.each(function(i){ //loop through each LI header
		var $curobj=$(this).css({}) //reference current LI header
		var $subul=$(this).find('ul:eq(0)').css({display:'block'})
		$subul.data('timers', {})
		this._dimensions={w:this.offsetWidth, h:this.offsetHeight, subulw:$subul.outerWidth(), subulh:$subul.outerHeight()}
		this.istopheader=$curobj.parents("ul").length==1? true : false //is top level header?
		$subul.css({top:this.istopheader && setting.orientation!='v'? this._dimensions.h+"px" : 0})
		$curobj.children("a:eq(0)").css(this.istopheader? {paddingRight: smoothmenu.arrowimages.down[2]} : {})
		if (smoothmenu.shadow.enable){
			this._shadowoffset={x:(this.istopheader?$subul.offset().left+smoothmenu.shadow.offsetx : this._dimensions.w), y:(this.istopheader? $subul.offset().top+smoothmenu.shadow.offsety : $curobj.position().top)} //store this shadow's offsets
			if (this.istopheader)
				$parentshadow=$(document.body)
			else{
				var $parentLi=$curobj.parents("li:eq(0)")
				$parentshadow=$parentLi.get(0).$shadow
			}
			this.$shadow=$('<div class="ddshadow'+(this.istopheader? ' toplevelshadow' : '')+'"></div>').prependTo($parentshadow).css({left:this._shadowoffset.x+'px', top:this._shadowoffset.y+'px'})  //insert shadow DIV and set it to parent node for the next shadow div
		}
		$curobj.hover(
			function(e){
				var $targetul=$subul //reference UL to reveal
				var header=$curobj.get(0) //reference header LI as DOM object
				clearTimeout($targetul.data('timers').hidetimer)
				$targetul.data('timers').showtimer=setTimeout(function(){
					header._offsets={left:$curobj.offset().left, top:$curobj.offset().top}
					var menuleft=header.istopheader && setting.orientation!='v'? 0 : header._dimensions.w
					menuleft=(header._offsets.left+menuleft+header._dimensions.subulw>$(window).width())? (header.istopheader && setting.orientation!='v'? -header._dimensions.subulw+header._dimensions.w : -header._dimensions.w) : menuleft //calculate this sub menu's offsets from its parent
					if ($targetul.queue().length<=1){ //if 1 or less queued animations
						$targetul.css({left:menuleft+"px", width:header._dimensions.subulw+'px'}).animate({height:'show',opacity:'show'}, ddsmoothmenu.transition.overtime)
						if (smoothmenu.shadow.enable){
							var shadowleft=header.istopheader? $targetul.offset().left+ddsmoothmenu.shadow.offsetx : menuleft
							var shadowtop=header.istopheader?$targetul.offset().top+smoothmenu.shadow.offsety : header._shadowoffset.y
							if (!header.istopheader && ddsmoothmenu.detectwebkit){ //in WebKit browsers, restore shadow's opacity to full
								header.$shadow.css({opacity:1})
							}
							header.$shadow.css({overflow:'', width:header._dimensions.subulw+'px', left:shadowleft+'px', top:shadowtop+'px'}).animate({height:header._dimensions.subulh+'px'}, ddsmoothmenu.transition.overtime)
						}
					}
				}, ddsmoothmenu.showhidedelay.showdelay)
			},
			function(e){
				var $targetul=$subul
				var header=$curobj.get(0)
				clearTimeout($targetul.data('timers').showtimer)
				$targetul.data('timers').hidetimer=setTimeout(function(){
					$targetul.animate({height:'hide', opacity:'hide'}, ddsmoothmenu.transition.outtime)
					if (smoothmenu.shadow.enable){
						if (ddsmoothmenu.detectwebkit){ //in WebKit browsers, set first child shadow's opacity to 0, as "overflow:hidden" doesn't work in them
							header.$shadow.children('div:eq(0)').css({opacity:0})
						}
						header.$shadow.css({overflow:'hidden'}).animate({height:0}, ddsmoothmenu.transition.outtime)
					}
				}, ddsmoothmenu.showhidedelay.hidedelay)
			}
		) //end hover
	}) //end $headers.each()
	$mainmenu.find("ul").css({display:'none', visibility:'visible'})
},

init:function(setting){
	if (typeof setting.customtheme=="object" && setting.customtheme.length==2){ //override default menu colors (default/hover) with custom set?
		var mainmenuid='#'+setting.mainmenuid
		var mainselector=(setting.orientation=="v")? mainmenuid : mainmenuid+', '+mainmenuid
		document.write('<style type="text/css">\n'
			+mainselector+' ul li a {background:'+setting.customtheme[0]+';}\n'
			+mainmenuid+' ul li a:hover {background:'+setting.customtheme[1]+';}\n'
		+'</style>')
	}
	this.shadow.enable=(document.all && !window.XMLHttpRequest)? false : this.shadow.enable //in IE6, always disable shadow
	jQuery(document).ready(function($){ //ajax menu?
		if (typeof setting.contentsource=="object"){ //if external ajax menu
			ddsmoothmenu.getajaxmenu($, setting)
		}
		else{ //else if markup menu
			ddsmoothmenu.buildmenu($, setting)
		}
	})
}

} //end ddsmoothmenu variable

/*!
 * SelectNav.js (v. 0.1)
 * Converts your <ul>/<ol> navigation into a dropdown list for small screens
 */
 window.selectnav=function(){"use strict";var a=function(a,b){function l(a){var b;a||(a=window.event),a.target?b=a.target:a.srcElement&&(b=a.srcElement),b.nodeType===3&&(b=b.parentNode),b.value&&(window.location.href=b.value)}function m(a){var b=a.nodeName.toLowerCase();return b==="ul"||b==="ol"}function n(a){for(var b=1;document.getElementById("selectnav"+b);b++);return a?"selectnav"+b:"selectnav"+(b-1)}function o(a){i++;var b=a.children.length,c="",k="",l=i-1;if(!b)return;if(l){while(l--)k+=g;k+=" "}for(var p=0;p<b;p++){var q=a.children[p].children[0],r=q.innerText||q.textContent,s="";d&&(s=q.className.search(d)!==-1||q.parentElement.className.search(d)!==-1?j:""),e&&!s&&(s=q.href===document.URL?j:""),c+='<option value="'+q.href+'" '+s+">"+k+r+"</option>";if(f){var t=a.children[p].children[1];t&&m(t)&&(c+=o(t))}}return i===1&&h&&(c='<option value="">'+h+"</option>"+c),i===1&&(c='<select class="selectnav" id="'+n(!0)+'">'+c+"</select>"),i--,c}a=document.getElementById(a);if(!a)return;if(!m(a))return;document.documentElement.className+=" js";var c=b||{},d=c.activeclass||"active",e=typeof c.autoselect=="boolean"?c.autoselect:!0,f=typeof c.nested=="boolean"?c.nested:!0,g=c.indent||"→",h=c.label||"- Navigation -",i=0,j=" selected ";a.insertAdjacentHTML("afterend",o(a));var k=document.getElementById(n());return k.addEventListener&&k.addEventListener("change",l),k.attachEvent&&k.attachEvent("onchange",l),k};return function(b,c){a(b,c)}}();

 /*
 * jQuery EasyTabs plugin 3.1.1
 *
 * Copyright (c) 2010-2011 Steve Schwartz (JangoSteve)
 *
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 *
 * Date: Tue Jan 26 16:30:00 2012 -0500
 */
( function($) {

  $.easytabs = function(container, options) {

        // Attach to plugin anything that should be available via
        // the $container.data('easytabs') object
    var plugin = this,
        $container = $(container),

        defaults = {
          animate: true,
          panelActiveClass: "active",
          tabActiveClass: "active",
          defaultTab: "li:first-child",
          animationSpeed: "normal",
          tabs: "> ul > li",
          updateHash: true,
          cycle: false,
          collapsible: false,
          collapsedClass: "collapsed",
          collapsedByDefault: true,
          uiTabs: false,
          transitionIn: 'fadeIn',
          transitionOut: 'fadeOut',
          transitionInEasing: 'swing',
          transitionOutEasing: 'swing',
          transitionCollapse: 'slideUp',
          transitionUncollapse: 'slideDown',
          transitionCollapseEasing: 'swing',
          transitionUncollapseEasing: 'swing',
          containerClass: "",
          tabsClass: "",
          tabClass: "",
          panelClass: "",
          cache: true,
          panelContext: $container
        },

        // Internal instance variables
        // (not available via easytabs object)
        $defaultTab,
        $defaultTabLink,
        transitions,
        lastHash,
        skipUpdateToHash,
        animationSpeeds = {
          fast: 200,
          normal: 400,
          slow: 600
        },

        // Shorthand variable so that we don't need to call
        // plugin.settings throughout the plugin code
        settings;

    // =============================================================
    // Functions available via easytabs object
    // =============================================================

    plugin.init = function() {

      plugin.settings = settings = $.extend({}, defaults, options);

      // Add jQuery UI's crazy class names to markup,
      // so that markup will match theme CSS
      if ( settings.uiTabs ) {
        settings.tabActiveClass = 'ui-tabs-selected';
        settings.containerClass = 'ui-tabs ui-widget ui-widget-content ui-corner-all';
        settings.tabsClass = 'ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all';
        settings.tabClass = 'ui-state-default ui-corner-top';
        settings.panelClass = 'ui-tabs-panel ui-widget-content ui-corner-bottom';
      }

      // If collapsible is true and defaultTab specified, assume user wants defaultTab showing (not collapsed)
      if ( settings.collapsible && options.defaultTab !== undefined && options.collpasedByDefault === undefined ) {
        settings.collapsedByDefault = false;
      }

      // Convert 'normal', 'fast', and 'slow' animation speed settings to their respective speed in milliseconds
      if ( typeof(settings.animationSpeed) === 'string' ) {
        settings.animationSpeed = animationSpeeds[settings.animationSpeed];
      }

      $('a.anchor').remove().prependTo('body');

      // Store easytabs object on container so we can easily set
      // properties throughout
      $container.data('easytabs', {});

      plugin.setTransitions();

      plugin.getTabs();

      addClasses();

      setDefaultTab();

      bindToTabClicks();

      initHashChange();

      initCycle();

      // Append data-easytabs HTML attribute to make easy to query for
      // easytabs instances via CSS pseudo-selector
      $container.attr('data-easytabs', true);
    };

    // Set transitions for switching between tabs based on options.
    // Could be used to update transitions if settings are changes.
    plugin.setTransitions = function() {
      transitions = ( settings.animate ) ? {
          show: settings.transitionIn,
          hide: settings.transitionOut,
          speed: settings.animationSpeed,
          collapse: settings.transitionCollapse,
          uncollapse: settings.transitionUncollapse,
          halfSpeed: settings.animationSpeed / 2
        } :
        {
          show: "show",
          hide: "hide",
          speed: 0,
          collapse: "hide",
          uncollapse: "show",
          halfSpeed: 0
        };
    };

    // Find and instantiate tabs and panels.
    // Could be used to reset tab and panel collection if markup is
    // modified.
    plugin.getTabs = function() {
      var $matchingPanel;

      // Find the initial set of elements matching the setting.tabs
      // CSS selector within the container
      plugin.tabs = $container.find(settings.tabs),

      // Instantiate panels as empty jquery object
      plugin.panels = $(),

      plugin.tabs.each(function(){
        var $tab = $(this),
            $a = $tab.children('a'),

            // targetId is the ID of the panel, which is either the
            // `href` attribute for non-ajax tabs, or in the
            // `data-target` attribute for ajax tabs since the `href` is
            // the ajax URL
            targetId = $tab.children('a').data('target');

        $tab.data('easytabs', {});

        // If the tab has a `data-target` attribute, and is thus an ajax tab
        if ( targetId !== undefined && targetId !== null ) {
          $tab.data('easytabs').ajax = $a.attr('href');
        } else {
          targetId = $a.attr('href');
        }
        targetId = targetId.match(/#([^\?]+)/)[0].substr(1);

        $matchingPanel = settings.panelContext.find("#" + targetId);

        // If tab has a matching panel, add it to panels
        if ( $matchingPanel.length ) {

          // Store panel height before hiding
          $matchingPanel.data('easytabs', {
            position: $matchingPanel.css('position'),
            visibility: $matchingPanel.css('visibility')
          });

          // Don't hide panel if it's active (allows `getTabs` to be called manually to re-instantiate tab collection)
          $matchingPanel.not(settings.panelActiveClass).hide();

          plugin.panels = plugin.panels.add($matchingPanel);

          $tab.data('easytabs').panel = $matchingPanel;

        // Otherwise, remove tab from tabs collection
        } else {
          plugin.tabs = plugin.tabs.not($tab);
        }
      });
    };

    // Select tab and fire callback
    plugin.selectTab = function($clicked, callback) {
      var url = window.location,
          hash = url.hash.match(/^[^\?]*/)[0],
          $targetPanel = $clicked.parent().data('easytabs').panel,
          ajaxUrl = $clicked.parent().data('easytabs').ajax;

      // Tab is collapsible and active => toggle collapsed state
      if( settings.collapsible && ! skipUpdateToHash && ($clicked.hasClass(settings.tabActiveClass) || $clicked.hasClass(settings.collapsedClass)) ) {
        plugin.toggleTabCollapse($clicked, $targetPanel, ajaxUrl, callback);

      // Tab is not active and panel is not active => select tab
      } else if( ! $clicked.hasClass(settings.tabActiveClass) || ! $targetPanel.hasClass(settings.panelActiveClass) ){
        activateTab($clicked, $targetPanel, ajaxUrl, callback);

      // Cache is disabled => reload (e.g reload an ajax tab).
      } else if ( ! settings.cache ){
        activateTab($clicked, $targetPanel, ajaxUrl, callback);
      }

    };

    // Toggle tab collapsed state and fire callback
    plugin.toggleTabCollapse = function($clicked, $targetPanel, ajaxUrl, callback) {
      plugin.panels.stop(true,true);

      if( fire($container,"easytabs:before", [$clicked, $targetPanel, settings]) ){
        plugin.tabs.filter("." + settings.tabActiveClass).removeClass(settings.tabActiveClass).children().removeClass(settings.tabActiveClass);

        // If panel is collapsed, uncollapse it
        if( $clicked.hasClass(settings.collapsedClass) ){

          // If ajax panel and not already cached
          if( ajaxUrl && (!settings.cache || !$clicked.parent().data('easytabs').cached) ) {
            $container.trigger('easytabs:ajax:beforeSend', [$clicked, $targetPanel]);

            $targetPanel.load(ajaxUrl, function(response, status, xhr){
              $clicked.parent().data('easytabs').cached = true;
              $container.trigger('easytabs:ajax:complete', [$clicked, $targetPanel, response, status, xhr]);
            });
          }

          // Update CSS classes of tab and panel
          $clicked.parent()
            .removeClass(settings.collapsedClass)
            .addClass(settings.tabActiveClass)
            .children()
              .removeClass(settings.collapsedClass)
              .addClass(settings.tabActiveClass);

          $targetPanel
            .addClass(settings.panelActiveClass)
            [transitions.uncollapse](transitions.speed, settings.transitionUncollapseEasing, function(){
              $container.trigger('easytabs:midTransition', [$clicked, $targetPanel, settings]);
              if(typeof callback == 'function') callback();
            });

        // Otherwise, collapse it
        } else {

          // Update CSS classes of tab and panel
          $clicked.addClass(settings.collapsedClass)
            .parent()
              .addClass(settings.collapsedClass);

          $targetPanel
            .removeClass(settings.panelActiveClass)
            [transitions.collapse](transitions.speed, settings.transitionCollapseEasing, function(){
              $container.trigger("easytabs:midTransition", [$clicked, $targetPanel, settings]);
              if(typeof callback == 'function') callback();
            });
        }
      }
    };


    // Find tab with target panel matching value
    plugin.matchTab = function(hash) {
      return plugin.tabs.find("[href='" + hash + "'],[data-target='" + hash + "']").first();
    };

    // Find panel with `id` matching value
    plugin.matchInPanel = function(hash) {
      return ( hash ? plugin.panels.filter(':has(' + hash + ')').first() : [] );
    };

    // Select matching tab when URL hash changes
    plugin.selectTabFromHashChange = function() {
      var hash = window.location.hash.match(/^[^\?]*/)[0],
          $tab = plugin.matchTab(hash),
          $panel;

      if ( settings.updateHash ) {

        // If hash directly matches tab
        if( $tab.length ){
          skipUpdateToHash = true;
          plugin.selectTab( $tab );

        } else {
          $panel = plugin.matchInPanel(hash);

          // If panel contains element matching hash
          if ( $panel.length ) {
            hash = '#' + $panel.attr('id');
            $tab = plugin.matchTab(hash);
            skipUpdateToHash = true;
            plugin.selectTab( $tab );

          // If default tab is not active...
          } else if ( ! $defaultTab.hasClass(settings.tabActiveClass) && ! settings.cycle ) {

            // ...and hash is blank or matches a parent of the tab container or
            // if the last tab (before the hash updated) was one of the other tabs in this container.
            if ( hash === '' || plugin.matchTab(lastHash).length || $container.closest(hash).length ) {
              skipUpdateToHash = true;
              plugin.selectTab( $defaultTabLink );
            }
          }
        }
      }
    };

    // Cycle through tabs
    plugin.cycleTabs = function(tabNumber){
      if(settings.cycle){
        tabNumber = tabNumber % plugin.tabs.length;
        $tab = $( plugin.tabs[tabNumber] ).children("a").first();
        skipUpdateToHash = true;
        plugin.selectTab( $tab, function() {
          setTimeout(function(){ plugin.cycleTabs(tabNumber + 1); }, settings.cycle);
        });
      }
    };

    // Convenient public methods
    plugin.publicMethods = {
      select: function(tabSelector){
        var $tab;

        // Find tab container that matches selector (like 'li#tab-one' which contains tab link)
        if ( ($tab = plugin.tabs.filter(tabSelector)).length === 0 ) {

          // Find direct tab link that matches href (like 'a[href="#panel-1"]')
          if ( ($tab = plugin.tabs.find("a[href='" + tabSelector + "']")).length === 0 ) {

            // Find direct tab link that matches selector (like 'a#tab-1')
            if ( ($tab = plugin.tabs.find("a" + tabSelector)).length === 0 ) {

              // Find direct tab link that matches data-target (lik 'a[data-target="#panel-1"]')
              if ( ($tab = plugin.tabs.find("[data-target='" + tabSelector + "']")).length === 0 ) {

                // Find direct tab link that ends in the matching href (like 'a[href$="#panel-1"]', which would also match http://example.com/currentpage/#panel-1)
                if ( ($tab = plugin.tabs.find("a[href$='" + tabSelector + "']")).length === 0 ) {

                  $.error('Tab \'' + tabSelector + '\' does not exist in tab set');
                }
              }
            }
          }
        } else {
          // Select the child tab link, since the first option finds the tab container (like <li>)
          $tab = $tab.children("a").first();
        }
        plugin.selectTab($tab);
      }
    };

    // =============================================================
    // Private functions
    // =============================================================

    // Triggers an event on an element and returns the event result
    var fire = function(obj, name, data) {
      var event = $.Event(name);
      obj.trigger(event, data);
      return event.result !== false;
    }

    // Add CSS classes to markup (if specified), called by init
    var addClasses = function() {
      $container.addClass(settings.containerClass);
      plugin.tabs.parent().addClass(settings.tabsClass);
      plugin.tabs.addClass(settings.tabClass);
      plugin.panels.addClass(settings.panelClass);
    };

    // Set the default tab, whether from hash (bookmarked) or option,
    // called by init
    var setDefaultTab = function(){
      var hash = window.location.hash.match(/^[^\?]*/)[0],
          $selectedTab = plugin.matchTab(hash).parent(),
          $panel;

      // If hash directly matches one of the tabs, active on page-load
      if( $selectedTab.length === 1 ){
        $defaultTab = $selectedTab;
        settings.cycle = false;

      } else {
        $panel = plugin.matchInPanel(hash);

        // If one of the panels contains the element matching the hash,
        // make it active on page-load
        if ( $panel.length ) {
          hash = '#' + $panel.attr('id');
          $defaultTab = plugin.matchTab(hash).parent();

        // Otherwise, make the default tab the one that's active on page-load
        } else {
          $defaultTab = plugin.tabs.parent().find(settings.defaultTab);
          if ( $defaultTab.length === 0 ) {
            $.error("The specified default tab ('" + settings.defaultTab + "') could not be found in the tab set.");
          }
        }
      }

      $defaultTabLink = $defaultTab.children("a").first();

      activateDefaultTab($selectedTab);
    };

    // Activate defaultTab (or collapse by default), called by setDefaultTab
    var activateDefaultTab = function($selectedTab) {
      var defaultPanel,
          defaultAjaxUrl;

      if ( settings.collapsible && $selectedTab.length === 0 && settings.collapsedByDefault ) {
        $defaultTab
          .addClass(settings.collapsedClass)
          .children()
            .addClass(settings.collapsedClass);

      } else {

        defaultPanel = $( $defaultTab.data('easytabs').panel );
        defaultAjaxUrl = $defaultTab.data('easytabs').ajax;

        if ( defaultAjaxUrl && (!settings.cache || !$defaultTab.data('easytabs').cached) ) {
          $container.trigger('easytabs:ajax:beforeSend', [$defaultTabLink, defaultPanel]);
          defaultPanel.load(defaultAjaxUrl, function(response, status, xhr){
            $defaultTab.data('easytabs').cached = true;
            $container.trigger('easytabs:ajax:complete', [$defaultTabLink, defaultPanel, response, status, xhr]);
          });
        }

        $defaultTab.data('easytabs').panel
          .show()
          .addClass(settings.panelActiveClass);

        $defaultTab
          .addClass(settings.tabActiveClass)
          .children()
            .addClass(settings.tabActiveClass);
      }
    };

    // Bind tab-select funtionality to namespaced click event, called by
    // init
    var bindToTabClicks = function() {
      plugin.tabs.children("a").bind("click.easytabs", function(e) {

        // Stop cycling when a tab is clicked
        settings.cycle = false;

        // Hash will be updated when tab is clicked,
        // don't cause tab to re-select when hash-change event is fired
        skipUpdateToHash = false;

        // Select the panel for the clicked tab
        plugin.selectTab( $(this) );

        // Don't follow the link to the anchor
        e.preventDefault();
      });
    };

    // Activate a given tab/panel, called from plugin.selectTab:
    //
    //   * fire `easytabs:before` hook
    //   * get ajax if new tab is an uncached ajax tab
    //   * animate out previously-active panel
    //   * fire `easytabs:midTransition` hook
    //   * update URL hash
    //   * animate in newly-active panel
    //   * update CSS classes for inactive and active tabs/panels
    //
    // TODO: This could probably be broken out into many more modular
    // functions
    var activateTab = function($clicked, $targetPanel, ajaxUrl, callback) {
      plugin.panels.stop(true,true);

      if( fire($container,"easytabs:before", [$clicked, $targetPanel, settings]) ){
        var $visiblePanel = plugin.panels.filter(":visible"),
            $panelContainer = $targetPanel.parent(),
            targetHeight,
            visibleHeight,
            heightDifference,
            showPanel,
            hash = window.location.hash.match(/^[^\?]*/)[0];

        if (settings.animate) {
          targetHeight = getHeightForHidden($targetPanel);
          visibleHeight = $visiblePanel.length ? setAndReturnHeight($visiblePanel) : 0;
          heightDifference = targetHeight - visibleHeight;
        }

        // Set lastHash to help indicate if defaultTab should be
        // activated across multiple tab instances.
        lastHash = hash;

        // TODO: Move this function elsewhere
        showPanel = function() {
          // At this point, the previous panel is hidden, and the new one will be selected
          $container.trigger("easytabs:midTransition", [$clicked, $targetPanel, settings]);

          // Gracefully animate between panels of differing heights, start height change animation *after* panel change if panel needs to contract,
          // so that there is no chance of making the visible panel overflowing the height of the target panel
          if (settings.animate && settings.transitionIn == 'fadeIn') {
            if (heightDifference < 0)
              $panelContainer.animate({
                height: $panelContainer.height() + heightDifference
              }, transitions.halfSpeed ).css({ 'min-height': '' });
          }

          if ( settings.updateHash && ! skipUpdateToHash ) {
            //window.location = url.toString().replace((url.pathname + hash), (url.pathname + $clicked.attr("href")));
            // Not sure why this behaves so differently, but it's more straight forward and seems to have less side-effects
            window.location.hash = '#' + $targetPanel.attr('id');
          } else {
            skipUpdateToHash = false;
          }

          $targetPanel
            [transitions.show](transitions.speed, settings.transitionInEasing, function(){
              $panelContainer.css({height: '', 'min-height': ''}); // After the transition, unset the height
              $container.trigger("easytabs:after", [$clicked, $targetPanel, settings]);
              // callback only gets called if selectTab actually does something, since it's inside the if block
              if(typeof callback == 'function'){
                callback();
              }
          });
        };

        if ( ajaxUrl && (!settings.cache || !$clicked.parent().data('easytabs').cached) ) {
          $container.trigger('easytabs:ajax:beforeSend', [$clicked, $targetPanel]);
          $targetPanel.load(ajaxUrl, function(response, status, xhr){
            $clicked.parent().data('easytabs').cached = true;
            $container.trigger('easytabs:ajax:complete', [$clicked, $targetPanel, response, status, xhr]);
          });
        }

        // Gracefully animate between panels of differing heights, start height change animation *before* panel change if panel needs to expand,
        // so that there is no chance of making the target panel overflowing the height of the visible panel
        if( settings.animate && settings.transitionOut == 'fadeOut' ) {
          if( heightDifference > 0 ) {
            $panelContainer.animate({
              height: ( $panelContainer.height() + heightDifference )
            }, transitions.halfSpeed );
          } else {
            // Prevent height jumping before height transition is triggered at midTransition
            $panelContainer.css({ 'min-height': $panelContainer.height() });
          }
        }

        // Change the active tab *first* to provide immediate feedback when the user clicks
        plugin.tabs.filter("." + settings.tabActiveClass).removeClass(settings.tabActiveClass).children().removeClass(settings.tabActiveClass);
        plugin.tabs.filter("." + settings.collapsedClass).removeClass(settings.collapsedClass).children().removeClass(settings.collapsedClass);
        $clicked.parent().addClass(settings.tabActiveClass).children().addClass(settings.tabActiveClass);

        plugin.panels.filter("." + settings.panelActiveClass).removeClass(settings.panelActiveClass);
        $targetPanel.addClass(settings.panelActiveClass);

        if( $visiblePanel.length ) {
          $visiblePanel
            [transitions.hide](transitions.speed, settings.transitionOutEasing, showPanel);
        } else {
          $targetPanel
            [transitions.uncollapse](transitions.speed, settings.transitionUncollapseEasing, showPanel);
        }
      }
    };

    // Get heights of panels to enable animation between panels of
    // differing heights, called by activateTab
    var getHeightForHidden = function($targetPanel){

      if ( $targetPanel.data('easytabs') && $targetPanel.data('easytabs').lastHeight ) {
        return $targetPanel.data('easytabs').lastHeight;
      }

      // this is the only property easytabs changes, so we need to grab its value on each tab change
      var display = $targetPanel.css('display'),

          // Workaround, because firefox returns wrong height if element itself has absolute positioning
          height = $targetPanel
            .wrap($('<div>', {position: 'absolute', 'visibility': 'hidden', 'overflow': 'hidden'}))
            .css({'position':'relative','visibility':'hidden','display':'block'})
            .outerHeight();

      $targetPanel.unwrap();

      // Return element to previous state
      $targetPanel.css({
        position: $targetPanel.data('easytabs').position,
        visibility: $targetPanel.data('easytabs').visibility,
        display: display
      });

      // Cache height
      $targetPanel.data('easytabs').lastHeight = height;

      return height;
    };

    // Since the height of the visible panel may have been manipulated due to interaction,
    // we want to re-cache the visible height on each tab change, called
    // by activateTab
    var setAndReturnHeight = function($visiblePanel) {
      var height = $visiblePanel.outerHeight();

      if( $visiblePanel.data('easytabs') ) {
        $visiblePanel.data('easytabs').lastHeight = height;
      } else {
        $visiblePanel.data('easytabs', {lastHeight: height});
      }
      return height;
    };

    // Setup hash-change callback for forward- and back-button
    // functionality, called by init
    var initHashChange = function(){

      // enabling back-button with jquery.hashchange plugin
      // http://benalman.com/projects/jquery-hashchange-plugin/
      if(typeof $(window).hashchange === 'function'){
        $(window).hashchange( function(){
          plugin.selectTabFromHashChange();
        });
      } else if ($.address && typeof $.address.change === 'function') { // back-button with jquery.address plugin http://www.asual.com/jquery/address/docs/
        $.address.change( function(){
          plugin.selectTabFromHashChange();
        });
      }
    };

    // Begin cycling if set in options, called by init
    var initCycle = function(){
      var tabNumber;
      if (settings.cycle) {
        tabNumber = plugin.tabs.index($defaultTab);
        setTimeout( function(){ plugin.cycleTabs(tabNumber + 1); }, settings.cycle);
      }
    };


    plugin.init();

  };

  $.fn.easytabs = function(options) {
    var args = arguments;

    return this.each(function() {
      var $this = $(this),
          plugin = $this.data('easytabs');

      // Initialization was called with $(el).easytabs( { options } );
      if (undefined === plugin) {
        plugin = new $.easytabs(this, options);
        $this.data('easytabs', plugin);
      }

      // User called public method
      if ( plugin.publicMethods[options] ){
        return plugin.publicMethods[options](Array.prototype.slice.call( args, 1 ));
      }
    });
  };

})(jQuery);


/**
 * Isotope v1.5.19
 * An exquisite jQuery plugin for magical layouts
 * http://isotope.metafizzy.co
 *
 * Commercial use requires one-time license fee
 * http://metafizzy.co/#licenses
 *
 * Copyright 2012 David DeSandro / Metafizzy
 */
(function(a,b,c){"use strict";var d=a.document,e=a.Modernizr,f=function(a){return a.charAt(0).toUpperCase()+a.slice(1)},g="Moz Webkit O Ms".split(" "),h=function(a){var b=d.documentElement.style,c;if(typeof b[a]=="string")return a;a=f(a);for(var e=0,h=g.length;e<h;e++){c=g[e]+a;if(typeof b[c]=="string")return c}},i=h("transform"),j=h("transitionProperty"),k={csstransforms:function(){return!!i},csstransforms3d:function(){var a=!!h("perspective");if(a){var c=" -o- -moz- -ms- -webkit- -khtml- ".split(" "),d="@media ("+c.join("transform-3d),(")+"modernizr)",e=b("<style>"+d+"{#modernizr{height:3px}}"+"</style>").appendTo("head"),f=b('<div id="modernizr" />').appendTo("html");a=f.height()===3,f.remove(),e.remove()}return a},csstransitions:function(){return!!j}},l;if(e)for(l in k)e.hasOwnProperty(l)||e.addTest(l,k[l]);else{e=a.Modernizr={_version:"1.6ish: miniModernizr for Isotope"};var m=" ",n;for(l in k)n=k[l](),e[l]=n,m+=" "+(n?"":"no-")+l;b("html").addClass(m)}if(e.csstransforms){var o=e.csstransforms3d?{translate:function(a){return"translate3d("+a[0]+"px, "+a[1]+"px, 0) "},scale:function(a){return"scale3d("+a+", "+a+", 1) "}}:{translate:function(a){return"translate("+a[0]+"px, "+a[1]+"px) "},scale:function(a){return"scale("+a+") "}},p=function(a,c,d){var e=b.data(a,"isoTransform")||{},f={},g,h={},j;f[c]=d,b.extend(e,f);for(g in e)j=e[g],h[g]=o[g](j);var k=h.translate||"",l=h.scale||"",m=k+l;b.data(a,"isoTransform",e),a.style[i]=m};b.cssNumber.scale=!0,b.cssHooks.scale={set:function(a,b){p(a,"scale",b)},get:function(a,c){var d=b.data(a,"isoTransform");return d&&d.scale?d.scale:1}},b.fx.step.scale=function(a){b.cssHooks.scale.set(a.elem,a.now+a.unit)},b.cssNumber.translate=!0,b.cssHooks.translate={set:function(a,b){p(a,"translate",b)},get:function(a,c){var d=b.data(a,"isoTransform");return d&&d.translate?d.translate:[0,0]}}}var q,r;e.csstransitions&&(q={WebkitTransitionProperty:"webkitTransitionEnd",MozTransitionProperty:"transitionend",OTransitionProperty:"oTransitionEnd",transitionProperty:"transitionEnd"}[j],r=h("transitionDuration"));var s=b.event,t;s.special.smartresize={setup:function(){b(this).bind("resize",s.special.smartresize.handler)},teardown:function(){b(this).unbind("resize",s.special.smartresize.handler)},handler:function(a,b){var c=this,d=arguments;a.type="smartresize",t&&clearTimeout(t),t=setTimeout(function(){jQuery.event.handle.apply(c,d)},b==="execAsap"?0:100)}},b.fn.smartresize=function(a){return a?this.bind("smartresize",a):this.trigger("smartresize",["execAsap"])},b.Isotope=function(a,c,d){this.element=b(c),this._create(a),this._init(d)};var u=["width","height"],v=b(a);b.Isotope.settings={resizable:!0,layoutMode:"masonry",containerClass:"isotope",itemClass:"isotope-item",hiddenClass:"isotope-hidden",hiddenStyle:{opacity:0,scale:.001},visibleStyle:{opacity:1,scale:1},containerStyle:{position:"relative",overflow:"hidden"},animationEngine:"best-available",animationOptions:{queue:!1,duration:800},sortBy:"original-order",sortAscending:!0,resizesContainer:!0,transformsEnabled:!b.browser.opera,itemPositionDataEnabled:!1},b.Isotope.prototype={_create:function(a){this.options=b.extend({},b.Isotope.settings,a),this.styleQueue=[],this.elemCount=0;var c=this.element[0].style;this.originalStyle={};var d=u.slice(0);for(var e in this.options.containerStyle)d.push(e);for(var f=0,g=d.length;f<g;f++)e=d[f],this.originalStyle[e]=c[e]||"";this.element.css(this.options.containerStyle),this._updateAnimationEngine(),this._updateUsingTransforms();var h={"original-order":function(a,b){return b.elemCount++,b.elemCount},random:function(){return Math.random()}};this.options.getSortData=b.extend(this.options.getSortData,h),this.reloadItems(),this.offset={left:parseInt(this.element.css("padding-left")||0,10),top:parseInt(this.element.css("padding-top")||0,10)};var i=this;setTimeout(function(){i.element.addClass(i.options.containerClass)},0),this.options.resizable&&v.bind("smartresize.isotope",function(){i.resize()}),this.element.delegate("."+this.options.hiddenClass,"click",function(){return!1})},_getAtoms:function(a){var b=this.options.itemSelector,c=b?a.filter(b).add(a.find(b)):a,d={position:"absolute"};return this.usingTransforms&&(d.left=0,d.top=0),c.css(d).addClass(this.options.itemClass),this.updateSortData(c,!0),c},_init:function(a){this.$filteredAtoms=this._filter(this.$allAtoms),this._sort(),this.reLayout(a)},option:function(a){if(b.isPlainObject(a)){this.options=b.extend(!0,this.options,a);var c;for(var d in a)c="_update"+f(d),this[c]&&this[c]()}},_updateAnimationEngine:function(){var a=this.options.animationEngine.toLowerCase().replace(/[ _\-]/g,""),b;switch(a){case"css":case"none":b=!1;break;case"jquery":b=!0;break;default:b=!e.csstransitions}this.isUsingJQueryAnimation=b,this._updateUsingTransforms()},_updateTransformsEnabled:function(){this._updateUsingTransforms()},_updateUsingTransforms:function(){var a=this.usingTransforms=this.options.transformsEnabled&&e.csstransforms&&e.csstransitions&&!this.isUsingJQueryAnimation;a||(delete this.options.hiddenStyle.scale,delete this.options.visibleStyle.scale),this.getPositionStyles=a?this._translate:this._positionAbs},_filter:function(a){var b=this.options.filter===""?"*":this.options.filter;if(!b)return a;var c=this.options.hiddenClass,d="."+c,e=a.filter(d),f=e;if(b!=="*"){f=e.filter(b);var g=a.not(d).not(b).addClass(c);this.styleQueue.push({$el:g,style:this.options.hiddenStyle})}return this.styleQueue.push({$el:f,style:this.options.visibleStyle}),f.removeClass(c),a.filter(b)},updateSortData:function(a,c){var d=this,e=this.options.getSortData,f,g;a.each(function(){f=b(this),g={};for(var a in e)!c&&a==="original-order"?g[a]=b.data(this,"isotope-sort-data")[a]:g[a]=e[a](f,d);b.data(this,"isotope-sort-data",g)})},_sort:function(){var a=this.options.sortBy,b=this._getSorter,c=this.options.sortAscending?1:-1,d=function(d,e){var f=b(d,a),g=b(e,a);return f===g&&a!=="original-order"&&(f=b(d,"original-order"),g=b(e,"original-order")),(f>g?1:f<g?-1:0)*c};this.$filteredAtoms.sort(d)},_getSorter:function(a,c){return b.data(a,"isotope-sort-data")[c]},_translate:function(a,b){return{translate:[a,b]}},_positionAbs:function(a,b){return{left:a,top:b}},_pushPosition:function(a,b,c){b=Math.round(b+this.offset.left),c=Math.round(c+this.offset.top);var d=this.getPositionStyles(b,c);this.styleQueue.push({$el:a,style:d}),this.options.itemPositionDataEnabled&&a.data("isotope-item-position",{x:b,y:c})},layout:function(a,b){var c=this.options.layoutMode;this["_"+c+"Layout"](a);if(this.options.resizesContainer){var d=this["_"+c+"GetContainerSize"]();this.styleQueue.push({$el:this.element,style:d})}this._processStyleQueue(a,b),this.isLaidOut=!0},_processStyleQueue:function(a,c){var d=this.isLaidOut?this.isUsingJQueryAnimation?"animate":"css":"css",f=this.options.animationOptions,g=this.options.onLayout,h,i,j,k;i=function(a,b){b.$el[d](b.style,f)};if(this._isInserting&&this.isUsingJQueryAnimation)i=function(a,b){h=b.$el.hasClass("no-transition")?"css":d,b.$el[h](b.style,f)};else if(c||g||f.complete){var l=!1,m=[c,g,f.complete],n=this;j=!0,k=function(){if(l)return;var b;for(var c=0,d=m.length;c<d;c++)b=m[c],typeof b=="function"&&b.call(n.element,a,n);l=!0};if(this.isUsingJQueryAnimation&&d==="animate")f.complete=k,j=!1;else if(e.csstransitions){var o=0,p=this.styleQueue[0],s=p&&p.$el,t;while(!s||!s.length){t=this.styleQueue[o++];if(!t)return;s=t.$el}var u=parseFloat(getComputedStyle(s[0])[r]);u>0&&(i=function(a,b){b.$el[d](b.style,f).one(q,k)},j=!1)}}b.each(this.styleQueue,i),j&&k(),this.styleQueue=[]},resize:function(){this["_"+this.options.layoutMode+"ResizeChanged"]()&&this.reLayout()},reLayout:function(a){this["_"+this.options.layoutMode+"Reset"](),this.layout(this.$filteredAtoms,a)},addItems:function(a,b){var c=this._getAtoms(a);this.$allAtoms=this.$allAtoms.add(c),b&&b(c)},insert:function(a,b){this.element.append(a);var c=this;this.addItems(a,function(a){var d=c._filter(a);c._addHideAppended(d),c._sort(),c.reLayout(),c._revealAppended(d,b)})},appended:function(a,b){var c=this;this.addItems(a,function(a){c._addHideAppended(a),c.layout(a),c._revealAppended(a,b)})},_addHideAppended:function(a){this.$filteredAtoms=this.$filteredAtoms.add(a),a.addClass("no-transition"),this._isInserting=!0,this.styleQueue.push({$el:a,style:this.options.hiddenStyle})},_revealAppended:function(a,b){var c=this;setTimeout(function(){a.removeClass("no-transition"),c.styleQueue.push({$el:a,style:c.options.visibleStyle}),c._isInserting=!1,c._processStyleQueue(a,b)},10)},reloadItems:function(){this.$allAtoms=this._getAtoms(this.element.children())},remove:function(a,b){var c=this,d=function(){c.$allAtoms=c.$allAtoms.not(a),a.remove(),b&&b.call(c.element)};a.filter(":not(."+this.options.hiddenClass+")").length?(this.styleQueue.push({$el:a,style:this.options.hiddenStyle}),this.$filteredAtoms=this.$filteredAtoms.not(a),this._sort(),this.reLayout(d)):d()},shuffle:function(a){this.updateSortData(this.$allAtoms),this.options.sortBy="random",this._sort(),this.reLayout(a)},destroy:function(){var a=this.usingTransforms,b=this.options;this.$allAtoms.removeClass(b.hiddenClass+" "+b.itemClass).each(function(){var b=this.style;b.position="",b.top="",b.left="",b.opacity="",a&&(b[i]="")});var c=this.element[0].style;for(var d in this.originalStyle)c[d]=this.originalStyle[d];this.element.unbind(".isotope").undelegate("."+b.hiddenClass,"click").removeClass(b.containerClass).removeData("isotope"),v.unbind(".isotope")},_getSegments:function(a){var b=this.options.layoutMode,c=a?"rowHeight":"columnWidth",d=a?"height":"width",e=a?"rows":"cols",g=this.element[d](),h,i=this.options[b]&&this.options[b][c]||this.$filteredAtoms["outer"+f(d)](!0)||g;h=Math.floor(g/i),h=Math.max(h,1),this[b][e]=h,this[b][c]=i},_checkIfSegmentsChanged:function(a){var b=this.options.layoutMode,c=a?"rows":"cols",d=this[b][c];return this._getSegments(a),this[b][c]!==d},_masonryReset:function(){this.masonry={},this._getSegments();var a=this.masonry.cols;this.masonry.colYs=[];while(a--)this.masonry.colYs.push(0)},_masonryLayout:function(a){var c=this,d=c.masonry;a.each(function(){var a=b(this),e=Math.ceil(a.outerWidth(!0)/d.columnWidth);e=Math.min(e,d.cols);if(e===1)c._masonryPlaceBrick(a,d.colYs);else{var f=d.cols+1-e,g=[],h,i;for(i=0;i<f;i++)h=d.colYs.slice(i,i+e),g[i]=Math.max.apply(Math,h);c._masonryPlaceBrick(a,g)}})},_masonryPlaceBrick:function(a,b){var c=Math.min.apply(Math,b),d=0;for(var e=0,f=b.length;e<f;e++)if(b[e]===c){d=e;break}var g=this.masonry.columnWidth*d,h=c;this._pushPosition(a,g,h);var i=c+a.outerHeight(!0),j=this.masonry.cols+1-f;for(e=0;e<j;e++)this.masonry.colYs[d+e]=i},_masonryGetContainerSize:function(){var a=Math.max.apply(Math,this.masonry.colYs);return{height:a}},_masonryResizeChanged:function(){return this._checkIfSegmentsChanged()},_fitRowsReset:function(){this.fitRows={x:0,y:0,height:0}},_fitRowsLayout:function(a){var c=this,d=this.element.width(),e=this.fitRows;a.each(function(){var a=b(this),f=a.outerWidth(!0),g=a.outerHeight(!0);e.x!==0&&f+e.x>d&&(e.x=0,e.y=e.height),c._pushPosition(a,e.x,e.y),e.height=Math.max(e.y+g,e.height),e.x+=f})},_fitRowsGetContainerSize:function(){return{height:this.fitRows.height}},_fitRowsResizeChanged:function(){return!0},_cellsByRowReset:function(){this.cellsByRow={index:0},this._getSegments(),this._getSegments(!0)},_cellsByRowLayout:function(a){var c=this,d=this.cellsByRow;a.each(function(){var a=b(this),e=d.index%d.cols,f=Math.floor(d.index/d.cols),g=(e+.5)*d.columnWidth-a.outerWidth(!0)/2,h=(f+.5)*d.rowHeight-a.outerHeight(!0)/2;c._pushPosition(a,g,h),d.index++})},_cellsByRowGetContainerSize:function(){return{height:Math.ceil(this.$filteredAtoms.length/this.cellsByRow.cols)*this.cellsByRow.rowHeight+this.offset.top}},_cellsByRowResizeChanged:function(){return this._checkIfSegmentsChanged()},_straightDownReset:function(){this.straightDown={y:0}},_straightDownLayout:function(a){var c=this;a.each(function(a){var d=b(this);c._pushPosition(d,0,c.straightDown.y),c.straightDown.y+=d.outerHeight(!0)})},_straightDownGetContainerSize:function(){return{height:this.straightDown.y}},_straightDownResizeChanged:function(){return!0},_masonryHorizontalReset:function(){this.masonryHorizontal={},this._getSegments(!0);var a=this.masonryHorizontal.rows;this.masonryHorizontal.rowXs=[];while(a--)this.masonryHorizontal.rowXs.push(0)},_masonryHorizontalLayout:function(a){var c=this,d=c.masonryHorizontal;a.each(function(){var a=b(this),e=Math.ceil(a.outerHeight(!0)/d.rowHeight);e=Math.min(e,d.rows);if(e===1)c._masonryHorizontalPlaceBrick(a,d.rowXs);else{var f=d.rows+1-e,g=[],h,i;for(i=0;i<f;i++)h=d.rowXs.slice(i,i+e),g[i]=Math.max.apply(Math,h);c._masonryHorizontalPlaceBrick(a,g)}})},_masonryHorizontalPlaceBrick:function(a,b){var c=Math.min.apply(Math,b),d=0;for(var e=0,f=b.length;e<f;e++)if(b[e]===c){d=e;break}var g=c,h=this.masonryHorizontal.rowHeight*d;this._pushPosition(a,g,h);var i=c+a.outerWidth(!0),j=this.masonryHorizontal.rows+1-f;for(e=0;e<j;e++)this.masonryHorizontal.rowXs[d+e]=i},_masonryHorizontalGetContainerSize:function(){var a=Math.max.apply(Math,this.masonryHorizontal.rowXs);return{width:a}},_masonryHorizontalResizeChanged:function(){return this._checkIfSegmentsChanged(!0)},_fitColumnsReset:function(){this.fitColumns={x:0,y:0,width:0}},_fitColumnsLayout:function(a){var c=this,d=this.element.height(),e=this.fitColumns;a.each(function(){var a=b(this),f=a.outerWidth(!0),g=a.outerHeight(!0);e.y!==0&&g+e.y>d&&(e.x=e.width,e.y=0),c._pushPosition(a,e.x,e.y),e.width=Math.max(e.x+f,e.width),e.y+=g})},_fitColumnsGetContainerSize:function(){return{width:this.fitColumns.width}},_fitColumnsResizeChanged:function(){return!0},_cellsByColumnReset:function(){this.cellsByColumn={index:0},this._getSegments(),this._getSegments(!0)},_cellsByColumnLayout:function(a){var c=this,d=this.cellsByColumn;a.each(function(){var a=b(this),e=Math.floor(d.index/d.rows),f=d.index%d.rows,g=(e+.5)*d.columnWidth-a.outerWidth(!0)/2,h=(f+.5)*d.rowHeight-a.outerHeight(!0)/2;c._pushPosition(a,g,h),d.index++})},_cellsByColumnGetContainerSize:function(){return{width:Math.ceil(this.$filteredAtoms.length/this.cellsByColumn.rows)*this.cellsByColumn.columnWidth}},_cellsByColumnResizeChanged:function(){return this._checkIfSegmentsChanged(!0)},_straightAcrossReset:function(){this.straightAcross={x:0}},_straightAcrossLayout:function(a){var c=this;a.each(function(a){var d=b(this);c._pushPosition(d,c.straightAcross.x,0),c.straightAcross.x+=d.outerWidth(!0)})},_straightAcrossGetContainerSize:function(){return{width:this.straightAcross.x}},_straightAcrossResizeChanged:function(){return!0}},b.fn.imagesLoaded=function(a){function h(){a.call(c,d)}function i(a){var c=a.target;c.src!==f&&b.inArray(c,g)===-1&&(g.push(c),--e<=0&&(setTimeout(h),d.unbind(".imagesLoaded",i)))}var c=this,d=c.find("img").add(c.filter("img")),e=d.length,f="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==",g=[];return e||h(),d.bind("load.imagesLoaded error.imagesLoaded",i).each(function(){var a=this.src;this.src=f,this.src=a}),c};var w=function(b){a.console&&a.console.error(b)};b.fn.isotope=function(a,c){if(typeof a=="string"){var d=Array.prototype.slice.call(arguments,1);this.each(function(){var c=b.data(this,"isotope");if(!c){w("cannot call methods on isotope prior to initialization; attempted to call method '"+a+"'");return}if(!b.isFunction(c[a])||a.charAt(0)==="_"){w("no such method '"+a+"' for isotope instance");return}c[a].apply(c,d)})}else this.each(function(){var d=b.data(this,"isotope");d?(d.option(a),d._init(c)):b.data(this,"isotope",new b.Isotope(a,this,c))});return this}})(window,jQuery);


/*
 * DC jQuery Slick Forms - jQuery Slick Forms
 * Copyright (c) 2011 Design Chemical
 * http://www.designchemical.com
 *
 * Dual licensed under the MIT and GPL licenses:
 * 	http://www.opensource.org/licenses/mit-license.php
 * 	http://www.gnu.org/licenses/gpl.html
 *
 */

(function($){

	//define the plugin
	$.fn.dcSlickForms = function(options) {

		//set default options
		var defaults = {
			classError: 'error',
			classForm: 'slick-form',
			align: 'left',
			animateError: true,
			animateD: 10,
			ajaxSubmit: true,
			errorH: 24,
			successH: 40
		};

		//call in the default otions
		var options = $.extend(defaults, options);
		
		//act upon the element that is passed into the design    
		return this.each(function(options){
			
			// Declare the function variables:
			var formAction = $(this).attr('action');
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			var textError = $('.v-error', this).val();
			var textEmail = $('.v-email', this).val();
			var $error = $('<span class="error"></span>');
			var $form = this;
			var $loading = $('<div class="loading"><span></span></div>');
			var errorText = '* Required Fields';
			var check = 0;
			
			$('input',$form).focus(function(){
				$(this).addClass('focus');
			});
			$('input',$form).blur(function(){
				$(this).removeClass('focus');
				masonryHeight();
			});
			$('.nocomment').hide();
			$('.defaultText',this).dcDefaultText();
			$('.'+defaults.classForm+' label').hide();
			
			// Form submit & Validation
			$(this).submit(function(){

				if(check == 0){
					horig = $('#bottom-container .boxes').height();
				}
				check = 1;
				formReset($form);
				$('.defaultText',$form).dcDefaultText({action: 'remove'});

				// Validate all inputs with the class "required"
				$('.required',$form).each(function(){
					var label = $(this).attr('title');
					var inputVal = $(this).val();
					var $parentTag = $(this).parent();
					if(inputVal == ''){
						$parentTag.addClass('error').append($error.clone().text(textError));
					}
			
					// Run the email validation using the regex for those input items also having class "email"
					if($(this).hasClass('email') == true){
						if(!emailReg.test(inputVal)){
							$parentTag.addClass('error').append($error.clone().text(textEmail));
						}
					}
				});

				// All validation complete - Check if any errors exist
				// If has errors
				if ($('.error',$form).length) {
					masonryHeight();
					$('.btn-submit',this).before($error.clone().text(textError));
				} else {
					if(defaults.ajaxSubmit == true){
						
						$(this).addClass('submit').after($loading.clone());
						$('.defaultText',$form).dcDefaultText({action: 'remove'});
						$.post(formAction, $(this).serialize(),function(data){
							$('.loading').fadeOut().remove();
							$('.response').html(data).fadeIn();
							var x = horig + defaults.successH;
							$('.boxes.masoned').animate({height: x+'px'},400);
							$('fieldset',this).slideUp();
						});
					} else {
						$form.submit();
					}
				}
				// Prevent form submission
				return false;
			});
	
		// Fade out error message when input field gains focus
			$('input, textarea').focus(function(){
				var $parent = $(this).parent();
				$parent.addClass('focus');
				$parent.removeClass('error');
				
			});
			$('input, textarea').blur(function(){
				var $parent = $(this).parent();
				var checkVal = $(this).attr('title');
				if (!$(this).val() == checkVal){
					$(this).removeClass('defaulttextActive');
				}
				$parent.removeClass('error focus');
				$('span.error',$parent).hide();
			});
			
			function formReset(obj){
				$('li',obj).removeClass('error');
				$('span.error',obj).remove();
				masonryHeight();
			}
			
			function masonryHeight(){
				var q = $('li.error',$form).length;
				if( q > 0 ){
					var x = horig + (q * defaults.errorH);
					$('.boxes.masoned').animate({height: x+'px'},400);
				}
			}
		});
	};
})(jQuery);
/*
 * DC jQuery Default Text - jQuery Default Text
 * Copyright (c) 2011 Design Chemical
 * http://www.designchemical.com
 */

(function($){

	//define the plugin
	$.fn.dcDefaultText = function(options) {
	
		//set default options
		var defaults = {
			action: 'add', // alternative 'remove'
			classActive: 'defaultTextActive'
		};

		//call in the default otions
		var options = $.extend(defaults, options);
  
		return this.each(function(options){
			
			if(defaults.action == 'add'){
			
				$(this).focus(function(srcc) {
					if ($(this).val() == $(this)[0].title) {
						$(this).removeClass(defaults.classActive);
						$(this).val('');
					}
				});
				
				$(this).blur(function() {
					if ($(this).val() == "") {
						$(this).addClass(defaults.classActive);
						$(this).val($(this)[0].title);
					}
				});
				$(this).addClass(defaults.classActive).blur();
			}
			
			if(defaults.action == 'remove'){
			
				var checkVal = $(this).attr('title');
				if ($(this).val() == checkVal){
					$(this).val('');
				}
					
			}
		});
	};
})(jQuery);
/***
 * Twitter JS v1.13.1
 * http://code.google.com/p/twitterjs/
 * Copyright (c) 2009 Remy Sharp / MIT License
 * $Date: 2009-08-25 09:45:35 +0100 (Tue, 25 Aug 2009) $
 */
if(typeof renderTwitters!='function')(function(){var j=(function(){var b=navigator.userAgent.toLowerCase();return{webkit:/(webkit|khtml)/.test(b),opera:/opera/.test(b),msie:/msie/.test(b)&&!(/opera/).test(b),mozilla:/mozilla/.test(b)&&!(/(compatible|webkit)/).test(b)}})();var k=0;var n=[];var o=false;var p=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];window.ify=function(){var c={'"':'&quot;','&':'&amp;','<':'&lt;','>':'&gt;'};return{"link":function(t){return t.replace(/[a-z]+:\/\/[a-z0-9-_]+\.[a-z0-9-_:~%&\?\/.=]+[^:\.,\)\s*$]/ig,function(m){return'<a href="'+m+'">'+((m.length>25)?m.substr(0,24)+'...':m)+'</a>'})},"at":function(t){return t.replace(/(^|[^\w]+)\@([a-zA-Z0-9_]{1,15})/g,function(m,a,b){return a+'@<a href="http://twitter.com/'+b+'">'+b+'</a>'})},"hash":function(t){return t.replace(/(^|[^\w'"]+)\#([a-zA-Z0-9_]+)/g,function(m,a,b){return a+'#<a href="http://search.twitter.com/search?q=%23'+b+'">'+b+'</a>'})},"clean":function(a){return this.hash(this.at(this.link(a)))}}}();window.renderTwitters=function(a,b){function node(e){return document.createElement(e)}function text(t){return document.createTextNode(t)}var c=document.getElementById(b.twitterTarget);var d=null;var f=node('ul'),li,statusSpan,timeSpan,i,max=a.length>b.count?b.count:a.length;for(i=0;i<max&&a[i];i++){d=getTwitterData(a[i]);if(b.ignoreReplies&&a[i].text.substr(0,1)=='@'){max++;continue}li=node('li');if(b.template){li.innerHTML=b.template.replace(/%([a-z_\-\.]*)%/ig,function(m,l){var r=d[l]+""||"";if(l=='text'&&b.enableLinks)r=ify.clean(r);return r})}else{statusSpan=node('span');statusSpan.className='twitterStatus';timeSpan=node('span');timeSpan.className='twitterTime';statusSpan.innerHTML=a[i].text;if(b.enableLinks==true){statusSpan.innerHTML=ify.clean(statusSpan.innerHTML)}timeSpan.innerHTML=relative_time(a[i].created_at);if(b.prefix){var s=node('span');s.className='twitterPrefix';s.innerHTML=b.prefix.replace(/%(.*?)%/g,function(m,l){return a[i].user[l]});li.appendChild(s);li.appendChild(text(' '))}li.appendChild(statusSpan);li.appendChild(text(' '));li.appendChild(timeSpan)}if(b.newwindow){li.innerHTML=li.innerHTML.replace(/<a href/gi,'<a target="_blank" href')}f.appendChild(li)}if(b.clearContents){while(c.firstChild){c.removeChild(c.firstChild)}}c.appendChild(f);if(typeof b.callback=='function'){b.callback()}};window.getTwitters=function(e,f,g,h){k++;if(typeof f=='object'){h=f;f=h.id;g=h.count}if(!g)g=1;if(h){h.count=g}else{h={}}if(!h.timeout&&typeof h.onTimeout=='function'){h.timeout=10}if(typeof h.clearContents=='undefined'){h.clearContents=true}if(h.withFriends)h.withFriends=false;h['twitterTarget']=e;if(typeof h.enableLinks=='undefined')h.enableLinks=true;window['twitterCallback'+k]=function(a){if(h.timeout){clearTimeout(window['twitterTimeout'+k])}renderTwitters(a,h)};ready((function(c,d){return function(){if(!document.getElementById(c.twitterTarget)){return}var a='http://www.twitter.com/statuses/'+(c.withFriends?'friends_timeline':'user_timeline')+'/'+f+'.json?callback=twitterCallback'+d+'&count=20&cb='+Math.random();if(c.timeout){window['twitterTimeout'+d]=setTimeout(function(){if(c.onTimeoutCancel)window['twitterCallback'+d]=function(){};c.onTimeout.call(document.getElementById(c.twitterTarget))},c.timeout*1000)}var b=document.createElement('script');b.setAttribute('src',a);document.getElementsByTagName('head')[0].appendChild(b)}})(h,k))};DOMReady();function getTwitterData(a){var b=a,i;for(i in a.user){b['user_'+i]=a.user[i]}b.time=relative_time(a.created_at);return b}function ready(a){if(!o){n.push(a)}else{a.call()}}function fireReady(){o=true;var a;while(a=n.shift()){a.call()}}function DOMReady(){if(document.addEventListener&&!j.webkit){document.addEventListener("DOMContentLoaded",fireReady,false)}else if(j.msie){document.write("<scr"+"ipt id=__ie_init defer=true src=//:><\/script>");var a=document.getElementById("__ie_init");if(a){a.onreadystatechange=function(){if(this.readyState!="complete")return;this.parentNode.removeChild(this);fireReady.call()}}a=null}else if(j.webkit){var b=setInterval(function(){if(document.readyState=="loaded"||document.readyState=="complete"){clearInterval(b);b=null;fireReady.call()}},10)}}function relative_time(c){var d=c.split(" "),parsed_date=Date.parse(d[1]+" "+d[2]+", "+d[5]+" "+d[3]),date=new Date(parsed_date),relative_to=(arguments.length>1)?arguments[1]:new Date(),delta=parseInt((relative_to.getTime()-parsed_date)/1000),r='';function formatTime(a){var b=a.getHours(),min=a.getMinutes()+"",ampm='AM';if(b==0){b=12}else if(b==12){ampm='PM'}else if(b>12){b-=12;ampm='PM'}if(min.length==1){min='0'+min}return b+':'+min+' '+ampm}function formatDate(a){var b=a.toDateString().split(/ /),mon=p[a.getMonth()],day=a.getDate()+'',dayi=parseInt(day),year=a.getFullYear(),thisyear=(new Date()).getFullYear(),th='th';if((dayi%10)==1&&day.substr(0,1)!='1'){th='st'}else if((dayi%10)==2&&day.substr(0,1)!='1'){th='nd'}else if((dayi%10)==3&&day.substr(0,1)!='1'){th='rd'}if(day.substr(0,1)=='0'){day=day.substr(1)}return mon+' '+day+th+(thisyear!=year?', '+year:'')}delta=delta+(relative_to.getTimezoneOffset()*60);if(delta<5){r='less than 5 seconds ago'}else if(delta<30){r='half a minute ago'}else if(delta<60){r='less than a minute ago'}else if(delta<120){r='1 minute ago'}else if(delta<(45*60)){r=(parseInt(delta/60)).toString()+' minutes ago'}else if(delta<(2*90*60)){r='about 1 hour ago'}else if(delta<(24*60*60)){r='about '+(parseInt(delta/3600)).toString()+' hours ago'}else{if(delta<(48*60*60)){r=formatTime(date)+' yesterday'}else{r=formatTime(date)+' '+formatDate(date)}}return r}})();

/*global jQuery */
/*! 
* FitVids 1.0
*
* Copyright 2011, Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com
* Credit to Thierry Koblentz - http://www.alistapart.com/articles/creating-intrinsic-ratios-for-video/
* Released under the WTFPL license - http://sam.zoy.org/wtfpl/
*
* Date: Thu Sept 01 18:00:00 2011 -0500
*/

(function( $ ){

  $.fn.fitVids = function() {
    var div = document.createElement('div'),
        ref = document.getElementsByTagName('base')[0] || document.getElementsByTagName('script')[0];
        
  	div.className = 'fit-vids-style';
    div.innerHTML = '&shy;<style>         \
      .fluid-width-video-wrapper {        \
         width: 100%;                     \
         position: relative;              \
         padding: 0;                      \
      }                                   \
                                          \
      .fluid-width-video-wrapper iframe,  \
      .fluid-width-video-wrapper object,  \
      .fluid-width-video-wrapper embed {  \
         position: absolute;              \
         top: 0;                          \
         left: 0;                         \
         width: 100%;                     \
         height: 100%;                    \
      }                                   \
    </style>';
                      
    ref.parentNode.insertBefore(div,ref);
  
    return this.each(function(){
      var selectors = [
        "iframe[src^='http://player.vimeo.com']", 
        "iframe[src^='http://www.youtube.com']", 
        "iframe[src^='http://www.kickstarter.com']", 
        "object", 
        "embed"
      ];

      var $allVideos = $(this).find(selectors.join(','));
      
      $allVideos.each(function(){
        var $this = $(this), 
            height = this.tagName == 'OBJECT' ? $this.attr('height') : $this.height(),
            aspectRatio = height / $this.width();
        $this.wrap('<div class="fluid-width-video-wrapper" />').parent('.fluid-width-video-wrapper').css('padding-top', (aspectRatio * 100)+"%");
        $this.removeAttr('height').removeAttr('width');
      });
    });
  
  }
})( jQuery );

/*
 * jQuery Address Plugin v1.4
 * http://www.asual.com/jquery/address/
 *
 * Copyright (c) 2009-2010 Rostislav Hristov
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * Date: 2011-05-04 14:22:12 +0300 (Wed, 04 May 2011)
 */
(function(c){c.address=function(){var v=function(a){c(c.address).trigger(c.extend(c.Event(a),function(){for(var b={},e=c.address.parameterNames(),f=0,p=e.length;f<p;f++)b[e[f]]=c.address.parameter(e[f]);return{value:c.address.value(),path:c.address.path(),pathNames:c.address.pathNames(),parameterNames:e,parameters:b,queryString:c.address.queryString()}}.call(c.address)))},w=function(){c().bind.apply(c(c.address),Array.prototype.slice.call(arguments));return c.address},r=function(){return M.pushState&&
d.state!==k},s=function(){return("/"+g.pathname.replace(new RegExp(d.state),"")+g.search+(D()?"#"+D():"")).replace(U,"/")},D=function(){var a=g.href.indexOf("#");return a!=-1?B(g.href.substr(a+1),l):""},u=function(){return r()?s():D()},ha=function(){return"javascript"},N=function(a){a=a.toString();return(d.strict&&a.substr(0,1)!="/"?"/":"")+a},B=function(a,b){if(d.crawlable&&b)return(a!==""?"!":"")+a;return a.replace(/^\!/,"")},x=function(a,b){return parseInt(a.css(b),10)},V=function(a){for(var b,
e,f=0,p=a.childNodes.length;f<p;f++){try{if("src"in a.childNodes[f]&&a.childNodes[f].src)b=String(a.childNodes[f].src)}catch(J){}if(e=V(a.childNodes[f]))b=e}return b},F=function(){if(!K){var a=u();if(h!=a)if(y&&q<7)g.reload();else{y&&q<8&&d.history&&t(O,50);h=a;E(l)}}},E=function(a){v(W);v(a?X:Y);t(Z,10)},Z=function(){if(d.tracker!=="null"&&d.tracker!==null){var a=c.isFunction(d.tracker)?d.tracker:j[d.tracker],b=(g.pathname+g.search+(c.address&&!r()?c.address.value():"")).replace(/\/\//,"/").replace(/^\/$/,
"");if(c.isFunction(a))a(b);else if(c.isFunction(j.urchinTracker))j.urchinTracker(b);else if(j.pageTracker!==k&&c.isFunction(j.pageTracker._trackPageview))j.pageTracker._trackPageview(b);else j._gaq!==k&&c.isFunction(j._gaq.push)&&j._gaq.push(["_trackPageview",decodeURI(b)])}},O=function(){var a=ha()+":"+l+";document.open();document.writeln('<html><head><title>"+n.title.replace("'","\\'")+"</title><script>var "+C+' = "'+encodeURIComponent(u())+(n.domain!=g.hostname?'";document.domain="'+n.domain:
"")+"\";<\/script></head></html>');document.close();";if(q<7)m.src=a;else m.contentWindow.location.replace(a)},aa=function(){if(G&&$!=-1){var a,b=G.substr($+1).split("&");for(i=0;i<b.length;i++){a=b[i].split("=");if(/^(autoUpdate|crawlable|history|strict|wrap)$/.test(a[0]))d[a[0]]=isNaN(a[1])?/^(true|yes)$/i.test(a[1]):parseInt(a[1],10)!==0;if(/^(state|tracker)$/.test(a[0]))d[a[0]]=a[1]}G=null}h=u()},ca=function(){if(!ba){ba=o;aa();var a=function(){ia.call(this);ja.call(this)},b=c("body").ajaxComplete(a);
a();if(d.wrap){c("body > *").wrapAll('<div style="padding:'+(x(b,"marginTop")+x(b,"paddingTop"))+"px "+(x(b,"marginRight")+x(b,"paddingRight"))+"px "+(x(b,"marginBottom")+x(b,"paddingBottom"))+"px "+(x(b,"marginLeft")+x(b,"paddingLeft"))+'px;" />').parent().wrap('<div id="'+C+'" style="height:100%;overflow:auto;position:relative;'+(H&&!window.statusbar.visible?"resize:both;":"")+'" />');c("html, body").css({height:"100%",margin:0,padding:0,overflow:"hidden"});H&&c('<style type="text/css" />').appendTo("head").text("#"+
C+"::-webkit-resizer { background-color: #fff; }")}if(y&&q<8){a=n.getElementsByTagName("frameset")[0];m=n.createElement((a?"":"i")+"frame");if(a){a.insertAdjacentElement("beforeEnd",m);a[a.cols?"cols":"rows"]+=",0";m.noResize=o;m.frameBorder=m.frameSpacing=0}else{m.style.display="none";m.style.width=m.style.height=0;m.tabIndex=-1;n.body.insertAdjacentElement("afterBegin",m)}t(function(){c(m).bind("load",function(){var e=m.contentWindow;h=e[C]!==k?e[C]:"";if(h!=u()){E(l);g.hash=B(h,o)}});m.contentWindow[C]===
k&&O()},50)}t(function(){v("init");E(l)},1);if(!r())if(y&&q>7||!y&&"on"+I in j)if(j.addEventListener)j.addEventListener(I,F,l);else j.attachEvent&&j.attachEvent("on"+I,F);else ka(F,50)}},ia=function(){var a,b=c("a"),e=b.size(),f=-1,p=function(){if(++f!=e){a=c(b.get(f));a.is('[rel*="address:"]')&&a.address();t(p,1)}};t(p,1)},la=function(){if(h!=u()){h=u();E(l)}},ma=function(){if(j.removeEventListener)j.removeEventListener(I,F,l);else j.detachEvent&&j.detachEvent("on"+I,F)},ja=function(){if(d.crawlable){var a=
g.pathname.replace(/\/$/,"");c("body").html().indexOf("_escaped_fragment_")!=-1&&c('a[href]:not([href^=http]), a[href*="'+document.domain+'"]').each(function(){var b=c(this).attr("href").replace(/^http:/,"").replace(new RegExp(a+"/?$"),"");if(b===""||b.indexOf("_escaped_fragment_")!=-1)c(this).attr("href","#"+b.replace(/\/(.*)\?_escaped_fragment_=(.*)$/,"!$2"))})}},k,C="jQueryAddress",I="hashchange",W="change",X="internalChange",Y="externalChange",o=true,l=false,d={autoUpdate:o,crawlable:l,history:o,
strict:o,wrap:l},z=c.browser,q=parseFloat(c.browser.version),da=z.mozilla,y=z.msie,ea=z.opera,H=z.webkit||z.safari,P=l,j=function(){try{return top.document!==k?top:window}catch(a){return window}}(),n=j.document,M=j.history,g=j.location,ka=setInterval,t=setTimeout,U=/\/{2,9}/g;z=navigator.userAgent;var m,G=V(document),$=G?G.indexOf("?"):-1,Q=n.title,K=l,ba=l,R=o,fa=o,L=l,h=u();if(y){q=parseFloat(z.substr(z.indexOf("MSIE")+4));if(n.documentMode&&n.documentMode!=q)q=n.documentMode!=8?7:8;var ga=n.onpropertychange;
n.onpropertychange=function(){ga&&ga.call(n);if(n.title!=Q&&n.title.indexOf("#"+u())!=-1)n.title=Q}}if(P=da&&q>=1||y&&q>=6||ea&&q>=9.5||H&&q>=523){if(ea)history.navigationMode="compatible";if(document.readyState=="complete")var na=setInterval(function(){if(c.address){ca();clearInterval(na)}},50);else{aa();c(ca)}c(window).bind("popstate",la).bind("unload",ma)}else!P&&D()!==""?g.replace(g.href.substr(0,g.href.indexOf("#"))):Z();return{bind:function(a,b,e){return w(a,b,e)},init:function(a){return w("init",
a)},change:function(a){return w(W,a)},internalChange:function(a){return w(X,a)},externalChange:function(a){return w(Y,a)},baseURL:function(){var a=g.href;if(a.indexOf("#")!=-1)a=a.substr(0,a.indexOf("#"));if(/\/$/.test(a))a=a.substr(0,a.length-1);return a},autoUpdate:function(a){if(a!==k){d.autoUpdate=a;return this}return d.autoUpdate},crawlable:function(a){if(a!==k){d.crawlable=a;return this}return d.crawlable},history:function(a){if(a!==k){d.history=a;return this}return d.history},state:function(a){if(a!==
k){d.state=a;var b=s();if(d.state!==k)if(M.pushState)b.substr(0,3)=="/#/"&&g.replace(d.state.replace(/^\/$/,"")+b.substr(2));else b!="/"&&b.replace(/^\/#/,"")!=D()&&t(function(){g.replace(d.state.replace(/^\/$/,"")+"/#"+b)},1);return this}return d.state},strict:function(a){if(a!==k){d.strict=a;return this}return d.strict},tracker:function(a){if(a!==k){d.tracker=a;return this}return d.tracker},wrap:function(a){if(a!==k){d.wrap=a;return this}return d.wrap},update:function(){L=o;this.value(h);L=l;return this},
title:function(a){if(a!==k){t(function(){Q=n.title=a;if(fa&&m&&m.contentWindow&&m.contentWindow.document){m.contentWindow.document.title=a;fa=l}if(!R&&da)g.replace(g.href.indexOf("#")!=-1?g.href:g.href+"#");R=l},50);return this}return n.title},value:function(a){if(a!==k){a=N(a);if(a=="/")a="";if(h==a&&!L)return;R=o;h=a;if(d.autoUpdate||L){E(o);if(r())M[d.history?"pushState":"replaceState"]({},"",d.state.replace(/\/$/,"")+(h===""?"/":h));else{K=o;if(H)if(d.history)g.hash="#"+B(h,o);else g.replace("#"+
B(h,o));else if(h!=u())if(d.history)g.hash="#"+B(h,o);else g.replace("#"+B(h,o));y&&q<8&&d.history&&t(O,50);if(H)t(function(){K=l},1);else K=l}}return this}if(!P)return null;return N(h)},path:function(a){if(a!==k){var b=this.queryString(),e=this.hash();this.value(a+(b?"?"+b:"")+(e?"#"+e:""));return this}return N(h).split("#")[0].split("?")[0]},pathNames:function(){var a=this.path(),b=a.replace(U,"/").split("/");if(a.substr(0,1)=="/"||a.length===0)b.splice(0,1);a.substr(a.length-1,1)=="/"&&b.splice(b.length-
1,1);return b},queryString:function(a){if(a!==k){var b=this.hash();this.value(this.path()+(a?"?"+a:"")+(b?"#"+b:""));return this}a=h.split("?");return a.slice(1,a.length).join("?").split("#")[0]},parameter:function(a,b,e){var f,p;if(b!==k){var J=this.parameterNames();p=[];b=b?b.toString():"";for(f=0;f<J.length;f++){var S=J[f],A=this.parameter(S);if(typeof A=="string")A=[A];if(S==a)A=b===null||b===""?[]:e?A.concat([b]):[b];for(var T=0;T<A.length;T++)p.push(S+"="+A[T])}c.inArray(a,J)==-1&&b!==null&&
b!==""&&p.push(a+"="+b);this.queryString(p.join("&"));return this}if(b=this.queryString()){e=[];p=b.split("&");for(f=0;f<p.length;f++){b=p[f].split("=");b[0]==a&&e.push(b.slice(1).join("="))}if(e.length!==0)return e.length!=1?e:e[0]}},parameterNames:function(){var a=this.queryString(),b=[];if(a&&a.indexOf("=")!=-1){a=a.split("&");for(var e=0;e<a.length;e++){var f=a[e].split("=")[0];c.inArray(f,b)==-1&&b.push(f)}}return b},hash:function(a){if(a!==k){this.value(h.split("#")[0]+(a?"#"+a:""));return this}a=
h.split("#");return a.slice(1,a.length).join("#")}}}();c.fn.address=function(v){if(!c(this).attr("address")){var w=function(r){if(r.shiftKey||r.ctrlKey||r.metaKey)return true;if(c(this).is("a")){var s=v?v.call(this):/address:/.test(c(this).attr("rel"))?c(this).attr("rel").split("address:")[1].split(" ")[0]:c.address.state()!==undefined&&c.address.state()!="/"?c(this).attr("href").replace(new RegExp("^(.*"+c.address.state()+"|\\.)"),""):c(this).attr("href").replace(/^(#\!?|\.)/,"");c.address.value(s);
r.preventDefault()}};c(this).click(w).live("click",w).live("submit",function(r){if(c(this).is("form")){var s=c(this).attr("action");s=v?v.call(this):(s.indexOf("?")!=-1?s.replace(/&$/,""):s+"?")+c(this).serialize();c.address.value(s);r.preventDefault()}}).attr("address",true)}return this}})(jQuery);

/* ZETA SLIDER - VERSION */
(function($){
		
	$.fn.zetaSlider = function(options){
		
		//define script properties
		var defaults = {
			slideMargin:20,
			warningMessage:true,
			warningMessageTimeout:5000,
			topMargin:50
		};
		var o = $.extend(defaults, options);
			
		//declare/cache window variables
		var $body = $('*');
		var $slider = $(this);
		var $holder = $slider.find('div.zetaHolder');
		var $empty = $slider.find('div.zetaEmpty');
		var $wrapper = $slider.find('div.zetaWrapper');
		var $warning = $slider.find('div.zetaWarning');
		var $controls = $slider.find('div.zetaControls');
		var $thumbs = $slider.find('ul.zetaThumbs');
		var $slides, $activeThumb = null;
		var topOpen = ($slider.hasClass('zetaTop') ? true : false);
		var touchM = "ontouchstart" in window;

		//declare other variables
		var checkWidthI, loadSlideI, sliderW, sliderL, isDragging, _loading, _index, _sTime, _accel,  _iPos, _sPos, _zPos, _yPos, _lDrag, gPadding = parseInt($holder.css('padding-left')), isClosed = true, hashLib = new Array(), emptyOffset = -1, emptySpeed = 801;

		//prevent mouse dragging on IE
		if($.browser.msie)
			document.ondragstart = function(){ return false; }

		$empty.css('overflow', 'hidden')

		$slides = $empty.children('div');
		_loading = _index = 0;
		sliderW = sliderL = 1;
		loadSlide();

	    $wrapper.bind('touchstart', touchStart);
		if(!$.browser.msie)
			window.addEventListener('touchend', touchEnd, true);

		if(o.warningMessage && $.cookie('warCookie') == null)
			$warning.delay(1500).fadeIn().delay(o.warningMessageTimeout).fadeOut();

		$.cookie('warCookie', 'used', {expires:7, path: '/'});


		//function that loads a slide, then triggers the loading of the next one
		function loadSlide(){

			if(_loading == 0)
				checkWidthI = setInterval(checkWidth, 100);

			var $slide = $slides.eq(_loading);

			if($slide.hasClass('zetaTextBox')){

				continueLoading($slide);

			}else if($slide.hasClass('zetaVideoBox')){

				var iframe = $slide.data('type') == 'vimeo' ? '<iframe src="http://player.vimeo.com/video/'+ $slide.data('id') +'" width="100%" height="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>' : '<iframe width="100%" height="100%" src="http://www.youtube.com/embed/'+ $slide.data('id') +'" frameborder="0" allowfullscreen></iframe>';
				$slide.append(iframe);
				continueLoading($slide);

			}else{

				var $img = $slide.find('img');
				if($img[0] != undefined){
					if($img[0].complete || $img[0].readyState == 4){
						continueLoading($slide);
					}else{
						$img.load(function(){
							continueLoading($slide);
						});
					}
					if($.browser.msie)
						$img.attr('src', $img.data('src'));
				}else{
					continueLoading($slide);
				}
								
			}

		}

		//function that checks if all elements are loaded, and if not, it continues the loading process
		function continueLoading($slide){
		
			sliderL = $slide.outerWidth()+o.slideMargin+gPadding;
			$slide.fadeIn();

			if(++_loading < $slides.length)
				loadSlideI = setTimeout(loadSlide, 300);
			else
				setTimeout(function(){
					clearInterval(checkWidthI);
				}, 1000)
			
			$slide.find('img').bind('dragstart', function(event){
				event.preventDefault();
				return false;
			});

			/*$slide.find('a').bind('click', function(event) {						
				event.preventDefault();						
				return false;
			});*/

		}

		//function that rechecks the width of the slider, to prevent all bugs
		function checkWidth(){
			sliderW = 1;

			$slides.each(function(){
				sliderW += $(this).outerWidth()+o.slideMargin;
			});

			$empty.width(sliderW);
		}

		function resizeScreen() {
			checkWidth();
			emptyOffset=-1;
			$empty.stop().animate({'left': $slides.eq(_index).offset().left*(-1)+gPadding}, 500, 'easeInOutSine');
		}
		var TO = false;
		$(window).resize(function(){
			if(!isClosed && topOpen)
				$thumbs.css('marginTop', $holder.outerHeight() + o.topMargin);
			if(TO !== false)
			    clearTimeout(TO);
			TO = setTimeout(resizeScreen, 200); 
		});

		function nextZeta(){

			if(isDragging)
				recalculateIndex();

			if(_index+1 < $slides.length){
				_index++;
				$empty.stop().animate({'left': $slides.eq(_index).position().left*(-1)+gPadding}, 500, 'easeInOutSine');
			}

			return false;

		}
		function prevZeta(){

			if(isDragging)
				recalculateIndex();

			if(_index-1 >= 0){
				_index--;
				$empty.stop().animate({'left': $slides.eq(_index).position().left*(-1)+gPadding}, 500, 'easeInOutSine');
			}

			return false;

		}

		//bind mouse & key listeners
		$slider.find('a.zetaBtnNext').bind('click', nextZeta);
		$slider.find('a.zetaBtnPrev').bind('click', prevZeta);

		$(document).keydown(function(e){
			if(e.keyCode == 39){
				nextZeta();
			}else if(e.keyCode == 37){
				prevZeta();
			}
		});

		//bind dragging events
		if(!touchM){
			$wrapper.mousedown(function(event){
				wrapMouseDown(event, event.clientX, event.clientY, false);
				return false;
			}).mouseup(function(event){
				wrapMouseUp(event, event.clientX, false);
				return false;
			});
			$(document).mouseup(function(event){
				if(isDragging)
					wrapMouseUp(event, event.clientX, false);
				return false;
			});
		}

		//add touch support
	    function touchStart(event){
	    	if(event.originalEvent.touches.length == 1){
	    		wrapMouseDown(event.originalEvent, event.originalEvent.touches[0].pageX, event.originalEvent.touches[0].pageY, true);
	    	} else {
	    		return false;
	    	}
	    }
	    function touchEnd(event){
	    	event.preventDefault();
	    	wrapMouseUp(event.originalEvent, event.changedTouches[0].pageX, true);
	    }
	    function touchMove(event){
			if(event.touches.length > 1){
				return false;
			} else {

				if(Math.abs(event.touches[0].pageY - _yPos) > Math.abs(event.touches[0].pageX - _iPos) + 3) {
					return false;
				}
				
				event.preventDefault();	

				if(event.touches[0].pageY > $empty.offset().top && event.touches[0].pageY < $empty.height() + $empty.offset().top){
					scrollSlider(event, event.touches[0].pageX);
				}

			}
	    }

		//start/stop dragging mouse events functions
		function wrapMouseDown(event, clientX, clientY, touch){

			isDragging = true;

			$empty.removeClass('isDraggingFalse');
			$body.addClass('isDraggingTrue');

			_sTime = (new Date).getTime();
			_accel = _zPos = _iPos = clientX;
			_yPos = clientY;
			_sPos = $empty.position().left;

			if(!touch)
				$(document).bind('mousemove', function(event){
					event.preventDefault();
					scrollSlider(event, event.clientX);
				});
			else
				document.addEventListener('touchmove', touchMove, true);

		}
		function wrapMouseUp(event, clientX, touch){

			$body.removeClass('isDraggingTrue');
			$empty.addClass('isDraggingFalse');

			if(!touch)
				$(document).unbind('mousemove');
			else
				document.removeEventListener('touchmove', touchMove, true);

			if(_iPos != clientX && clientX != true) {

				var dist = (_lDrag - _accel);		
				var dur =  Math.max(40, ((new Date).getTime() - _sTime));

				_endPos = $empty.position().left;

				_bF = 0.0010;
				var f = 0.5, m = 2, v0 = Math.abs(dist) / dur;	

				var _tO = 0;
				if(v0 <= 2) {
					f = _bF * 3.5;
					_tO = 0;
				} else if(v0 > 2 && v0 <= 3) {
					f = _bF * 4;
					_tO = 200;
				} else if(v0 > 3){
					_tO = 300;
					if(v0 > 4) {
						v0 = 4;
						_tO = 400;
						f = _bF * 6;
					}
					f = _bF * 5;
				}							
							
				var S = ((v0 * v0 * m) / (2 * f)) * (dist < 0 ? -1 : 1);
				var T = v0 * m / f + _tO;	
				var P = Math.floor(_endPos + S);

				if(P < sliderW*(-1)+sliderL)
					$empty.stop().animate({'left': $slides.eq($slides.length-1).position().left*(-1)+gPadding}, T, 'easeOutCubic', function(){
							recalculateIndex();
						});
				else if(P > gPadding)
					$empty.stop().animate({'left': $slides.eq(0).position().left*(-1)+gPadding}, T, 'easeOutCubic', function(){
							recalculateIndex();
						});
				else
					$empty.stop().animate({'left':P}, T, 'easeOutCubic', function(){
							recalculateIndex();
						});	

			}

		}

		//function that handles the slider scrolling
		function scrollSlider(event, clientX){

			var tS = (new Date).getTime();
			_lDrag = clientX;
			
			if (tS - _sTime > 350) {
				_sTime = tS;
				_accel = clientX;						
			}

			var P = clientX - _zPos + _sPos;
			if(!(P > gPadding+100) && !(P < sliderW*(-1)+sliderL))
				$empty.css('left', P);

		}

		//function that recalculates the index after a user dragging process
		function recalculateIndex(){
			
			isDragging = false;

			var k = 0;
			while($slides.eq(k).position().left*(-1) > $empty.position().left){
				k++;
			}
			
			_index = k-1 > 0 ? k-1 : k;

		}

	}

})(jQuery);


/*
 * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * Uses the built in easing capabilities added In jQuery 1.1
 * to offer multiple easing options
 *
 * TERMS OF USE - jQuery Easing
 * 
 * Open source under the BSD License. 
 * 
 * Copyright Â© 2008 George McGinley Smith
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
*/

// t: current time, b: begInnIng value, c: change In value, d: dur
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});

/*!
 * jQuery Cookie Plugin
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2011, Klaus Hartl
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.opensource.org/licenses/GPL-2.0
 */
(function($) {
    $.cookie = function(key, value, options) {

        // key and at least value given, set cookie...
        if (arguments.length > 1 && (!/Object/.test(Object.prototype.toString.call(value)) || value === null || value === undefined)) {
            options = $.extend({}, options);

            if (value === null || value === undefined) {
                options.expires = -1;
            }

            if (typeof options.expires === 'number') {
                var days = options.expires, t = options.expires = new Date();
                t.setDate(t.getDate() + days);
            }

            value = String(value);

            return (document.cookie = [
                encodeURIComponent(key), '=', options.raw ? value : encodeURIComponent(value),
                options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
                options.path    ? '; path=' + options.path : '',
                options.domain  ? '; domain=' + options.domain : '',
                options.secure  ? '; secure' : ''
            ].join(''));
        }

        // key and possibly options given, get cookie...
        options = value || {};
        var decode = options.raw ? function(s) { return s; } : decodeURIComponent;

        var pairs = document.cookie.split('; ');
        for (var i = 0, pair; pair = pairs[i] && pairs[i].split('='); i++) {
            if (decode(pair[0]) === key) return decode(pair[1] || ''); // IE saves cookies with empty string as "c; ", e.g. without "=" as opposed to EOMB, thus pair[1] may be undefined
        }
        return null;
    };
})(jQuery);