
$(document).ready(function () {

$("#appointment").DataTable( {
    responsive: true,
    dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp", "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]], 
    
    buttons: [ 
        {
            extend: 'copy',
            className: 'btn-sm'
        }, 

        {
            extend: 'csv', 
            title: 'ExampleFile',
             className: 'btn-sm',
             exportOptions: {
                columns: [ 0,1,2,3,4,5,6,7 ],
                modifier: {
                    page: 'current'
                }
            }
        }, 

        {
            extend: 'excel',
             title: 'ExampleFile',
              className: 'btn-sm',
              exportOptions: {
                columns: [ 0,1,2,3,4,5,6,7 ],
                modifier: {
                    page: 'current'
                }
            }
        }, 

        {
            extend: 'pdf',
            title: 'ExampleFile',
            className: 'btn-sm',
            exportOptions: {
                columns: [ 0,1,2,3,4,5,6,7 ],
                modifier: {
                    page: 'current'
                }
            }
        }, 

        {
            extend: 'print',
            className: 'btn-sm',
            exportOptions: {
                columns: [ 0,1,2,3,4,5,6,7 ],
                modifier: {
                    page: 'current'
                }
            }
        }
    ],
    // setup responsive extension: http://datatables.net/extensions/responsive/
    responsive: {
        details: {
            type: 'column',
            target: 'tr',
            css:'color:red'
        }
    },
            
    order: [ 4, 'asc' ],
   
}
);  

});


$(document).ready(function () {
    
    $('#dataTables').DataTable({
        responsive: true,
        dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp", "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]], 
           buttons: [ 
        {
            extend: 'copy',
            className: 'btn-sm'
        }, 

        {
            extend: 'csv', 
            title: 'ExampleFile',
             className: 'btn-sm',
             exportOptions: {
                columns:[0,1,2,3],
                modifier: {
                    page: 'current'
                }
            }
        },

        {
            extend: 'excel',
             title: 'ExampleFile',
              className: 'btn-sm',
              exportOptions: {
                columns: [0,1,2,3 ],
                modifier: {
                    page: 'current'
                }
            }
        }, 

        {
            extend: 'pdf',
            title: 'ExampleFile',
            className: 'btn-sm',
            exportOptions: {
                columns: [0,1,2,3 ],
                modifier: {
                    page: 'current'
                }
            }
        },

        {
            extend: 'print',
            className: 'btn-sm',
            exportOptions: {
                columns: [0,1,2,3 ],
                modifier: {
                    page: 'current'
                }
            }
        }
    ]
    });
});



$(document).ready(function () {
    
    $('#sms').DataTable({
        responsive: true,
        dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp", "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]], 
           buttons: [ 
            {
                extend: 'copy',
                className: 'btn-sm'
            },

            {
                extend: 'csv', 
                title: 'ExampleFile',
                 className: 'btn-sm',
                 exportOptions: {
                    columns: [0,1,2],
                    modifier: {
                        page: 'current'
                    }
                }
            }, 
            {
                extend: 'excel',
                 title: 'ExampleFile',
                  className: 'btn-sm',
                  exportOptions: {
                    columns: [0,1,2 ],
                    modifier: {
                        page: 'current'
                    }
                }
            }, 
            {
                extend: 'pdf',
                title: 'ExampleFile',
                className: 'btn-sm',
                exportOptions: {
                    columns: [0,1,2 ],
                    modifier: {
                        page: 'current'
                    }
                }
            }, 
            {
                extend: 'print',
                className: 'btn-sm',
                exportOptions: {
                    columns: [0,1,2 ],
                    modifier: {
                        page: 'current'
                    }
                }
            }
        ]
    });
});

$(document).ready(function () {
    
    $('#prescription').DataTable({
        responsive: true,
        dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp", "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]], 
           buttons: [ 
            {
                extend: 'copy',
                className: 'btn-sm'
            }, 
            {
                extend: 'csv', 
                title: 'Prescription List',
                 className: 'btn-sm',
                 exportOptions: {
                    columns: [ 1,2,3,4],
                    modifier: {
                        page: 'current'
                    }
                }
            }, 
            {
                extend: 'excel',
                 title: 'Prescription List',
                  className: 'btn-sm',
                  exportOptions: {
                    columns: [ 1,2,3,4 ],
                    modifier: {
                        page: 'current'
                    }
                }
            }, 
            {
                extend: 'pdf',
                title: 'Prescription List',
                className: 'btn-sm',
                exportOptions: {
                    columns: [ 1,2,3,4 ],
                    modifier: {
                        page: 'current'
                    }
                }
            }, 
            {
                extend: 'print',
                title: 'Prescription List',
                className: 'btn-sm',
                exportOptions: {
                    columns: [ 1,2,3,4 ],
                    modifier: {
                        page: 'current'
                    }
                }
            }
        ]
    });
});





$(document).ready(function () {
    
    $('#patient_list').DataTable({
                responsive: true,
        dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp", "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]], 
           buttons: [ 
            {
                extend: 'copy',
                className: 'btn-sm'
            }, 
            {
                extend: 'csv', 
                title: 'ExampleFile',
                 className: 'btn-sm',
                 exportOptions: {
                    columns: [1,2,3,4,5,6],
                    modifier: {
                        page: 'current'
                    }
                }
            }, 
            {
                extend: 'excel',
                 title: 'ExampleFile',
                  className: 'btn-sm',
                  exportOptions: {
                    columns: [1,2,3,4,5,6 ],
                    modifier: {
                        page: 'current'
                    }
                }
            }, 
            {
                extend: 'pdf',
                title: 'ExampleFile',
                className: 'btn-sm',
                exportOptions: {
                    columns: [1,2,3,4,5,6 ],
                    modifier: {
                        page: 'current'
                    }
                }
            }, 
            {
                extend: 'print',
                className: 'btn-sm',
                exportOptions: {
                    columns: [1,2,3,4,5,6 ],
                    modifier: {
                        page: 'current'
                    }
                }
            }
        ]
    });
});