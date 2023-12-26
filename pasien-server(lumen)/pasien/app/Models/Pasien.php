<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model{
    protected $table = "pasien";
    protected $primaryKey = "id_pasien";
    public $timestamps = false;
    protected $fillable = ['nama','tgl_lahir','jk','no_rm','rp'];
    protected $hidden = [];
}
?>