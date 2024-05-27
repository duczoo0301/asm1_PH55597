<?php
include '../includes/connectDB.php';
class ProductModel {
    private $db;
    public function __construct() {
        $this->db = connectDb();
    }
    public function getAllArticle() {
        $query = "SELECT * FROM articles";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>