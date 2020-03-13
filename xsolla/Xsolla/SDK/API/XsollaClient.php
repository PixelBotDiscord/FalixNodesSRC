<?php

namespace Xsolla\SDK\API;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use Xsolla\SDK\API\PaymentUI\TokenRequest;
use Xsolla\SDK\Exception\API\XsollaAPIException;
use Xsolla\SDK\Version;

/**
 * @method array CreatePaymentUIToken(array $args = []) Create payment UI token. http://developers.xsolla.com/api.html#payment-ui
 *
 * @method array CreateSubscriptionPlan(array $args = [])       Create a recurrent plan. http://developers.xsolla.com/api.html#create-a-plan
 * @method array UpdateSubscriptionPlan(array $args = [])       Update a recurrent plan. http://developers.xsolla.com/api.html#update-a-plan
 * @method void  DeleteSubscriptionPlan(array $args = [])       Delete a recurrent plan. http://developers.xsolla.com/api.html#delete-a-plan
 * @method void  DisableSubscriptionPlan(array $args = [])      Disable a recurrent plan. http://developers.xsolla.com/api.html#disable-a-plan
 * @method void  EnableSubscriptionPlan(array $args = [])       Enable a recurrent plan. http://developers.xsolla.com/api.html#enable-a-plan
 * @method array ListSubscriptionPlans(array $args = [])        List all recurrent plans. http://developers.xsolla.com/api.html#list-all-plans
 * @method array CreateSubscriptionProduct(array $args = [])    Create a product. http://developers.xsolla.com/api.html#create-a-product
 * @method array UpdateSubscriptionProduct(array $args = [])    Update a product. http://developers.xsolla.com/api.html#update-a-product
 * @method void  DeleteSubscriptionProduct(array $args = [])    Delete a product. http://developers.xsolla.com/api.html#delete-a-product
 * @method array ListSubscriptionProducts(array $args = [])     List all recurrent products. http://developers.xsolla.com/api.html#list-all-products
 * @method array UpdateSubscription(array $args = [])           Updates a subscription by either changing its status ‘active’, ‘canceled’, or ‘non_renewing’ or postponing the next billing date. http://developers.xsolla.com/api.html#update-subscription
 * @method array ListSubscriptions(array $args = [])            List all recurrent subscriptions. http://developers.xsolla.com/api.html#list-all-subscriptions
 * @method array ListSubscriptionPayments(array $args = [])     List all recurrent payments. http://developers.xsolla.com/api.html#list-all-payments
 * @method array ListUserSubscriptionPayments(array $args = []) List all recurrent payments by user. http://developers.xsolla.com/api.html#list-all-payments-by-user
 * @method array ListSubscriptionCurrencies(array $args = [])   List all recurrent currencies. http://developers.xsolla.com/api.html#list-all-currencies
 *
 * @method array ListUserAttributes(array $args = [])  Get list of user attributes. http://developers.xsolla.com/api.html#list-all-user-attributes
 * @method array GetUserAttribute(array $args = [])    Show a user attribute. http://developers.xsolla.com/api.html#get-user-attribute
 * @method array CreateUserAttribute(array $args = []) Create user attribute. http://developers.xsolla.com/api.html#create-user-attribute
 * @method void  UpdateUserAttribute(array $args = []) Update user attribute. http://developers.xsolla.com/api.html#update-user-attribute
 * @method void  DeleteUserAttribute(array $args = []) Delete a user attribute. http://developers.xsolla.com/api.html#delete-user-attribute
 *
 * @method array CreateVirtualItem(array $args = [])             Create a virtual item. http://developers.xsolla.com/api.html#create-an-item
 * @method array GetVirtualItem(array $args = [])                Get a virtual item. http://developers.xsolla.com/api.html#get-an-item
 * @method void  UpdateVirtualItem(array $args = [])             Update a virtual item. http://developers.xsolla.com/api.html#update-an-item
 * @method void  DeleteVirtualItem(array $args = [])             Delete a virtual item. http://developers.xsolla.com/api.html#delete-an-item
 * @method array ListVirtualItems(array $args = [])              List a virtual items. http://developers.xsolla.com/api.html#list-all-items
 * @method array CreateVirtualItemsGroup(array $args = [])       Create a virtual items group. http://developers.xsolla.com/api.html#create-a-group
 * @method array GetVirtualItemsGroup(array $args = [])          Get a virtual items group. http://developers.xsolla.com/api.html#get-a-group
 * @method void  UpdateVirtualItemsGroup(array $args = [])       Update a virtual items group. http://developers.xsolla.com/api.html#update-a-group
 * @method void  DeleteVirtualItemsGroup(array $args = [])       Delete a virtual items group. http://developers.xsolla.com/api.html#delete-a-group
 * @method array ListVirtualItemsGroups(array $args = [])        List all virtual items groups. http://developers.xsolla.com/api.html#list-all-groups
 * @method void  UpdateVirtualItemOrderInGroup(array $args = []) Update items order in group. http://developers.xsolla.com/api.html#change-an-items-order
 *
 * @method array GetProjectVirtualCurrencySettings(array $args = [])    Get project virtual currency settings. http://developers.xsolla.com/api.html#list-the-currency-package
 * @method void  UpdateProjectVirtualCurrencySettings(array $args = []) Update project virtual currency settings. http://developers.xsolla.com/api.html#update-the-currency-package
 *
 * @method void  CreateWalletUser(array $args = [])                Create a new user. http://developers.xsolla.com/api.html#create-a-new-user
 * @method array GetWalletUser(array $args = [])                   Retrieve a user data. http://developers.xsolla.com/api.html#get-a-user
 * @method void  UpdateWalletUser(array $args = [])                Update user's information. http://developers.xsolla.com/api.html#update-an-user
 * @method array ListWalletUsers(array $args = [])                 List all users. http://developers.xsolla.com/api.html#list-all-users
 * @method array ListWalletUserOperations(array $args = [])        List all operations. http://developers.xsolla.com/api.html#list-all-operations
 * @method array RechargeWalletUserBalance(array $args = [])       Change a balance. http://developers.xsolla.com/api.html#change-a-balance
 * @method array ListWalletUserVirtualItems(array $args = [])      Get user's virtual items. http://developers.xsolla.com/api.html#list-all-virtual-items
 * @method void  AddVirtualItemToWalletUser(array $args = [])      Add the virtual items to the user's account. http://developers.xsolla.com/api.html#add-items-to-the-user
 * @method void  DeleteVirtualItemFromWalletUser(array $args = []) Delete the virtual items from the user's account. http://developers.xsolla.com/api.html#delete-items-from-the-user
 *
 * @method void  CreateCoupon(array $args = []) Create coupon for a campaign by given code
 * @method array GetCoupon(array $args = [])    Get information about coupon by code. http://developers.xsolla.com/api.html#get-a-coupon
 * @method array RedeemCoupon(array $args = []) Redeem coupon by code. http://developers.xsolla.com/api.html#redeem-a-coupon
 *
 * @method array CreatePromotion(array $args = [])            Create a new promotion. http://developers.xsolla.com/api.html#create-a-new-promotion
 * @method array GetPromotion(array $args = [])               Get a promotion. http://developers.xsolla.com/api.html#get-the-promotion
 * @method void  UpdatePromotion(array $args = [])            Update a promotion. If the promotion is read-only (read_only = true), you are not allowed to change "project_id" parameter. http://developers.xsolla.com/api.html#update-the-promotion
 * @method array ReviewPromotion(array $args = [])            Check the promotion, if it is ready for activation. This method returns the list of errors (if they exist). http://developers.xsolla.com/api.html#review-the-promotion
 * @method void  TogglePromotion(array $args = [])            Toggle the promotion. Change the status of promotion from enabled to disabled and vice versa. http://developers.xsolla.com/api.html#toggle-the-promotion
 * @method void  DeletePromotion(array $args = [])            Delete a promotion. Only disabled promotion is allowed to delete (enabled = false). http://developers.xsolla.com/api.html#delete-the-promotion
 * @method array ListPromotions(array $args = [])             List all promotions. http://developers.xsolla.com/api.html#list-all-promotions
 * @method array GetPromotionSubject(array $args = [])        Get the subject of the promotion. http://developers.xsolla.com/api.html#get-the-subject
 * @method void  SetPromotionSubject(array $args = [])        Set the subject of the promotion. If the promotion is read-only (read_only = true), you are not allowed to update the subject. The subject can take the following values: "purchase", or "items", or "packages". http://developers.xsolla.com/api.html#set-the-subject
 * @method array GetPromotionPaymentSystems(array $args = []) Get the payment systems of the promotion. If the payment systems list is empty, the promotion will be valid for all payment systems. http://developers.xsolla.com/api.html#get-the-payment-systems
 * @method void  SetPromotionPaymentSystems(array $args = []) Set the payment systems of the promotion. If the payment systems list is empty, the promotion will be applied for all payment systems. If the promotion is read-only (read_only = true), you are not allowed to call this command. http://developers.xsolla.com/api.html#set-the-payment-systems
 * @method array GetPromotionPeriods(array $args = [])        Get the periods of the promotion. http://developers.xsolla.com/api.html#get-the-periods
 * @method void  SetPromotionPeriods(array $args = [])        Set the periods of the promotion. If the promotion is read-only (read_only = true), you are not allowed to edit existing periods, add new periods only. http://developers.xsolla.com/api.html#set-the-periods
 * @method array GetPromotionRewards(array $args = [])        Get the rewards of the promotion. http://developers.xsolla.com/api.html#get-the-rewards
 * @method void  SetPromotionRewards(array $args = [])        Set the rewards to the promotion. If the promotion is read-only (read_only = true), you are not allowed to update the rewards. http://developers.xsolla.com/api.html#set-the-rewards
 * @method array ListCouponPromotions(array $args = [])       Get coupon promotions
 * @method array CreateCouponPromotion(array $args = [])      Create coupon promotion
 * @method void  UpdatePromotionCampaigns(array $args = [])   Update the promotion campaigns
 *
 * @method array ListEvents(array $args = []) List all events from Xsolla Event System. http://developers.xsolla.com/api.html#list-all-events
 *
 * @method array SearchPaymentsRegistry(array $args = []) Get a transaction list based on specific search parameters. JSON, CSV or XML will be returned in response from the API. http://developers.xsolla.com/api.html#search-all-transactions
 * @method array ListPaymentsRegistry(array $args = [])   Get information about all transactions for specified data range/transfer/report in different data formats. JSON, CSV or XML will be returned in response from the API. http://developers.xsolla.com/api.html#list-all-transactions
 * @method array ListTransfersRegistry(array $args = [])  List all transfers. http://developers.xsolla.com/api.html#list-all-transfers
 * @method array ListReportsRegistry(array $args = [])    Get a list of finance reports for specified data range. http://developers.xsolla.com/api.html#list-all-reports
 * @method void  CreateRefundRequest(array $args = [])    Send a refund request. Money will be returned to user. http://developers.xsolla.com/api.html#send-a-refund-request
 *
 * @method array ListSupportTickets(array $args = [])        List all tickets. http://developers.xsolla.com/api.html#list-all-tickets
 * @method array ListSupportTicketComments(array $args = []) List all comments. http://developers.xsolla.com/api.html#list-all-comments
 *
 * @method array CreateGameDeliveryEntity(array $args = [])     Create game delivery entity http://developers.xsolla.com/api.html#create-game-delivery-entity
 * @method array GetGameDeliveryEntity(array $args = [])        Get a game delivery entity http://developers.xsolla.com/api.html#get-a-game-delivery-entity
 * @method void  UpdateGameDeliveryEntity(array $args = [])     Update a game delivery entity http://developers.xsolla.com/api.html#update-a-game-delivery-entity
 * @method array ListGameDeliveryEntities(array $args = [])     List all game delivery entities http://developers.xsolla.com/api.html#list-all-game-delivery-entities
 * @method array ListGameDeliveryDrmPlatforms(array $args = []) List available DRM platforms http://developers.xsolla.com/api.html#list-available-drm-platforms
 *
 * @method array GetStorefrontVirtualCurrency(array $args = []) Get virtual currency packages http://developers.xsolla.com/api.html#list-virtual-currency-packages
 * @method array GetStorefrontVirtualGroups(array $args = [])   Get virtual items groups http://developers.xsolla.com/api.html#list-item-groups
 * @method array GetStorefrontVirtualItems(array $args = [])    Get virtual items http://developers.xsolla.com/api.html#list-virtual-items
 * @method array GetStorefrontSubscriptions(array $args = [])   Get available subscriptions http://developers.xsolla.com/api.html#list-subscription-plans
 * @method array GetStorefrontBonus(array $args = [])           Get the information about active promotion http://developers.xsolla.com/api.html#list-promotions
 *
 * @method array CreateProject(array $args = []) Create a new project http://developers.xsolla.com/api.html#create-a-new-project
 * @method array GetProject(array $args = [])    Get a project http://developers.xsolla.com/api.html#get-a-project
 * @method void  UpdateProject(array $args = []) Update a project http://developers.xsolla.com/api.html#update-a-project
 * @method array ListProjects(array $args = [])  List all projects http://developers.xsolla.com/api.html#list-all-projects
 *
 * @method array ListPaymentAccounts(array $args = [])  List of the saved payment accounts http://developers.xsolla.com/api.html#list-saved-payment-accounts
 * @method array ChargePaymentAccount(array $args = []) Charge using the saved payment account http://developers.xsolla.com/api.html#charge-using-saved-payment-account
 * @method array DeletePaymentAccount(array $args = []) Delete the saved payment account http://developers.xsolla.com/api.html#delete-a-saved-payment-account
 */
