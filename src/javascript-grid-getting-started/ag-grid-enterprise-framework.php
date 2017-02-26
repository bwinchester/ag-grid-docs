<div class="collapsableDocs">
    <div class="collapsableDocs-header"
         onclick="javascript: this.classList.toggle('active');">
        <div style="padding: 5px;vertical-align: middle"><?php include '../enterprise.php'; ?>&nbsp;&nbsp;<strong>Installing
                ag-Grid-Enterprise</strong>
        </div>
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
    </div>

    <div class="collapsableDocs-content">

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
        <p>In your application, before instantiating the grid, you need to reference the included ag-grid-enterprise dependency:</p>

<pre>
<?= $framework_enterprise ?>
</pre>

    </div>
</div>