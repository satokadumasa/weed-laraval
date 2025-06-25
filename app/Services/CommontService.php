<?php
namespace App\Services;
use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CommontService
{
    public static function createHash($num)
    {
        $base_string = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',0,1,2,3,4,5,6,7,8,9];

        $str = '';
        for( $i = 0; $i < $num; $i++ ) {
            $str .= $base_string[mt_rand( 0, count($base_string)-1)];
        }

        return $str;
    }
}