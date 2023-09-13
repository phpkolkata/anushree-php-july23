$("document").ready(function () {
  //   $("p").hide();

  $("h1").click(function () {
    // $(this).next().hide();
    // $(this).next().slideUp(2000);
    // $(this).next().slideDown(2000);
    $(this).next().slideToggle(1000);
  });
});
