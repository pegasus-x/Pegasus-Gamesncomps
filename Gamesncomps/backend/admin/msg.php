<?php 
  if (!empty($_SESSION['msg'])) {
    $msg = $_SESSION['msg'];
    $bg_color = $_SESSION['bg_color'];  //   IHA PE JO V AA SAKTA HE 

 ?>
<div class="alert alert-<?=$bg_color;?> show" id="msg" role="alert">
  <strong><?=$msg;?></strong> 
       <button type="button" class="close text-dark" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

</div>
<?php 
  unset($_SESSION['msg']);
  unset($_SESSION['bg_color']);

}else{
    unset($_SESSION['msg']);
  unset($_SESSION['bg_color']);
}
?>

<script>
    $(document).ready(function() {
      $("#msg").delay(5000).slideUp();
    })
</script>