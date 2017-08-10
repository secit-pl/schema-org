<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MediaObject.
 */
class MediaObject {

	/**
	 * @var Property\AssociatedArticle
	 */
	private $associatedArticle;

	/**
	 * @var Property\Bitrate
	 */
	private $bitrate;

	/**
	 * @var Property\ContentSize
	 */
	private $contentSize;

	/**
	 * @var Property\ContentUrl
	 */
	private $contentUrl;

	/**
	 * @var Property\Duration
	 */
	private $duration;

	/**
	 * @var Property\EmbedUrl
	 */
	private $embedUrl;

	/**
	 * @var Property\EncodesCreativeWork
	 */
	private $encodesCreativeWork;

	/**
	 * @var Property\EncodingFormat
	 */
	private $encodingFormat;

	/**
	 * @var Property\Expires
	 */
	private $expires;

	/**
	 * @var Property\Height
	 */
	private $height;

	/**
	 */
	private $id;

	/**
	 * @var Property\PlayerType
	 */
	private $playerType;

	/**
	 * @var Property\ProductionCompany
	 */
	private $productionCompany;

	/**
	 * @var Property\RegionsAllowed
	 */
	private $regionsAllowed;

	/**
	 * @var Property\RequiresSubscription
	 */
	private $requiresSubscription;

	/**
	 * @var Property\UploadDate
	 */
	private $uploadDate;

	/**
	 * @var Property\Width
	 */
	private $width;

	/**
	 * MediaObject constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get associated article.
	 * 
	 * @return Property\AssociatedArticle
	 */
	public function getAssociatedArticle() {
		return $this->associatedArticle;
	}

	/**
	 * Get bitrate.
	 * 
	 * @return Property\Bitrate
	 */
	public function getBitrate() {
		return $this->bitrate;
	}

	/**
	 * Get content size.
	 * 
	 * @return Property\ContentSize
	 */
	public function getContentSize() {
		return $this->contentSize;
	}

	/**
	 * Get content url.
	 * 
	 * @return Property\ContentUrl
	 */
	public function getContentUrl() {
		return $this->contentUrl;
	}

	/**
	 * Get duration.
	 * 
	 * @return Property\Duration
	 */
	public function getDuration() {
		return $this->duration;
	}

	/**
	 * Get embed url.
	 * 
	 * @return Property\EmbedUrl
	 */
	public function getEmbedUrl() {
		return $this->embedUrl;
	}

	/**
	 * Get encodes creative work.
	 * 
	 * @return Property\EncodesCreativeWork
	 */
	public function getEncodesCreativeWork() {
		return $this->encodesCreativeWork;
	}

	/**
	 * Get encoding format.
	 * 
	 * @return Property\EncodingFormat
	 */
	public function getEncodingFormat() {
		return $this->encodingFormat;
	}

	/**
	 * Get expires.
	 * 
	 * @return Property\Expires
	 */
	public function getExpires() {
		return $this->expires;
	}

	/**
	 * Get height.
	 * 
	 * @return Property\Height
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * Get id.
	 * 
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Get player type.
	 * 
	 * @return Property\PlayerType
	 */
	public function getPlayerType() {
		return $this->playerType;
	}

	/**
	 * Get production company.
	 * 
	 * @return Property\ProductionCompany
	 */
	public function getProductionCompany() {
		return $this->productionCompany;
	}

	/**
	 * Get regions allowed.
	 * 
	 * @return Property\RegionsAllowed
	 */
	public function getRegionsAllowed() {
		return $this->regionsAllowed;
	}

	/**
	 * Get requires subscription.
	 * 
	 * @return Property\RequiresSubscription
	 */
	public function getRequiresSubscription() {
		return $this->requiresSubscription;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MediaObject';
	}

	/**
	 * Get upload date.
	 * 
	 * @return Property\UploadDate
	 */
	public function getUploadDate() {
		return $this->uploadDate;
	}

	/**
	 * Get width.
	 * 
	 * @return Property\Width
	 */
	public function getWidth() {
		return $this->width;
	}

	/**
	 * Set associated article.
	 * 
	 * @param Property\AssociatedArticle $associatedArticle
	 * @return MediaObject
	 */
	public function setAssociatedArticle(Property\AssociatedArticle $associatedArticle) {
		$this->associatedArticle = $associatedArticle;

		return $this;
	}

