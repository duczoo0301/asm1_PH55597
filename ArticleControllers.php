<?php
include '../models/ProductModel.php';

class ArticleController {
    private $articleModel;

    public function __construct() {
        $this->articleModel = new ProductModel();
    }

    public function getArticle() {
        return $this->articleModel->getAllArticle();
    }
}
?>
