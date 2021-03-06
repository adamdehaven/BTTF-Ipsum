# Back to the Future Ipsum

[![GitHub release](https://img.shields.io/github/release/adamdehaven/BTTF-Ipsum.svg?maxAge=3600)](https://github.com/adamdehaven/Wallpapers-from-Unsplash/archive/master.zip) [![GitHub commits](https://img.shields.io/github/commits-since/adamdehaven/BTTF-Ipsum/v1.1.svg?maxAge=3600)](https://github.com/adamdehaven/BTTF-Ipsum/compare/v1.1...master) [![GitHub issues](https://img.shields.io/github/issues/adamdehaven/BTTF-Ipsum.svg?maxAge=3600)](https://github.com/adamdehaven/BTTF-Ipsum/issues) [![license](https://img.shields.io/github/license/adamdehaven/BTTF-Ipsum.svg?maxAge=3600)](https://raw.githubusercontent.com/adamdehaven/BTTF-Ipsum/master/LICENSE)

PHP Class to output a specified number of paragraphs with text from the "Back to the Future" trilogy.

Also includes a workflow for [AlfredApp](http://alfredapp.com)

## Usage

#### PHP Class

Download the repo and save the `class.BTTF.php` and `BTTF-script.txt` files to your project.

Next, import the class in your `PHP` file:
```php
include_once('class.BTTF.php');
```

Initiate the class and call the script where you'd like to generate the text:
```php
$text = new BTTF; // Create new instance

$text->generate(
    3, // Number of paragraphs to generate (Optional, Default = 1)
    true, // Wrap paragraphs in HTML <p> tags (Optional, Default = true)
    5 // Number of sentences per paragraph (Optional, Default = 5)
);

```

#### AlfredApp Workflow

Simply download the repository and import the workflow (by double-clicking the package) into AlfredApp.

![Workflow Screenshot](workflow-screenshot.png)