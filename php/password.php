<?php

$password;
$nb1 = random_int(1, 9);
$nb2 = random_int(1, 9);
$nb3 = random_int(1, 9);
$nb4 = random_int(1, 9);
$nb5 = random_int(1, 9);

if ($passqord == null) {
$password = $nb1 . $nb2 . $nb3 . $nb4 . $nb5;
};

if ($POST['password'] == $password) {

    echo 'xD';
} else {

    echo 'lol';
}

?>




<tr>
  <td> <label for="passwordInput" class="champsObligatoires"> 
        <img src="Images/codeSecurite/image<?php echo $nb1; ?>.JPG"/> 
        <img src="Images/codeSecurite/image<?php echo $nb2; ?>.JPG"/> 
        <img src="Images/codeSecurite/image<?php echo $nb3; ?>.JPG"/> 
        <img src="Images/codeSecurite/image<?php echo $nb4; ?>.JPG"/>  
        <img src="Images/codeSecurite/image<?php echo $nb5; ?>.JPG"/> :
      </label>  </td>

  <td> <input id="passwordInput"  name="password" type="text" required/> </td>
</tr>