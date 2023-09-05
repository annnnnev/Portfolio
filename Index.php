<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="js/script.js" defer></script>
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
        </div>
        <img src="media/kanye.jpg" alt="" >
    </div>
    <div class="contact" id="Contact">
        <h1>Contact</h1>
        <form action="post" id="form1">
        <input type="text" name="name" placeholder="Name" id="i1">
            <input type="text" name="email" placeholder="Email" id="i2">
            <input type="text" name="subject" placeholder="Subject" id="i3">
            <p>Message</p>
            <textarea name="message" ></textarea>
            <input type="submit" value="Send" id="button">
        </form>
    </div>
</body>
</html>

