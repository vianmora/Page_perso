<header class="header">

  <a href = "../Home/home_blog.php" >
    <h1>La vie est faite de rencontres</h1>
    <h2>blog voyage</h2>
  </a>

  <nav  class="nav nav-fill justify-content-center  align-items-center">
    <li class="nav-item">
      <a href="../../index.html" class="nav-link" title="Accueil page perso">
        <img src ="../../Assets/Images_site/home.png" alt="home" width="25px;"/>
      </a>
    </li>
    <li class="nav-item">
      <a href="../Home/blog.php" class="nav-link" <?php if(isset($active) && $active=='blog'){echo 'active';}?> >Le blog</a>
    </li>
    <li class="nav-item">
      <a href = "#" class="nav-link disabled">Thématiques</a>
    </li>
    <li class="nav-item">
      <a href = "#" class="nav-link disabled" >A propos</a>
    </li>
    <li class="nav-item">
      <a href = "../Home/contact.php" class="nav-link" >Me contacter</a>
    </li>
    <?php if(isset($_SESSION['connected'])){?>
      <li class="nav-item">
        <a href = "../Admin/deconnection.php" class="nav-link" >deconnection</a>
      </li>
      <?php  
    }
    ?>
  </nav>

</header>
