<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use QuickBooksOnline\API\DataService\DataService;

session_start();
//https://intuit.github.io/QuickBooks-V3-PHP-SDK/quickstart.html#example-and-result
class UserController extends Controller
{
    //
    public $result = 0;
    public function oauth_quickbooks($test = false)
    {
        //call config into config/quickbooks.php
        $config = config("quickbooks");
        //DataService Configuration
        if ($test == false) {
            $dataService = DataService::Configure([
                'auth_mode' => 'oauth2',
                'ClientID' => $config['client_id'],
                'ClientSecret' =>  $config['client_secret'],
                'RedirectURI' => $config['redirect_uri'],
                'scope' => $config['oauth_scope'],
                'baseUrl' => "development",
            ]);
            $OAuth2LoginHelper = $dataService->getOAuth2LoginHelper();
            $authUrl = $OAuth2LoginHelper->getAuthorizationCodeURL();
            // Store the url in PHP Session Object;
            $_SESSION['authUrl'] = $authUrl;
            // dd($_SESSION['authUrl']);
            return response()->json([
                "url" => $_SESSION['authUrl'],
            ]);
        } else {
        }
    }
    /*
     */
    public function parseAuthRedirectUrl($url)
    {
        parse_str($url, $qsArray);
        return [
            'code' => $qsArray['code'],
            'realmId' => $qsArray['realmId']
        ];
    }
    public function processCode()
    {
        //call config into config/quickbooks.php
        $config = config("quickbooks");
        //DataService Configuration
        $dataService = DataService::Configure([
            'auth_mode' => 'oauth2',
            'ClientID' => $config['client_id'],
            'ClientSecret' =>  $config['client_secret'],
            'RedirectURI' => $config['redirect_uri'],
            'scope' => $config['oauth_scope'],
            'baseUrl' => "quickbooks.api.intuit.com",
        ]);
        $OAuth2LoginHelper = $dataService->getOAuth2LoginHelper();
        parse_str(htmlspecialchars_decode($_SERVER['QUERY_STRING']), $qsArray);
        $parseUrl = ['code' => $qsArray['code'], 'realmId' => $qsArray['realmId']];
        /*
     * Update the OAuth2Token
     */
        $accessToken = $OAuth2LoginHelper->exchangeAuthorizationCodeForToken($parseUrl['code'], $parseUrl['realmId']);
        //$accessToken = $accessTokenObj->getAccessToken();
        $accessTokenJson = array(
            'token_type' => 'bearer',
            'access_token' => $accessToken->getAccessToken(),
            'refresh_token' => $accessToken->getRefreshToken(),
            'x_refresh_token_expires_in' => $accessToken->getRefreshTokenExpiresAt(),
            'expires_in' => $accessToken->getAccessTokenExpiresAt()
        );
        // $_SESSION['sessionAccessToken']  = $accessTokenJson;
        //$dataService->updateOAuth2Token($accessToken)
        $this->oauth_quickbooks($accessTokenJson);
        $token = $accessTokenJson["access_token"];
        $client = new Client(['headers' => [
            'Authorization' => "Bearer $token"
        ]]);
        // header("https://qkbfront.drapeauyamboka.com/callback");
        //$client->get('https://qkbfront.drapeauyamboka.com/login');
        //header("https://qkbfront.drapeauyamboka.com/callback");
        return response()->json([
            "token" => $accessTokenJson,
        ]);
        /*
     * Setting the accessToken for session variable
     */
    }

