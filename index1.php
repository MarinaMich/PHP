<?php
$color = 'blue';
$title = 'Title';
$today = date('Y');
$menu = ['home'=>'index.php', 'archive'=> 'archive.php', 'contact'=>'contact.php'];
  
?>
<html lang="en"><head>
    <meta charset="UTF-8" http-equiv="content-type">
    <title>Title</title>
</head>
<body>
<h1 style="color: <?= $color;?>"><?= $title; ?></h1>
    <ul>
        <li><a href=<?= $menu ['home']?>>home</a></li>
        <li><a href=<?= $menu ['archive']?>>archive</a></li>
        <li><a href=<?= $menu ['contact']?>>contact</a></li>
    </ul>
    <div class="post">
        <div class="detail">
            <h2><a href="#">Nunc commodo euismod massa quis vestibulum</a></h2>
            <p class="info">posted 3 hours ago in <a href="#">general</a></p>
        </div>
        <div class="body">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
        </div>
        <div class="x"></div>
    </div>
    <div class="col">
        <h3><a href="#">Ut enim risus rhoncus</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
        <p>¬ <a href="#">read more</a></p>
    </div>
    <div class="col">
        <h3><a href="#">Ut enim risus rhoncus</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
        <p>¬ <a href="#">read more</a></p>
    </div>
    <div class="col last">
        <h3><a href="#">Ut enim risus rhoncus</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
        <p>¬ <a href="#">read more</a></p>
    </div>
    <div id="footer">
        <p>Copyright © <em>mini</em> · Design: <a href="#">...</a><span><?= $today; ?></span> </p>
    </div>



</body></html>