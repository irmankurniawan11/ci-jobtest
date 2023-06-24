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
                <h3 class="font-bold text-2xl mb-4">Daftar Pengiriman Barang</h3>
                <a href="/order/add" class="btn btn-primary">Kirimkan Barang Baru</a>
            </div>

            <?php if(count($orders)>0) : ?>

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
                            <?php $i = 1; ?>
                            <?php foreach ($orders as $order) : ?>
                                <tr>
                                    <th scope="row"><?= $i++ ?></th>
                                    <td><?= $order['nama_barang']; ?></td>
                                    <td><?= $order['berat_barang']; ?></td>
                                    <td><?= $order['panjang_barang']; ?></td>
                                    <td><?= $order['lebar_barang']; ?></td>
                                    <td><?= $order['tinggi_barang']; ?></td>
                                    <td><?= $order['status']; ?></td>
                                    <td>
                                        <a href="/order/edit/<?= $order['id']; ?>" class="btn btn-warning btn-small">Edit</a>
                                        <form class="inline" action="/order/delete/<?= $order['id']; ?>" method="post">
                                        <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button  class="btn btn-error" onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <?php else : ?>
                <div class="py-16 text-center">
                    <h1 class="font-bold text-2xl mb-2">Tidak ada barang</h1>
                    <p class="mb-4">Kamu tidak memiliki barang baru untuk dikirimkan.</p>
                    <a href="/order/add" class="btn btn-primary">Tambah Barang</a>
                </div>
            <?php endif ?>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>