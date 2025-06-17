# ZSGF\Client\WechatApi

All URIs are relative to https://api-dev.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**confirmQRCodeLogin()**](WechatApi.md#confirmQRCodeLogin) | **POST** /Wechat/{appKey}/QR-Auth/Confirm-Login | 确认二维码登录请求 |
| [**confirmQRCodeRegistration()**](WechatApi.md#confirmQRCodeRegistration) | **POST** /Wechat/{appKey}/QR-Auth/Confirm-Register | 确认二维码注册请求 |
| [**initiateQRAuthSession()**](WechatApi.md#initiateQRAuthSession) | **POST** /Wechat/{appKey}/QR-Auth/Initiate | 初始化二维码认证会话 |
| [**scanQRCodeForAuth()**](WechatApi.md#scanQRCodeForAuth) | **POST** /Wechat/{appKey}/QR-Auth/Scan | 验证二维码扫描结果 |
| [**wechatDecrypt()**](WechatApi.md#wechatDecrypt) | **GET** /Wechat/{appKey}/Decrypt | 解密小程序用户数据 |
| [**wechatGenerateScheme()**](WechatApi.md#wechatGenerateScheme) | **POST** /Wechat/{appKey}/GenerateScheme | 生成小程序Scheme码 |
| [**wechatJSCode2Session()**](WechatApi.md#wechatJSCode2Session) | **GET** /Wechat/{appKey}/JSCode2Session | 校验小程序登录状态 |
| [**wechatJSConfig()**](WechatApi.md#wechatJSConfig) | **GET** /Wechat/{appKey}/JSConfig | 配置公众号JS SDK |
| [**wechatMsgSecCheck()**](WechatApi.md#wechatMsgSecCheck) | **POST** /Wechat/{appKey}/MsgSecCheck | 小程序内容安全检测 |
| [**wechatSubscribeMSG()**](WechatApi.md#wechatSubscribeMSG) | **POST** /Wechat/{appKey}/SubscribeMSG | 发送公众号一次性订阅消息 |
| [**wechatSubscribeSend()**](WechatApi.md#wechatSubscribeSend) | **POST** /Wechat/{appKey}/SubscribeSend | 发送小程序订阅消息 |
| [**wechatUrlLinkGenerate()**](WechatApi.md#wechatUrlLinkGenerate) | **POST** /Wechat/{appKey}/UrlLinkGenerate | 生成小程序URL跳转链接 |
| [**wechatUserInfo()**](WechatApi.md#wechatUserInfo) | **GET** /Wechat/{appKey}/UserInfo | 获取公众号H5 UnionID |
| [**wechatWXACodeGet()**](WechatApi.md#wechatWXACodeGet) | **POST** /Wechat/{appKey}/WXACodeGet | 获取小程序码（普通） |
| [**wechatWXACodeGetUnlimited()**](WechatApi.md#wechatWXACodeGetUnlimited) | **POST** /Wechat/{appKey}/WXACodeGetUnlimited | 获取小程序码（无限制） |


## `confirmQRCodeLogin()`

```php
confirmQRCodeLogin($app_key, $qr_code_sign_in_request): \ZSGF\Client\ZSGF\Client\Model\TokenModelApiResponse
```

确认二维码登录请求

微信小程序用户确认二维码登录并获取访问令牌

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
$qr_code_sign_in_request = new \ZSGF\Client\ZSGF\Client\Model\QRCodeSignInRequest(); // \ZSGF\Client\ZSGF\Client\Model\QRCodeSignInRequest | 登录确认请求参数

try {
    $result = $apiInstance->confirmQRCodeLogin($app_key, $qr_code_sign_in_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WechatApi->confirmQRCodeLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **qr_code_sign_in_request** | [**\ZSGF\Client\ZSGF\Client\Model\QRCodeSignInRequest**](../Model/QRCodeSignInRequest.md)| 登录确认请求参数 | [optional] |

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

## `confirmQRCodeRegistration()`

```php
confirmQRCodeRegistration($app_key, $qr_code_sign_up_request): \ZSGF\Client\ZSGF\Client\Model\TokenModelApiResponse
```

确认二维码注册请求

微信小程序用户通过二维码完成注册并获取访问令牌

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
$qr_code_sign_up_request = new \ZSGF\Client\ZSGF\Client\Model\QRCodeSignUpRequest(); // \ZSGF\Client\ZSGF\Client\Model\QRCodeSignUpRequest | 注册确认请求参数

try {
    $result = $apiInstance->confirmQRCodeRegistration($app_key, $qr_code_sign_up_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WechatApi->confirmQRCodeRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **qr_code_sign_up_request** | [**\ZSGF\Client\ZSGF\Client\Model\QRCodeSignUpRequest**](../Model/QRCodeSignUpRequest.md)| 注册确认请求参数 | [optional] |

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

## `initiateQRAuthSession()`

```php
initiateQRAuthSession($app_key, $qr_code_pre_sign_in_request): \ZSGF\Client\ZSGF\Client\Model\Int64ApiResponse
```

初始化二维码认证会话

创建用于微信小程序扫码登录/注册的认证会话

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
$qr_code_pre_sign_in_request = new \ZSGF\Client\ZSGF\Client\Model\QRCodePreSignInRequest(); // \ZSGF\Client\ZSGF\Client\Model\QRCodePreSignInRequest | 认证会话初始化请求参数

try {
    $result = $apiInstance->initiateQRAuthSession($app_key, $qr_code_pre_sign_in_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WechatApi->initiateQRAuthSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **qr_code_pre_sign_in_request** | [**\ZSGF\Client\ZSGF\Client\Model\QRCodePreSignInRequest**](../Model/QRCodePreSignInRequest.md)| 认证会话初始化请求参数 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\Int64ApiResponse**](../Model/Int64ApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scanQRCodeForAuth()`

```php
scanQRCodeForAuth($app_key, $qr_code_scan_request): \ZSGF\Client\ZSGF\Client\Model\UserQRCodeScanResultApiResponse
```

验证二维码扫描结果

微信小程序扫描二维码并获取应用授权信息

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
$qr_code_scan_request = new \ZSGF\Client\ZSGF\Client\Model\QRCodeScanRequest(); // \ZSGF\Client\ZSGF\Client\Model\QRCodeScanRequest | 二维码扫描请求参数

try {
    $result = $apiInstance->scanQRCodeForAuth($app_key, $qr_code_scan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WechatApi->scanQRCodeForAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **qr_code_scan_request** | [**\ZSGF\Client\ZSGF\Client\Model\QRCodeScanRequest**](../Model/QRCodeScanRequest.md)| 二维码扫描请求参数 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\UserQRCodeScanResultApiResponse**](../Model/UserQRCodeScanResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wechatDecrypt()`

```php
wechatDecrypt($app_key, $encrypted_data, $iv, $session_key): \ZSGF\Client\ZSGF\Client\Model\StringApiResponse
```

解密小程序用户数据

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

生成小程序Scheme码

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

校验小程序登录状态

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

配置公众号JS SDK

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

小程序内容安全检测

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

发送公众号一次性订阅消息

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

发送小程序订阅消息

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

生成小程序URL跳转链接

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

获取公众号H5 UnionID

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

获取小程序码（普通）

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
- **Accept**: `image/jpeg`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wechatWXACodeGetUnlimited()`

```php
wechatWXACodeGetUnlimited($app_key, $request_body): \SplFileObject
```

获取小程序码（无限制）

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
- **Accept**: `image/jpeg`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
