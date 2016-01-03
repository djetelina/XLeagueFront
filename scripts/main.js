// Queue function, periodically checks API for variables and inserts them. Period 4000 = 4 seconds

window.setInterval(function(){
    var xleagueapi= "http://twistedtest-xleaguetest.rhcloud.com/variables";
    $.getJSON( xleagueapi , function(data) {
        var output="";
        for (var i in data.variables) {
            output+="<p>Game type: " + data.variables[i].GameType + "</p><p> Queued: " + data.variables[i].InQueue + "/" + data.variables[i].NeededToStart + "</p><p>Players: "+data.variables[i].QueuedPlayers+"</p><p>Running games (ID): "+data.variables[i].RunningGames+"</p>";
        }
        output+="";
        document.getElementById("queue").innerHTML=output;
    });
}, 4000);

// Function that gets information about player from API and inserts into page

function getplayerinfo(){
    var name = document.getElementById('textinput').value;
    var playerapi = "http://twistedtest-xleaguetest.rhcloud.com/player/" + name;
    $.getJSON(playerapi, function(data) {
        var output2 = '<input class="textBox" id="textinput" type="text" placeholder="Player nickname" onkeyup="checkKey(event)">\n<input type="button" class="Send" value="Check" onclick="getplayerinfo();">';
        for (var i in data.player) {
            output2+="<p>Player: " + data.player[i].Name + "</p><p>Rank: " + data.player[i].Rank +"</p><p>Rating: " + data.player[i].ELO + "</p><p>Games played: " + data.player[i].Played + " (" + data.player[i].W + "W/" + data.player[i].L + "L)</p>"
        }
        output2+="";
        document.getElementById("playerstats").innerHTML=output2;
    });
}

// Function that gets information about game from API and inserts into page

function getgameinfo(){
    var id = document.getElementById('textinput2').value;
    var gameid = "http://twistedtest-xleaguetest.rhcloud.com/game/" + id;
    $.getJSON(gameid, function(data) {
        var output2 = '<input class="textBox" id="textinput2" type="text" placeholder="Game ID" onkeyup="checkKey2(event)">\n<input type="button" class="Send" value="Check" onclick="getgameinfo();">';
        for (var i in data.game) {
            output2+="<p>ID: " + data.game[i].ID + "</p><p>Format: " + data.game[i].GameType + "</p><p>Players: " + data.game[i]['Player 1'] + ", " + data.game[i]['Player 2'] + ", " + data.game[i]['Player 3'] + ", " + data.game[i]['Player 4'] + ", " + data.game[i]['Player 5'] + ", " + data.game[i]['Player 6'] + ", " + data.game[i]['Player 7'] + ", " + data.game[i]['Player 8'] + "</p>"
        }
        output2+="";
        output2 = output2.replace(/, None/g, "");
        document.getElementById("gamestats").innerHTML=output2;
    });
}


// Function that renders leaderboard into a tab

function getleader() {
    var playersapi = "http://twistedtest-xleaguetest.rhcloud.com/players";
    $.getJSON (playersapi, function(data){
        var output3 = "<table><tr><th>Rank</th><th>Player</th><th>Rating</th><th>Played</th><th>Win</th><th>Loss</th></tr>";
        for (var i in data.players) {
            output3 += "<tr><td>" + data.players[i].Rank + "</td><td>" + data.players[i].Name + "</td><td>" + data.players[i].ELO + "</td><td>" + data.players[i].Played + "</td><td>" + data.players[i].W + "</td><td>" + data.players[i].L + "</td></tr>";
        }
        output3 += "</table>";
        console.log(output3);
        document.getElementById("ladder").innerHTML=output3;
    });
}


// Listerens for enter to do desired function for text inputs

function checkKey(e){
    var enterKey = 13;
    if (e.which == enterKey){
        getplayerinfo();
    }
}
function checkKey2(e){
    var enterKey = 13;
    if (e.which == enterKey){
        getgameinfo();
    }
}

// Tabs javascript, copied from internet
// Wanted: Link to ID to open header with that id

window.onload=function() {
    // Call to render leaderboard on page load
    getleader();

    // get tab container
    var container = document.getElementById("tabContainer");
    var tabcon = document.getElementById("tabscontent");
    //alert(tabcon.childNodes.item(1));
    // set current tab
    var navitem = document.getElementById("tabHeader_1");

    //store which tab we are on
    var ident = navitem.id.split("_")[1];
    //alert(ident);
    navitem.parentNode.setAttribute("data-current",ident);
    //set current tab with class of activetabheader
    navitem.setAttribute("class","tabActiveHeader");

    //hide two tab contents we don't need
    var pages = tabcon.getElementsByTagName("div");
    for (var i = 1; i < pages.length; i++) {
        pages.item(i).style.display="none";
    }
    //this adds click event to tabs
    var tabs = container.getElementsByTagName("li");
    for (var i = 0; i < tabs.length; i++) {
        tabs[i].onclick=displayPage;
    }
};
// on click of one of tabs
function displayPage() {
    var current = this.parentNode.getAttribute("data-current");
    //remove class of activetabheader and hide old contents
    document.getElementById("tabHeader_" + current).removeAttribute("class");
    document.getElementById("tabpage_" + current).style.display = "none";

    var ident = this.id.split("_")[1];
    //add class of activetabheader to new active tab and show contents
    this.setAttribute("class", "tabActiveHeader");
    document.getElementById("tabpage_" + ident).style.display = "block";
    this.parentNode.setAttribute("data-current", ident);
}