class XsollaClient extends Client
{
    private static $merchantId;
    private static $serviceDescription;

    /**
     * @internal
     * @param  mixed  $value
     * @return string
     */
    public static function jsonEncode($value)
    {
        $flags = defined('JSON_PRETTY_PRINT') ? JSON_PRETTY_PRINT : 0;

        return json_encode($value, $flags);
    }

    /**
     * @param  array  $config
     * @return static
     */
    public static function factory($config = [])
    {
        $required = ['merchant_id', 'api_key'];
        $config += ['ssl.certificate_authority' => 'system'];

        if ($missing = array_diff($required, array_keys($config))) {
            throw new \InvalidArgumentException('Config is missing the following keys: '.implode(', ', $missing));
        }

        $config['auth'] = [$config['merchant_id'], $config['api_key'], 'Basic'];
        $config['headers'] = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'User-Agent' => Version::getVersion(),
        ];

        self::$serviceDescription = require __DIR__.'/Resources/api.php';
        self::$merchantId = (int) $config['merchant_id'];

        return new static($config);
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        $params = count($arguments) > 0 ? $arguments[0] : [];

        $operation = self::$serviceDescription['operations'][$name];
        $uri = self::$serviceDescription['baseUrl'].$operation['uri'];

        foreach ($operation['parameters'] as $parameterName => $parameterValue) {
            if ('uri' === $parameterValue['location'] && null !== strpos($uri, sprintf('{%s}', $parameterName))) {
                $replacementValue = 'merchant_id' === $parameterName ? self::$merchantId : $params[$parameterName];

                $uri = str_replace(sprintf('{%s}', $parameterName), $replacementValue, $uri);
            } elseif ('query' === $parameterValue['location']) {
                $params['request'][$parameterName] = $params[$parameterName] ?? null;
            }
        }

