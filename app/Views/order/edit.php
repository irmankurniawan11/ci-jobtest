<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="container max-w-[960px] mx-auto my-8 text-slate-700">
    <div class="card w-full bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Edit Pengiriman Barang</h2>
            <?php if (session()->getFlashdata('errors')) : ?>
                <div class="p-4 bg-red-100 rounded-xl ring-2 ring-red-500">
                    <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                        <p>- <?= $error ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="/order/edit/<?= $order['id']; ?>" method="post">
                <?= csrf_field() ?>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Nama Barang</span>
                    </label>
                    <input type="text" placeholder="Nama" name="nama_barang" class="input input-bordered rounded-full px-6" value="<?= old('nama_barang', $order['nama_barang']) ?>" required />
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Berat Barang</span>
                    </label>
                    <input type="text" placeholder="Berat (kg)" name="berat_barang" class="input input-bordered rounded-full px-6" value="<?= old('berat_barang', $order['berat_barang']) ?>" required />
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Dimensi</span>
                    </label>
                    <div class="flex gap-4 flex-col sm:flex-row">
                        <input type="number" placeholder="Panjang (20 cm)" name="panjang_barang" class="sm:flex-1 input input-bordered rounded-full px-6" value="<?= old('panjang_barang', $order['panjang_barang']) ?>" required />
                        <input type="number" placeholder="Lebar (20 cm)" name="lebar_barang" class="sm:flex-1 input input-bordered rounded-full px-6" value="<?= old('lebar_barang', $order['lebar_barang']) ?>" required />
                        <input type="number" placeholder="Tinggi (5 cm)" name="tinggi_barang" class="sm:flex-1 input input-bordered rounded-full px-6" value="<?= old('tinggi_barang', $order['tinggi_barang']) ?>" required />
                    </div>
                </div>

                <div class="form-control mt-6">
                    <button class="btn btn-primary rounded-full">Update Barang</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>