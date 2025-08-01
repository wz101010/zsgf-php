<?php
/**
 * GrantRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ZSGF\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 用户全部 API 文档
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
 * GrantRequest Class Doc Comment
 *
 * @category Class
 * @package  ZSGF\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GrantRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GrantRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'redirect_uri' => 'string',
        'grant_type' => 'string',
        'scopes' => 'string',
        'user_name' => 'string',
        'password' => 'string',
        'union_id' => 'string',
        'platform' => 'string',
        'expire_in_days' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'redirect_uri' => null,
        'grant_type' => null,
        'scopes' => null,
        'user_name' => null,
        'password' => null,
        'union_id' => null,
        'platform' => null,
        'expire_in_days' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'redirect_uri' => true,
        'grant_type' => false,
        'scopes' => false,
        'user_name' => true,
        'password' => true,
        'union_id' => true,
        'platform' => true,
        'expire_in_days' => false
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
        'redirect_uri' => 'redirect_uri',
        'grant_type' => 'grant_type',
        'scopes' => 'scopes',
        'user_name' => 'userName',
        'password' => 'password',
        'union_id' => 'unionId',
        'platform' => 'platform',
        'expire_in_days' => 'expireInDays'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'redirect_uri' => 'setRedirectUri',
        'grant_type' => 'setGrantType',
        'scopes' => 'setScopes',
        'user_name' => 'setUserName',
        'password' => 'setPassword',
        'union_id' => 'setUnionId',
        'platform' => 'setPlatform',
        'expire_in_days' => 'setExpireInDays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'redirect_uri' => 'getRedirectUri',
        'grant_type' => 'getGrantType',
        'scopes' => 'getScopes',
        'user_name' => 'getUserName',
        'password' => 'getPassword',
        'union_id' => 'getUnionId',
        'platform' => 'getPlatform',
        'expire_in_days' => 'getExpireInDays'
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
        $this->setIfExists('redirect_uri', $data ?? [], null);
        $this->setIfExists('grant_type', $data ?? [], null);
        $this->setIfExists('scopes', $data ?? [], null);
        $this->setIfExists('user_name', $data ?? [], null);
        $this->setIfExists('password', $data ?? [], null);
        $this->setIfExists('union_id', $data ?? [], null);
        $this->setIfExists('platform', $data ?? [], null);
        $this->setIfExists('expire_in_days', $data ?? [], null);
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

        if ($this->container['grant_type'] === null) {
            $invalidProperties[] = "'grant_type' can't be null";
        }
        if ((mb_strlen($this->container['grant_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'grant_type', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^(email|phone|unionid|account)$/", $this->container['grant_type'])) {
            $invalidProperties[] = "invalid value for 'grant_type', must be conform to the pattern /^(email|phone|unionid|account)$/.";
        }

        if ($this->container['scopes'] === null) {
            $invalidProperties[] = "'scopes' can't be null";
        }
        if ((mb_strlen($this->container['scopes']) < 1)) {
            $invalidProperties[] = "invalid value for 'scopes', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['expire_in_days']) && ($this->container['expire_in_days'] > 99)) {
            $invalidProperties[] = "invalid value for 'expire_in_days', must be smaller than or equal to 99.";
        }

        if (!is_null($this->container['expire_in_days']) && ($this->container['expire_in_days'] < 1)) {
            $invalidProperties[] = "invalid value for 'expire_in_days', must be bigger than or equal to 1.";
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
     * Gets redirect_uri
     *
     * @return string|null
     */
    public function getRedirectUri()
    {
        return $this->container['redirect_uri'];
    }

    /**
     * Sets redirect_uri
     *
     * @param string|null $redirect_uri 返回地址。默认无限制，也可在【安全-开放认证网址白名单】配置
     *
     * @return self
     */
    public function setRedirectUri($redirect_uri)
    {
        if (is_null($redirect_uri)) {
            array_push($this->openAPINullablesSetToNull, 'redirect_uri');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redirect_uri', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['redirect_uri'] = $redirect_uri;

        return $this;
    }

    /**
     * Gets grant_type
     *
     * @return string
     */
    public function getGrantType()
    {
        return $this->container['grant_type'];
    }

    /**
     * Sets grant_type
     *
     * @param string $grant_type 授权类型。可选：email、phone、unionid、account
     *
     * @return self
     */
    public function setGrantType($grant_type)
    {
        if (is_null($grant_type)) {
            throw new \InvalidArgumentException('non-nullable grant_type cannot be null');
        }

        if ((mb_strlen($grant_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $grant_type when calling GrantRequest., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^(email|phone|unionid|account)$/", ObjectSerializer::toString($grant_type)))) {
            throw new \InvalidArgumentException("invalid value for \$grant_type when calling GrantRequest., must conform to the pattern /^(email|phone|unionid|account)$/.");
        }

        $this->container['grant_type'] = $grant_type;

        return $this;
    }

    /**
     * Gets scopes
     *
     * @return string
     */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
     * Sets scopes
     *
     * @param string $scopes 自定义授权范围，用英文空格分隔
     *
     * @return self
     */
    public function setScopes($scopes)
    {
        if (is_null($scopes)) {
            throw new \InvalidArgumentException('non-nullable scopes cannot be null');
        }

        if ((mb_strlen($scopes) < 1)) {
            throw new \InvalidArgumentException('invalid length for $scopes when calling GrantRequest., must be bigger than or equal to 1.');
        }

        $this->container['scopes'] = $scopes;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return string|null
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string|null $user_name 用户名。授权类型为：email/phone/account必填
     *
     * @return self
     */
    public function setUserName($user_name)
    {
        if (is_null($user_name)) {
            array_push($this->openAPINullablesSetToNull, 'user_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password 登录密码。授权类型为：email/phone/account必填
     *
     * @return self
     */
    public function setPassword($password)
    {
        if (is_null($password)) {
            array_push($this->openAPINullablesSetToNull, 'password');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('password', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets union_id
     *
     * @return string|null
     */
    public function getUnionId()
    {
        return $this->container['union_id'];
    }

    /**
     * Sets union_id
     *
     * @param string|null $union_id unionId。授权类型为：unionid必填
     *
     * @return self
     */
    public function setUnionId($union_id)
    {
        if (is_null($union_id)) {
            array_push($this->openAPINullablesSetToNull, 'union_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('union_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['union_id'] = $union_id;

        return $this;
    }

    /**
     * Gets platform
     *
     * @return string|null
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     *
     * @param string|null $platform 平台。授权类型为：unionid必填
     *
     * @return self
     */
    public function setPlatform($platform)
    {
        if (is_null($platform)) {
            array_push($this->openAPINullablesSetToNull, 'platform');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('platform', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets expire_in_days
     *
     * @return int|null
     */
    public function getExpireInDays()
    {
        return $this->container['expire_in_days'];
    }

    /**
     * Sets expire_in_days
     *
     * @param int|null $expire_in_days 授权有效期。1~99天
     *
     * @return self
     */
    public function setExpireInDays($expire_in_days)
    {
        if (is_null($expire_in_days)) {
            throw new \InvalidArgumentException('non-nullable expire_in_days cannot be null');
        }

        if (($expire_in_days > 99)) {
            throw new \InvalidArgumentException('invalid value for $expire_in_days when calling GrantRequest., must be smaller than or equal to 99.');
        }
        if (($expire_in_days < 1)) {
            throw new \InvalidArgumentException('invalid value for $expire_in_days when calling GrantRequest., must be bigger than or equal to 1.');
        }

        $this->container['expire_in_days'] = $expire_in_days;

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


