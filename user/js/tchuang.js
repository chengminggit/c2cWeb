$(function(){

	$('#loginform').submit(function(e){
		return false;
	});
	
	//弹出层调用语句
	$('#modaltrigger').leanModal({
		top:5,
		overlay:0.45,
		closeButton:".hidemodal"
	});
	
});
