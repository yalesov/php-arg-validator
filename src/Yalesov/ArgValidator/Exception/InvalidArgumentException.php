<?php
namespace Yalesov\ArgValidator\Exception;

use Yalesov\ArgValidator\ExceptionInterface;

class InvalidArgumentException
  extends \InvalidArgumentException
  implements ExceptionInterface
{
}
