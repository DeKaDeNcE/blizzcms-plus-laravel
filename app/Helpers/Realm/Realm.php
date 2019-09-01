<?php 

namespace App\Helpers\Realm;
 
use Illuminate\Support\Facades\DB;

class Realm {

   public static function getRealm()
   {
      return DB::connection('auth')->table('realmlist')->get();
   }

   public static function getFaction($race)
   {
      switch ($race)
      {
          case '1':
          case '3':
          case '4':
          case '7':
          case '11':
          case '22':
          case '25':
          case '29':
          case '30':
          case '34':
              return 'Alliance';
          break;
          case '2':
          case '5':
          case '6':
          case '8':
          case '9':
          case '10':
          case '26':
          case '27':
          case '28':
          case '36':
              return 'Horde';
          break;
      }
   }

   public static function moneyConversor($amount)
   {
       $gold = substr($amount, 0, -4);
       $silver = substr($amount, -4, -2);
       $copper = substr($amount, -2);

       if ($gold == 0)
           $gold = 0;

       if ($silver == 0)
           $silver = 0;

       if ($copper == 0)
           $copper = 0;

       $money = array(
           'gold' => $gold,
           'silver' => $silver,
           'copper' => $copper
       );

       return $money;
   }


}