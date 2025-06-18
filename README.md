# ZSGF-Client PHP SDK

![Packagist Version](https://img.shields.io/packagist/v/zsgf/client)

一个功能强大的PHP SDK，为您的应用提供用户管理、支付、存储、微信集成等完整的后端服务解决方案。

## 📋 目录

- [快速开始](#-快速开始)
- [安装配置](#-安装配置)
- [核心功能](#-核心功能)
- [实用示例](#-实用示例)
- [错误处理](#-错误处理)
- [API参考](#-api参考)
- [常见问题](#-常见问题)

## 🚀 快速开始

### 5分钟快速上手

**第一步：安装SDK**
```bash
composer require zsgf/client
```

**第二步：初始化配置**
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// 配置访问令牌
$config = ZSGF\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');
```

**第三步：调用API**
```php
// 创建用户API实例
$userApi = new ZSGF\Client\Api\UserApi(new GuzzleHttp\Client(), $config);

try {
    // 获取用户资料
    $profile = $userApi->userProfile('your_app_key');
    echo "用户昵称: " . $profile->getData()->getNickname();
} catch (Exception $e) {
    echo "错误: " . $e->getMessage();
}
```

## 📦 安装配置

### 环境要求
- **PHP版本**: 7.4 及以上（推荐 8.0+）
- **依赖管理**: Composer

### Composer安装

```bash
# 安装最新版本
composer require zsgf/client

# 安装指定版本
composer require zsgf/client:^1.0
```

### 初始化配置

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// 基础配置
$config = ZSGF\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN')  // 必需：访问令牌
    ->setHost('https://api.zsgf.com');     // 可选：自定义API地址

// 自定义HTTP客户端（可选）
$httpClient = new GuzzleHttp\Client([
    'timeout' => 30,           // 超时时间
    'verify' => true,          // SSL验证
    'headers' => [
        'User-Agent' => 'MyApp/1.0'
    ]
]);

// 创建API实例
$userApi = new ZSGF\Client\Api\UserApi($httpClient, $config);
```

## 🎯 核心功能

| 功能模块 | API类 | 主要用途 |
|---------|-------|----------|
| 👤 **用户管理** | `UserApi` | 注册、登录、资料管理 |
| 💰 **支付服务** | `AlipayApi` | 支付宝支付集成 |
| 💬 **微信集成** | `WechatApi` | 小程序、公众号功能 |
| 📦 **数据存储** | `StorageApi` | 云端数据库操作 |
| 📁 **文件管理** | `FileApi` | 文件上传下载管理 |
| 🔐 **访问控制** | `AccessTokenApi` | 令牌权限管理 |
| 📱 **移动端** | `OrderApi` | 订单系统管理 |

## 💡 实用示例

### 用户注册登录

```php
$userApi = new ZSGF\Client\Api\UserApi(new GuzzleHttp\Client(), $config);
$appKey = 'your_app_key';

// 用户注册
$signUpRequest = new \ZSGF\Client\Model\SignUpRequest([
    'username' => 'testuser',
    'password' => 'password123',
    'email' => 'user@example.com',
    'nickname' => '测试用户'
]);

try {
    $result = $userApi->userSignUp($appKey, $signUpRequest);
    echo "✅ 注册成功，用户ID: " . $result->getData()->getUserId();
} catch (Exception $e) {
    echo "❌ 注册失败: " . $e->getMessage();
}

// 用户登录
$signInRequest = new \ZSGF\Client\Model\SignInRequest([
    'username' => 'testuser',
    'password' => 'password123'
]);

try {
    $result = $userApi->userSignIn($appKey, $signInRequest);
    $token = $result->getData()->getAccessToken();
    echo "✅ 登录成功，令牌: " . substr($token, 0, 20) . "...";
} catch (Exception $e) {
    echo "❌ 登录失败: " . $e->getMessage();
}
```

### 支付宝支付

```php
$alipayApi = new ZSGF\Client\Api\AlipayApi(new GuzzleHttp\Client(), $config);

// 创建扫码支付订单
$orderRequest = new \ZSGF\Client\Model\AlipayCreateOrderRequest([
    'out_trade_no' => 'ORDER_' . time(),    // 商户订单号
    'total_amount' => '99.99',              // 支付金额
    'subject' => 'VIP会员服务',              // 订单标题
    'body' => '购买VIP会员一年服务',          // 订单描述
]);

try {
    $result = $alipayApi->alipayCreateOrder($appKey, $orderRequest);
    echo "✅ 订单创建成功";
    echo "💳 支付二维码: " . $result->getData()->getQrCode();
    echo "📄 订单号: " . $result->getData()->getOutTradeNo();
} catch (Exception $e) {
    echo "❌ 创建订单失败: " . $e->getMessage();
}

// 查询订单状态
try {
    $orderDetail = $alipayApi->alipayOrderDetail($appKey, [
        'out_trade_no' => 'ORDER_123456'
    ]);
    
    $status = $orderDetail->getData()->getTradeStatus();
    echo "📊 订单状态: " . $status;
    
    if ($status === 'TRADE_SUCCESS') {
        echo "✅ 支付成功";
    }
} catch (Exception $e) {
    echo "❌ 查询失败: " . $e->getMessage();
}
```

### 微信小程序集成

```php
$wechatApi = new ZSGF\Client\Api\WechatApi(new GuzzleHttp\Client(), $config);

// 小程序登录验证
try {
    $result = $wechatApi->wechatJSCode2Session($appKey, [
        'js_code' => 'wx_js_code_from_frontend'
    ]);
    
    $openid = $result->getData()->getOpenid();
    $sessionKey = $result->getData()->getSessionKey();
    
    echo "✅ 验证成功";
    echo "🔑 OpenID: " . $openid;
    
    // 保存session_key供后续解密使用
    // $_SESSION['session_key'] = $sessionKey;
    
} catch (Exception $e) {
    echo "❌ 验证失败: " . $e->getMessage();
}

// 发送订阅消息
$messageData = [
    'touser' => 'user_openid',
    'template_id' => 'your_template_id',
    'page' => 'pages/order/detail?id=123',
    'data' => [
        'thing1' => ['value' => '您的订单已发货'],
        'time2' => ['value' => date('Y年m月d日 H:i')],
        'thing3' => ['value' => '顺丰快递'],
    ]
];

try {
    $result = $wechatApi->wechatSubscribeSend($appKey, $messageData);
    echo "✅ 订阅消息发送成功";
} catch (Exception $e) {
    echo "❌ 发送失败: " . $e->getMessage();
}
```

### 数据存储操作

```php
$storageApi = new ZSGF\Client\Api\StorageApi(new GuzzleHttp\Client(), $config);

// 添加用户数据
$userData = [
    'name' => '张三',
    'age' => 28,
    'city' => '北京',
    'tags' => ['开发者', 'PHP'],
    'created_at' => date('Y-m-d H:i:s')
];

try {
    $result = $storageApi->storagePost($appKey, 'users', $userData);
    echo "✅ 数据添加成功，ID: " . $result->getData()->getId();
} catch (Exception $e) {
    echo "❌ 添加失败: " . $e->getMessage();
}

// 查询数据列表
try {
    $queryParams = [
        'page' => 1,
        'limit' => 10,
        'where' => json_encode(['city' => '北京']),  // 查询条件
        'order' => 'created_at desc'                // 排序
    ];
    
    $results = $storageApi->storageList($appKey, 'users', $queryParams);
    
    echo "📊 查询结果总数: " . $results->getData()->getTotal();
    
    foreach ($results->getData()->getList() as $user) {
        echo "👤 " . $user['name'] . ", " . $user['age'] . "岁, " . $user['city'];
    }
} catch (Exception $e) {
    echo "❌ 查询失败: " . $e->getMessage();
}

// 更新数据
try {
    $updateData = ['age' => 29, 'updated_at' => date('Y-m-d H:i:s')];
    $result = $storageApi->storagePut($appKey, 'users', '123', $updateData);
    echo "✅ 数据更新成功";
} catch (Exception $e) {
    echo "❌ 更新失败: " . $e->getMessage();
}
```

### 文件上传管理

```php
$fileApi = new ZSGF\Client\Api\FileApi(new GuzzleHttp\Client(), $config);

// 上传图片文件
try {
    $filePath = '/path/to/your/image.jpg';
    $file = new \CURLFile($filePath, 'image/jpeg', 'avatar.jpg');
    
    $uploadData = [
        'file' => $file,
        'folder' => '/uploads/avatars',  // 上传目录
        'public' => true                 // 是否公开访问
    ];
    
    $result = $fileApi->fileUpload($appKey, $uploadData);
    
    echo "✅ 文件上传成功";
    echo "🔗 文件URL: " . $result->getData()->getUrl();
    echo "📄 文件ID: " . $result->getData()->getFileId();
    echo "📏 文件大小: " . $result->getData()->getSize() . " bytes";
    
} catch (Exception $e) {
    echo "❌ 上传失败: " . $e->getMessage();
}

// 获取文件列表
try {
    $listParams = [
        'folder' => '/uploads',
        'type' => 'image',      // 文件类型过滤
        'page' => 1,
        'limit' => 20
    ];
    
    $files = $fileApi->files($appKey, $listParams);
    
    echo "📁 文件列表:";
    foreach ($files->getData()->getFiles() as $file) {
        echo "📄 " . $file->getName() . " (" . $file->getSize() . " bytes)";
    }
} catch (Exception $e) {
    echo "❌ 获取文件列表失败: " . $e->getMessage();
}
```

## 🛠️ 错误处理

### 统一错误处理封装

```php
class ZSGFHelper {
    private $config;
    
    public function __construct($accessToken) {
        $this->config = ZSGF\Client\Configuration::getDefaultConfiguration()
            ->setAccessToken($accessToken);
    }
    
    /**
     * 安全执行API调用
     */
    public function safeApiCall(callable $apiCall, $context = '') {
        try {
            return [
                'success' => true,
                'data' => $apiCall(),
                'error' => null
            ];
        } catch (\ZSGF\Client\ApiException $e) {
            $error = $this->handleApiException($e, $context);
            return [
                'success' => false,
                'data' => null,
                'error' => $error
            ];
        } catch (Exception $e) {
            $error = [
                'type' => 'system_error',
                'message' => $e->getMessage(),
                'context' => $context
            ];
            error_log("ZSGF System Error: " . json_encode($error));
            return [
                'success' => false,
                'data' => null,
                'error' => $error
            ];
        }
    }
    
    private function handleApiException($e, $context) {
        $error = [
            'type' => 'api_error',
            'code' => $e->getCode(),
            'message' => $e->getMessage(),
            'context' => $context
        ];
        
        // 根据HTTP状态码提供友好的错误信息
        switch ($e->getCode()) {
            case 400:
                $error['friendly_message'] = '请求参数错误，请检查输入数据';
                break;
            case 401:
                $error['friendly_message'] = '访问令牌无效或已过期';
                break;
            case 403:
                $error['friendly_message'] = '权限不足，无法访问此资源';
                break;
            case 404:
                $error['friendly_message'] = '请求的资源不存在';
                break;
            case 429:
                $error['friendly_message'] = '请求过于频繁，请稍后重试';
                break;
            case 500:
                $error['friendly_message'] = '服务器内部错误，请稍后重试';
                break;
            default:
                $error['friendly_message'] = '请求失败: ' . $e->getMessage();
        }
        
        // 记录API错误日志
        error_log("ZSGF API Error: " . json_encode($error));
        
        return $error;
    }
}

// 使用示例
$helper = new ZSGFHelper('YOUR_ACCESS_TOKEN');
$userApi = new ZSGF\Client\Api\UserApi(new GuzzleHttp\Client(), $helper->config);

$result = $helper->safeApiCall(function() use ($userApi, $appKey) {
    return $userApi->userProfile($appKey);
}, '获取用户资料');

if ($result['success']) {
    echo "✅ 获取成功: " . $result['data']->getData()->getNickname();
} else {
    echo "❌ " . $result['error']['friendly_message'];
}
```

### 重试机制

```php
function apiCallWithRetry($apiCall, $maxRetries = 3, $delayMs = 1000) {
    $attempt = 0;
    
    while ($attempt < $maxRetries) {
        try {
            return $apiCall();
        } catch (\ZSGF\Client\ApiException $e) {
            $attempt++;
            
            // 某些错误不需要重试
            if (in_array($e->getCode(), [400, 401, 403, 404])) {
                throw $e;
            }
            
            if ($attempt >= $maxRetries) {
                throw $e;
            }
            
            echo "⚠️ 第{$attempt}次重试中... (延迟{$delayMs}ms)";
            usleep($delayMs * 1000); // 延迟重试
            $delayMs *= 2; // 指数退避
        }
    }
}

// 使用示例
try {
    $result = apiCallWithRetry(function() use ($userApi, $appKey) {
        return $userApi->userProfile($appKey);
    });
    echo "✅ 请求成功";
} catch (Exception $e) {
    echo "❌ 重试失败: " . $e->getMessage();
}
```

## 📚 API参考

### 🔗 快速导航

<details>
<summary><strong>👤 用户管理 (UserApi)</strong></summary>

| 方法 | HTTP | 路径 | 说明 |
|------|------|------|------|
| `userSignUp()` | POST | `/User/{appKey}/SignUp` | 用户注册 |
| `userSignIn()` | POST | `/User/{appKey}/SignIn` | 密码登录 |
| `userEmailSignIn()` | POST | `/User/{appKey}/EmailSignIn` | 邮箱登录 |
| `userPhoneSignIn()` | POST | `/User/{appKey}/PhoneSignIn` | 手机登录 |
| `userProfile()` | GET | `/User/{appKey}/Profile` | 获取个人资料 |
| `userUpdateProfile()` | PUT | `/User/{appKey}/Profile` | 更新个人资料 |
| `userResetPwd()` | POST | `/User/{appKey}/ResetPwd` | 重置密码 |
| `userSendEmailCode()` | POST | `/User/{appKey}/SendEmailCode` | 发送邮箱验证码 |
| `userSendSMSCode()` | POST | `/User/{appKey}/SendSMSCode` | 发送手机验证码 |

</details>

<details>
<summary><strong>💰 支付服务 (AlipayApi)</strong></summary>

| 方法 | HTTP | 路径 | 说明 |
|------|------|------|------|
| `alipayCreateOrder()` | POST | `/Alipay/{appKey}/CreateOrder` | 创建当面付订单 |
| `alipayCreateOrderPagePay()` | POST | `/Alipay/{appKey}/CreateOrderPagePay` | 创建PC支付订单 |
| `alipayCreateOrderWapPay()` | POST | `/Alipay/{appKey}/CreateOrderWapPay` | 创建WAP支付订单 |
| `alipayOrderDetail()` | GET | `/Alipay/{appKey}/OrderDetail` | 获取订单详情 |
| `alipayOrderRefund()` | POST | `/Alipay/{appKey}/OrderRefund` | 发起订单退款 |

</details>

<details>
<summary><strong>💬 微信服务 (WechatApi)</strong></summary>

| 方法 | HTTP | 路径 | 说明 |
|------|------|------|------|
| `wechatJSCode2Session()` | GET | `/Wechat/{appKey}/JSCode2Session` | 小程序登录验证 |
| `wechatUserInfo()` | GET | `/Wechat/{appKey}/UserInfo` | 获取公众号用户信息 |
| `wechatSubscribeSend()` | POST | `/Wechat/{appKey}/SubscribeSend` | 发送小程序订阅消息 |
| `wechatDecrypt()` | GET | `/Wechat/{appKey}/Decrypt` | 解密小程序用户数据 |
| `wechatWXACodeGet()` | POST | `/Wechat/{appKey}/WXACodeGet` | 获取小程序码 |

</details>

<details>
<summary><strong>📦 数据存储 (StorageApi)</strong></summary>

| 方法 | HTTP | 路径 | 说明 |
|------|------|------|------|
| `storagePost()` | POST | `/Storage/{appKey}/{table}` | 添加数据 |
| `storageList()` | GET | `/Storage/{appKey}/{table}` | 查询数据列表 |
| `storageDetail()` | GET | `/Storage/{appKey}/{table}/{id}` | 获取数据详情 |
| `storagePut()` | PUT | `/Storage/{appKey}/{table}/{id}` | 更新数据 |
| `storageDelete()` | DELETE | `/Storage/{appKey}/{table}/{id}` | 删除数据 |
| `storageAggregate()` | GET | `/Storage/{appKey}/{table}/Aggregate` | 聚合查询 |

</details>

<details>
<summary><strong>📁 文件管理 (FileApi)</strong></summary>

| 方法 | HTTP | 路径 | 说明 |
|------|------|------|------|
| `fileUpload()` | POST | `/File/{appKey}/Upload` | 上传文件 |
| `files()` | GET | `/File/{appKey}` | 获取文件列表 |
| `fileCreateFolder()` | POST | `/File/{appKey}/CreateFolder` | 创建文件夹 |
| `fileRename()` | POST | `/File/{appKey}/Rename` | 重命名文件 |
| `fileDelete()` | DELETE | `/File/{appKey}` | 删除文件/文件夹 |

</details>

### 🏷️ 其他API服务

- **🔐 AccessTokenApi**: 访问令牌管理
- **📱 AppApi**: 应用信息查询  
- **📋 OrderApi**: 订单管理系统
- **💎 UserCurrencyApi**: 虚拟币/积分系统
- **👥 UserFriendsApi**: 社交关系管理
- **📍 UserLocationApi**: 位置服务
- **🔗 ExternalAccountApi**: 第三方账号绑定
- **🛡️ OAuthApi**: OAuth认证授权
- **📞 DingTalkApi**: 钉钉企业集成

## ❓ 常见问题

<details>
<summary><strong>❓ 如何获取访问令牌？</strong></summary>

访问令牌需要通过以下方式获取：

1. **管理后台**: 登录ZSGF管理后台 → 应用管理 → 创建/查看应用 → 获取令牌
2. **技术支持**: 联系客服或技术支持人员
3. **API接口**: 使用应用密钥通过OAuth接口获取

```php
// 示例：通过OAuth获取令牌
$oauthApi = new ZSGF\Client\Api\OAuthApi(new GuzzleHttp\Client(), $config);
$result = $oauthApi->oAuthAuthorize($appKey, [
    'grant_type' => 'client_credentials',
    'client_id' => 'your_client_id',
    'client_secret' => 'your_client_secret'
]);
$accessToken = $result->getData()->getAccessToken();
```

</details>

<details>
<summary><strong>❓ 支持哪些PHP版本？</strong></summary>

- **最低要求**: PHP 7.4
- **推荐版本**: PHP 8.0 或更高
- **测试版本**: PHP 7.4, 8.0, 8.1, 8.2

升级PHP版本可以获得更好的性能和安全性。

</details>

<details>
<summary><strong>❓ 如何设置请求超时？</strong></summary>

```php
// 方法1: 创建HTTP客户端时设置
$httpClient = new GuzzleHttp\Client([
    'timeout' => 30,          // 总超时时间
    'connect_timeout' => 10   // 连接超时时间
]);

// 方法2: 单次请求设置
$response = $httpClient->request('POST', '/api/endpoint', [
    'timeout' => 60,  // 60秒超时
    'json' => $data
]);
```

</details>

<details>
<summary><strong>❓ 如何开启调试模式？</strong></summary>

```php
// 开启HTTP请求调试
$httpClient = new GuzzleHttp\Client([
    'debug' => true,                    // 输出详细调试信息
    'http_errors' => false,            // 不抛出HTTP错误异常
    'headers' => [
        'X-Debug-Mode' => 'true'
    ]
]);

// 或者使用中间件记录请求日志
use GuzzleHttp\Middleware;
use GuzzleHttp\MessageFormatter;

$stack = GuzzleHttp\HandlerStack::create();
$stack->push(Middleware::log(
    new \Monolog\Logger('api'),
    new MessageFormatter('{method} {uri} - {code} {phrase}')
));

$httpClient = new GuzzleHttp\Client(['handler' => $stack]);
```

</details>

<details>
<summary><strong>❓ 如何处理并发请求？</strong></summary>

```php
use GuzzleHttp\Promise;

$client = new GuzzleHttp\Client();

// 创建异步请求
$promises = [
    'user1' => $client->getAsync('/user/1'),
    'user2' => $client->getAsync('/user/2'),
    'user3' => $client->getAsync('/user/3'),
];

// 等待所有请求完成
$responses = Promise\settle($promises)->wait();

// 处理结果
foreach ($responses as $key => $response) {
    if ($response['state'] === 'fulfilled') {
        echo "✅ {$key}: " . $response['value']->getBody();
    } else {
        echo "❌ {$key}: " . $response['reason']->getMessage();
    }
}
```

</details>

<details>
<summary><strong>❓ 如何处理文件上传进度？</strong></summary>

```php
$client = new GuzzleHttp\Client();

$response = $client->request('POST', '/file/upload', [
    'multipart' => [
        [
            'name' => 'file',
            'contents' => fopen('/path/to/file.jpg', 'r'),
            'filename' => 'photo.jpg'
        ]
    ],
    'progress' => function($downloadTotal, $downloadedBytes, $uploadTotal, $uploadedBytes) {
        if ($uploadTotal > 0) {
            $percent = round(($uploadedBytes / $uploadTotal) * 100, 2);
            echo "📤 上传进度: {$percent}% ({$uploadedBytes}/{$uploadTotal} bytes)\r";
        }
    }
]);

echo "\n✅ 上传完成!";
```

</details>

<details>
<summary><strong>❓ 如何实现请求签名验证？</strong></summary>

```php
class SignatureMiddleware {
    private $appSecret;
    
    public function __construct($appSecret) {
        $this->appSecret = $appSecret;
    }
    
    public function __invoke(callable $handler) {
        return function ($request, array $options) use ($handler) {
            // 添加时间戳
            $timestamp = time();
            $request = $request->withHeader('X-Timestamp', $timestamp);
            
            // 生成签名
            $signature = $this->generateSignature($request, $timestamp);
            $request = $request->withHeader('X-Signature', $signature);
            
            return $handler($request, $options);
        };
    }
    
    private function generateSignature($request, $timestamp) {
        $method = $request->getMethod();
        $uri = $request->getUri()->getPath();
        $body = $request->getBody()->getContents();
        
        $signString = $method . $uri . $body . $timestamp . $this->appSecret;
        return hash('sha256', $signString);
    }
}

// 使用签名中间件
$stack = GuzzleHttp\HandlerStack::create();
$stack->push(new SignatureMiddleware('your_app_secret'));

$client = new GuzzleHttp\Client(['handler' => $stack]);
```

</details>

---

## 📞 技术支持

需要帮助？我们提供多种支持渠道：

| 支持方式 | 联系信息 |
|---------|----------|
| 📚 **技术文档** | [完整API文档](https://doc.zashigaofa.com) |
| 🐛 **问题反馈** | [GitHub Issues](https://github.com/wz101010/zsgf-php) |

### 反馈信息模板

在寻求技术支持时，请提供以下信息以便快速定位问题：

```
【环境信息】
- PHP版本: 8.1.x
- SDK版本: 1.x.x
- 操作系统: Ubuntu 20.04

【问题描述】
简要描述遇到的问题...

【错误信息】
粘贴完整的错误堆栈信息...

【复现步骤】
1. 执行xxx操作
2. 调用xxx接口
3. 出现xxx错误

【相关代码】
// 贴出相关的代码片段
```

---