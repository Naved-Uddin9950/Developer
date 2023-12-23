<style>
  footer {
    background-color: #12517e;
    font-size: 18px;
    color: rgb(255 255 255 / 50%);
    display: flex;
    justify-content: space-around;
  }

  .links {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  h5 {
    text-align: start;
  }

  ul {
    list-style: none;
  }

  .categories{
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .categories ul{
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .nav-link{
    padding: 0;
  }
  .adress{
    width: 25%;
  }

  .links a{
    color: rgb(255 255 255 / 50%);
    text-decoration: none;
  }

  :hover .links a{
    color: rgb(255 255 255 / 50%);
    text-decoration: none;
    
  }

  .links ul{
    display: flex;
    flex-direction: column;
    gap: 10px;
  }
  .categories ul li  a{
    color: rgb(255 255 255 / 50%);
  }
</style>

<footer class="py-5 ">
  <!-- <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; NewPortal <?php echo date('Y'); ?></p>
      </div> -->

  <div class="adress">
    <h5>Adress</h5>
    <p>Agrasen Katla, Maharaja Agrasen Marg, Agra Rd, Jaipur, Rajasthan 302003 
    </p>
    <p>Contact - 556-6586-55</p>
  </div>
  <div class="links">
    <h5>Links</h5>
    <ul>
      <li> <a href="https://www.instagram.com/_n_a_v_e_d_99/" target="_blank">  <i class="fa-brands fa-instagram"></i> <span>Instagram </span></a> </li>
      <li> <a href="https://wa.me/917791067072" target="_blank">  <i class="fa-brands fa-whatsapp"></i> <span>WhatApp</span></a> </li>
      <li> <a href="https://www.linkedin.com/in/naved-uddin-800241195/" target="_blank">  <i class="fa-brands fa-facebook"></i> <span>LinkedIn</span></a> </li>
      <li> <a href="https://github.com/Naved-Uddin9950/Developer/tree/main" target="_blank"> <i class="fa-brands fa-github"></i> <span>GitHub</span> </a> </li>
    </ul>
  </div>
  <div class="categories">
    <h5>Sitemap</h5>
    <ul>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about-us.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact-us.php">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin/">Admin</a>
      </li>
    </ul>
  </div>
  <!-- /.container -->
</footer>