<footer>
      <div class="row">
        <div class="col-sm-4 footerInfo text-center">
          <img src="https://akcdn.detik.net.id/community/media/visual/2020/09/17/logo-detiknews.png?d=1" title="DetikNews" alt="detikNews">

          <div class="sosmed">
            <p>Connect With Us</p>
            <i class="fa-brands fa-facebook fb"></i>
            <i class="fa-brands fa-facebook fb"></i>
            <i class="fa-brands fa-facebook fb"></i>
            <i class="fa-brands fa-facebook fb"></i>
            <i class="fa-brands fa-facebook fb"></i>
          </div>
        </div>

        <div class="col-sm-2 footerMenu">
          <h4>Kategori</h4>
          <ul>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
          </ul>
        </div>

        <div class="col-sm-2 footerMenu">
          <h4>Layanan</h4>
          <ul>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
          </ul>
        </div>

        <div class="col-sm-2 footerMenu">
          <h4>Informasi</h4>
          <ul>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
          </ul>
        </div>

        <div class="col-sm-2 footerMenu">
          <h4>Jaringan Media</h4>
          <ul>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
            <li>Lorem, ipsum.</li>
          </ul>
        </div>

      </div>
    </footer>


  </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  $(function() {
    $('.hamburger-button').on('click', function(event) {
      event.preventDefault();
      $(this).toggleClass('active');
      checkMenu = $('.text-menu').text();

      $('div.offcanvas-backdrop.fade.show').on('click', function() {
        $('.hamburger-button').removeClass('active');
        $('.text-menu').text('MENU');
      });

      if (checkMenu == 'MENU') {
        $('.text-menu').text('TUTUP');
      } else {
        $('.text-menu').text('MENU');
      }

    });
  });

  $('.btn-close').on('click', function() {
    $('.hamburger-button').removeClass('active');
    $('.text-menu').text('MENU');
  });
</script>

</html>
