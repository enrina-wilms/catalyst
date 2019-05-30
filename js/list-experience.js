
$(document).ready(function (){
	$.getJSON('getprograms.php', function(data){
		//console.log($data);
		var pro ="";
		$.each(data, function(index, proobj){
			pro += "<option value='" + proobj.program +  "'>" + proobj.program +  "</option>"
		})
		console.log(pro);
		$('#program').html(pro);
		//document.getElementById('program').innerHTML = pro;
	})
})