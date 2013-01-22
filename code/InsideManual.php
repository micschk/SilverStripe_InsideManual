<?php

class InsideManual {
    
    static public function addManual($__this, $__fields) {
        
        $_result = DataObject::get('InsideManualChapter', "Pagetype = '$__this->ClassName'");
        
        if($_result->column('Content')) {
            
            $_content = $_result->column('Content');
            
            $__fields->addFieldsToTab('Root', array(
                new Tab('InsideManual', _t('InsideManual.HELP', 'Help'))
            ), $__this->DependentPagesCount() ? 'Dependent' : NULL);
            
            $__fields->addFieldsToTab('Root.InsideManual', array(
                new HtmlEditorField_Readonly('', _t('InsideManual.CHAPTER', 'Chapter'), $_content[0]),
                new HtmlEditorField('Notes', _t('InsideManual.NOTES', 'Notes'))
            ));
            
        }
        
        return $__fields;
        
    }
    
}
