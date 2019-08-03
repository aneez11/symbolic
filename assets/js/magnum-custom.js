$(function () {
  $('[data-toggle="popover"]').popover()
});
$(".item-col, .prod-cat, .special-col, .imagebox").click(function() {
  window.location = $(this).find(".page-link").attr("href");
  return false;
});
// range Slider

//Advance Range Slider
jQuery(document).ready(function(){

  var getOutput    = $("#state");
  var getSlider = $("#advance_slide");

  getSlider.slider({
    range:true,
    min:100,
    max:10000,
    values:[2000, 8000],
    step:50,
    slide:function(event, ui){
      getOutput.html( ' Rs.' + ui.values[0]+'.00 - Rs.'+ui.values[1]+'.00');
      $("#minValue").val(ui.values[0]);
      $("#maxValue").val(ui.values[1]);
    }
  });
  getOutput.html('Rs. '+getSlider.slider("values",0)+'.00 - Rs. '+getSlider.slider("values",1)+'.00');
  $("#minValue").val(getSlider.slider('values', 0));
  $("#maxValue").val(getSlider.slider('values', 1));

});

$('.owl-carousel.owl-carousel-product').owlCarousel({
    loop:false,
    margin:5,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:4
        },
        600:{
            items:5
        },
        1000:{
            items:3
        }
    }

});
// owlCarousel
$('.owl-carousel').owlCarousel({
  loop:false,
  margin:15,
  nav:true,
  dots:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
});
    function increaseValue() {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('number').value = value;
    }

function decreaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number').value = value;
}
