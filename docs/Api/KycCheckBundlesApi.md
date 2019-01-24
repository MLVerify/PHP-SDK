# MLVerify\Client\KycCheckBundlesApi

All URIs are relative to *https://api.mlverify.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**kycCheckBundlesCreateChecks**](KycCheckBundlesApi.md#kycCheckBundlesCreateChecks) | **POST** /kycbundle/{id} | Create the bundle of KYC checks
[**kycCheckBundlesListKycCheckBundlesOfAccount**](KycCheckBundlesApi.md#kycCheckBundlesListKycCheckBundlesOfAccount) | **GET** /kycbundle | Gets KYC check bundles of the account


# **kycCheckBundlesCreateChecks**
> \MLVerify\Client\Model\CreateChecksResponceModel kycCheckBundlesCreateChecks($id, $form_data)

Create the bundle of KYC checks

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\KycCheckBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The KYC check bundle Identifier.
$form_data = new \MLVerify\Client\Model\CreateChecksModel(); // \MLVerify\Client\Model\CreateChecksModel | 

try {
    $result = $apiInstance->kycCheckBundlesCreateChecks($id, $form_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycCheckBundlesApi->kycCheckBundlesCreateChecks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The KYC check bundle Identifier. |
 **form_data** | [**\MLVerify\Client\Model\CreateChecksModel**](../Model/CreateChecksModel.md)|  |

### Return type

[**\MLVerify\Client\Model\CreateChecksResponceModel**](../Model/CreateChecksResponceModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycCheckBundlesListKycCheckBundlesOfAccount**
> \MLVerify\Client\Model\AccountKycCheckBundlesModel kycCheckBundlesListKycCheckBundlesOfAccount()

Gets KYC check bundles of the account

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\KycCheckBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->kycCheckBundlesListKycCheckBundlesOfAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycCheckBundlesApi->kycCheckBundlesListKycCheckBundlesOfAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MLVerify\Client\Model\AccountKycCheckBundlesModel**](../Model/AccountKycCheckBundlesModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

