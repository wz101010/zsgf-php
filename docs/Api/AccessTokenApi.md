# ZSGF\Client\AccessTokenApi

All URIs are relative to https://api.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accessTokenDelete()**](AccessTokenApi.md#accessTokenDelete) | **DELETE** /AccessToken/{appKey}/{id} | 删除令牌 |
| [**accessTokenPost()**](AccessTokenApi.md#accessTokenPost) | **POST** /AccessToken/{appKey} | 创建令牌 |
| [**accessTokenPut()**](AccessTokenApi.md#accessTokenPut) | **PUT** /AccessToken/{appKey}/{id} | 更新令牌 |
| [**accessTokens()**](AccessTokenApi.md#accessTokens) | **GET** /AccessToken/{appKey} | 令牌列表 |


## `accessTokenDelete()`

```php
accessTokenDelete($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

删除令牌

删除用户令牌

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AccessTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 令牌ID
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->accessTokenDelete($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokenApi->accessTokenDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 令牌ID | |
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

## `accessTokenPost()`

```php
accessTokenPost($app_key, $access_token_post_request): \ZSGF\Client\ZSGF\Client\Model\TokenModelApiResponse
```

创建令牌

创建新的用户令牌

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AccessTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$access_token_post_request = new \ZSGF\Client\ZSGF\Client\Model\AccessTokenPostRequest(); // \ZSGF\Client\ZSGF\Client\Model\AccessTokenPostRequest | 令牌创建请求参数

try {
    $result = $apiInstance->accessTokenPost($app_key, $access_token_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokenApi->accessTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **access_token_post_request** | [**\ZSGF\Client\ZSGF\Client\Model\AccessTokenPostRequest**](../Model/AccessTokenPostRequest.md)| 令牌创建请求参数 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\TokenModelApiResponse**](../Model/TokenModelApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accessTokenPut()`

```php
accessTokenPut($id, $app_key, $access_token_put_request): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

更新令牌

更新现有的用户令牌

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AccessTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 令牌ID
$app_key = 'app_key_example'; // string
$access_token_put_request = new \ZSGF\Client\ZSGF\Client\Model\AccessTokenPutRequest(); // \ZSGF\Client\ZSGF\Client\Model\AccessTokenPutRequest | 令牌更新请求参数

try {
    $result = $apiInstance->accessTokenPut($id, $app_key, $access_token_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokenApi->accessTokenPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 令牌ID | |
| **app_key** | **string**|  | |
| **access_token_put_request** | [**\ZSGF\Client\ZSGF\Client\Model\AccessTokenPutRequest**](../Model/AccessTokenPutRequest.md)| 令牌更新请求参数 | [optional] |

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

## `accessTokens()`

```php
accessTokens($app_key, $user_id, $skip, $take): \ZSGF\Client\ZSGF\Client\Model\AccessTokenListResultApiResponse
```

令牌列表

获取用户令牌列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AccessTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$user_id = 56; // int | 用户ID
$skip = 56; // int | 跳过的记录数
$take = 56; // int | 获取的记录数

try {
    $result = $apiInstance->accessTokens($app_key, $user_id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokenApi->accessTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **user_id** | **int**| 用户ID | [optional] |
| **skip** | **int**| 跳过的记录数 | [optional] |
| **take** | **int**| 获取的记录数 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\AccessTokenListResultApiResponse**](../Model/AccessTokenListResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
