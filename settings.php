<?php
/**
 * Created by PhpStorm.
 * User: shengchanggao
 * Date: 15/11/17
 * Time: 12:32
 */

include("includes/includedFile.php");

?>
<div class="entityInfo">
    <div class="centerSection">
        <div class="userInfo">
            <h1> <?php echo $userLoggedIn->getFullName(); ?></h1>
        </div>
        <div class="userInformation">
            <button class="blackButton" onclick="openPage('updateUserDetails.php')"> USER DETAILS </button>
            <button class="blackButton" onclick="logOut()"> Log Out </button>
        </div>
    </div>
</div>
