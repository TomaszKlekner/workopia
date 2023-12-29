<?php

function sayHello()
{
  echo "Hello World";
}

function sayGoodbye()
{
  return "Goodbye!";
}

// sayHello();
$goodbye = sayGoodbye();

echo $goodbye;
