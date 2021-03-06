<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of GetPublicAccessUrls
 *
 * @method string getDomainType()
 * @method string getLibraryId()
 * @method array getPhotoIds()
 * @method string getStoreName()
 * @method string getZoomType()
 */
class GetPublicAccessUrlsRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'CloudPhoto',
            '2017-07-11',
            'GetPublicAccessUrls',
            'cloudphoto'
        );
    }

    /**
     * @param string $domainType
     *
     * @return $this
     */
    public function setDomainType($domainType)
    {
        $this->requestParameters['DomainType'] = $domainType;
        $this->queryParameters['DomainType'] = $domainType;

        return $this;
    }

    /**
     * @param string $libraryId
     *
     * @return $this
     */
    public function setLibraryId($libraryId)
    {
        $this->requestParameters['LibraryId'] = $libraryId;
        $this->queryParameters['LibraryId'] = $libraryId;

        return $this;
    }

    /**
     * @param array $photoIds
     *
     * @return $this
     */
    public function setPhotoIds(array $photoIds)
    {
        $this->requestParameters['PhotoIds'] = $photoIds;
        foreach ($photoIds as $i => $iValue) {
            $this->queryParameters['PhotoId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        $this->requestParameters['StoreName'] = $storeName;
        $this->queryParameters['StoreName'] = $storeName;

        return $this;
    }

    /**
     * @param string $zoomType
     *
     * @return $this
     */
    public function setZoomType($zoomType)
    {
        $this->requestParameters['ZoomType'] = $zoomType;
        $this->queryParameters['ZoomType'] = $zoomType;

        return $this;
    }
}
