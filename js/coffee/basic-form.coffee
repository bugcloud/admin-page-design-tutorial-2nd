$ ->
  $("input[data-selector='datepicker']").datepicker
    format: 'yyyy-mm-dd'
    language: 'ja'
  .on "changeDate", (e) ->
    $(this).datepicker('hide')

  selectInner = (state) ->
    icon = $.trim(state.text)
    "<img src='img/countries/#{icon}.png'>　<span class='pull-right'>#{icon}</span>"
  $("#input-country").select2
    placeholder: "アイコン画像を選択してください"
    formatResult: selectInner
    formatSelection: selectInner