    public function refresh_token($token)
    {
        //call config into config/quickbooks.php
        $config = config("quickbooks");
        $dataService = DataService::Configure(array(
            'auth_mode' => 'oauth2',
            'ClientID' => $config['client_id'],
            'ClientSecret' =>  $config['client_secret'],
            'RedirectURI' => $config['oauth_redirect_uri'],
            'scope' => $config['oauth_scope'],
            'baseUrl' => "development"
        ));
        $OAuth2LoginHelper = $dataService->getOAuth2LoginHelper();
        $authUrl = $OAuth2LoginHelper->getAuthorizationCodeURL();
        if (isset($_SESSION['sessionAccessToken'])) {
            $accessToken = $_SESSION['sessionAccessToken'];
            $accessTokenJson = array(
                'token_type' => 'bearer',
                'access_token' => $accessToken->getAccessToken(),
                'refresh_token' => $accessToken->getRefreshToken(),
                'x_refresh_token_expires_in' => $accessToken->getRefreshTokenExpiresAt(),
                'expires_in' => $accessToken->getAccessTokenExpiresAt()
            );
            $dataService->updateOAuth2Token($accessToken);
            $oauthLoginHelper = $dataService->getOAuth2LoginHelper();
            $CompanyInfo = $dataService->getCompanyInfo();
        }
    }
    public function getInvoiceQueryAll()
    {
        $config = config('quickbooks');
        //DataService Configuration
        $dataService = DataService::Configure([
            'auth_mode' => 'oauth2',
            'ClientID' => $config['client_id'],
            'ClientSecret' =>  $config['client_secret'],
            'RedirectURI' => $config['redirect_uri'],
            'scope' => $config['oauth_scope'],
            'baseUrl' => "development"
        ]);
        /* Retrieve the accessToken value from session variable
     */
        $OAuth2LoginHelper = $dataService->getOAuth2LoginHelper();
        //$_SESSION['sessionAccessToken'] = "eyJlbmMiOiJBMTI4Q0JDLUhTMjU2IiwiYWxnIjoiZGlyIn0..X65pNtvumDSkt-_yRXnSkg.yJ-pcgfgewqAo9Ref06_7lx5Iqgh5aUW5pQsbTGfYW9QGaxbvL8bUkLrnmG5IzrVinh54Czobo_gpFho_OFF6Fz1zXDctY9fGqi0VJvFwsuRfksjUouk-7mxkJs3RwGK6EsNDbWGDkhRph_lE9fRrdJ3YSsWhBcGP-4LSVyBOODl4dLRmvmlBobvwaI8FNw4IGeRmfFQzBqzcKpjtYcU5VWqECoPe1rB2_X0I7W1xSdaZfY3VCV1ZchfjnzUmCoG9N4oBc0xsqH1piOS-NmrZ_t1751oX_EKdqsyUPB8imlDTtdOdRfX_dlAlQld5TGx9hgNJaCOjpAzSSqKSerhop7sl318TLM3XHQTmJYnlrIjdqtdvJ5XYL6f7mmPmHUZAW-O-_Tc6D7Hz1vgGjwxMVJqMbKwV3DivIlORbYwEGfJpyjixq6ubmXJqH9ryftWTCa_NI5lspiMTNcXcvBCnIc4wzI9_dhCNb4mGsYIMKqHo89dsl4bOdoYvRrWWbYj5-Xy9G5u_6cmK3Gt6303rCkK6YgoAJaJU8TzrkdRcYt5qOMqmG1FWuPz4q20znTeX1R76mwrSICfoqSJTD11R3jzKkfRgLwtOE3YG747pbFlo9yh0S_vPSCqCG9pHTSdyJRcttGTk_gkwo69AF3ROzPff-K3yuCdcB7um3kJM8RPBmUJWjB_B7QNiCdCyrh6SGyKxPyNRZBSTlDxpYi-_VnQHrE-M2N5GtfqgfHoQp0.z7YRFB4wcyhBFpmi9mgjjg";
        $_SESSION['sessionAccessToken'] = "";
        $accessToken = $_SESSION['sessionAccessToken'];
        parse_str(htmlspecialchars_decode($_SERVER['QUERY_STRING']), $qsArray);
        $parseUrl = ['code' => $qsArray['code'], 'realmId' => $qsArray['realmId']];
        /*
     * Update the OAuth2Token
     */
        $accessToken = $OAuth2LoginHelper->exchangeAuthorizationCodeForToken($parseUrl['code'], $parseUrl['realmId']);
        //$accessToken = $accessTokenObj->getAccessToken();
        $accessTokenJson = array(
            'token_type' => 'bearer',
            'access_token' => $accessToken->getAccessToken(),
            'refresh_token' => $accessToken->getRefreshToken(),
            'x_refresh_token_expires_in' => $accessToken->getRefreshTokenExpiresAt(),
            'expires_in' => $accessToken->getAccessTokenExpiresAt()
        );
        //$accessToken = $OAuth2LoginHelper->exchangeAuthorizationCodeForToken($parseUrl['code'], $parseUrl['realmId']);
        /*
     * Update the OAuth2Token of the dataService object
     */
        $test = $dataService->updateOAuth2Token($accessTokenJson);
        $companyInfo = $dataService->getCompanyInfo();
        $address = "QBO API call Successful!! Response Company name: " . $companyInfo->CompanyName . " Company Address: " . $companyInfo->CompanyAddr->Line1 . " " . $companyInfo->CompanyAddr->City . " " . $companyInfo->CompanyAddr->PostalCode;
        // print_r($address);
        //var_dump($test->Query("SELECT * FROM Customer"));
        //$_SESSION['sessionAccessToken'] = $accessToken;
        return response()->json([
            "invoices" => $test->Query("SELECT * FROM Customer"),
        ]);
    }
}
//https://howtodoinjava.com/typescript/async-callback-with-parameters/#:~:text=Callback%20functions%20are%20a%20foundational,file%20operations%2C%20and%20event%20handling.