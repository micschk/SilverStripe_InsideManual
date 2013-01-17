<?php

class InsideManualChapter extends DataObject {
    
    static $db = array(
        'PageType' => 'Varchar(255)',
        'DataObject' => 'Varchar(255)',
        'Content' => 'HTMLText'
    );
    
    static $field_labels = array(
        'PageType',
        'DataObject',
        'Content'
    );
    
    static $searchable_fields = array(
        'PageType',
        'DataObject',
        'Content'
    );
    
    static $summary_fields = array(
        'PageType',
        'DataObject',
        'Content'
    );
    
    function fieldLabels($__includerelations = true) {
        
        $_labels = parent::fieldLabels($__includerelations); 
        
        $_labels['PageType'] = _t('InsideManualChapter.PAGE_TYPE', 'PageType');
        $_labels['DataObject'] = _t('InsideManualChapter.DATA_OBJECT', 'DataObject');
        $_labels['Content']  = _t('InsideManualChapter.CONTENT', 'Content');
        
        return $_labels; 
        
    }
    
    public function getCMSFields() {
        
        return new FieldList(
            new DropdownField('PageType', _t('InsideManualChapter.PAGE_TYPE', 'PageType'), $this->getPagetypes()),
            new TextField('DataObject', _t('InsideManaualChapter.DATA_OBJECT', 'DataObject')),
            new HtmlEditorField('Content', _t('InsideManualChapter.CONTENT', 'Content'))
        );
        
    }
    
    protected function getPagetypes() {
        
        $_pagetypes = array();
        
        foreach(SiteTree::page_type_classes() as $_pagetypeClass) {
            
            $_pagetypes[$_pagetypeClass] = _t($_pagetypeClass . '.SINGULARNAME', $_pagetypeClass);
            
        }
        
        $_pagetypes['DataObject'] = _t('InsideManualChapter.DATA_OBJECT', 'DataObject');
        $_pagetypes['(no selection)'] = _t('InsideManualChapter.NO_SELECTION', '(no selection)');
        
        asort($_pagetypes);
        
        return $_pagetypes;
        
    }
    
}
