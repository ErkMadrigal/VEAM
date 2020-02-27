       <?php if($mostrarFooter):?>
        
</main>

    <i class="fas fa-ellipsis-v btn_menu"></i>
            
    <!--<script src="<?php echo $raizV;?>js/jquery-3.4.1.min.js"></script>-->
    <script src="<?php echo $raizV;?>js/popper.js"></script>
    <script src="<?php echo $raizV;?>js/bootstrap-material-design.js"></script>
    <script src="<?php echo $raizV;?>js/menu.js"></script>
    <script src="<?php echo $raizV;?>js/jquery-ui.js"></script>

    <?php else:?>
    
        </main>    
    </div>
    <!--<script src="<?php echo $raizV;?>js/jquery-3.4.1.min.js"></script>-->
    <script src="<?php echo $raizV;?>js/popper.js"></script>
    <script src="<?php echo $raizV;?>js/bootstrap-material-design.js"></script>
    <script src="<?php echo $raizV;?>js/Admin.js"></script>
    <script src="<?php echo $raizV;?>js/jquery-ui.js"></script>
    <script src="<?php echo $raizV;?>js/snackbar.min.js"></script>
    <script>
  $( function() {
    $( "#draggable" ).draggable();
  } );
  </script>
  
    <?php endif;?>

        
</body>
</html>