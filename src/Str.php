<?php
namespace Jahan\Filters;

use Jahan\Collections\Common as Collections;

class Str
{
	/**
	 * Remove any non-alphanumeric character from string
	 * @param string $value input string
	 * @param array|string $exclusions list of non alpha-numberic characters to allow and leave in value
	 * @param string $replacement string used to replace any character not matching the filter.
	 * @return string
	 */
	public static function alpha_numeric(string $st, $exclusions = [],string $replacement = '') :string
	{
		if(is_string($exclusions)) {
			$exclusions = str_split($exclusions);
		}
		$allowed_characters = array_merge(Collections::ALPHABET, Collections::NUMBERS, $exclusions);

		return static::filter($st, $allowed_characters, $replacement);
	}

	/**
	 * Remove any non-numeric character from string
	 * @param string $value input string
	 * @param array|string $exclusions list of non numeric characters to allow and leave in value
	 * @param string $replacement character or string to use in place of filtered characters.
	 * @return string
	 */
	public static function numbers_only(string $st, $exclusions = ['.'],string $replacement = '') :string
	{
		if(is_string($exclusions)) {
			$exclusions = str_split($exclusions);
		}
		$allowed_characters = array_merge(Collections::NUMBERS, $exclusions);

		return static::filter($st, $allowed_characters, $replacement);
	}

	/**
	 * Filter string for specific charcters.
	 *
	 * @param string $st 
	 * @param array $allowed_characters
	 * @param string $replacement
	 * @return string
	 */
	public static function filter(string $st,array $allowed_characters, string $replacement) :string
	{
		$clean = [];
		if(!empty($st)) foreach(str_split($st) as $character) {
			if(in_array($character, $allowed_characters)) {
				$clean[] = $character;
			} else {
				$clean[] = $replacement;
			}
		}

		return implode('', $clean);		
	}
}
