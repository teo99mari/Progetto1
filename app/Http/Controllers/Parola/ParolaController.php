<?php


namespace App\Http\Controllers\Parola;


class ParolaController
{
    public function vocali($parola){
        $vocali = 0;
        $parola = str_split($parola);
        foreach ($parola as $lettera){
            if($lettera == 'a' || $lettera == 'e' || $lettera == 'i' || $lettera == 'o' || $lettera == 'u'){
                $vocali++;
            }
        }return $vocali;
    }

    public function consonanti($parola){
        $consonanti = 0;
        $parola = str_split($parola);
        foreach ($parola as $lettera){
            if($lettera !== 'a' && $lettera !== 'e' && $lettera !== 'i' && $lettera !== 'o' && $lettera !== 'u'){
                $consonanti++;
            }
        }return $consonanti;
    }

    public function checkMaggiore($parola){
        $numeroVocali = $this->vocali($parola);
        $numeroConsonanti = $this->consonanti($parola);

        $risultato = 'consonanti';
        if ($numeroVocali > $numeroConsonanti){
            $risultato = 'vocali';
        }
        return $risultato;
    }
}
