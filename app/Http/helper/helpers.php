<?php

use App\Models\produit;
use App\Models\chapitre;
use App\Models\examenUser;
use App\Models\formationUser;
use Illuminate\Support\Facades\Auth;

if (!function_exists('sumPrix')) {
    function sumPrix($tab)
    {

        // $total = $tab->pluck(["qte","produit.prix"]);
        // dd($total);
        //
        $total = 0;

    foreach ($tab as $item) {
        // Récupérer le produit associé à l'élément du panier
        $produit = produit::find($item->produit_id);

        if ($produit) {
            // Calculer le total en multipliant la quantité par le prix du produit
            $total += $item->qte * $produit->prix;
        }

    }
    return $total;
    }
}
if (!function_exists('generateUniqueCode')) {
    function generateUniqueCode($length = 8) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = '';

        for ($i = 0; $i < $length; $i++) {
            $code .= $characters[rand(0, strlen($characters) - 1)];
        }

        return "BAM-".$code;
    }

}
if (!function_exists('titreService')) {
    function titreService($id)
    {
        switch ($id) {
            case (1):
                return "Imprimerie";
                break;
            case (2):
                return "Communication";
                break;
            case (3):
                return "Evénementiel";
                break;
            case (4):
                return "Ventes";
                break;
        }

    }
}
if (!function_exists('checkStepForm')) {
    function checkStepForm($id)
    {
        $form = formationUser::where([["user_id", Auth::user()->id], ["formation_id", $id]])->first();
        if ($form) {
            return $form->evolution;
        } else {
            return false;
        }
    }
}
if (!function_exists('s')) {
    function s($nbr)
    {
        return $nbr > 1 ? "s" : "";
    }
}
if (!function_exists('question')) {
    function question($value, $ponderation, $name)
    {
        $ref = preg_replace('/\s+/', '', $name . $value);
        return '<input type="radio" id="' . $ref . '" name="' . $name . '" class="categories custom-radio"
                 value="' . $value . '" data-categorie="" required/>
                <label for="' . $ref . '">
                ' . $value . '
                </label>
                <span class="float-end">(' . $ponderation . ')</span><br>';
    }

}
if (!function_exists('isFinished')) {
    function isFinished($id): array
    {
        $form = formationUser::where([["user_id", Auth::user()->id], ["formation_id", $id], ["evolution", "fini"]])->first();
        if ($form) {
            $ok = examenUser::where([["user_id", Auth::user()->id], ["examens_id", $id], ["conclusion", "ok"]])->first();
            if ($ok) {
                return ["etat" => true, "niveau" => "examen"];
            } else {
                return ["etat" => false, "niveau" => "examen"];
            }
        } else {
            return ["etat" => false, "niveau" => "formation"];
        }
    }
}
if (!function_exists('siExamen')) {
    function siExamen($id)
    {
        $form = formationUser::where([["user_id", Auth::user()->id], ["formation_id", $id], ["evolution", "fini"]])->first();
        if ($form) {
            $ok = examenUser::where([["user_id", Auth::user()->id], ["examens_id", $id], ["conclusion", "ok"]])->first();
            if ($ok) {
                return ["etat" => true, "niveau" => "examen"];
            } else {
                return ["etat" => false, "niveau" => "examen"];
            }
        } else {
            return ["etat" => false, "niveau" => "formation"];
        }
    }
}
if (!function_exists('lastChapitre')) {
    function lastChapitre($id)
    {
        $last = chapitre::where("formation_id", 1)->orderBy("id", 'desc')->latest()->first();
        if ($last) {
            $ok = examenUser::where([["user_id", Auth::user()->id], ["examens_id", $id], ["conclusion", "ok"]])->first();
            if ($ok) {
                return ["etat" => true, "niveau" => "examen"];
            } else {
                return ["etat" => false, "niveau" => "examen"];
            }
        } else {
            return ["etat" => false, "niveau" => "formation"];
        }
    }
}
if (!function_exists('convertTimeToMinutes')) {
    function convertTimeToMinutes($time)
    {
        $parts = explode(':', $time);
        return ($parts[0] * 60) + $parts[1];
    }
}
