window.onload = function() {
    var tab_menu = document.getElementById('tab_menu');
    var body = document.getElementsByTagName('body')[0];
    var cate01 = document.getElementById('cate01');
    var cate02 = document.getElementById('cate02');
    var cate03 = document.getElementById('cate03');
    var cate1 = document.getElementById('cate1');
    var cate2 = document.getElementById('cate2');
    var cate3 = document.getElementById('cate3');
    var tab_menu_fixed = document.getElementById('tab_menu_fixed');

    cate01.onclick = function() {
        cate1.style.display = 'block';
        cate2.style.display = 'none';
        cate3.style.display = 'none';
        cate01.setAttribute('class', 'selceted_menu');
        cate02.setAttribute('class', '');
        cate03.setAttribute('class', '');

    }
    cate02.onclick = function() {
        cate1.style.display = 'none';
        cate2.style.display = 'block';
        cate3.style.display = 'none';
        cate02.setAttribute('class', 'selceted_menu');
        cate01.setAttribute('class', '');
        cate03.setAttribute('class', '');
    }
    cate03.onclick = function() {
        cate1.style.display = 'none';
        cate2.style.display = 'none';
        cate3.style.display = 'block';
        cate03.setAttribute('class', 'selceted_menu');
        cate01.setAttribute('class', '');
        cate02.setAttribute('class', '');
    }

    setInterval(autofixed, 100);

    function autofixed() {
        if (document.body.scrollTop > 525) {
            tab_menu_fixed.style.position = 'fixed';
            tab_menu_fixed.style.top = 45 + 'px';
            /*tab_menu.style.position = 'fixed';
            tab_menu.style.top = 63+'px';
            tab_menu.style.zIndex = 999;
            tab_menu.style.background = '#fff';
            tab_menu.style.width = '640px';
            tab_menu.style.height = '65px';*/
        } else {
            tab_menu_fixed.style.position = 'absolute';
            tab_menu_fixed.style.top = 430 + 'px';
            /*tab_menu.style.position = 'relative';
            tab_menu.style.top = 0+'px';
            tab_menu.style.height = '65px';*/
        }
    }

}