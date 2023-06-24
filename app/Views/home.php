<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="bg-green-900 text-white flex items-center justify-center gap-4 flex-col sm:flex-row py-12 px-8">
    <div class="basis-1/2">
        <h1 class="text-6xl font-bold mb-4 leading-[4.5rem]">Barang Sampai,<br>Target Tercapai</h1>
        <p class="mb-8">Kami pastikan barang kamu sampai tujuan dan kami yakin kamu akan segera mencapai target penjualanmu. Yuk, percayakan pengirimanmu pada kami!</p>
        <a href="#" class="btn btn-large btn-primary">Daftar Sekarang</a>
    </div>
    <div>
        <img class="w-96" src="/images/box.png" alt="Box"/>
    </div>
</section>
<section class="container max-w-6xl mx-auto px-8 py-16">
    <h1 class="text-4xl font-bold mb-8 py-8 text-center">Mengapa harus kami?</h1>
    <div class="flex flex-wrap gap-8 justify-center my-16">
        <div class="flex flex-col items-center max-w-[256px] text-center">
            <div class="max-w-[196px]">
                <img src="/images/certified.png" alt=""/>
            </div>
            <h1 class="text-2xl font-bold mb-2">Terpercaya</h1>
            <p>Kami telah mengirimkan paket selama 10 tahun.</p>
        </div>
        <div class="flex flex-col items-center max-w-[256px] text-center">
            <div class="max-w-[196px]">
                <img src="/images/stopwatch.png" alt=""/>
            </div>
            <h1 class="text-2xl font-bold mb-2">Cepat</h1>
            <p>Pengiriman luar pulau sehari sampai!</p>
        </div>
        <div class="flex flex-col items-center max-w-[256px] text-center">
            <div class="max-w-[196px]">
                <img src="/images/expedition.png" alt=""/>
            </div>
            <h1 class="text-2xl font-bold mb-2">Bisa COD</h1>
            <p>Manjakan pelanggan dengan bayar di tempat.</p>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>