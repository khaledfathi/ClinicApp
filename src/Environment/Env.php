<?php
namespace Clinicsys\Core\Environment;
use Clinicsys\Core\Contracts\Environment\EnvironmentContract;
use Exception;
use Vtiful\Kernel\Excel;

class Env implements  EnvironmentContract{
    //read Config/Env Variables from config.json [live on /src/config.json]
    public static function Load(): array{
        if(file_exists("env.json")){
            $JsonContent = file_get_contents("env.json",true);
            $envData = json_decode($JsonContent, true) ;
            if (!$envData == null){
                return $envData;
            } else {
                throw new Exception("Invalid JSON format at file 'env.json'"); 
            }
        }else{
            throw new Exception('Target file "config.json" dosen\'t exist. '); 
        }
    }

    //get specific value from config file [config.json]
    public static function GetEnv(string $envSection , string $key): mixed{
        $content =   self::Load();
        try {
            if(array_key_exists($key,$content[$envSection])){
                return $content[$envSection][$key];
            }             
        }catch (Exception ){
            throw new Exception("Evironment $envSection dosen't exist in file env.json");
        }
        throw new Exception("Evironment $envSection dosen't have key '$key' in file env.json");
    }
}