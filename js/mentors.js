function mentor_id(mentor_id){
    document.getElementById("mentor_id").value = mentor_id;
}
function apprentice_id(apprentice_id){
    document.getElementById("apprentice_id").value = apprentice_id;
}
function mentor_name(name){
    document.querySelector("#mentor-name").innerHTML = 'Say hi to <b>'+name+'</b>'+' and write a short description about yourself.';
}
function apprentice_fname(name){
    document.getElementById("apprentice_fname").value = name;
}
function apprentice_lname(name){
    document.getElementById("apprentice_lname").value = name;
}
function show_message(msg){
    document.getElementById("message").value = msg;
}
$('#requestForm').on('submit', function() {

    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
    }
    
    $(this).unbind();
    var that = $(this),
        data = {};

    that.find('[name]').each(function(index, value){
        var form = $(this),
            name = form.attr('name'),
            value = form.val();
        data[name] = value;
        console.log(data);
    });
    $.ajax({
        type: 'POST',
        url: 'mentor-request.php',
        data: data,
        success: function (response) {
            //$('#apprentice').modal('hide');
            alertify.success('Request Sent');
            console.log(response);
        },
        error: function (response) {
            alertify.error('Something went wrong, Please try again later');
            console.log(response);
        }
    });
});

