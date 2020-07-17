jQuery(document).ready(function ($) {
  $("#menu-nav>li").find("ul").hide();
  $("#menu-nav>li").hover(
    function () {
      $("ul:not(:animated)", this).slideDown(400);
    },
    function () {
      $("ul", this).hide();
    }
  );

  //ボックスの高さを揃える
  var maxH = 0;
  $(".pick-up")
    .each(function () {
      maxH = Math.max(maxH, $(this).height());
    })
    .height(maxH);
});
