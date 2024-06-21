# Magic Numberer

Magic Numberer is a simple PHP library that provides an enum of a lot of different integers of your choice, allowing you to troll with [PHPMND](https://github.com/povils/phpmnd) 🤡.

## Installation

```bash
composer require tomsihap/magic-numberer
```

## Usage

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use MagicNumberer\MagicNumberer;

$answerToTheUltimateQuestionOfLifeTheUniverseAndEverything = MagicNumberer::SIX * MagicNumberer::SEVEN;

```

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

Some integers are missing, feel free to add as many as you want.

## License

[MIT](https://choosealicense.com/licenses/mit/)