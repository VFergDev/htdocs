// $(document).ready(function() {
//     $('#subscribe-form').submit(function(e) {
//         e.preventDefault(); // Prevent the form from submitting normally

//         var form = $(this);
//         var url = form.attr('action');
//         var method = form.attr('method');
//         var data = form.serialize();

//         $.ajax({
//             url: url,
//             method: method,
//             data: data,
//             success: function(response) {
//                 // Display success message
//                 alert(response);
//             },
//             error: function(xhr, status, error) {
//                 // Display error message
//                 alert("Error: " + error);
//             }
//         });
//     });
// });