	/**
	 * Set bitrate.
	 * 
	 * @param Property\Bitrate $bitrate
	 * @return MediaObject
	 */
	public function setBitrate(Property\Bitrate $bitrate) {
		$this->bitrate = $bitrate;

		return $this;
	}

	/**
	 * Set content size.
	 * 
	 * @param Property\ContentSize $contentSize
	 * @return MediaObject
	 */
	public function setContentSize(Property\ContentSize $contentSize) {
		$this->contentSize = $contentSize;

		return $this;
	}

	/**
	 * Set content url.
	 * 
	 * @param Property\ContentUrl $contentUrl
	 * @return MediaObject
	 */
	public function setContentUrl(Property\ContentUrl $contentUrl) {
		$this->contentUrl = $contentUrl;

		return $this;
	}

	/**
	 * Set duration.
	 * 
	 * @param Property\Duration $duration
	 * @return MediaObject
	 */
	public function setDuration(Property\Duration $duration) {
		$this->duration = $duration;

		return $this;
	}

	/**
	 * Set embed url.
	 * 
	 * @param Property\EmbedUrl $embedUrl
	 * @return MediaObject
	 */
	public function setEmbedUrl(Property\EmbedUrl $embedUrl) {
		$this->embedUrl = $embedUrl;

		return $this;
	}

	/**
	 * Set encodes creative work.
	 * 
	 * @param Property\EncodesCreativeWork $encodesCreativeWork
	 * @return MediaObject
	 */
	public function setEncodesCreativeWork(Property\EncodesCreativeWork $encodesCreativeWork) {
		$this->encodesCreativeWork = $encodesCreativeWork;

		return $this;
	}

	/**
	 * Set encoding format.
	 * 
	 * @param Property\EncodingFormat $encodingFormat
	 * @return MediaObject
	 */
	public function setEncodingFormat(Property\EncodingFormat $encodingFormat) {
		$this->encodingFormat = $encodingFormat;

		return $this;
	}

	/**
	 * Set expires.
	 * 
	 * @param Property\Expires $expires
	 * @return MediaObject
	 */
	public function setExpires(Property\Expires $expires) {
		$this->expires = $expires;

		return $this;
	}

	/**
	 * Set height.
	 * 
	 * @param Property\Height $height
	 * @return MediaObject
	 */
	public function setHeight(Property\Height $height) {
		$this->height = $height;

		return $this;
	}

	/**
	 * Set player type.
	 * 
	 * @param Property\PlayerType $playerType
	 * @return MediaObject
	 */
	public function setPlayerType(Property\PlayerType $playerType) {
		$this->playerType = $playerType;

		return $this;
	}

	/**
	 * Set production company.
	 * 
	 * @param Property\ProductionCompany $productionCompany
	 * @return MediaObject
	 */
	public function setProductionCompany(Property\ProductionCompany $productionCompany) {
		$this->productionCompany = $productionCompany;

		return $this;
	}

	/**
	 * Set regions allowed.
	 * 
	 * @param Property\RegionsAllowed $regionsAllowed
	 * @return MediaObject
	 */
	public function setRegionsAllowed(Property\RegionsAllowed $regionsAllowed) {
		$this->regionsAllowed = $regionsAllowed;

		return $this;
	}

	/**
	 * Set requires subscription.
	 * 
	 * @param Property\RequiresSubscription $requiresSubscription
	 * @return MediaObject
	 */
	public function setRequiresSubscription(Property\RequiresSubscription $requiresSubscription) {
		$this->requiresSubscription = $requiresSubscription;

		return $this;
	}

	/**
	 * Set upload date.
	 * 
	 * @param Property\UploadDate $uploadDate
	 * @return MediaObject
	 */
	public function setUploadDate(Property\UploadDate $uploadDate) {
		$this->uploadDate = $uploadDate;

		return $this;
	}

	/**
	 * Set width.
	 * 
	 * @param Property\Width $width
	 * @return MediaObject
	 */
	public function setWidth(Property\Width $width) {
		$this->width = $width;

		return $this;
	}
}