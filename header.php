

<?php
function is_active($page_name) {
  $page = basename($_SERVER['PHP_SELF']);
  if($page_name == $page) {
    return "class='active'";
  }
}
?>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://snowball.software">SN<i class="fa fa-circle" style="color:#3498db"></i>WBALL SOFTWARE</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li <?php echo is_active("index.php"); ?>><a href="http://snowball.software">HOME</a></li>
            <li <?php echo is_active("about.php"); ?>><a href="about">ABOUT</a></li>
		<li <?php echo is_active("works.php"); ?>><a href="works">THE LAB</a></li>


        <li><a data-toggle="modal" data-target="#myModal" href="#myModal"><i class="fa fa-envelope-o"></i></a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
