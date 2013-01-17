SilverStripe_InsideManual
===========================

Enables a manual according to different pagetypes or by dataobjects.

## Requirements
* SilverStripe 3.0

## Installation
* Download module from https://github.com/knsqnt/SilverStripe_InsideManual
* Extract module to site root and rename folder to "InsideManual"
* Run a dev/build to regenerate manifest
* Now you have a CMS menu item called "Manual"

## Usage
<code>function getCMSFields() {<br>
    $_fields = parent::getCMSFields();<br>
    $_fields = InsideManual::addManual($this->ClassName, $_fields);<br>
    return $_fields;<br>
}</code>

## Author
<strong>knsqnt&rsaquo;</strong> Interactive Design &amp; Development<br>
email@knsqnt.com | http://www.knsqnt.com/


## Tranlations
en, de