$(document).ready(function () {
    var table = $('#table-history-user').DataTable({
        responsive: true
    });

    new $.fn.dataTable.FixedHeader( table );
});