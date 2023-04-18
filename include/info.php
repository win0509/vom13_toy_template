<?php 
session_start();
//세션 존재 여부 체크
if(isset($_SESSION['userid'])){
    $userid = $_SESSION['userid'];
}else{
    $userid = "";
}


?>

<ul class="info">
    <li class="sns">
     <ul>
      <li><a href="#"><img src="images/sns-icon-1.svg" alt="instagram"></a></li>
      <li><a href="#"><img src="images/sns-icon-2.svg" alt="facebook"></a></li>
      <li><a href="#"><img src="images/sns-icon-3.svg" alt="pinterst"></a></li>
     </ul>
    </li>
    <li class="cart"><a href="#"><i class="ri-shopping-cart-line"></i><em> (0) </em></a></li>

    <?php 
    if(!$userid){?>
         <li class="user"><a href="/common_template/signin.php"><i class="ri-user-fill"></i></a></li> 
    <?php }else{ ?>
    
    <li class="loggedIn">
        <span>marshall님</span>&nbsp;|&nbsp;<a href="/common_template/php/logout.php">Logout</a>
    </li>
    <?php }?>
 </ul>