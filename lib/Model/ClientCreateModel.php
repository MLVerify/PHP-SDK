<?php
/**
 * ClientCreateModel
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
 * ClientCreateModel Class Doc Comment
 *
 * @category Class
 * @package  MLVerify\Client
 * @author   MLVerify Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClientCreateModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ClientCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => 'string',
        'auto_import_pscs' => 'bool',
        'name' => 'string',
        'type' => 'string',
        'company_number' => 'string',
        'reference' => 'string',
        'trading_address' => '\MLVerify\Client\Model\AddressModel',
        'correspondence_address' => '\MLVerify\Client\Model\AddressModel',
        'phone1' => 'string',
        'phone2' => 'string',
        'email' => 'string',
        'web_address' => 'string',
        'next_review_date' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'risk_level' => 'string',
        'tags' => 'string',
        'first_name' => 'string',
        'surname' => 'string',
        'nationality_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
        'auto_import_pscs' => null,
        'name' => null,
        'type' => null,
        'company_number' => null,
        'reference' => null,
        'trading_address' => null,
        'correspondence_address' => null,
        'phone1' => null,
        'phone2' => null,
        'email' => null,
        'web_address' => null,
        'next_review_date' => null,
        'start_date' => null,
        'end_date' => null,
        'risk_level' => null,
        'tags' => null,
        'first_name' => null,
        'surname' => null,
        'nationality_code' => null
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
        'status' => 'status',
        'auto_import_pscs' => 'auto_import_pscs',
        'name' => 'name',
        'type' => 'type',
        'company_number' => 'company_number',
        'reference' => 'reference',
        'trading_address' => 'trading_address',
        'correspondence_address' => 'correspondence_address',
        'phone1' => 'phone1',
        'phone2' => 'phone2',
        'email' => 'email',
        'web_address' => 'web_address',
        'next_review_date' => 'next_review_date',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'risk_level' => 'risk_level',
        'tags' => 'tags',
        'first_name' => 'first_name',
        'surname' => 'surname',
        'nationality_code' => 'nationality_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'auto_import_pscs' => 'setAutoImportPscs',
        'name' => 'setName',
        'type' => 'setType',
        'company_number' => 'setCompanyNumber',
        'reference' => 'setReference',
        'trading_address' => 'setTradingAddress',
        'correspondence_address' => 'setCorrespondenceAddress',
        'phone1' => 'setPhone1',
        'phone2' => 'setPhone2',
        'email' => 'setEmail',
        'web_address' => 'setWebAddress',
        'next_review_date' => 'setNextReviewDate',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'risk_level' => 'setRiskLevel',
        'tags' => 'setTags',
        'first_name' => 'setFirstName',
        'surname' => 'setSurname',
        'nationality_code' => 'setNationalityCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'auto_import_pscs' => 'getAutoImportPscs',
        'name' => 'getName',
        'type' => 'getType',
        'company_number' => 'getCompanyNumber',
        'reference' => 'getReference',
        'trading_address' => 'getTradingAddress',
        'correspondence_address' => 'getCorrespondenceAddress',
        'phone1' => 'getPhone1',
        'phone2' => 'getPhone2',
        'email' => 'getEmail',
        'web_address' => 'getWebAddress',
        'next_review_date' => 'getNextReviewDate',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'risk_level' => 'getRiskLevel',
        'tags' => 'getTags',
        'first_name' => 'getFirstName',
        'surname' => 'getSurname',
        'nationality_code' => 'getNationalityCode'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['auto_import_pscs'] = isset($data['auto_import_pscs']) ? $data['auto_import_pscs'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['company_number'] = isset($data['company_number']) ? $data['company_number'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['trading_address'] = isset($data['trading_address']) ? $data['trading_address'] : null;
        $this->container['correspondence_address'] = isset($data['correspondence_address']) ? $data['correspondence_address'] : null;
        $this->container['phone1'] = isset($data['phone1']) ? $data['phone1'] : null;
        $this->container['phone2'] = isset($data['phone2']) ? $data['phone2'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['web_address'] = isset($data['web_address']) ? $data['web_address'] : null;
        $this->container['next_review_date'] = isset($data['next_review_date']) ? $data['next_review_date'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['risk_level'] = isset($data['risk_level']) ? $data['risk_level'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['surname'] = isset($data['surname']) ? $data['surname'] : null;
        $this->container['nationality_code'] = isset($data['nationality_code']) ? $data['nationality_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if (!is_null($this->container['company_number']) && !preg_match("/^([a-zA-Z]{1,2})?[0-9]+$/", $this->container['company_number'])) {
            $invalidProperties[] = "invalid value for 'company_number', must be conform to the pattern /^([a-zA-Z]{1,2})?[0-9]+$/.";
        }

        if ($this->container['trading_address'] === null) {
            $invalidProperties[] = "'trading_address' can't be null";
        }
        if (!is_null($this->container['phone1']) && !preg_match("/^[0-9-+()\\s]+$/", $this->container['phone1'])) {
            $invalidProperties[] = "invalid value for 'phone1', must be conform to the pattern /^[0-9-+()\\s]+$/.";
        }

        if (!is_null($this->container['phone2']) && !preg_match("/^[0-9-+()\\s]+$/", $this->container['phone2'])) {
            $invalidProperties[] = "invalid value for 'phone2', must be conform to the pattern /^[0-9-+()\\s]+$/.";
        }

        if (!is_null($this->container['web_address']) && !preg_match("/((www\\.|(http|https|)+\\:\/\/)?[&#95;.a-z0-9-]+\\.[a-z0-9\/&#95;:@=.+?,##%&~-]*[^.|\\'|\\# |!|\\(|?|,| |>|<|;|\\)])/", $this->container['web_address'])) {
            $invalidProperties[] = "invalid value for 'web_address', must be conform to the pattern /((www\\.|(http|https|)+\\:\/\/)?[&#95;.a-z0-9-]+\\.[a-z0-9\/&#95;:@=.+?,##%&~-]*[^.|\\'|\\# |!|\\(|?|,| |>|<|;|\\)])/.";
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
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets auto_import_pscs
     *
     * @return bool
     */
    public function getAutoImportPscs()
    {
        return $this->container['auto_import_pscs'];
    }

    /**
     * Sets auto_import_pscs
     *
     * @param bool $auto_import_pscs auto_import_pscs
     *
     * @return $this
     */
    public function setAutoImportPscs($auto_import_pscs)
    {
        $this->container['auto_import_pscs'] = $auto_import_pscs;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets company_number
     *
     * @return string
     */
    public function getCompanyNumber()
    {
        return $this->container['company_number'];
    }

    /**
     * Sets company_number
     *
     * @param string $company_number company_number
     *
     * @return $this
     */
    public function setCompanyNumber($company_number)
    {

        if (!is_null($company_number) && (!preg_match("/^([a-zA-Z]{1,2})?[0-9]+$/", $company_number))) {
            throw new \InvalidArgumentException("invalid value for $company_number when calling ClientCreateModel., must conform to the pattern /^([a-zA-Z]{1,2})?[0-9]+$/.");
        }

        $this->container['company_number'] = $company_number;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets trading_address
     *
     * @return \MLVerify\Client\Model\AddressModel
     */
    public function getTradingAddress()
    {
        return $this->container['trading_address'];
    }

    /**
     * Sets trading_address
     *
     * @param \MLVerify\Client\Model\AddressModel $trading_address trading_address
     *
     * @return $this
     */
    public function setTradingAddress($trading_address)
    {
        $this->container['trading_address'] = $trading_address;

        return $this;
    }

    /**
     * Gets correspondence_address
     *
     * @return \MLVerify\Client\Model\AddressModel
     */
    public function getCorrespondenceAddress()
    {
        return $this->container['correspondence_address'];
    }

    /**
     * Sets correspondence_address
     *
     * @param \MLVerify\Client\Model\AddressModel $correspondence_address correspondence_address
     *
     * @return $this
     */
    public function setCorrespondenceAddress($correspondence_address)
    {
        $this->container['correspondence_address'] = $correspondence_address;

        return $this;
    }

    /**
     * Gets phone1
     *
     * @return string
     */
    public function getPhone1()
    {
        return $this->container['phone1'];
    }

    /**
     * Sets phone1
     *
     * @param string $phone1 phone1
     *
     * @return $this
     */
    public function setPhone1($phone1)
    {

        if (!is_null($phone1) && (!preg_match("/^[0-9-+()\\s]+$/", $phone1))) {
            throw new \InvalidArgumentException("invalid value for $phone1 when calling ClientCreateModel., must conform to the pattern /^[0-9-+()\\s]+$/.");
        }

        $this->container['phone1'] = $phone1;

        return $this;
    }

    /**
     * Gets phone2
     *
     * @return string
     */
    public function getPhone2()
    {
        return $this->container['phone2'];
    }

    /**
     * Sets phone2
     *
     * @param string $phone2 phone2
     *
     * @return $this
     */
    public function setPhone2($phone2)
    {

        if (!is_null($phone2) && (!preg_match("/^[0-9-+()\\s]+$/", $phone2))) {
            throw new \InvalidArgumentException("invalid value for $phone2 when calling ClientCreateModel., must conform to the pattern /^[0-9-+()\\s]+$/.");
        }

        $this->container['phone2'] = $phone2;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets web_address
     *
     * @return string
     */
    public function getWebAddress()
    {
        return $this->container['web_address'];
    }

    /**
     * Sets web_address
     *
     * @param string $web_address web_address
     *
     * @return $this
     */
    public function setWebAddress($web_address)
    {

        if (!is_null($web_address) && (!preg_match("/((www\\.|(http|https|)+\\:\/\/)?[&#95;.a-z0-9-]+\\.[a-z0-9\/&#95;:@=.+?,##%&~-]*[^.|\\'|\\# |!|\\(|?|,| |>|<|;|\\)])/", $web_address))) {
            throw new \InvalidArgumentException("invalid value for $web_address when calling ClientCreateModel., must conform to the pattern /((www\\.|(http|https|)+\\:\/\/)?[&#95;.a-z0-9-]+\\.[a-z0-9\/&#95;:@=.+?,##%&~-]*[^.|\\'|\\# |!|\\(|?|,| |>|<|;|\\)])/.");
        }

        $this->container['web_address'] = $web_address;

        return $this;
    }

    /**
     * Gets next_review_date
     *
     * @return string
     */
    public function getNextReviewDate()
    {
        return $this->container['next_review_date'];
    }

    /**
     * Sets next_review_date
     *
     * @param string $next_review_date next_review_date
     *
     * @return $this
     */
    public function setNextReviewDate($next_review_date)
    {
        $this->container['next_review_date'] = $next_review_date;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets risk_level
     *
     * @return string
     */
    public function getRiskLevel()
    {
        return $this->container['risk_level'];
    }

    /**
     * Sets risk_level
     *
     * @param string $risk_level risk_level
     *
     * @return $this
     */
    public function setRiskLevel($risk_level)
    {
        $this->container['risk_level'] = $risk_level;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string $tags Supply upto 5 comma separated tags, with each tag conforming to the following pattern [a-z0-0_-]{1,40}
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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
     * @param string $first_name required for sole-trader and individual types
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

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
     * @param string $surname required for sole-trader and individual types
     *
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets nationality_code
     *
     * @return string
     */
    public function getNationalityCode()
    {
        return $this->container['nationality_code'];
    }

    /**
     * Sets nationality_code
     *
     * @param string $nationality_code required for sole-trader and individual types
     *
     * @return $this
     */
    public function setNationalityCode($nationality_code)
    {
        $this->container['nationality_code'] = $nationality_code;

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


