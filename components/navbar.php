<nav>
  <?php $page = basename($_SERVER['PHP_SELF']); ?>
  <div class="nav-inner">
    <h1>Lo bueno</h1>
    <div class="nav-links">
      <a <?php if (!empty($page) && $page === 'restaurant.php'): ?> class='active' <?php endif ?> href="restaurant.php">HOME</a>;
      <a <?php if (!empty($page) && $page === 'menu.php'): ?> class='active' <?php endif ?> href="menu.php">MENU</a>
      <a <?php if (!empty($page) && $page === 'contact.php'): ?> class='active' <?php endif ?> href="contact.php">CONTACT</a>
    </div>
  </div>
</nav>