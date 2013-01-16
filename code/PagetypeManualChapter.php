<?php

class PagetypeManualChapter extends DataObject {
    
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
        
        $_labels['Pagetype'] = _t('PagetypeManualChapter.PAGE_TYPE', 'PageType');
        $_labels['DataObject'] = _t('PagetypeManualChapter.DATA_OBJECT', 'DataObject');
        $_labels['Content']  = _t('PagetypeManualChapter.CONTENT', 'Content');
        
        return $_labels; 
        
    }
    
    public function getCMSFields() {
        
        return new FieldList(
            new DropdownField('PageType', _t('PagetypeManualChapter.PAGE_TYPE', 'PageType'), $this->getPagetypes()),
            new TextField('DataObject', _t('PagetypeManaualChapter.DATA_OBJECT', 'DataObject')),
            new HtmlEditorField('Content', _t('PagetypeManualChapter.CONTENT', 'Content'))
        );
        
    }
    
    protected function getPagetypes() {
        
        $_pagetypes = array();
        
        foreach(SiteTree::page_type_classes() as $_pagetypeClass) {
            
            $_pagetypes[$_pagetypeClass] = _t($_pagetypeClass . '.SINGULARNAME', $_pagetypeClass);
            
        }
        
        $_pagetypes['DataObject'] = _t('PagetypeManualChapter.DATA_OBJECT', 'DataObject');
        $_pagetypes['(no selection)'] = _t('PagetypeManualChapter.NO_SELECTION', '(no selection)');
        
        asort($_pagetypes);
        
        return $_pagetypes;
        
    }
    
}
