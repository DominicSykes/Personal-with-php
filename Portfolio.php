<!DOCTYPE html>
	<!--Navigation-->
<html>
<head>
    <link rel="stylesheet" href="./CSS/Style.css">
</head>
<header>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <head>
        <img src="./Images/DOMtek.jpg" height="100px" width="100px" />
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="About.html" target="_blank">About Me</a>
            <a href="Portfolio.html" target="_blank">Portfolio</a>
            <a href="mailto:dominicsykedelics@gmail.com" style="color:white">Contact</a>
        </div>
        </ul>
        <span style="float:right; font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
    </head>

</header>
<body>

    <a href="Index.html" target="_blank" style="color:black">Dominic.Sykes</a>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>


    <!-- MAIN (Center website) -->
    <div class="main">
        <center>


            <?php PORTFOLIO ?>
        </center>
        <?php My portfolio showcasing what I have done thus far. (I will be putting it in a table format so you can click the links!) ?>
        <table style="width:100%">
            <tr>
                <td>Website</td>
                <td><a href="Index.html" style="color:black" target="_blank" style="color:black">Index</a></td>
            </tr>
            <tr>
                <td>PC Components</td>
                <td><a href="https://drive.google.com/drive/folders/1--69nek3aYBd4sqWdloQHL35JZrvVEvB?usp=sharing" target="_blank" style="color:black">My computer components</td>
            </tr>
            <tr>
                <td>Resume</a></td>
                <td><a href="Resume-Dominic-Sykes.pdf" target="_blank" style="color:black">Resume</td>
            </tr>
        </table>
        <br><br>
        <!-- END MAIN -->
    </div>

    <? php
    The computer I had to work on for school, I get to keep and my plan is to make that my workstation pc. There is no a reason to really "game and stream" on it. 
    ?>
    <center>
        <footer>
            <br /><b>
                <br /><br /> <br /><br /><br />
                <center>      _______________________________________________________________________________________________________________________________________________ </center>
            </b>
            <br />
            <br />        <center>
                <!--Socials-->
                <a href="https://www.facebook.com/Dominic-Sykes-101350095333147" target="_blank"> <img src="./Images/Facebook.jpg" alt="Facebook" style="width:42px;height:42px;"></a>
                <a href="https://www.Twitter.com/Dominic_Sykes1" target="_blank"><img src="./Images/Twitter.jpg" alt="Twitter" style="width:42px;height:42px;"></a>
                <a href="https://www.Instagram.com/Dominic_Sykes1" target="_blank"> <img src="./Images/Instagram.jpg" alt="Instagram" style="width:42px;height:42px;"></a>
                <a href="https://www.Github.com/DominicSykes" target="_blank">  <img src="./Images/Github.jpg" alt="Facebook.jpg" style="width:42px;height:42px;"></a>
                <a href="https://www.youtube.com/channel/UCWKOEpPyqZIKFZAdF2IpwPw" target="_blank"><img src="./Images/Youtube.jpg" alt="Youtube" style="width:42px;height:42px;"></a>
        </footer>
    </center>
    <!--I put the social links up at the top because When I tried putting them at the bottom they interfere
    with the other texts-->
    </center>
</body>
</html>
