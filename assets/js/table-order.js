var EditableTable = function () {

    return {

        //main function to initiate the module
        init: function () {

            var oTable = $('#table-sortable').dataTable({
                "aLengthMenu": [
                [10, 50, 100, -1],
                    [10, 50, 100, "All"] // change per page values here
                    ],
                // set the initial value
                "iDisplayLength": 10,
                "sDom": "<'row'<'col-lg-6'><'col-lg-6'>r>t<'row'<'col-lg-6'><'col-lg-12'p>>",
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ records per page",
                    "oPaginate": {
                        "sPrevious": "Prev",
                        "sNext": "Next"
                    }
                },
                "aoColumnDefs": [{
                    'bSortable': false,
                    'aTargets': []
                }
                ]
            });

        }

    };

}();