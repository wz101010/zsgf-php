# ZSGF\Client\UserFriendsApi

All URIs are relative to https://api-dev.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userCommonInterests()**](UserFriendsApi.md#userCommonInterests) | **GET** /UserFriends/{appKey}/CommonInterests | 推荐相似兴趣用户 |
| [**userFollowUser()**](UserFriendsApi.md#userFollowUser) | **POST** /UserFriends/{appKey}/Follower/{userId} | 添加关注 |
| [**userFollowerPut()**](UserFriendsApi.md#userFollowerPut) | **PUT** /UserFriends/{appKey}/Follower/{id} | 刷新粉丝数据 |
| [**userFollowers()**](UserFriendsApi.md#userFollowers) | **GET** /UserFriends/{appKey}/Followers | 获取粉丝列表 |
| [**userFollowing()**](UserFriendsApi.md#userFollowing) | **GET** /UserFriends/{appKey}/Following | 获取关注列表 / 判断是否关注 |
| [**userFriendsNearBy()**](UserFriendsApi.md#userFriendsNearBy) | **GET** /UserFriends/{appKey}/NearBy | 推荐附近用户 |
| [**userMutualFollowers()**](UserFriendsApi.md#userMutualFollowers) | **GET** /UserFriends/{appKey}/MutualFollowers | 推荐共同粉丝用户 |
| [**userMutualFollowings()**](UserFriendsApi.md#userMutualFollowings) | **GET** /UserFriends/{appKey}/MutualFollowings | 推荐共同关注用户 |
| [**userProfileById()**](UserFriendsApi.md#userProfileById) | **GET** /UserFriends/{appKey}/Profile/{userId} | 获取用户资料 |
| [**userUnfollowUser()**](UserFriendsApi.md#userUnfollowUser) | **DELETE** /UserFriends/{appKey}/Follower/{userId} | 取消关注 |


## `userCommonInterests()`

```php
userCommonInterests($app_key, $tag, $skip, $take): \ZSGF\Client\ZSGF\Client\Model\UserCommonInterestsResultApiResponse
```

推荐相似兴趣用户

推荐有共同爱好的用户

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserFriendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$tag = 'tag_example'; // string | 兴趣标签
$skip = 0; // int | 跳过的记录数
$take = 10; // int | 获取的记录数

try {
    $result = $apiInstance->userCommonInterests($app_key, $tag, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserFriendsApi->userCommonInterests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **tag** | **string**| 兴趣标签 | [optional] |
| **skip** | **int**| 跳过的记录数 | [optional] [default to 0] |
| **take** | **int**| 获取的记录数 | [optional] [default to 10] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\UserCommonInterestsResultApiResponse**](../Model/UserCommonInterestsResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userFollowUser()`

```php
userFollowUser($user_id, $app_key): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

添加关注

关注指定用户

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserFriendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 要关注的用户ID
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->userFollowUser($user_id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserFriendsApi->userFollowUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| 要关注的用户ID | |
| **app_key** | **string**|  | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse**](../Model/BooleanApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userFollowerPut()`

```php
userFollowerPut($id, $app_key, $follower_put_model): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

刷新粉丝数据

根据粉丝ID更新粉丝信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserFriendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 粉丝ID
$app_key = 'app_key_example'; // string
$follower_put_model = new \ZSGF\Client\ZSGF\Client\Model\FollowerPutModel(); // \ZSGF\Client\ZSGF\Client\Model\FollowerPutModel | 更新粉丝的请求参数

try {
    $result = $apiInstance->userFollowerPut($id, $app_key, $follower_put_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserFriendsApi->userFollowerPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 粉丝ID | |
| **app_key** | **string**|  | |
| **follower_put_model** | [**\ZSGF\Client\ZSGF\Client\Model\FollowerPutModel**](../Model/FollowerPutModel.md)| 更新粉丝的请求参数 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse**](../Model/BooleanApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userFollowers()`

```php
userFollowers($app_key, $tag, $status, $target_user_id, $skip, $take): \ZSGF\Client\ZSGF\Client\Model\UserFollowersResultApiResponse
```

获取粉丝列表

根据条件获取我的粉丝列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserFriendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$tag = 'tag_example'; // string | 标签
$status = 'status_example'; // string | 状态
$target_user_id = 0; // int | 指定用户的粉丝
$skip = 0; // int | 跳过的记录数
$take = 10; // int | 获取的记录数

try {
    $result = $apiInstance->userFollowers($app_key, $tag, $status, $target_user_id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserFriendsApi->userFollowers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **tag** | **string**| 标签 | [optional] |
| **status** | **string**| 状态 | [optional] |
| **target_user_id** | **int**| 指定用户的粉丝 | [optional] [default to 0] |
| **skip** | **int**| 跳过的记录数 | [optional] [default to 0] |
| **take** | **int**| 获取的记录数 | [optional] [default to 10] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\UserFollowersResultApiResponse**](../Model/UserFollowersResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userFollowing()`

```php
userFollowing($app_key, $tag, $status, $target_user_id, $skip, $take, $check_user_id, $only_ids): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

获取关注列表 / 判断是否关注

根据条件获取我的关注列表，或判断是否关注某个用户

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserFriendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$tag = 'tag_example'; // string | 用于过滤关注列表的标签（可选）。
$status = 'status_example'; // string | 用于过滤关注列表的状态（可选）。
$target_user_id = 0; // int | 指定用户的关注记录，如果不提供则默认为当前用户的关注。
$skip = 0; // int | 跳过的记录数，用于分页（默认0）。
$take = 10; // int | 获取的记录数，用于分页（默认10）。
$check_user_id = 56; // int | 要判断是否关注的目标用户ID。如果提供此参数，方法将返回一个布尔值，表示当前用户是否关注该目标用户。
$only_ids = false; // bool | 是否只返回关注用户的ID集合，默认为false（即返回完整的关注用户信息）。

try {
    $result = $apiInstance->userFollowing($app_key, $tag, $status, $target_user_id, $skip, $take, $check_user_id, $only_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserFriendsApi->userFollowing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **tag** | **string**| 用于过滤关注列表的标签（可选）。 | [optional] |
| **status** | **string**| 用于过滤关注列表的状态（可选）。 | [optional] |
| **target_user_id** | **int**| 指定用户的关注记录，如果不提供则默认为当前用户的关注。 | [optional] [default to 0] |
| **skip** | **int**| 跳过的记录数，用于分页（默认0）。 | [optional] [default to 0] |
| **take** | **int**| 获取的记录数，用于分页（默认10）。 | [optional] [default to 10] |
| **check_user_id** | **int**| 要判断是否关注的目标用户ID。如果提供此参数，方法将返回一个布尔值，表示当前用户是否关注该目标用户。 | [optional] |
| **only_ids** | **bool**| 是否只返回关注用户的ID集合，默认为false（即返回完整的关注用户信息）。 | [optional] [default to false] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse**](../Model/BooleanApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userFriendsNearBy()`

```php
userFriendsNearBy($longitude, $latitude, $app_key, $country, $state, $city, $district, $gender, $age_s, $age_e, $tag, $distance, $skip, $take): \ZSGF\Client\ZSGF\Client\Model\UserFriendsNearByResultApiResponse
```

推荐附近用户

根据地理位置坐标和多种筛选条件，查询附近满足条件的用户列表，支持分页和按距离排序。 地理位置查询使用MySQL的ST_Distance_Sphere函数计算球面距离。 注意：longitude为经度(X轴)，latitude为纬度(Y轴)，参数顺序与常规坐标系一致

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserFriendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$longitude = 3.4; // float | 当前用户经度坐标(WGS84坐标系)
$latitude = 3.4; // float | 当前用户纬度坐标(WGS84坐标系)
$app_key = 'app_key_example'; // string
$country = 'country_example'; // string | 国家过滤条件（精确匹配）
$state = 'state_example'; // string | 省份过滤条件（精确匹配）
$city = 'city_example'; // string | 城市过滤条件（精确匹配）
$district = 'district_example'; // string | 区县过滤条件（精确匹配）
$gender = 'gender_example'; // string | 性别过滤条件（可选值示例：Male/Female/Other）
$age_s = 56; // int | 年龄起始范围（包含，0表示不限制）
$age_e = 56; // int | 年龄结束范围（包含，0表示不限制）
$tag = 'tag_example'; // string | 兴趣标签过滤（支持模糊匹配，如：\"运动\"）
$distance = 0; // int | 搜索半径（单位：米，0表示不限制距离）
$skip = 0; // int | 跳过的记录数（分页起始位置，默认0）
$take = 10; // int | 获取的记录数（分页大小，默认10，最大100）

try {
    $result = $apiInstance->userFriendsNearBy($longitude, $latitude, $app_key, $country, $state, $city, $district, $gender, $age_s, $age_e, $tag, $distance, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserFriendsApi->userFriendsNearBy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **longitude** | **float**| 当前用户经度坐标(WGS84坐标系) | |
| **latitude** | **float**| 当前用户纬度坐标(WGS84坐标系) | |
| **app_key** | **string**|  | |
| **country** | **string**| 国家过滤条件（精确匹配） | [optional] |
| **state** | **string**| 省份过滤条件（精确匹配） | [optional] |
| **city** | **string**| 城市过滤条件（精确匹配） | [optional] |
| **district** | **string**| 区县过滤条件（精确匹配） | [optional] |
| **gender** | **string**| 性别过滤条件（可选值示例：Male/Female/Other） | [optional] |
| **age_s** | **int**| 年龄起始范围（包含，0表示不限制） | [optional] |
| **age_e** | **int**| 年龄结束范围（包含，0表示不限制） | [optional] |
| **tag** | **string**| 兴趣标签过滤（支持模糊匹配，如：\&quot;运动\&quot;） | [optional] |
| **distance** | **int**| 搜索半径（单位：米，0表示不限制距离） | [optional] [default to 0] |
| **skip** | **int**| 跳过的记录数（分页起始位置，默认0） | [optional] [default to 0] |
| **take** | **int**| 获取的记录数（分页大小，默认10，最大100） | [optional] [default to 10] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\UserFriendsNearByResultApiResponse**](../Model/UserFriendsNearByResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userMutualFollowers()`

```php
userMutualFollowers($app_key, $skip, $take): \ZSGF\Client\ZSGF\Client\Model\UserMutualFollowersResultApiResponse
```

推荐共同粉丝用户

推荐有共同粉丝的用户

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserFriendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$skip = 0; // int | 跳过的记录数
$take = 10; // int | 获取的记录数

try {
    $result = $apiInstance->userMutualFollowers($app_key, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserFriendsApi->userMutualFollowers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **skip** | **int**| 跳过的记录数 | [optional] [default to 0] |
| **take** | **int**| 获取的记录数 | [optional] [default to 10] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\UserMutualFollowersResultApiResponse**](../Model/UserMutualFollowersResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userMutualFollowings()`

```php
userMutualFollowings($app_key, $skip, $take): \ZSGF\Client\ZSGF\Client\Model\UserMutualFollowingsResultApiResponse
```

推荐共同关注用户

推荐有共同关注的用户

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserFriendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$skip = 0; // int | 跳过的记录数
$take = 10; // int | 获取的记录数

try {
    $result = $apiInstance->userMutualFollowings($app_key, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserFriendsApi->userMutualFollowings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **skip** | **int**| 跳过的记录数 | [optional] [default to 0] |
| **take** | **int**| 获取的记录数 | [optional] [default to 10] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\UserMutualFollowingsResultApiResponse**](../Model/UserMutualFollowingsResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userProfileById()`

```php
userProfileById($user_id, $app_key): \ZSGF\Client\ZSGF\Client\Model\GetUserProfileResultApiResponse
```

获取用户资料

用于他人主页展示

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserFriendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 用户ID
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->userProfileById($user_id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserFriendsApi->userProfileById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| 用户ID | |
| **app_key** | **string**|  | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\GetUserProfileResultApiResponse**](../Model/GetUserProfileResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userUnfollowUser()`

```php
userUnfollowUser($user_id, $app_key): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

取消关注

取消关注指定用户

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserFriendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 要取消关注的用户ID
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->userUnfollowUser($user_id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserFriendsApi->userUnfollowUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| 要取消关注的用户ID | |
| **app_key** | **string**|  | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse**](../Model/BooleanApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
