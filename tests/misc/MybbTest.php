<?php

use App\Models\Mybb;
use Tests\Support\ProjectTestCase;

class MybbTest extends ProjectTestCase
{
	public function testUsesMock()
	{
		$temp              = $_ENV['MOCK_MYBB'] ?? null;
		$_ENV['MOCK_MYBB'] = true;

		$mybb   = new Mybb();
		$result = $this->getPrivateProperty($mybb, 'mock');

		$this->assertTrue($result);

		$_ENV['MOCK_MYBB'] = $temp;		
	}
}
