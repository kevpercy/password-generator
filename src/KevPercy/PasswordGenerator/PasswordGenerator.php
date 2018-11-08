<?php

namespace KevPercy\PasswordGenerator;

/**
 * Class PasswordGenerator
 * @package KevPercy\PasswordGenerator
 */
class PasswordGenerator
{
	const UPPERCASE = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	const LOWERCASE = 'abcdefghijklmnopqrstuvwxyz';
	const NUMBERS = '0123456789';
	const SPECIAL_CHARS = '!@#$%^*()-_=+[]{};:"/\?,.<>~';
	
	public static function generate($length = 30, $uppercase = true, $numbers = true, $special_chars = true)
	{
		$groups = [self::LOWERCASE];
		
		if ($uppercase) {
			$groups[] = self::UPPERCASE;
		}
		
		if ($numbers) {
			$groups[] = self::NUMBERS;
		}
		
		if ($special_chars) {
			$groups[] = self::SPECIAL_CHARS;
		}
		
		$password = '';
		
		$max = min(($length / count($groups)), 5);
		
		do {
			foreach ($groups as $group) {
				$r = rand(1, min($max, $length));
				
				for ($i = 0; $i < $r; $i++) {
					$password .= $group[rand(0, strlen($group) - 1)];
					$length--;
				}
			}
		} while ($length > 0);
		
		return str_shuffle($password);
	}
}
