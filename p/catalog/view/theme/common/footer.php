<?php 
  if(isset($script)){
  foreach ($script as $key => $value) { 
?>
  <script src="<?php echo MURL.$value;?>"></script>
<?php } } ?>
  <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="633964980014240"
  theme_color="#0084ff"
  logged_in_greeting="สวัสดี มีอะไรให้เราช่วยเหลือ สามารถพิมพ์ไว้ได้เลย?"
  logged_out_greeting="สวัสดี มีอะไรให้เราช่วยเหลือ สามารถพิมพ์ไว้ได้เลย?"
  minimized="true"
  >
      </div>
</body>

</html>