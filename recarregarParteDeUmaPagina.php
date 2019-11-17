<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>



<div id="recarregar"></div>
<div id="time">
<?php echo date("H:i:s") ?> 
</div>


  <script>
setInterval(function(){
    $("#recarregar").load( location.href+"#time" )
}, 5000);



  </script>