# ZSGF\Client\UserApi

All URIs are relative to https://api.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**user()**](UserApi.md#user) | **GET** /User/{appKey}/{id} | 获取用户详情 |
| [**userClear()**](UserApi.md#userClear) | **DELETE** /User/{appKey}/Clear | 清空用户数据 |
| [**userCommonInterests()**](UserApi.md#userCommonInterests) | **GET** /User/{appKey}/Friends/CommonInterests | 有共同爱好的用户推荐 |
| [**userDelete()**](UserApi.md#userDelete) | **DELETE** /User/{appKey}/{id} | 删除用户 |
| [**userEmailSignIn()**](UserApi.md#userEmailSignIn) | **POST** /User/{appKey}/EmailSignIn | 邮箱登录 |
| [**userEmailSignUp()**](UserApi.md#userEmailSignUp) | **POST** /User/{appKey}/EmailSignUp | 邮箱注册 |
| [**userExport()**](UserApi.md#userExport) | **GET** /User/{appKey}/Export | 导出用户数据 |
| [**userFollowUser()**](UserApi.md#userFollowUser) | **POST** /User/{appKey}/Follower/{userId} | 关注用户 |
| [**userFollowerPut()**](UserApi.md#userFollowerPut) | **PUT** /User/{appKey}/Follower/{id} | 更新粉丝 |
| [**userFollowers()**](UserApi.md#userFollowers) | **GET** /User/{appKey}/Followers | 获取我的粉丝列表 |
| [**userFollowing()**](UserApi.md#userFollowing) | **GET** /User/{appKey}/Following | 获取我的关注列表 |
| [**userFriendsNearBy()**](UserApi.md#userFriendsNearBy) | **GET** /User/{appKey}/Friends/NearBy | 附近的用户推荐 |
| [**userImport()**](UserApi.md#userImport) | **POST** /User/{appKey}/Import | 导入用户数据 |
| [**userLocation()**](UserApi.md#userLocation) | **GET** /User/{appKey}/Location/{id} | 获取位置详情 |
| [**userLocationDelete()**](UserApi.md#userLocationDelete) | **DELETE** /User/{appKey}/Location/{id} | 删除位置 |
| [**userLocationPost()**](UserApi.md#userLocationPost) | **POST** /User/{appKey}/Location | 添加位置 |
| [**userLocationPut()**](UserApi.md#userLocationPut) | **PUT** /User/{appKey}/Location/{id} | 更新位置 |
| [**userLocations()**](UserApi.md#userLocations) | **GET** /User/{appKey}/Locations | 获取位置列表 |
| [**userMutualFollowers()**](UserApi.md#userMutualFollowers) | **GET** /User/{appKey}/Friends/MutualFollowers | 有共同粉丝的用户推荐 |
| [**userMutualFollowings()**](UserApi.md#userMutualFollowings) | **GET** /User/{appKey}/Friends/MutualFollowings | 有共同关注的用户推荐 |
| [**userOAuthAccountBind()**](UserApi.md#userOAuthAccountBind) | **POST** /User/{appKey}/OAuthAccountBind | 外部账号 绑定 |
| [**userOAuthAccountSignIn()**](UserApi.md#userOAuthAccountSignIn) | **POST** /User/{appKey}/OAuthAccountSignIn | 外部账号 登录 |
| [**userOAuthAccounts()**](UserApi.md#userOAuthAccounts) | **GET** /User/{appKey}/OAuthAccounts | 外部账号 绑定列表 |
| [**userOAuthAccountsPutBind()**](UserApi.md#userOAuthAccountsPutBind) | **PUT** /User/{appKey}/OAuthAccounts/{id} | 外部账号 更新绑定 |
| [**userOAuthAccountsUnBind()**](UserApi.md#userOAuthAccountsUnBind) | **DELETE** /User/{appKey}/OAuthAccounts/{id} | 外部账号 删除绑定 |
| [**userPhoneSignIn()**](UserApi.md#userPhoneSignIn) | **POST** /User/{appKey}/PhoneSignIn | 手机登录 |
| [**userPhoneSignUp()**](UserApi.md#userPhoneSignUp) | **POST** /User/{appKey}/PhoneSignUp | 手机注册 |
| [**userProfile()**](UserApi.md#userProfile) | **GET** /User/{appKey}/Profile | 获取个人资料 |
| [**userPut()**](UserApi.md#userPut) | **PUT** /User/{appKey}/{id} | 更新用户信息 |
| [**userQRCodePreSignIn()**](UserApi.md#userQRCodePreSignIn) | **POST** /User/{appKey}/QRCodePreSignIn | 微信小程序 - 预登陆 |
| [**userQRCodeScan()**](UserApi.md#userQRCodeScan) | **POST** /User/{appKey}/QRCodeScan | 微信小程序 - 扫码 |
| [**userQRCodeSignIn()**](UserApi.md#userQRCodeSignIn) | **POST** /User/{appKey}/QRCodeSignIn | 微信小程序 - 网页登录 |
| [**userQRCodeSignUp()**](UserApi.md#userQRCodeSignUp) | **POST** /User/{appKey}/QRCodeSignUp | 微信小程序 - 注册 |
| [**userResetPwd()**](UserApi.md#userResetPwd) | **POST** /User/{appKey}/ResetPwd | 重置密码 |
| [**userSendEmailCode()**](UserApi.md#userSendEmailCode) | **POST** /User/{appKey}/SendEmailCode | 发送邮箱验证码 |
| [**userSendSMSCode()**](UserApi.md#userSendSMSCode) | **POST** /User/{appKey}/SendSMSCode | 发送手机验证码 |
| [**userSignIn()**](UserApi.md#userSignIn) | **POST** /User/{appKey}/SignIn | 账号密码 登录 |
| [**userSignUp()**](UserApi.md#userSignUp) | **POST** /User/{appKey}/SignUp | 账号密码 注册 |
| [**userTwoFactorAuth()**](UserApi.md#userTwoFactorAuth) | **GET** /User/{appKey}/TwoFactorAuth | 双因素验证 |
| [**userUnfollowUser()**](UserApi.md#userUnfollowUser) | **DELETE** /User/{appKey}/Follower/{userId} | 取消关注 |
| [**userUnionIDSignIn()**](UserApi.md#userUnionIDSignIn) | **POST** /User/{appKey}/UnionIDSignIn | UnionID登录 |
| [**userUnionIDSignUp()**](UserApi.md#userUnionIDSignUp) | **POST** /User/{appKey}/UnionIDSignUp | UnionID注册 |
| [**userUpdateProfile()**](UserApi.md#userUpdateProfile) | **PUT** /User/{appKey}/Profile | 更新个人资料 |
| [**users()**](UserApi.md#users) | **GET** /User/{appKey} | 获取用户列表 |


## `user()`

```php
user($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\UserApiResponse
```

获取用户详情

根据用户ID获取用户详情

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
$id = 56; // int | 用户ID
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->user($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->user: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 用户ID | |
| **app_key** | **string**|  | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\UserApiResponse**](../Model/UserApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userClear()`

```php
userClear($app_key): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

清空用户数据

清空用户数据

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
    $result = $apiInstance->userClear($app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userClear: ', $e->getMessage(), PHP_EOL;
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

## `userCommonInterests()`

```php
userCommonInterests($app_key, $tag, $skip, $take): \ZSGF\Client\ZSGF\Client\Model\UserCommonInterestsResultApiResponse
```

有共同爱好的用户推荐

推荐有共同爱好的用户

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
$tag = 'tag_example'; // string | 兴趣标签
$skip = 0; // int | 跳过的记录数
$take = 10; // int | 获取的记录数

try {
    $result = $apiInstance->userCommonInterests($app_key, $tag, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCommonInterests: ', $e->getMessage(), PHP_EOL;
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

## `userDelete()`

```php
userDelete($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

删除用户

根据用户ID删除用户

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
$id = 56; // int | 用户ID
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->userDelete($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 用户ID | |
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

## `userExport()`

```php
userExport($app_key): \SplFileObject
```

导出用户数据

导出所有用户数据为Excel文件

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
    $result = $apiInstance->userExport($app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userFollowUser()`

```php
userFollowUser($user_id, $app_key): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

关注用户

关注指定用户

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
$user_id = 56; // int | 要关注的用户ID
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->userFollowUser($user_id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userFollowUser: ', $e->getMessage(), PHP_EOL;
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

更新粉丝

根据粉丝ID更新粉丝信息

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
$id = 56; // int | 粉丝ID
$app_key = 'app_key_example'; // string
$follower_put_model = new \ZSGF\Client\ZSGF\Client\Model\FollowerPutModel(); // \ZSGF\Client\ZSGF\Client\Model\FollowerPutModel | 更新粉丝的请求参数

try {
    $result = $apiInstance->userFollowerPut($id, $app_key, $follower_put_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userFollowerPut: ', $e->getMessage(), PHP_EOL;
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
userFollowers($app_key, $tag, $status, $skip, $take): \ZSGF\Client\ZSGF\Client\Model\UserFollowersResultApiResponse
```

获取我的粉丝列表

根据条件获取我的粉丝列表

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
$tag = 'tag_example'; // string | 标签
$status = 'status_example'; // string | 状态
$skip = 0; // int | 跳过的记录数
$take = 10; // int | 获取的记录数

try {
    $result = $apiInstance->userFollowers($app_key, $tag, $status, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userFollowers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **tag** | **string**| 标签 | [optional] |
| **status** | **string**| 状态 | [optional] |
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
userFollowing($app_key, $tag, $status, $skip, $take): \ZSGF\Client\ZSGF\Client\Model\UserFollowingResultApiResponse
```

获取我的关注列表

根据条件获取我的关注列表

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
$tag = 'tag_example'; // string | 标签
$status = 'status_example'; // string | 状态
$skip = 0; // int | 跳过的记录数
$take = 10; // int | 获取的记录数

try {
    $result = $apiInstance->userFollowing($app_key, $tag, $status, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userFollowing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **tag** | **string**| 标签 | [optional] |
| **status** | **string**| 状态 | [optional] |
| **skip** | **int**| 跳过的记录数 | [optional] [default to 0] |
| **take** | **int**| 获取的记录数 | [optional] [default to 10] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\UserFollowingResultApiResponse**](../Model/UserFollowingResultApiResponse.md)

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
userFriendsNearBy($x, $y, $distance, $app_key, $gender, $age_s, $age_e, $tag, $type, $skip, $take): \ZSGF\Client\ZSGF\Client\Model\UserFriendsNearByResultApiResponse
```

附近的用户推荐

推荐附近的用户

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
$x = 3.4; // float | 纬度
$y = 3.4; // float | 经度
$distance = 56; // int | 附近距离，单位：米
$app_key = 'app_key_example'; // string
$gender = 'gender_example'; // string | 性别
$age_s = 56; // int | 年龄段起始
$age_e = 56; // int | 年龄段结束
$tag = 'tag_example'; // string | 兴趣标签
$type = 'type_example'; // string | 分类
$skip = 0; // int | 跳过的记录数
$take = 10; // int | 获取的记录数

try {
    $result = $apiInstance->userFriendsNearBy($x, $y, $distance, $app_key, $gender, $age_s, $age_e, $tag, $type, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userFriendsNearBy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x** | **float**| 纬度 | |
| **y** | **float**| 经度 | |
| **distance** | **int**| 附近距离，单位：米 | |
| **app_key** | **string**|  | |
| **gender** | **string**| 性别 | [optional] |
| **age_s** | **int**| 年龄段起始 | [optional] |
| **age_e** | **int**| 年龄段结束 | [optional] |
| **tag** | **string**| 兴趣标签 | [optional] |
| **type** | **string**| 分类 | [optional] |
| **skip** | **int**| 跳过的记录数 | [optional] [default to 0] |
| **take** | **int**| 获取的记录数 | [optional] [default to 10] |

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

## `userImport()`

```php
userImport($app_key, $check, $file): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

导入用户数据

导入用户数据

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
$check = True; // bool | 是否进行检查
$file = '/path/to/file.txt'; // \SplFileObject | 导入的文件

try {
    $result = $apiInstance->userImport($app_key, $check, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **check** | **bool**| 是否进行检查 | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| 导入的文件 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse**](../Model/BooleanApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userLocation()`

```php
userLocation($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\GeoLocationModelApiResponse
```

获取位置详情

根据位置ID获取位置详情

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
$id = 56; // int | 位置ID
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->userLocation($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 位置ID | |
| **app_key** | **string**|  | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\GeoLocationModelApiResponse**](../Model/GeoLocationModelApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userLocationDelete()`

```php
userLocationDelete($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

删除位置

根据位置ID删除位置信息

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
$id = 56; // int | 位置ID
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->userLocationDelete($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userLocationDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 位置ID | |
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

## `userLocationPost()`

```php
userLocationPost($app_key, $geo_location_model): \ZSGF\Client\ZSGF\Client\Model\UserLocationPostResultApiResponse
```

添加位置

添加新的位置信息

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
$geo_location_model = new \ZSGF\Client\ZSGF\Client\Model\GeoLocationModel(); // \ZSGF\Client\ZSGF\Client\Model\GeoLocationModel | 位置信息

try {
    $result = $apiInstance->userLocationPost($app_key, $geo_location_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userLocationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **geo_location_model** | [**\ZSGF\Client\ZSGF\Client\Model\GeoLocationModel**](../Model/GeoLocationModel.md)| 位置信息 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\UserLocationPostResultApiResponse**](../Model/UserLocationPostResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userLocationPut()`

```php
userLocationPut($id, $app_key, $geo_location_model): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

更新位置

根据位置ID更新位置信息

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
$id = 56; // int | 位置ID
$app_key = 'app_key_example'; // string
$geo_location_model = new \ZSGF\Client\ZSGF\Client\Model\GeoLocationModel(); // \ZSGF\Client\ZSGF\Client\Model\GeoLocationModel | 位置信息

try {
    $result = $apiInstance->userLocationPut($id, $app_key, $geo_location_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userLocationPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 位置ID | |
| **app_key** | **string**|  | |
| **geo_location_model** | [**\ZSGF\Client\ZSGF\Client\Model\GeoLocationModel**](../Model/GeoLocationModel.md)| 位置信息 | [optional] |

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

## `userLocations()`

```php
userLocations($app_key, $tag, $type, $x, $y, $sphere, $skip, $take): \ZSGF\Client\ZSGF\Client\Model\UserLocationsResultApiResponse
```

获取位置列表

根据条件获取位置列表

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
$tag = 'tag_example'; // string | 标签
$type = 'type_example'; // string | 分类
$x = 3.4; // float | 纬度
$y = 3.4; // float | 经度
$sphere = 56; // int | 附近距离，单位：米
$skip = 56; // int | 跳过的记录数
$take = 10; // int | 获取的记录数

try {
    $result = $apiInstance->userLocations($app_key, $tag, $type, $x, $y, $sphere, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **tag** | **string**| 标签 | [optional] |
| **type** | **string**| 分类 | [optional] |
| **x** | **float**| 纬度 | [optional] |
| **y** | **float**| 经度 | [optional] |
| **sphere** | **int**| 附近距离，单位：米 | [optional] |
| **skip** | **int**| 跳过的记录数 | [optional] |
| **take** | **int**| 获取的记录数 | [optional] [default to 10] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\UserLocationsResultApiResponse**](../Model/UserLocationsResultApiResponse.md)

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

有共同粉丝的用户推荐

推荐有共同粉丝的用户

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
$skip = 0; // int | 跳过的记录数
$take = 10; // int | 获取的记录数

try {
    $result = $apiInstance->userMutualFollowers($app_key, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userMutualFollowers: ', $e->getMessage(), PHP_EOL;
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

有共同关注的用户推荐

推荐有共同关注的用户

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
$skip = 0; // int | 跳过的记录数
$take = 10; // int | 获取的记录数

try {
    $result = $apiInstance->userMutualFollowings($app_key, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userMutualFollowings: ', $e->getMessage(), PHP_EOL;
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

## `userOAuthAccountBind()`

```php
userOAuthAccountBind($app_key, $o_auth_account_bind_request): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

外部账号 绑定

绑定外部账号

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
$o_auth_account_bind_request = new \ZSGF\Client\ZSGF\Client\Model\OAuthAccountBindRequest(); // \ZSGF\Client\ZSGF\Client\Model\OAuthAccountBindRequest | 绑定请求参数

try {
    $result = $apiInstance->userOAuthAccountBind($app_key, $o_auth_account_bind_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userOAuthAccountBind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **o_auth_account_bind_request** | [**\ZSGF\Client\ZSGF\Client\Model\OAuthAccountBindRequest**](../Model/OAuthAccountBindRequest.md)| 绑定请求参数 | [optional] |

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

## `userOAuthAccountSignIn()`

```php
userOAuthAccountSignIn($app_key, $o_auth_account_sign_in_request): \ZSGF\Client\ZSGF\Client\Model\TokenModelApiResponse
```

外部账号 登录

使用外部账号进行登录

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
$o_auth_account_sign_in_request = new \ZSGF\Client\ZSGF\Client\Model\OAuthAccountSignInRequest(); // \ZSGF\Client\ZSGF\Client\Model\OAuthAccountSignInRequest | 登录请求参数

try {
    $result = $apiInstance->userOAuthAccountSignIn($app_key, $o_auth_account_sign_in_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userOAuthAccountSignIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **o_auth_account_sign_in_request** | [**\ZSGF\Client\ZSGF\Client\Model\OAuthAccountSignInRequest**](../Model/OAuthAccountSignInRequest.md)| 登录请求参数 | [optional] |

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

## `userOAuthAccounts()`

```php
userOAuthAccounts($app_key): \ZSGF\Client\ZSGF\Client\Model\UserLoginsListApiResponse
```

外部账号 绑定列表

获取外部账号绑定列表

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
    $result = $apiInstance->userOAuthAccounts($app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userOAuthAccounts: ', $e->getMessage(), PHP_EOL;
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
userOAuthAccountsPutBind($id, $app_key, $o_auth_account_put_bind_request): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

外部账号 更新绑定

更新外部账号绑定信息

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
$id = 56; // int | 绑定ID
$app_key = 'app_key_example'; // string
$o_auth_account_put_bind_request = new \ZSGF\Client\ZSGF\Client\Model\OAuthAccountPutBindRequest(); // \ZSGF\Client\ZSGF\Client\Model\OAuthAccountPutBindRequest | 更新请求参数

try {
    $result = $apiInstance->userOAuthAccountsPutBind($id, $app_key, $o_auth_account_put_bind_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userOAuthAccountsPutBind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 绑定ID | |
| **app_key** | **string**|  | |
| **o_auth_account_put_bind_request** | [**\ZSGF\Client\ZSGF\Client\Model\OAuthAccountPutBindRequest**](../Model/OAuthAccountPutBindRequest.md)| 更新请求参数 | [optional] |

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

外部账号 删除绑定

删除外部账号绑定

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
$id = 56; // int | 绑定ID
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->userOAuthAccountsUnBind($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userOAuthAccountsUnBind: ', $e->getMessage(), PHP_EOL;
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

## `userPut()`

```php
userPut($id, $app_key, $user): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

更新用户信息

根据用户ID更新用户信息

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
$id = 56; // int | 用户ID
$app_key = 'app_key_example'; // string
$user = new \ZSGF\Client\ZSGF\Client\Model\User(); // \ZSGF\Client\ZSGF\Client\Model\User | 用户信息

try {
    $result = $apiInstance->userPut($id, $app_key, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 用户ID | |
| **app_key** | **string**|  | |
| **user** | [**\ZSGF\Client\ZSGF\Client\Model\User**](../Model/User.md)| 用户信息 | [optional] |

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

## `userQRCodePreSignIn()`

```php
userQRCodePreSignIn($app_key, $qr_code_pre_sign_in_request): \ZSGF\Client\ZSGF\Client\Model\Int64ApiResponse
```

微信小程序 - 预登陆

使用微信小程序二维码进行预登陆

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
$qr_code_pre_sign_in_request = new \ZSGF\Client\ZSGF\Client\Model\QRCodePreSignInRequest(); // \ZSGF\Client\ZSGF\Client\Model\QRCodePreSignInRequest | 预登陆请求参数

try {
    $result = $apiInstance->userQRCodePreSignIn($app_key, $qr_code_pre_sign_in_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userQRCodePreSignIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **qr_code_pre_sign_in_request** | [**\ZSGF\Client\ZSGF\Client\Model\QRCodePreSignInRequest**](../Model/QRCodePreSignInRequest.md)| 预登陆请求参数 | [optional] |

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

## `userQRCodeScan()`

```php
userQRCodeScan($app_key, $qr_code_scan_request): \ZSGF\Client\ZSGF\Client\Model\UserQRCodeScanResultApiResponse
```

微信小程序 - 扫码

使用微信小程序二维码进行扫码

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
$qr_code_scan_request = new \ZSGF\Client\ZSGF\Client\Model\QRCodeScanRequest(); // \ZSGF\Client\ZSGF\Client\Model\QRCodeScanRequest | 扫码请求参数

try {
    $result = $apiInstance->userQRCodeScan($app_key, $qr_code_scan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userQRCodeScan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **qr_code_scan_request** | [**\ZSGF\Client\ZSGF\Client\Model\QRCodeScanRequest**](../Model/QRCodeScanRequest.md)| 扫码请求参数 | [optional] |

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

## `userQRCodeSignIn()`

```php
userQRCodeSignIn($app_key, $qr_code_sign_in_request): \ZSGF\Client\ZSGF\Client\Model\TokenModelApiResponse
```

微信小程序 - 网页登录

使用微信小程序二维码进行网页登录

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
$qr_code_sign_in_request = new \ZSGF\Client\ZSGF\Client\Model\QRCodeSignInRequest(); // \ZSGF\Client\ZSGF\Client\Model\QRCodeSignInRequest | 登录请求参数

try {
    $result = $apiInstance->userQRCodeSignIn($app_key, $qr_code_sign_in_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userQRCodeSignIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **qr_code_sign_in_request** | [**\ZSGF\Client\ZSGF\Client\Model\QRCodeSignInRequest**](../Model/QRCodeSignInRequest.md)| 登录请求参数 | [optional] |

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

## `userQRCodeSignUp()`

```php
userQRCodeSignUp($app_key, $qr_code_sign_up_request): \ZSGF\Client\ZSGF\Client\Model\TokenModelApiResponse
```

微信小程序 - 注册

使用微信小程序二维码进行注册

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
$qr_code_sign_up_request = new \ZSGF\Client\ZSGF\Client\Model\QRCodeSignUpRequest(); // \ZSGF\Client\ZSGF\Client\Model\QRCodeSignUpRequest | 注册请求参数

try {
    $result = $apiInstance->userQRCodeSignUp($app_key, $qr_code_sign_up_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userQRCodeSignUp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **qr_code_sign_up_request** | [**\ZSGF\Client\ZSGF\Client\Model\QRCodeSignUpRequest**](../Model/QRCodeSignUpRequest.md)| 注册请求参数 | [optional] |

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

账号密码 登录

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

账号密码 注册

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

双因素验证

获取双因素验证的设置信息

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


$apiInstance = new ZSGF\Client\Api\UserApi(
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
    echo 'Exception when calling UserApi->userUnfollowUser: ', $e->getMessage(), PHP_EOL;
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

## `users()`

```php
users($app_key, $user_name, $email, $phone, $platform, $union_id, $role, $skip, $take): \ZSGF\Client\ZSGF\Client\Model\UserListResultApiResponse
```

获取用户列表

根据条件获取用户列表

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
$user_name = 'user_name_example'; // string | 用户名
$email = 'email_example'; // string | 邮箱
$phone = 'phone_example'; // string | 电话
$platform = 'platform_example'; // string | 平台
$union_id = 'union_id_example'; // string | 联合ID
$role = 'role_example'; // string | 角色
$skip = 56; // int | 跳过的记录数
$take = 56; // int | 获取的记录数

try {
    $result = $apiInstance->users($app_key, $user_name, $email, $phone, $platform, $union_id, $role, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->users: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **user_name** | **string**| 用户名 | [optional] |
| **email** | **string**| 邮箱 | [optional] |
| **phone** | **string**| 电话 | [optional] |
| **platform** | **string**| 平台 | [optional] |
| **union_id** | **string**| 联合ID | [optional] |
| **role** | **string**| 角色 | [optional] |
| **skip** | **int**| 跳过的记录数 | [optional] |
| **take** | **int**| 获取的记录数 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\UserListResultApiResponse**](../Model/UserListResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
