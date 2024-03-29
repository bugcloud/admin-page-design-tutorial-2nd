// Generated by CoffeeScript 1.4.0
(function() {

  $(function() {
    var selectInner;
    $("input[data-selector='datepicker']").datepicker({
      format: 'yyyy-mm-dd',
      language: 'ja'
    }).on("changeDate", function(e) {
      return $(this).datepicker('hide');
    });
    selectInner = function(state) {
      var icon;
      icon = $.trim(state.text);
      return "<img src='img/countries/" + icon + ".png'>　<span class='pull-right'>" + icon + "</span>";
    };
    return $("#input-country").select2({
      placeholder: "アイコン画像を選択してください",
      formatResult: selectInner,
      formatSelection: selectInner
    });
  });

}).call(this);
