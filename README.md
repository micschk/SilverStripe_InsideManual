SilverStripe_PagetypeManual
===========================

Enables a manual according to the different pagetypes.

## Requirements
* SilverStripe 3.0

## Installation
* Download module from https://github.com/knsqnt/SilverStripe_PagetypeManual
* Extract module to site root and rename folder to "PagetypeManual"
* Run a dev/build to regenerate manifest
* Now you have a CMS menu item called "Manual"

## Usage
<code>
function getCMSFields() {
    $_fields = parent::getCMSFields();
    $_fields = PagetypeManual::addManual($this->ClassName, $_fields);
    return $_fields;
}
</code>

## Author
__knsqnt&rsaquo;__ Interactive Design &amp; Development<br>
email@knsqnt.com | http://www.knsqnt.com/
