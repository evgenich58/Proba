<?php

// ���������� 
// 
// ��� ����, ����� ������ ��� ��������� ������ �� ����� ����������, 
// ��������� ��������� ��������� � ����� php.ini: 
// display_errors = On
// display_startup_errors = On
// error_reporting = -1
// log_errors = On

// �������� 
//
// ����� �������� ��� ������ ����� ����� �� ����� ���������, 
// ��������� ��� php.ini ��������� �������: 
// display_errors = Off
// display_startup_errors = Off
// error_reporting = E_ALL
// log_errors = On
//
// � ����� ����������� � ���������, ������ �� ����� ����� ������������ � ��� 
// ������ ��� �������, �� �� ����� �������� ������������. ��� ��������� 
// ���������� �� ���� ����������, �������� ����������� PHP: 

// *** E_ERROR *** ��������� ���������
// Fatal error: Uncaught Error: [] operator not supported for strings 
//              in C:\Webservers\DoorTry\www\include.php:17 
//              Stack trace: #0 C:\Webservers\DoorTry\www\index.php(426): 
//              include() #1 {main} thrown in C:\Webservers\DoorTry\www\include.php on line 17
$str='try';
$str[]=4;

// Fatal error: Uncaught Error: Call to undefined function split() 
//              in C:\Webservers\DoorTry\www\include.php:61 
//              Stack trace: #0 C:\Webservers\DoorTry\www\index.php(437): 
//              include() #1 {main} 
//              thrown in C:\Webservers\DoorTry\www\include.php on line 61
//split(',', 'a,b');

// *** E_WARNING *** ����������� ������
// Warning: fopen(spoon): failed to open stream: No such file or directory 
//          in C:\Webservers\DoorTry\www\include.php on line 10
//fopen("spoon", "r");

// Warning: include_once(not-exists.php): failed to open stream: No such file or directory 
//          in C:\Webservers\DoorTry\www\include.php on line 32
// Warning: include_once(): Failed opening 'not-exists.php' 
//          for inclusion (include_path='.;C:\php\pear') 
//          in C:\Webservers\DoorTry\www\include.php on line 32
//include_once 'not-exists.php';

// Error Message: Declaration of My_Datetime::createFromFormat
//                ($format, $time, ?DateTimeZone $timezone = NULL) 
//                should be compatible with DateTime::
//                createFromFormat($format, $time, $object = NULL)
/*
class My_Datetime extends DateTime
{
   public static function createFromFormat($format, $time, DateTimeZone $timezone = null)
   {}
} 
*/

//$a=0;
//$a=1/$a;

//$a='���';
//$a=1+$a;

// *** E_PARSE *** ��������� ���������
// Parse error: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' 
//              in C:\Webservers\DoorTry\www\include.php on line 32
//echo "Hi" 
//echo "Hello";

// *** E_NOTICE *** ����������� ������ 
// Notice: Undefined variable: a in C:\Webservers\DoorTry\www\include.php on line 35
//echo $a;

// Notice: Use of undefined constant UNKNOWN_CONSTANT - assumed 'UNKNOWN_CONSTANT' 
//         in C:\Webservers\DoorTry\www\include.php on line 39
//echo UNKNOWN_CONSTANT;

// *** E_CORE_ERROR *** 

// *** E_CORE_WARNING *** 

// *** E_COMPILE_ERROR *** ��������� ��������� 
// Warning:     require_once(not-exists.php): failed to open stream: No such file or directory 
//              in C:\Webservers\DoorTry\www\include.php on line 25
// Fatal error: require_once(): Failed opening required 'not-exists.php' 
//              (include_path='.;C:\php\pear') 
//              in C:\Webservers\DoorTry\www\include.php on line 25
//require_once 'not-exists.php';

// *** E_COMPILE_WARNING *** 

// *** E_USER_ERROR *** 

// *** E_USER_WARNING *** 

// *** E_USER_NOTICE *** 

// *** E_STRICT *** 
//    ��� ������, ������� ������ ��� ������ ��� ���������, ����� 
// �� ���� ������, ��� ����� IDE ��� ��� ������ ����� ����������. ��� ��������, 
// ���� ������� �� ����������� ����� ��� �������, �� ��� ����� ��������, 
// �� ��� ���-�� �����������, � �������� ��������� ��������� ������, 
// ���� � ���������� ����� ������ ����� ������, � �������� ��������� � $this:

// *** E_RECOVERABLE_ERROR *** 

// *** E_DEPRECATED *** ����������� ������ 
// PHP ����� ��������, ���� �� ����������� ���������� ������� (�.�. ��, ��� 
// �������� ��� deprecated, � � ��������� �������� ������ �� �� �����):

// Deprecated: Non-static method Deprec::test() should not be called statically 
//             in C:\Webservers\DoorTry\www\include.php on line 50
/*
class Deprec 
{
   public function test() 
   {
      echo 'Test'; 
   } 
}
Deprec::test();
*/
