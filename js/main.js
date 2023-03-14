AOS.init();


const SIDE_MENU = document.querySelector('.sideMenu');
const SIDE_MENU_BTN = document.querySelector('.sideMenu button');

SIDE_MENU_BTN.addEventListener('click', () => {
    SIDE_MENU.classList.toggle('on');
});







const HEADER = document.querySelector('.header')

window.addEventListener('scroll', function () {
    let SCT = window.scrollY;
    SCT > 100
        ? HEADER.classList.add('on')
        : HEADER.classList.remove('on')
});










const MAIN_SLIDE = new Swiper('.main_slide', {
    loop: true,
    speed: 400,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + ' bb">' + "</span>";
        },
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    slideActiveClass: 'on',
});


const MAIN_PRO_TAB_SELECT = document.querySelectorAll('.mainProduct .tab_select>li');
const MAIN_PRO_TAB = document.querySelectorAll('.mainProduct .tab>li');

MAIN_PRO_TAB_SELECT.forEach((it, idx) => {
    it.addEventListener('click', () => {
        MAIN_PRO_TAB_SELECT.forEach(it => it.classList.remove('on'));
        MAIN_PRO_TAB_SELECT[idx].classList.add('on');
        MAIN_PRO_TAB.forEach(it => it.classList.remove('on'));
        MAIN_PRO_TAB[idx].classList.add('on');
    });
});




// const SCROLL_DOWN = document.querySelector('.mainVisual .scroll_down');

// SCROLL_DOWN.addEventListener('click', function () {
//     gsap.to(window, {
//         duration: 0.5,
//         scrollTo: 500,
//     });
// });







const TAP_SELECT = document.querySelectorAll('.tap_select>ul>li');
const TAP_ITEM = document.querySelectorAll('.main_product>.itm');


TAP_SELECT.forEach((it, idx) => {
    it.addEventListener('click', () => {
        TAP_SELECT.forEach(it => it.classList.remove('on'));
        TAP_SELECT[idx].classList.add('on');
        TAP_ITEM.forEach(it => it.classList.remove('on'));
        TAP_ITEM[idx].classList.add('on');
        console.log(it, idx);
    });
});






const TO_TOP = document.querySelector('.toTop');

TO_TOP.addEventListener('click', () => {
    gsap.to(window, {
        duration: 0.5,
        scrollTo: 0,
    })
});

window.addEventListener('scroll', () => {
    let SCT = window.scrollY;
    SCT > 500
        ? TO_TOP.classList.add('on')
        : TO_TOP.classList.remove('on');
});



const MN = document.querySelector('.sub_nav .s_mn>ul>li');
MN.addEventListener('click', () => {
    MN.classList.toggle('on');
});

const SN = document.querySelector('.sub_nav .s_sn>ul>li');
SN.addEventListener('click', () => {
    SN.classList.toggle('on');
});






const TAB_BTN = document.querySelectorAll('.info_03 .tab_btn>li');
const TAB_ITM = document.querySelectorAll('.info_03 .tab_itm>li');

TAB_BTN.forEach((it, idx) => {
    it.addEventListener('click', () => {
        TAB_BTN.forEach(it => it.classList.remove('on'));
        TAB_BTN[idx].classList.add('on');
        TAB_ITM.forEach(it => it.classList.remove('on'));
        TAB_ITM[idx].classList.add('on');
    });
});




const TAB_SELECT = document.querySelectorAll('.sub_content .tab_btn>li');
const TAB_ITMS = document.querySelectorAll('.sub_content .tab_itms>li');

TAB_SELECT.forEach((it, idx) => {
    it.addEventListener('click', () => {
        TAB_SELECT.forEach(it => it.classList.remove('on'));
        TAB_SELECT[idx].classList.add('on');
        TAB_ITMS.forEach(it => it.classList.remove('on'));
        TAB_ITMS[idx].classList.add('on');
    });
});


const SUB02_TAB_SELECT = document.querySelectorAll('.sub_content02 .tab_select>li')
const SUB02_TAB_ITMS = document.querySelectorAll('.sub_content02 .tab_itms .tab_itm')

SUB02_TAB_SELECT.forEach((it, idx) => {
    it.addEventListener('click', () => {
        SUB02_TAB_SELECT.forEach(it => it.classList.remove('on'));
        SUB02_TAB_SELECT[idx].classList.add('on');
        SUB02_TAB_ITMS.forEach(it => it.classList.remove('on'));
        SUB02_TAB_ITMS[idx].classList.add('on');
    })
});



const BUSI01_TAB_SELECT = document.querySelectorAll('.business01 .tab_select>li');
const BUSI01_TAB_CONTENT = document.querySelectorAll('.business01 .tab_content>li');

BUSI01_TAB_SELECT.forEach((it, idx) => {
    it.addEventListener('click', () => {
        BUSI01_TAB_SELECT.forEach(it => it.classList.remove('on'));
        BUSI01_TAB_SELECT[idx].classList.add('on');
        BUSI01_TAB_CONTENT.forEach(it => it.classList.remove('on'));
        BUSI01_TAB_CONTENT[idx].classList.add('on');
    })
});

