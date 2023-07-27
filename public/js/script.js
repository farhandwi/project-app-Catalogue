$(".confirmDelete").on("click", function (e) {
    e.preventDefault();
    var formElement = $(this).closest("form");
    var actionValue = formElement.attr("action");
    console.log(actionValue);
    const href = $(this).attr("href");
    Swal.fire({
        title: "Are you sure?",
        text: "You can't see the company that have been you deleted!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById("formdelete").submit();
        }
    });
});
