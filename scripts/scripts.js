$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    $(".firstimg").css({
    transform: 'scale('+(100 + scroll/250)/100+')',
    });

    var scroll = $(window).scrollTop();
    $(".thirdimg").css({
    transform: 'scale('+(100 + scroll/250)/100+')',
    });

    var scroll = $(window).scrollTop();
    $(".secondimg").css({
    transform: 'scale('+(100 + scroll/250)/100+')',
    });
  });


  function cm35(){
    document.querySelectorAll('cost2').style.display='none';
    document.querySelectorAll('cost1').style.display='flex';
  }
  
  function cm40(){
  document.querySelectorAll('cost1').style.display='none';
  document.querySelectorAll('cost2').style.display='flex';
  }

 /*
  function HideSeeMap(){  
  document.querySelectorAll('widget_upper').style.display='none';
  document.querySelectorAll('widget_upper').style.display='flex';
  }
  */

  $(document).ready(function () {
    $("#blyat").click(function () {
      $("#widget_upper").hide();
      $("#blyat2").show();
    });
  });

  $(document).ready(function () {
    $("#blyat2").click(function () {
      $("#widget_upper").show();
      $("#blyat2").hide();
    });
  });