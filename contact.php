 <?php include 'contact_header.php' ?>

  <h1>Be always updated</h1>

  <!-- Form -->
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <form action = "includes/contact_form.php" method="POST" class="form-style-9">
            <ul>
              <li>
                  <input type="text" name="firstname" class="field-style field-split align-left" placeholder="Firstname" />
                  <input type="text" name="lastname" class="field-style field-split align-right" placeholder="Lastname" />
              </li>
              <li>
                  <input type="email" name="mail" class="field-style field-split align-left" placeholder="E-mail" />
                  <input type="text" name="subject" class="field-style field-split align-right" placeholder="Subject" />
              </li>
              <li>
                  <input type="text" name="message" class="field-style field-full align-none" placeholder="Message" style="height: 100px;" />
              </li>
              <li>
                  <button type="submit" name="message-submit">Send Message</button>
              </li>
            </ul>
        </form>
      </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2468.6444205239427!2d19.4878496454781!3d51.77610734747161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471bcb3c7baa9079%3A0x7bc825b22303574d!2sFaculty+of+Mathematics+and+Computer+Science%2C+University+of+Lodz!5e0!3m2!1ska!2spl!4v1553726016847!5m2!1ska!2spl" allowfullscreen></iframe>

  <div class="row">
    <div class="col-md-6 col-sm-12 address-col">
      <h2>Address: Patrice Lumumby 3, 91-404 Łódź</h3>
      <h3>Phone number: 501 789 000</h3>
      <h3>Phone number: +1-202-555-0134</h3>
      <h3>E-mail: info@gsetech.com</h3>
      <h3>Fax: 011 44 (161) 999 8888</h3>
    </div>

    <div class="col-md-12 col-sm-12 social-col">
      <a href="https://www.facebook.com/" target="_blank"><img src="img/facebook.png" class="social"></a>
      <a href="https://www.youtube.com/" target="_blank"><img src="img/youtube.png" class="social"></a>
      <a href="https://twitter.com/" target="_blank"><img src="img/twitter.png" class="social"></a>
      <a href="https://www.instagram.com/" target="_blank"><img src="img/instagram.png" class="social"></a>
    </div>
  </div>
</div>

  <?php include 'contact_footer.php' ?>
