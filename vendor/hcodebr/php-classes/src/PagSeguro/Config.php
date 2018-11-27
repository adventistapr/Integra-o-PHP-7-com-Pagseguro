<?php

namespace Hcode\PagSeguro;

class Config {
	
	const SANDBOX = true;

	const SANDBOX_EMAIL = "webdevelopermgri@gmail.com";
	const PRODUCTION_EMAIL = "webdevelopermgri@gmail.com";
	
	const SANDBOX_TOKEN = "12E559AC9945476FBB42F914AF492ED1";
	const PRODUCTION_TOKEN = "1A7226D6EB314648B98711FC8B889792";
	
	const SANDBOX_SESSIONS = "https://ws.sandbox.pagseguro.uol.com.br/v2/sessions";
	const PRODUCTION_SESSIONS = "https://ws.pagseguro.uol.com.br/v2/sessions";
	
	public static function getAuthentication():array 
	{
		if (Config::SANDBOX === true) {
			
			return [
				"email"=>Config::SANDBOX_EMAIL,
				"token"=>Config::SANDBOX_TOKEN
			];
			
		} else {
			
			return [
				"email"=>Config::PRODUCTION_EMAIL,
				"token"=>Config::PRODUCTION_TOKEN
			];			
			
		}
		
	}
	
	public static function getUrlSessions():string {
		return (Config::SANDBOX === true) ? Config::SANDBOX_SESSIONS : Config::PRODUCTION_SESSIONS;
	}

}


