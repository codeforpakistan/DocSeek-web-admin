$(document).ready(function(){
    
   
	$(function(){
	$.urlparam = function(name){
		var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
		return results[1] || 0;
	}
	var username= $.urlparam('user');

    var index="index.php?user="+username;
    var contact = "contact.php?user="+username;
      $('#c_contact').attr("href",contact);
      $('#c_index').attr("href",index);

	if(username)
	{
	  $('#mypage').show();
      $('#myadmin').hide();
      $('#acontact').attr("href",contact);
      $('#aindex').attr("href",index);

	}
	});
})