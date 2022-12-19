jQuery(document).ready(function () {

    function slide(options) {
        if (options.target.length == 0) return false;
        let header = $('header');
        let target_top = options.target.offset().top - ((typeof options.offset !== 'undefined') ? options.offset : 0);
        target_top -= (header.css('position') == 'fixed') ? header.outerHeight() : 0;
        $('body, html').animate({scrollTop: target_top}, {duration: 1500, ease: 'easeInOutSine', queue: false});
    }

    function Menu(options){
        let instance = this;
        this.item = options.item;
        let $item = $(this.item);
        let $hamburger = $item.find('.hamburger');
        let $menu = $item.find('.menu');
        let $openMenuBtn = $item.find('.openMenuBtn');
        let $li = $item.find('li');
        let $a = $item.find('a');
        $hamburger.click(function() {
            $hamburger.toggleClass('active');
            $menu.toggleClass('active');
            console.log($menu);
        });
        $openMenuBtn.click(function(){
            let $this = $(this);
            if($this.hasClass('active'))
            {
                $this.closest('li').siblings().slideDown({
                    duration: 300
                });
                setTimeout(function(){
                    $this.removeClass('active');
                    $this.closest('.navBtn').removeClass('active');
                    $this.closest('.navBtn').siblings('.menu').slideUp({
                        duration: 300
                    }).removeClass('active');
                },300);
            } else {
                $this.closest('li').siblings().slideUp({
                    duration: 300
                });
                setTimeout(function(){
                    $this.addClass('active');
                    $this.closest('.navBtn').addClass('active');
                    $this.closest('.navBtn').siblings('.menu').slideDown({
                        duration: 300
                    }).addClass('active');
                },300);
            }
        })
        if(typeof options.target !== 'undefined'){
            this.target = options.target;
            let $target = $(this.target);
            $a.click(function () {
                let id = $(this).attr('data-id');
                let anchor = $target.find('.anchor[data-anchor=' + id + ']');
                if (anchor.length > 0) {
                    slide({target: anchor});
                    $hamburger.toggleClass('active');
                    $menu.toggleClass('active');
                    return false;
                }
            });
            function highlightAnchor(anchor) {
                $li.removeClass('active');
                $li.find('a[data-id=' + anchor + ']').closest('li').addClass('active');
            }
            function getActiveAnchor() {
                let pageTop = $('html').scrollTop();
                let page_height = $(window).height();
                let pageBottom = pageTop + page_height;
                let overlaps = Array();
                $target.find('.anchor').each(function () {
                    let anchorTop = $(this).offset().top;
                    let anchorHeight = $(this).outerHeight();
                    let anchorBottom = anchorTop + anchorHeight;
                    let overlap = Math.max(0, Math.min(anchorBottom, pageBottom) - Math.max(anchorTop, pageTop));
                    overlaps.push(overlap);
                })
                let maxOverlap = Math.max.apply(Math, overlaps);
                if(maxOverlap > 0)
                {
                    let activeIndex = overlaps.indexOf(maxOverlap);
                    let $anchor = $target.find('.anchor:eq(' + activeIndex + ')');
                    highlightAnchor($anchor.data('anchor'));
                } else {
                    $li.removeClass('active');
                }
            }
            $(window).scroll(function () {
                getActiveAnchor();
            })
            getActiveAnchor();
        }
    }

    let menu = new Menu({item:'header',target:'body'});

    const wave1 = "M0,150.6c0,0,45.4,6.8,75.9,17.1c94.1,31.7,172.4,58,224.1,68.4c134.6,27.3,234.3,10.7,300-5.5c98.7-24.3,198.4-62.1,300-78c72.3-11.2,180.9-1.7,250,13.8c12.5,2.8,50,10.4,50,10.4V0h-50c-50,0-150,0-250,0S700,0,600,0S400,0,300,0S100,0,50,0H0V150.6z",
        wave2 = "M0,208.9c0,0,39,14,75.9,18.1c85.3,9.5,157.1-8,224.1-27.5c131.8-38.4,185.1-48,300-22c84.4,19.1,212.9,72.5,340.1,72.5c92.3,0,167.5-23.8,209.9-38c22.6-7.6,50-17.8,50-17.8V0h-50c-50,0-150,0-250,0S700,0,600,0S400,0,300,0S100,0,50,0H0V208.9z",
        wave3 = "M0,176.9c0,0,44.1-10.4,75.9-15.4c96.9-15.3,172.4-18.9,224.1-8.4c134.6,27.3,233.9,63.3,300,77.6c128.8,27.9,200.4,21.7,300,5.1c72.1-12,181.4-59,250-76.3c18.7-4.7,50-8.8,50-8.8V0h-50c-50,0-150,0-250,0S700,0,600,0S400,0,300,0S100,0,50,0H0V176.9z",
        wave4 = "M0,195c0,0,44.8,15.5,75.9,23.8c88.5,23.7,170.5,31.5,223,31.2c137.3-0.7,235.4-44.1,301.1-60.3c109.6-27.1,186.3-36.6,300,3c89.2,31,170.4,55.4,250,33.7c18.7-5.1,50-16.7,50-16.7V0h-50c-50,0-150,0-250,0S700,0,600,0S400,0,300,0S100,0,50,0H0V195z";

    anime({
        targets: '.wave path',
        easing: 'cubicBezier(.5, .05, .1, .3)',
        duration: 20000,
        loop: true,
        d: [
            { value: [wave1, wave2] },
            { value: wave3 },
            { value: wave4 },
            { value: wave1 },
        ],
    });

    let productsSwiper = new Swiper('.products .swiper', {
        slidesPerView: 3,
        breakpoints: {
            1240: {
                slidesPerView: 3,
                centeredSlides: true,
                initialSlide: -2,
                autoplay: false,
                spaceBetween: 40,
                loop: true,
            },
            960: {
                slidesPerView: 3,
                spaceBetween: 40,
                initialSlide: 0,
                centeredSlides: false,
                allowTouchMove: false,
                slideToClickedSlide: false,
                autoplay: {
                    delay: 5000,
                },
                speed: 2000,
            },
            320: {
                slidesPerView: 1.5,
                spaceBetween: 20,
                initialSlide: 0,
                autoplay: {
                    delay: 10000,
                },
                speed: 500,
                centeredSlides: true,
                mousewheel: false,
                allowTouchMove: true,
                keyboard: true,
                preventClicks: false,
                preventClicksPropagation: true,
            }
        },
        spaceBetween: 10,
        grabCursor: true,
        loop: true,
        initialSlide: 0,
        autoplay: false,
        speed: 2000,
        centeredSlides: false,
        mousewheel: false,
        allowTouchMove: false,
        keyboard: false,
        preventClicks: false,
        preventClicksPropagation: true,

    });

    let partnersSwiper = new Swiper('.partners .swiper', {
        slidesPerView: 8,
        breakpoints: {
            960: {
                slidesPerView: 8,
                spaceBetween: 20,
            },
            320: {
                slidesPerView: 3,
                spaceBetween: 10,
            }
        },
        spaceBetween: 10,
        grabCursor: false,
        loop: true,
        initialSlide: 0,
        autoplay: {
            delay: 1,
        },
        speed: 2000,
        centeredSlides: false,
        mousewheel: false,
        allowTouchMove: false,
        keyboard: false,
        preventClicks: false,
        preventClicksPropagation: true,
        slideToClickedSlide: false
    });

    $('.accordeon .key').click(function(){
        let state = $(this).attr('data-state');
        state = state == 'down' ? 'up' : 'down';

        $('.accordeon .key[data-state="down"]').find('.extension').slideUp();
        $('.accordeon .key[data-state="down"]').attr('data-state','up');

        $(this).attr('data-state',state);
        eval("$(this).find('.extension').slide"+state.charAt(0).toUpperCase() + state.slice(1)+"()");
    })

    function initAccordeon()
    {
        $('.accordeon .key').each(function(){
            if($(this).index() == 0)
            {
                $(this).attr('data-state','down');
                $(this).find('.extension').show();
            } else {
                $(this).attr('data-state','up');
            }
        })
    }
    initAccordeon();

    let servicesSwiper = new Swiper('.services .swiper', {
        slidesPerView: 5,
        breakpoints: {
            1600: {
                slidesPerView: 5,
                spaceBetween: 40,
            },
            960: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
            320: {
                slidesPerView: 1.5,
                spaceBetween: 20,
                initialSlide: 0,
                speed: 500
            }
        },
        spaceBetween: 10,
        grabCursor: true,
        loop: true,
        initialSlide: 0,
        autoplay: {
            delay: 10000,
        },
        speed: 2000,
        centeredSlides: true,
        mousewheel: false,
        allowTouchMove: true,
        keyboard: true,
        preventClicks: false,
        preventClicksPropagation: true,
        slideToClickedSlide: true
    });

    let timeout;
    function moveAimlessly() {
        $(".aimless").each(function() {
            $(this).stop().animate({
                top: Math.floor(Math.random()*2) == 1 ? "+=" + Math.floor(Math.random()*20).toString() : "-=" + Math.floor(Math.random()*20).toString(),
                left: Math.floor(Math.random()*2) == 1 ? "+=" + Math.floor(Math.random()*20).toString() : "-=" + Math.floor(Math.random()*20).toString()
            }, 4000);
        });
        timeout = setTimeout(moveAimlessly, 4000);
    }
    moveAimlessly();

    $('.moreBtn').click(function(){
        let $body = $(this).parent().find('.body');
        if($(this).attr('data-status') == undefined)
        {
            $(this).attr('data-status','less');
        }
        if($(this).attr('data-status') == 'less')
        {
            let bodyHeight = $body.get(0).scrollHeight;
            $body.css('height',bodyHeight);
            $(this).attr('data-status','more');
        } else {
            let bodyHeight = $body.get(0).scrollHeight;
            $body.removeAttr('style');
            $(this).attr('data-status','less');
        }
    })

    let videos = document.querySelectorAll('.product-video');
    let index = -1;
    videos.forEach(video => {
        index++
        setTimeout( () => {
            $(video).trigger('play');
        }, index * 1000)
    })

});
