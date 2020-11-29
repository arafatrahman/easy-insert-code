<?php

class wpic_setting {

    const WPIC_SETTINGS = 'kau_wpic_settings';

    public static function saveWpic($value) {
        update_option(self::WPIC_SETTINGS, json_encode($value));
    }

    public static function getWpic() {

        $getWpic = json_decode(get_option(self::WPIC_SETTINGS), true);
        if (is_array($getWpic)) {
            return $getWpic;
        }
        return false;
    }

}
