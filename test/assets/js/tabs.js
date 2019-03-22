jQuery(document).ready(function($) {
  $('.progress_point:first').addClass('active');
  $('.progress_point').click(function(event) {
    $('.account_types_progress li').removeClass('active progress_point_progressed');
    $('.account_types_progress li .progress_bar').removeClass('progressed');
    $(this).addClass('active');
    $(this).prevAll().addClass('progress_point_progressed');


    var selectTab = $(this).attr("data");
    var bar = $('.progress_bar_fill');
    var num = {
      250:   '0',
      2500:  '20%',
      5000:  '40%',
      10000: '60%',
      25000: '80%',
      50000: '100%'
    };

    $('.account_types_tab').removeClass('active');
    $(selectTab).addClass('active');

    for (key in num) {
      if (key == selectTab.slice(1)) {
        $(bar).css({'width': num[key]});
      }
    }
  });
});