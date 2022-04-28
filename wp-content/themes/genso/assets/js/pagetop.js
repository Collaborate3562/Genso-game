$(function(){
 
    // 「ページトップへ」の要素を隠す
    $('.pagetop').hide();
 
    // スクロールした場合
    $(window).scroll(function(){
        // スクロール位置が100を超えた場合
        if ($(this).scrollTop() > 100) {
            // 「ページトップへ」をフェードイン
            $('.pagetop').fadeIn();
        }
        // スクロール位置が100以下の場合
        else {
            // 「ページトップへ」をフェードアウト
            $('.pagetop').fadeOut();
        }
    });
 
    // 「ページトップへ」をクリックした場合
    // $('.pagetop').click(function(){
    //     // ページトップにスクロール
    //     $('html,body').animate({
    //         scrollTop: 0
    //     }, 300);
    //     return false;
    // });
 
});

// $(function(){
//   $(window).scroll(function(e){
//     var bottomY = 20, //スクロール時の下からの位置
//       $window = $(e.currentTarget),
//       height = $window.height(), //ウィンドウ(ブラウザ)の高さ
//       scrollTop = $window.scrollTop(), //スクロール量
//       documentHeight = $(document).height(), //ページ全体の高さ
//       footerHeight = $("#footer").height()-20; //フッタの高さ
//       bottomHeight = footerHeight + height + scrollTop + bottomY - documentHeight;
//     if(scrollTop >= documentHeight - height - footerHeight + bottomY){
//       $('.pagetop').css({ bottom: bottomHeight - bottomY }); //スクロール時にbottomの値が変動
//     }else{
//       $('.pagetop').css({ bottom: bottomY });
//     }
//   });
// });