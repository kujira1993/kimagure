jQuery(function($) {
  var $submitBtn = $('#submitBtn');
  var milkform = new MilkForm('iceilbmico8.mlkcca.com', function(isSupported){
    // ロード完了時処理を書きたい場合はここ
    // isSupportedにはMilkcocoaにブラウザが対応しているかが帰ってくるので
    // milkform-fallbackを使わずに、サポートの有無に応じてこちらに自由に処理を書くことも出来ます
  });
  milkform.onSuccess(function(datum){
    //送信成功時処理を書きたい場合はここ
  });
  milkform.onFailure(function(error){
    //送信失敗時処理を書きたい場合はここ
  });

  $submitBtn.click(function () {
    // ここにバリデーションとか
    milkform.submit();
  });
});
