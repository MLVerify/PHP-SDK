<?php
/**
 * KycCheckUpdateModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  MLVerify\Client
 * @author   MLVerify Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ML Verify API (version 1.0)
 *
 * Use this page for testing and prototyping ML Verify API features
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * MLVerify Codegen version: 2.4.0
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MLVerify\Client\Model;

use \ArrayAccess;
use \MLVerify\Client\ObjectSerializer;

/**
 * KycCheckUpdateModel Class Doc Comment
 *
 * @category Class
 * @description KycCheckUpdateModel
 * @package  MLVerify\Client
 * @author   MLVerify Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KycCheckUpdateModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KycCheckUpdateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'client_id' => 'string',
        'person_id' => 'string',
        'status' => 'string',
        'name' => 'string',
        'notes' => 'string',
        'type' => 'string',
        'is_notarised' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'client_id' => null,
        'person_id' => null,
        'status' => null,
        'name' => null,
        'notes' => null,
        'type' => null,
        'is_notarised' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'client_id' => 'client_id',
        'person_id' => 'person_id',
        'status' => 'status',
        'name' => 'name',
        'notes' => 'notes',
        'type' => 'type',
        'is_notarised' => 'is_notarised'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_id' => 'setClientId',
        'person_id' => 'setPersonId',
        'status' => 'setStatus',
        'name' => 'setName',
        'notes' => 'setNotes',
        'type' => 'setType',
        'is_notarised' => 'setIsNotarised'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_id' => 'getClientId',
        'person_id' => 'getPersonId',
        'status' => 'getStatus',
        'name' => 'getName',
        'notes' => 'getNotes',
        'type' => 'getType',
        'is_notarised' => 'getIsNotarised'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['person_id'] = isset($data['person_id']) ? $data['person_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['is_notarised'] = isset($data['is_notarised']) ? $data['is_notarised'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['client_id'] === null) {
            $invalidProperties[] = "'client_id' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id The client identifier.
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets person_id
     *
     * @return string
     */
    public function getPersonId()
    {
        return $this->container['person_id'];
    }

    /**
     * Sets person_id
     *
     * @param string $person_id The person identifier.
     *
     * @return $this
     */
    public function setPersonId($person_id)
    {
        $this->container['person_id'] = $person_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Gets or sets the status.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Gets or sets the name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes Gets or sets the notes.
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Gets or sets the type.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets is_notarised
     *
     * @return bool
     */
    public function getIsNotarised()
    {
        return $this->container['is_notarised'];
    }

    /**
     * Sets is_notarised
     *
     * @param bool $is_notarised Gets or sets a value indicating whether this instance is notarised.
     *
     * @return $this
     */
    public function setIsNotarised($is_notarised)
    {
        $this->container['is_notarised'] = $is_notarised;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


