// $(document).ready(function(){
//     $("#filterValue").on("keyup", function(){
//         var columnName = $('#columnName').val();
//         var filterValue = $('#filterValue').val();
//         var _token = $('input[name="_token"]').val();
//         if(columnName == ''){
//             alert('Please select column name');
//             return false;
//         }
        
//         if (filterValue) {
//             $.ajax({
//                 url: "searchData/fetch",
//                 method: "GET",
//                 data: { columnName: columnName, filterValue: filterValue, _token: _token },
//                 dataType:'json',
//                 success: function(response) {
                
//                 },
//             })
//         }

//     });
// });

// $("#product_category").on("change", function(){
//     var columnName = $('#product_category').val();
//     alert(columnName);
// });



    //     $(document).ready(function() {
    //         $("#product_category").on("change", function(){
    //         var columnName = $('#product_category').val();
    //         alert(columnName);
    //     });
    // } );
