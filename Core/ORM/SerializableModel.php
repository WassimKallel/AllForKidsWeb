<?php
namespace Core\ORM;
use Core\Serialization\JsonSerializer;

/**
 * SerializableModel provides tools to serialize & deserialize all database objects
 *
 */
abstract class SerializableModel   {

    /**
     * Serializes the current Model class using Serialization
     *
     * @access public
     * @return string
     */
    public function serialize() {
        $serializer = new JsonSerializer();
        return $serializer->serialize($this);
    }

    /**
     * Deserializes a given json string and returns an instance of typename
     *
     * @access public
     * @static
     * @param string $json Serialized JSON Data
     * @param string $typename Desired type name string starting with '@'
     * @return mixed
     */
    public static function deserialize($json, $typename = null) {
        $serializer = new JsonSerializer();
        if($typename != null)
            return  $serializer->unserializeWithTypeName($json, $typename);
        else
            return $serializer->unserialize($json);

    }

}