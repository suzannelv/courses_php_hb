<?php

require_once "layout/head.php";
require_once "layout/nav.php";
require_once __DIR__ . '/classes/Email.php';

if(isset($_GET['email'])) {
    $email = new Email($_GET['email']);
}
?>
<main class="prose mx-auto">
  <h1>Merci, votre email <span class="text-green-600"><?php echo $email->getEmail(); ?></span> a bien été enregistré ! </h1>
</main>

<?php
require_once "layout/foot.php";

require_once "layout/footer.php";
