<?php
namespace App\Core;

class Request
{
    public static $HttpUserAgent;
    public static $ServerSoftware; 
    public static $ServerName;
    public static $ServerPort;
    public static $RequestMethod;
    public static $QueryString;
    public static $RequestUri;
    public static $RequestTime;
    public static $RemoteAddr;
    public static $Params;
    public static $Uri;

    public function __construct()
    {
        self::$HttpUserAgent = $_SERVER['HTTP_USER_AGENT'];
        self::$ServerSoftware = $_SERVER['SERVER_SOFTWARE'];
        self::$ServerName = $_SERVER['SERVER_NAME'];
        self::$ServerPort = $_SERVER['SERVER_PORT'];
        self::$RequestMethod = $_SERVER['REQUEST_METHOD'];
        self::$QueryString = $_SERVER['QUERY_STRING'];
        self::$RequestUri = $_SERVER['REQUEST_URI'];
        self::$RequestTime = $_SERVER['REQUEST_TIME'];
        self::$RemoteAddr = $_SERVER['REMOTE_ADDR'];   
        self::$Params = $_REQUEST;
    }
    public function GetParams()
    {
       return self::$Params;
    }

    public  function GetAgent()
    {
        return self::$HttpUserAgent;
    }
    
    public function GetIp()
    {
        return self::$RemoteAddr;
    }

    public function GetUri()
    {
        return self::$RequestUri;
    }
    public function GetMethod()
    {
        return strtolower(self::$RequestMethod);
    }
}