<?php

$pageTitle = "ag-Grid Weekly Update";
$pageDescription = "Weekly snippets of what's happening in ag-Grid!";
$pageKeyboards = "ag-grid weekly update";

include('../includes/mediaHeader.php');
?>

<style>
    .weekly-news-paragraph {
        color: #767676;
        padding-bottom: 20px;
    }
    .weekly-news-paragraph-title {
        font-weight: bold;
        color: #767676;
        padding-bottom: 5px;
    }
    .weekly-news-section {
        overflow: hidden;
        border: 1px solid darkgrey;
        background-color: #eee;
        padding: 10px;
        margin: 30px 5px 5px 5px;
    }
    .weekly-news-title {
        font-size: 20px;
        color: #167ac6;
        float: left;
        padding-bottom: 10px;
    }
    .weekly-news-sub-title {
        float: right;
        color: #767676;
    }
    .weekly-news-image-right {
        margin-left: 10px;
        margin-bottom: 10px;
        font-size: 14px;
        font-style: italic;
        float: right;
        width: 400px;
    }
</style>

<div class="row">

    <div class="col-md-12" style="padding: 40px 40px 20px 40px;">
        These are our weekly updates on what we are working on and what you can expect to see soon
        in ag-Grid. We'll also let you know how the team is growing and who bought most coffees!
    </div>

</div>

<div class="weekly-news-section">

    <a href="./20170620/">
        <div class="weekly-news-title">
            Preparing for Next Release, New Team Members Settling In
        </div>
        <div class="weekly-news-sub-title">
            Niall Crosby, 20th June 2017
        </div>
    </a>

    <div style="clear: both;"></div>

    <div class="weekly-news-paragraph">
        This week we are finalising the next release while our new joiners are settling in nicely.
    </div>

</div>


<div class="weekly-news-section">

    <a href="./20170613/">
        <div class="weekly-news-title">
            More New Joiners, JIRA's Countdown, More New Dev
        </div>
        <div class="weekly-news-sub-title">
            Niall Crosby, 13th June 2017
        </div>
    </a>

    <div style="clear: both;"></div>

    <div class="weekly-news-paragraph">
        A welcome to our newest joiner Robert Clarke plus news on current development and our new office.
    </div>

</div>

<div class="weekly-news-section">

    <a href="./20170606/">
        <div class="weekly-news-title">
            The First Weekly Update
        </div>
        <div class="weekly-news-sub-title">
            Niall Crosby, 6th June 2017
        </div>
    </a>

    <div style="clear: both;"></div>

    <div class="weekly-news-paragraph">
        The first of our updates, we describe what the team is working on and the latest news in the company.
    </div>

</div>


<?php include_once("../includes/footer.php"); ?>

</body>

<?php include_once("../includes/analytics.php"); ?>

</html>
