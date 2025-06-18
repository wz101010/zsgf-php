# ZSGF\Client\UserApi

All URIs are relative to https://api-dev.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userDeactivateHard()**](UserApi.md#userDeactivateHard) | **DELETE** /User/{appKey}/DeactivateHard | 注销账号 |
| [**userEmailSignIn()**](UserApi.md#userEmailSignIn) | **POST** /User/{appKey}/EmailSignIn | 邮箱登录 |
| [**userEmailSignUp()**](UserApi.md#userEmailSignUp) | **POST** /User/{appKey}/EmailSignUp | 邮箱注册 |
| [**userPhoneSignIn()**](UserApi.md#userPhoneSignIn) | **POST** /User/{appKey}/PhoneSignIn | 手机登录 |
| [**userPhoneSignUp()**](UserApi.md#userPhoneSignUp) | **POST** /User/{appKey}/PhoneSignUp | 手机注册 |
| [**userProfile()**](UserApi.md#userProfile) | **GET** /User/{appKey}/Profile | 获取个人资料 |
| [**userResetEmail()**](UserApi.md#userResetEmail) | **PUT** /User/{appKey}/ResetEmail | 重置邮箱 |
| [**userResetPhone()**](UserApi.md#userResetPhone) | **PUT** /User/{appKey}/ResetPhone | 重置手机号 |
| [**userResetPwd()**](UserApi.md#userResetPwd) | **POST** /User/{appKey}/ResetPwd | 重置密码 |
| [**userSendEmailCode()**](UserApi.md#userSendEmailCode) | **POST** /User/{appKey}/SendEmailCode | 发送邮箱验证码 |
| [**userSendSMSCode()**](UserApi.md#userSendSMSCode) | **POST** /User/{appKey}/SendSMSCode | 发送手机验证码 |
| [**userSignIn()**](UserApi.md#userSignIn) | **POST** /User/{appKey}/SignIn | 密码登录 |
| [**userSignUp()**](UserApi.md#userSignUp) | **POST** /User/{appKey}/SignUp | 账号注册 |
| [**userTwoFactorAuth()**](UserApi.md#userTwoFactorAuth) | **GET** /User/{appKey}/TwoFactorAuth | 二次验证 |
| [**userUnionIDSignIn()**](UserApi.md#userUnionIDSignIn) | **POST** /User/{appKey}/UnionIDSignIn | UnionID登录 |
| [**userUnionIDSignUp()**](UserApi.md#userUnionIDSignUp) | **POST** /User/{appKey}/UnionIDSignUp | UnionID注册 |
| [**userUpdateProfile()**](UserApi.md#userUpdateProfile) | **PUT** /User/{appKey}/Profile | 更新个人资料 |


## `userDeactivateHard()`

```php
userDeactivateHard($app_key): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

注销账号

清除用户所有附属数据，并注销账号

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->userDeactivateHard($app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userDeactivateHard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `userEmailSignIn()`

```php
userEmailSignIn($app_key, $email_sign_in_request): \ZSGF\Client\ZSGF\Client\Model\TokenModelApiResponse
```

邮箱登录

使用邮箱进行登录

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$email_sign_in_request = new \ZSGF\Client\ZSGF\Client\Model\EmailSignInRequest(); // \ZSGF\Client\ZSGF\Client\Model\EmailSignInRequest | 登录请求参数

try {
    $result = $apiInstance->userEmailSignIn($app_key, $email_sign_in_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userEmailSignIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **email_sign_in_request** | [**\ZSGF\Client\ZSGF\Client\Model\EmailSignInRequest**](../Model/EmailSignInRequest.md)| 登录请求参数 | [optional] |

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

## `userEmailSignUp()`

```php
userEmailSignUp($app_key, $email_sign_up_request): \ZSGF\Client\ZSGF\Client\Model\TokenModelApiResponse
```

邮箱注册

使用邮箱进行注册

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$email_sign_up_request = new \ZSGF\Client\ZSGF\Client\Model\EmailSignUpRequest(); // \ZSGF\Client\ZSGF\Client\Model\EmailSignUpRequest | 注册请求参数

try {
    $result = $apiInstance->userEmailSignUp($app_key, $email_sign_up_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userEmailSignUp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **email_sign_up_request** | [**\ZSGF\Client\ZSGF\Client\Model\EmailSignUpRequest**](../Model/EmailSignUpRequest.md)| 注册请求参数 | [optional] |

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

## `userPhoneSignIn()`

```php
userPhoneSignIn($app_key, $phone_sign_in_request): \ZSGF\Client\ZSGF\Client\Model\TokenModelApiResponse
```

手机登录

使用手机号码进行登录

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$phone_sign_in_request = new \ZSGF\Client\ZSGF\Client\Model\PhoneSignInRequest(); // \ZSGF\Client\ZSGF\Client\Model\PhoneSignInRequest | 登录请求参数

try {
    $result = $apiInstance->userPhoneSignIn($app_key, $phone_sign_in_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPhoneSignIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **phone_sign_in_request** | [**\ZSGF\Client\ZSGF\Client\Model\PhoneSignInRequest**](../Model/PhoneSignInRequest.md)| 登录请求参数 | [optional] |

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

## `userPhoneSignUp()`

```php
userPhoneSignUp($app_key, $phone_sign_up_request): \ZSGF\Client\ZSGF\Client\Model\TokenModelApiResponse
```

手机注册

使用手机号码进行注册

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$phone_sign_up_request = new \ZSGF\Client\ZSGF\Client\Model\PhoneSignUpRequest(); // \ZSGF\Client\ZSGF\Client\Model\PhoneSignUpRequest | 注册请求参数

try {
    $result = $apiInstance->userPhoneSignUp($app_key, $phone_sign_up_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPhoneSignUp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **phone_sign_up_request** | [**\ZSGF\Client\ZSGF\Client\Model\PhoneSignUpRequest**](../Model/PhoneSignUpRequest.md)| 注册请求参数 | [optional] |

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

## `userProfile()`

```php
userProfile($app_key): \ZSGF\Client\ZSGF\Client\Model\UserProfileResultApiResponse
```

获取个人资料

获取当前用户的个人资料

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->userProfile($app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\UserProfileResultApiResponse**](../Model/UserProfileResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userResetEmail()`

```php
userResetEmail($app_key, $app_user_reset_email_request): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

重置邮箱

通过邮箱验证码重置邮箱

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$app_user_reset_email_request = new \ZSGF\Client\ZSGF\Client\Model\AppUserResetEmailRequest(); // \ZSGF\Client\ZSGF\Client\Model\AppUserResetEmailRequest | 重置邮箱的请求参数

try {
    $result = $apiInstance->userResetEmail($app_key, $app_user_reset_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userResetEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **app_user_reset_email_request** | [**\ZSGF\Client\ZSGF\Client\Model\AppUserResetEmailRequest**](../Model/AppUserResetEmailRequest.md)| 重置邮箱的请求参数 | [optional] |

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

## `userResetPhone()`

```php
userResetPhone($app_key, $app_user_reset_phone_request): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

重置手机号

通过手机号验证码重置手机号

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$app_user_reset_phone_request = new \ZSGF\Client\ZSGF\Client\Model\AppUserResetPhoneRequest(); // \ZSGF\Client\ZSGF\Client\Model\AppUserResetPhoneRequest | 重置手机号的请求参数

try {
    $result = $apiInstance->userResetPhone($app_key, $app_user_reset_phone_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userResetPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **app_user_reset_phone_request** | [**\ZSGF\Client\ZSGF\Client\Model\AppUserResetPhoneRequest**](../Model/AppUserResetPhoneRequest.md)| 重置手机号的请求参数 | [optional] |

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

## `userResetPwd()`

```php
userResetPwd($app_key, $app_user_reset_pwd_request): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

重置密码

通过手机号或邮箱重置密码

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$app_user_reset_pwd_request = new \ZSGF\Client\ZSGF\Client\Model\AppUserResetPwdRequest(); // \ZSGF\Client\ZSGF\Client\Model\AppUserResetPwdRequest | 重置密码的请求参数

try {
    $result = $apiInstance->userResetPwd($app_key, $app_user_reset_pwd_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userResetPwd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **app_user_reset_pwd_request** | [**\ZSGF\Client\ZSGF\Client\Model\AppUserResetPwdRequest**](../Model/AppUserResetPwdRequest.md)| 重置密码的请求参数 | [optional] |

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

## `userSendEmailCode()`

```php
userSendEmailCode($app_key, $send_email_code_request): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

发送邮箱验证码

发送邮箱验证码用于注册或找回密码

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$send_email_code_request = new \ZSGF\Client\ZSGF\Client\Model\SendEmailCodeRequest(); // \ZSGF\Client\ZSGF\Client\Model\SendEmailCodeRequest | 发送邮箱验证码的请求参数

try {
    $result = $apiInstance->userSendEmailCode($app_key, $send_email_code_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userSendEmailCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **send_email_code_request** | [**\ZSGF\Client\ZSGF\Client\Model\SendEmailCodeRequest**](../Model/SendEmailCodeRequest.md)| 发送邮箱验证码的请求参数 | [optional] |

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

## `userSendSMSCode()`

```php
userSendSMSCode($app_key, $send_sms_code_request): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

发送手机验证码

发送手机验证码用于注册或找回密码

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$send_sms_code_request = new \ZSGF\Client\ZSGF\Client\Model\SendSMSCodeRequest(); // \ZSGF\Client\ZSGF\Client\Model\SendSMSCodeRequest | 发送手机验证码的请求参数

try {
    $result = $apiInstance->userSendSMSCode($app_key, $send_sms_code_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userSendSMSCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **send_sms_code_request** | [**\ZSGF\Client\ZSGF\Client\Model\SendSMSCodeRequest**](../Model/SendSMSCodeRequest.md)| 发送手机验证码的请求参数 | [optional] |

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

## `userSignIn()`

```php
userSignIn($app_key, $sign_in_request): \ZSGF\Client\ZSGF\Client\Model\TokenModelApiResponse
```

密码登录

使用账号密码进行登录

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$sign_in_request = new \ZSGF\Client\ZSGF\Client\Model\SignInRequest(); // \ZSGF\Client\ZSGF\Client\Model\SignInRequest | 登录请求参数

try {
    $result = $apiInstance->userSignIn($app_key, $sign_in_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userSignIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **sign_in_request** | [**\ZSGF\Client\ZSGF\Client\Model\SignInRequest**](../Model/SignInRequest.md)| 登录请求参数 | [optional] |

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

## `userSignUp()`

```php
userSignUp($app_key, $sign_up_request): \ZSGF\Client\ZSGF\Client\Model\TokenModelApiResponse
```

账号注册

使用账号密码进行注册

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$sign_up_request = new \ZSGF\Client\ZSGF\Client\Model\SignUpRequest(); // \ZSGF\Client\ZSGF\Client\Model\SignUpRequest | 注册请求参数

try {
    $result = $apiInstance->userSignUp($app_key, $sign_up_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userSignUp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **sign_up_request** | [**\ZSGF\Client\ZSGF\Client\Model\SignUpRequest**](../Model/SignUpRequest.md)| 注册请求参数 | [optional] |

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

## `userTwoFactorAuth()`

```php
userTwoFactorAuth($app_key): \ZSGF\Client\ZSGF\Client\Model\SetupCodeApiResponse
```

二次验证

获取当前用户在指定应用下启用二次验证（2FA）所需的设置信息，主要包括二维码链接和手动密钥，用户可以将其录入在 Google Authenticator 等 TOTP 应用中，用于后续动态验证码验证。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->userTwoFactorAuth($app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userTwoFactorAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\SetupCodeApiResponse**](../Model/SetupCodeApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userUnionIDSignIn()`

```php
userUnionIDSignIn($app_key, $union_id_sign_in_request): \ZSGF\Client\ZSGF\Client\Model\TokenModelApiResponse
```

UnionID登录

使用UnionID进行登录

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$union_id_sign_in_request = new \ZSGF\Client\ZSGF\Client\Model\UnionIDSignInRequest(); // \ZSGF\Client\ZSGF\Client\Model\UnionIDSignInRequest | 登录请求参数

try {
    $result = $apiInstance->userUnionIDSignIn($app_key, $union_id_sign_in_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userUnionIDSignIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **union_id_sign_in_request** | [**\ZSGF\Client\ZSGF\Client\Model\UnionIDSignInRequest**](../Model/UnionIDSignInRequest.md)| 登录请求参数 | [optional] |

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

## `userUnionIDSignUp()`

```php
userUnionIDSignUp($app_key, $union_id_sign_up_request): \ZSGF\Client\ZSGF\Client\Model\TokenModelApiResponse
```

UnionID注册

使用UnionID进行注册

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$union_id_sign_up_request = new \ZSGF\Client\ZSGF\Client\Model\UnionIDSignUpRequest(); // \ZSGF\Client\ZSGF\Client\Model\UnionIDSignUpRequest | 注册请求参数

try {
    $result = $apiInstance->userUnionIDSignUp($app_key, $union_id_sign_up_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userUnionIDSignUp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **union_id_sign_up_request** | [**\ZSGF\Client\ZSGF\Client\Model\UnionIDSignUpRequest**](../Model/UnionIDSignUpRequest.md)| 注册请求参数 | [optional] |

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

## `userUpdateProfile()`

```php
userUpdateProfile($app_key, $update_profile_request): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

更新个人资料

更新当前用户的个人资料

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$update_profile_request = new \ZSGF\Client\ZSGF\Client\Model\UpdateProfileRequest(); // \ZSGF\Client\ZSGF\Client\Model\UpdateProfileRequest | 更新个人资料的请求参数

try {
    $result = $apiInstance->userUpdateProfile($app_key, $update_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userUpdateProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **update_profile_request** | [**\ZSGF\Client\ZSGF\Client\Model\UpdateProfileRequest**](../Model/UpdateProfileRequest.md)| 更新个人资料的请求参数 | [optional] |

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
