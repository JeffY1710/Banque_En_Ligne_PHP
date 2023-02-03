<head>
	
</head>

<?php
if ($errors !== false) {
	echo '<p>'.$errors.'</p>';
} 
?>
<form action="/actions/login.php" method="post">
	Email : <input type="text" name="email" autocomplete="off"><br>
	Password : <input type="password" name="password" ><br>
	<button type="submit">Login</button>
</form>

<script>
    const submitButton = document.getElementById('submitButton');
    const password = document.getElementById('password');
    const passwordConfirm = document.getElementById('password');
  
    submitButton.addEventListener('click', function(event) {
      if (password.value !== passwordConfirm.value) {
        alert('Les mots de passe ne correspondent pas');
        event.preventDefault();
      }
    });
  </script>