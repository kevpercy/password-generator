# Password Generator
A simple random password generator

## Requirements
This works on any PHP version

## Installation
Require the package:
```
composer require kevpercy/password-generator
```

## Usage
```
use KevPercy\PasswordGenerator\PasswordGenerator;

...

$password = PasswordGenerator::generate();
$alphanumeric = PasswordGenerator::generate(8, true, true, false);
```
## Options
**PasswordGenerator::generate($length = 30, $uppercase = true, $numbers = true, $special_chars = true)**

By default, this creates a password 30 characters long, with lowercase letters, uppercase letters, numbers and special characters.

**$length**
Determines the length of the password. Must be at least 8. Default: 30.

**$uppercase**
Whether to include uppercase letters in the output. Default: true.

**$numbers**
Whether to include numeric digits in the output. Default: true.

**$special_chars**
Whether to include special characters in the output. Default: true.

**Note**
Lowercase letters are always included, regardless of the other options.

##License
This library is licensed under the MIT license. Please see [License][LICENSE] file for more information.