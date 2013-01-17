<?php

class InsideManualAdmin extends ModelAdmin {
    
    static $managed_models = array('InsideManualChapter');
    
    static $url_segment = 'manual';
    
    static $menu_icon = 'InsideManual/images/menu-icon.png';
    
    static $menu_priority = -1;
    
}
