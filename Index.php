<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="js/script.js" defer></script>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
</head>
<body>

<!-- <?php //require 'util/database.php'?> -->
<!-- <?php //while($res = $projects->fetcharray())?> -->
<div display="none" id="hiddendiv" width="0" height="0"></div>

    <?php include 'util/navbar.html';?>
    <div class="inleiding" >   
        <div>
        <h1>Over mij</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <!-- Ik ben Anne, ik ben 17 jaar en studeer op het Grafisch lyceum Rotterdam.<br>
        Ik ben een 2e jaars student en doe Software Developement.<br>
        Ik heb voor deze opleiding gekozen omdat ik interesse heb in programmeren.<br>
        Ik heb al een beetje ervaring met programmeren en ik vind het leuk om mooie en interactieve websites te maken.<br>
             -->
        </div>
        <img src="media/kanye.jpg" alt="" >
    </div>
    <div class="contact" id="Contact">
        <h1>Contact</h1>
        <form action="post" id="form1" action=”mailto:089993@glr.nl” method=”POST” enctype=”text/plain” name=”EmailForm”>
        <input type="text" id="name" name="name" id="i1" placeholder="name">
            <input type="text" name="email" placeholder="email" id="i2" id="email">
            <input type="text" name="subject" placeholder="Subject" id="i3" id="subject">
            <p>Message</p>
            <textarea name="message" id=”ContactCommentt”></textarea>
            <input type="submit" value="Send" id="button">
        </form>
    </div>
</body>
</html>