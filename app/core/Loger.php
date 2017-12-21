<?php

namespace app\core;


class Loger
{
    /**
     * @var $file_name
     * Path to log file
     */
    protected $file_name;

    /**
     * @function statistic_log
     * Add some data into string and write it in file
     */
    public function statistic_log()
    {

        $time = date("H:i");
        $data = date("d-m-Y");
        $ip = $_SERVER['REMOTE_ADDR'];
        $user_agent = $_SERVER['HTTP_USER_AGENT'];

        $str = "\n" . "\r" . $data .'__'. $time.'__'. $ip . '__'. $user_agent . "\n" . "\r";

        file_put_contents($this->file_name, $str, FILE_APPEND);
    }
    public function __construct($log_file)
    {
        $this->file_name = $log_file;
    }
}