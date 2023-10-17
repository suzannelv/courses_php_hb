<?php

require_once "layout/head.php";
require_once "layout/nav.php";
require_once __DIR__ . '/classes/EmailError.php';
$email = $Get["email"] ?? "";
$errMsg = new EmailError();
?>

<main class="flex flex-col justify-center mx-auto max-w-[600px]">
  <!-- bloc pour afficher les erreurs  -->
<?php if (isset($_GET['error'])) { ?>
            <div class="mb-3">
                <span class="text-red-500 bg-red-100 py-1 px-2">
                    <?php echo $errMsg->getErrorMessage($_GET["error"]); ?>
                </span>
            </div>
        <?php } ?>

<form action="newsletter_process.php" method="POST">
  <div class="mb-6">
    <label for="email" class="block my-8 text-3xl text-center font-bold text-gray-900 dark:text-white">Rejoignez à notre Newsletter</label>
    <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Entrer votre email..." value="<?php echo $email; ?>" required>
  </div>

  <div class="flex items-start mb-6">
    <div class="flex items-center h-5">
      <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
    </div>
    <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mémoriser</label>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Inscription</button>
</form>

    

</main>
<?php
require_once "layout/foot.php";

require_once "layout/footer.php";
