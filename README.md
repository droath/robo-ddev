Run DDev commands from the Robo task runner. You'll need to have the DDev executable installed. Learn more at [https://www.ddev.com/](https://www.ddev.com/).

### Getting Started

First, you'll need to download the robo ddev library using composer:

```bash
composer require --dev droath/robo-ddev
```

### Example

```php
<?php

    use \Droath\RoboDDev\Task\loadTasks;

    // Command equivalent: `ddev start --all`
    $this->taskDDevStart()
        ->all()
        ->run();

    // Command equivalent: `ddev stop --stop-ssh-agent`
    $this->taskDDevStop()
        ->stopSshAgent()
        ->run();
```
