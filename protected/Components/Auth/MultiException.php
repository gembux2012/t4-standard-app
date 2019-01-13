<?php

namespace App\Components\Auth;

use T4\Core\IArrayAccess;
use T4\Core\TCollection;
use T4\Core\ICollection;
use T4\Core\Exception;
use Traversable;

class MultiException
    extends \T4\Core\Exception
    implements IArrayAccess, ICollection
{
    use TCollection {
        append as protected collectionAppend;
        prepend as protected collectionPrepend;
    }
    protected $class = Exception::class;
    public function __construct($class = Exception::class)
    {
        if ( !is_a($class, \Exception::class, true) ) {
            throw new Exception('Invalid MultiException base class');
        }
        $this->class = $class;
    }
    public function append($value)
    {
        if (!($value instanceof $this->class)) {
            throw new Exception('MultiException class mismatch');
        }
        return $this->collectionAppend($value);
    }
    public function prepend($value)
    {
        if (!($value instanceof $this->class)) {
            throw new Exception('MultiException class mismatch');
        }
        return $this->collectionPrepend($value);
    }
    public function addException($message = "", $code = 0, \Exception $previous = null)
    {
        $class = $this->class;
        $this->add(new $class($message, $code, $previous));
    }

    /**
     * Retrieve an external iterator
     * @link https://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
        // TODO: Implement getIterator() method.
    }

    /**
     * Whether a offset exists
     * @link https://php.net/manual/en/arrayaccess.offsetexists.php
     * @param mixed $offset <p>
     * An offset to check for.
     * </p>
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     * @since 5.0.0
     */
    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    /**
     * Offset to retrieve
     * @link https://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     * @return mixed Can return all value types.
     * @since 5.0.0
     */
    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
    }

    /**
     * Offset to set
     * @link https://php.net/manual/en/arrayaccess.offsetset.php
     * @param mixed $offset <p>
     * The offset to assign the value to.
     * </p>
     * @param mixed $value <p>
     * The value to set.
     * </p>
     * @return void
     * @since 5.0.0
     */
    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    /**
     * Offset to unset
     * @link https://php.net/manual/en/arrayaccess.offsetunset.php
     * @param mixed $offset <p>
     * The offset to unset.
     * </p>
     * @return void
     * @since 5.0.0
     */
    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }

    /**
     * String representation of object
     * @link https://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function serialize()
    {
        // TODO: Implement serialize() method.
    }

    /**
     * Constructs the object
     * @link https://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function unserialize($serialized)
    {
        // TODO: Implement unserialize() method.
    }

    /**
     * Count elements of an object
     * @link https://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
        // TODO: Implement count() method.
    }

    public function toArray()
    {
        // TODO: Implement toArray() method.
    }

    public function fromArray($data)
    {
        // TODO: Implement fromArray() method.
    }
}
