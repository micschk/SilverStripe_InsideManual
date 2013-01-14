<?php

class PagetypeManualChapter extends DataObject {
    
    static $db = array(
        'Pagetype' => 'Varchar(255)',
        'Content' => 'HTMLText'
    );
    
    static $field_labels = array(
        'Pagetype',
        'Content'
    );
    
    static $searchable_fields = array(
        'Pagetype',
        'Content'
    );
    
    static $summary_fields = array(
        'Pagetype',
        'Content'
    );
    
    function fieldLabels($__includerelations = true) {
        
        $_labels = parent::fieldLabels($__includerelations); 
        
        $_labels['Pagetype'] = _t('PagetypeManualChapter.PAGETYPE', 'Pagetype');
        $_labels['Content']  = _t('PagetypeManualChapter.CONTENT', 'Content');
        
        return $_labels; 
        
    }
    
    public function getCMSFields() {
        
        return new FieldList(
            new DropdownField('Pagetype', _t('PagetypeManualChapter.PAGETYPE', 'Pagetype'), $this->getPagetypes()),
            new HtmlEditorField('Content', _t('PagetypeManualChapter.CONTENT', 'Content'))
        );
        
    }
    
    protected function getPagetypes() {
        
        $_pagetypes = array();
        
        foreach(SiteTree::page_type_classes() as $_pagetypeClass) {
            
            $_pagetypes[$_pagetypeClass] = _t($_pagetypeClass . '.SINGULARNAME', $_pagetypeClass);
            
        }
        
        asort($_pagetypes);
        
        return $_pagetypes;
        
    }
    
}
