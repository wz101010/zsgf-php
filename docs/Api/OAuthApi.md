# ZSGF\Client\OAuthApi

All URIs are relative to https://api-dev.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**oAuthAuthorize()**](OAuthApi.md#oAuthAuthorize) | **POST** /OAuth/{appKey}/Authorize | 获取访问令牌 |
| [**oAuthConsents()**](OAuthApi.md#oAuthConsents) | **GET** /OAuth/{appKey}/Consents | 获取授权记录 |
| [**oAuthDeleteConsent()**](OAuthApi.md#oAuthDeleteConsent) | **DELETE** /OAuth/{appKey}/Consents/{id} | 删除授权记录 |
| [**oAuthGrantCode()**](OAuthApi.md#oAuthGrantCode) | **POST** /OAuth/{appKey}/GrantCode | 获取授权码 |
| [**oAuthProfile()**](OAuthApi.md#oAuthProfile) | **GET** /OAuth/{appKey}/Profile | 获取用户资料 |


## `oAuthAuthorize()`

```php
oAuthAuthorize($app_key, $scheme, $code): \ZSGF\Client\ZSGF\Client\Model\AuthorizeResultApiResponse
```

获取访问令牌

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$scheme = 'scheme_example'; // string | 身份源
$code = 'code_example'; // string | 授权码

try {
    $result = $apiInstance->oAuthAuthorize($app_key, $scheme, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oAuthAuthorize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **scheme** | **string**| 身份源 | [optional] |
| **code** | **string**| 授权码 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\AuthorizeResultApiResponse**](../Model/AuthorizeResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oAuthConsents()`

```php
oAuthConsents($app_key): \ZSGF\Client\ZSGF\Client\Model\AppUserConsentModelListApiResponse
```

获取授权记录

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->oAuthConsents($app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oAuthConsents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\AppUserConsentModelListApiResponse**](../Model/AppUserConsentModelListApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oAuthDeleteConsent()`

```php
oAuthDeleteConsent($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

删除授权记录

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->oAuthDeleteConsent($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oAuthDeleteConsent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
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

## `oAuthGrantCode()`

```php
oAuthGrantCode($app_key, $scheme, $grant_request): \ZSGF\Client\ZSGF\Client\Model\GrantResultApiResponse
```

获取授权码

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$scheme = 'scheme_example'; // string | 身份源，固定填：app
$grant_request = new \ZSGF\Client\ZSGF\Client\Model\GrantRequest(); // \ZSGF\Client\ZSGF\Client\Model\GrantRequest | 授权详情

try {
    $result = $apiInstance->oAuthGrantCode($app_key, $scheme, $grant_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oAuthGrantCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **scheme** | **string**| 身份源，固定填：app | [optional] |
| **grant_request** | [**\ZSGF\Client\ZSGF\Client\Model\GrantRequest**](../Model/GrantRequest.md)| 授权详情 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\GrantResultApiResponse**](../Model/GrantResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oAuthProfile()`

```php
oAuthProfile($app_key): \ZSGF\Client\ZSGF\Client\Model\ProfileResultApiResponse
```

获取用户资料

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->oAuthProfile($app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oAuthProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\ProfileResultApiResponse**](../Model/ProfileResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
