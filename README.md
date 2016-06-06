# XLeagueFront

This project is terminated, XMage now supports rating system, so therer's no need for XLeague to exist. Thank you to everyone who contributed in any way!

[![Join the chat at https://gitter.im/iScrE4m/XLeagueFront](https://badges.gitter.im/iScrE4m/XLeagueFront.svg)](https://gitter.im/iScrE4m/XLeagueFront?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge) 

Frontend of XLeague - http://xleague.info/

For feedback, ideas, bugs etc. use Issues

## What is where

### content folder

This is for markdown files that are then parsed and inserted into HTML. Markdown is easily edited and doesn't require any code knowledge

* If you don't know any code - have a look there
* There is some still html being used
    * `<span style="code"></span>` is being used for code highlighting - if we want to let the user know where the code or command starts and ends
    * `<a href>` is being used for linking because we want links to open in new tab/window. Therefore target=_blank
    
### css folder 

Self-explanatory folder for styling sheets

* If you wish to redesign the page completely, create a new .css file and we can give an option for multiple page 'skins'

### img folder

Images are found here, most of them aren't on git (favicons and their variations)

* Best way to contribute images, logos and whatnot would be through chat

### includes folder

Php files that might be used elsewhere, like page header. Also good for easily accessing parts of the code you want.

## pages folder

Different pages than index.php

### scripts folder

Home of javascript

* There's always something to improve