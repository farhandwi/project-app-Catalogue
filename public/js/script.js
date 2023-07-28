function konfirmasi() {
    let formElement = $(this).closest("form");
    let actionValue = formElement.attr("action");
    const href = $(this).attr("href");
    return Swal.fire({
        title: "Are you sure?",
        text: "You can't see the company that have been you deleted!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            return true;
        }
    });
}
