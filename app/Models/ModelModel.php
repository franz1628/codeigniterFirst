<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'model';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['idBrand','description','state'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAllModel(){
        $builder = $this->db->table('model m');
        $builder->join("brand b","b.id = m.idBrand");
        $builder->select("m.id, m.idBrand, m.description, m.state, b.description b_description");
        $query = $builder->get();

        return $query->getResultArray();
    }
}
