$(document).ready(function(){

    var timer = false; //リサイズ終了フラグ
    var s = document.createElement("script");
	s.type = "text/javascript";

    $(window).on("load resize", ReLayout); //リサイズもしくはロードされた時にReLayout呼び出し
    function ReLayout() {
        var _width = $(window).width(); //画面サイズ取得
         
        //画面サイズ1200以下の時の処理
        if(_width >= 769) {
            //alert('pc'+egwidth);
			s.src = "js/app.js";
			document.getElementsByTagName("head")[0].appendChild(s);
        }
         
        //画面サイズ567以下の時の処理
        if(_width <= 768) {
            //alert('sp'+egwidth);
			s.src = "js/sp.js";
			document.getElementsByTagName("head")[0].appendChild(s);
        }
         
        //リサイズ終了時のみリロードする
        if(event.type == 'resize') {
            if (timer !== false) {
                clearTimeout(timer);
            }
            timer = setTimeout(function() {
                location.href = location.href; //リロード
            }, 200);
        }
         
    }
 
});