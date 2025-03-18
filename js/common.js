$(function () {
  $(window).scroll(function () {
    if ($(".key-visual").offset().top + $(".key-visual").innerHeight() < $(this).scrollTop()) {
      $(".header-others-btn").addClass("-scroll");
      $(".slide-menu-btn").addClass("-scroll");
    } else {
      $(".header-others-btn").removeClass("-scroll");
      $(".slide-menu-btn").removeClass("-scroll");
    }
  });
  $(window).on("load", function () {
    if ($(".key-visual").offset().top + $(".key-visual").innerHeight() < $(this).scrollTop()) {
      $(".header-others-btn").addClass("-scroll");
      $(".slide-menu-btn").addClass("-scroll");
    } else {
      $(".header-others-btn").removeClass("-scroll");
      $(".slide-menu-btn").removeClass("-scroll");
    }
  });
});
