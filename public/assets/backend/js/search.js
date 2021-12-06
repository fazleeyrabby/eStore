$(document).ready(function(){

    // $("#filterValue").on("keyup", function() {
    //     var value = $(this).val().toLowerCase();
    //     $("#users_table tr").filter(function() {
    //       $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    //     });
    //   });

    $("#filterValue").on("keyup", function(){
        var columnName = $('#columnName').val();
        var filterValue = $('#filterValue').val();
        var _token = $('input[name="_token"]').val();
        if(columnName == ''){
            alert('Please select column name');
            return false;
        }
        // alert(filterValue);
        // alert(columnName);
        // alert(_token);
        if (filterValue) {
            $.ajax({
                url: "searchData/fetch",
                method: "GET",
                data: { columnName: columnName, filterValue: filterValue, _token: _token },
                dataType:'json',
                success: function(response) {
                    // $('tbody').html(JSON.stringify(response.view));
                    // $('#tbody').html(response.view);
                    // $('#tbody').text(response.view);
                //    alert(JSON.stringify(response));
                // window.location = '{{ route('user.all') }}';
                window.location.href(base_url+"/admin/user");
                // $('tbody').html(response.users);
                // $('tbody').html(response.roles);
                // $('#total_records').text(response.total_data);
                },
            })
        }

    });
});




    