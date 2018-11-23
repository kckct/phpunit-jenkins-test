<?php

use PHPUnit\Framework\TestCase;

class ATest extends TestCase
{
	public function testBar()
	{
		$a = new \App\A();

		$this->assertEquals($a->bar(), 'a');
	}

	/** @dataProvider getData() */
	public function testA($a, $b)
	{
		$this->assertEquals($a, 123);
		$this->assertEquals($b, 'test');
	}

	public function getData()
	{
		return [
			[
				123, 'test',
			],
		];
	}
}
