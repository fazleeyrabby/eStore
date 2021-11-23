
$(document).ready(function(){
    $("#filterValue").on("keyup", function(){
        var columnName = $('#columnName').val();
        var filterValue = $('#filterValue').val();
        var _token = $('input[name="_token"]').val();
        // alert(filterValue);
        // alert(columnName);
        // alert(_token);

        if (filterValue) {
            $.ajax({
                url: "searchData/fetch",
                method: "POST",
                data: {
                    columnName: columnName,
                    filterValue: filterValue,
                    _token: _token
                },
                success: function(brand) {
                    if(brand > 0)
                    {

                        document.getElementById('name').classList.add('is-invalid')
                        document.getElementById('nameMessage').innerHTML = " Duplicate brand name will not be allowed"
                        return false;
                    }
                    else
                    {
                       e.currentTarget.submit();
                        return true;
                    }
                },
            })
        }

    });
});




    