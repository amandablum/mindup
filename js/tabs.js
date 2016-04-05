jQuery(document).ready(function($){
  $('ul.tabs').each(function(){
    var $active, $content, $links = $(this).find('a');

    $active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
    $active.addClass('active');
    $content = $($active[0].hash);
    $links.not($active).each(function () {
      $(this.hash).hide();
    });

    jQuery(this).on('click', 'a', function(e){
      $active.removeClass('active');
      $content.hide();
      $active = $(this);
      $content = $(this.hash);
      $active.addClass('active');
      $content.show();
      e.preventDefault();
    });
  });

$('.constellation > .container > div').hover(function() {
        $(this).find('.image').hide(200);
        $(this).find('.circle').show(200);
    }, function() {
        $(this).find('.circle').hide(200);
        $(this).find('.image').show(200);
});


});
