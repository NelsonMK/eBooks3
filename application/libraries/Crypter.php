<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crypter {

    function __construct() {

    }

    private static $SALT = 0xd1c0adb5;

    protected static function encrypt($n) {
        return (PHP_INT_SIZE == 4 ? self::encrypt32($n) : self::encrypt64($n)) ^ self::$SALT;
    }

    protected static function decrypt($n) {
        $n ^= self::$SALT;
        return PHP_INT_SIZE == 4 ? self::decrypt32($n) : self::decrypt64($n);
    }

    protected static function encrypt32($n) {
        return ((0x000000FF & $n) << 24) + (((0xFFFFFF00 & $n) >> 8) & 0x00FFFFFF);
    }

    protected static function decrypt32($n) {
        return ((0x00FFFFFF & $n) << 8) + (((0xFF000000 & $n) >> 24) & 0x000000FF);
    }

    protected static function encrypt64($n) {
        return ((0x000000000000FFFF & $n) << 48) + (((0xFFFFFFFFFFFF0000 & $n) >> 16) & 0x0000FFFFFFFFFFFF);
    }

    protected static function decrypt64($n) {
        return ((0x0000FFFFFFFFFFFF & $n) << 16) + (((0xFFFF000000000000 & $n) >> 48) & 0x000000000000FFFF);
    }

    public function encryptId($string) {
        return $this->encrypt($string);
    }

    public function decryptId($encrypted) {
        return $this->decrypt($encrypted);
    }
}