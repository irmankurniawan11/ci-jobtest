<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="container max-w-[960px] mx-auto my-8 text-slate-700">
    <div class="card w-full bg-base-100 shadow-xl">
        <div class="card-body">
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="p-4 bg-green-100 rounded-xl ring-2 ring-green-500">
                    <p><?= session()->getFlashdata('success') ?></p>
                </div>
            <?php endif ?>
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="p-4 bg-red-100 rounded-xl ring-2 ring-red-500">
                    <p><?= session()->getFlashdata('error') ?></p>
                </div>
            <?php endif ?>
            <h1 class="font-bold text-4xl mb-4">Hello, <?= session()->get('name'); ?>!</h1>
            <div class="flex items-center justify-between">
                <h3 class="font-bold text-2xl mb-4">Daftar Pemesananmu</h3>
                <a href="/order/add" class="btn btn-primary">Place New Order</a>
            </div>
            <div class="">
                <div class="overflow-x-auto">
                    <table class="table">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nama Barang</th>
                                <th>Berat</th>
                                <th>Panjang</th>
                                <th>Lebar</th>
                                <th>Tinggi</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            <tr>
                                <th>1</th>
                                <td>Barang X</td>
                                <td>2 kg</td>
                                <td>20 cm</td>
                                <td>20 cm</td>
                                <td>5 cm</td>
                                <td>Sedang dijemput</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-small">Edit</a>
                                    <a href="#" class="btn btn-error btn-small">Cancel</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>