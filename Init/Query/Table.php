<?php

namespace Init\Query;

class Table
{    
    protected $db;
    
    protected $table;
    
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }
    
    public function listaTodos()
    {
        $query = "SELECT * FROM {$this->table}";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        
        return $list = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    public function procuraUm($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        
        return $list = $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}