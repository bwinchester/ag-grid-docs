var columnDefs = [

    // one column for showing the groups
    {headerName: "Group", cellRenderer: 'group', showRowGroup: true},

    // the first group column
    {headerName: "Country", field: "country", rowGroup: true, hide: true},
    {headerName: "Year", field: "year", rowGroup: true, hide: true},

    {headerName: "Athlete", field: "athlete"},
    {headerName: "Gold", field: "gold"},
    {headerName: "Silver", field: "silver"},
    {headerName: "Bronze", field: "bronze"}
];

var gridOptions = {
    columnDefs: columnDefs,
    animateRows: true,
    enableSorting: true,
    enableRangeSelection: true,
    // we are defining the group columns, so tell the grid we don't
    // want it to auto-generate group columns for us
    groupSuppressAutoColumn: true,
    onGridReady: function(params) {
        params.api.sizeColumnsToFit();
    }
};

// setup the grid after the page has finished loading
document.addEventListener('DOMContentLoaded', function() {
    var gridDiv = document.querySelector('#myGrid');
    new agGrid.Grid(gridDiv, gridOptions);

    // do http request to get our sample data - not using any framework to keep the example self contained.
    // you will probably use a framework like JQuery, Angular or something else to do your HTTP calls.
    agGrid.simpleHttpRequest({url: '../olympicWinners.json'})
        .then( function(rows) {
            gridOptions.api.setRowData(rows);
        });
});