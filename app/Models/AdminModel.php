<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class AdminModel extends Model
{
    use HasFactory;

    protected $table = "user";
    protected $primaryKey = "id_user";
    protected $fillable = ["username","password","nama","no","foto"];

    public function CheckLoginAdmin($username,$password){
        $data_user = $this->where("username",$username)->get();

        if(count($data_user) == 1){
            if (Hash::check($password,$data_user[0]->password)){
                unset($data_user[0]->password);
                return $data_user[0];
    }
}
return false;
}
}
