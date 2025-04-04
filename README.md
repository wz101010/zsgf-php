# ZSGF-Client

![Packagist Version](https://img.shields.io/packagist/v/zsgf/client)

## 安装与使用

### 要求

PHP 7.4 及更高版本。
也应适用于 PHP 8.0。

### Composer

确保已安装 Composer，如果尚未安装 Composer，请先按照以下步骤进行安装：

#### 下载 Composer：

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

#### 全局安装 Composer​（可选）：

```bash
mv composer.phar /usr/local/bin/composer
```

### 创建或导航到项目目录

如果你还没有项目目录，可以创建一个新的目录并进入该目录：

```bash
mkdir my-project
cd my-project
```

### 初始化 Composer（可选）

```bash
composer init
```

按照提示填写项目信息。如果你只是想快速安装一个库，也可以手动创建 composer.json 文件，或者直接使用下面的命令安装库，Composer 会自动创建或更新 composer.json 和 composer.lock 文件。

### 使用 Composer 安装 zsgf/client 包

在终端或命令提示符中，导航到你的项目目录后，运行以下命令来安装 zsgf/client 包：

```bash
composer require zsgf/client
```

这条命令的作用包括：

- 将 zsgf/client 添加到你的 composer.json 文件的 require 部分。
- 下载 zsgf/client 包及其依赖项。
- 生成或更新 composer.lock 文件，锁定依赖包的版本以确保一致性。


## 使用安装的包

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// 配置 Bearer 授权：Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new ZSGF\Client\Api\AccessTokenApi(
    // 如果你想使用自定义的 HTTP 客户端，请传入实现了 GuzzleHttp\ClientInterface 的客户端。
    // 这是可选的，GuzzleHttp\Client 将作为默认客户端使用。
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->accessTokenDelete($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokenApi->accessTokenDelete: ', $e->getMessage(), PHP_EOL;
}

```

## API 文档

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccessTokenApi* | [**accessTokenDelete**](docs/Api/AccessTokenApi.md#accesstokendelete) | **DELETE** /AccessToken/{appKey}/{id} | 删除令牌
*AccessTokenApi* | [**accessTokenPost**](docs/Api/AccessTokenApi.md#accesstokenpost) | **POST** /AccessToken/{appKey} | 创建令牌
*AccessTokenApi* | [**accessTokenPut**](docs/Api/AccessTokenApi.md#accesstokenput) | **PUT** /AccessToken/{appKey}/{id} | 更新令牌
*AccessTokenApi* | [**accessTokens**](docs/Api/AccessTokenApi.md#accesstokens) | **GET** /AccessToken/{appKey} | 令牌列表
*AlipayApi* | [**alipayCreateOrder**](docs/Api/AlipayApi.md#alipaycreateorder) | **POST** /Alipay/{appKey}/CreateOrder | 创建订单 - 当面付
*AlipayApi* | [**alipayCreateOrderPagePay**](docs/Api/AlipayApi.md#alipaycreateorderpagepay) | **POST** /Alipay/{appKey}/CreateOrderPagePay | 创建订单 - PC支付
*AlipayApi* | [**alipayCreateOrderWapPay**](docs/Api/AlipayApi.md#alipaycreateorderwappay) | **POST** /Alipay/{appKey}/CreateOrderWapPay | 创建订单 - WAP支付
*AlipayApi* | [**alipayOrderDetail**](docs/Api/AlipayApi.md#alipayorderdetail) | **GET** /Alipay/{appKey}/OrderDetail | 订单详情
*AlipayApi* | [**alipayOrderRefund**](docs/Api/AlipayApi.md#alipayorderrefund) | **POST** /Alipay/{appKey}/OrderRefund | 订单退款
*AlipayApi* | [**alipayReturnPageNotify**](docs/Api/AlipayApi.md#alipayreturnpagenotify) | **POST** /Alipay/{appKey}/ReturnPageNotify | 支付成功同步通知
*AppApi* | [**app**](docs/Api/AppApi.md#app) | **GET** /App/{appKey} | 应用详情
*AppApi* | [**app2FA**](docs/Api/AppApi.md#app2fa) | **GET** /App/{appKey}/2FA | 双因素验证 获取
*AppApi* | [**app2FACheck**](docs/Api/AppApi.md#app2facheck) | **GET** /App/{appKey}/2FACheck | 双因素验证 验证
*AppApi* | [**appCheckVersion**](docs/Api/AppApi.md#appcheckversion) | **GET** /App/{appKey}/CheckVersion | 更新应用数据库
*AppApi* | [**appDelete**](docs/Api/AppApi.md#appdelete) | **DELETE** /App/{appKey} | 删除应用
*AppApi* | [**appInfo**](docs/Api/AppApi.md#appinfo) | **GET** /App/{appKey}/Info | 应用详情
*AppApi* | [**appPost**](docs/Api/AppApi.md#apppost) | **POST** /App | 创建应用
*AppApi* | [**appPut**](docs/Api/AppApi.md#appput) | **PUT** /App/{appKey} | 更新应用
*AppApi* | [**appTransfer**](docs/Api/AppApi.md#apptransfer) | **GET** /App/{appKey}/Transfer | 转移应用
*AppApi* | [**apps**](docs/Api/AppApi.md#apps) | **GET** /App | 应用列表
*AppSettingApi* | [**appServiceSettingGroup**](docs/Api/AppSettingApi.md#appservicesettinggroup) | **GET** /AppSetting/{appKey}/Groups/{id} | 获取服务分组详情
*AppSettingApi* | [**appServiceSettingGroupDelete**](docs/Api/AppSettingApi.md#appservicesettinggroupdelete) | **DELETE** /AppSetting/{appKey}/Groups/{id} | 删除服务分组
*AppSettingApi* | [**appServiceSettingGroupPost**](docs/Api/AppSettingApi.md#appservicesettinggrouppost) | **POST** /AppSetting/{appKey}/Groups | 添加服务分组
*AppSettingApi* | [**appServiceSettingGroupPut**](docs/Api/AppSettingApi.md#appservicesettinggroupput) | **PUT** /AppSetting/{appKey}/Groups/{id} | 更新服务分组
*AppSettingApi* | [**appServiceSettingGroups**](docs/Api/AppSettingApi.md#appservicesettinggroups) | **GET** /AppSetting/{appKey}/Groups | 获取服务分组列表
*AppSettingApi* | [**appServiceSettingItem**](docs/Api/AppSettingApi.md#appservicesettingitem) | **GET** /AppSetting/{appKey}/Items/{id} | 服务配置项详情
*AppSettingApi* | [**appServiceSettingItemDelete**](docs/Api/AppSettingApi.md#appservicesettingitemdelete) | **DELETE** /AppSetting/{appKey}/Items/{id} | 删除服务配置项
*AppSettingApi* | [**appServiceSettingItemPost**](docs/Api/AppSettingApi.md#appservicesettingitempost) | **POST** /AppSetting/{appKey}/Items | 添加服务配置项
*AppSettingApi* | [**appServiceSettingItemPut**](docs/Api/AppSettingApi.md#appservicesettingitemput) | **PUT** /AppSetting/{appKey}/Items/{id} | 更新服务配置项
*AppSettingApi* | [**appServiceSettingItems**](docs/Api/AppSettingApi.md#appservicesettingitems) | **GET** /AppSetting/{appKey}/Items | 服务配置项列表
*AppSettingApi* | [**appServiceSettingProvider**](docs/Api/AppSettingApi.md#appservicesettingprovider) | **GET** /AppSetting/{appKey}/Providers/{id} | 获取服务商详情
*AppSettingApi* | [**appServiceSettingProviderDelete**](docs/Api/AppSettingApi.md#appservicesettingproviderdelete) | **DELETE** /AppSetting/{appKey}/Providers/{id} | 删除服务商
*AppSettingApi* | [**appServiceSettingProviderPost**](docs/Api/AppSettingApi.md#appservicesettingproviderpost) | **POST** /AppSetting/{appKey}/Providers | 添加服务商
*AppSettingApi* | [**appServiceSettingProviderPut**](docs/Api/AppSettingApi.md#appservicesettingproviderput) | **PUT** /AppSetting/{appKey}/Providers/{id} | 更新服务商
*AppSettingApi* | [**appServiceSettingProviders**](docs/Api/AppSettingApi.md#appservicesettingproviders) | **GET** /AppSetting/{appKey}/Providers | 获取服务商列表
*AppSettingApi* | [**appSetting**](docs/Api/AppSettingApi.md#appsetting) | **GET** /AppSetting/{appKey}/{id} | 配置详情
*AppSettingApi* | [**appSettingDelete**](docs/Api/AppSettingApi.md#appsettingdelete) | **DELETE** /AppSetting/{appKey}/{id} | 删除配置
*AppSettingApi* | [**appSettingPost**](docs/Api/AppSettingApi.md#appsettingpost) | **POST** /AppSetting/{appKey} | 增加配置
*AppSettingApi* | [**appSettingPut**](docs/Api/AppSettingApi.md#appsettingput) | **PUT** /AppSetting/{appKey}/{id} | 更新配置
*AppSettingApi* | [**appSettings**](docs/Api/AppSettingApi.md#appsettings) | **GET** /AppSetting/{appKey} | 配置列表
*AuthorizePolicyApi* | [**authorizePolicies**](docs/Api/AuthorizePolicyApi.md#authorizepolicies) | **GET** /AuthorizePolicy/{appKey} | 获取鉴权策略列表
*AuthorizePolicyApi* | [**authorizePolicy**](docs/Api/AuthorizePolicyApi.md#authorizepolicy) | **GET** /AuthorizePolicy/{appKey}/{id} | 获取鉴权策略详情
*AuthorizePolicyApi* | [**authorizePolicyDelete**](docs/Api/AuthorizePolicyApi.md#authorizepolicydelete) | **DELETE** /AuthorizePolicy/{appKey}/{id} | 删除鉴权策略
*AuthorizePolicyApi* | [**authorizePolicyPost**](docs/Api/AuthorizePolicyApi.md#authorizepolicypost) | **POST** /AuthorizePolicy/{appKey} | 添加鉴权策略
*AuthorizePolicyApi* | [**authorizePolicyPut**](docs/Api/AuthorizePolicyApi.md#authorizepolicyput) | **PUT** /AuthorizePolicy/{appKey}/{id} | 更新鉴权策略
*CurrencyApi* | [**currencies**](docs/Api/CurrencyApi.md#currencies) | **GET** /Currency/{appKey} | 获取货币列表
*CurrencyApi* | [**currency**](docs/Api/CurrencyApi.md#currency) | **GET** /Currency/{appKey}/{id} | 获取货币详情
*CurrencyApi* | [**currencyDelete**](docs/Api/CurrencyApi.md#currencydelete) | **DELETE** /Currency/{appKey}/{id} | 删除货币
*CurrencyApi* | [**currencyExchangeRateDelete**](docs/Api/CurrencyApi.md#currencyexchangeratedelete) | **DELETE** /Currency/{appKey}/ExchangeRates/{id} | 删除汇率
*CurrencyApi* | [**currencyExchangeRatePut**](docs/Api/CurrencyApi.md#currencyexchangerateput) | **PUT** /Currency/{appKey}/ExchangeRates/{code} | 更新汇率
*CurrencyApi* | [**currencyExchangeRates**](docs/Api/CurrencyApi.md#currencyexchangerates) | **GET** /Currency/{appKey}/ExchangeRates/{code} | 获取汇率列表
*CurrencyApi* | [**currencyPost**](docs/Api/CurrencyApi.md#currencypost) | **POST** /Currency/{appKey} | 创建新货币
*CurrencyApi* | [**currencyPut**](docs/Api/CurrencyApi.md#currencyput) | **PUT** /Currency/{appKey}/{id} | 更新货币信息
*CurrencyApi* | [**currencyTransactions**](docs/Api/CurrencyApi.md#currencytransactions) | **GET** /Currency/{appKey}/Transactions | 获取货币交易记录
*DingTalkApi* | [**dingTalkUserInfo**](docs/Api/DingTalkApi.md#dingtalkuserinfo) | **GET** /DingTalk/{appKey}/UserInfo | 获取用户资料
*FileApi* | [**fileCreateFolder**](docs/Api/FileApi.md#filecreatefolder) | **POST** /File/{appKey}/CreateFolder | 创建文件夹
*FileApi* | [**fileDelete**](docs/Api/FileApi.md#filedelete) | **DELETE** /File/{appKey} | 删除文件或文件夹
*FileApi* | [**fileRename**](docs/Api/FileApi.md#filerename) | **POST** /File/{appKey}/Rename | 重命名文件或文件夹
*FileApi* | [**fileUpload**](docs/Api/FileApi.md#fileupload) | **POST** /File/{appKey}/Upload | 上传文件
*FileApi* | [**files**](docs/Api/FileApi.md#files) | **GET** /File/{appKey} | 获取文件列表
*OAuthApi* | [**oAuthAuthorize**](docs/Api/OAuthApi.md#oauthauthorize) | **POST** /OAuth/{appKey}/Authorize | 获取access_token
*OAuthApi* | [**oAuthConsents**](docs/Api/OAuthApi.md#oauthconsents) | **GET** /OAuth/{appKey}/Consents | 授权记录
*OAuthApi* | [**oAuthDeleteConsent**](docs/Api/OAuthApi.md#oauthdeleteconsent) | **DELETE** /OAuth/{appKey}/Consents/{id} | 删除授权记录
*OAuthApi* | [**oAuthGrantCode**](docs/Api/OAuthApi.md#oauthgrantcode) | **POST** /OAuth/{appKey}/GrantCode | 申请授权码
*OAuthApi* | [**oAuthProfile**](docs/Api/OAuthApi.md#oauthprofile) | **GET** /OAuth/{appKey}/Profile | 获取个人资料
*OrderApi* | [**order**](docs/Api/OrderApi.md#order) | **GET** /Order/{appKey}/{id} | 获取订单详情
*OrderApi* | [**orderCreate**](docs/Api/OrderApi.md#ordercreate) | **POST** /Order/{appKey}/Create | 创建订单
*OrderApi* | [**orders**](docs/Api/OrderApi.md#orders) | **GET** /Order/{appKey} | 获取订单列表
*ProjectApi* | [**project**](docs/Api/ProjectApi.md#project) | **GET** /Project/{id} | 项目详情
*ProjectApi* | [**projectDelete**](docs/Api/ProjectApi.md#projectdelete) | **DELETE** /Project/{id} | 删除项目
*ProjectApi* | [**projectPost**](docs/Api/ProjectApi.md#projectpost) | **POST** /Project | 创建项目
*ProjectApi* | [**projectPut**](docs/Api/ProjectApi.md#projectput) | **PUT** /Project/{id} | 更新项目
*ProjectApi* | [**projects**](docs/Api/ProjectApi.md#projects) | **GET** /Project | 项目列表
*ServiceSettingApi* | [**serviceSetting**](docs/Api/ServiceSettingApi.md#servicesetting) | **GET** /ServiceSetting/{id} | 获取配置详情
*ServiceSettingApi* | [**serviceSettingDelete**](docs/Api/ServiceSettingApi.md#servicesettingdelete) | **DELETE** /ServiceSetting/{id} | 删除配置
*ServiceSettingApi* | [**serviceSettingGroup**](docs/Api/ServiceSettingApi.md#servicesettinggroup) | **GET** /ServiceSetting/Groups/{id} | 获取服务分组详情
*ServiceSettingApi* | [**serviceSettingGroupDelete**](docs/Api/ServiceSettingApi.md#servicesettinggroupdelete) | **DELETE** /ServiceSetting/Groups/{id} | 删除服务分组
*ServiceSettingApi* | [**serviceSettingGroupPost**](docs/Api/ServiceSettingApi.md#servicesettinggrouppost) | **POST** /ServiceSetting/Groups | 添加服务分组
*ServiceSettingApi* | [**serviceSettingGroupPut**](docs/Api/ServiceSettingApi.md#servicesettinggroupput) | **PUT** /ServiceSetting/Groups/{id} | 更新服务分组
*ServiceSettingApi* | [**serviceSettingGroups**](docs/Api/ServiceSettingApi.md#servicesettinggroups) | **GET** /ServiceSetting/Groups | 获取服务分组列表
*ServiceSettingApi* | [**serviceSettingItem**](docs/Api/ServiceSettingApi.md#servicesettingitem) | **GET** /ServiceSetting/Items/{id} | 服务配置详情
*ServiceSettingApi* | [**serviceSettingItemDelete**](docs/Api/ServiceSettingApi.md#servicesettingitemdelete) | **DELETE** /ServiceSetting/Items/{id} | 删除服务配置
*ServiceSettingApi* | [**serviceSettingItemPost**](docs/Api/ServiceSettingApi.md#servicesettingitempost) | **POST** /ServiceSetting/Items | 添加服务配置
*ServiceSettingApi* | [**serviceSettingItemPut**](docs/Api/ServiceSettingApi.md#servicesettingitemput) | **PUT** /ServiceSetting/Items/{id} | 更新服务配置
*ServiceSettingApi* | [**serviceSettingItems**](docs/Api/ServiceSettingApi.md#servicesettingitems) | **GET** /ServiceSetting/Items | 服务配置列表
*ServiceSettingApi* | [**serviceSettingPost**](docs/Api/ServiceSettingApi.md#servicesettingpost) | **POST** /ServiceSetting | 增加配置
*ServiceSettingApi* | [**serviceSettingProvider**](docs/Api/ServiceSettingApi.md#servicesettingprovider) | **GET** /ServiceSetting/Providers/{id} | 获取服务商详情
*ServiceSettingApi* | [**serviceSettingProviderDelete**](docs/Api/ServiceSettingApi.md#servicesettingproviderdelete) | **DELETE** /ServiceSetting/Providers/{id} | 删除服务商
*ServiceSettingApi* | [**serviceSettingProviderPost**](docs/Api/ServiceSettingApi.md#servicesettingproviderpost) | **POST** /ServiceSetting/Providers | 添加服务商
*ServiceSettingApi* | [**serviceSettingProviderPut**](docs/Api/ServiceSettingApi.md#servicesettingproviderput) | **PUT** /ServiceSetting/Providers/{id} | 更新服务商
*ServiceSettingApi* | [**serviceSettingProviders**](docs/Api/ServiceSettingApi.md#servicesettingproviders) | **GET** /ServiceSetting/Providers | 获取服务商列表
*ServiceSettingApi* | [**serviceSettingPut**](docs/Api/ServiceSettingApi.md#servicesettingput) | **PUT** /ServiceSetting/{id} | 更新配置
*ServiceSettingApi* | [**serviceSettings**](docs/Api/ServiceSettingApi.md#servicesettings) | **GET** /ServiceSetting | 获取配置列表
*StorageApi* | [**storageAggregate**](docs/Api/StorageApi.md#storageaggregate) | **GET** /Storage/{appKey}/{table}/Aggregate | 聚合查询
*StorageApi* | [**storageClear**](docs/Api/StorageApi.md#storageclear) | **DELETE** /Storage/{appKey}/{table}/Clear | 清空表数据
*StorageApi* | [**storageDelete**](docs/Api/StorageApi.md#storagedelete) | **DELETE** /Storage/{appKey}/{table}/{id} | 删除数据
*StorageApi* | [**storageDeleteIndex**](docs/Api/StorageApi.md#storagedeleteindex) | **DELETE** /Storage/{appKey}/{table}/indexes | 删除索引
*StorageApi* | [**storageDetail**](docs/Api/StorageApi.md#storagedetail) | **GET** /Storage/{appKey}/{table}/{id} | 数据详情
*StorageApi* | [**storageExecuteFunction**](docs/Api/StorageApi.md#storageexecutefunction) | **GET** /Storage/{appKey}/ExecuteFunction | 执行函数
*StorageApi* | [**storageExport**](docs/Api/StorageApi.md#storageexport) | **GET** /Storage/{appKey}/{table}/Export | 导出数据
*StorageApi* | [**storageImport**](docs/Api/StorageApi.md#storageimport) | **POST** /Storage/{appKey}/{table}/Import | 导入数据
*StorageApi* | [**storageIndexes**](docs/Api/StorageApi.md#storageindexes) | **GET** /Storage/{appKey}/{table}/Indexes | 获取索引
*StorageApi* | [**storageList**](docs/Api/StorageApi.md#storagelist) | **GET** /Storage/{appKey}/{table} | 查询数据
*StorageApi* | [**storagePost**](docs/Api/StorageApi.md#storagepost) | **POST** /Storage/{appKey}/{table} | 添加数据
*StorageApi* | [**storagePostIndex**](docs/Api/StorageApi.md#storagepostindex) | **POST** /Storage/{appKey}/{table}/indexes | 添加索引
*StorageApi* | [**storagePut**](docs/Api/StorageApi.md#storageput) | **PUT** /Storage/{appKey}/{table}/{id} | 更新数据
*StorageApi* | [**storageRemove**](docs/Api/StorageApi.md#storageremove) | **DELETE** /Storage/{appKey}/{table}/Remove | 删除表
*StorageApi* | [**storageStats**](docs/Api/StorageApi.md#storagestats) | **GET** /Storage/{appKey}/{table}/Stats | 数据表统计
*StorageApi* | [**storageTables**](docs/Api/StorageApi.md#storagetables) | **GET** /Storage/{appKey}/Tables | 获取数据表
*SystemFileApi* | [**systemFileCreateFolder**](docs/Api/SystemFileApi.md#systemfilecreatefolder) | **POST** /SystemFile/CreateFolder | 创建文件夹
*SystemFileApi* | [**systemFileDelete**](docs/Api/SystemFileApi.md#systemfiledelete) | **DELETE** /SystemFile | 删除文件
*SystemFileApi* | [**systemFileRename**](docs/Api/SystemFileApi.md#systemfilerename) | **POST** /SystemFile/Rename | 重命名文件
*SystemFileApi* | [**systemFileUpload**](docs/Api/SystemFileApi.md#systemfileupload) | **POST** /SystemFile | 上传文件
*SystemFileApi* | [**systemFiles**](docs/Api/SystemFileApi.md#systemfiles) | **GET** /SystemFile | 获取文件列表
*TeamApi* | [**teamDelete**](docs/Api/TeamApi.md#teamdelete) | **DELETE** /Team/{id} | 删除团队
*TeamApi* | [**teamPost**](docs/Api/TeamApi.md#teampost) | **POST** /Team | 创建团队
*TeamApi* | [**teamPut**](docs/Api/TeamApi.md#teamput) | **PUT** /Team/{id} | 更新团队信息
*TeamApi* | [**teams**](docs/Api/TeamApi.md#teams) | **GET** /Team | 获取团队列表
*UserApi* | [**user**](docs/Api/UserApi.md#user) | **GET** /User/{appKey}/{id} | 获取用户详情
*UserApi* | [**userClear**](docs/Api/UserApi.md#userclear) | **DELETE** /User/{appKey}/Clear | 清空用户数据
*UserApi* | [**userCommonInterests**](docs/Api/UserApi.md#usercommoninterests) | **GET** /User/{appKey}/Friends/CommonInterests | 有共同爱好的用户推荐
*UserApi* | [**userDelete**](docs/Api/UserApi.md#userdelete) | **DELETE** /User/{appKey}/{id} | 删除用户
*UserApi* | [**userEmailSignIn**](docs/Api/UserApi.md#useremailsignin) | **POST** /User/{appKey}/EmailSignIn | 邮箱登录
*UserApi* | [**userEmailSignUp**](docs/Api/UserApi.md#useremailsignup) | **POST** /User/{appKey}/EmailSignUp | 邮箱注册
*UserApi* | [**userExport**](docs/Api/UserApi.md#userexport) | **GET** /User/{appKey}/Export | 导出用户数据
*UserApi* | [**userFollowUser**](docs/Api/UserApi.md#userfollowuser) | **POST** /User/{appKey}/Follower/{userId} | 关注用户
*UserApi* | [**userFollowerPut**](docs/Api/UserApi.md#userfollowerput) | **PUT** /User/{appKey}/Follower/{id} | 更新粉丝
*UserApi* | [**userFollowers**](docs/Api/UserApi.md#userfollowers) | **GET** /User/{appKey}/Followers | 获取我的粉丝列表
*UserApi* | [**userFollowing**](docs/Api/UserApi.md#userfollowing) | **GET** /User/{appKey}/Following | 获取我的关注列表
*UserApi* | [**userFriendsNearBy**](docs/Api/UserApi.md#userfriendsnearby) | **GET** /User/{appKey}/Friends/NearBy | 附近的用户推荐
*UserApi* | [**userImport**](docs/Api/UserApi.md#userimport) | **POST** /User/{appKey}/Import | 导入用户数据
*UserApi* | [**userLocation**](docs/Api/UserApi.md#userlocation) | **GET** /User/{appKey}/Location/{id} | 获取位置详情
*UserApi* | [**userLocationDelete**](docs/Api/UserApi.md#userlocationdelete) | **DELETE** /User/{appKey}/Location/{id} | 删除位置
*UserApi* | [**userLocationPost**](docs/Api/UserApi.md#userlocationpost) | **POST** /User/{appKey}/Location | 添加位置
*UserApi* | [**userLocationPut**](docs/Api/UserApi.md#userlocationput) | **PUT** /User/{appKey}/Location/{id} | 更新位置
*UserApi* | [**userLocations**](docs/Api/UserApi.md#userlocations) | **GET** /User/{appKey}/Locations | 获取位置列表
*UserApi* | [**userMutualFollowers**](docs/Api/UserApi.md#usermutualfollowers) | **GET** /User/{appKey}/Friends/MutualFollowers | 有共同粉丝的用户推荐
*UserApi* | [**userMutualFollowings**](docs/Api/UserApi.md#usermutualfollowings) | **GET** /User/{appKey}/Friends/MutualFollowings | 有共同关注的用户推荐
*UserApi* | [**userOAuthAccountBind**](docs/Api/UserApi.md#useroauthaccountbind) | **POST** /User/{appKey}/OAuthAccountBind | 外部账号 绑定
*UserApi* | [**userOAuthAccountSignIn**](docs/Api/UserApi.md#useroauthaccountsignin) | **POST** /User/{appKey}/OAuthAccountSignIn | 外部账号 登录
*UserApi* | [**userOAuthAccounts**](docs/Api/UserApi.md#useroauthaccounts) | **GET** /User/{appKey}/OAuthAccounts | 外部账号 绑定列表
*UserApi* | [**userOAuthAccountsPutBind**](docs/Api/UserApi.md#useroauthaccountsputbind) | **PUT** /User/{appKey}/OAuthAccounts/{id} | 外部账号 更新绑定
*UserApi* | [**userOAuthAccountsUnBind**](docs/Api/UserApi.md#useroauthaccountsunbind) | **DELETE** /User/{appKey}/OAuthAccounts/{id} | 外部账号 删除绑定
*UserApi* | [**userPhoneSignIn**](docs/Api/UserApi.md#userphonesignin) | **POST** /User/{appKey}/PhoneSignIn | 手机登录
*UserApi* | [**userPhoneSignUp**](docs/Api/UserApi.md#userphonesignup) | **POST** /User/{appKey}/PhoneSignUp | 手机注册
*UserApi* | [**userProfile**](docs/Api/UserApi.md#userprofile) | **GET** /User/{appKey}/Profile | 获取个人资料
*UserApi* | [**userPut**](docs/Api/UserApi.md#userput) | **PUT** /User/{appKey}/{id} | 更新用户信息
*UserApi* | [**userQRCodePreSignIn**](docs/Api/UserApi.md#userqrcodepresignin) | **POST** /User/{appKey}/QRCodePreSignIn | 微信小程序 - 预登陆
*UserApi* | [**userQRCodeScan**](docs/Api/UserApi.md#userqrcodescan) | **POST** /User/{appKey}/QRCodeScan | 微信小程序 - 扫码
*UserApi* | [**userQRCodeSignIn**](docs/Api/UserApi.md#userqrcodesignin) | **POST** /User/{appKey}/QRCodeSignIn | 微信小程序 - 网页登录
*UserApi* | [**userQRCodeSignUp**](docs/Api/UserApi.md#userqrcodesignup) | **POST** /User/{appKey}/QRCodeSignUp | 微信小程序 - 注册
*UserApi* | [**userResetPwd**](docs/Api/UserApi.md#userresetpwd) | **POST** /User/{appKey}/ResetPwd | 重置密码
*UserApi* | [**userSendEmailCode**](docs/Api/UserApi.md#usersendemailcode) | **POST** /User/{appKey}/SendEmailCode | 发送邮箱验证码
*UserApi* | [**userSendSMSCode**](docs/Api/UserApi.md#usersendsmscode) | **POST** /User/{appKey}/SendSMSCode | 发送手机验证码
*UserApi* | [**userSignIn**](docs/Api/UserApi.md#usersignin) | **POST** /User/{appKey}/SignIn | 账号密码 登录
*UserApi* | [**userSignUp**](docs/Api/UserApi.md#usersignup) | **POST** /User/{appKey}/SignUp | 账号密码 注册
*UserApi* | [**userTwoFactorAuth**](docs/Api/UserApi.md#usertwofactorauth) | **GET** /User/{appKey}/TwoFactorAuth | 双因素验证
*UserApi* | [**userUnfollowUser**](docs/Api/UserApi.md#userunfollowuser) | **DELETE** /User/{appKey}/Follower/{userId} | 取消关注
*UserApi* | [**userUnionIDSignIn**](docs/Api/UserApi.md#userunionidsignin) | **POST** /User/{appKey}/UnionIDSignIn | UnionID登录
*UserApi* | [**userUnionIDSignUp**](docs/Api/UserApi.md#userunionidsignup) | **POST** /User/{appKey}/UnionIDSignUp | UnionID注册
*UserApi* | [**userUpdateProfile**](docs/Api/UserApi.md#userupdateprofile) | **PUT** /User/{appKey}/Profile | 更新个人资料
*UserApi* | [**users**](docs/Api/UserApi.md#users) | **GET** /User/{appKey} | 获取用户列表
*UserCurrencyApi* | [**userCurrencies**](docs/Api/UserCurrencyApi.md#usercurrencies) | **GET** /UserCurrency/{appKey}/{id} | 获取用户资产
*UserCurrencyApi* | [**userCurrencyConsume**](docs/Api/UserCurrencyApi.md#usercurrencyconsume) | **POST** /UserCurrency/{appKey}/CurrencyConsume | 消费虚拟币
*UserCurrencyApi* | [**userCurrencyExchange**](docs/Api/UserCurrencyApi.md#usercurrencyexchange) | **POST** /UserCurrency/{appKey}/CurrencyExchange | 兑换虚拟币
*UserCurrencyApi* | [**userCurrencyRecharge**](docs/Api/UserCurrencyApi.md#usercurrencyrecharge) | **POST** /UserCurrency/{appKey}/CurrencyRecharge | 充值虚拟币
*UserCurrencyApi* | [**userCurrencyTransactions**](docs/Api/UserCurrencyApi.md#usercurrencytransactions) | **GET** /UserCurrency/{appKey}/CurrencyTransactions | 虚拟币交易记录
*UserSettingApi* | [**userSetting**](docs/Api/UserSettingApi.md#usersetting) | **GET** /UserSetting/{appKey}/{id} | 获取用户配置项详情
*UserSettingApi* | [**userSettingDelete**](docs/Api/UserSettingApi.md#usersettingdelete) | **DELETE** /UserSetting/{appKey}/{id} | 删除用户配置项
*UserSettingApi* | [**userSettingPost**](docs/Api/UserSettingApi.md#usersettingpost) | **POST** /UserSetting/{appKey} | 添加用户配置项
*UserSettingApi* | [**userSettingPut**](docs/Api/UserSettingApi.md#usersettingput) | **PUT** /UserSetting/{appKey}/{id} | 更新用户配置项
*UserSettingApi* | [**userSettings**](docs/Api/UserSettingApi.md#usersettings) | **GET** /UserSetting/{appKey} | 获取用户配置列表
*WechatApi* | [**wechatDecrypt**](docs/Api/WechatApi.md#wechatdecrypt) | **GET** /Wechat/{appKey}/Decrypt | 小程序-解密数据
*WechatApi* | [**wechatGenerateScheme**](docs/Api/WechatApi.md#wechatgeneratescheme) | **POST** /Wechat/{appKey}/GenerateScheme | 小程序-生成scheme码(该接口用于获取小程序 scheme 码，适用于短信、邮件、外部网页、微信内等拉起小程序的业务场景)
*WechatApi* | [**wechatJSCode2Session**](docs/Api/WechatApi.md#wechatjscode2session) | **GET** /Wechat/{appKey}/JSCode2Session | 小程序-登录凭证校验
*WechatApi* | [**wechatJSConfig**](docs/Api/WechatApi.md#wechatjsconfig) | **GET** /Wechat/{appKey}/JSConfig | 公众号H5-JS SDK Config
*WechatApi* | [**wechatSubscribeMSG**](docs/Api/WechatApi.md#wechatsubscribemsg) | **POST** /Wechat/{appKey}/SubscribeMSG | 公众号H5-发送一次性订阅消息
*WechatApi* | [**wechatSubscribeSend**](docs/Api/WechatApi.md#wechatsubscribesend) | **POST** /Wechat/{appKey}/SubscribeSend | 小程序-发送订阅消息
*WechatApi* | [**wechatUrlLinkGenerate**](docs/Api/WechatApi.md#wechaturllinkgenerate) | **POST** /Wechat/{appKey}/UrlLinkGenerate | 小程序-生成网页跳转地址(获取小程序 URL Link，适用于短信、邮件、网页、微信内等拉起小程序的业务场景)
*WechatApi* | [**wechatUserInfo**](docs/Api/WechatApi.md#wechatuserinfo) | **GET** /Wechat/{appKey}/UserInfo | 公众号H5-获取用户UnionID
*WechatApi* | [**wechatWXACodeGet**](docs/Api/WechatApi.md#wechatwxacodeget) | **POST** /Wechat/{appKey}/WXACodeGet | 小程序-获取小程序码
*WechatApi* | [**wechatWXACodeGetUnlimited**](docs/Api/WechatApi.md#wechatwxacodegetunlimited) | **POST** /Wechat/{appKey}/WXACodeGetUnlimited | 小程序-获取小程序码(无限制)

## 数据结构

- [AccessTokenListResult](docs/Model/AccessTokenListResult.md)
- [AccessTokenListResultApiResponse](docs/Model/AccessTokenListResultApiResponse.md)
- [AccessTokenPostRequest](docs/Model/AccessTokenPostRequest.md)
- [AccessTokenPutRequest](docs/Model/AccessTokenPutRequest.md)
- [AlipayCreateOrderPagePayRequest](docs/Model/AlipayCreateOrderPagePayRequest.md)
- [AlipayCreateOrderRequest](docs/Model/AlipayCreateOrderRequest.md)
- [AlipayCreateOrderWapPayRequest](docs/Model/AlipayCreateOrderWapPayRequest.md)
- [AlipayTradeQueryResponse](docs/Model/AlipayTradeQueryResponse.md)
- [AlipayTradeQueryResponseApiResponse](docs/Model/AlipayTradeQueryResponseApiResponse.md)
- [AlipayTradeRefundResponse](docs/Model/AlipayTradeRefundResponse.md)
- [AlipayTradeRefundResponseApiResponse](docs/Model/AlipayTradeRefundResponseApiResponse.md)
- [App](docs/Model/App.md)
- [AppApiResponse](docs/Model/AppApiResponse.md)
- [AppCheckVersionResult](docs/Model/AppCheckVersionResult.md)
- [AppCheckVersionResultApiResponse](docs/Model/AppCheckVersionResultApiResponse.md)
- [AppInfoItem](docs/Model/AppInfoItem.md)
- [AppInfoResult](docs/Model/AppInfoResult.md)
- [AppInfoResultApiResponse](docs/Model/AppInfoResultApiResponse.md)
- [AppListResult](docs/Model/AppListResult.md)
- [AppListResultApiResponse](docs/Model/AppListResultApiResponse.md)
- [AppPostResult](docs/Model/AppPostResult.md)
- [AppPostResultApiResponse](docs/Model/AppPostResultApiResponse.md)
- [AppProperty](docs/Model/AppProperty.md)
- [AppSetting](docs/Model/AppSetting.md)
- [AppSettingApiResponse](docs/Model/AppSettingApiResponse.md)
- [AppSettingGroupPostResult](docs/Model/AppSettingGroupPostResult.md)
- [AppSettingGroupPostResultApiResponse](docs/Model/AppSettingGroupPostResultApiResponse.md)
- [AppSettingItemPostResult](docs/Model/AppSettingItemPostResult.md)
- [AppSettingItemPostResultApiResponse](docs/Model/AppSettingItemPostResultApiResponse.md)
- [AppSettingListApiResponse](docs/Model/AppSettingListApiResponse.md)
- [AppSettingProviderPostResult](docs/Model/AppSettingProviderPostResult.md)
- [AppSettingProviderPostResultApiResponse](docs/Model/AppSettingProviderPostResultApiResponse.md)
- [AppSettingSettingPostResult](docs/Model/AppSettingSettingPostResult.md)
- [AppSettingSettingPostResultApiResponse](docs/Model/AppSettingSettingPostResultApiResponse.md)
- [AppUserConsentModel](docs/Model/AppUserConsentModel.md)
- [AppUserConsentModelListApiResponse](docs/Model/AppUserConsentModelListApiResponse.md)
- [AppUserListResponse](docs/Model/AppUserListResponse.md)
- [AppUserResetPwdRequest](docs/Model/AppUserResetPwdRequest.md)
- [AuthorizePolicy](docs/Model/AuthorizePolicy.md)
- [AuthorizePolicyApiResponse](docs/Model/AuthorizePolicyApiResponse.md)
- [AuthorizePolicyListApiResponse](docs/Model/AuthorizePolicyListApiResponse.md)
- [AuthorizeResult](docs/Model/AuthorizeResult.md)
- [AuthorizeResultApiResponse](docs/Model/AuthorizeResultApiResponse.md)
- [BkAgentRespInfo](docs/Model/BkAgentRespInfo.md)
- [BooleanApiResponse](docs/Model/BooleanApiResponse.md)
- [ChargeInfo](docs/Model/ChargeInfo.md)
- [CommonFriendModel](docs/Model/CommonFriendModel.md)
- [ContributeDetail](docs/Model/ContributeDetail.md)
- [CreateOrderRequest](docs/Model/CreateOrderRequest.md)
- [CreateOrderResult](docs/Model/CreateOrderResult.md)
- [CreateOrderResultApiResponse](docs/Model/CreateOrderResultApiResponse.md)
- [CreatePostResult](docs/Model/CreatePostResult.md)
- [CreatePostResultApiResponse](docs/Model/CreatePostResultApiResponse.md)
- [Currency](docs/Model/Currency.md)
- [CurrencyApiResponse](docs/Model/CurrencyApiResponse.md)
- [CurrencyConsumeRequest](docs/Model/CurrencyConsumeRequest.md)
- [CurrencyExchangeRate](docs/Model/CurrencyExchangeRate.md)
- [CurrencyExchangeRateApiResponse](docs/Model/CurrencyExchangeRateApiResponse.md)
- [CurrencyListApiResponse](docs/Model/CurrencyListApiResponse.md)
- [CurrencyTransaction](docs/Model/CurrencyTransaction.md)
- [CurrencyTransactionListApiResponse](docs/Model/CurrencyTransactionListApiResponse.md)
- [DirectoryItem](docs/Model/DirectoryItem.md)
- [EmailSignInRequest](docs/Model/EmailSignInRequest.md)
- [EmailSignUpRequest](docs/Model/EmailSignUpRequest.md)
- [EnterprisePayInfo](docs/Model/EnterprisePayInfo.md)
- [ExchangeCurrencyRequest](docs/Model/ExchangeCurrencyRequest.md)
- [ExchangeRatePutRequest](docs/Model/ExchangeRatePutRequest.md)
- [ExecuteFunctionRequest](docs/Model/ExecuteFunctionRequest.md)
- [FileItem](docs/Model/FileItem.md)
- [FileListResult](docs/Model/FileListResult.md)
- [FileListResultApiResponse](docs/Model/FileListResultApiResponse.md)
- [FollowerModel](docs/Model/FollowerModel.md)
- [FollowerPutModel](docs/Model/FollowerPutModel.md)
- [FulfillmentDetail](docs/Model/FulfillmentDetail.md)
- [GeoLocationModel](docs/Model/GeoLocationModel.md)
- [GeoLocationModelApiResponse](docs/Model/GeoLocationModelApiResponse.md)
- [GeoLocationResponseModel](docs/Model/GeoLocationResponseModel.md)
- [GoodsDetail](docs/Model/GoodsDetail.md)
- [GrantRequest](docs/Model/GrantRequest.md)
- [GrantResult](docs/Model/GrantResult.md)
- [GrantResultApiResponse](docs/Model/GrantResultApiResponse.md)
- [HbFqPayInfo](docs/Model/HbFqPayInfo.md)
- [Int64ApiResponse](docs/Model/Int64ApiResponse.md)
- [IntactChargeInfo](docs/Model/IntactChargeInfo.md)
- [ListResponseItem](docs/Model/ListResponseItem.md)
- [ListResponseItemListApiResponse](docs/Model/ListResponseItemListApiResponse.md)
- [OAuthAccountBindRequest](docs/Model/OAuthAccountBindRequest.md)
- [OAuthAccountPutBindRequest](docs/Model/OAuthAccountPutBindRequest.md)
- [OAuthAccountSignInRequest](docs/Model/OAuthAccountSignInRequest.md)
- [ObjectApiResponse](docs/Model/ObjectApiResponse.md)
- [ObjectListApiResponse](docs/Model/ObjectListApiResponse.md)
- [Order](docs/Model/Order.md)
- [OrderApiResponse](docs/Model/OrderApiResponse.md)
- [OrderListResult](docs/Model/OrderListResult.md)
- [OrderListResultApiResponse](docs/Model/OrderListResultApiResponse.md)
- [PaymentInfoWithId](docs/Model/PaymentInfoWithId.md)
- [PhoneSignInRequest](docs/Model/PhoneSignInRequest.md)
- [PhoneSignUpRequest](docs/Model/PhoneSignUpRequest.md)
- [PostIndexRequest](docs/Model/PostIndexRequest.md)
- [PostResult](docs/Model/PostResult.md)
- [PostResultApiResponse](docs/Model/PostResultApiResponse.md)
- [PresetPayToolInfo](docs/Model/PresetPayToolInfo.md)
- [ProfileResult](docs/Model/ProfileResult.md)
- [ProfileResultApiResponse](docs/Model/ProfileResultApiResponse.md)
- [Project](docs/Model/Project.md)
- [ProjectApiResponse](docs/Model/ProjectApiResponse.md)
- [ProjectListResult](docs/Model/ProjectListResult.md)
- [ProjectListResultApiResponse](docs/Model/ProjectListResultApiResponse.md)
- [QRCodePreSignInRequest](docs/Model/QRCodePreSignInRequest.md)
- [QRCodeScanRequest](docs/Model/QRCodeScanRequest.md)
- [QRCodeSignInRequest](docs/Model/QRCodeSignInRequest.md)
- [QRCodeSignUpRequest](docs/Model/QRCodeSignUpRequest.md)
- [RechargePointRequest](docs/Model/RechargePointRequest.md)
- [RecommendFriend](docs/Model/RecommendFriend.md)
- [RefundChargeInfo](docs/Model/RefundChargeInfo.md)
- [RefundSubFee](docs/Model/RefundSubFee.md)
- [ReturnPageNotifyRequest](docs/Model/ReturnPageNotifyRequest.md)
- [SendEmailCodeRequest](docs/Model/SendEmailCodeRequest.md)
- [SendSMSCodeRequest](docs/Model/SendSMSCodeRequest.md)
- [ServiceGroup](docs/Model/ServiceGroup.md)
- [ServiceGroupApiResponse](docs/Model/ServiceGroupApiResponse.md)
- [ServiceGroupListApiResponse](docs/Model/ServiceGroupListApiResponse.md)
- [ServiceItem](docs/Model/ServiceItem.md)
- [ServiceItemApiResponse](docs/Model/ServiceItemApiResponse.md)
- [ServiceItemListApiResponse](docs/Model/ServiceItemListApiResponse.md)
- [ServiceProvider](docs/Model/ServiceProvider.md)
- [ServiceProviderApiResponse](docs/Model/ServiceProviderApiResponse.md)
- [ServiceProviderListApiResponse](docs/Model/ServiceProviderListApiResponse.md)
- [ServiceSettingGroupPostResult](docs/Model/ServiceSettingGroupPostResult.md)
- [ServiceSettingGroupPostResultApiResponse](docs/Model/ServiceSettingGroupPostResultApiResponse.md)
- [ServiceSettingItemPostResult](docs/Model/ServiceSettingItemPostResult.md)
- [ServiceSettingItemPostResultApiResponse](docs/Model/ServiceSettingItemPostResultApiResponse.md)
- [ServiceSettingProviderPostResult](docs/Model/ServiceSettingProviderPostResult.md)
- [ServiceSettingProviderPostResultApiResponse](docs/Model/ServiceSettingProviderPostResultApiResponse.md)
- [ServiceSettingSettingPostResult](docs/Model/ServiceSettingSettingPostResult.md)
- [ServiceSettingSettingPostResultApiResponse](docs/Model/ServiceSettingSettingPostResultApiResponse.md)
- [Settings](docs/Model/Settings.md)
- [SettingsApiResponse](docs/Model/SettingsApiResponse.md)
- [SettingsListApiResponse](docs/Model/SettingsListApiResponse.md)
- [SetupCode](docs/Model/SetupCode.md)
- [SetupCodeApiResponse](docs/Model/SetupCodeApiResponse.md)
- [SignInRequest](docs/Model/SignInRequest.md)
- [SignUpRequest](docs/Model/SignUpRequest.md)
- [StorageListResult](docs/Model/StorageListResult.md)
- [StorageListResultApiResponse](docs/Model/StorageListResultApiResponse.md)
- [StringApiResponse](docs/Model/StringApiResponse.md)
- [StringListApiResponse](docs/Model/StringListApiResponse.md)
- [SubFee](docs/Model/SubFee.md)
- [SystemDirectoryItem](docs/Model/SystemDirectoryItem.md)
- [SystemFileItem](docs/Model/SystemFileItem.md)
- [SystemFileListResult](docs/Model/SystemFileListResult.md)
- [SystemFileListResultApiResponse](docs/Model/SystemFileListResultApiResponse.md)
- [TapPayInfo](docs/Model/TapPayInfo.md)
- [Team](docs/Model/Team.md)
- [TokenModel](docs/Model/TokenModel.md)
- [TokenModelApiResponse](docs/Model/TokenModelApiResponse.md)
- [TradeFundBill](docs/Model/TradeFundBill.md)
- [TradeSettleDetail](docs/Model/TradeSettleDetail.md)
- [TradeSettleInfo](docs/Model/TradeSettleInfo.md)
- [UnionIDSignInRequest](docs/Model/UnionIDSignInRequest.md)
- [UnionIDSignUpRequest](docs/Model/UnionIDSignUpRequest.md)
- [UpdateProfileRequest](docs/Model/UpdateProfileRequest.md)
- [User](docs/Model/User.md)
- [UserAccessToken](docs/Model/UserAccessToken.md)
- [UserApiResponse](docs/Model/UserApiResponse.md)
- [UserCommonInterestsResult](docs/Model/UserCommonInterestsResult.md)
- [UserCommonInterestsResultApiResponse](docs/Model/UserCommonInterestsResultApiResponse.md)
- [UserCurrency](docs/Model/UserCurrency.md)
- [UserCurrencyCurrencyTransResult](docs/Model/UserCurrencyCurrencyTransResult.md)
- [UserCurrencyCurrencyTransResultApiResponse](docs/Model/UserCurrencyCurrencyTransResultApiResponse.md)
- [UserCurrencyListApiResponse](docs/Model/UserCurrencyListApiResponse.md)
- [UserFollowersResult](docs/Model/UserFollowersResult.md)
- [UserFollowersResultApiResponse](docs/Model/UserFollowersResultApiResponse.md)
- [UserFollowingResult](docs/Model/UserFollowingResult.md)
- [UserFollowingResultApiResponse](docs/Model/UserFollowingResultApiResponse.md)
- [UserFriendsNearByResult](docs/Model/UserFriendsNearByResult.md)
- [UserFriendsNearByResultApiResponse](docs/Model/UserFriendsNearByResultApiResponse.md)
- [UserListResult](docs/Model/UserListResult.md)
- [UserListResultApiResponse](docs/Model/UserListResultApiResponse.md)
- [UserLocationPostResult](docs/Model/UserLocationPostResult.md)
- [UserLocationPostResultApiResponse](docs/Model/UserLocationPostResultApiResponse.md)
- [UserLocationsResult](docs/Model/UserLocationsResult.md)
- [UserLocationsResultApiResponse](docs/Model/UserLocationsResultApiResponse.md)
- [UserLogins](docs/Model/UserLogins.md)
- [UserLoginsListApiResponse](docs/Model/UserLoginsListApiResponse.md)
- [UserMutualFollowersResult](docs/Model/UserMutualFollowersResult.md)
- [UserMutualFollowersResultApiResponse](docs/Model/UserMutualFollowersResultApiResponse.md)
- [UserMutualFollowingsResult](docs/Model/UserMutualFollowingsResult.md)
- [UserMutualFollowingsResultApiResponse](docs/Model/UserMutualFollowingsResultApiResponse.md)
- [UserProfileResult](docs/Model/UserProfileResult.md)
- [UserProfileResultApiResponse](docs/Model/UserProfileResultApiResponse.md)
- [UserQRCodeScanResult](docs/Model/UserQRCodeScanResult.md)
- [UserQRCodeScanResultApiResponse](docs/Model/UserQRCodeScanResultApiResponse.md)
- [UserSetting](docs/Model/UserSetting.md)
- [UserSettingApiResponse](docs/Model/UserSettingApiResponse.md)
- [UserSettingListApiResponse](docs/Model/UserSettingListApiResponse.md)
- [UserSettingPostResult](docs/Model/UserSettingPostResult.md)
- [UserSettingPostResultApiResponse](docs/Model/UserSettingPostResultApiResponse.md)
- [VoucherDetail](docs/Model/VoucherDetail.md)
- [WechatJSConfigResult](docs/Model/WechatJSConfigResult.md)
- [WechatJSConfigResultApiResponse](docs/Model/WechatJSConfigResultApiResponse.md)