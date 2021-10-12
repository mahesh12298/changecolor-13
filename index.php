<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <style type="text/css">
    
    .coloredDiv {width:200px;height:200px;border:1px solid #888;}
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

</head>
  <body>
    <a href="#" class="clickMe">click me</a><br /><br />
    <div class="coloredDiv"><h3>Leoeadge</h3></div>
    <div class="coloredDiv"><h3>LeoeadgeMahesh</h3></div>
    <div class="coloredDiv"><h3>LeoeadgeHoroscope</h3></div>

  </body>
<script type="text/javascript">
 $(document).ready(function() {
     $colorDiv = $('.coloredDiv');
    $('.clickMe').toggle(
            function() {
               $colorDiv.css({
                    "background-color": "#eeeeee"
                })
            }, function() {
                $colorDiv.css({
                    "background-color": "#00ff00"
                })
            }, function() {
                $colorDiv.css({
                    "background-color": "#ff0000"
                })
            }, function() {
                $colorDiv.css({
                    "background-color": "#000000"
                })
            });
      });
</script>
</html>