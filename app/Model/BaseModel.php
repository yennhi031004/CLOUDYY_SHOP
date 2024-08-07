<?php
namespace App\Model;
class BaseModel {
    protected $db;

    public function __construct() {
        $this->db = new Database();
    }
}