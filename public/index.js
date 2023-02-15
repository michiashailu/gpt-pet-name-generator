$('#generateBtn').click(function () {
    let petType = $('#petType').val().trim();
    let numberOfNames = $('#numberOfNames').val().trim();
    let sex = $('#sex').val().trim();
    $.ajax({
        type: "GET",
        url: "/gpt/generate/"+petType+"/"+numberOfNames+"/"+sex,
        dataType: "json",
        success: function (response) {
            console.log( response);
            var arr = response.split(",");
            console.log(arr);
            var html = "";
            for (let index = 0; index < arr.length; index++) {

                html += `<li class="list-group-item d-flex justify-content-between align-items-center">
                ${arr[index]}
                </li>`
            }

            // $(html).insertAfter('#responseDiv');
            $('#responseList').html(html);
        }
    });

});
