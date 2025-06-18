# ZSGF\Client\ExternalAccountApi

All URIs are relative to https://api-dev.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**externalAccountSignIn()**](ExternalAccountApi.md#externalAccountSignIn) | **POST** /ExternalAccount/{appKey}/SignIn | 外部账号登录 |
| [**userExternalAccountBind()**](ExternalAccountApi.md#userExternalAccountBind) | **POST** /ExternalAccount/{appKey} | 绑定外部账号 |
| [**userOAuthAccounts()**](ExternalAccountApi.md#userOAuthAccounts) | **GET** /ExternalAccount/{appKey} | 外部账号列表 |
| [**userOAuthAccountsPutBind()**](ExternalAccountApi.md#userOAuthAccountsPutBind) | **PUT** /ExternalAccount/{appKey}/{id} | 更新绑定账号 |
| [**userOAuthAccountsUnBind()**](ExternalAccountApi.md#userOAuthAccountsUnBind) | **DELETE** /ExternalAccount/{appKey}/{id} | 删除绑定账号 |


## `externalAccountSignIn()`

```php
externalAccountSignIn($app_key, $external_account_sign_in_request): \ZSGF\Client\ZSGF\Client\Model\TokenModelApiResponse
```

外部账号登录

使用外部账号登录应用

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ExternalAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$external_account_sign_in_request = new \ZSGF\Client\ZSGF\Client\Model\ExternalAccountSignInRequest(); // \ZSGF\Client\ZSGF\Client\Model\ExternalAccountSignInRequest | 登录请求参数

try {
    $result = $apiInstance->externalAccountSignIn($app_key, $external_account_sign_in_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalAccountApi->externalAccountSignIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **external_account_sign_in_request** | [**\ZSGF\Client\ZSGF\Client\Model\ExternalAccountSignInRequest**](../Model/ExternalAccountSignInRequest.md)| 登录请求参数 | [optional] |

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

## `userExternalAccountBind()`

```php
userExternalAccountBind($app_key, $external_account_bind_request): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

绑定外部账号

绑定外部账号，如果已存在绑定则直接返回成功

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ExternalAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$external_account_bind_request = new \ZSGF\Client\ZSGF\Client\Model\ExternalAccountBindRequest(); // \ZSGF\Client\ZSGF\Client\Model\ExternalAccountBindRequest | 绑定请求参数

try {
    $result = $apiInstance->userExternalAccountBind($app_key, $external_account_bind_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalAccountApi->userExternalAccountBind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **external_account_bind_request** | [**\ZSGF\Client\ZSGF\Client\Model\ExternalAccountBindRequest**](../Model/ExternalAccountBindRequest.md)| 绑定请求参数 | [optional] |

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

## `userOAuthAccounts()`

```php
userOAuthAccounts($app_key): \ZSGF\Client\ZSGF\Client\Model\UserLoginsListApiResponse
```

外部账号列表

获取绑定成功的外部账号列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ExternalAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->userOAuthAccounts($app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalAccountApi->userOAuthAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\UserLoginsListApiResponse**](../Model/UserLoginsListApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userOAuthAccountsPutBind()`

```php
userOAuthAccountsPutBind($id, $app_key, $external_account_put_request): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

更新绑定账号

更新绑定的账号信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ExternalAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 绑定ID
$app_key = 'app_key_example'; // string
$external_account_put_request = new \ZSGF\Client\ZSGF\Client\Model\ExternalAccountPutRequest(); // \ZSGF\Client\ZSGF\Client\Model\ExternalAccountPutRequest | 更新请求参数

try {
    $result = $apiInstance->userOAuthAccountsPutBind($id, $app_key, $external_account_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalAccountApi->userOAuthAccountsPutBind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 绑定ID | |
| **app_key** | **string**|  | |
| **external_account_put_request** | [**\ZSGF\Client\ZSGF\Client\Model\ExternalAccountPutRequest**](../Model/ExternalAccountPutRequest.md)| 更新请求参数 | [optional] |

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

## `userOAuthAccountsUnBind()`

```php
userOAuthAccountsUnBind($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

删除绑定账号

删除绑定的外部账号

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ExternalAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 绑定ID
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->userOAuthAccountsUnBind($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalAccountApi->userOAuthAccountsUnBind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 绑定ID | |
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
