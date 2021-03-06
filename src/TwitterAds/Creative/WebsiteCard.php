<?php

namespace Hborras\TwitterAdsSDK\TwitterAds\Creative;

use Hborras\TwitterAdsSDK\TwitterAds\Resource;
use Hborras\TwitterAdsSDK\TwitterAds\Fields\WebsiteCardFields;

/**
 * Class WebsiteCard
 * @package Hborras\TwitterAdsSDK\TwitterAds\Creative
 */
class WebsiteCard extends Resource
{
    const RESOURCE_COLLECTION = 'accounts/{account_id}/cards/website';
    const RESOURCE            = 'accounts/{account_id}/cards/website/{id}';

    /** Read Only */
    protected $id;
    protected $card_uri;
    protected $created_at;
    protected $updated_at;
    protected $deleted;

    protected $properties = [
        WebsiteCardFields::NAME,
        WebsiteCardFields::WEBSITE_TITLE,
        WebsiteCardFields::WEBSITE_URL,
        WebsiteCardFields::MEDIA_KEY,
    ];

    /** Writable */
    protected $name;
    protected $website_title;
    protected $website_url;
    protected $media_key;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param array $properties
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getWebsiteTitle()
    {
        return $this->website_title;
    }

    /**
     * @param mixed $website_title
     */
    public function setWebsiteTitle($website_title)
    {
        $this->website_title = $website_title;
    }

    /**
     * @return mixed
     */
    public function getWebsiteUrl()
    {
        return $this->website_url;
    }

    /**
     * @param mixed $website_url
     */
    public function setWebsiteUrl($website_url)
    {
        $this->website_url = $website_url;
    }

    /**
     * @return mixed
     */
    public function getMediaKey()
    {
        return $this->media_key;
    }

    /**
     * @param mixed $media_key
     */
    public function setMediaKey($media_key)
    {
        $this->media_key = $media_key;
    }

    /**
     * @return mixed
     */
    public function getCardUri()
    {
        return $this->card_uri;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @return mixed
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}
