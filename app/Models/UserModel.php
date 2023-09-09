<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'UserOrder';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['tanggal', 'kodebarang','qty','beratsatuan','berattotal', 'lokasipltu','hargasatuan','jumlahharga','keagen','dariagen','ups','sampaikantor','tanggalpengiriman','pembayaran'];
    
    public function search ($keyword){
        return $this -> table("UserOrder")->like("kodebarang",$keyword)->orlike("lokasipltu",$keyword);
    }

    public function alldata()
   {
    return $this->db->table('UserOrder')->post()->getResultArray();
   }

   public function add($order)
   {
    $this->db->table('UserOrder')->insert($order);
   }

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


     
}

