

<?php
$page_title = "XLeague";
$page_description = "Inhouse league for XMage limited";
include('includes/header.php'); ?>

<body>
<div id="container">
    <h1 id="title">XLeague</h1>
    <div id="chat">
        <h2 class="header">Chat</h2>
        <iframe src="http://widget.mibbit.com/?settings=fe2892791ad32b0bb385677cb2f2e75c&amp;server=irc.web.gamesurge.net&amp;channel=%23XLeague" width="100%" height="467" scrolling="no"></iframe>
    </div>
    <div id="queueinfo">
        <h2 class="header">Queue information</h2>
        <!--queue is replaced by javascript-->
        <div id="queue">
            <p>Please wait...</p>
        </div>
    </div>
    <div id="playerinfo">
        <h2 class="header">Player stats</h2>
        <!--playerstats is replaced by javascript, any changes in there should also be reflected in scripts/main.js-->
        <div id="playerstats">
            <input class="textBox" id="textinput" type="text" placeholder="Player nickname" onkeyup="checkKey(event)">
            <input type="button" class="Send" value="Check" onclick="getplayerinfo();">
            <p>Player:</p>
            <p>Rank:</p>
            <p>Rating:</p>
            <p>Games played:</p>
        </div>
    </div>
    <div id="gameinfo">
        <h2 class="header">Game info</h2>
        <!--gamestats is replaced by javascript, any changes in there should also be reflected in scripts/main.js-->
        <div id="gamestats">
            <input class="textBox" id="textinput2" type="text" placeholder="Game ID" onkeyup="checkKey2(event)">
            <input type="button" class="Send" value="Check" onclick="getgameinfo();">
            <p>ID:</p>
            <p>Format:</p>
            <p>Players:</p>
        </div>
    </div>
    <div id="wrapper">
        <div id="tabContainer">
            <div id="tabs">
                <ul>
                    <!--id tabHeader_X should match tabpage_X in tabscontent div-->
                    <li id="tabHeader_1">News</li>
                    <li id="tabHeader_2">How to use</li>
                    <li id="tabHeader_3">Leaderboard</li>
                    <li id="tabHeader_4">Advanced user</li>
                    <li id="tabHeader_5">Contribute</li>
                </ul>
            </div>
            <div id="tabscontent">
                <div class="tabpage" id="tabpage_1"><?php
                    require_once('parsedown.php');
                    $contents = file_get_contents('content/news.md');
                    $parsedown = new parsedown();
                    echo $parsedown->text($contents);
                    ?>
                </div>
                <div class="tabpage" id="tabpage_2"><?php
                    require_once('parsedown.php');
                    $contents = file_get_contents('content/how_to_use.md');
                    $parsedown = new parsedown();
                    echo $parsedown->text($contents);
                    ?>
                </div>
                <div class="tabpage" id="tabpage_3">
                    <h2>Leaderboard</h2>
                    <input type="button" id="ladderrefresh" class="Send" value="Refresh leaderboard" onclick="getleader();">
                    <span id="ladder"></span>
                </div>
                <div class="tabpage" id="tabpage_4"><?php
                    require_once('parsedown.php');
                    $contents = file_get_contents('content/advanced_user.md');
                    $parsedown = new parsedown();
                    echo $parsedown->text($contents);
                    ?>
                </div>
                <div class="tabpage" id="tabpage_5"><?php
                    require_once('parsedown.php');
                    $contents = file_get_contents('content/contribute.md');
                    $parsedown = new parsedown();
                    echo $parsedown->text($contents);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>