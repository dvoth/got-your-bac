var colorInc = 1;
// Conversion factor for converting the metrics into out of 35.
var conversionFactor = 2.8571;

$(function()
{
  $("#percent-box").click(function()
  {
    $(this).select();
  });
  
  $("#percent-box").keyup(function()
  {
    var val = $(this).val();
    
    if(val != ""
      && !isNaN(val)
      && val <= 35
      && val >= 0)
    {
      console.log(val);
      
      var valOrig = val;
      val = 35 - val;
      
      if(valOrig == 0)
      {
        $("#percent-box").val(0);
        $(".progress .percent").text(0 + "%");
      }
      else $(".progress .percent").text(valOrig + "%");
      
      $(".progress").parent().removeClass();
      $(".progress .water").css("top", val * conversionFactor + "%");
      
      if(valOrig < colorInc * 7)
        $(".progress").parent().addClass("green");
      else if(valOrig < colorInc * 16)
        $(".progress").parent().addClass("orange");
      else
        $(".progress").parent().addClass("red");
    }
    else
    {
      $(".progress").parent().removeClass();
      $(".progress").parent().addClass("green");
      $(".progress .water").css("top", 100 - 0 + "%");
      $(".progress .percent").text(0 + "%");
      $("#percent-box").val("");
    }
  });
});
