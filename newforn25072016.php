<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title></title>
  </head>
  <body>
    <!-- Easy Forms -->
  <div id="c2">
      Fill out my <a href="http://easyforms.phplocal/app/form?id=2">online form</a>.
  </div>
  <script type="text/javascript">
      (function(d, t) {
          var s = d.createElement(t), options = {
              'id': 2,
              'container': 'c2',
              'height': '81px',
              'form': '//easyforms.phplocal/app/embed'
          };
          s.type= 'text/javascript';
          s.src = 'http://easyforms.phplocal/static_files/js/form.widget.js';
          s.onload = s.onreadystatechange = function() {
              var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
              try { (new EasyForms()).initialize(options).display() } catch (e) { }
          };
          var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
      })(document, 'script');
  </script>
  <!-- End Easy Forms -->
  </body>
</html>
