SilverStripe_PagetypeManual
===========================

Add a tab to pagetypes inside the CMS to describes how the current pagetype works.

## Requirements
* SilverStripe 3.0

## Installation
* Download the module from https://github.com/knsqnt/SilverStripe_PagetypeManual
* Extract downloaded archive to site root and rename destination folder to "PagetypeManual"
* Run dev/build?flush=all to regenerate manifest
* Now entering the CMS you have a section called "Pagetype Manual"

## Usage
Setzen sie in der Klasse "Page" in der Funktion 'getCMSFields' folgendes ein:
$var = Help::setHelp($var);
$var ist die Variable, die die Funktion zurückgibt.

## Author
<strong>knsqnt&rsaquo;</strong> Interactive Design &amp; Development<br>
email@knsqnt.com | http://www.knsqnt.com/
