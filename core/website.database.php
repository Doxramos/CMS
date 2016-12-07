<?php
/**
 * Created by PhpStorm.
 * User: Chubs
 * Date: 12/7/2016
 * Time: 7:35 AM
 */

class website_connection extends pdo{
    //Website Variables

    public $sitedb = '';
    public $siteconfig;
    public $sitesettings = array(
        'host'      => MYSQLHost,
        'database'  => MYSQLData,
        'username'  => MYSQLUser,
        'password'  => MYSQLPass,
    );

    public function __construct(){

        $this->db = new PDO(
            "mysql:host={$this->sitesettings['host']};" .
            "dbname={$this->sitesettings['database']};" .
            "charset=utf8",
            "{$this->sitesettings['username']}",
            "{$this->sitesettings['password']}"
        );

        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

}