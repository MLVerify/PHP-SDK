# MLVerify\Client\ConfigApi

All URIs are relative to *https://api.mlverify.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configClientTypes**](ConfigApi.md#configClientTypes) | **GET** /config/client_types | Gets all client types
[**configCountries**](ConfigApi.md#configCountries) | **GET** /config/countries | Gets all countries
[**configNationalities**](ConfigApi.md#configNationalities) | **GET** /config/nationalities | Gets all nationalities
[**configRelationships**](ConfigApi.md#configRelationships) | **GET** /config/relationships | Gets all relationships


# **configClientTypes**
> map[string,string] configClientTypes()

Gets all client types

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->configClientTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->configClientTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**map[string,string]**

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configCountries**
> map[string,string] configCountries()

Gets all countries

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->configCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->configCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**map[string,string]**

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configNationalities**
> map[string,string] configNationalities()

Gets all nationalities

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->configNationalities();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->configNationalities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**map[string,string]**

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configRelationships**
> map[string,string] configRelationships()

Gets all relationships

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->configRelationships();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->configRelationships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**map[string,string]**

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

