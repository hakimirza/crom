var OrderSearchTable = function () {

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
                "sDom": "<'row'<'col-lg-6'l><'col-lg-6'f>r>t<'row'<'col-lg-6'i><'col-lg-6'p>>",
                "sDom": "<'row'<'col-lg-6'l><'col-lg-6'f>r>t<'row'<'col-lg-6'i><'col-lg-6'p>>",
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

            jQuery('#table-sortable_wrapper .dataTables_filter input').addClass("form-control medium"); // modify table search input
            jQuery('#table-sortable_wrapper .dataTables_length select').addClass("form-control xsmall"); // modify table per page dropdown

        }

    };

}();