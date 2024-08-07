<?php

namespace App\Models;

use CodeIgniter\Model;

class temaModel extends Model
{
    protected $table = 'free_themes';
    protected $primary_key = 'id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id', 'back_color', 'back_img', 'back_grad_first', 'back_grad_second', 'back_grad_dir', 'button_color', 'button_border_color', 'button_color_hover', 'button_border_color_hover', 'button_text_style', 'button_text_color', 'button_text_color_hover', 'text_style', 'heading_text_color', 'description_text_color', 'profile_picture', 'social_icon_color', 'social_back_color'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

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
