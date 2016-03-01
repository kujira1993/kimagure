jQuery(function($) {
    $(document).ready(function(){

        //PC環境の場合
        if (window.matchMedia( '(min-width: 769px)' ).matches) {　//切り替える画面サイズ
            $.ajax({
                url: '/kimagure-hp/wp-content/themes/kimagure/js/app.js',
                dataType: 'script',
                cache: false
           });
        //モバイル環境の場合
        } else {
            $.ajax({
                url: '/kimagure-hp/wp-content/themes/kimagure/js/sp.js',
                dataType: 'script',
                cache: false
            });
        };
    });
});