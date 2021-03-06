<?php
$key = "Getting Started ng1";
$pageTitle = "Angular Grid";
$pageDescription = "ag-Grid can be used as a data grid inside your Angular application. This page details how to get started using ag-Grid inside an Angular application.";
$pageKeyboards = "Angular Grid";
$pageGroup = "basics";
include '../documentation-main/documentation_header.php';
?>

<div>

    <h1 id="implementing-the-angularjs-datagrid">
        <img src="../images/svg/docs/getting_started.svg" width="50" alt="Getting Started"/>
        <img style="vertical-align: middle" src="/images/angularjs.png" height="25px" alt="Angular"/>
        Angular Grid
    </h1>

</div>

<p>
    This page details how to set up ag-Grid inside and Angular 1.x application.
</p>

<?php include '../javascript-grid-getting-started/ag-grid-dependency.php' ?>

<p>
    When the ag-Grid script loads, it does not register with AngularJS 1.x. This is because
    AngularJS 1.x is an optional part of ag-Grid and you need to tell ag-Grid you
    want to use it.
</p>

<?php include '../javascript-grid-getting-started/ag-grid-bundletypes.php' ?>

<?php include '../javascript-grid-getting-started/ag-grid-commonjs.php' ?>

<h3>Download ag-Grid-Enterprise</h3>

<table>
    <tr>
        <td style="padding: 10px;"><img src="../images/bower.png"/></td>
        <td>
            <b>Bower</b><br/>
            bower install ag-grid-enterprise
        </td>

        <td style="width: 20px;"/>

        <td style="padding: 10px;"><img src="../images/npm.png"/></td>
        <td>
            <b>NPM</b><br/>
            npm install ag-grid-enterprise
        </td>

        <td style="width: 20px;"/>

        <td style="padding: 10px;"><img src="../images/github.png"/></td>
        <td>
            <b>Github</b><br/>
            Download from <a href="https://github.com/ceolter/ag-grid-enterprise">Github</a>
        </td>
    </tr>
</table>

<h3>Referencing ag-Grid-Enterprise</h3>

<p>
    ag-Grid-Enterprise is also distributed as both a self contained bundle and also via a CommonJS package.
</p>

<p>As with the ag-Grid example, all we need to do is reference the ag-grid-enterprise dependency and we're good
    to go:</p>
<pre>
&lt;html&gt;
&lt;head&gt;
    &lt;script src="path-to-ag-grid-enterprise/ag-grid-enterprise.js"&gt;&lt;/script&gt;
    &lt;script src="example1.js"&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div id="myGrid" style="height: 100%;" class="ag-fresh"&gt;&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<note>
    <strong>Self Contained Bundles</strong>

    <p>Do <b>not</b> include both ag-Grid and ag-Grid-Enterprise self contained bundles. The ag-Grid-Enterprise
        contains ag-Grid.</p>
</note>

<p>The creation of the Grid would be the same as the ag-Grid example above.</p>

<h4>ag-Grid Enterprise Bundle Types</h4>
<p>
    Again similar to ag-Grid, ag-Grid-Enterprise has 4 bundles:
<ul>
    <li>dist/ag-grid-enterprise.js -> standard bundle containing JavaScript and CSS</li>
    <li>dist/ag-grid-enterprise.min.js -> minified bundle containing JavaScript and CSS</li>
    <li>dist/ag-grid-enterprise.noStyle.js -> standard bundle containing JavaScript without CSS</li>
    <li>dist/ag-grid-enterprise.min.noStyle.js -> minified bundle containing JavaScript without CSS</li>
</ul>
</p>

<p>Even if you are using React, AngularJS 1.x, Angular, VueJS or Web Components, the above is all you need
    to
    do.
    Any grid you create will be an enterprise grid once you load the library.</p>

<h4>CommonJS</h4>
<p>
    If using CommonJS, you one need to include ag-Grid-Enterprise into your project. You do not need to
    execute any code inside it. When ag-Grid-Enterprise loads, it will register with ag-Grid such that the
    enterprise features are available when you use ag-Grid.
</p>

<pre>// ECMA 5 - using nodes require() method
var AgGrid = require('ag-grid');
// only include this line if you want to use ag-grid-enterprise
require('ag-grid-enterprise');

// ECMA 6 - using the system import method
import {Grid} from 'ag-grid/main';
// only include this line if you want to use ag-grid-enterprise
import 'ag-grid-enterprise/main';
</pre>


<h3 id="creating-the-angularjs-module">Creating the AngularJS 1.x Module</h3>
Include ag-Grid as a dependency of your module like this:
<p/>
<pre>
<span class="codeComment">// if you're using ag-Grid-Enterprise, you'll need to provide the License Key before doing anything else</span>
<span class="codeComment">// not necessary if you're just using ag-Grid</span>
agGrid.LicenseManager.setLicenseKey("your license key goes here");

<span class="codeComment">// get ag-Grid to create an Angular module and register the ag-Grid directive</span>
agGrid.initialiseAgGridWithAngular1(angular);

<span class="codeComment">// create your module with ag-Grid as a dependency</span>
var module = angular.module("example", ["agGrid"]);</code></pre>

<h4 id="ag-grid-div">ag-Grid Div</h4>

<p>
    To include a grid in your html, add the <i>ag-grid</i> attribute to a div. The value
    of the div should be the provided grid options on the scope.
</p>

