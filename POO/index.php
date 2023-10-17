<?php

require_once "classes/Car.php";
require_once "data/cars.php";
require_once "layout/head.php";
require_once "layout/nav.php";

?>


<main class="flex flex-col justify-center items-center mx-auto ">

<figure class="relative max-w-full mx-5 transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">

    <img class="rounded-lg max-w-full" src="https://img.freepik.com/photos-gratuite/voiture-luxe-garee-autoroute-phare-illumine-au-coucher-du-soleil_181624-60607.jpg?w=1380&t=st=1697189721~exp=1697190321~hmac=1f3af36f5a52c957ef374257d8bfe43a1369adb4f085f64c75b47654a3f38be6" alt="image description">
  
  <figcaption class="absolute px-4 text-lg text-white bottom-6">
      <h1 class='text-5xl text-white dark:text-white pl-20 pb-24'>您的汽车之旅，从这里开始!</h1>
   
      <a href="services.php" type="button" class="w-1/5 flex items-center justify-center mx-auto py-2.5 px-5 mr-2 mb-8 text-sm font-medium text-white focus:outline-none bg-transparent rounded-lg border border-gray-200 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Découvrir
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512" class="ml-6">
          <style>svg{fill:#ffffff}</style>
          <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/>
        </svg>
      </a>
     
  </figcaption>
</figure>



</main>




  
<?php
require_once "layout/foot.php";

require_once "layout/footer.php";
