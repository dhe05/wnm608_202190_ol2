<?php

function MYSQLIAuth() {
  return [
"localhost", // mysql host
"danhe", // mysql user name
"tamy0524", // mysql user password
"danhewnm608", // mysql database name
  ];
}

function PDOAuth(){
  return[
"mysql:host=localhost;dbname=danhewnm608",   //host and data base name
"danhe", // mysql user name
"tamy0524", // mysql user password

[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
  ];
}