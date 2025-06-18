# # EmailSignUpRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | 用户邮箱地址 |
**pwd** | **string** | 用户密码，长度为6到32个字符 |
**email_code** | **string** | 邮箱验证码 | [optional]
**phone** | **string** | 手机号，必须为11位数字 | [optional]
**phone_code** | **string** | 手机验证码（只有启用的手机验证码功能时，才需要传入） | [optional]
**nick_name** | **string** | 用户昵称 | [optional]
**avatar** | **string** | 用户头像URL | [optional]
**data** | **string** | 自定义数据 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
