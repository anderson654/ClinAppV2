<?php

namespace App\Models\Utils;

class BootUtils
{
    public static function setDefaultNames($paramns, $message)
    {
        $finalMessage = $message;
        $util = new Self();
        foreach ($paramns as $key => $value) {
            # code...
            $finalMessage = $util->setParan($key, $value, $finalMessage);
        }

        return str_replace('\n', "\n", $finalMessage);
    }

    public function setParan($key, $value, $message)
    {
        switch ($key) {
            case 'name_client':
                return str_replace("[NAME_CLIENT]", $value, $message);
            case 'name_professional':
                # code...
                return str_replace("[NAME_PROFESSIONAL]", $value, $message);
            default:
                # code...
                break;
        }
    }
}
