<?php
$key = "Data Functions";
$pageTitle = "ag-Grid Data Functions";
$pageDescription = "With ag-Grid you can group, pivot and aggregate your data. The terms all relate to each other so here are the overview details you need to know to understand them.";
$pageKeyboards = "ag-Grid Data Functions Grouping Pivot Aggregation";
$pageGroup = "feature";
include '../documentation-main/documentation_header.php';
?>

<div>

    <h2><img src="../images/enterprise_50.png" title="Enterprise Feature"/> Data Functions</h2>

    <p>
        Data functions in ag-Grid are <b>row grouping</b>, <b>pivoting</b> and <b>value (aggregation)</b>. All of these
        terms are related but each is a detailed topic by itself. Below gives a summary of the different functions
        to help frame the detailed explanations.
    </p>

    <h3>Row Grouping</h3>
    <p>
        Rows in the grid are grouped into expandable groups. This is the standard grouping that one typically
        finds in data grids. Aggregation is optional when grouping.
    </p>

    <h3>Value (Aggregation)</h3>
    <p>
        When grouping or pivoting you may use aggregation to aggregate values, eg apply a <i>sum()</i> or
        <i>max()</i> on a column. Although the mathematical term is 'Aggregation', it is referred to as 'Values'
        to keep consistent with the GUI, where you add columns to the 'Values' section of the tool panel (which
        in turn is consistent with Excel).
    </p>

    <h3>Pivoting</h3>
    <p>
        Rows in the grid are pivoted across columns making columns out of rows. Aggregation is mandatory for
        pivot as you need an aggregated value to pivot on.
    </p>

    <h3>AggFunc</h3>
    <p>
        An AggFunc (short for aggregation function) is the aggregation function you are applying to the value.
        Examples are <i>sum()</i> and <i>max()</i>. You can use built in functions or user provided functions.
    </p>

    <h3>Pivot Mode</h3>
    <p>
        Pivot mode is a mode of operation where the grid only uses columns that are included in
        a row grouping, value or pivot. The rowData detail is also not shown (you cannot open up
        groups all the way down and view the lowest level detail). Pivot mode is similar to viewing
        a pivot table in a Excel. When in pivot mode, column visibility is ignored.
    </p>

    <h3>Allow Pivot, Row Group, Value</h3>
    <p>
        Every column can be added as a row group, pivot or value using the grid API or
        configuration. However you need to mark the column definition with one or more of <i>enableRowGroup, enablePivot
        or enableValue</i> to allow the function via the GUI. If these flags are not set, the GUI will not allow
        the functions, however you API and configuration will not be impacted.
    </p>

</div>

<?php include '../documentation-main/documentation_footer.php';?>
