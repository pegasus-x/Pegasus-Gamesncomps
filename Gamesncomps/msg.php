<?php
   if ( !empty( $_SESSION[ 'msg' ] ) ) {
     $errormsg = $_SESSION[ 'msg' ];
     $errorValue = $_SESSION[ 'bg_color' ];
     ?>
<script type="text/javascript">
   $.toast({
      heading: '<?=$errorValue?>',
      text: '<?=$errormsg;?>',
      icon: '<?=$errorValue?>',
      position: 'top-center',
      stack: false
   })
   
</script>
<?php
   unset( $_SESSION[ 'msg' ] );
   unset( $_SESSION[ 'bg_color' ] );
   } else {
   unset( $_SESSION[ 'msg' ] );
   unset( $_SESSION[ 'bg_color' ] );
   }
?>