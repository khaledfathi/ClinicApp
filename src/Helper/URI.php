<?php
use Clinicsys\Core\Environment\Env; 

function path(string $relativePath): string{
    $relativePath = "/" . ltrim($relativePath,'/'); 
    $envRootPath = Env::getenv('URI','ROOT_PATH');
    if (!preg_match('/^\//i',$envRootPath)){
        throw new Exception('Environment URI:ROOT_PATH is not valid! \'ROOT_PATH\' should start with "/"'); 
    }
    preg_match('/^\/\w+/i',$_SERVER['REQUEST_URI'],$matchs); 
    return $_SERVER['DOCUMENT_ROOT'].$matchs[0].trim($envRootPath,'/').$relativePath  ; 
}

function url (string $relativeURI, $port=false):string {
    $relativeURI = "/" . ltrim($relativeURI, '/'); 
    $envRootUrl = Env::getenv('URI','ROOT_URL'); 
    if (!preg_match('/^\//i',$envRootUrl)){
        throw new Exception('Environment URI:ROOT_PATH is not valid! \'ROOT_PATH\' should start with "/"'); 
    }
    $url = $_SERVER['REQUEST_SCHEME'] ."://".$_SERVER['SERVER_NAME'] .":". $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI'];
    $matches = [];
    if ($port) {
        preg_match('/^\w+:\/\/[^\/]+\/[^\/]+/i',$url,$matches);
        return $matches[0].'/'.ltrim($envRootUrl,'/').$relativeURI; 
    }
    preg_match('/(^\w+:\/\/[^:]+):\d+(\/[^\/]+)/i',$url,$matches); 
    return $matches[1].$matches[2].ltrim($envRootUrl,'/').$relativeURI; 
}

function redirect(string $url): void {
    header("location: " . $url);
    die;  
}