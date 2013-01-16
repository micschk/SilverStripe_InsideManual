<?php

class PagetypeManualAdmin extends ModelAdmin {
    
    static $managed_models = array('PagetypeManualChapter');
    
    static $url_segment = 'manual';
    
    static $menu_icon = 'PagetypeManual/images/menu-icon.png';
    
    static $menu_priority = -1;
    
}
