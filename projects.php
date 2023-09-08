<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecten</title>
</head>
<body>
    <?php include 'util/navbar.html'?>
    <?php require 'util/database.php'?>
    <div id="projects">
        <?php while($res = $projects->fetcharray()):?>
            <div id="project">
                <h1><?php echo $res['name']?></h1>
                <img src="<?php echo $res['img_src']?>">
                <p class="team">Teammates: <?php echo $res['teammates']?></p>
                <p><?php echo $res['info']?></p>
                <a href="<?php echo $res['link']?>"><?php echo $res['link_name']?></a>
            </div>
        <?php endwhile; ?>
    </div>
    <div id="footer">
        <a href="www.linkedin.com/in/anne-vos-b6784924b"><img src="media/linkedin.png" alt="Linkedin"></a>
        <a href="https://www.instagram.com/___ann__e/"><img src="media/insta.png" alt="instagram"></a>
        <a href="media/portfolio.pdf" id="pdf">Download portfolio.pdf</a>
        </div>
</body>
</html>