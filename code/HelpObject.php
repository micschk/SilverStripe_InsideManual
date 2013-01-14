<?php

class HelpObject extends DataObject {
    
    static $db = array(
        'PageType' => 'Varchar(255)',
        'Content' => 'HTMLText'
    );
    
    static $field_labels = array( //Left side
        'PageType',
        'Content'
    );
    
    static $searchable_fields = array(
        'PageType',
        'Content'
    );
    
    static $summary_fields = array( //right side - Table
        'PageType',
        'Content'
    );
    
    function fieldLabels() {
        
        $labels = parent::fieldLabels(); 
        
        $labels['PageType'] = _t('HelpObject.PAGETYPE', 'Pagetype');
        $labels['Content']  = _t('HelpObject.CONTENT', 'Content');
        
        return $labels; 
        
    }
    /*
    function getCMSFields() {
       
        return new FieldSet(
            new TextField('PageType', _t('HelpObject.PAGETYPE', 'Pagetype')),
            new HTMLEditorField('Content', _t('HelpObject.CONTENT', 'Content'))
        );
        
    }
    */
}