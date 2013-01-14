<?php

class Help {
    
    
    function setHelp($__fields) {
        
        $result = DataObject::get('HelpObject', "PageType = '".$this->ClassName."'");
        
        if($result->column('Content')) {
        
            $resultdetail = $result->column('Content');
            $resultdetail = $resultdetail[0];
            
            $_fields = array(
                new HtmlEditorField_Readonly('', _t('Help.HELPTEXT', 'Help'), $resultdetail),
                new HTMLEditorField('Comment', _t('Help.HELPCOMMENT', 'Comment'))
            );
            
            $_help = _t('Help.HELPTEXT', 'Help');
                
            $__fields->addFieldsToTab('Root.'.$_help, $_fields);
            
        }
        return $__fields;
        
    }
    
}