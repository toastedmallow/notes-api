<?php
namespace Notes\Domain\ValueObject;
use InvalidArgumentException;

/**
 * Class StringLiteral
 * @category  PHP
 * @package Notes\Domain\ValueObject
 */
class StringLiteral
{
    const EMPTY_STR = '';
    /** @var string */
    protected $value;
    /**
     * StringLiteral constructor
     * @param string $value
     */
    public function __construct($value = self::EMPTY_STR)
    {
        if (!is_string($value)) {
            throw new InvalidArgumentException(
                __METHOD__ . '(): $value must be a string'
            );
        }
        $this->value = $value;
    }
    /**
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}

?>
