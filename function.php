<?php

function base_path($file)
{
  return BASE_PATH . $file;
}


function urlIs($value)
{
  return $_SERVER["REQUEST_URI"] == $value;
}

function dd($value)
{
  echo "<pre/>";
  var_dump($value);
  echo "<pre/>";
}

// function login($user)
// {
//   $_SESSION["user"] = $user;
// }





function view($path, $options = [])
{
  extract($options);
  return base_path('view/' . $path);
}


function controller($path, $options = [])
{
  extract($options);
  return base_path('controller/' . $path);
}



function getpassword($count)
{
  $char = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ!#$%&*+';

  $randString = "";

  for ($i = 0; $i < $count; $i++) {
    $index =  rand(0, strlen($char) - 1);
    $randString .= $char[$index];
  }

  return $randString;
}
