<?php
declare(strict_types=1);
namespace Test;

use Jahan\Filter\Str;

final class StrTest extends TestCase
{
	protected function setup(): void
	{
		$this->target = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789`~!@#$%^&*()_+-=\u1000';
	}

	public function test_array_exclusion_for_numbers_only(): void
	{
		$exclusion = ['#','&'];
		
		$result = Str::numbers_only($this->target, $exclusion);

		$this->assertSame($result, '0123456789#&1000');
	}
}