// changeStudent = () => {
//     var std = $("#input_student").html('');
//     $.ajax({
//         url: "/app/settings/get/_students.php",
//         type: "POST",
//         dataType: "json",
//         data: {
//             class: $('#input_class').val(),
//         },
//         success: function(res) {
//             try {
//                 res.map(({ id, text }) => std.append(new Option(text, id)));
//             } catch (error) {
//                 std.append(new Option(res.text, res.id))
//             }
//         }
//     });
// }