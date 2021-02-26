<?php

namespace App;

class Config{
	const DB_HOST='dbHost';
	const DB_NAME='dbName';
	const DB_USER='user';
	const DB_PASS='pass';
	const SHOW_ERRORS=true;//false for production, errors saved to file in logs catalogue;
	const SECRET_KEY='xxx'; 
	const MAILGUN_API_KEY = 'xxx';
	const MAILGUN_DOMAIN='xxx';
	//key generator https://randomkeygen.com/;
}