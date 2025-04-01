<?php
/**
 * TradeSettleDetail
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ZSGF\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 全部  API 文档
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.13.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ZSGF\Client\ZSGF\Client\Model;

use \ArrayAccess;
use \ZSGF\Client\ObjectSerializer;

/**
 * TradeSettleDetail Class Doc Comment
 *
 * @category Class
 * @package  ZSGF\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TradeSettleDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TradeSettleDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'operation_dt' => 'string',
        'operation_serial_no' => 'string',
        'operation_type' => 'string',
        'ori_trans_in' => 'string',
        'ori_trans_out' => 'string',
        'trans_in' => 'string',
        'trans_out' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'operation_dt' => null,
        'operation_serial_no' => null,
        'operation_type' => null,
        'ori_trans_in' => null,
        'ori_trans_out' => null,
        'trans_in' => null,
        'trans_out' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amount' => true,
        'operation_dt' => true,
        'operation_serial_no' => true,
        'operation_type' => true,
        'ori_trans_in' => true,
        'ori_trans_out' => true,
        'trans_in' => true,
        'trans_out' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount' => 'amount',
        'operation_dt' => 'operationDt',
        'operation_serial_no' => 'operationSerialNo',
        'operation_type' => 'operationType',
        'ori_trans_in' => 'oriTransIn',
        'ori_trans_out' => 'oriTransOut',
        'trans_in' => 'transIn',
        'trans_out' => 'transOut'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'operation_dt' => 'setOperationDt',
        'operation_serial_no' => 'setOperationSerialNo',
        'operation_type' => 'setOperationType',
        'ori_trans_in' => 'setOriTransIn',
        'ori_trans_out' => 'setOriTransOut',
        'trans_in' => 'setTransIn',
        'trans_out' => 'setTransOut'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'operation_dt' => 'getOperationDt',
        'operation_serial_no' => 'getOperationSerialNo',
        'operation_type' => 'getOperationType',
        'ori_trans_in' => 'getOriTransIn',
        'ori_trans_out' => 'getOriTransOut',
        'trans_in' => 'getTransIn',
        'trans_out' => 'getTransOut'
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
        return self::$openAPIModelName;
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('operation_dt', $data ?? [], null);
        $this->setIfExists('operation_serial_no', $data ?? [], null);
        $this->setIfExists('operation_type', $data ?? [], null);
        $this->setIfExists('ori_trans_in', $data ?? [], null);
        $this->setIfExists('ori_trans_out', $data ?? [], null);
        $this->setIfExists('trans_in', $data ?? [], null);
        $this->setIfExists('trans_out', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            array_push($this->openAPINullablesSetToNull, 'amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets operation_dt
     *
     * @return string|null
     */
    public function getOperationDt()
    {
        return $this->container['operation_dt'];
    }

    /**
     * Sets operation_dt
     *
     * @param string|null $operation_dt operation_dt
     *
     * @return self
     */
    public function setOperationDt($operation_dt)
    {
        if (is_null($operation_dt)) {
            array_push($this->openAPINullablesSetToNull, 'operation_dt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('operation_dt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['operation_dt'] = $operation_dt;

        return $this;
    }

    /**
     * Gets operation_serial_no
     *
     * @return string|null
     */
    public function getOperationSerialNo()
    {
        return $this->container['operation_serial_no'];
    }

    /**
     * Sets operation_serial_no
     *
     * @param string|null $operation_serial_no operation_serial_no
     *
     * @return self
     */
    public function setOperationSerialNo($operation_serial_no)
    {
        if (is_null($operation_serial_no)) {
            array_push($this->openAPINullablesSetToNull, 'operation_serial_no');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('operation_serial_no', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['operation_serial_no'] = $operation_serial_no;

        return $this;
    }

    /**
     * Gets operation_type
     *
     * @return string|null
     */
    public function getOperationType()
    {
        return $this->container['operation_type'];
    }

    /**
     * Sets operation_type
     *
     * @param string|null $operation_type operation_type
     *
     * @return self
     */
    public function setOperationType($operation_type)
    {
        if (is_null($operation_type)) {
            array_push($this->openAPINullablesSetToNull, 'operation_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('operation_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['operation_type'] = $operation_type;

        return $this;
    }

    /**
     * Gets ori_trans_in
     *
     * @return string|null
     */
    public function getOriTransIn()
    {
        return $this->container['ori_trans_in'];
    }

    /**
     * Sets ori_trans_in
     *
     * @param string|null $ori_trans_in ori_trans_in
     *
     * @return self
     */
    public function setOriTransIn($ori_trans_in)
    {
        if (is_null($ori_trans_in)) {
            array_push($this->openAPINullablesSetToNull, 'ori_trans_in');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ori_trans_in', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ori_trans_in'] = $ori_trans_in;

        return $this;
    }

    /**
     * Gets ori_trans_out
     *
     * @return string|null
     */
    public function getOriTransOut()
    {
        return $this->container['ori_trans_out'];
    }

    /**
     * Sets ori_trans_out
     *
     * @param string|null $ori_trans_out ori_trans_out
     *
     * @return self
     */
    public function setOriTransOut($ori_trans_out)
    {
        if (is_null($ori_trans_out)) {
            array_push($this->openAPINullablesSetToNull, 'ori_trans_out');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ori_trans_out', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ori_trans_out'] = $ori_trans_out;

        return $this;
    }

    /**
     * Gets trans_in
     *
     * @return string|null
     */
    public function getTransIn()
    {
        return $this->container['trans_in'];
    }

    /**
     * Sets trans_in
     *
     * @param string|null $trans_in trans_in
     *
     * @return self
     */
    public function setTransIn($trans_in)
    {
        if (is_null($trans_in)) {
            array_push($this->openAPINullablesSetToNull, 'trans_in');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('trans_in', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['trans_in'] = $trans_in;

        return $this;
    }

    /**
     * Gets trans_out
     *
     * @return string|null
     */
    public function getTransOut()
    {
        return $this->container['trans_out'];
    }

    /**
     * Sets trans_out
     *
     * @param string|null $trans_out trans_out
     *
     * @return self
     */
    public function setTransOut($trans_out)
    {
        if (is_null($trans_out)) {
            array_push($this->openAPINullablesSetToNull, 'trans_out');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('trans_out', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['trans_out'] = $trans_out;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


