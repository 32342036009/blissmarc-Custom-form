$(document).ready(function () {
  $(".datepicker").datepicker();

  $('input[data-checked]').each(function () {
    $('#' + $(this).data('checked')).prop('checked', true);
  });

  var sw = 25;
  $('.text').each(function () {
    var lb_w = 0, rd_w = 0, w = 0;
    w = $(this).get(0).offsetWidth;
    if ($(this).find('label').length > 0) {
      lb_w = $(this).find('label').width();
    }
    if ($(this).find('.radio_wrapper').length > 0) {
      rd_w = $(this).find('.radio_wrapper').width();
    }
    w = w - lb_w - sw - rd_w;

    var objText = $(this).find('input[type="text"]').eq(0);
    var text_width = objText.data('width');

    if (typeof (text_width) == "undefined") {
      objText.css('width', w + 'px');
    } else {
      objText.css('width', w * text_width / 100 + 'px');
    }
    objText.css('margin-left', '0px');

    if ($(this).hasClass('phone')) {
      var objTextTwo = $(this).find('input[type="text"]').eq(1);
      var text_width = objTextTwo.data('width');
      if (typeof (text_width) == "undefined") {
        objTextTwo.css('width', w + 'px');
      } else {
        objTextTwo.css('width', w * text_width / 100 + 'px');
      }
      objTextTwo.css('margin-left', '0px');
    }

    spanObj = $(this).find('span');
    spanObj.css('left', lb_w + objText.width() / 2);
    spanObj.css('top', objText.height() + 3);
  });
});