        $requestParams = 'GET' === $operation['httpMethod'] ? ['query' => $params['request'] ?? []] : ['json' => $params['request'] ?? []];

        try {
            $response = $this->request($operation['httpMethod'], $uri, $requestParams);
        } catch (BadResponseException | ClientException $exception) {
            throw XsollaAPIException::fromBadResponse($exception);
        } catch (\Exception | GuzzleException $exception) {
            throw new XsollaAPIException('XsollaClient Exception: '.$exception->getMessage().' Please check troubleshooting section in README.md https://github.com/xsolla/xsolla-sdk-php#troubleshooting', 0, $exception);
        }

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @param  int    $projectId
     * @param  string $userId
     * @param  bool   $sandboxMode
     * @return string
     */
    public function createCommonPaymentUIToken($projectId, $userId, $sandboxMode = false)
    {
        $tokenRequest = new TokenRequest($projectId, $userId);
        $tokenRequest->setSandboxMode($sandboxMode);

        return $this->createPaymentUITokenFromRequest($tokenRequest);
    }

    /**
     * @param  TokenRequest $tokenRequest
     * @return string
     */
    public function createPaymentUITokenFromRequest(TokenRequest $tokenRequest)
    {
        $parsedResponse = $this->CreatePaymentUIToken(['request' => $tokenRequest->toArray()]);

        return $parsedResponse['token'];
    }
}
