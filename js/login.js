// JavaScript Document

jQuery(window).load(function() {

var password = "123";
jQuery("#proofing").submit(function(){
		jQuery.cookie("check", jQuery("#proofing input").val())
		if(jQuery.cookie("check") == password)
		{
				window.location.reload();
		}
		else{
				jQuery.cookie("error", true)
		}
})

if(jQuery.cookie("error")){
		jQuery("#error").show(1200)
}

if(jQuery.cookie("check") == password)
{
  jQuery(".gallery_wrap").css("display", "block")
  jQuery(".box-proofing,.bgstretcher").hide()
   jQuery("#bgstretcher").css("display", "none")
}
})
