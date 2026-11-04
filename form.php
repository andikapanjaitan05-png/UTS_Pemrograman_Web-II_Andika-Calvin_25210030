<?php $isEdit = !empty($product); ?>
<h3><?= $isEdit ? 'Edit Produk' : 'Tambah Produk' ?></h3>
<form action="<?= $isEdit ? '/admin/products/update' : '/admin/products/store' ?>" method="POST"
      class="card card-body" style="max-width:520px">
    <?php if ($isEdit): ?>
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
    <?php endif; ?>

    <label class="form-label">Nama Barang</label>
    <input type="text" name="name" class="form-control mb-3" required
           value="<?= htmlspecialchars($product['name'] ?? '') ?>">

    <label class="form-label">Harga</label>
    <input type="number" name="price" class="form-control mb-3" required min="0"
           value="<?= $product['price'] ?? '' ?>">

    <label class="form-label">Stok</label>
    <input type="number" name="stock" class="form-control mb-3" required min="0"
           value="<?= $product['stock'] ?? '' ?>">

    <label class="form-label">Kategori</label>
    <select name="category_id" class="form-select mb-3">
        <?php foreach ($categories as $c): ?>
            <option value="<?= $c['id'] ?>"
                <?= ($product['category_id'] ?? '') == $c['id'] ? 'selected' : '' ?>>
                <?= htmlspecialchars($c['name']) ?>
            </option>
        <?php endforeach; ?>
    </select>

    <div>
        <button class="btn btn-primary">Simpan</button>
        <a href="/admin" class="btn btn-secondary">Batal</a>
    </div>
</form>