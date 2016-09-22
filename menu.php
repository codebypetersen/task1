<h1> First Task </h1>

<?php $curpage= basename($_SERVER['PHP_SELF'])?>

<nav>
<ul>
<li><a href="page1.php" <?php if($curpage=='page1.php') {echo 'class="active"';}?>>page 1</a></li>
<li><a href="page2.php" <?php if($curpage=='page2.php') {echo 'class="active"';}?>>page 2</a></li>
<li><a href="page3.php" <?php if($curpage=='page3.php') {echo 'class="active"';}?>>page 3</a></li>
</ul>
</nav>