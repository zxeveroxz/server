<?=$this->extend('main')?>

<?=$this->section('titulo');?>
Socios - 2023
<?=$this->endSection();?>

<?=$this->section('contenido');?>

<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-0 mx-auto">

        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">

        <?php
        foreach($ROWS as $ro){
        ?>

            <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white"><?=$ro->empresa_ruc?></h1>
                <p class="text-gray-500 dark:text-gray-300">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non
                    corrupti doloribus voluptatum eveniet
                </p>                
            </div>
        <?php
        }
        ?>

            <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">elegant Dark Mode</h1>
                <p class="text-gray-500 dark:text-gray-300">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non
                    corrupti doloribus voluptatum eveniet
                </p>                
            </div>

            <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">elegant Dark Mode</h1>
                <p class="text-gray-500 dark:text-gray-300">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non
                    corrupti doloribus voluptatum eveniet
                </p>                
            </div>

            <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">elegant Dark Mode</h1>
                <p class="text-gray-500 dark:text-gray-300">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non
                    corrupti doloribus voluptatum eveniet
                </p>                
            </div>




        </div>
    </div>
</section>
<?=$this->endSection();?>