<p>
    It is also usual to provide a styling theme to
    the grid. Three themes come with the grid, ag-fresh, ag-dark and ag-blue. Each one is
    set by applying the corresponding class of the same name to the div. In the
    example, ag-fresh is used.
</p>

<p>
    You must provide <b>width and height</b> to your grid. The grid is programmed to fill
    the width and height you give it.
</p>

<pre>&lt;div <b>ag-grid="gridOptions" class="ag-fresh" style="height: 100%;"</b>>&lt;/div></pre>

<p>
    (note: a div by default has 100% width, so the width is not specified explicitly above).
</p>

<h4 id="grid-options">Grid Options</h4>
<p>
    The grid options provide ag-Grid with the details needed to render. At a
    minimum you should provide the columns (columnDefs) and the rows (rowData).
</p>

<h2 id="basic-angularjs-1-x-example">Basic AngularJS 1.x Example</h2>
<show-example example="example-ajs" example-height="200px"></show-example>


<h2 id="destroy">Destroy</h2>

<p>
    You do not need to manually clean up the grid. The grid ties in with the AngularJS 1.x lifecycle
    and releases all resources when the directive is destroyed.
</p>

<h2 id="advanced-angularjs-1-x-example">Advanced AngularJS 1.x Example</h2>

<p>
    The below example has much more details. The mechanism for setting up the grid
    is the same as above. Don't worry about the finer details for now, how all the
    different options are configured is explained in the relevant parts of the documentation.
</p>

<show-example example="basic-ajs"></show-example>

<h2 id="angular-compiling">Angular Compiling</h2>

<p>
    Angular 1.x is great. It allows us to build large end-to-end single page web apps with relative ease.
    However the author of ag-Grid is of the opinion that not everything should be
    built in Angular. Angular 1.x does come with a disadvantage, it can slow things down.
    ag-Grid does not use Angular 1.x (or any other framework) underneath the hood, it is all
    blazing fast raw Javascript.
</p>
<p>
    But maybe you are not worried about performance. Maybe you are not displaying
    that many rows and columns. And maybe you want to provide your own cell renderers
    and use Angular here. For whatever reason, it is possible to turn Angular on for
    Angular version 1.x.
</p>
<p>
    When Angular is turned on in ag-Grid, every time a row is inserted, a new child
    Angular Scope is created for that row. This scope gets the row attached to it
    so it's available to any Angular logic inside the cell.
</p>
<p>
    Each cell within the row does not get a new child scope. So if placing item inside the
    child scope for the row, be aware that it is shared across all cells for that row.
    If you want a cell to have it's own private scope, consider using a directive
    for the renderer that will introduce a new scope.
</p>

<h4 id="turn-on-angular-compile">Turn On Angular Compile</h4>
<p>
    Angular compiling is turned on by setting the grid options attribute angularCompileRows to true.
</p>

<ul>
    <li><b>angularCompileRows:</b> Whether to compile the rows for Angular.</li>
    <li><b>angularCompileFilters:</b> Whether to compile provided custom filters.</li>
    <li><b>angularCompileHeaders:</b> Whether to compile the customer headers for AngularJS 1.x.</li>
</ul>

<p>The default is always to have Angular compiling off for performance reasons.</p>

<h4 id="example-using-angular-compile">Example using Angular Compile</h4>

<p>
    Below then uses three columns rendered using custom Angular renderers.
</p>
<ul>
    <li><b>Athlete:</b> Uses simple binding to display text.</li>
    <li><b>Age:</b> Uses simple binding to display a button, with a button click event using ng-click.</li>
    <li><b>Country:</b> Uses a custom Angular directive to display the country.</li>
</ul>

<show-example example="exampleAngularCompiling-ajs"></show-example>

<note>
    When scrolling the example above up and down, the cells rendered using Angular are blank
    initially, and filled in during the next Angular digest cycle. This behaviour the author
    has observed in other Angular grid implementations. This is another reason why the author
    prefers non-Angular rendering for large grids.
</note>

<h2 id="cell-templates">Cell Templates</h2>

<p>
    Cell Templates allow you to specify templates to use to render your cells. This is handy
    if you want to put JavaScript markup with AngularJS 1.x bindings as the cells.
    Cell templates are specified in the column definition by providing a template as a
    string or a templateUrl to load the template from the server.
</p>

<p>
    If using templateUrl, then the html is cached. The server is only hit once per template and
    it is reused.
</p>

<p>
    The example below uses cell templates for the first three columns.
<ul>
    <li><b>Col 1 - </b> The first column uses a static template. Pretty pointless as you can't change
        the content between rows.
    </li>
    <li><b>Col 2 - </b> The second column uses an inline template. AngularJS 1.x is then used to fetch
        the content from the scope via ng-bind.
    </li>
    <li><b>Col 3 - </b> The third column is similar to the second, with the difference that it loads
        the template from the server.
    </li>
</ul>
</p>

<note>
    In the example, as you scroll up and down, the redraw on the AngularJS 1.x columns has a lag.
    This is waiting for the AngularJS 1.x digest cycle to kick in to populate the values into these rows.
</note>

<show-example example="exampleCellTemplates-ajs"></show-example>

<h2 id="next-steps">Next Steps...</h2>

<p>
    Now you can go to <a href="../javascript-grid-interfacing-overview/">interfacing</a>
    to learn about accessing all the features of the grid.
</p>


<?php include '../documentation-main/documentation_footer.php';?>
