<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Realm extends Model
{
    public $timestamps     = false;
    protected $connection  = 'website';
    protected $table       = 'realms';

    public static function getRealms()
    {
        return Realm::select('*')->orderBy('id', 'desc')->get();
    }

    public static function checkStatus($realmid)
    {
        $ip = Realm::select('hostname')->where('id', $realmid)->first();
        $port = Realm::select('port')->where('id', $realmid)->first();

        error_reporting(0);
        $fp = fsockopen($ip->hostname, $port->port, $errno, $errstr, null);
        if (!$fp) {
            return false;
        } else {
            return true;
            fclose($fp);
        }
    }
}
