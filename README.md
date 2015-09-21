# Back to the Future Ipsum

PHP Class to output a specified number of paragraphs with text from the "Back to the Future" trilogy.

## Usage

Download the repo and save the `class.BTTF.php` and `BTTF-script.txt` files to your project.

Next, import the class in your `PHP` file:
```php
include_once('class.BTTF.php');
```

Initiate the class and call the script where you'd like to generate the text:
```php
$text = new BTTF; // Create new instance

$text->generateParagraphs(
    3, // Number of paragraphs to generate (Optional, Default = 1)
    true, // Wrap paragraphs in HTML <p> tags (Optional, Default = true)
    5 // Number of sentences per paragraph (Optional, Default = 5)
);

```