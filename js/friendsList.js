function connect1_id(mentor_id){
    document.getElementById("").value = connect1_id;
}
function connect2_id(apprentice_id){
    document.getElementById("").value = connect2_id;
}

$('#X').on('submit', function() {

    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
    }
    
    $(this).unbind();
    var that = $(this),
        data = {};

    that.find('[]').each(function(index, value){
        var form = $(this),
            name = form.attr('X'),
            value = form.val();
        data[name] = value;
        console.log(data);
    });
    $.ajax({
        type: 'GET',
        url: 'friendRequest.php',
        data: data,
        success: function (response) {
            alertify.success('Request Sent');
            console.log(response);
        },
        error: function (response) {
            alertify.error('Something went wrong, Please try again later');
            console.log(response);
        }
    });
});