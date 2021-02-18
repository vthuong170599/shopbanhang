function deleteItem(event) {
    event.preventDefault();
    let url = $(this).data('url');
    let item = $(this);
    // alert(url);
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "GET",
                url: url,
                success: function(data) {
                    if (data.code == 200) {
                        item.parent().parent().remove();
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                }
            });
        }

    })
}

$(function() {
    $(document).on('click', '.action_delete', deleteItem);
});
