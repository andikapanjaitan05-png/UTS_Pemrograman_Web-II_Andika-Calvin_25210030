<?php

class ProductController
{
    public function index()
    {
        require_once __DIR__ . '/../middleware/AuthMiddleware.php';
        AuthMiddleware::handle();

        require_once __DIR__ . '/../models/Product.php';
        require_once __DIR__ . '/../../config/database.php';

        $product  = new Product($pdo);
        $products = $product->all();

        $title = 'Produk - mY Store';

        ob_start();
        require __DIR__ . '/../../views/pages/products/index.php';
        $content = ob_get_clean();

        require __DIR__ . '/../../views/layouts/main.php';
    }
}