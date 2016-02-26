// jQuery(document).ready(function($) {
//     //PC環境の場合
//     if (window.matchMedia( '(min-width: 769px)' ).matches) {
//         $.ajax({
//             url: 'js/app.js',
//             dataType: 'script',
//             cache: false
//        });
//     //モバイル環境の場合
//     } else {
//         $.ajax({
//             url: 'js/sp.js',
//             dataType: 'script',
//             cache: false
//         });
//     };
// });

$(document).ready(function(){
    var timer = false; //リサイズ終了フラグ
    var s = document.createElement("script");
	s.type = "text/javascript";

    $(window).on('load resize', function(){
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
         
    });
});

// $(document).ready(function() {
// 	// var s = document.createElement("script");
// 	// s.type = "text/javascript";

// 	if(window.matchMedia("(max-width:768px)").matches){
// 		// //alert('sp'+egwidth);
// 		// s.src = "js/sp.js";
// 		// document.getElementsByTagName("head")[0].appendChild(s);
// 		$.ajax({
// 			url: 'js/sp.js',
// 			dataType: 'script',
// 			cache: false
// 		});
// 	}
// 	else{
// 		// //alert('pc'+egwidth);
// 		// s.src = "js/app.js";
// 		// document.getElementsByTagName("head")[0].appendChild(s);
// 		$.ajax({
// 			url: 'js/app.js',
// 			dataType: 'script',
// 			cache: false
// 		});
// 	}

// 	function matchFunction(){
// 		console.log("hoge");
// 		$.ajax({
// 			url: 'js/sp.js',
// 			dataType: 'script',
// 			cache: false
// 		});

// 		if(window.matchMedia("(min-width:768px)").matches){
// 			// //alert('pc'+egwidth);
// 			// s.src = "js/app.js";
// 			// document.getElementsByTagName("head")[0].appendChild(s);
// 			// console.log("hogehoge");
// 			$.ajax({
// 				url: 'js/app.js',
// 				dataType: 'script',
// 				cache: false
// 			});
// 		}
// 	}
// 	window.matchMedia("(max-width:768px)").addListener(matchFunction);
// });