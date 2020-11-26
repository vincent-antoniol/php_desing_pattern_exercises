<?php
include_once('Cookie.php');

class CookieMacadamia implements Cookie
{
    public function getType()
    {
      return 'Simple Cookie, macadamia';
    }
  
    public function getCalories()
    {
      return 180;
    }
  }

class CookieWhiteChocolate implements Cookie
{
    public function getType()
    {
      return 'Simple Cookie, macadamia, white chocolate';
    }
  
    public function getCalories()
    {
      return 200;
    }
  }
