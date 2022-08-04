<footer>
  <div class="container pb-5">
    <div class="row">
      <div class="col-lg-9">
        <!--Logo/text widget-->
        <?php dynamic_sidebar('left-footer'); ?>
      </div>
      <div class="col-lg-3">
        <!--Middle Footer-->
        <?php dynamic_sidebar('middle-footer'); ?>
      </div>
    </div>
  </div>

  <div class="container-fluid final-footer">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <p> © <?php echo date("Y"); ?> University of Florida Professional and Workforce Development | <a href="https://pwd.aa.ufl.edu/website-feedback/">Website Feedback</a> | <a href="https://privacy.ufl.edu/privacy-policies-and-procedures/onlineinternet-privacy-statement/">UF Privacy Policy</a></p>
      </div>
      <div class="col-lg-2">
        <a href="https://pwd.aa.ufl.edu/" target="_blank"><img alt="PWD Logo" src="https://pwd.aa.ufl.edu/wp-content/uploads/2020/07/pwd-white.png"></a>
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
