<?php
/**
 * Currency
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
 * Currency Class Doc Comment
 *
 * @category Class
 * @package  ZSGF\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Currency implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Currency';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'code' => 'string',
        'symbol' => 'string',
        'issuer' => 'string',
        'currency_type' => 'string',
        'tags' => 'string',
        'status' => 'bool',
        'enable_virtual_recharge' => 'bool',
        'enable_virtual_consume' => 'bool',
        'description' => 'string',
        'fiat_exchange_rate' => 'int',
        'fiat_daily_recharge_limit' => 'int',
        'total_supply' => 'int',
        'create_date' => '\DateTime',
        'last_update' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'name' => null,
        'code' => null,
        'symbol' => null,
        'issuer' => null,
        'currency_type' => null,
        'tags' => null,
        'status' => null,
        'enable_virtual_recharge' => null,
        'enable_virtual_consume' => null,
        'description' => null,
        'fiat_exchange_rate' => 'int64',
        'fiat_daily_recharge_limit' => 'int64',
        'total_supply' => 'int64',
        'create_date' => 'date-time',
        'last_update' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => true,
        'code' => true,
        'symbol' => true,
        'issuer' => true,
        'currency_type' => true,
        'tags' => true,
        'status' => false,
        'enable_virtual_recharge' => false,
        'enable_virtual_consume' => false,
        'description' => true,
        'fiat_exchange_rate' => false,
        'fiat_daily_recharge_limit' => false,
        'total_supply' => false,
        'create_date' => false,
        'last_update' => false
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
        'id' => 'id',
        'name' => 'name',
        'code' => 'code',
        'symbol' => 'symbol',
        'issuer' => 'issuer',
        'currency_type' => 'currencyType',
        'tags' => 'tags',
        'status' => 'status',
        'enable_virtual_recharge' => 'enableVirtualRecharge',
        'enable_virtual_consume' => 'enableVirtualConsume',
        'description' => 'description',
        'fiat_exchange_rate' => 'fiatExchangeRate',
        'fiat_daily_recharge_limit' => 'fiatDailyRechargeLimit',
        'total_supply' => 'totalSupply',
        'create_date' => 'createDate',
        'last_update' => 'lastUpdate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'code' => 'setCode',
        'symbol' => 'setSymbol',
        'issuer' => 'setIssuer',
        'currency_type' => 'setCurrencyType',
        'tags' => 'setTags',
        'status' => 'setStatus',
        'enable_virtual_recharge' => 'setEnableVirtualRecharge',
        'enable_virtual_consume' => 'setEnableVirtualConsume',
        'description' => 'setDescription',
        'fiat_exchange_rate' => 'setFiatExchangeRate',
        'fiat_daily_recharge_limit' => 'setFiatDailyRechargeLimit',
        'total_supply' => 'setTotalSupply',
        'create_date' => 'setCreateDate',
        'last_update' => 'setLastUpdate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'code' => 'getCode',
        'symbol' => 'getSymbol',
        'issuer' => 'getIssuer',
        'currency_type' => 'getCurrencyType',
        'tags' => 'getTags',
        'status' => 'getStatus',
        'enable_virtual_recharge' => 'getEnableVirtualRecharge',
        'enable_virtual_consume' => 'getEnableVirtualConsume',
        'description' => 'getDescription',
        'fiat_exchange_rate' => 'getFiatExchangeRate',
        'fiat_daily_recharge_limit' => 'getFiatDailyRechargeLimit',
        'total_supply' => 'getTotalSupply',
        'create_date' => 'getCreateDate',
        'last_update' => 'getLastUpdate'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('issuer', $data ?? [], null);
        $this->setIfExists('currency_type', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('enable_virtual_recharge', $data ?? [], null);
        $this->setIfExists('enable_virtual_consume', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('fiat_exchange_rate', $data ?? [], null);
        $this->setIfExists('fiat_daily_recharge_limit', $data ?? [], null);
        $this->setIfExists('total_supply', $data ?? [], null);
        $this->setIfExists('create_date', $data ?? [], null);
        $this->setIfExists('last_update', $data ?? [], null);
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 50)) {
            $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['symbol']) && (mb_strlen($this->container['symbol']) > 10)) {
            $invalidProperties[] = "invalid value for 'symbol', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['issuer']) && (mb_strlen($this->container['issuer']) > 100)) {
            $invalidProperties[] = "invalid value for 'issuer', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['currency_type']) && (mb_strlen($this->container['currency_type']) > 50)) {
            $invalidProperties[] = "invalid value for 'currency_type', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['tags']) && (mb_strlen($this->container['tags']) > 255)) {
            $invalidProperties[] = "invalid value for 'tags', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 500)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 500.";
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
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($name) && (mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Currency., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code code
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            array_push($this->openAPINullablesSetToNull, 'code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($code) && (mb_strlen($code) > 50)) {
            throw new \InvalidArgumentException('invalid length for $code when calling Currency., must be smaller than or equal to 50.');
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets symbol
     *
     * @return string|null
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string|null $symbol symbol
     *
     * @return self
     */
    public function setSymbol($symbol)
    {
        if (is_null($symbol)) {
            array_push($this->openAPINullablesSetToNull, 'symbol');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('symbol', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($symbol) && (mb_strlen($symbol) > 10)) {
            throw new \InvalidArgumentException('invalid length for $symbol when calling Currency., must be smaller than or equal to 10.');
        }

        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets issuer
     *
     * @return string|null
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     *
     * @param string|null $issuer issuer
     *
     * @return self
     */
    public function setIssuer($issuer)
    {
        if (is_null($issuer)) {
            array_push($this->openAPINullablesSetToNull, 'issuer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('issuer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($issuer) && (mb_strlen($issuer) > 100)) {
            throw new \InvalidArgumentException('invalid length for $issuer when calling Currency., must be smaller than or equal to 100.');
        }

        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets currency_type
     *
     * @return string|null
     */
    public function getCurrencyType()
    {
        return $this->container['currency_type'];
    }

    /**
     * Sets currency_type
     *
     * @param string|null $currency_type currency_type
     *
     * @return self
     */
    public function setCurrencyType($currency_type)
    {
        if (is_null($currency_type)) {
            array_push($this->openAPINullablesSetToNull, 'currency_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('currency_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($currency_type) && (mb_strlen($currency_type) > 50)) {
            throw new \InvalidArgumentException('invalid length for $currency_type when calling Currency., must be smaller than or equal to 50.');
        }

        $this->container['currency_type'] = $currency_type;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            array_push($this->openAPINullablesSetToNull, 'tags');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tags', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($tags) && (mb_strlen($tags) > 255)) {
            throw new \InvalidArgumentException('invalid length for $tags when calling Currency., must be smaller than or equal to 255.');
        }

        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets status
     *
     * @return bool|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param bool|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets enable_virtual_recharge
     *
     * @return bool|null
     */
    public function getEnableVirtualRecharge()
    {
        return $this->container['enable_virtual_recharge'];
    }

    /**
     * Sets enable_virtual_recharge
     *
     * @param bool|null $enable_virtual_recharge enable_virtual_recharge
     *
     * @return self
     */
    public function setEnableVirtualRecharge($enable_virtual_recharge)
    {
        if (is_null($enable_virtual_recharge)) {
            throw new \InvalidArgumentException('non-nullable enable_virtual_recharge cannot be null');
        }
        $this->container['enable_virtual_recharge'] = $enable_virtual_recharge;

        return $this;
    }

    /**
     * Gets enable_virtual_consume
     *
     * @return bool|null
     */
    public function getEnableVirtualConsume()
    {
        return $this->container['enable_virtual_consume'];
    }

    /**
     * Sets enable_virtual_consume
     *
     * @param bool|null $enable_virtual_consume enable_virtual_consume
     *
     * @return self
     */
    public function setEnableVirtualConsume($enable_virtual_consume)
    {
        if (is_null($enable_virtual_consume)) {
            throw new \InvalidArgumentException('non-nullable enable_virtual_consume cannot be null');
        }
        $this->container['enable_virtual_consume'] = $enable_virtual_consume;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($description) && (mb_strlen($description) > 500)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Currency., must be smaller than or equal to 500.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets fiat_exchange_rate
     *
     * @return int|null
     */
    public function getFiatExchangeRate()
    {
        return $this->container['fiat_exchange_rate'];
    }

    /**
     * Sets fiat_exchange_rate
     *
     * @param int|null $fiat_exchange_rate fiat_exchange_rate
     *
     * @return self
     */
    public function setFiatExchangeRate($fiat_exchange_rate)
    {
        if (is_null($fiat_exchange_rate)) {
            throw new \InvalidArgumentException('non-nullable fiat_exchange_rate cannot be null');
        }
        $this->container['fiat_exchange_rate'] = $fiat_exchange_rate;

        return $this;
    }

    /**
     * Gets fiat_daily_recharge_limit
     *
     * @return int|null
     */
    public function getFiatDailyRechargeLimit()
    {
        return $this->container['fiat_daily_recharge_limit'];
    }

    /**
     * Sets fiat_daily_recharge_limit
     *
     * @param int|null $fiat_daily_recharge_limit fiat_daily_recharge_limit
     *
     * @return self
     */
    public function setFiatDailyRechargeLimit($fiat_daily_recharge_limit)
    {
        if (is_null($fiat_daily_recharge_limit)) {
            throw new \InvalidArgumentException('non-nullable fiat_daily_recharge_limit cannot be null');
        }
        $this->container['fiat_daily_recharge_limit'] = $fiat_daily_recharge_limit;

        return $this;
    }

    /**
     * Gets total_supply
     *
     * @return int|null
     */
    public function getTotalSupply()
    {
        return $this->container['total_supply'];
    }

    /**
     * Sets total_supply
     *
     * @param int|null $total_supply total_supply
     *
     * @return self
     */
    public function setTotalSupply($total_supply)
    {
        if (is_null($total_supply)) {
            throw new \InvalidArgumentException('non-nullable total_supply cannot be null');
        }
        $this->container['total_supply'] = $total_supply;

        return $this;
    }

    /**
     * Gets create_date
     *
     * @return \DateTime|null
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     *
     * @param \DateTime|null $create_date create_date
     *
     * @return self
     */
    public function setCreateDate($create_date)
    {
        if (is_null($create_date)) {
            throw new \InvalidArgumentException('non-nullable create_date cannot be null');
        }
        $this->container['create_date'] = $create_date;

        return $this;
    }

    /**
     * Gets last_update
     *
     * @return \DateTime|null
     */
    public function getLastUpdate()
    {
        return $this->container['last_update'];
    }

    /**
     * Sets last_update
     *
     * @param \DateTime|null $last_update last_update
     *
     * @return self
     */
    public function setLastUpdate($last_update)
    {
        if (is_null($last_update)) {
            throw new \InvalidArgumentException('non-nullable last_update cannot be null');
        }
        $this->container['last_update'] = $last_update;

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


