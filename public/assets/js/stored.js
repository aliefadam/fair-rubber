function del(id) {
    swal({
        title: "Apakah Anda Yakin?",
        text: "Aksi ini tidak dapat dikembalikan.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: urlDel + id,
                data: {
                    "_token": token,
                },
                type: "DELETE",
                success: function (response) {
                    if (response.status == 'success') {
                        swal(response.message, {
                            icon: "success",
                        }).then((okei) => {
                            if (okei) {
                                location.reload();
                            }
                        });
                    } else {
                        swal(response.message, {
                            icon: "error",
                        });
                    }

                },
            });
        } else {
            swal('Data Anda tidak jadi dihapus', {
                icon: "info",
            });
        }
    });
}