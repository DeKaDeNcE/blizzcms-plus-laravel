<?php 

namespace App\Helpers\BGameAccount;
 
use Illuminate\Support\Facades\DB;

class BGameAccount
{
    public static function getExpansionACCs($expansion)
    {
        switch($expansion)
        {
            case '1': // Vanilla
                getEmulator($expansion);
            break;
            case '2': // TBC
                getEmulator($expansion);
            break;
            case '3': // WTLK
                getEmulator($expansion);
            break;
            case '4': // CATA
                getEmulator($expansion);
            break;
            case '5': // Mist of Pandaria
                getEmulator($expansion);
            break;
            case '6': // Warlords of Draenor
                getEmulator($expansion);
            break;
            case '7': // LEGIO
                getEmulator($expansion);
            break;
            case '8': // Battle for Azeroth
                getEmulator($expansion);
            break;
        };
    }

    public static function getEmulator($expansion)
    {
        $dbEmulator = DB::connection('website')->table('realms')->where('id_expansion', $expansion)->first();
        /*
        switch($dbEmulator->emulator)
        {
            case 'Mangos':
                // MancosCore::getMangos($expansion, $dbEmulator->emulator);
            break;


            case 'Trinity'
                // TrinityCore::getTrinity($expansion, $dbEmulator->emulator);
            break;
        }
        */
    }
}

