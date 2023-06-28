<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Symptomp extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'nama',
        'ket',
    ];


    public function newData($request) {
        $symptomp = Symptomp::create([
            'code'  => $request->code,
            'nama'  => $request->nama,
        ]);
        $id = $symptomp->id;
        $hepatitis_id = [1,2,3,4];
        $hepatitis_data = [
            $request->hep_a,
            $request->hep_b,
            $request->hep_c,
            $request->hep_d,
        ];
        foreach ($hepatitis_id as $h) {
            foreach ($hepatitis_data as $hd) {
                Weight::create([
                    'hepatitis_id'  => $h,
                    'symptomp_id'   => $id,
                    'bobot'         => $hd,
                ]);
            }
        }
            
        return $symptomp;
    }

}
