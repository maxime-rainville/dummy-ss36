<?php

class Dummy extends DataObject
{

    private static $db = array(
        'Title' => 'Varchar',
    );

    private static $has_one = array(
        'ParentPage' => 'Page'
    );

    public function getCMSFields()
    {
       $fields = parent::getCMSFields();

       $fields->addFieldToTab(
           'Root.Main',
           ListboxField::create(
               'ParentPageID',
               'Parent Page',
               Page::get()->map()->toArray(),
               $this->ParentPageID,
               10
           )->setMultiple(false)
       );

       return $fields;
    }

}
