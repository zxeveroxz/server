<?= $this->extend('main') ?>

<?= $this->section('titulo'); ?>
Socios - 2023
<?= $this->endSection(); ?>

<?= $this->section('contenido'); ?>

<section class="bg-white">
    <div class="container px-2 py-0 mx-auto">

        <div class="grid grid-cols-1 gap-6 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">

            <?php
            foreach ($ROWS as $row) {
                
            ?>
                <div class="bg-slate-200 rounded-lg border-2 border-slate-800 text-black  shadow-md max-w-xs md:max-w-none overflow-hidden">
                    <img class="h-40 w-full   object-cover bg-white" src="https://www.jsjfact.com/facturador/img/logo-factura.png" alt="" />
                    <div class="p-4">
                        <span class="text-md font-bold">RUC: <?= $row->empresa_ruc ?></span>
                        <h3 class="font-semibold text-lg leading-6  my-2">
                       <?=$row->empresaInfo->empresa_razon?>
                        </h3>                       
                        <a class="mt-3 block middle none center rounded-lg bg-orange-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
    data-ripple-light="true" href="<?=base_url($row->empresa_ruc)?>">Ir Ahora >></a>
                    </div>
                </div>
            <?php
            }
            ?>

            <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">RESERVADO</h1>
                <p class="text-gray-500 dark:text-gray-300">
                    PROXIMAMENTE
                </p>
            </div>

            <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">RESERVADO</h1>
                <p class="text-gray-500 dark:text-gray-300">
                PROXIMAMENTE
                </p>
            </div>

            <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">RESERVADO</h1>
                <p class="text-gray-500 dark:text-gray-300">
                PROXIMAMENTE
                </p>
            </div>




        </div>
    </div>
</section>
<?= $this->endSection(); ?>