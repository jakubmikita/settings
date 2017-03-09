<?php

namespace underDEV\Utils;

class Settings {

	public function __construct()  {

		file_put_contents( dirname( __FILE__ ) . '/hello', print_r( 'hello', true ) . "\r\n\r\n", FILE_APPEND );

	}

}