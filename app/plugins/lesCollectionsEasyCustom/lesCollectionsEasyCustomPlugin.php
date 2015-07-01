<?php
/* ----------------------------------------------------------------------
 * lesCollectionsEasyCustomPlugin.php :
 * ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2014 Whirl-i-Gig
 *
 * For more information visit http://www.CollectiveAccess.org
 *
 * This program is free software; you may redistribute it and/or modify it under
 * the terms of the provided license as published by Whirl-i-Gig
 *
 * CollectiveAccess is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTIES whatsoever, including any implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 *
 * This source code is free and modifiable under the terms of 
 * GNU General Public License. (http://www.gnu.org/copyleft/gpl.html). See
 * the "license.txt" file for details, or visit the CollectiveAccess web site at
 * http://www.CollectiveAccess.org
 *
 * ----------------------------------------------------------------------
 */

class lesCollectionsEasyCustomPlugin extends BaseApplicationPlugin {
    # -------------------------------------------------------
    public function __construct($ps_plugin_path) {
        $this->description = _t('Provides lesCollectionsEasyCustom texts customization through JSON file');
        if (is_file(__CA_THEME_DIR__.'/conf/lesCollectionsEasyCustom.conf')) {
            $this->opo_config = Configuration::load(__CA_THEME_DIR__.'/conf/lesCollectionsEasyCustom.conf');
        } else {
            $this->opo_config = Configuration::load($ps_plugin_path.'/conf/lesCollectionsEasyCustom.conf');
        }
        parent::__construct();

        $this->_defineConstants();
    }
    # -------------------------------------------------------
    /**
     * Get plugin user actions
     */
    static public function getRoleActionList() {
        return array();
    }

    private function _defineConstants() {
        $vs_json_infos = file_get_contents($this->opo_config->get("lesCollectionsJsonFile",pString));
        $va_infos = json_decode($vs_json_infos);
        define("__LESCOLLECTIONS_NAME__",$va_infos->collectionname);
        define("__LESCOLLECTIONS_SUBNAME__",$va_infos->collectionsubname);
        define("__LESCOLLECTIONS_INTRO__",$va_infos->collectionintro);
        define("__LESCOLLECTIONS_LOGIN_REQUIS__",$va_infos->loginrequis);
        define("__LESCOLLECTIONS_CONTACT_INFORMATIONS__",$va_infos->contactinformations);
        // Simple constant definition function, so we return true in all cases
        return true;
    }
    # -------------------------------------------------------
}
?>