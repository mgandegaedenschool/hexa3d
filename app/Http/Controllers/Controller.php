<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function check_acess()
    {
        $cookie = null;
        foreach ($_COOKIE as $name => $value) {
            if (stripos($name, 'wordpress_logged_in_') === 0) {
                $cookie = $value;
            }
        }
        if (!$cookie) {
            abort(404);
        }

        $nickname_wp_user = explode("|", $cookie)[0];

        $id_wp_client = DB::connection('wp_rcc')->table('wp_usermeta')->where('meta_value', $nickname_wp_user)->first()->user_id;

        $wp_user = DB::connection('wp_rcc')->table('wp_users')->where('ID', $id_wp_client)->first();

        if ($wp_user) {
            $wp_client_infos = DB::connection('wp_rcc')->table('wp_usermeta')->where('user_id', $wp_user->ID)->get();

            $session_tokens = unserialize($this->searchRecursiveByValueKey($wp_client_infos, 'meta_key', 'session_tokens', 'meta_value'));

            if (!$session_tokens) {
                return abort(404);
            }

            $expiration = date("Y-m-d h:i:s", array_values($session_tokens)[array_key_last(array_values($session_tokens))]['expiration']);
            $now = date("Y-m-d h:i:s");
            
            if ($expiration < $now) {
                return abort(404);
            }

            return [
                'id' => $wp_user->ID,
                'nickname' => $nickname_wp_user,
                'firstname' => $this->searchRecursiveByValueKey($wp_client_infos, 'meta_key', 'first_name', 'meta_value'),
                'lastname' => $this->searchRecursiveByValueKey($wp_client_infos, 'meta_key', 'last_name', 'meta_value'),
                'count_test' => 1,
            ];
        } else {
            return abort(404);
        }
    }

    protected function searchRecursiveByValueKey($array, $key, $value, $where) {
        foreach ($array as $keyVal => $val) {
            if ($val->{$key} === $value) {
                return $array[$keyVal]->{$where};
            }
        }
        return null;
    }
}
