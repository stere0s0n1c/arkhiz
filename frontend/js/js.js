const hours = new Date().getHours()
const isDayTime = hours > 6 && hours < 20;
if (!isDayTime) {
    $(".star-academy").addClass("night_mode");
}

let disabledScroll = true;

function preventDefault(e) {
    e.preventDefault();
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

// modern Chrome requires { passive: false } when adding event
var supportsPassive = false;
try {
    window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
        get: function () {
            supportsPassive = true;
        }
    }));
} catch (e) {
}

var wheelOpt = supportsPassive ? {passive: false} : false;
var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

// call this to Disable
function disableScroll() {
    if(!disabledScroll){
        disabledScroll = true;
        console.log('disableScroll');
        window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
        window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
        window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
        window.addEventListener('keydown', preventDefaultForScrollKeys, false);
    }
}

// call this to Enable
function enableScroll() {
    if(disabledScroll){
        disabledScroll = false;
        console.log('enableScroll');
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
        window.removeEventListener(wheelEvent, preventDefault, wheelOpt);
        window.removeEventListener('touchmove', preventDefault, wheelOpt);
        window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
    }
}

(function ($) {
    var ARKHIS = (function () {

        var $sel = {};

        $sel.window = $(window);
        var setSlide = 1;
        var lock = false;

        //var self = this;

        return {

            isTop: function (deltaY = 0) {

                let top = $('html,body').scrollTop();

                if (top <= 0) {
                    // console.log('top');
                    return true;
                } else {
                    //console.log('не top');
                    return false;
                }

            },

            scrollTracking: function () {

                var wt = $(window).scrollTop();
                var wh = $(window).height();


                $('.animate_line:visible').each(function (i, objImg) {
                    var et = $(objImg).offset().top;
                    var eh = $(objImg).outerHeight();

                    if (wt + wh >= et && wt + wh - eh * 2 <= et + (wh - eh)) {
                        //if (typeof(self.block_show[i]) == 'undefined') {
                        //console.log('Блок ' + i + ' active в области видимости');
                        $(objImg).animate({'height': 0}, 3000, function () {
                            //$(this).remove();
                            // alert(1);
                        });
                        //}
                        //self.block_show[i] = true;
                    } else {
                        /* if (self.block_show == null || self.block_show == true) {
                             console.log('Блок '+i+' active скрыт');
                         }
                         self.block_show = false;*/
                    }
                });

            },

            initAnimateLine: function () {
                window.addEventListener("scroll", event => {
                    ARKHIS.scrollTracking();
                });
            },
            initScroll: function (deltaY) {
//console.log(deltaY);
                //let topY = window.pageYOffset;
                //let deltaY = event.deltaY;

                //если скроллим с самого верха вниз
                if (deltaY > 0  && self.setSlide != 2 && !self.lock) {
                    console.log('1');
                    self.lock = true;
                    self.setSlide = 2;
                    ARKHIS.showSlide2();
                    setTimeout(function () {
                        enableScroll();
                        self.lock = false;
                    }, 100);
                }else

                if (ARKHIS.isTop() && deltaY <= 0 && self.setSlide != 1 && !self.lock) {
                    console.log('2');
                    self.lock = true;
                    self.setSlide = 1;
                    ARKHIS.showSlide1();
                    disableScroll();
                    self.lock = false;
                }else if(!self.lock){
                    //enableScroll();
                }
            },
            showSlide1: function () {
                //console.log('showSlide1');
                $(".bottle-mount__story-changed").fadeOut();
                $(".bottle-mount__story").fadeIn(400);
                $(".bottle-mount__scroll").fadeIn(400);
            },
            showSlide2: function () {
                //console.log('showSlide2');
                $(".bottle-mount__story-changed").fadeIn(400).css('display', 'flex');
                $(".bottle-mount__story").css('display', 'none');
                $(".bottle-mount__scroll").fadeOut(400);
            },
        }
    })();


    setTimeout(function () {
        if ($(window).width() < "480" || (isTablet || isIOS)) {
            $(".bottle-mount__scroll").css("display", "none");
            $(".bottle-mount__clip-desc-wrapper").css("width", "auto");
            $(".bottle-mount__clip-desc-wrapper").css("left", "5%");
            $(".bottle-mount__clip-desc-wrapper").css("right", "auto");
        }else{
            if (ARKHIS.isTop()) {
                disableScroll();
                console.log('isTop!!!');
            }

            window.addEventListener("wheel", event => {
                let deltaY = event.deltaY;
                ARKHIS.initScroll(deltaY);
            });

            window.addEventListener("scroll", event => {
                let deltaY = event.deltaY;
                ARKHIS.initScroll(deltaY);
            });

            /*ScrollStart = function (x,y){
                console.log('ScrollStart');
                console.log(x);
                console.log(y);
            }

            document.addEventListener("touchmove", ScrollStart, false);*/
            /*document.addEventListener('gesturechange', function(e) {
                console.log(e);
            });
    */

            document.addEventListener('touchmove', function (e) {
                e.preventDefault();
//console.log(e.touches.it);
                let deltaY = event.deltaY;
                ARKHIS.initScroll(100);

            }, true);

        }

    }, 500);



    ARKHIS.initAnimateLine();

    window.ARKHIS = ARKHIS;

})(jQuery);


function hideModal() {
    $("#modal").hide("slow");
    $("body").css("overflow", "hidden auto")

}

$(".bottle-mount__callback").on("click", function () {
    $("#modal").show('slow');
    $("body").css("overflow", "hidden")
});
$("#modal__close").on("click", function () {
    hideModal()
});
$(".modal__wrapper").on("click", function () {
    hideModal()
});
