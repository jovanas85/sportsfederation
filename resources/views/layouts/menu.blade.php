<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<header id="header">

    <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    </script>

    <div class="topnav" id="myTopnav">
        <a href="/" class="active">Home</a>
        <a href="/clubs">Clubs</a>
        <a href="/staff">Staff</a>
        <a href="/selection">Selection</a>
        <a href="/event">Event</a>
        <a href="/players">Players</a>
        <a href="/games">Games</a>
        <a id="navbarDropdown" style="margin-left:49%" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Jelena <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="http://localhost:8000/logout"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

        <a class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>



</header>
<!--

<ul id="menu">
    <li><a href="/" class="myButton">Početna stranica</a></li>
    <li><a href="/clubs" class="myButton">Clubs</a></li>
    <li><a href="/selection" class="myButton">Selections</a></li>
    <li><a href="/event" class="myButton">Event</a></li>
    <li><a href="/games" class="myButton">Games</a></li>
    <li><a href="/playersInfo/players" class="myButton">Player info</a></li>

</ul>
<button></button>

 -->