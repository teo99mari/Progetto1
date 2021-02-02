<?php


namespace App\Http\Controllers\Person;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UpdateController
{
    public function run(Request $req)
    {
        $validatedData = $req->validate([
            'id' => ['required', 'max:255']
        ]);

        $fields = ['nome', 'cognome', 'eta', 'altezzaInMetri', 'profilo'];

        var_dump($req->post());die();
        $userId = $req->post('id');
        $user = User::findOrFail($userId);  //user da modificare

        foreach($fields as $field) {
            if(!empty($req->post($field))){
                $user->$field = $req->post($field);
            }
        }

        if($user->save())
            return ['result' => 'ok'];
    }
}
