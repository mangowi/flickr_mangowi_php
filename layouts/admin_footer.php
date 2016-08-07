    </div>
    <div id="footer">Copyright <?php echo date("Y", time()); ?>, Daniel Mangowi</div>
  </body>
</html>
<?php if(isset($database)) { $database->close_connection(); } ?>