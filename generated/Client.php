<?php

namespace Rapid7\InsightVM\Api;

class Client extends \Rapid7\InsightVM\Api\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\ResourcesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\ResourcesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\ResourcesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\ResourcesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function resources(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\Resources(), $fetch);
    }
    /**
     * Executes a console command against the Security Console. <span class="authorization">Global Administrator</span>
     *
     * @param null|string $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\ExecuteCommandBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\ExecuteCommandUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\ExecuteCommandInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\ExecuteCommandServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ConsoleCommandOutput|\Psr\Http\Message\ResponseInterface
     */
    public function executeCommand(?string $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\ExecuteCommand($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetInfoUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetInfoNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetInfoInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetInfoServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Info|\Psr\Http\Message\ResponseInterface
     */
    public function getInfo(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetInfo(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetLicenseUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetLicenseNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetLicenseInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetLicenseServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\License|\Psr\Http\Message\ResponseInterface
     */
    public function getLicense(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetLicense(), $fetch);
    }
    /**
     * Licenses the product with an activation key or a provided license file. If both are provided, the license file is preferred. <span class="authorization">Global Administrator</span>
     *
     * @param null|\Rapid7\InsightVM\Api\Model\Api3AdministrationLicensePostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $key A license activation key.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\ActivateLicenseBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\ActivateLicenseUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\ActivateLicenseInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\ActivateLicenseServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function activateLicense(?\Rapid7\InsightVM\Api\Model\Api3AdministrationLicensePostBody $requestBody = null, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\ActivateLicense($requestBody, $queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPropertiesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPropertiesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPropertiesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPropertiesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\EnvironmentProperties|\Psr\Http\Message\ResponseInterface
     */
    public function getProperties(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetProperties(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSettingsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSettingsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSettingsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSettingsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Settings|\Psr\Http\Message\ResponseInterface
     */
    public function getSettings(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSettings(), $fetch);
    }
    /**
     * Returns all asset groups.
     *
     * @param array $queryParameters {
     *     @var string $type The type of asset group.
     *     @var string $name A search pattern for the name of the asset group. Searches are case-insensitive contains.
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfAssetGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetGroups(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetGroups($queryParameters), $fetch);
    }
    /**
    * Creates a new asset group. The `searchCriteria` field can be passed no matter what the type of the asset group is. The asset group `type` changes when the assets are refreshed. Dynamic asset groups constantly refreshed their membership as assets are scanned whereas static asset groups do not change membership automatically.
    See the <a href="#section/Responses/SearchCriteria">Search Criteria</a> for more information on using dynamic criteria.
    *
    * @param null|\Rapid7\InsightVM\Api\Model\AssetGroup $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Rapid7\InsightVM\Api\Exception\CreateAssetGroupBadRequestException
    * @throws \Rapid7\InsightVM\Api\Exception\CreateAssetGroupUnauthorizedException
    * @throws \Rapid7\InsightVM\Api\Exception\CreateAssetGroupInternalServerErrorException
    * @throws \Rapid7\InsightVM\Api\Exception\CreateAssetGroupServiceUnavailableException
    *
    * @return null|\Rapid7\InsightVM\Api\Model\CreatedReferenceAssetGroupIDLink|\Psr\Http\Message\ResponseInterface
    */
    public function createAssetGroup(?\Rapid7\InsightVM\Api\Model\AssetGroup $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\CreateAssetGroup($requestBody), $fetch);
    }
    /**
     * Deletes the asset group.
     *
     * @param int $id The identifier of the asset group.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAssetGroupUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAssetGroupNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAssetGroupInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAssetGroupServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAssetGroup(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteAssetGroup($id), $fetch);
    }
    /**
     * Returns an asset group.
     *
     * @param int $id The identifier of the asset group.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\AssetGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetGroup(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetGroup($id), $fetch);
    }
    /**
     * Updates the details of an asset group. See the search criteria endpoint (/search_criteria) for more information about building the search criteria and examples.
     *
     * @param int $id The identifier of the asset group.
     * @param null|\Rapid7\InsightVM\Api\Model\AssetGroup $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateAssetGroupBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateAssetGroupUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateAssetGroupNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateAssetGroupInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateAssetGroupServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateAssetGroup(int $id, ?\Rapid7\InsightVM\Api\Model\AssetGroup $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateAssetGroup($id, $requestBody), $fetch);
    }
    /**
     * Removes the assets from the given static asset group.
     *
     * @param int $id The identifier of the asset group.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllAssetsFromAssetGroupUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllAssetsFromAssetGroupNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllAssetsFromAssetGroupInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllAssetsFromAssetGroupServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeAllAssetsFromAssetGroup(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveAllAssetsFromAssetGroup($id), $fetch);
    }
    /**
     * Returns hypermedia links for the assets that belong to an asset group.
     *
     * @param int $id The identifier of the asset group.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupAssetsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupAssetsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupAssetsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupAssetsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithAssetIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetGroupAssets(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetGroupAssets($id), $fetch);
    }
    /**
     * Updates all the assets that belong to a static asset group.
     *
     * @param int $id The identifier of the asset group.
     * @param null|array[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateAssetGroupAssetsBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateAssetGroupAssetsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateAssetGroupAssetsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateAssetGroupAssetsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateAssetGroupAssetsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateAssetGroupAssets(int $id, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateAssetGroupAssets($id, $requestBody), $fetch);
    }
    /**
     * Removes an asset from an asset group.
     *
     * @param int $id The identifier of the asset group.
     * @param int $assetId The identifier of the asset.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetFromAssetGroupUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetFromAssetGroupNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetFromAssetGroupInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetFromAssetGroupServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeAssetFromAssetGroup(int $id, int $assetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveAssetFromAssetGroup($id, $assetId), $fetch);
    }
    /**
     * Adds an asset to a static asset group.
     *
     * @param int $id The identifier of the asset group.
     * @param int $assetId The identifier of the asset.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\AddAssetToAssetGroupBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\AddAssetToAssetGroupUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\AddAssetToAssetGroupNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\AddAssetToAssetGroupInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\AddAssetToAssetGroupServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function addAssetToAssetGroup(int $id, int $assetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\AddAssetToAssetGroup($id, $assetId), $fetch);
    }
    /**
     * Returns the search criteria of a dynamic asset group.For a reference of valid search criteria input see the <a href="#operation/getAssetsSearchUsingPOST">Asset Search</a> resource.
     *
     * @param int $id The identifier of the asset group.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupSearchCriteriaUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupSearchCriteriaNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupSearchCriteriaInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupSearchCriteriaServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\SearchCriteria|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetGroupSearchCriteria(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetGroupSearchCriteria($id), $fetch);
    }
    /**
     * Updates the search criteria of a dynamic asset group. For a reference of valid search criteria input see the <a href="#operation/getAssetsSearchUsingPOST">Asset Search</a> resource.
     *
     * @param int $id The identifier of the asset group.
     * @param null|\Rapid7\InsightVM\Api\Model\SearchCriteria $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetAssetGroupSearchCriteriaBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetAssetGroupSearchCriteriaUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetAssetGroupSearchCriteriaNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\SetAssetGroupSearchCriteriaInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetAssetGroupSearchCriteriaServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setAssetGroupSearchCriteria(int $id, ?\Rapid7\InsightVM\Api\Model\SearchCriteria $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetAssetGroupSearchCriteria($id, $requestBody), $fetch);
    }
    /**
     * Removes all tag associations from the asset group.
     *
     * @param int $id The identifier of the asset group.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllAssetGroupTagsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllAssetGroupTagsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllAssetGroupTagsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllAssetGroupTagsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeAllAssetGroupTags(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveAllAssetGroupTags($id), $fetch);
    }
    /**
     * Returns the tags assigned to an asset group.
     *
     * @param int $id The identifier of the asset group.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupTagsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupTagsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupTagsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupTagsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithTagIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetGroupTags(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetGroupTags($id), $fetch);
    }
    /**
     * Updates the tags of an asset group.
     *
     * @param int $id The identifier of the asset group.
     * @param null|array[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetAssetGroupTagsBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetAssetGroupTagsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetAssetGroupTagsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\SetAssetGroupTagsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetAssetGroupTagsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setAssetGroupTags(int $id, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetAssetGroupTags($id, $requestBody), $fetch);
    }
    /**
     * Removes a tag from an asset group.
     *
     * @param int $id The identifier of the asset group.
     * @param int $tagId The identifier of the tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetGroupTagUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetGroupTagNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetGroupTagInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetGroupTagServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeAssetGroupTag(int $id, int $tagId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveAssetGroupTag($id, $tagId), $fetch);
    }
    /**
     * Adds a tag to an asset group.
     *
     * @param int $id The identifier of the asset group.
     * @param int $tagId The identifier of the tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\AddAssetGroupTagBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\AddAssetGroupTagUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\AddAssetGroupTagNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\AddAssetGroupTagInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\AddAssetGroupTagServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function addAssetGroupTag(int $id, int $tagId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\AddAssetGroupTag($id, $tagId), $fetch);
    }
    /**
     * Returns hypermedia links for the users with access to this asset group.
     *
     * @param int $id The identifier of the asset group.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupUsersUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupUsersNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupUsersInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetGroupUsersServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithUserIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetGroupUsers(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetGroupUsers($id), $fetch);
    }
    /**
     * Grants users with sufficient privileges access to an asset group.
     *
     * @param int $id The identifier of the asset group.
     * @param null|array[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetAssetGroupUsersBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetAssetGroupUsersUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetAssetGroupUsersNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\SetAssetGroupUsersInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetAssetGroupUsersServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setAssetGroupUsers(int $id, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetAssetGroupUsers($id, $requestBody), $fetch);
    }
    /**
     * Removes a user's access from an asset group.
     *
     * @param int $id The identifier of the asset group.
     * @param int $userId The identifier of the user.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetGroupUserUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetGroupUserNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetGroupUserInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetGroupUserServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeAssetGroupUser(int $id, int $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveAssetGroupUser($id, $userId), $fetch);
    }
    /**
     * Grants a user with sufficient privileges access to the asset group.
     *
     * @param int $id The identifier of the asset group.
     * @param int $userId The identifier of the user.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\AddAssetGroupUserBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\AddAssetGroupUserUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\AddAssetGroupUserNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\AddAssetGroupUserInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\AddAssetGroupUserServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function addAssetGroupUser(int $id, int $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\AddAssetGroupUser($id, $userId), $fetch);
    }
    /**
     * Returns all assets for which you have access.
     *
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfAsset|\Psr\Http\Message\ResponseInterface
     */
    public function getAssets(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssets($queryParameters), $fetch);
    }
    /**
     * Removes all assets from the specified site. Assets will be deleted entirely from the Security Console if either Asset Linking is disabled or if Asset Linking is enabled and the asset only existed in this site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveSiteAssetsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveSiteAssetsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveSiteAssetsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveSiteAssetsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeSiteAssets(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveSiteAssets($id), $fetch);
    }
    /**
     * Retrieves a paged resource of assets linked with the specified site.
     *
     * @param int $id The identifier of the site.
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteAssetsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteAssetsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteAssetsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteAssetsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfAsset|\Psr\Http\Message\ResponseInterface
     */
    public function getSiteAssets(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSiteAssets($id, $queryParameters), $fetch);
    }
    /**
     * Creates or updates an asset with the specified details.
     *
     * @param int $id The identifier of the site.
     * @param null|\Rapid7\InsightVM\Api\Model\AssetCreate $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\CreateAssetBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateAssetUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateAssetInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateAssetServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\CreatedReference|\Rapid7\InsightVM\Api\Model\CreatedOrUpdatedReference|\Psr\Http\Message\ResponseInterface
     */
    public function createAsset(int $id, ?\Rapid7\InsightVM\Api\Model\AssetCreate $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\CreateAsset($id, $requestBody), $fetch);
    }
    /**
     * Returns all assets for which you have access that match the given search criteria.
     *
     * @param \Rapid7\InsightVM\Api\Model\SearchCriteria $requestBody 
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\FindAssetsBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\FindAssetsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\FindAssetsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\FindAssetsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfAsset|\Psr\Http\Message\ResponseInterface
     */
    public function findAssets(\Rapid7\InsightVM\Api\Model\SearchCriteria $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\FindAssets($requestBody, $queryParameters), $fetch);
    }
    /**
     * Retrieves the list of policies with compliance results for the specified asset.
     *
     * @param int $assetId The identifier of the asset.
     * @param array $queryParameters {
     *     @var bool $applicableOnly An optional boolean parameter indicating the policies retrieved should only include those with a policy compliance status of either a PASS of FAIL result. Default value is `false`, which will also include policies with a compliance status of NOT_APPLICABLE.
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPoliciesForAssetUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPoliciesForAssetNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPoliciesForAssetInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPoliciesForAssetServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfAssetPolicy|\Psr\Http\Message\ResponseInterface
     */
    public function getPoliciesForAsset(int $assetId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPoliciesForAsset($assetId, $queryParameters), $fetch);
    }
    /**
     * Retrieves a paged resource of either policy rules, or groups, that are defined directly underneath the specified policy with rule compliance results for the specified asset.
     *
     * @param int $assetId The identifier of the asset.
     * @param int $policyId The identifier of the policy
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetPolicyChildrenUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetPolicyChildrenNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetPolicyChildrenInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetPolicyChildrenServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfAssetPolicyItem|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetPolicyChildren(int $assetId, int $policyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetPolicyChildren($assetId, $policyId), $fetch);
    }
    /**
     * Retrieves a paged resource of either policy rules, or groups, that are defined directly underneath the specified policy group with rule compliance results for the specified asset.
     *
     * @param int $assetId The identifier of the asset.
     * @param int $policyId The identifier of the policy
     * @param int $groupId The identifier of the policy group.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetPolicyGroupChildrenUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetPolicyGroupChildrenNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetPolicyGroupChildrenInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetPolicyGroupChildrenServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfAssetPolicyItem|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetPolicyGroupChildren(int $assetId, int $policyId, int $groupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetPolicyGroupChildren($assetId, $policyId, $groupId), $fetch);
    }
    /**
     * Retrieves the list of policy rules defined directly, or indirectly, underneath the specified policy group and the compliance results for the specified asset.
     *
     * @param int $assetId The identifier of the asset.
     * @param int $policyId The identifier of the policy
     * @param int $groupId The identifier of the policy group.
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupRulesWithAssetAssessmentUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupRulesWithAssetAssessmentNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupRulesWithAssetAssessmentInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupRulesWithAssetAssessmentServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfPolicyRule|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicyGroupRulesWithAssetAssessment(int $assetId, int $policyId, int $groupId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicyGroupRulesWithAssetAssessment($assetId, $policyId, $groupId, $queryParameters), $fetch);
    }
    /**
     * Retrieves the list of policy rules with compliance results for the specified asset and policy.
     *
     * @param int $assetId The identifier of the asset.
     * @param int $policyId The identifier of the policy
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetPolicyRulesSummaryUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetPolicyRulesSummaryNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetPolicyRulesSummaryInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetPolicyRulesSummaryServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfPolicyRule|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetPolicyRulesSummary(int $assetId, int $policyId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetPolicyRulesSummary($assetId, $policyId, $queryParameters), $fetch);
    }
    /**
     * Deletes the specified asset.
     *
     * @param int $id The identifier of the asset.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAssetUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAssetNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAssetInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAssetServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAsset(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteAsset($id), $fetch);
    }
    /**
     * Returns the specified asset.
     *
     * @param int $id The identifier of the asset.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Asset|\Psr\Http\Message\ResponseInterface
     */
    public function getAsset(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAsset($id), $fetch);
    }
    /**
     * Returns the databases enumerated on an asset.
     *
     * @param int $id The identifier of the asset.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetDatabasesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetDatabasesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetDatabasesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetDatabasesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesDatabase|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetDatabases(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetDatabases($id), $fetch);
    }
    /**
     * Returns the files discovered on an asset.
     *
     * @param int $id The identifier of the asset.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetFilesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetFilesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetFilesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetFilesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesFile|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetFiles(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetFiles($id), $fetch);
    }
    /**
     * Retrieves policy overrides defined on policy rules for the specified asset.
     *
     * @param int $id The identifier of the asset.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetPolicyOverridesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetPolicyOverridesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetPolicyOverridesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetPolicyOverridesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesPolicyOverride|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetPolicyOverrides(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetPolicyOverrides($id), $fetch);
    }
    /**
     * Returns the services discovered on an asset.
     *
     * @param int $id The identifier of the asset.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServicesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServicesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServicesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServicesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithReferenceWithEndpointIDLinkServiceLink|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetServices(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetServices($id), $fetch);
    }
    /**
     * Returns the service running a port and protocol on the asset.
     *
     * @param int $id The identifier of the asset.
     * @param string $protocol The protocol of the service.
     * @param int $port The port of the service.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Service|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetService(int $id, string $protocol, int $port, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetService($id, $protocol, $port), $fetch);
    }
    /**
     * Returns the configuration (properties) of a port and protocol on an asset.
     *
     * @param int $id The identifier of the asset.
     * @param string $protocol The protocol of the service.
     * @param int $port The port of the service.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceConfigurationsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceConfigurationsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceConfigurationsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceConfigurationsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesConfiguration|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetServiceConfigurations(int $id, string $protocol, int $port, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetServiceConfigurations($id, $protocol, $port), $fetch);
    }
    /**
     * Returns the databases running on a port and protocol on an asset.
     *
     * @param int $id The identifier of the asset.
     * @param string $protocol The protocol of the service.
     * @param int $port The port of the service.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceDatabasesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceDatabasesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceDatabasesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceDatabasesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesDatabase|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetServiceDatabases(int $id, string $protocol, int $port, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetServiceDatabases($id, $protocol, $port), $fetch);
    }
    /**
     * Returns the user groups enumerated on a port and protocol on an asset.
     *
     * @param int $id The identifier of the asset.
     * @param string $protocol The protocol of the service.
     * @param int $port The port of the service.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceUserGroupsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceUserGroupsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceUserGroupsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceUserGroupsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesGroupAccount|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetServiceUserGroups(int $id, string $protocol, int $port, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetServiceUserGroups($id, $protocol, $port), $fetch);
    }
    /**
     * Returns the users enumerated on a port and protocol on an asset.
     *
     * @param int $id The identifier of the asset.
     * @param string $protocol The protocol of the service.
     * @param int $port The port of the service.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceUsersUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceUsersNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceUsersInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceUsersServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesUserAccount|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetServiceUsers(int $id, string $protocol, int $port, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetServiceUsers($id, $protocol, $port), $fetch);
    }
    /**
     * Retrieves the vulnerabilities present on a service running on an asset. A finding may be `invulnerable` if all instances on the service have exceptions applied.
     *
     * @param int $id The identifier of the asset.
     * @param string $protocol The protocol of the service.
     * @param int $port The port of the service.
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceVulnerabilitiesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceVulnerabilitiesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceVulnerabilitiesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceVulnerabilitiesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfVulnerabilityFinding|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetServiceVulnerabilities(int $id, string $protocol, int $port, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetServiceVulnerabilities($id, $protocol, $port, $queryParameters), $fetch);
    }
    /**
     * Returns the web applications running on a port and protocol on an asset.
     *
     * @param int $id The identifier of the asset.
     * @param string $protocol The protocol of the service.
     * @param int $port The port of the service.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceWebApplicationsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceWebApplicationsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceWebApplicationsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceWebApplicationsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithWebApplicationIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetServiceWebApplications(int $id, string $protocol, int $port, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetServiceWebApplications($id, $protocol, $port), $fetch);
    }
    /**
     * Returns a web application running on a port and protocol on an asset.
     *
     * @param int $id The identifier of the asset.
     * @param string $protocol The protocol of the service.
     * @param int $port The port of the service.
     * @param int $webApplicationId The identifier of the web application.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceWebApplicationUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceWebApplicationNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceWebApplicationInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetServiceWebApplicationServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\WebApplication|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetServiceWebApplication(int $id, string $protocol, int $port, int $webApplicationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetServiceWebApplication($id, $protocol, $port, $webApplicationId), $fetch);
    }
    /**
     * Returns the software on an asset.
     *
     * @param int $id The identifier of the asset.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetSoftwareUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetSoftwareNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetSoftwareInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetSoftwareServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesSoftware|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetSoftware(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetSoftware($id), $fetch);
    }
    /**
     * Returns tags assigned to an asset.
     *
     * @param int $id The identifier of the asset.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetTagsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetTagsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetTagsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetTagsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesAssetTag|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetTags(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetTags($id), $fetch);
    }
    /**
     * Removes the specified tag from the asset's tags.
     *
     * @param int $id The identifier of the asset.
     * @param int $tagId The identifier of the tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetTagUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetTagNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetTagInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetTagServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeAssetTag(int $id, int $tagId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveAssetTag($id, $tagId), $fetch);
    }
    /**
     * Assigns the specified tag to the asset.
     *
     * @param int $id The identifier of the asset.
     * @param int $tagId The identifier of the tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\AddAssetTagBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\AddAssetTagUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\AddAssetTagNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\AddAssetTagInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\AddAssetTagServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function addAssetTag(int $id, int $tagId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\AddAssetTag($id, $tagId), $fetch);
    }
    /**
     * Returns user groups enumerated on an asset.
     *
     * @param int $id The identifier of the asset.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetUserGroupsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetUserGroupsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetUserGroupsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetUserGroupsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesGroupAccount|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetUserGroups(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetUserGroups($id), $fetch);
    }
    /**
     * Returns users enumerated on an asset.
     *
     * @param int $id The identifier of the asset.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetUsersUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetUsersNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetUsersInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetUsersServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesUserAccount|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetUsers(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetUsers($id), $fetch);
    }
    /**
     * Retrieves all vulnerability findings on an asset. A finding may be `invulnerable` if all instances have exceptions applied.
     *
     * @param int $id The identifier of the asset.
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetVulnerabilitiesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetVulnerabilitiesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetVulnerabilitiesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetVulnerabilitiesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfVulnerabilityFinding|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetVulnerabilities(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetVulnerabilities($id, $queryParameters), $fetch);
    }
    /**
     * Retrieves the details for a vulnerability finding on an asset.
     *
     * @param int $id The identifier of the asset.
     * @param string $vulnerabilityId The identifier of the vulnerability.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetVulnerabilityUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetVulnerabilityNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetVulnerabilityInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetVulnerabilityServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\VulnerabilityFinding|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetVulnerability(int $id, string $vulnerabilityId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetVulnerability($id, $vulnerabilityId), $fetch);
    }
    /**
     * Returns the highest-superceding rollup solutions for a vulnerability on an asset. The solution(s) selected will be the most recent and cost-effective means by which the vulnerability can be remediated.
     *
     * @param int $id The identifier of the asset.
     * @param string $vulnerabilityId The identifier of the vulnerability.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetVulnerabilitySolutionsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetVulnerabilitySolutionsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetVulnerabilitySolutionsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssetVulnerabilitySolutionsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesMatchedSolution|\Psr\Http\Message\ResponseInterface
     */
    public function getAssetVulnerabilitySolutions(int $id, string $vulnerabilityId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssetVulnerabilitySolutions($id, $vulnerabilityId), $fetch);
    }
    /**
     * Returns all vulnerability validations for a vulnerability on an asset. The asset must be currently vulnerable to the validated vulnerable for the validation to be returned.
     *
     * @param int $id The identifier of the asset.
     * @param string $vulnerabilityId The identifier of the vulnerability.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityValidationsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityValidationsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityValidationsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityValidationsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesVulnerabilityValidationResource|\Psr\Http\Message\ResponseInterface
     */
    public function getVulnerabilityValidations(int $id, string $vulnerabilityId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetVulnerabilityValidations($id, $vulnerabilityId), $fetch);
    }
    /**
     * Creates a vulnerability validation for a vulnerability on an asset. The validation signifies that the vulnerability has been confirmed exploitable by an external tool, such as <a target="_blank" href="https://www.metasploit.com">Metasploit</a>.
     *
     * @param int $id The identifier of the asset.
     * @param string $vulnerabilityId The identifier of the vulnerability.
     * @param null|\Rapid7\InsightVM\Api\Model\VulnerabilityValidationResource $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\CreateVulnerabilityValidationBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateVulnerabilityValidationUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateVulnerabilityValidationInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateVulnerabilityValidationServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\CreatedReferenceVulnerabilityValidationIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function createVulnerabilityValidation(int $id, string $vulnerabilityId, ?\Rapid7\InsightVM\Api\Model\VulnerabilityValidationResource $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\CreateVulnerabilityValidation($id, $vulnerabilityId, $requestBody), $fetch);
    }
    /**
     * Removes a vulnerability validation for a vulnerability from an asset.
     *
     * @param int $id The identifier of the asset.
     * @param string $vulnerabilityId The identifier of the vulnerability.
     * @param int $validationId The identifier of the vulnerability validation.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteVulnerabilityValidationUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteVulnerabilityValidationNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteVulnerabilityValidationInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteVulnerabilityValidationServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteVulnerabilityValidation(int $id, string $vulnerabilityId, int $validationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteVulnerabilityValidation($id, $vulnerabilityId, $validationId), $fetch);
    }
    /**
     * Returns a vulnerability validation for a vulnerability on an asset. The asset must be currently vulnerable to the validated vulnerable for the validation to be returned.
     *
     * @param int $id The identifier of the asset.
     * @param string $vulnerabilityId The identifier of the vulnerability.
     * @param int $validationId The identifier of the vulnerability validation.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityValidationUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityValidationNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityValidationInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityValidationServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\VulnerabilityValidationResource|\Psr\Http\Message\ResponseInterface
     */
    public function getVulnerabilityValidation(int $id, string $vulnerabilityId, int $validationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetVulnerabilityValidation($id, $vulnerabilityId, $validationId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAuthenticationSourcesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAuthenticationSourcesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAuthenticationSourcesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAuthenticationSourcesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesAuthenticationSource|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthenticationSources(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAuthenticationSources(), $fetch);
    }
    /**
     * Returns the details for an authentication source.
     *
     * @param int $id The identifier of the authentication source.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAuthenticationSourceUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAuthenticationSourceNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAuthenticationSourceInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAuthenticationSourceServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\AuthenticationSource|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthenticationSource(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAuthenticationSource($id), $fetch);
    }
    /**
     * Returns hypermedia links for the user accounts that use the authentication source to authenticate.
     *
     * @param int $id The identifier of the authentication source.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAuthenticationSourceUsersUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAuthenticationSourceUsersNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAuthenticationSourceUsersInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAuthenticationSourceUsersServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithUserIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthenticationSourceUsers(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAuthenticationSourceUsers($id), $fetch);
    }
    /**
     * Returns all discovery connections.
     *
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetDiscoveryConnectionsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetDiscoveryConnectionsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetDiscoveryConnectionsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetDiscoveryConnectionsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfDiscoveryConnection|\Psr\Http\Message\ResponseInterface
     */
    public function getDiscoveryConnections(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetDiscoveryConnections($queryParameters), $fetch);
    }
    /**
     * Returns a discovery connection.
     *
     * @param int $id The identifier of the discovery connection.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetDiscoveryConnectionUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetDiscoveryConnectionNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetDiscoveryConnectionInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetDiscoveryConnectionServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\DiscoveryConnection|\Psr\Http\Message\ResponseInterface
     */
    public function getDiscoveryConnection(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetDiscoveryConnection($id), $fetch);
    }
    /**
     * Attempts to reconnect the discovery connection.
     *
     * @param int $id The identifier of the discovery connection.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\ReconnectDiscoveryConnectionBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\ReconnectDiscoveryConnectionUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\ReconnectDiscoveryConnectionInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\ReconnectDiscoveryConnectionServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reconnectDiscoveryConnection(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\ReconnectDiscoveryConnection($id), $fetch);
    }
    /**
     * Returns all known exploits.
     *
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetExploitsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetExploitsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetExploitsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetExploitsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfExploit|\Psr\Http\Message\ResponseInterface
     */
    public function getExploits(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetExploits($queryParameters), $fetch);
    }
    /**
     * Returns the details for an exploit.
     *
     * @param int $id The identifier of the exploit.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetExploitUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetExploitNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetExploitInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetExploitServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Exploit|\Psr\Http\Message\ResponseInterface
     */
    public function getExploit(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetExploit($id), $fetch);
    }
    /**
     * Returns the vulnerabilities exploitable to a exploit.
     *
     * @param int $id The identifier of the exploit.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetExploitVulnerabilitiesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetExploitVulnerabilitiesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetExploitVulnerabilitiesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetExploitVulnerabilitiesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithVulnerabilityNaturalIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function getExploitVulnerabilities(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetExploitVulnerabilities($id), $fetch);
    }
    /**
     * Returns all known malware kits.
     *
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetMalwareKitsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetMalwareKitsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetMalwareKitsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetMalwareKitsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfMalwareKit|\Psr\Http\Message\ResponseInterface
     */
    public function getMalwareKits(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetMalwareKits($queryParameters), $fetch);
    }
    /**
     * Returns the details for a malware kit.
     *
     * @param int $id The identifier of the malware kit.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetMalwareKitUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetMalwareKitNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetMalwareKitInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetMalwareKitServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\MalwareKit|\Psr\Http\Message\ResponseInterface
     */
    public function getMalwareKit(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetMalwareKit($id), $fetch);
    }
    /**
     * Returns the vulnerabilities that are susceptible to being attacked by a malware kit.
     *
     * @param int $id The identifier of the malware kit.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetMalwareKitVulnerabilitiesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetMalwareKitVulnerabilitiesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetMalwareKitVulnerabilitiesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetMalwareKitVulnerabilitiesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithVulnerabilityNaturalIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function getMalwareKitVulnerabilities(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetMalwareKitVulnerabilities($id), $fetch);
    }
    /**
     * Returns all operating systems discovered across all assets. 
     *
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetOperatingSystemsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetOperatingSystemsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetOperatingSystemsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetOperatingSystemsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfOperatingSystem|\Psr\Http\Message\ResponseInterface
     */
    public function getOperatingSystems(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetOperatingSystems($queryParameters), $fetch);
    }
    /**
     * Returns the details for an operating system.
     *
     * @param int $id The identifier of the operating system.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetOperatingSystemUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetOperatingSystemNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetOperatingSystemInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetOperatingSystemServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\OperatingSystem|\Psr\Http\Message\ResponseInterface
     */
    public function getOperatingSystem(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetOperatingSystem($id), $fetch);
    }
    /**
     * Retrieves a paged resource of policies.
     *
     * @param array $queryParameters {
     *     @var string $filter Filters the retrieved policies with those whose titles that match the parameter.
     *     @var bool $scannedOnly Flag indicating the policies retrieved should only include those with Pass or Fail compliance results. The list of scanned policies is based on the user's list of accessible assets.
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPoliciesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPoliciesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPoliciesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPoliciesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfPolicy|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicies(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicies($queryParameters), $fetch);
    }
    /**
     * Retrieves a paged resource of either policy rules, or groups, that are defined directly underneath the specified policy.
     *
     * @param int $id The identifier of the policy
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyChildrenUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyChildrenNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyChildrenInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyChildrenServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfPolicyItem|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicyChildren(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicyChildren($id), $fetch);
    }
    /**
     * Retrieves the specified policy.
     *
     * @param int $policyId The identifier of the policy
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Policy|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicy(int $policyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicy($policyId), $fetch);
    }
    /**
     * Retrieves asset resources with rule compliance results for the specified policy.
     *
     * @param int $policyId The identifier of the policy
     * @param array $queryParameters {
     *     @var bool $applicableOnly An optional boolean parameter indicating the assets retrieved should only include those with rule results of either PASS or FAIL. Default value is `false`, which will also include assets with a compliance status of NOT_APPLICABLE.
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyAssetResultsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyAssetResultsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyAssetResultsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyAssetResultsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfPolicyAsset|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicyAssetResults(int $policyId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicyAssetResults($policyId, $queryParameters), $fetch);
    }
    /**
     * Retrieves an asset resource with rule compliance results for the specified asset and policy.
     *
     * @param int $policyId The identifier of the policy
     * @param int $assetId The identifier of the asset.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyAssetResultUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyAssetResultNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyAssetResultInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyAssetResultServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PolicyAsset|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicyAssetResult(int $policyId, int $assetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicyAssetResult($policyId, $assetId), $fetch);
    }
    /**
     * Retrieves a paged resource of policy groups for the specified policy.
     *
     * @param int $policyId The identifier of the policy
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfPolicyGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicyGroups(int $policyId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicyGroups($policyId, $queryParameters), $fetch);
    }
    /**
     * Retrieves the specified policy group.
     *
     * @param int $policyId The identifier of the policy
     * @param int $groupId The identifier of the policy group.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PolicyGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicyGroup(int $policyId, int $groupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicyGroup($policyId, $groupId), $fetch);
    }
    /**
     * Retrieves asset resources with rule compliance status against all rules under the specified policy group.
     *
     * @param int $policyId The identifier of the policy
     * @param int $groupId The identifier of the policy group.
     * @param array $queryParameters {
     *     @var bool $applicableOnly An optional boolean parameter indicating the assets retrieved should only include those with rule results of either PASS or FAIL. Default value is `false`, which will also include assets with a compliance status of NOT_APPLICABLE.
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupAssetResultsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupAssetResultsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupAssetResultsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupAssetResultsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfPolicyAsset|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicyGroupAssetResults(int $policyId, int $groupId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicyGroupAssetResults($policyId, $groupId, $queryParameters), $fetch);
    }
    /**
     * Retrieves an asset resource with rule compliance status against all rules under the specified policy group.
     *
     * @param int $policyId The identifier of the policy
     * @param int $groupId The identifier of the policy group.
     * @param int $assetId The identifier of the asset.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupAssetResultUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupAssetResultNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupAssetResultInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupAssetResultServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PolicyAsset|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicyGroupAssetResult(int $policyId, int $groupId, int $assetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicyGroupAssetResult($policyId, $groupId, $assetId), $fetch);
    }
    /**
     * Retrieves a paged resource of either policy rules, or groups, that are defined directly underneath the specified policy group.
     *
     * @param int $policyId The identifier of the policy
     * @param int $groupId The identifier of the policy group.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupChildrenUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupChildrenNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupChildrenInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyGroupChildrenServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfPolicyItem|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicyGroupChildren(int $policyId, int $groupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicyGroupChildren($policyId, $groupId), $fetch);
    }
    /**
     * Retrieves the list of policy rules defined directly, or indirectly, underneath the specified policy group.
     *
     * @param int $policyId The identifier of the policy
     * @param int $groupId The identifier of the policy group.
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetDescendantPolicyRulesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetDescendantPolicyRulesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetDescendantPolicyRulesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetDescendantPolicyRulesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfPolicyRule|\Psr\Http\Message\ResponseInterface
     */
    public function getDescendantPolicyRules(int $policyId, int $groupId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetDescendantPolicyRules($policyId, $groupId, $queryParameters), $fetch);
    }
    /**
     * Retrieves a paged resource of policy rules for the specified policy.
     *
     * @param int $policyId The identifier of the policy
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyRulesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyRulesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyRulesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyRulesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfPolicyRule|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicyRules(int $policyId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicyRules($policyId, $queryParameters), $fetch);
    }
    /**
     * Retrieves a paged resource of disabled policy rules for the specified policy.
     *
     * @param int $policyId The identifier of the policy
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetDisabledPolicyRulesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetDisabledPolicyRulesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetDisabledPolicyRulesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetDisabledPolicyRulesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfPolicyRule|\Psr\Http\Message\ResponseInterface
     */
    public function getDisabledPolicyRules(int $policyId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetDisabledPolicyRules($policyId, $queryParameters), $fetch);
    }
    /**
     * Retrieves the specified policy rule.
     *
     * @param int $policyId The identifier of the policy
     * @param int $ruleId The identifier of the policy rule.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyRuleUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyRuleNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyRuleInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyRuleServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PolicyRule|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicyRule(int $policyId, int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicyRule($policyId, $ruleId), $fetch);
    }
    /**
     * Retrieves asset resources with rule compliance results for the specified policy policy rule.
     *
     * @param int $policyId The identifier of the policy
     * @param int $ruleId The identifier of the policy rule.
     * @param array $queryParameters {
     *     @var bool $applicableOnly An optional boolean parameter indicating the assets retrieved should only include those with rule results of either PASS or FAIL. Default value is `false`, which will also include assets with a compliance status of NOT_APPLICABLE.
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyRuleAssetResultsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyRuleAssetResultsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyRuleAssetResultsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyRuleAssetResultsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfPolicyAsset|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicyRuleAssetResults(int $policyId, int $ruleId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicyRuleAssetResults($policyId, $ruleId, $queryParameters), $fetch);
    }
    /**
     * Retrieves an asset resource with rule compliance results for the specified policy policy rule.
     *
     * @param int $policyId The identifier of the policy
     * @param int $ruleId The identifier of the policy rule.
     * @param int $assetId The identifier of the asset.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyRuleAssetResultUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyRuleAssetResultNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyRuleAssetResultInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyRuleAssetResultServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PolicyAsset|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicyRuleAssetResult(int $policyId, int $ruleId, int $assetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicyRuleAssetResult($policyId, $ruleId, $assetId), $fetch);
    }
    /**
     * Retrieves the policy rule proof captured during evaluation against the specified asset.
     *
     * @param int $policyId The identifier of the policy
     * @param int $ruleId The identifier of the policy rule.
     * @param int $assetId The identifier of the asset.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicyRuleAssetResultProof(int $policyId, int $ruleId, int $assetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicyRuleAssetResultProof($policyId, $ruleId, $assetId), $fetch);
    }
    /**
     * Retrieves all NIST SP 800-53 controls mappings for each CCE within the specified policy rule.
     *
     * @param int $policyId The identifier of the policy
     * @param int $ruleId The identifier of the policy rule.
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyRuleControlsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyRuleControlsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyRuleControlsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyRuleControlsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfPolicyControl|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicyRuleControls(int $policyId, int $ruleId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicyRuleControls($policyId, $ruleId, $queryParameters), $fetch);
    }
    /**
     * Retrieves the policy rule rationale for the specified policy.
     *
     * @param int $policyId The identifier of the policy
     * @param int $ruleId The identifier of the policy rule.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicyRuleRationale(int $policyId, int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicyRuleRationale($policyId, $ruleId), $fetch);
    }
    /**
     * Retrieves the policy rule remediation for the specified policy.
     *
     * @param int $policyId The identifier of the policy
     * @param int $ruleId The identifier of the policy rule.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicyRuleRemediation(int $policyId, int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicyRuleRemediation($policyId, $ruleId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicySummaryUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicySummaryNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicySummaryInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicySummaryServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PolicySummaryResource|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicySummary(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicySummary(), $fetch);
    }
    /**
     * Retrieves policy overrides defined on policy rules.
     *
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyOverridesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyOverridesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyOverridesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyOverridesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfPolicyOverride|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicyOverrides(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicyOverrides($queryParameters), $fetch);
    }
    /**
     * Submit a policy override. The policy override can be submitted or it can be submitted and approved in a single request.
     *
     * @param null|\Rapid7\InsightVM\Api\Model\PolicyOverride $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\CreatePolicyOverrideBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\CreatePolicyOverrideUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\CreatePolicyOverrideInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\CreatePolicyOverrideServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\CreatedReferencePolicyOverrideIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function createPolicyOverride(?\Rapid7\InsightVM\Api\Model\PolicyOverride $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\CreatePolicyOverride($requestBody), $fetch);
    }
    /**
     * Removes a policy override created for a policy rule.
     *
     * @param int $id The identifier of the policy override.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeletePolicyOverrideUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeletePolicyOverrideNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeletePolicyOverrideInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeletePolicyOverrideServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deletePolicyOverride(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeletePolicyOverride($id), $fetch);
    }
    /**
     * Retrieve the specified policy override.
     *
     * @param int $id The identifier of the policy override.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyOverrideUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyOverrideNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyOverrideInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyOverrideServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PolicyOverride|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicyOverride(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicyOverride($id), $fetch);
    }
    /**
     * Get the expiration date for a policy override.
     *
     * @param int $id The identifier of the policy override.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyOverrideExpirationUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyOverrideExpirationNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyOverrideExpirationInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPolicyOverrideExpirationServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicyOverrideExpiration(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPolicyOverrideExpiration($id), $fetch);
    }
    /**
     * Set the expiration date for a policy override. This must be a valid date in the future.
     *
     * @param int $id The identifier of the policy override.
     * @param null|string $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetPolicyOverrideExpirationBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetPolicyOverrideExpirationUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetPolicyOverrideExpirationNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\SetPolicyOverrideExpirationInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetPolicyOverrideExpirationServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setPolicyOverrideExpiration(int $id, ?string $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetPolicyOverrideExpiration($id, $requestBody), $fetch);
    }
    /**
     * Update the status of the specified policy override. The status can be one of the following: `"recall"`, `"approve"`, or `"reject"`.
     *
     * @param int $id The identifier of the policy override.
     * @param string $status Policy Override Status
     * @param null|string $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetPolicyOverrideStatusBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetPolicyOverrideStatusUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetPolicyOverrideStatusInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetPolicyOverrideStatusServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function setPolicyOverrideStatus(int $id, string $status, ?string $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetPolicyOverrideStatus($id, $status, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPrivilegesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPrivilegesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPrivilegesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPrivilegesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Privileges|\Psr\Http\Message\ResponseInterface
     */
    public function getPrivileges(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPrivileges(), $fetch);
    }
    /**
     * Returns the details for a privilege.
     *
     * @param string $id The identifier of the privilege.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPrivilegeUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPrivilegeNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPrivilegeInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPrivilegeServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function getPrivilege(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPrivilege($id), $fetch);
    }
    /**
     * Returns hypermedia links for all users granted the specified privilege by their role.
     *
     * @param string $id The identifier of the privilege.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetUsersWithPrivilegeUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetUsersWithPrivilegeNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetUsersWithPrivilegeInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetUsersWithPrivilegeServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithUserIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function getUsersWithPrivilege(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetUsersWithPrivilege($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportFormatsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportFormatsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportFormatsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportFormatsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesAvailableReportFormat|\Psr\Http\Message\ResponseInterface
     */
    public function getReportFormats(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetReportFormats(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportTemplatesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportTemplatesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportTemplatesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportTemplatesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesReportTemplate|\Psr\Http\Message\ResponseInterface
     */
    public function getReportTemplates(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetReportTemplates(), $fetch);
    }
    /**
     * Returns the details of a report template. Report templates govern the contents generated within a report. 
     *
     * @param string $id The identifier of the report template;
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportTemplateUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportTemplateNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportTemplateInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportTemplateServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReportTemplate|\Psr\Http\Message\ResponseInterface
     */
    public function getReportTemplate(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetReportTemplate($id), $fetch);
    }
    /**
     * Returns all defined report configurations.
     *
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfReport|\Psr\Http\Message\ResponseInterface
     */
    public function getReports(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetReports($queryParameters), $fetch);
    }
    /**
     * Configures a new report for generation. Report types are controlled through either or both a format and template. Non-templatized (`export`) report formats do not require a template and have their output format preset. Templatized (`document` and `file`) report formats support a report template that governs the content of the output and the output format can be chosen from a list of supported formats.
     *
     * @param null|\Rapid7\InsightVM\Api\Model\Report $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\CreateReportBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateReportUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateReportInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateReportServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\CreatedReferenceintLink|\Psr\Http\Message\ResponseInterface
     */
    public function createReport(?\Rapid7\InsightVM\Api\Model\Report $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\CreateReport($requestBody), $fetch);
    }
    /**
     * Deletes the configuration of a report.
     *
     * @param int $id The identifier of the report.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteReportUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteReportNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteReportInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteReportServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteReport(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteReport($id), $fetch);
    }
    /**
     * Returns the configuration details of a report.
     *
     * @param int $id The identifier of the report.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Report|\Psr\Http\Message\ResponseInterface
     */
    public function getReport(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetReport($id), $fetch);
    }
    /**
     * Updates the configuration details of a report.
     *
     * @param int $id The identifier of the report.
     * @param null|\Rapid7\InsightVM\Api\Model\Report $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateReportBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateReportUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateReportNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateReportInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateReportServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateReport(int $id, ?\Rapid7\InsightVM\Api\Model\Report $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateReport($id, $requestBody), $fetch);
    }
    /**
     * Generates a configured report and returns the instance identifier of the report.
     *
     * @param int $id The identifier of the report.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GenerateReportBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\GenerateReportUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GenerateReportInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GenerateReportServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferenceWithReportIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function generateReport(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GenerateReport($id), $fetch);
    }
    /**
     * Returns all historical details for generation of the report over time.
     *
     * @param int $id The identifier of the report.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportInstancesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportInstancesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportInstancesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportInstancesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesReportInstance|\Psr\Http\Message\ResponseInterface
     */
    public function getReportInstances(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetReportInstances($id), $fetch);
    }
    /**
     * Returns the details for a generation of the report.
     *
     * @param int $id The identifier of the report.
     * @param string $instance The identifier of the report instance.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteReportInstanceUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteReportInstanceNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteReportInstanceInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteReportInstanceServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteReportInstance(int $id, string $instance, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteReportInstance($id, $instance), $fetch);
    }
    /**
     * Returns the details for a generation of the report.
     *
     * @param int $id The identifier of the report.
     * @param string $instance The identifier of the report instance.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportInstanceUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportInstanceNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportInstanceInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetReportInstanceServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReportInstance|\Psr\Http\Message\ResponseInterface
     */
    public function getReportInstance(int $id, string $instance, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetReportInstance($id, $instance), $fetch);
    }
    /**
     * Returns the contents of a generated report. The report content is usually returned in a GZip compressed format.
     *
     * @param int $id The identifier of the report.
     * @param string $instance The identifier of the report instance.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DownloadReportUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DownloadReportNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DownloadReportInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DownloadReportServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function downloadReport(int $id, string $instance, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DownloadReport($id, $instance), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetRolesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetRolesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetRolesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetRolesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesRole|\Psr\Http\Message\ResponseInterface
     */
    public function getRoles(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetRoles(), $fetch);
    }
    /**
     * Removes a role with the specified identifier. The role must not be built-in and cannot be currently assigned to any users.
     *
     * @param string $id The identifier of the role.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteRoleBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteRoleUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteRoleNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteRoleInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteRoleServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteRole(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteRole($id), $fetch);
    }
    /**
     * Retrieves the details of a role.
     *
     * @param string $id The identifier of the role.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetRoleUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetRoleNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetRoleInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetRoleServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Role|\Psr\Http\Message\ResponseInterface
     */
    public function getRole(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetRole($id), $fetch);
    }
    /**
     * Updates the details of a role.
     *
     * @param string $id The identifier of the role.
     * @param null|\Rapid7\InsightVM\Api\Model\Role $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateRoleBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateRoleUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateRoleNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateRoleInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateRoleServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateRole(string $id, ?\Rapid7\InsightVM\Api\Model\Role $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateRole($id, $requestBody), $fetch);
    }
    /**
     * Returns hypermedia links for the the users currently assigned a role.
     *
     * @param string $id The identifier of the role.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetRoleUsersUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetRoleUsersNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetRoleUsersInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetRoleUsersServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithUserIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function getRoleUsers(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetRoleUsers($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEnginePoolsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEnginePoolsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEnginePoolsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEnginePoolsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesEnginePool|\Psr\Http\Message\ResponseInterface
     */
    public function getScanEnginePools(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetScanEnginePools(), $fetch);
    }
    /**
     * Creates a new engine pool.
     *
     * @param null|\Rapid7\InsightVM\Api\Model\EnginePool $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\CreateScanEnginePoolBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateScanEnginePoolUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateScanEnginePoolInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateScanEnginePoolServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\CreatedReferenceEngineIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function createScanEnginePool(?\Rapid7\InsightVM\Api\Model\EnginePool $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\CreateScanEnginePool($requestBody), $fetch);
    }
    /**
     * Deletes the specified engine pool.
     *
     * @param int $id The identifier of the engine pool.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveScanEnginePoolUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveScanEnginePoolNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveScanEnginePoolInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveScanEnginePoolServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeScanEnginePool(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveScanEnginePool($id), $fetch);
    }
    /**
     * Retrieves the details for an engine pool.
     *
     * @param int $id The identifier of the engine pool.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetEnginePoolUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetEnginePoolNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetEnginePoolInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetEnginePoolServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\EnginePool|\Psr\Http\Message\ResponseInterface
     */
    public function getEnginePool(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetEnginePool($id), $fetch);
    }
    /**
     * Updates the specified engine pool.
     *
     * @param int $id The identifier of the engine pool.
     * @param null|\Rapid7\InsightVM\Api\Model\EnginePool $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateScanEnginePoolBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateScanEnginePoolUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateScanEnginePoolNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateScanEnginePoolInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateScanEnginePoolServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateScanEnginePool(int $id, ?\Rapid7\InsightVM\Api\Model\EnginePool $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateScanEnginePool($id, $requestBody), $fetch);
    }
    /**
     * Get the engines in the engine pool.
     *
     * @param int $id The identifier of the engine pool.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEnginePoolScanEnginesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEnginePoolScanEnginesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEnginePoolScanEnginesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEnginePoolScanEnginesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithEngineIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function getScanEnginePoolScanEngines(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetScanEnginePoolScanEngines($id), $fetch);
    }
    /**
     * Set the engines in the engine pool.
     *
     * @param int $id The identifier of the engine pool.
     * @param null|array[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetScanEnginePoolScanEnginesBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetScanEnginePoolScanEnginesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetScanEnginePoolScanEnginesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\SetScanEnginePoolScanEnginesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetScanEnginePoolScanEnginesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setScanEnginePoolScanEngines(int $id, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetScanEnginePoolScanEngines($id, $requestBody), $fetch);
    }
    /**
     * Remove the specified engine from the engine pool.
     *
     * @param int $id The identifier of the engine pool.
     * @param int $engineId The identifier of the scan engine.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveScanEnginePoolScanEngineUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveScanEnginePoolScanEngineNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveScanEnginePoolScanEngineInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveScanEnginePoolScanEngineServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeScanEnginePoolScanEngine(int $id, int $engineId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveScanEnginePoolScanEngine($id, $engineId), $fetch);
    }
    /**
     * Add an engine to the engine pool.
     *
     * @param int $id The identifier of the engine pool.
     * @param int $engineId The identifier of the scan engine.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\AddScanEnginePoolScanEngineBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\AddScanEnginePoolScanEngineUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\AddScanEnginePoolScanEngineNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\AddScanEnginePoolScanEngineInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\AddScanEnginePoolScanEngineServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function addScanEnginePoolScanEngine(int $id, int $engineId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\AddScanEnginePoolScanEngine($id, $engineId), $fetch);
    }
    /**
     * Returns links to the sites associated with this engine pool.
     *
     * @param int $id The identifier of the engine pool.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEnginePoolSitesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEnginePoolSitesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEnginePoolSitesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEnginePoolSitesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithSiteIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function getScanEnginePoolSites(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetScanEnginePoolSites($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEnginesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEnginesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEnginesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEnginesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesScanEngine|\Psr\Http\Message\ResponseInterface
     */
    public function getScanEngines(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetScanEngines(), $fetch);
    }
    /**
     * Creates a new scan engine.
     *
     * @param null|\Rapid7\InsightVM\Api\Model\ScanEngine $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\CreateScanEngineBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateScanEngineUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateScanEngineInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateScanEngineServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferenceWithEngineIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function createScanEngine(?\Rapid7\InsightVM\Api\Model\ScanEngine $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\CreateScanEngine($requestBody), $fetch);
    }
    /**
     * Deletes the specified scan engine.
     *
     * @param int $id The identifier of the scan engine.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteScanEngineUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteScanEngineNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteScanEngineInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteScanEngineServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteScanEngine(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteScanEngine($id), $fetch);
    }
    /**
     * Retrieves the details for a scan engine.
     *
     * @param int $id The identifier of the scan engine.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEngineUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEngineNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEngineInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEngineServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ScanEngine|\Psr\Http\Message\ResponseInterface
     */
    public function getScanEngine(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetScanEngine($id), $fetch);
    }
    /**
     * Updates the specified scan engine.
     *
     * @param int $id The identifier of the scan engine.
     * @param null|\Rapid7\InsightVM\Api\Model\ScanEngine $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateScanEngineBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateScanEngineUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateScanEngineNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateScanEngineInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateScanEngineServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateScanEngine(int $id, ?\Rapid7\InsightVM\Api\Model\ScanEngine $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateScanEngine($id, $requestBody), $fetch);
    }
    /**
     * Retrieves the list of engine pools the scan engine is currently assigned to.
     *
     * @param int $id The identifier of the scan engine.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssignedEnginePoolsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssignedEnginePoolsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssignedEnginePoolsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAssignedEnginePoolsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesEnginePool|\Psr\Http\Message\ResponseInterface
     */
    public function getAssignedEnginePools(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAssignedEnginePools($id), $fetch);
    }
    /**
     * Returns the scans that have been run on a scan engine.
     *
     * @param int $id The identifier of the scan engine.
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEngineScansUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEngineScansNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEngineScansInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEngineScansServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfScan|\Psr\Http\Message\ResponseInterface
     */
    public function getScanEngineScans(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetScanEngineScans($id, $queryParameters), $fetch);
    }
    /**
     * Retrieves the list of sites the specified scan engine is assigned to.
     *
     * @param int $id The identifier of the scan engine.
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEngineSitesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEngineSitesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEngineSitesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanEngineSitesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfSite|\Psr\Http\Message\ResponseInterface
     */
    public function getScanEngineSites(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetScanEngineSites($id, $queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanTemplatesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanTemplatesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanTemplatesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanTemplatesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesScanTemplate|\Psr\Http\Message\ResponseInterface
     */
    public function getScanTemplates(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetScanTemplates(), $fetch);
    }
    /**
     * Creates a new scan template.
     *
     * @param null|\Rapid7\InsightVM\Api\Model\ScanTemplate $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\CreateScanTemplateBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateScanTemplateUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateScanTemplateInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateScanTemplateServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\CreatedReferenceScanTemplateIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function createScanTemplate(?\Rapid7\InsightVM\Api\Model\ScanTemplate $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\CreateScanTemplate($requestBody), $fetch);
    }
    /**
     * Deletes a scan template.
     *
     * @param string $id The identifier of the scan template
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteScanTemplateUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteScanTemplateNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteScanTemplateInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteScanTemplateServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteScanTemplate(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteScanTemplate($id), $fetch);
    }
    /**
     * Returns a scan template.
     *
     * @param string $id The identifier of the scan template
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanTemplateUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanTemplateNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanTemplateInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanTemplateServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ScanTemplate|\Psr\Http\Message\ResponseInterface
     */
    public function getScanTemplate(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetScanTemplate($id), $fetch);
    }
    /**
     * Updates a scan template.
     *
     * @param string $id The identifier of the scan template
     * @param null|\Rapid7\InsightVM\Api\Model\ScanTemplate $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateScanTemplateBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateScanTemplateUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateScanTemplateNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateScanTemplateInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateScanTemplateServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateScanTemplate(string $id, ?\Rapid7\InsightVM\Api\Model\ScanTemplate $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateScanTemplate($id, $requestBody), $fetch);
    }
    /**
     * Returns all scans.
     *
     * @param array $queryParameters {
     *     @var bool $active Return running scans or past scans (true/false value).
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetScansUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScansNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScansInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScansServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfGlobalScan|\Psr\Http\Message\ResponseInterface
     */
    public function getScans(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetScans($queryParameters), $fetch);
    }
    /**
     * Returns the specified scan.
     *
     * @param int $id The identifier of the scan.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetScanServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Scan|\Psr\Http\Message\ResponseInterface
     */
    public function getScan(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetScan($id), $fetch);
    }
    /**
     * Updates the scan status. Can pause, resume, and stop scans using this resource. In order to stop a scan the scan must be running or paused. In order to resume a scan the scan must be paused. In order to pause a scan the scan must be running.
     *
     * @param int $id The identifier of the scan.
     * @param string $status The status of the scan.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetScanStatusBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetScanStatusUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetScanStatusInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetScanStatusServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setScanStatus(int $id, string $status, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetScanStatus($id, $status), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSharedCredentialsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSharedCredentialsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSharedCredentialsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSharedCredentialsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAllSharedCredentials(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteAllSharedCredentials(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSharedCredentialsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSharedCredentialsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSharedCredentialsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSharedCredentialsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesSharedCredential|\Psr\Http\Message\ResponseInterface
     */
    public function getSharedCredentials(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSharedCredentials(), $fetch);
    }
    /**
     * Creates a new shared credential.
     *
     * @param null|\Rapid7\InsightVM\Api\Model\SharedCredential $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSharedCredentialBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSharedCredentialUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSharedCredentialInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSharedCredentialServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\CreatedReferenceCredentialIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function createSharedCredential(?\Rapid7\InsightVM\Api\Model\SharedCredential $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\CreateSharedCredential($requestBody), $fetch);
    }
    /**
     * Deletes the specified shared scan credential.
     *
     * @param int $id The identifier of the credential.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSharedCredentialUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSharedCredentialNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSharedCredentialInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSharedCredentialServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSharedCredential(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteSharedCredential($id), $fetch);
    }
    /**
     * Retrieves the specified shared credential.
     *
     * @param int $id The identifier of the credential.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSharedCredentialUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSharedCredentialNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSharedCredentialInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSharedCredentialServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\SharedCredential|\Psr\Http\Message\ResponseInterface
     */
    public function getSharedCredential(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSharedCredential($id), $fetch);
    }
    /**
     * Updates the specified shared credential.
     *
     * @param int $id The identifier of the credential.
     * @param null|\Rapid7\InsightVM\Api\Model\SharedCredential $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSharedCredentialBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSharedCredentialUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSharedCredentialNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSharedCredentialInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSharedCredentialServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateSharedCredential(int $id, ?\Rapid7\InsightVM\Api\Model\SharedCredential $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateSharedCredential($id, $requestBody), $fetch);
    }
    /**
     * Retrieves a paged resource of accessible sites.
     *
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSitesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSitesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSitesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSitesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfSite|\Psr\Http\Message\ResponseInterface
     */
    public function getSites(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSites($queryParameters), $fetch);
    }
    /**
     * Creates a new site with the specified configuration.
     *
     * @param null|\Rapid7\InsightVM\Api\Model\SiteCreateResource $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferenceWithSiteIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function createSite(?\Rapid7\InsightVM\Api\Model\SiteCreateResource $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\CreateSite($requestBody), $fetch);
    }
    /**
     * site.delete.description
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSite(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteSite($id), $fetch);
    }
    /**
     * Retrieves the site with the specified identifier.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Site|\Psr\Http\Message\ResponseInterface
     */
    public function getSite(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSite($id), $fetch);
    }
    /**
     * Updates the configuration of the site with the specified identifier.
     *
     * @param int $id The identifier of the site.
     * @param null|\Rapid7\InsightVM\Api\Model\SiteUpdateResource $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateSite(int $id, ?\Rapid7\InsightVM\Api\Model\SiteUpdateResource $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateSite($id, $requestBody), $fetch);
    }
    /**
     * Deletes all alerts from the site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteAlertsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteAlertsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteAlertsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteAlertsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAllSiteAlerts(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteAllSiteAlerts($id), $fetch);
    }
    /**
     * Retrieve all alerts defined in the site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteAlertsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteAlertsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteAlertsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteAlertsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesAlert|\Psr\Http\Message\ResponseInterface
     */
    public function getSiteAlerts(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSiteAlerts($id), $fetch);
    }
    /**
     * Deletes all SMTP alerts from the site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteSmtpAlertsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteSmtpAlertsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteSmtpAlertsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteSmtpAlertsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAllSiteSmtpAlerts(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteAllSiteSmtpAlerts($id), $fetch);
    }
    /**
     * Retrieves all SMTP alerts defined in the site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSmtpAlertsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSmtpAlertsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSmtpAlertsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSmtpAlertsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesSmtpAlert|\Psr\Http\Message\ResponseInterface
     */
    public function getSiteSmtpAlerts(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSiteSmtpAlerts($id), $fetch);
    }
    /**
     * Creates a new SMTP alert for the specified site.
     *
     * @param int $id The identifier of the site.
     * @param null|\Rapid7\InsightVM\Api\Model\SmtpAlert $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteSmtpAlertBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteSmtpAlertUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteSmtpAlertInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteSmtpAlertServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferenceWithAlertIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function createSiteSmtpAlert(int $id, ?\Rapid7\InsightVM\Api\Model\SmtpAlert $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\CreateSiteSmtpAlert($id, $requestBody), $fetch);
    }
    /**
     * Updates all SMTP alerts for the specified site in a single request using the array of resources defined in the request body.
     *
     * @param int $id The identifier of the site.
     * @param null|\Rapid7\InsightVM\Api\Model\SmtpAlert[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteSmtpAlertsBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteSmtpAlertsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteSmtpAlertsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteSmtpAlertsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteSmtpAlertsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setSiteSmtpAlerts(int $id, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetSiteSmtpAlerts($id, $requestBody), $fetch);
    }
    /**
     * Deletes the specified SMTP alert from the site.
     *
     * @param int $id The identifier of the site.
     * @param int $alertId The identifier of the alert.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteSmtpAlertUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteSmtpAlertNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteSmtpAlertInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteSmtpAlertServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSiteSmtpAlert(int $id, int $alertId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteSiteSmtpAlert($id, $alertId), $fetch);
    }
    /**
     * Retrieves the specified SMTP alert.
     *
     * @param int $id The identifier of the site.
     * @param int $alertId The identifier of the alert.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSmtpAlertUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSmtpAlertNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSmtpAlertInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSmtpAlertServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\SmtpAlert|\Psr\Http\Message\ResponseInterface
     */
    public function getSiteSmtpAlert(int $id, int $alertId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSiteSmtpAlert($id, $alertId), $fetch);
    }
    /**
     * Updates the specified SMTP alert.
     *
     * @param int $id The identifier of the site.
     * @param int $alertId The identifier of the alert.
     * @param null|\Rapid7\InsightVM\Api\Model\SmtpAlert $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteSmtpAlertBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteSmtpAlertUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteSmtpAlertNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteSmtpAlertInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteSmtpAlertServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateSiteSmtpAlert(int $id, int $alertId, ?\Rapid7\InsightVM\Api\Model\SmtpAlert $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateSiteSmtpAlert($id, $alertId, $requestBody), $fetch);
    }
    /**
     * Deletes all SNMP alerts from the site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteSnmpAlertsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteSnmpAlertsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteSnmpAlertsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteSnmpAlertsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAllSiteSnmpAlerts(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteAllSiteSnmpAlerts($id), $fetch);
    }
    /**
     * Retrieves all SNMP alerts defined in the site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSnmpAlertsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSnmpAlertsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSnmpAlertsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSnmpAlertsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesSnmpAlert|\Psr\Http\Message\ResponseInterface
     */
    public function getSiteSnmpAlerts(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSiteSnmpAlerts($id), $fetch);
    }
    /**
     * Creates a new SNMP alert for the specified site.
     *
     * @param int $id The identifier of the site.
     * @param null|\Rapid7\InsightVM\Api\Model\SnmpAlert $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteSnmpAlertBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteSnmpAlertUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteSnmpAlertInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteSnmpAlertServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferenceWithAlertIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function createSiteSnmpAlert(int $id, ?\Rapid7\InsightVM\Api\Model\SnmpAlert $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\CreateSiteSnmpAlert($id, $requestBody), $fetch);
    }
    /**
     * Updates all SNMP alerts for the specified site in a single request using the array of resources defined in the request body.
     *
     * @param int $id The identifier of the site.
     * @param null|\Rapid7\InsightVM\Api\Model\SnmpAlert[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteSnmpAlertsBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteSnmpAlertsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteSnmpAlertsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteSnmpAlertsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteSnmpAlertsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setSiteSnmpAlerts(int $id, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetSiteSnmpAlerts($id, $requestBody), $fetch);
    }
    /**
     * Deletes the specified SNMP alert from the site.
     *
     * @param int $id The identifier of the site.
     * @param int $alertId The identifier of the alert.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteSnmpAlertUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteSnmpAlertNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteSnmpAlertInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteSnmpAlertServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSiteSnmpAlert(int $id, int $alertId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteSiteSnmpAlert($id, $alertId), $fetch);
    }
    /**
     * Retrieves the specified SNMP alert.
     *
     * @param int $id The identifier of the site.
     * @param int $alertId The identifier of the alert.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSnmpAlertUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSnmpAlertNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSnmpAlertInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSnmpAlertServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\SnmpAlert|\Psr\Http\Message\ResponseInterface
     */
    public function getSiteSnmpAlert(int $id, int $alertId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSiteSnmpAlert($id, $alertId), $fetch);
    }
    /**
     * Updates the specified SNMP alert.
     *
     * @param int $id The identifier of the site.
     * @param int $alertId The identifier of the alert.
     * @param null|\Rapid7\InsightVM\Api\Model\SnmpAlert $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteSnmpAlertBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteSnmpAlertUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteSnmpAlertNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteSnmpAlertInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteSnmpAlertServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateSiteSnmpAlert(int $id, int $alertId, ?\Rapid7\InsightVM\Api\Model\SnmpAlert $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateSiteSnmpAlert($id, $alertId, $requestBody), $fetch);
    }
    /**
     * Deletes all Syslog alerts from the site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteSyslogAlertsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteSyslogAlertsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteSyslogAlertsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteSyslogAlertsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAllSiteSyslogAlerts(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteAllSiteSyslogAlerts($id), $fetch);
    }
    /**
     * Retrieves all Syslog alerts defined in the site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSyslogAlertsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSyslogAlertsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSyslogAlertsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSyslogAlertsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesSyslogAlert|\Psr\Http\Message\ResponseInterface
     */
    public function getSiteSyslogAlerts(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSiteSyslogAlerts($id), $fetch);
    }
    /**
     * Creates a new Syslog alert for the specified site.
     *
     * @param int $id The identifier of the site.
     * @param null|\Rapid7\InsightVM\Api\Model\SyslogAlert $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteSyslogAlertBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteSyslogAlertUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteSyslogAlertInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteSyslogAlertServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferenceWithAlertIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function createSiteSyslogAlert(int $id, ?\Rapid7\InsightVM\Api\Model\SyslogAlert $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\CreateSiteSyslogAlert($id, $requestBody), $fetch);
    }
    /**
     * Updates all Syslog alerts for the specified site in a single request using the array of resources defined in the request body.
     *
     * @param int $id The identifier of the site.
     * @param null|\Rapid7\InsightVM\Api\Model\SyslogAlert[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteSyslogAlertsBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteSyslogAlertsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteSyslogAlertsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteSyslogAlertsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteSyslogAlertsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setSiteSyslogAlerts(int $id, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetSiteSyslogAlerts($id, $requestBody), $fetch);
    }
    /**
     * Deletes the specified Syslog alert from the site.
     *
     * @param int $id The identifier of the site.
     * @param int $alertId The identifier of the alert.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteSyslogAlertUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteSyslogAlertNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteSyslogAlertInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteSyslogAlertServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSiteSyslogAlert(int $id, int $alertId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteSiteSyslogAlert($id, $alertId), $fetch);
    }
    /**
     * Retrieves the specified Syslog alert.
     *
     * @param int $id The identifier of the site.
     * @param int $alertId The identifier of the alert.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSyslogAlertUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSyslogAlertNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSyslogAlertInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSyslogAlertServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\SyslogAlert|\Psr\Http\Message\ResponseInterface
     */
    public function getSiteSyslogAlert(int $id, int $alertId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSiteSyslogAlert($id, $alertId), $fetch);
    }
    /**
     * Updates the specified Syslog alert.
     *
     * @param int $id The identifier of the site.
     * @param int $alertId The identifier of the alert.
     * @param null|\Rapid7\InsightVM\Api\Model\SyslogAlert $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteSyslogAlertBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteSyslogAlertUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteSyslogAlertNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteSyslogAlertInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteSyslogAlertServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateSiteSyslogAlert(int $id, int $alertId, ?\Rapid7\InsightVM\Api\Model\SyslogAlert $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateSiteSyslogAlert($id, $alertId, $requestBody), $fetch);
    }
    /**
     * Removes an asset from a site. The asset will only be deleted if it belongs to no other sites.
     *
     * @param int $id The identifier of the site.
     * @param int $assetId The identifier of the asset.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetFromSiteUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetFromSiteNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetFromSiteInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAssetFromSiteServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeAssetFromSite(int $id, int $assetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveAssetFromSite($id, $assetId), $fetch);
    }
    /**
     * Retrieves the discovery connection assigned to the site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteDiscoveryConnectionUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteDiscoveryConnectionNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteDiscoveryConnectionInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteDiscoveryConnectionServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\SiteDiscoveryConnection|\Psr\Http\Message\ResponseInterface
     */
    public function getSiteDiscoveryConnection(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSiteDiscoveryConnection($id), $fetch);
    }
    /**
     * Updates the discovery connection assigned to the site.
     *
     * @param int $id The identifier of the site.
     * @param null|mixed $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteDiscoveryConnectionBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteDiscoveryConnectionUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteDiscoveryConnectionNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteDiscoveryConnectionInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteDiscoveryConnectionServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setSiteDiscoveryConnection(int $id, $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetSiteDiscoveryConnection($id, $requestBody), $fetch);
    }
    /**
     * Retrieve the search criteria of the dynamic site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteDiscoverySearchCriteriaUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteDiscoverySearchCriteriaNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteDiscoverySearchCriteriaInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteDiscoverySearchCriteriaServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\DiscoverySearchCriteria|\Psr\Http\Message\ResponseInterface
     */
    public function getSiteDiscoverySearchCriteria(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSiteDiscoverySearchCriteria($id), $fetch);
    }
    /**
     * Update the search criteria of the dynamic site.
     *
     * @param int $id The identifier of the site.
     * @param \Rapid7\InsightVM\Api\Model\DiscoverySearchCriteria $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteDiscoverySearchCriteriaBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteDiscoverySearchCriteriaUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteDiscoverySearchCriteriaNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteDiscoverySearchCriteriaInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteDiscoverySearchCriteriaServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setSiteDiscoverySearchCriteria(int $id, \Rapid7\InsightVM\Api\Model\DiscoverySearchCriteria $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetSiteDiscoverySearchCriteria($id, $requestBody), $fetch);
    }
    /**
     * Removes all excluded asset groups from the specified static site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllExcludedAssetGroupsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllExcludedAssetGroupsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllExcludedAssetGroupsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllExcludedAssetGroupsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeAllExcludedAssetGroups(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveAllExcludedAssetGroups($id), $fetch);
    }
    /**
     * Retrieves the excluded asset groups in a static site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetExcludedAssetGroupsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetExcludedAssetGroupsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetExcludedAssetGroupsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetExcludedAssetGroupsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesAssetGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getExcludedAssetGroups(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetExcludedAssetGroups($id), $fetch);
    }
    /**
     * Updates the excluded asset groups in a static site.
     *
     * @param int $id The identifier of the site.
     * @param null|array[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateExcludedAssetGroupsBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateExcludedAssetGroupsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateExcludedAssetGroupsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateExcludedAssetGroupsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateExcludedAssetGroupsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateExcludedAssetGroups(int $id, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateExcludedAssetGroups($id, $requestBody), $fetch);
    }
    /**
     * Removes the specified asset group from the excluded asset groups configured in the static site.
     *
     * @param int $id The identifier of the site.
     * @param int $assetGroupId The identifier of the asset group.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveExcludedAssetGroupUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveExcludedAssetGroupNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveExcludedAssetGroupInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveExcludedAssetGroupServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeExcludedAssetGroup(int $id, int $assetGroupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveExcludedAssetGroup($id, $assetGroupId), $fetch);
    }
    /**
     * Retrieves the excluded targets in a static site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetExcludedTargetsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetExcludedTargetsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetExcludedTargetsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetExcludedTargetsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ScanTargetsResource|\Psr\Http\Message\ResponseInterface
     */
    public function getExcludedTargets(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetExcludedTargets($id), $fetch);
    }
    /**
     * Updates the excluded targets in a static site.
     *
     * @param int $id The identifier of the site.
     * @param null|array[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateExcludedTargetsBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateExcludedTargetsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateExcludedTargetsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateExcludedTargetsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateExcludedTargetsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateExcludedTargets(int $id, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateExcludedTargets($id, $requestBody), $fetch);
    }
    /**
     * Removes all included asset groups from the specified static site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllIncludedAssetGroupsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllIncludedAssetGroupsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllIncludedAssetGroupsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllIncludedAssetGroupsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeAllIncludedAssetGroups(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveAllIncludedAssetGroups($id), $fetch);
    }
    /**
     * Retrieves the included asset groups in a static site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetIncludedAssetGroupsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetIncludedAssetGroupsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetIncludedAssetGroupsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetIncludedAssetGroupsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesAssetGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getIncludedAssetGroups(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetIncludedAssetGroups($id), $fetch);
    }
    /**
     * Updates the included asset groups in a static site.
     *
     * @param int $id The identifier of the site.
     * @param null|array[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateIncludedAssetGroupsBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateIncludedAssetGroupsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateIncludedAssetGroupsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateIncludedAssetGroupsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateIncludedAssetGroupsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateIncludedAssetGroups(int $id, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateIncludedAssetGroups($id, $requestBody), $fetch);
    }
    /**
     * Removes the specified asset group from the included asset groups configured in the static site.
     *
     * @param int $id The identifier of the site.
     * @param int $assetGroupId The identifier of the asset group.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveIncludedAssetGroupUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveIncludedAssetGroupNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveIncludedAssetGroupInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveIncludedAssetGroupServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeIncludedAssetGroup(int $id, int $assetGroupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveIncludedAssetGroup($id, $assetGroupId), $fetch);
    }
    /**
     * Retrieves the included targets in a static site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetIncludedTargetsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetIncludedTargetsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetIncludedTargetsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetIncludedTargetsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ScanTargetsResource|\Psr\Http\Message\ResponseInterface
     */
    public function getIncludedTargets(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetIncludedTargets($id), $fetch);
    }
    /**
     * Updates the included targets in a static site.
     *
     * @param int $id The identifier of the site.
     * @param null|array[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateIncludedTargetsBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateIncludedTargetsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateIncludedTargetsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateIncludedTargetsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateIncludedTargetsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateIncludedTargets(int $id, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateIncludedTargets($id, $requestBody), $fetch);
    }
    /**
     * Retrieves the site organization information.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteOrganizationUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteOrganizationNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteOrganizationInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteOrganizationServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\SiteOrganization|\Psr\Http\Message\ResponseInterface
     */
    public function getSiteOrganization(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSiteOrganization($id), $fetch);
    }
    /**
     * Updates the site organization information.
     *
     * @param int $id The identifier of the site.
     * @param null|\Rapid7\InsightVM\Api\Model\SiteOrganization $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteOrganizationBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteOrganizationUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteOrganizationNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteOrganizationInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteOrganizationServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateSiteOrganization(int $id, ?\Rapid7\InsightVM\Api\Model\SiteOrganization $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateSiteOrganization($id, $requestBody), $fetch);
    }
    /**
     * Retrieves the resource of the scan engine assigned to the site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteScanEngineUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteScanEngineNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteScanEngineInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteScanEngineServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ScanEngine|\Psr\Http\Message\ResponseInterface
     */
    public function getSiteScanEngine(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSiteScanEngine($id), $fetch);
    }
    /**
     * Updates the assigned scan engine to the site.
     *
     * @param int $id The identifier of the site.
     * @param null|mixed $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteScanEngineBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteScanEngineUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteScanEngineNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteScanEngineInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteScanEngineServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setSiteScanEngine(int $id, $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetSiteScanEngine($id, $requestBody), $fetch);
    }
    /**
     * Deletes all scan schedules from the site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteScanSchedulesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteScanSchedulesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteScanSchedulesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteScanSchedulesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAllSiteScanSchedules(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteAllSiteScanSchedules($id), $fetch);
    }
    /**
     * Returns all scan schedules for the site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteScanSchedulesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteScanSchedulesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteScanSchedulesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteScanSchedulesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesScanSchedule|\Psr\Http\Message\ResponseInterface
     */
    public function getSiteScanSchedules(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSiteScanSchedules($id), $fetch);
    }
    /**
     * Creates a new scan schedule for the specified site.
     *
     * @param int $id The identifier of the site.
     * @param null|\Rapid7\InsightVM\Api\Model\ScanSchedule $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteScanScheduleBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteScanScheduleUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteScanScheduleInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteScanScheduleServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferenceWithScanScheduleIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function createSiteScanSchedule(int $id, ?\Rapid7\InsightVM\Api\Model\ScanSchedule $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\CreateSiteScanSchedule($id, $requestBody), $fetch);
    }
    /**
     * Updates all scan schedules for the specified site in a single request using the array of resources defined in the request body.
     *
     * @param int $id The identifier of the site.
     * @param null|\Rapid7\InsightVM\Api\Model\ScanSchedule[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteScanSchedulesBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteScanSchedulesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteScanSchedulesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteScanSchedulesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteScanSchedulesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setSiteScanSchedules(int $id, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetSiteScanSchedules($id, $requestBody), $fetch);
    }
    /**
     * Deletes the specified scan schedule from the site.
     *
     * @param int $id The identifier of the site.
     * @param int $scheduleId The identifier of the scan schedule.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteScanScheduleUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteScanScheduleNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteScanScheduleInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteScanScheduleServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSiteScanSchedule(int $id, int $scheduleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteSiteScanSchedule($id, $scheduleId), $fetch);
    }
    /**
     * Retrieves the specified scan schedule.
     *
     * @param int $id The identifier of the site.
     * @param int $scheduleId The identifier of the scan schedule.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteScanScheduleUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteScanScheduleNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteScanScheduleInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteScanScheduleServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ScanSchedule|\Psr\Http\Message\ResponseInterface
     */
    public function getSiteScanSchedule(int $id, int $scheduleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSiteScanSchedule($id, $scheduleId), $fetch);
    }
    /**
     * Updates the specified scan schedule.
     *
     * @param int $id The identifier of the site.
     * @param int $scheduleId The identifier of the scan schedule.
     * @param null|\Rapid7\InsightVM\Api\Model\ScanSchedule $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteScanScheduleBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteScanScheduleUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteScanScheduleNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteScanScheduleInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteScanScheduleServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateSiteScanSchedule(int $id, int $scheduleId, ?\Rapid7\InsightVM\Api\Model\ScanSchedule $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateSiteScanSchedule($id, $scheduleId, $requestBody), $fetch);
    }
    /**
     * Retrieves the resource of the scan template assigned to the site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteScanTemplateUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteScanTemplateNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteScanTemplateInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteScanTemplateServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ScanTemplate|\Psr\Http\Message\ResponseInterface
     */
    public function getSiteScanTemplate(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSiteScanTemplate($id), $fetch);
    }
    /**
     * Updates the assigned scan template to the site.
     *
     * @param int $id The identifier of the site.
     * @param null|string $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteScanTemplateBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteScanTemplateUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteScanTemplateNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteScanTemplateInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteScanTemplateServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setSiteScanTemplate(int $id, ?string $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetSiteScanTemplate($id, $requestBody), $fetch);
    }
    /**
     * Returns the scans for the specified site.
     *
     * @param int $id The identifier of the site.
     * @param array $queryParameters {
     *     @var bool $active Return running scans or past scans (true/false value).
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteScansUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteScansNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteScansInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteScansServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfScan|\Psr\Http\Message\ResponseInterface
     */
    public function getSiteScans(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSiteScans($id, $queryParameters), $fetch);
    }
    /**
     * Starts a scan for the specified site.
     *
     * @param int $id The identifier of the site.
     * @param null|\Rapid7\InsightVM\Api\Model\AdhocScan $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\StartScanBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\StartScanUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\StartScanInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\StartScanServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\CreatedReferenceScanIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function startScan(int $id, ?\Rapid7\InsightVM\Api\Model\AdhocScan $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\StartScan($id, $requestBody), $fetch);
    }
    /**
     * Retrieve all of the shared credentials assigned to the site. These shared credentials can be enabled/disabled for the site's scan.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSharedCredentialsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSharedCredentialsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSharedCredentialsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteSharedCredentialsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesSiteSharedCredential|\Psr\Http\Message\ResponseInterface
     */
    public function getSiteSharedCredentials(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSiteSharedCredentials($id), $fetch);
    }
    /**
     * Enable or disable the shared credential for the site's scans.
     *
     * @param int $id The identifier of the site.
     * @param int $credentialId The identifier of the shared credential.
     * @param null|bool $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\EnableSharedCredentialOnSiteBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\EnableSharedCredentialOnSiteUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\EnableSharedCredentialOnSiteNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\EnableSharedCredentialOnSiteInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\EnableSharedCredentialOnSiteServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function enableSharedCredentialOnSite(int $id, int $credentialId, ?bool $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\EnableSharedCredentialOnSite($id, $credentialId, $requestBody), $fetch);
    }
    /**
     * Deletes all site credentials from the site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteCredentialsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteCredentialsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteCredentialsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteAllSiteCredentialsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAllSiteCredentials(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteAllSiteCredentials($id), $fetch);
    }
    /**
     * Retrieves all defined site credential resources.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteCredentialsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteCredentialsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteCredentialsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteCredentialsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesSiteCredential|\Psr\Http\Message\ResponseInterface
     */
    public function getSiteCredentials(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSiteCredentials($id), $fetch);
    }
    /**
     * Creates a new site credential.
     *
     * @param int $id The identifier of the site.
     * @param null|\Rapid7\InsightVM\Api\Model\SiteCredential $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteCredentialBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteCredentialUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteCredentialInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSiteCredentialServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\CreatedReferenceCredentialIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function createSiteCredential(int $id, ?\Rapid7\InsightVM\Api\Model\SiteCredential $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\CreateSiteCredential($id, $requestBody), $fetch);
    }
    /**
     * Updates multiple site credentials.
     *
     * @param int $id The identifier of the site.
     * @param null|\Rapid7\InsightVM\Api\Model\SiteCredential[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteCredentialsBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteCredentialsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteCredentialsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteCredentialsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteCredentialsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setSiteCredentials(int $id, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetSiteCredentials($id, $requestBody), $fetch);
    }
    /**
     * Deletes the specified site credential.
     *
     * @param int $id The identifier of the site.
     * @param int $credentialId The identifier of the site credential.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteCredentialUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteCredentialNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteCredentialInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSiteCredentialServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSiteCredential(int $id, int $credentialId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteSiteCredential($id, $credentialId), $fetch);
    }
    /**
     * Retrieves the specified site credential.
     *
     * @param int $id The identifier of the site.
     * @param int $credentialId The identifier of the site credential.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteCredentialUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteCredentialNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteCredentialInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteCredentialServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\SiteCredential|\Psr\Http\Message\ResponseInterface
     */
    public function getSiteCredential(int $id, int $credentialId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSiteCredential($id, $credentialId), $fetch);
    }
    /**
     * Updates the specified site credential.
     *
     * @param int $id The identifier of the site.
     * @param int $credentialId The identifier of the site credential.
     * @param null|\Rapid7\InsightVM\Api\Model\SiteCredential $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteCredentialBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteCredentialUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteCredentialNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteCredentialInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSiteCredentialServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateSiteCredential(int $id, int $credentialId, ?\Rapid7\InsightVM\Api\Model\SiteCredential $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateSiteCredential($id, $credentialId, $requestBody), $fetch);
    }
    /**
     * Enable or disable the site credential for scans.
     *
     * @param int $id The identifier of the site.
     * @param int $credentialId The identifier of the site credential.
     * @param null|bool $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\EnableSiteCredentialBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\EnableSiteCredentialUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\EnableSiteCredentialNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\EnableSiteCredentialInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\EnableSiteCredentialServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function enableSiteCredential(int $id, int $credentialId, ?bool $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\EnableSiteCredential($id, $credentialId, $requestBody), $fetch);
    }
    /**
     * Retrieves the list of tags added to the sites.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteTagsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteTagsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteTagsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteTagsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesTag|\Psr\Http\Message\ResponseInterface
     */
    public function getSiteTags(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSiteTags($id), $fetch);
    }
    /**
     * Updates the site's list of tags.
     *
     * @param int $id The identifier of the site.
     * @param null|array[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteTagsBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteTagsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteTagsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteTagsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteTagsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setSiteTags(int $id, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetSiteTags($id, $requestBody), $fetch);
    }
    /**
     * Removes the specified tag from the site's tags.
     *
     * @param int $id The identifier of the site.
     * @param int $tagId The identifier of the tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveSiteTagUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveSiteTagNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveSiteTagInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveSiteTagServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeSiteTag(int $id, int $tagId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveSiteTag($id, $tagId), $fetch);
    }
    /**
     * Adds a tag to the site.
     *
     * @param int $id The identifier of the site.
     * @param int $tagId The identifier of the tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\AddSiteTagBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\AddSiteTagUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\AddSiteTagNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\AddSiteTagInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\AddSiteTagServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function addSiteTag(int $id, int $tagId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\AddSiteTag($id, $tagId), $fetch);
    }
    /**
     * Retrieve the list of non-administrator users that have access to the site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteUsersUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteUsersNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteUsersInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSiteUsersServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesUser|\Psr\Http\Message\ResponseInterface
     */
    public function getSiteUsers(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSiteUsers($id), $fetch);
    }
    /**
     * Grants a non-administrator user access to the specified site.
     *
     * @param int $id The identifier of the site.
     * @param null|mixed $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\AddSiteUserBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\AddSiteUserUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\AddSiteUserInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\AddSiteUserServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferenceWithUserIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function addSiteUser(int $id, $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\AddSiteUser($id, $requestBody), $fetch);
    }
    /**
     * Updates the site's access list.
     *
     * @param int $id The identifier of the site.
     * @param null|array[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteUsersBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteUsersUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteUsersNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteUsersInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetSiteUsersServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setSiteUsers(int $id, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetSiteUsers($id, $requestBody), $fetch);
    }
    /**
     * Removes the specified user from the site's access list.
     *
     * @param int $id The identifier of the site.
     * @param int $userId The identifier of the user.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveSiteUserUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveSiteUserNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveSiteUserInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveSiteUserServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeSiteUser(int $id, int $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveSiteUser($id, $userId), $fetch);
    }
    /**
     * Retrieves all HTML form authentications configured in the site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetWebAuthHtmlFormsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetWebAuthHtmlFormsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetWebAuthHtmlFormsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetWebAuthHtmlFormsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesWebFormAuthentication|\Psr\Http\Message\ResponseInterface
     */
    public function getWebAuthHtmlForms(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetWebAuthHtmlForms($id), $fetch);
    }
    /**
     * Retrieves all HTTP header authentications configured in the site.
     *
     * @param int $id The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetWebAuthHTTPHeadersUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetWebAuthHTTPHeadersNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetWebAuthHTTPHeadersInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetWebAuthHTTPHeadersServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesWebHeaderAuthentication|\Psr\Http\Message\ResponseInterface
     */
    public function getWebAuthHTTPHeaders(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetWebAuthHTTPHeaders($id), $fetch);
    }
    /**
     * Returns all software enumerated on any asset.
     *
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSoftwaresUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSoftwaresNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSoftwaresInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSoftwaresServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfSoftware|\Psr\Http\Message\ResponseInterface
     */
    public function getSoftwares(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSoftwares($queryParameters), $fetch);
    }
    /**
     * Returns the details for software.
     *
     * @param int $id The identifier of the software.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSoftwareUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSoftwareNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSoftwareInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSoftwareServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Software|\Psr\Http\Message\ResponseInterface
     */
    public function getSoftware(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSoftware($id), $fetch);
    }
    /**
     * Returns the details for all solutions.
     *
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSolutionsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSolutionsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSolutionsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSolutionsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesSolution|\Psr\Http\Message\ResponseInterface
     */
    public function getSolutions(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSolutions($queryParameters), $fetch);
    }
    /**
     * Returns the details for a solution that can remediate one or more vulnerabilities.
     *
     * @param string $id The identifier of the solution.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSolutionUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSolutionNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSolutionInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSolutionServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Solution|\Psr\Http\Message\ResponseInterface
     */
    public function getSolution(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSolution($id), $fetch);
    }
    /**
     * Returns the solutions that must be executed in order for a solution to resolve a vulnerability.
     *
     * @param string $id The identifier of the solution.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetPrerequisiteSolutionsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPrerequisiteSolutionsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPrerequisiteSolutionsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetPrerequisiteSolutionsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithSolutionNaturalIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function getPrerequisiteSolutions(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetPrerequisiteSolutions($id), $fetch);
    }
    /**
     * Returns the solutions that are superseded by this solution.
     *
     * @param string $id The identifier of the solution.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSupersededSolutionsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSupersededSolutionsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSupersededSolutionsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSupersededSolutionsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesSolution|\Psr\Http\Message\ResponseInterface
     */
    public function getSupersededSolutions(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSupersededSolutions($id), $fetch);
    }
    /**
     * Returns the solutions that supersede this solution.
     *
     * @param string $id The identifier of the solution.
     * @param array $queryParameters {
     *     @var bool $rollup Whether to return only highest-level "rollup" superseding solutions.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSupersedingSolutionsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSupersedingSolutionsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSupersedingSolutionsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSupersedingSolutionsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesSolution|\Psr\Http\Message\ResponseInterface
     */
    public function getSupersedingSolutions(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSupersedingSolutions($id, $queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSonarQueriesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSonarQueriesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSonarQueriesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSonarQueriesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesSonarQuery|\Psr\Http\Message\ResponseInterface
     */
    public function getSonarQueries(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSonarQueries(), $fetch);
    }
    /**
     * Creates a sonar query.
     *
     * @param \Rapid7\InsightVM\Api\Model\SonarQuery $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSonarQueryBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSonarQueryUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSonarQueryInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateSonarQueryServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\CreatedReferenceDiscoveryQueryIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function createSonarQuery(\Rapid7\InsightVM\Api\Model\SonarQuery $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\CreateSonarQuery($requestBody), $fetch);
    }
    /**
     * Executes a Sonar query to discover assets with the given search criteria.
     *
     * @param \Rapid7\InsightVM\Api\Model\SonarCriteria $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SonarQuerySearchBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SonarQuerySearchUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SonarQuerySearchInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SonarQuerySearchServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\DiscoveryAsset[]|\Psr\Http\Message\ResponseInterface
     */
    public function sonarQuerySearch(\Rapid7\InsightVM\Api\Model\SonarCriteria $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SonarQuerySearch($requestBody), $fetch);
    }
    /**
     * Removes a sonar query.
     *
     * @param int $id The identifier of the Sonar query.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSonarQueryUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSonarQueryNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSonarQueryInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteSonarQueryServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSonarQuery(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteSonarQuery($id), $fetch);
    }
    /**
     * Returns a sonar query.
     *
     * @param int $id The identifier of the Sonar query.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSonarQueryUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSonarQueryNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSonarQueryInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSonarQueryServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\SonarQuery|\Psr\Http\Message\ResponseInterface
     */
    public function getSonarQuery(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSonarQuery($id), $fetch);
    }
    /**
     * Updates a sonar query.
     *
     * @param int $id The identifier of the Sonar query.
     * @param \Rapid7\InsightVM\Api\Model\SonarQuery $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSonarQueryBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSonarQueryUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSonarQueryNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSonarQueryInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateSonarQueryServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateSonarQuery(int $id, \Rapid7\InsightVM\Api\Model\SonarQuery $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateSonarQuery($id, $requestBody), $fetch);
    }
    /**
     * Returns the assets that are discovered by a Sonar query.
     *
     * @param int $id The identifier of the Sonar query.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetSonarQueryAssetsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSonarQueryAssetsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSonarQueryAssetsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetSonarQueryAssetsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ResourcesDiscoveryAsset|\Psr\Http\Message\ResponseInterface
     */
    public function getSonarQueryAssets(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetSonarQueryAssets($id), $fetch);
    }
    /**
     * Returns all tags.
     *
     * @param array $queryParameters {
     *     @var string $name name
     *     @var string $type type
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetTagsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetTagsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetTagsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetTagsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfTag|\Psr\Http\Message\ResponseInterface
     */
    public function getTags(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetTags($queryParameters), $fetch);
    }
    /**
     * Creates a new tag.
     *
     * @param null|\Rapid7\InsightVM\Api\Model\Tag $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\CreateTagBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateTagUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateTagInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateTagServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferenceWithTagIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function createTag(?\Rapid7\InsightVM\Api\Model\Tag $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\CreateTag($requestBody), $fetch);
    }
    /**
     * Deletes the tag.
     *
     * @param int $id The identifier of the tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteTagUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteTagNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteTagInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\DeleteTagServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTag(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\DeleteTag($id), $fetch);
    }
    /**
     * Returns a tag.
     *
     * @param int $id The identifier of the tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetTagUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetTagNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetTagInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetTagServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Tag|\Psr\Http\Message\ResponseInterface
     */
    public function getTag(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetTag($id), $fetch);
    }
    /**
     * Updates the details of a tag. For more information about accepted fields for the tag search criteria see the PUT /search_criteria documentation.
     *
     * @param int $id The identifier of the tag.
     * @param null|\Rapid7\InsightVM\Api\Model\Tag $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateTagBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateTagUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateTagNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateTagInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateTagServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateTag(int $id, ?\Rapid7\InsightVM\Api\Model\Tag $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateTag($id, $requestBody), $fetch);
    }
    /**
     * Removes the associations between the tag and all asset groups.
     *
     * @param int $id The identifier of the tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UntagAllAssetGroupsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UntagAllAssetGroupsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UntagAllAssetGroupsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UntagAllAssetGroupsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function untagAllAssetGroups(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UntagAllAssetGroups($id), $fetch);
    }
    /**
     * Returns the asset groups associated with the tag.
     *
     * @param int $id The identifier of the tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetTagAssetGroupsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetTagAssetGroupsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetTagAssetGroupsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetTagAssetGroupsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithAssetGroupIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function getTagAssetGroups(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetTagAssetGroups($id), $fetch);
    }
    /**
     * Sets the asset groups associated with the tag.
     *
     * @param int $id The identifier of the tag.
     * @param null|array[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetTaggedAssetGroupsBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetTaggedAssetGroupsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetTaggedAssetGroupsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\SetTaggedAssetGroupsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetTaggedAssetGroupsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setTaggedAssetGroups(int $id, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetTaggedAssetGroups($id, $requestBody), $fetch);
    }
    /**
     * Removes an asset group from this tag.
     *
     * @param int $id The identifier of the tag.
     * @param int $assetGroupId The asset group identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UntagAssetGroupUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UntagAssetGroupNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UntagAssetGroupInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UntagAssetGroupServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function untagAssetGroup(int $id, int $assetGroupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UntagAssetGroup($id, $assetGroupId), $fetch);
    }
    /**
     * Adds an asset group to this tag.
     *
     * @param int $id The identifier of the tag.
     * @param int $assetGroupId The asset group identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\TagAssetGroupBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\TagAssetGroupUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\TagAssetGroupNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\TagAssetGroupInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\TagAssetGroupServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function tagAssetGroup(int $id, int $assetGroupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\TagAssetGroup($id, $assetGroupId), $fetch);
    }
    /**
     * Returns the assets tagged with a tag.
     *
     * @param int $id The identifier of the tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetTaggedAssetsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetTaggedAssetsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetTaggedAssetsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetTaggedAssetsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\TaggedAssetReferences|\Psr\Http\Message\ResponseInterface
     */
    public function getTaggedAssets(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetTaggedAssets($id), $fetch);
    }
    /**
     * Removes an asset from the tag. Note: The asset must be added through the asset or tag, if the asset is added using a site, asset group, or search criteria this will not remove the asset.
     *
     * @param int $id The identifier of the tag.
     * @param int $assetId The identifier of the asset.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UntagAssetUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UntagAssetNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UntagAssetInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UntagAssetServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function untagAsset(int $id, int $assetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UntagAsset($id, $assetId), $fetch);
    }
    /**
     * Adds an asset to the tag.
     *
     * @param int $id The identifier of the tag.
     * @param int $assetId The identifier of the asset.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\TagAssetBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\TagAssetUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\TagAssetNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\TagAssetInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\TagAssetServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function tagAsset(int $id, int $assetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\TagAsset($id, $assetId), $fetch);
    }
    /**
     * Removes the search criteria associated with the tag.
     *
     * @param int $id The identifier of the tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveTagSearchCriteriaUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveTagSearchCriteriaNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveTagSearchCriteriaInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveTagSearchCriteriaServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeTagSearchCriteria(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveTagSearchCriteria($id), $fetch);
    }
    /**
     * Returns the search criteria associated with the tag.
     *
     * @param int $id The identifier of the tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetTagSearchCriteriaUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetTagSearchCriteriaNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetTagSearchCriteriaInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetTagSearchCriteriaServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\SearchCriteria|\Psr\Http\Message\ResponseInterface
     */
    public function getTagSearchCriteria(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetTagSearchCriteria($id), $fetch);
    }
    /**
    * Updates the search criteria associated with the tag.
    
    The following table outlines the search criteria fields and the available operators:
    | Field | Operators |
    | ---------- | ---------------- |
    | asset name | is,is not,starts with,ends with,contains,does not contain,is empty,is not empty,is like,not like |
    | asset risk score | is,is not,in range,greater than,less than |
    | container image | is,is not,starts with,ends with,contains,does not contain,is like,not like |
    | container status | is,is not |
    | containers | are |
    | CVE IDs | is,is not,contains,does not contain |
    | CVSS Access Complexity | is,is not |
    | CVSS Authentication Required | is,is not |
    | CVSS Access Vector | is,is not |
    | CVSS Availability Impact | is,is not |
    | CVSS Confidentiality Impact | is,is not |
    | CVSS Integrity Impact | is,is not |
    | CVSS Access Complexity | is,is not |
    | host type | in,not in |
    | asset IP Address | is,is not,in range,not in range,is like,not like |
    | asset IP Address Type | in,not in |
    | asset last scan date | is on or before,is on or after,is between,is earlier than,is within the last |
    | mobile device last sync time | is within the last,is earlier than |
    | open ports | is,is not,in range |
    | asset operating system | contains,does not contain,is empty,is not empty |
    | asset alternate address type | in |
    | asset PCI compliance | is |
    | asset service name | contains,does not contain |
    | asset site ID | in,not in |
    | asset software | contains,does not contain|
    | asset Criticality tag | is,is not,is greater than,is less than,is applied,is not applied |
    | asset Custom tag | is,is not,starts with, ends with,contains,does not contain,is applied,is not applied |
    | asset Location tag | is,is not,starts with,ends with,contains,does not contain,is applied,is not applied |
    | asset Owner tag | is,is not,starts with,ends with,contains,does not contain,is applied,is not applied |
    | asset vulnerability validated status | are |
    | asset VAsset cluster | is,is not,contains,does not contain,starts with |
    | asset VAsset datacenter | is,is not |
    | asset VAsset host name | is,is not,contains,does not contain,starts with |
    | asset VAsset power state | in,not in |
    | asset VAsset resource pool path | contains,does not contain |
    | asset vulnerability assessed | is on or before,is on or after,is between,is earlier than,is within the last |
    | asset vulnerability category | is,is not,starts with,ends with,contains,does not contain|
    | asset vulnerability CVSS score | is,is not,in range,is greater than,is less than |
    | asset vulnerability exposures | includes,does not include |
    | asset vulnerability title | contains,does not contain,is,is not,starts with,ends with |
    
    The following table outlines the operators and the values associated with them:
    | Operator | Values |
    | -------- | ------ |
    | are | A single string property named "value" |
    | is between | A number property named "lower" and a number property named "upper" |
    | contains | A single string property named "value" |
    | does not contain | A single string property named "value" |
    | is earlier than | A single number property named "value" |
    | ends with | A single string property named "value" |
    | is greater than | A single number property named "value" |
    | in | An array property named "values" |
    | not in | An array property named "values" |
    | in range | A number property named "lower" and a number property named "upper" |
    | includes | An array property named "values" |
    | is | A single string property named "value" |
    | is not | A single string property named "value" |
    | is applied | No value |
    | is not applied | No value |
    | is empty | No value |
    | is not empty | No value |
    | less than | A single number property named "value" |
    | like | A single string property named "value" |
    | not contains | A single string property named "value" |
    | not in range | A number property named "lower" and a number property named "upper" |
    | not like | A single string property named "value" |
    | is on or after | A single string property named "value", which is the date in ISO8601 format (yyyy-MM-dd) |
    | is on or before | A single string property named "value", which is the date in ISO8601 format (yyyy-MM-dd) |
    | starts with | A single string property named "value" |
    | is within the last | A single number property named "value" |
    
    The following fields have enumerated values:
    | Field | Acceptable Values |
    | ----- | ----------------- |
    | containers | 0=present, 1=not present |
    | asset vulnerability validated status | 0=present, 1=not present |
    | asset PCI compliance | 0=fail, 1=pass |
    | asset alternate address type | 0=IPv4, 1=IPv6 |
    | asset IP Address Type | 0=IPv4, 1=IPv6 |
    | host type | 0=Unknown, 1=Guest, 2=Hypervisor, 3=Physical, 4=Mobile |
    | CVSS Access Complexity | L=Low, M=Medium, H=High |
    | CVSS Integrity Impact | N=None, P=Partial, C=Complete |
    | CVSS Confidentiality Impact | N=None, P=Partial, C=Complete |
    | CVSS Availability Impact | N=None, P=Partial, C=Complete |
    | CVSS Access Vector | L=Local, A=Adjacent, N=Network |
    | CVSS Authentication Required | N=None, S=Single, M=Multiple |
    | CVSS Access Complexity | L=Low, M=Medium, H=High |
    | container status | created, running, paused, restarting, exited, dead, unknown |
    
    *
    * @param int $id The identifier of the tag.
    * @param null|\Rapid7\InsightVM\Api\Model\SearchCriteria $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Rapid7\InsightVM\Api\Exception\UpdateTagSearchCriteriaBadRequestException
    * @throws \Rapid7\InsightVM\Api\Exception\UpdateTagSearchCriteriaUnauthorizedException
    * @throws \Rapid7\InsightVM\Api\Exception\UpdateTagSearchCriteriaNotFoundException
    * @throws \Rapid7\InsightVM\Api\Exception\UpdateTagSearchCriteriaInternalServerErrorException
    * @throws \Rapid7\InsightVM\Api\Exception\UpdateTagSearchCriteriaServiceUnavailableException
    *
    * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
    */
    public function updateTagSearchCriteria(int $id, ?\Rapid7\InsightVM\Api\Model\SearchCriteria $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateTagSearchCriteria($id, $requestBody), $fetch);
    }
    /**
     * Removes the associations between the tag and the sites.
     *
     * @param int $id The identifier of the tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveTaggedSitesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveTaggedSitesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveTaggedSitesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveTaggedSitesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeTaggedSites(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveTaggedSites($id), $fetch);
    }
    /**
     * Returns the sites associated with the tag.
     *
     * @param int $id The identifier of the tag.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetTaggedSitesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetTaggedSitesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetTaggedSitesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetTaggedSitesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithSiteIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function getTaggedSites(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetTaggedSites($id), $fetch);
    }
    /**
     * Sets the sites associated with the tag.
     *
     * @param int $id The identifier of the tag.
     * @param null|array[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetTaggedSitesBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetTaggedSitesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetTaggedSitesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\SetTaggedSitesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetTaggedSitesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setTaggedSites(int $id, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetTaggedSites($id, $requestBody), $fetch);
    }
    /**
     * Removes a site from this tag.
     *
     * @param int $id The identifier of the tag.
     * @param int $siteId The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UntagSiteUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UntagSiteNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UntagSiteInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UntagSiteServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function untagSite(int $id, int $siteId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UntagSite($id, $siteId), $fetch);
    }
    /**
     * Adds a site to this tag.
     *
     * @param int $id The identifier of the tag.
     * @param int $siteId The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\TagSiteBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\TagSiteUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\TagSiteNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\TagSiteInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\TagSiteServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function tagSite(int $id, int $siteId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\TagSite($id, $siteId), $fetch);
    }
    /**
     * Returns all defined users. <span class="authorization">Global Administrator</span>
     *
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetUsersUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetUsersNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetUsersInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetUsersServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfUser|\Psr\Http\Message\ResponseInterface
     */
    public function getUsers(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetUsers($queryParameters), $fetch);
    }
    /**
     * Creates a new user. <span class="authorization">Global Administrator</span>
     *
     * @param null|\Rapid7\InsightVM\Api\Model\User $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\CreateUserBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateUserUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateUserInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateUserServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\CreatedReferenceUserIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function createUser(?\Rapid7\InsightVM\Api\Model\User $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\CreateUser($requestBody), $fetch);
    }
    /**
     * Returns the details for a user.<span class="authorization">Global Administrator, Current User</span>
     *
     * @param int $id The identifier of the user.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetUserUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetUserNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetUserInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetUserServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function getUser(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetUser($id), $fetch);
    }
    /**
     * Updates the details of a user. <span class="authorization">Global Administrator</span>
     *
     * @param int $id The identifier of the user.
     * @param null|\Rapid7\InsightVM\Api\Model\User $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateUserBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateUserUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateUserNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateUserInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateUserServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateUser(int $id, ?\Rapid7\InsightVM\Api\Model\User $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateUser($id, $requestBody), $fetch);
    }
    /**
     * Retrieves the current authentication token seed (key) for the user, if configured.
     *
     * @param int $id The identifier of the user.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetTwoFactorAuthenticationKeyUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetTwoFactorAuthenticationKeyNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetTwoFactorAuthenticationKeyInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetTwoFactorAuthenticationKeyServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\TokenResource|\Psr\Http\Message\ResponseInterface
     */
    public function getTwoFactorAuthenticationKey(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetTwoFactorAuthenticationKey($id), $fetch);
    }
    /**
     * Regenerates a new authentication token seed (key) and updates it for the user. This key may be then be used in the appropriate 2FA authenticator.
     *
     * @param int $id The identifier of the user.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RegenerateTwoFactorAuthenticationBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\RegenerateTwoFactorAuthenticationUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RegenerateTwoFactorAuthenticationInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RegenerateTwoFactorAuthenticationServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\TokenResource|\Psr\Http\Message\ResponseInterface
     */
    public function regenerateTwoFactorAuthentication(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RegenerateTwoFactorAuthentication($id), $fetch);
    }
    /**
     * Sets the authentication token seed (key) for the user. This key may be then be used in the appropriate 2FA authenticator.
     *
     * @param int $id The identifier of the user.
     * @param null|string $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetTwoFactorAuthenticationBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetTwoFactorAuthenticationUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetTwoFactorAuthenticationNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\SetTwoFactorAuthenticationInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetTwoFactorAuthenticationServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setTwoFactorAuthentication(int $id, ?string $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetTwoFactorAuthentication($id, $requestBody), $fetch);
    }
    /**
     * Revokes access to all asset groups from the user.
     *
     * @param int $id The identifier of the user.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllUserAssetGroupsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllUserAssetGroupsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllUserAssetGroupsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllUserAssetGroupsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeAllUserAssetGroups(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveAllUserAssetGroups($id), $fetch);
    }
    /**
     * Returns the asset groups to which the user has access.
     *
     * @param int $id The identifier of the user.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetUserAssetGroupsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetUserAssetGroupsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetUserAssetGroupsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetUserAssetGroupsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithAssetGroupIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function getUserAssetGroups(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetUserAssetGroups($id), $fetch);
    }
    /**
     * Updates the asset groups to which the user has access. Individual asset group access cannot be granted to users with the `allAssetGroups` permission. <span class="authorization">Global Administrator</span>
     *
     * @param int $id The identifier of the user.
     * @param null|array[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetUserAssetGroupsBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetUserAssetGroupsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetUserAssetGroupsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\SetUserAssetGroupsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetUserAssetGroupsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setUserAssetGroups(int $id, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetUserAssetGroups($id, $requestBody), $fetch);
    }
    /**
     * Grants the user access to the asset group. Individual asset group access cannot be granted to users with the `allAssetGroups` permission. <span class="authorization">Global Administrator</span>
     *
     * @param int $id The identifier of the user.
     * @param int $assetGroupId The identifier of the asset group.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveUserAssetGroupUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveUserAssetGroupNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveUserAssetGroupInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveUserAssetGroupServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeUserAssetGroup(int $id, int $assetGroupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveUserAssetGroup($id, $assetGroupId), $fetch);
    }
    /**
     * Grants the user access to the asset group. Individual asset group access cannot be granted to users with the `allAssetGroups` permission. <span class="authorization">Global Administrator</span>
     *
     * @param int $id The identifier of the user.
     * @param int $assetGroupId The identifier of the asset group.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\AddUserAssetGroupBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\AddUserAssetGroupUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\AddUserAssetGroupNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\AddUserAssetGroupInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\AddUserAssetGroupServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function addUserAssetGroup(int $id, int $assetGroupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\AddUserAssetGroup($id, $assetGroupId), $fetch);
    }
    /**
     * Unlocks a locked user account that has too many failed authentication attempts. Disabled accounts may not be unlocked.
     *
     * @param int $id The identifier of the user.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UnlockUserUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UnlockUserNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UnlockUserInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UnlockUserServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function unlockUser(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UnlockUser($id), $fetch);
    }
    /**
     * Changes the password for the user. Users may only change their own password.
     *
     * @param int $id The identifier of the user.
     * @param null|string $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\ResetPasswordBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\ResetPasswordUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\ResetPasswordNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\ResetPasswordInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\ResetPasswordServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function resetPassword(int $id, ?string $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\ResetPassword($id, $requestBody), $fetch);
    }
    /**
     * Returns the privileges granted to the user by their role. <span class="authorization">Global Administrator</span>
     *
     * @param int $id The identifier of the user.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetUserPrivilegesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetUserPrivilegesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetUserPrivilegesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetUserPrivilegesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Privileges|\Psr\Http\Message\ResponseInterface
     */
    public function getUserPrivileges(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetUserPrivileges($id), $fetch);
    }
    /**
     * Revokes access to all sites from the user.
     *
     * @param int $id The identifier of the user.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllUserSitesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllUserSitesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllUserSitesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveAllUserSitesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeAllUserSites(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveAllUserSites($id), $fetch);
    }
    /**
     * Returns the sites to which the user has access.
     *
     * @param int $id The identifier of the user.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetUserSitesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetUserSitesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetUserSitesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetUserSitesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithSiteIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function getUserSites(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetUserSites($id), $fetch);
    }
    /**
     * Updates the sites to which the user has access. Individual site access cannot be granted to users with the `allSites` permission. <span class="authorization">Global Administrator</span>
     *
     * @param int $id The identifier of the user.
     * @param null|array[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\SetUserSitesBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\SetUserSitesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\SetUserSitesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\SetUserSitesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\SetUserSitesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function setUserSites(int $id, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\SetUserSites($id, $requestBody), $fetch);
    }
    /**
     * Grants the user access to the site. Individual site access cannot be granted to users with the `allSites` permission. <span class="authorization">Global Administrator</span>
     *
     * @param int $id The identifier of the user.
     * @param int $siteId The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveUserSiteUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveUserSiteNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveUserSiteInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveUserSiteServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeUserSite(int $id, int $siteId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveUserSite($id, $siteId), $fetch);
    }
    /**
     * Grants the user access to the site. Individual site access cannot be granted to users with the `allSites` permission. <span class="authorization">Global Administrator</span>
     *
     * @param int $id The identifier of the user.
     * @param int $siteId The identifier of the site.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\AddUserSiteBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\AddUserSiteUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\AddUserSiteNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\AddUserSiteInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\AddUserSiteServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function addUserSite(int $id, int $siteId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\AddUserSite($id, $siteId), $fetch);
    }
    /**
     * Returns all vulnerabilities that can be assessed during a scan.
     *
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilitiesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilitiesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilitiesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilitiesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfVulnerability|\Psr\Http\Message\ResponseInterface
     */
    public function getVulnerabilities(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetVulnerabilities($queryParameters), $fetch);
    }
    /**
     * Returns the details for a vulnerability.
     *
     * @param string $id The identifier of the vulnerability.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Vulnerability|\Psr\Http\Message\ResponseInterface
     */
    public function getVulnerability(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetVulnerability($id), $fetch);
    }
    /**
     * Get the assets affected by the vulnerability.
     *
     * @param string $id The identifier of the vulnerability.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetAffectedAssetsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAffectedAssetsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAffectedAssetsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetAffectedAssetsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithAssetIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function getAffectedAssets(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetAffectedAssets($id), $fetch);
    }
    /**
     * Returns the vulnerability checks that assess for a specific vulnerability during a scan.
     *
     * @param string $id The identifier of the vulnerability.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityChecksForVulnerabilityUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityChecksForVulnerabilityNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityChecksForVulnerabilityInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityChecksForVulnerabilityServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithVulnerabilityCheckIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function getVulnerabilityChecksForVulnerability(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetVulnerabilityChecksForVulnerability($id), $fetch);
    }
    /**
     * Returns the exploits that can be used to exploit a vulnerability.
     *
     * @param string $id The identifier of the vulnerability.
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityExploitsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityExploitsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityExploitsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityExploitsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfExploit|\Psr\Http\Message\ResponseInterface
     */
    public function getVulnerabilityExploits(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetVulnerabilityExploits($id, $queryParameters), $fetch);
    }
    /**
     * Returns the malware kits that are known to be used to exploit the vulnerability.
     *
     * @param string $id The identifier of the vulnerability.
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityMalwareKitsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityMalwareKitsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityMalwareKitsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityMalwareKitsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfMalwareKit|\Psr\Http\Message\ResponseInterface
     */
    public function getVulnerabilityMalwareKits(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetVulnerabilityMalwareKits($id, $queryParameters), $fetch);
    }
    /**
     * Returns the external references that may be associated to a vulnerability.
     *
     * @param string $id The identifier of the vulnerability.
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityReferences1UnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityReferences1NotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityReferences1InternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityReferences1ServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfVulnerabilityReference|\Psr\Http\Message\ResponseInterface
     */
    public function getVulnerabilityReferences1(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetVulnerabilityReferences1($id, $queryParameters), $fetch);
    }
    /**
     * Returns all solutions (across all platforms) that may be used to remediate this vulnerability.
     *
     * @param string $id The identifier of the vulnerability.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilitySolutionsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilitySolutionsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilitySolutionsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilitySolutionsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithSolutionNaturalIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function getVulnerabilitySolutions(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetVulnerabilitySolutions($id), $fetch);
    }
    /**
     * Returns all vulnerabilities categories that can be assigned to a vulnerability. These categories group and label vulnerabilities by general purpose, affected systems, vendor, etc.
     *
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityCategoriesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityCategoriesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityCategoriesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityCategoriesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfVulnerabilityCategory|\Psr\Http\Message\ResponseInterface
     */
    public function getVulnerabilityCategories(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetVulnerabilityCategories($queryParameters), $fetch);
    }
    /**
     * Returns the details for a vulnerability category.
     *
     * @param int $id The identifier of the vulnerability category.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityCategoryUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityCategoryNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityCategoryInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityCategoryServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\VulnerabilityCategory|\Psr\Http\Message\ResponseInterface
     */
    public function getVulnerabilityCategory(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetVulnerabilityCategory($id), $fetch);
    }
    /**
     * Returns hypermedia links to the vulnerabilities that are in a vulnerability category.
     *
     * @param int $id The identifier of the vulnerability category.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityCategoryVulnerabilitiesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityCategoryVulnerabilitiesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityCategoryVulnerabilitiesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityCategoryVulnerabilitiesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithVulnerabilityNaturalIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function getVulnerabilityCategoryVulnerabilities(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetVulnerabilityCategoryVulnerabilities($id), $fetch);
    }
    /**
     * Returns vulnerability checks. Optional search and filtering parameters may be supplied to refine the results. Searching allows full text search of the vulnerability details a check is related to.
     *
     * @param array $queryParameters {
     *     @var string $search Vulnerability search term to find vulnerability checks for. e.g. `"ssh"`.
     *     @var bool $safe Whether to return vulnerability checks that are considered "safe" to run. Defaults to return safe and unsafe checks.
     *     @var bool $potential Whether to only return checks that result in potentially vulnerable results. Defaults to return all checks.
     *     @var bool $requiresCredentials Whether to only return checks that require credentials in order to successfully execute. Defaults to return all checks.
     *     @var bool $unique Whether to only return checks that guarantee to be executed once-and-only once on a host resulting in a unique result. False returns checks that can result in multiple occurrences of the same vulnerability on a host.
     *     @var string $type The type of vulnerability checks to return. See <a href="#operation/vulnerabilityCheckTypesUsingGET">Check Types</a> for all available types.
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityChecksUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityChecksNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityChecksInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityChecksServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfVulnerabilityCheck|\Psr\Http\Message\ResponseInterface
     */
    public function getVulnerabilityChecks(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetVulnerabilityChecks($queryParameters), $fetch);
    }
    /**
     * Returns the vulnerability check.
     *
     * @param string $id The identifier of the vulnerability check.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\VulnerabilityCheckUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\VulnerabilityCheckNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\VulnerabilityCheckInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\VulnerabilityCheckServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\VulnerabilityCheck|\Psr\Http\Message\ResponseInterface
     */
    public function vulnerabilityCheck(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\VulnerabilityCheck($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityCheckTypesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityCheckTypesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityCheckTypesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityCheckTypesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\ReferencesWithVulnerabilityCheckTypeIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function getVulnerabilityCheckTypes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetVulnerabilityCheckTypes(), $fetch);
    }
    /**
     * Returns all exceptions defined on vulnerabilities.
     *
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityExceptionsUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityExceptionsNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityExceptionsInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityExceptionsServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfVulnerabilityException|\Psr\Http\Message\ResponseInterface
     */
    public function getVulnerabilityExceptions(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetVulnerabilityExceptions($queryParameters), $fetch);
    }
    /**
     * Creates a vulnerability exception.
     *
     * @param null|\Rapid7\InsightVM\Api\Model\VulnerabilityException $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\CreateVulnerabilityExceptionBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateVulnerabilityExceptionUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateVulnerabilityExceptionInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\CreateVulnerabilityExceptionServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\CreatedReferenceVulnerabilityExceptionIDLink|\Psr\Http\Message\ResponseInterface
     */
    public function createVulnerabilityException(?\Rapid7\InsightVM\Api\Model\VulnerabilityException $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\CreateVulnerabilityException($requestBody), $fetch);
    }
    /**
     * Removes an exception made on a vulnerability.
     *
     * @param int $id id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveVulnerabilityExceptionUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveVulnerabilityExceptionNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveVulnerabilityExceptionInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\RemoveVulnerabilityExceptionServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function removeVulnerabilityException(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\RemoveVulnerabilityException($id), $fetch);
    }
    /**
     * Returns an exception made on a vulnerability.
     *
     * @param int $id The identifier of the vulnerability exception.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityExceptionUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityExceptionNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityExceptionInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityExceptionServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\VulnerabilityException|\Psr\Http\Message\ResponseInterface
     */
    public function getVulnerabilityException(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetVulnerabilityException($id), $fetch);
    }
    /**
     * Get the expiration date for a vulnerability exception.
     *
     * @param int $id id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityExceptionExpirationUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityExceptionExpirationNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityExceptionExpirationInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityExceptionExpirationServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getVulnerabilityExceptionExpiration(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetVulnerabilityExceptionExpiration($id), $fetch);
    }
    /**
     * Set the expiration date for a vulnerability exception. This must be a valid date in the future.
     *
     * @param int $id id
     * @param string $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateVulnerabilityExceptionExpirationBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateVulnerabilityExceptionExpirationUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateVulnerabilityExceptionExpirationNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateVulnerabilityExceptionExpirationInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateVulnerabilityExceptionExpirationServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateVulnerabilityExceptionExpiration(int $id, string $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateVulnerabilityExceptionExpiration($id, $requestBody), $fetch);
    }
    /**
     * Update the status of the vulnerability exception. The status can be one of: `"recall"`, `"approve"`, or `"reject"`.
     *
     * @param int $id id
     * @param string $status Exception Status
     * @param null|string $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateVulnerabilityExceptionStatusBadRequestException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateVulnerabilityExceptionStatusUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateVulnerabilityExceptionStatusInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\UpdateVulnerabilityExceptionStatusServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\Links|\Psr\Http\Message\ResponseInterface
     */
    public function updateVulnerabilityExceptionStatus(int $id, string $status, ?string $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\UpdateVulnerabilityExceptionStatus($id, $status, $requestBody), $fetch);
    }
    /**
     * Returns the external references that may be associated to a vulnerability.
     *
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityReferencesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityReferencesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityReferencesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityReferencesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfVulnerabilityReference|\Psr\Http\Message\ResponseInterface
     */
    public function getVulnerabilityReferences(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetVulnerabilityReferences($queryParameters), $fetch);
    }
    /**
     * Returns an external vulnerability reference.
     *
     * @param int $id The identifier of the vulnerability reference.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityReferenceUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityReferenceNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityReferenceInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityReferenceServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\VulnerabilityReference|\Psr\Http\Message\ResponseInterface
     */
    public function getVulnerabilityReference(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetVulnerabilityReference($id), $fetch);
    }
    /**
     * Returns the vulnerabilities that are referenced by an external reference.
     *
     * @param int $id id
     * @param array $queryParameters {
     *     @var int $page The index of the page (zero-based) to retrieve.
     *     @var int $size The number of records per page to retrieve.
     *     @var array $sort The criteria to sort the records by, in the format: `property[,ASC|DESC]`. The default sort order is ascending. Multiple sort criteria can be specified using multiple sort query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityReferenceVulnerabilitiesUnauthorizedException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityReferenceVulnerabilitiesNotFoundException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityReferenceVulnerabilitiesInternalServerErrorException
     * @throws \Rapid7\InsightVM\Api\Exception\GetVulnerabilityReferenceVulnerabilitiesServiceUnavailableException
     *
     * @return null|\Rapid7\InsightVM\Api\Model\PageOfVulnerability|\Psr\Http\Message\ResponseInterface
     */
    public function getVulnerabilityReferenceVulnerabilities(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rapid7\InsightVM\Api\Endpoint\GetVulnerabilityReferenceVulnerabilities($id, $queryParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Rapid7\InsightVM\Api\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}