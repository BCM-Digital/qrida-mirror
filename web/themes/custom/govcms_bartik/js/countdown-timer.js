(function ($) {
  let now = Date.now() - 1000;
  let widgets = document.getElementsByClassName('field-timer-jquery-countdown');
  Array.from(widgets).forEach(function (widget) {
    let $message = $(widget)
      .closest('.qrida-countdown')
      .find('.countdown-message');
    let timestamp = $(widget).data('timestamp') * 1000;
    if (timestamp - now < 0) {
      $message.show();
    }
  });
})(jQuery);

