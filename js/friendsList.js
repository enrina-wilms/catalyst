var url = new URL(window.location.href);
var fId = url.searchParams.get("id");
var fname = url.searchParams.get("fname");
var lname = url.searchParams.get("lname");

$('.add-friend').on('click', function(){
    $.ajax({
        url: '../friendslist/friendRequest.php',
        type: 'POST',
        data: { id: fId, fname: fname, lname: lname},
        success: function(data){
            console.log(data);
        }
    });
    let t = document.querySelector(".add-friend");
    console.log(t.dataset.id);
});

