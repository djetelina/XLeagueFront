

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
                <div class="tabpage" id="tabpage_1">
                    <h2>News</h2>
                    <p><span class="timestamp">2nd January 2016</span>We wil be slowly moving towards this page being the only website for XLeague. By the time Oath of the Gatewatch spoilers are finished, this will hopefully be a thing.</p>
                </div>
                <div class="tabpage" id="tabpage_2">
                    <h2>How to use</h2>
                    <p>To use XLeague, you need to be vouched on XLeague and registered on <a href="https://gamesurge.net/createaccount/" target="_blank">GameSurge</a>.</p>
                    <p>Enter your GameSurge nickname in your chat window and connect. When you connect, use <span class="code">/login &lt;GameSurgeNick&gt; &lt;GameSurgePassword&gt;</span> to identify with the network. Bot will not recognize your commands otherwise.</p>
                    <p>Chat commands to control joining and leaving queue are below the input bar. The others can be found in the right sidebar.</p>
                    <h3>Getting vouched</h3>
                    <p>To simplify usage of XLeague, we want to phase out registering to a forum.</p>
                    <p>When you first connect to the chat, just ask for a judge, if one is available, PM him (click on his name on the right and press PM), introduce yourself and ask for a vouch.</p>
                    <p><i>You NEED to be logged in to your GameSurge account in order to receive vouch!</i></p>
                </div>
                <div class="tabpage" id="tabpage_3">
                    <h2>Leaderboard</h2>
                    <input type="button" id="ladderrefresh" class="Send" value="Refresh leaderboard" onclick="getleader();">
                    <span id="ladder"></span>
                </div>
                <div class="tabpage" id="tabpage_4">
                    <h2>Advanced user</h2>
                    <p>If you don't wish to use this frontend, you can use any IRC client and chat commands.</p>
                    <p>IRC Network: GameSurge</p>
                    <p>Channel: #xleague</p>
                    <h3>Chat commands</h3>
                    <p><span class="code">.help</span> lists all available commands in PM</p>
                    <p><span class="code">.join</span> joins queue</p>
                    <p><span class="code">.leave</span> leaves queue</p>
                    <p><span class="code">.players</span> Lists players queued for an open game</p>
                    <p><span class="code">.player &lt;PlayerName&gt;</span> Gets stats of a player</p>
                    <p><span class="code">.games</span> Lists running games</p>
                    <p><span class="code">.game &lt;ID&gt;</span> Gets info about a game</p>
                    <p><span class="code">.card &lt;CardName&gt;</span> Gets info about a card</p>
                </div>
                <div class="tabpage" id="tabpage_5">
                    <h2>Contribute</h2>
                    <h3>Frontend development</h3>
                    <p>Also known as the page you are on right now.</p>
                    <p>Languages: HTML5, CSS3, JavaScript</p>
                    <p>GitHub: <a href="https://github.com/iScrE4m/XLeagueFront" target="_blank">Here</a></p>
                    <h3>Backend development</h3>
                    <p>What makes the league work. The GitHub is a bit outdated, since we migrated to a server recently and the code hasn't been cleaned up yet.</p>
                    <p>Languages: Python (on Cyclone framework)</p>
                    <p>GitHub: <a href="https://github.com/iScrE4m/XLeague" target="_blank">Here</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>