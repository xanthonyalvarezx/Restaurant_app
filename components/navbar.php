<nav>
  <?php $page = basename($_SERVER['PHP_SELF']); ?>
  <div class="nav-inner">
    <h1>Lo bueno</h1>
    <div class="nav-links">
      <?php if ($page === "restaurant.php"): ?>
        <a class='active' href="restaurant.php">HOME</a>;
        <a href="menu.php">MENU</a>
        <a href="contact.php">CONTACT</a>
      <?php elseif ($page === "menu.php"): ?>
        <a href="restaurant.php">HOME</a>;
        <a class='active' href="menu.php">MENU</a>
        <a href="contact.php">CONTACT</a>
      <?php elseif ($page === "contact.php"): ?>
        <a href="restaurant.php">HOME</a>;
        <a href="menu.php">MENU</a>
        <a class='active' href="contact.php">CONTACT</a>
      <?php endif; ?>
    </div>
  </div>
</nav>