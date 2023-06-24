<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="container max-w-[960px] mx-auto my-8 text-slate-700">
    <div class="card w-full bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Tambah Pemesanan</h2>
            <?php if (session()->getFlashdata('errors')) : ?>
                <div class="p-4 bg-red-100 rounded-xl ring-2 ring-red-500">
                    <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                        <p>- <?= $error ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="<?= base_url('order/add') ?>" method="post">
                <?= csrf_field() ?>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Nama Barang</span>
                    </label>
                    <input type="text" placeholder="Nama" name="nama_barang" class="input input-bordered rounded-full px-6" value="<?= old('nama_barang') ?>" required />
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Berat Barang</span>
                    </label>
                    <input type="text" placeholder="Berat (kg)" name="berat_barang" class="input input-bordered rounded-full px-6" value="<?= old('berat_barang') ?>" required />
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Dimensi</span>
                    </label>
                    <div class="flex gap-4 flex-col sm:flex-row">
                        <input type="number" placeholder="Panjang (20 cm)" name="pjg_barang" class="sm:flex-1 input input-bordered rounded-full px-6" value="<?= old('pjg_barang') ?>" required />
                        <input type="number" placeholder="Lebar (20 cm)" name="lbr_barang" class="sm:flex-1 input input-bordered rounded-full px-6" value="<?= old('lbr_barang') ?>" required />
                        <input type="number" placeholder="Tinggi (5 cm)" name="tgi_barang" class="sm:flex-1 input input-bordered rounded-full px-6" value="<?= old('tgi_barang') ?>" required />
                    </div>
                </div>

                <div class="form-control mt-6">
                    <button class="btn btn-primary rounded-full">Place Order</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>