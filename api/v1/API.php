<?php

namespace WP_JSON_API;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class API implements iAPI {

	public function getVersion() {
		return 1;
	}

	/**
	 * Routes the request to the correct handler and fills the response accordingly
	 * 
	 * @param \Symfony\Component\HttpFoundation\Request $request
	 * @param \Symfony\Component\HttpFoundation\Response $response
	 */
	public function handleRequest( Request $request, Response $response ) {
		throw new Exception( "Method Not Implemented" );
	}

}