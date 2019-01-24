# MLVerify\Client\IdChecksApi

All URIs are relative to *https://api.mlverify.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**idChecksCheck**](IdChecksApi.md#idChecksCheck) | **POST** /idchecks | Check person ID


# **idChecksCheck**
> string idChecksCheck($form_data)

Check person ID

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\IdChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_data = new \MLVerify\Client\Model\IdChecksCheckModel(); // \MLVerify\Client\Model\IdChecksCheckModel | 

try {
    $result = $apiInstance->idChecksCheck($form_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdChecksApi->idChecksCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **form_data** | [**\MLVerify\Client\Model\IdChecksCheckModel**](../Model/IdChecksCheckModel.md)|  |

### Return type

**string**

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

