# ZSGF\Client\AuthorizePolicyApi

All URIs are relative to https://api.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authorizePolicies()**](AuthorizePolicyApi.md#authorizePolicies) | **GET** /AuthorizePolicy/{appKey} | 获取鉴权策略列表 |
| [**authorizePolicy()**](AuthorizePolicyApi.md#authorizePolicy) | **GET** /AuthorizePolicy/{appKey}/{id} | 获取鉴权策略详情 |
| [**authorizePolicyDelete()**](AuthorizePolicyApi.md#authorizePolicyDelete) | **DELETE** /AuthorizePolicy/{appKey}/{id} | 删除鉴权策略 |
| [**authorizePolicyPost()**](AuthorizePolicyApi.md#authorizePolicyPost) | **POST** /AuthorizePolicy/{appKey} | 添加鉴权策略 |
| [**authorizePolicyPut()**](AuthorizePolicyApi.md#authorizePolicyPut) | **PUT** /AuthorizePolicy/{appKey}/{id} | 更新鉴权策略 |


## `authorizePolicies()`

```php
authorizePolicies($app_key, $auth_type, $policy_name): \ZSGF\Client\ZSGF\Client\Model\AuthorizePolicyListApiResponse
```

获取鉴权策略列表

根据鉴权类型和策略名称获取鉴权策略列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AuthorizePolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$auth_type = 'auth_type_example'; // string | 鉴权类型（access_token、user、role）
$policy_name = 'policy_name_example'; // string | 策略名称

try {
    $result = $apiInstance->authorizePolicies($app_key, $auth_type, $policy_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizePolicyApi->authorizePolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **auth_type** | **string**| 鉴权类型（access_token、user、role） | [optional] |
| **policy_name** | **string**| 策略名称 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\AuthorizePolicyListApiResponse**](../Model/AuthorizePolicyListApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authorizePolicy()`

```php
authorizePolicy($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\AuthorizePolicyApiResponse
```

获取鉴权策略详情

根据鉴权策略ID获取鉴权策略详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AuthorizePolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 鉴权策略ID
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->authorizePolicy($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizePolicyApi->authorizePolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 鉴权策略ID | |
| **app_key** | **string**|  | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\AuthorizePolicyApiResponse**](../Model/AuthorizePolicyApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authorizePolicyDelete()`

```php
authorizePolicyDelete($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

删除鉴权策略

根据鉴权策略ID删除鉴权策略

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AuthorizePolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 鉴权策略ID
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->authorizePolicyDelete($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizePolicyApi->authorizePolicyDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 鉴权策略ID | |
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

## `authorizePolicyPost()`

```php
authorizePolicyPost($app_key, $authorize_policy): \ZSGF\Client\ZSGF\Client\Model\CreatePostResultApiResponse
```

添加鉴权策略

添加新的鉴权策略

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AuthorizePolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$authorize_policy = new \ZSGF\Client\ZSGF\Client\Model\AuthorizePolicy(); // \ZSGF\Client\ZSGF\Client\Model\AuthorizePolicy | 鉴权策略对象

try {
    $result = $apiInstance->authorizePolicyPost($app_key, $authorize_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizePolicyApi->authorizePolicyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **authorize_policy** | [**\ZSGF\Client\ZSGF\Client\Model\AuthorizePolicy**](../Model/AuthorizePolicy.md)| 鉴权策略对象 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\CreatePostResultApiResponse**](../Model/CreatePostResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authorizePolicyPut()`

```php
authorizePolicyPut($id, $app_key, $authorize_policy): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

更新鉴权策略

根据鉴权策略ID更新鉴权策略

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AuthorizePolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 鉴权策略ID
$app_key = 'app_key_example'; // string
$authorize_policy = new \ZSGF\Client\ZSGF\Client\Model\AuthorizePolicy(); // \ZSGF\Client\ZSGF\Client\Model\AuthorizePolicy | 鉴权策略对象

try {
    $result = $apiInstance->authorizePolicyPut($id, $app_key, $authorize_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizePolicyApi->authorizePolicyPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 鉴权策略ID | |
| **app_key** | **string**|  | |
| **authorize_policy** | [**\ZSGF\Client\ZSGF\Client\Model\AuthorizePolicy**](../Model/AuthorizePolicy.md)| 鉴权策略对象 | [optional] |

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
