<?php
$key = "Accessibility";
$pageTitle = "ag-Grid Accessibility";
$pageDescription = "ag-Grid Accessibility";
$pageKeyboards = "ag-Grid Accessibility";
$pageGroup = "feature";
include '../documentation-main/documentation_header.php';
?>

<p>
    <h1 class="first-h1" id="accessibility">
        <img src="../images/svg/docs/accessibility.svg" width="50"/>
        Accessibility
    </h1>

<p>
    This page provides some guidance on how to address accessibility concerns in your grid implementations,
    as well as sharing our current progress as we roll out more accessibility features in the upcoming releases.
</p>

    <div class="note">
        <table>
            <tbody><tr>
                <td style="vertical-align: top;">
                    <img src="../images/lab.png" title="Enterprise Lab" style="padding: 10px;">
                </td>
                <td style="padding-left: 10px;">
                    <h4 class="ng-scope">
                        Lab Feature
                    </h4>
                    <p class="ng-scope">
                        Accessibility features are currently in development and therefore subject to change. Please provide
                        feedback below so that we can best understand your requirements along with any suggestions you might
                        have so that we can provide the best accessibility experience as possible.
                </td>
            </tr>
            </tbody></table>
    </div>

    <h2>Web Conformance Guidelines</h2>
    <p>
        Even if you are not mandated to conform to any particular accessibility standard, it can be helpful to understand the
        guidelines outlined as they are generally good practices worth incorporating into your web based applications.
    </p>
    <p>
        Currently the most commonly encountered conformance guidelines are:
        <ul>
            <li><a href="https://www.ada.gov">ADA</a> - US Department of Justice</li>
            <li><a href="https://www.section508.gov">Section 508</a> - US federal agencies</li>
            <li><a href="https://www.w3.org/WAI/intro/wcag">WCAG 2.0</a> - globally accepted standard</li>
        </ul>

        WCAG 2.0 has 3 levels of conformance; A, AA and AAA (in order of conformance)
    </p>
    <p>
        As meeting WCAG 2.0 level AA guidelines also meets the ADA and Section 508 standards, it is likely that most organisations will want to target this standard.
    </p>

    <note>
        How you design your grid is key to how accessible it will be. For instance the use of colours, images and complex layouts should be carefully considered.
    </note>

    <h2>High Contrast Theme</h2>
    <p>
        For users that are visually impaired due to colour deficiencies, care should be taken when using colours to provide information.
    </p>
    <p>
        Using our demo page as an example, the chrome plugin <a href="https://chrome.google.com/webstore/detail/colorblinding/dgbgleaofjainknadoffbjkclicbbgaa?hl=en">Colorblinding</a>
        shows how cells with colour indicators might appear to someone with total colour blindness (Monochromacy).
    </p>
    <p>
        <img style="border: 1px solid lightgrey" src="accessibility-colour-contrast.png"/>
    </p>
    <p>
        To create a high contrast theme please check out the <a href="../javascript-grid-styling/">Themes</a>
        documentation for details.
        A new high contrast theme is in the ag-Grid backlog and will be scheduled for development soon.
    </p>

    <h2>Screen Readers</h2>
    <p>
        Users who are blind or visually impaired will typically require the assistance of a screen reader to interpret and
        interact with grid based application.
    </p>

    <p>There are numerous screen readers available, however right now the most popular screen reader for Windows is
       <a href="https://www.freedomscientific.com/Downloads/JAWS">JAWS</a> and for MAC users it is the embedded
       <a href="http://help.apple.com/voiceover/info/guide">VoiceOver</a> software. ag-Grid testing is focused on these
        screen readers.
    </p>

    <h2>ARIA Attributes</h2>
    <p>
        In order to give screen readers the contextual information they require to interpret and interact with ag-Grid,
        <a href="https://www.w3.org/TR/wai-aria/">ARIA</a> attributes are added to the grid DOM elements. These
        attributes are particularity useful when plain HTML elements such <i>div</i> and <i>span</i> are used to create
        complex DOM structures, which is the case with ag-Grid.
    </p>

    <p>
        When inspecting the DOM you'll notice the following roles and properties have been added:
        <ul>
            <li><b>role="grid"</b> - marks the enclosing element of the grid</li>
            <li><b>role="row"</b> - a row of column headers or grid cells</li>
            <li><b>role="columnheader"</b> - element containing a column header</li>
            <li><b>role="gridcell"</b> - element containing a grid cell </li>
            <li><b>role="presentation"</b> - indicates an element should be ignored</li>
            <li><b>aria-hidden="true"</b> - indicates an element and child elements should be ignored</li>
        </ul>
    </p>

    <p>
        These attributes will enable screen readers to interpret and navigate the columns and rows of the grid.
        Grids with simple layouts (e.g. without <a href="../javascript-grid-grouping-headers/">column groups</a> or
        <a href="../javascript-grid-pivoting/"></a> pivots) will have best results.
    </p>

    <note>
        Next steps include adding ARIA attributes for grid interaction, i.e. sorting / filtering etc...
    </note>

    <h2>Row and Column Order</h2>

    <p>
        By default in ag-Grid, rows and columns can appear out of order in the DOM. This is due to how ag-Grid
        virtualises columns and rows, a technique whereby the grid draws columns and rows as the user scrolls.
        This 'incorrect order' can result in inconsistent results when parsed by screen readers.
    </p>
    <p>
        As a workaround for column order, set <code>gridOption.suppressColumnVirtualisation=true</code>.
    </p>

    <note>
        Note that a permanent solution to set column and row order will be released shortly.
    </note>

    <p>
        The example below presents a simple grid layout with <i>suppressColumnVirtualisation</i> enabled.
    </p>

    <show-example example="accessibilityExample"></show-example>

    <note>
        Tested on Windows using JAWS (version 18) and Mac using VoiceOver (Sierra 10.12.4)
    </note>

    <h2>Keyboard navigation</h2>

    <p>Users who have motor disabilities, as well as visually impaired users, often rely on keyboards for navigation.</p>

    <p>For details on how to navigate the grid without using a mouse refer to the
       <a href="../javascript-grid-keyboard-navigation/">Keyboard Navigation</a> documentation. Note that it is possible
       to provide custom navigation which could come in useful for some accessibility requirements.</p>

    <h2>Skip Navigation</h2>
    <p>It may also be worth considering providing a "skip link" to easily navigate to the grid. For example you could
       provide a hyperlink to the grid class attribute, i.e. href='#myGrid'.</p>

    <p>The following css snippet shows how you could also hide this link by default and then reveal it when tabbed into:</p>

    <pre>.skip-link {
  left: -100%;
  position: absolute;
}
.skip-link:focus {
  left: 50%;
}</pre>


<h3>Feedback</h3>

<p>Please share your experiences and any suggestions you might have so that we can create the best accessibility possible...</p>

<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'aggrid';

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>


<?php include '../documentation-main/documentation_footer.php';?>


</div>