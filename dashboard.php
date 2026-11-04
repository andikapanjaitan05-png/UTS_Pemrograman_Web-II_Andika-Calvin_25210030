<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Dashboard Admin <small class="text-muted">(<?= count($products) ?> produk)</small></h3>
    <a href="/admin/products/create" class="btn btn-primary">+ Tambah Produk</a>
</div>
<table class="table table-striped table-bordered bg-white">
    <thead class="table-dark">
        <tr>
            <th>No</th><th>Nama Barang</th><th>Kategori</th>
            <th>Harga</th><th>Stok</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $i => $p): ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= htmlspecialchars($p['name']) ?></td>
            <td><?= htmlspecialchars($p['category_name'] ?? '-') ?></td>
            <td>Rp <?= number_format($p['price'], 0, ',', '.') ?></td>
            <td><?= (int) $p['stock'] ?></td>
            <td>
                <a href="/admin/products/edit?id=<?= $p['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                <form action="/admin/products/delete" method="POST" class="d-inline"
                      onsubmit="return confirm('Hapus produk ini?')">
                    <input type="hidden" name="id" value="<?= $p['id'] ?>">
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>