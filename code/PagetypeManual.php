<?php

class PagetypeManual {
    
    static public function addManual($__class, $__fields) {
        
        $_result = DataObject::get('PagetypeManualChapter', "Pagetype = '$__class'");
        
        if($_result->column('Content')) {
            
            $_content = $_result->column('Content');
            
            $__fields->addFieldToTab('Root', new Tab('PagetypeManual', _t('PagetypeManual.MANUAL', 'Manual')));
            $__fields->addFieldsToTab('Root.PagetypeManual', array(
                new HtmlEditorField_Readonly('', _t('PagetypeManual.CHAPTER', 'Chapter'), $_content[0]),
                new HtmlEditorField('Notes', _t('PagetypeManual.NOTES', 'Notes'))
            ));
            
        }
        
        return $__fields;
        
    }
    
}
