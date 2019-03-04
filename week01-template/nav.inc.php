<?php 
    $page = $_SERVER['SCRIPT_NAME'];
    echo $page;
?>

<ul>
    <li class="<?php if($page1 == 'Home'){ echo 'active';} ?>"><a href="index.php">Home</a></li>
    <li class="<?php if($page1 == 'About'){ echo 'active';} ?>"><a href="contact.php">Contact</a></li>
</ul>