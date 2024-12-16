<?php
session_start();
require_once 'config/database.php';
require_once 'controllers/PinjamanController.php';
require_once 'controllers/Controller.php';

class peminjaman_model{

    private $table = 'peminjaman';
    private $db;

    public function __construct()
    {
        $this->db = new PinjamanController;
    }
    public function getAllPinjaman()
    {
        $this->db->query('SELECT * FROM' . $this->table);
        return $this->db->resultSet();
    }
}