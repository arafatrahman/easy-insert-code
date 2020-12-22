<?php

class EIC_setting {

    const EIC_settingS = 'kau_EIC_settings';

    public static function saveEic($value) {
        update_option(self::EIC_settingS, json_encode($value));
    }

    public static function getEic() {

        $getWpic = json_decode(get_option(self::EIC_settingS), true);
        if (is_array($getWpic)) {
            return $getWpic;
        }
        return false;
    }
    

}
