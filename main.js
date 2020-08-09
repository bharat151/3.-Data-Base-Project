function onLoad(){
  $('.item').addClass("cardNotSelected");
  $('.item').hover(function (){
    $(this).toggleClass("cardNotSelected");
    $(this).toggleClass("cardSelected");
  });
}
