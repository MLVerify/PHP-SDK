# MLVerify\Client\AccountApi

All URIs are relative to *https://api.mlverify.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountWhoAmI**](AccountApi.md#accountWhoAmI) | **GET** /me | Gets current account data


# **accountWhoAmI**
> \MLVerify\Client\Model\WhoAmIModel accountWhoAmI()

Gets current account data

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->accountWhoAmI();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountWhoAmI: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MLVerify\Client\Model\WhoAmIModel**](../Model/WhoAmIModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

