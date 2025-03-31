<?php
/**
 * ProfileResult
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
 * ProfileResult Class Doc Comment
 *
 * @category Class
 * @package  ZSGF\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProfileResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProfileResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'union_id' => 'string',
        'phone' => 'string',
        'create_date' => '\DateTime',
        'user_name' => 'string',
        'phone_is_valid' => 'bool',
        'data' => 'string',
        'email' => 'string',
        'email_is_valid' => 'bool',
        'last_update' => '\DateTime',
        'nick_name' => 'string',
        'avatar' => 'string',
        'role' => 'string',
        'permission' => 'string'
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
        'union_id' => null,
        'phone' => null,
        'create_date' => 'date-time',
        'user_name' => null,
        'phone_is_valid' => null,
        'data' => null,
        'email' => null,
        'email_is_valid' => null,
        'last_update' => 'date-time',
        'nick_name' => null,
        'avatar' => null,
        'role' => null,
        'permission' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'union_id' => true,
        'phone' => true,
        'create_date' => false,
        'user_name' => true,
        'phone_is_valid' => false,
        'data' => true,
        'email' => true,
        'email_is_valid' => false,
        'last_update' => false,
        'nick_name' => true,
        'avatar' => true,
        'role' => true,
        'permission' => true
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
        'union_id' => 'unionID',
        'phone' => 'phone',
        'create_date' => 'createDate',
        'user_name' => 'userName',
        'phone_is_valid' => 'phoneIsValid',
        'data' => 'data',
        'email' => 'email',
        'email_is_valid' => 'emailIsValid',
        'last_update' => 'lastUpdate',
        'nick_name' => 'nickName',
        'avatar' => 'avatar',
        'role' => 'role',
        'permission' => 'permission'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'union_id' => 'setUnionId',
        'phone' => 'setPhone',
        'create_date' => 'setCreateDate',
        'user_name' => 'setUserName',
        'phone_is_valid' => 'setPhoneIsValid',
        'data' => 'setData',
        'email' => 'setEmail',
        'email_is_valid' => 'setEmailIsValid',
        'last_update' => 'setLastUpdate',
        'nick_name' => 'setNickName',
        'avatar' => 'setAvatar',
        'role' => 'setRole',
        'permission' => 'setPermission'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'union_id' => 'getUnionId',
        'phone' => 'getPhone',
        'create_date' => 'getCreateDate',
        'user_name' => 'getUserName',
        'phone_is_valid' => 'getPhoneIsValid',
        'data' => 'getData',
        'email' => 'getEmail',
        'email_is_valid' => 'getEmailIsValid',
        'last_update' => 'getLastUpdate',
        'nick_name' => 'getNickName',
        'avatar' => 'getAvatar',
        'role' => 'getRole',
        'permission' => 'getPermission'
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
        $this->setIfExists('union_id', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('create_date', $data ?? [], null);
        $this->setIfExists('user_name', $data ?? [], null);
        $this->setIfExists('phone_is_valid', $data ?? [], null);
        $this->setIfExists('data', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('email_is_valid', $data ?? [], null);
        $this->setIfExists('last_update', $data ?? [], null);
        $this->setIfExists('nick_name', $data ?? [], null);
        $this->setIfExists('avatar', $data ?? [], null);
        $this->setIfExists('role', $data ?? [], null);
        $this->setIfExists('permission', $data ?? [], null);
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
     * @param string|null $union_id union_id
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
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            array_push($this->openAPINullablesSetToNull, 'phone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['phone'] = $phone;

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
     * @param string|null $user_name user_name
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
     * Gets phone_is_valid
     *
     * @return bool|null
     */
    public function getPhoneIsValid()
    {
        return $this->container['phone_is_valid'];
    }

    /**
     * Sets phone_is_valid
     *
     * @param bool|null $phone_is_valid phone_is_valid
     *
     * @return self
     */
    public function setPhoneIsValid($phone_is_valid)
    {
        if (is_null($phone_is_valid)) {
            throw new \InvalidArgumentException('non-nullable phone_is_valid cannot be null');
        }
        $this->container['phone_is_valid'] = $phone_is_valid;

        return $this;
    }

    /**
     * Gets data
     *
     * @return string|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param string|null $data data
     *
     * @return self
     */
    public function setData($data)
    {
        if (is_null($data)) {
            array_push($this->openAPINullablesSetToNull, 'data');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            array_push($this->openAPINullablesSetToNull, 'email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets email_is_valid
     *
     * @return bool|null
     */
    public function getEmailIsValid()
    {
        return $this->container['email_is_valid'];
    }

    /**
     * Sets email_is_valid
     *
     * @param bool|null $email_is_valid email_is_valid
     *
     * @return self
     */
    public function setEmailIsValid($email_is_valid)
    {
        if (is_null($email_is_valid)) {
            throw new \InvalidArgumentException('non-nullable email_is_valid cannot be null');
        }
        $this->container['email_is_valid'] = $email_is_valid;

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
     * Gets nick_name
     *
     * @return string|null
     */
    public function getNickName()
    {
        return $this->container['nick_name'];
    }

    /**
     * Sets nick_name
     *
     * @param string|null $nick_name nick_name
     *
     * @return self
     */
    public function setNickName($nick_name)
    {
        if (is_null($nick_name)) {
            array_push($this->openAPINullablesSetToNull, 'nick_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nick_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nick_name'] = $nick_name;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return string|null
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param string|null $avatar avatar
     *
     * @return self
     */
    public function setAvatar($avatar)
    {
        if (is_null($avatar)) {
            array_push($this->openAPINullablesSetToNull, 'avatar');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('avatar', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['avatar'] = $avatar;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string|null $role role
     *
     * @return self
     */
    public function setRole($role)
    {
        if (is_null($role)) {
            array_push($this->openAPINullablesSetToNull, 'role');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('role', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets permission
     *
     * @return string|null
     */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
     * Sets permission
     *
     * @param string|null $permission permission
     *
     * @return self
     */
    public function setPermission($permission)
    {
        if (is_null($permission)) {
            array_push($this->openAPINullablesSetToNull, 'permission');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('permission', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['permission'] = $permission;

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


