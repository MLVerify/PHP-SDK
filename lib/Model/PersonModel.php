<?php
/**
 * PersonModel
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
 * PersonModel Class Doc Comment
 *
 * @category Class
 * @package  MLVerify\Client
 * @author   MLVerify Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PersonModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PersonModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'client_id' => 'string',
        'first_name' => 'string',
        'middle_name' => 'string',
        'surname' => 'string',
        'dob_day' => 'int',
        'dob_month' => 'int',
        'dob_year' => 'int',
        'nationality' => 'string',
        'relationship' => 'string',
        'address' => '\MLVerify\Client\Model\AddressModel',
        'is_associated_person' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'client_id' => null,
        'first_name' => null,
        'middle_name' => null,
        'surname' => null,
        'dob_day' => 'int32',
        'dob_month' => 'int32',
        'dob_year' => 'int32',
        'nationality' => null,
        'relationship' => null,
        'address' => null,
        'is_associated_person' => null
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
        'id' => 'id',
        'client_id' => 'client_id',
        'first_name' => 'first_name',
        'middle_name' => 'middle_name',
        'surname' => 'surname',
        'dob_day' => 'dob_day',
        'dob_month' => 'dob_month',
        'dob_year' => 'dob_year',
        'nationality' => 'nationality',
        'relationship' => 'relationship',
        'address' => 'address',
        'is_associated_person' => 'is_associated_person'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'client_id' => 'setClientId',
        'first_name' => 'setFirstName',
        'middle_name' => 'setMiddleName',
        'surname' => 'setSurname',
        'dob_day' => 'setDobDay',
        'dob_month' => 'setDobMonth',
        'dob_year' => 'setDobYear',
        'nationality' => 'setNationality',
        'relationship' => 'setRelationship',
        'address' => 'setAddress',
        'is_associated_person' => 'setIsAssociatedPerson'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'client_id' => 'getClientId',
        'first_name' => 'getFirstName',
        'middle_name' => 'getMiddleName',
        'surname' => 'getSurname',
        'dob_day' => 'getDobDay',
        'dob_month' => 'getDobMonth',
        'dob_year' => 'getDobYear',
        'nationality' => 'getNationality',
        'relationship' => 'getRelationship',
        'address' => 'getAddress',
        'is_associated_person' => 'getIsAssociatedPerson'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
        $this->container['surname'] = isset($data['surname']) ? $data['surname'] : null;
        $this->container['dob_day'] = isset($data['dob_day']) ? $data['dob_day'] : null;
        $this->container['dob_month'] = isset($data['dob_month']) ? $data['dob_month'] : null;
        $this->container['dob_year'] = isset($data['dob_year']) ? $data['dob_year'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['relationship'] = isset($data['relationship']) ? $data['relationship'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['is_associated_person'] = isset($data['is_associated_person']) ? $data['is_associated_person'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['client_id'] === null) {
            $invalidProperties[] = "'client_id' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['surname'] === null) {
            $invalidProperties[] = "'surname' can't be null";
        }
        if (!is_null($this->container['dob_day']) && ($this->container['dob_day'] > 31)) {
            $invalidProperties[] = "invalid value for 'dob_day', must be smaller than or equal to 31.";
        }

        if (!is_null($this->container['dob_day']) && ($this->container['dob_day'] < 1)) {
            $invalidProperties[] = "invalid value for 'dob_day', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['dob_month']) && ($this->container['dob_month'] > 12)) {
            $invalidProperties[] = "invalid value for 'dob_month', must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['dob_month']) && ($this->container['dob_month'] < 1)) {
            $invalidProperties[] = "invalid value for 'dob_month', must be bigger than or equal to 1.";
        }

        if ($this->container['relationship'] === null) {
            $invalidProperties[] = "'relationship' can't be null";
        }
        if ($this->container['is_associated_person'] === null) {
            $invalidProperties[] = "'is_associated_person' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The person identifier.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string $middle_name middle_name
     *
     * @return $this
     */
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string $surname surname
     *
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets dob_day
     *
     * @return int
     */
    public function getDobDay()
    {
        return $this->container['dob_day'];
    }

    /**
     * Sets dob_day
     *
     * @param int $dob_day range 1 - 31
     *
     * @return $this
     */
    public function setDobDay($dob_day)
    {

        if (!is_null($dob_day) && ($dob_day > 31)) {
            throw new \InvalidArgumentException('invalid value for $dob_day when calling PersonModel., must be smaller than or equal to 31.');
        }
        if (!is_null($dob_day) && ($dob_day < 1)) {
            throw new \InvalidArgumentException('invalid value for $dob_day when calling PersonModel., must be bigger than or equal to 1.');
        }

        $this->container['dob_day'] = $dob_day;

        return $this;
    }

    /**
     * Gets dob_month
     *
     * @return int
     */
    public function getDobMonth()
    {
        return $this->container['dob_month'];
    }

    /**
     * Sets dob_month
     *
     * @param int $dob_month range 1 - 12
     *
     * @return $this
     */
    public function setDobMonth($dob_month)
    {

        if (!is_null($dob_month) && ($dob_month > 12)) {
            throw new \InvalidArgumentException('invalid value for $dob_month when calling PersonModel., must be smaller than or equal to 12.');
        }
        if (!is_null($dob_month) && ($dob_month < 1)) {
            throw new \InvalidArgumentException('invalid value for $dob_month when calling PersonModel., must be bigger than or equal to 1.');
        }

        $this->container['dob_month'] = $dob_month;

        return $this;
    }

    /**
     * Gets dob_year
     *
     * @return int
     */
    public function getDobYear()
    {
        return $this->container['dob_year'];
    }

    /**
     * Sets dob_year
     *
     * @param int $dob_year dob_year
     *
     * @return $this
     */
    public function setDobYear($dob_year)
    {
        $this->container['dob_year'] = $dob_year;

        return $this;
    }

    /**
     * Gets nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     *
     * @param string $nationality nationality
     *
     * @return $this
     */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;

        return $this;
    }

    /**
     * Gets relationship
     *
     * @return string
     */
    public function getRelationship()
    {
        return $this->container['relationship'];
    }

    /**
     * Sets relationship
     *
     * @param string $relationship relationship
     *
     * @return $this
     */
    public function setRelationship($relationship)
    {
        $this->container['relationship'] = $relationship;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \MLVerify\Client\Model\AddressModel
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \MLVerify\Client\Model\AddressModel $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets is_associated_person
     *
     * @return bool
     */
    public function getIsAssociatedPerson()
    {
        return $this->container['is_associated_person'];
    }

    /**
     * Sets is_associated_person
     *
     * @param bool $is_associated_person is_associated_person
     *
     * @return $this
     */
    public function setIsAssociatedPerson($is_associated_person)
    {
        $this->container['is_associated_person'] = $is_associated_person;

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


