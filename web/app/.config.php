<?php
return array (
  'profile' => 
  array (
    'oj-name' => 'SDFZ Public Online Judge',
    'oj-name-short' => 'SPOJ',
    'administrator' => 'root',
    'admin-email' => 'sdfzoj@qq.com',
    'QQ-group' => '',
    'ICP-license' => '',
  ),
  'database' => 
  array (
    'database' => 'app_uoj233',
    'username' => 'root',
    'password' => 'root',
    'host' => '127.0.0.1',
  ),
  'web' => 
  array (
    'domain' => NULL,
    'main' => 
    array (
      'protocol' => 'http',
      'host' => UOJContext::httpHost(),
      'port' => 80,
    ),
    'blog' => 
    array (
      'protocol' => 'http',
      'host' => UOJContext::httpHost(),
      'port' => 80,
    ),
  ),
  'security' => 
  array (
    'user' => 
    array (
      'client_salt' => 'pRFhHAtnPzJKJ4L1JVFmJk288aUZBtXL',
    ),
    'cookie' => 
    array (
      'checksum_salt' => 
      array (
        0 => 'kw2Z7wwdHfY16hqM',
        1 => 'dh0zSa8OcXZgaZgk',
        2 => 'jktxVgRndZsNIlck',
      ),
    ),
  ),
  'mail' => 
  array (
    'noreply' => 
    array (
      'username' => 'sdfzoj@qq.com',
      'password' => 'imoemajuynpgdadc',
      'host' => 'smtp.qq.com',
      'secure' => 'ssl',
      'port' => 465,
    ),
  ),
  'judger' => 
  array (
    'socket' => 
    array (
      'port' => '2333',
      'password' => '3Bqr36B3ziEgdKD2qEt3GUU5AmMPXhvX',
    ),
  ),
  'switch' => 
  array (
    'web-analytics' => false,
    'blog-domain-mode' => 3,
  ),
);
