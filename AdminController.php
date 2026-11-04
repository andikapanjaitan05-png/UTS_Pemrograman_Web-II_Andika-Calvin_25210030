<?php

class AdminController
{
    private $pdo;
    private $model;

    public function __construct()
    {
        if (empty($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }

        require_once __DIR__ . '/../models/Product.php';
        require_once __DIR__ . '/../../config/database.php';

        $this->pdo   = $pdo;
        $this->model = new Product($pdo);
    }

    private function render($view, $data = [])
    {
        extract($data);
        ob_start();
        require __DIR__ . '/../../views/admin/' . $view . '.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../views/layouts/admin.php';
    }

    private function categories()
    {
        return $this->pdo->query("SELECT id, name FROM categories")->fetchAll(PDO::FETCH_ASSOC);
    }

    private function input()
    {
        return [
            'name'        => trim($_POST['name'] ?? ''),
            'price'       => (float) ($_POST['price'] ?? 0),
            'stock'       => (int) ($_POST['stock'] ?? 0),
            'category_id' => (int) ($_POST['category_id'] ?? 1),
        ];
    }

    public function dashboard()
    {
        $this->render('dashboard', ['products' => $this->model->all()]);
    }

    public function create()
    {
        $this->render('form', ['product' => null, 'categories' => $this->categories()]);
    }

    public function store()
    {
        $d = $this->input();
        if ($d['name'] !== '') {
            $this->model->create($d);
            $_SESSION['flash'] = 'Produk berhasil ditambahkan.';
        }
        header('Location: /admin');
        exit;
    }

    public function edit()
    {
        $product = $this->model->find((int) ($_GET['id'] ?? 0));
        if (!$product) {
            header('Location: /admin');
            exit;
        }
        $this->render('form', ['product' => $product, 'categories' => $this->categories()]);
    }

    public function update()
    {
        $id = (int) ($_POST['id'] ?? 0);
        $this->model->update($id, $this->input());
        $_SESSION['flash'] = 'Produk berhasil diperbarui.';
        header('Location: /admin');
        exit;
    }

    public function delete()
    {
        $this->model->delete((int) ($_POST['id'] ?? 0));
        $_SESSION['flash'] = 'Produk berhasil dihapus.';
        header('Location: /admin');
        exit;
    }
}