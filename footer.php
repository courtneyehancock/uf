<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <!--Logo/text widget-->
        <?php dynamic_sidebar('left-footer'); ?>
      </div>
      <div class="col-lg-2">
        <!--Middle Footer-->
        <?php dynamic_sidebar('middle-footer'); ?>
      </div>
      <div class="col-lg-3">
        <!--Middle Footer-->
        <?php dynamic_sidebar('middle-right-footer'); ?>
      </div>
      <div class="col-lg-3">
        <!--Middle Footer-->
        <?php dynamic_sidebar('right-footer'); ?>
      </div>
    </div>
  </div>

  <div class="container-fluid final-footer">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <p> © <?php echo date("Y"); ?> University of Florida | <a href="https://accessibility.ufl.edu/">UF Accessibility</a> | <a href="https://privacy.ufl.edu/privacy-policies-and-procedures/onlineinternet-privacy-statement/">UF Privacy Policy</a></p>
      </div>
      <div class="col-lg-2">
        <a href="https://tnt.aa.ufl.edu/" target="_blank"><img alt="UF Associate Provost Logo" src="https://pwd.aa.ufl.edu/wp-content/uploads/2026/07/UF_AssociateProvost-WHITE-1.png"></a>
      </div>
      <div class="col-lg-2">
        <a href="https://www.ufl.edu/" target="_blank"><img alt="UF Logo" src="https://pwd.aa.ufl.edu/wp-content/uploads/2021/08/UF-SVG.svg"/></a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
