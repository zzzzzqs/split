### Installation

If you're using Composer to manage dependencies, you can use

    $ composer require zzzzzqs/split

### Usage

```angular2html
$split = new Split();

$result = $split(10, 3, []);
// [3, 3, 3, 1]
```