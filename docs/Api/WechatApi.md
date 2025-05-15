# ZSGF\Client\WechatApi

All URIs are relative to https://api.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**wechatDecrypt()**](WechatApi.md#wechatDecrypt) | **GET** /Wechat/{appKey}/Decrypt | 小程序-解密数据 |
| [**wechatGenerateScheme()**](WechatApi.md#wechatGenerateScheme) | **POST** /Wechat/{appKey}/GenerateScheme | 小程序-生成scheme码(该接口用于获取小程序 scheme 码，适用于短信、邮件、外部网页、微信内等拉起小程序的业务场景) |
| [**wechatJSCode2Session()**](WechatApi.md#wechatJSCode2Session) | **GET** /Wechat/{appKey}/JSCode2Session | 小程序-登录凭证校验 |
| [**wechatJSConfig()**](WechatApi.md#wechatJSConfig) | **GET** /Wechat/{appKey}/JSConfig | 公众号H5-JS SDK Config |
| [**wechatMsgSecCheck()**](WechatApi.md#wechatMsgSecCheck) | **POST** /Wechat/{appKey}/MsgSecCheck | 小程序-消息内容安全检测 |
| [**wechatSubscribeMSG()**](WechatApi.md#wechatSubscribeMSG) | **POST** /Wechat/{appKey}/SubscribeMSG | 公众号H5-发送一次性订阅消息 |
| [**wechatSubscribeSend()**](WechatApi.md#wechatSubscribeSend) | **POST** /Wechat/{appKey}/SubscribeSend | 小程序-发送订阅消息 |
| [**wechatUrlLinkGenerate()**](WechatApi.md#wechatUrlLinkGenerate) | **POST** /Wechat/{appKey}/UrlLinkGenerate | 小程序-生成网页跳转地址(获取小程序 URL Link，适用于短信、邮件、网页、微信内等拉起小程序的业务场景) |
| [**wechatUserInfo()**](WechatApi.md#wechatUserInfo) | **GET** /Wechat/{appKey}/UserInfo | 公众号H5-获取用户UnionID |
| [**wechatWXACodeGet()**](WechatApi.md#wechatWXACodeGet) | **POST** /Wechat/{appKey}/WXACodeGet | 小程序-获取小程序码 |
| [**wechatWXACodeGetUnlimited()**](WechatApi.md#wechatWXACodeGetUnlimited) | **POST** /Wechat/{appKey}/WXACodeGetUnlimited | 小程序-获取小程序码(无限制) |


## `wechatDecrypt()`

```php
wechatDecrypt($app_key, $encrypted_data, $iv, $session_key): \ZSGF\Client\ZSGF\Client\Model\StringApiResponse
```

小程序-解密数据

解密小程序加密数据

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\WechatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$encrypted_data = 'encrypted_data_example'; // string | 加密的数据
$iv = 'iv_example'; // string | 加密算法的初始向量
$session_key = 'session_key_example'; // string | 会话密钥

try {
    $result = $apiInstance->wechatDecrypt($app_key, $encrypted_data, $iv, $session_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WechatApi->wechatDecrypt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **encrypted_data** | **string**| 加密的数据 | [optional] |
| **iv** | **string**| 加密算法的初始向量 | [optional] |
| **session_key** | **string**| 会话密钥 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\StringApiResponse**](../Model/StringApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wechatGenerateScheme()`

```php
wechatGenerateScheme($app_key, $request_body): \ZSGF\Client\ZSGF\Client\Model\StringApiResponse
```

小程序-生成scheme码(该接口用于获取小程序 scheme 码，适用于短信、邮件、外部网页、微信内等拉起小程序的业务场景)

生成小程序的scheme码

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\WechatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$request_body = NULL; // mixed[] | scheme码数据，开发参考：https://developers.weixin.qq.com/miniprogram/dev/OpenApiDoc/qrcode-link/url-scheme/generateScheme.html

try {
    $result = $apiInstance->wechatGenerateScheme($app_key, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WechatApi->wechatGenerateScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **request_body** | [**mixed[]**](../Model/mixed.md)| scheme码数据，开发参考：https://developers.weixin.qq.com/miniprogram/dev/OpenApiDoc/qrcode-link/url-scheme/generateScheme.html | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\StringApiResponse**](../Model/StringApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wechatJSCode2Session()`

```php
wechatJSCode2Session($app_key, $js_code): \ZSGF\Client\ZSGF\Client\Model\StringApiResponse
```

小程序-登录凭证校验

校验小程序登录凭证

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\WechatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$js_code = 'js_code_example'; // string | 登录凭证，开发参考：https://dwz.cn/icNajFh7

try {
    $result = $apiInstance->wechatJSCode2Session($app_key, $js_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WechatApi->wechatJSCode2Session: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **js_code** | **string**| 登录凭证，开发参考：https://dwz.cn/icNajFh7 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\StringApiResponse**](../Model/StringApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wechatJSConfig()`

```php
wechatJSConfig($app_key, $url): \ZSGF\Client\ZSGF\Client\Model\WechatJSConfigResultApiResponse
```

公众号H5-JS SDK Config

获取公众号H5的JS SDK配置

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\WechatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$url = 'url_example'; // string | 当前网页的URL

try {
    $result = $apiInstance->wechatJSConfig($app_key, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WechatApi->wechatJSConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **url** | **string**| 当前网页的URL | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\WechatJSConfigResultApiResponse**](../Model/WechatJSConfigResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wechatMsgSecCheck()`

```php
wechatMsgSecCheck($app_key, $request_body): mixed
```

小程序-消息内容安全检测

检测消息内容是否含有违法违规信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\WechatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$request_body = NULL; // mixed[] | 消息内容数据，开发参考：https://developers.weixin.qq.com/miniprogram/dev/OpenApiDoc/sec-center/sec-check/msgSecCheck.html

try {
    $result = $apiInstance->wechatMsgSecCheck($app_key, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WechatApi->wechatMsgSecCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **request_body** | [**mixed[]**](../Model/mixed.md)| 消息内容数据，开发参考：https://developers.weixin.qq.com/miniprogram/dev/OpenApiDoc/sec-center/sec-check/msgSecCheck.html | [optional] |

### Return type

**mixed**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wechatSubscribeMSG()`

```php
wechatSubscribeMSG($app_key, $request_body): \ZSGF\Client\ZSGF\Client\Model\StringApiResponse
```

公众号H5-发送一次性订阅消息

发送公众号H5一次性订阅消息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\WechatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$request_body = NULL; // mixed[] | 订阅消息数据，开发参考：https://dwz.cn/IXptek5n

try {
    $result = $apiInstance->wechatSubscribeMSG($app_key, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WechatApi->wechatSubscribeMSG: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **request_body** | [**mixed[]**](../Model/mixed.md)| 订阅消息数据，开发参考：https://dwz.cn/IXptek5n | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\StringApiResponse**](../Model/StringApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wechatSubscribeSend()`

```php
wechatSubscribeSend($app_key, $request_body): \ZSGF\Client\ZSGF\Client\Model\StringApiResponse
```

小程序-发送订阅消息

发送小程序订阅消息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\WechatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$request_body = NULL; // mixed[] | 订阅消息数据，开发参考：https://dwz.cn/bohXaCnp

try {
    $result = $apiInstance->wechatSubscribeSend($app_key, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WechatApi->wechatSubscribeSend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **request_body** | [**mixed[]**](../Model/mixed.md)| 订阅消息数据，开发参考：https://dwz.cn/bohXaCnp | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\StringApiResponse**](../Model/StringApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wechatUrlLinkGenerate()`

```php
wechatUrlLinkGenerate($app_key, $request_body): \ZSGF\Client\ZSGF\Client\Model\StringApiResponse
```

小程序-生成网页跳转地址(获取小程序 URL Link，适用于短信、邮件、网页、微信内等拉起小程序的业务场景)

生成小程序的网页跳转地址

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\WechatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$request_body = NULL; // mixed[] | 跳转地址数据，开发参考：https://developers.weixin.qq.com/miniprogram/dev/api-backend/open-api/url-link/urllink.generate.html

try {
    $result = $apiInstance->wechatUrlLinkGenerate($app_key, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WechatApi->wechatUrlLinkGenerate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **request_body** | [**mixed[]**](../Model/mixed.md)| 跳转地址数据，开发参考：https://developers.weixin.qq.com/miniprogram/dev/api-backend/open-api/url-link/urllink.generate.html | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\StringApiResponse**](../Model/StringApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wechatUserInfo()`

```php
wechatUserInfo($app_key, $openid): \ZSGF\Client\ZSGF\Client\Model\StringApiResponse
```

公众号H5-获取用户UnionID

获取公众号H5用户的UnionID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\WechatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$openid = 'openid_example'; // string | 用户的OpenID

try {
    $result = $apiInstance->wechatUserInfo($app_key, $openid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WechatApi->wechatUserInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **openid** | **string**| 用户的OpenID | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\StringApiResponse**](../Model/StringApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wechatWXACodeGet()`

```php
wechatWXACodeGet($app_key, $request_body): \SplFileObject
```

小程序-获取小程序码

获取小程序码

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\WechatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$request_body = NULL; // mixed[] | 小程序码数据，开发参考：https://developers.weixin.qq.com/miniprogram/dev/api-backend/open-api/qr-code/wxacode.get.html

try {
    $result = $apiInstance->wechatWXACodeGet($app_key, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WechatApi->wechatWXACodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **request_body** | [**mixed[]**](../Model/mixed.md)| 小程序码数据，开发参考：https://developers.weixin.qq.com/miniprogram/dev/api-backend/open-api/qr-code/wxacode.get.html | [optional] |

### Return type

**\SplFileObject**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `image/jpeg`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wechatWXACodeGetUnlimited()`

```php
wechatWXACodeGetUnlimited($app_key, $request_body): \SplFileObject
```

小程序-获取小程序码(无限制)

获取无限制的小程序码

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\WechatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$request_body = NULL; // mixed[] | 小程序码数据，开发参考：https://developers.weixin.qq.com/miniprogram/dev/api-backend/open-api/qr-code/wxacode.getUnlimited.html

try {
    $result = $apiInstance->wechatWXACodeGetUnlimited($app_key, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WechatApi->wechatWXACodeGetUnlimited: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **request_body** | [**mixed[]**](../Model/mixed.md)| 小程序码数据，开发参考：https://developers.weixin.qq.com/miniprogram/dev/api-backend/open-api/qr-code/wxacode.getUnlimited.html | [optional] |

### Return type

**\SplFileObject**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `image/jpeg`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
