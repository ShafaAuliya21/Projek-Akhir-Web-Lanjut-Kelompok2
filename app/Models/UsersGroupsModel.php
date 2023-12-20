<?php

namespace App\Models;

use CodeIgniter\Model;
use Faker\Generator;
use Myth\Auth\Authorization\GroupModel;
use Myth\Auth\Entities\User;

/**
 * @method User|null first()
 */
class UsersGroupsModel extends Model
{
    protected $table          = 'auth_groups_users';
    protected $returnType     = 'array';
    protected $allowedFields    = ['group_id', 'user_id'];

    public function saveData($data){
        $this->insert($data);
        // dd($this->insert($data));
    }
    
    public function getGroupsUsers(){
        return $this->where('group_id', '3')->findAll();
    }

    public function getGroupsUsersAdmin(){
        return $this->where('group_id', '1')->findAll();
    }
    
    public function getGroupsUsersDosen(){
        return $this->where('group_id', '3')->findAll();
    }

    public function getGroupsUsersMahasiswa(){
        return $this->where('group_id', '2')->findAll();
    }
}