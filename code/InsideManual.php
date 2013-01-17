<?php

class InsideManual {
    
    static public function addManual($__class, $__fields) {
        
        $_result = DataObject::get('InsideManualChapter', "Pagetype = '$__class'");
        
        if($_result->column('Content')) {
            
            $_content = $_result->column('Content');
            
            $__fields->addFieldToTab('Root', new Tab('InsideManual', _t('InsideManual.MANUAL', 'Manual')));
            $__fields->addFieldsToTab('Root.InsideManual', array(
                new HtmlEditorField_Readonly('', _t('InsideManual.CHAPTER', 'Chapter'), $_content[0]),
                new HtmlEditorField('Notes', _t('InsideManual.NOTES', 'Notes'))
            ));
            
        }
        
        return $__fields;
        
    }
    
}
