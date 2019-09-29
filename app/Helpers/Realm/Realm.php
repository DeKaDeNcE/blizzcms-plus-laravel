<?php 

namespace App\Helpers\Realm;
 
use Illuminate\Support\Facades\DB;

class Realm {

   public static function getRealm()
   {
      return DB::table('realms')->get();
   }

   public static function getRealmHost($MultiRealm)
   {
      $host = DB::connection('auth')->table('realmlist')->where('id', $MultiRealm)->first();

      return $host->address;
   }

   public static function getRealmPort($MultiRealm)
   {
        $port1 = DB::connection('auth')->table('realmlist')->where('id', $MultiRealm)->first();

        return $port1->port;
   }

   public static function getRealmName($MultiRealm)
   {
      $name = DB::connection('auth')->table('realmlist')->where('id', $MultiRealm)->first();

      return $name->name;
   }

   public static function getRealmStatus($MultiRealm)
   {
       $port = Realm::getRealmPort($MultiRealm);
       $host = Realm::getRealmHost($MultiRealm);

       error_reporting(0);
       $etat = fsockopen($host,$port,$errno,$errstr,3);

       if (!$etat)
           return false;
       else
           return true;
   }

   public function getCharactersOnlineAlliance($multiRealm)
   {
       $races = array('1','3','4','7','11','22','25');

       $qq = DB::connection('auth')->table('realmlist')->where('id', $MultiRealm)->first();

       if($qq->num_rows())
           return $qq->num_rows();
       else
           return '0';
   }

   public function getCharactersOnlineHorde($multiRealm)
   {
       $races = array('2','5','6','8','10','9','26');

       $qq = DB::connection('auth')->table('realmlist')->where('id', $MultiRealm)->first();

       if($qq->num_rows())
           return $qq->num_rows();
       else
           return '0';
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

       $money2 = array(
           'gold' => $gold,
           'silver' => $silver,
           'copper' => $copper
       );

       return $money2;
   }


}