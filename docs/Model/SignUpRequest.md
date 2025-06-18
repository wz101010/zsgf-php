# # SignUpRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_name** | **string** | 用户名，长度必须在6到32个字符之间，只能包含字母、数字、下划线和连字符 |
**pwd** | **string** | 登录密码，长度必须在6到32个字符之间，只能包含字母和数字 |
**nick_name** | **string** | 用户昵称，长度不能超过20个字符 | [optional]
**avatar** | **string** | 用户头像URL | [optional]
**data** | **string** | 自定义数据 | [optional]
**email** | **string** | 用户邮箱 | [optional]
**email_code** | **string** | 邮箱验证码（只有启用的邮箱验证码功能时，才需要传入），长度为4到8位的数字 | [optional]
**phone** | **string** | 用户手机号，必须为11位数字 | [optional]
**phone_code** | **string** | 手机验证码（只有启用的手机验证码功能时，才需要传入），长度为4到8位的数字 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
