<?php

class HelpAdmin extends ModelAdmin {
    
    static $managed_models = array('HelpObject');
    
    static $url_segment = 'help';
    
    static $menu_icon = 'kq_documentation/img/help.png';
    
    static $menu_priority = -1;
    
}