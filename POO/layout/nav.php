<?php
require_once __DIR__ . "./../classes/MenuItem.php";
$menuItems = [
    new MenuItem("index.php", "Accueil"),
    new MenuItem("about.php", "A propos"),
    new MenuItem("services.php", "Services"),
];

?>

<nav class="bg-white border-gray-200 dark:border-gray-600 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="index.php" class="flex items-center">
            <img src="https://img.freepik.com/vecteurs-libre/modele-logo-meubles-minimalistes_23-2148467766.jpg?w=1060&t=st=1697203115~exp=1697203715~hmac=ea53e9aaec8ae39997c91f72d7bf133427509d325994bae7b34e2996fd9ca9fd" class="h-20 mr-3" alt="Logo" />
            <span class="self-center tsxt-2xl font-bold whitespace-nowrap dark:text-white">ECOCAR</span>
        </a>
        <button data-collapse-toggle="mega-menu-full-image" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu-full-image" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div id="mega-menu-full-image" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">

            <?php
               foreach($menuItems as $item) { ?>
                <li>
                    <a href="<?php echo $item->getUrl() ?>" class="block py-2 pl-3 pr-4 rounded md:p-0 <?php echo $item->getCssClasses() ?>"><?php echo $item->getLabel();  ?></a>
                </li>
             <?php } ?>
            </ul>
        </div>
    </div>
</nav>