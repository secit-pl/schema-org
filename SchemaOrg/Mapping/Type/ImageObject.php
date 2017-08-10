<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ImageObject.
 * 
 * @method ImageObject setAssociatedArticle(Property\AssociatedArticle $associatedArticle)
 * @method ImageObject setBitrate(Property\Bitrate $bitrate)
 * @method ImageObject setContentSize(Property\ContentSize $contentSize)
 * @method ImageObject setContentUrl(Property\ContentUrl $contentUrl)
 * @method ImageObject setDuration(Property\Duration $duration)
 * @method ImageObject setEmbedUrl(Property\EmbedUrl $embedUrl)
 * @method ImageObject setEncodesCreativeWork(Property\EncodesCreativeWork $encodesCreativeWork)
 * @method ImageObject setEncodingFormat(Property\EncodingFormat $encodingFormat)
 * @method ImageObject setExpires(Property\Expires $expires)
 * @method ImageObject setHeight(Property\Height $height)
 * @method ImageObject setPlayerType(Property\PlayerType $playerType)
 * @method ImageObject setProductionCompany(Property\ProductionCompany $productionCompany)
 * @method ImageObject setRegionsAllowed(Property\RegionsAllowed $regionsAllowed)
 * @method ImageObject setRequiresSubscription(Property\RequiresSubscription $requiresSubscription)
 * @method ImageObject setUploadDate(Property\UploadDate $uploadDate)
 * @method ImageObject setWidth(Property\Width $width)
 */
class ImageObject extends MediaObject {

	/**
	 * @var Property\Caption
	 */
	private $caption;

	/**
	 * @var Property\ExifData
	 */
	private $exifData;

	/**
	 * @var Property\RepresentativeOfPage
	 */
	private $representativeOfPage;

	/**
	 * @var Property\Thumbnail
	 */
	private $thumbnail;

	/**
	 * Get caption.
	 * 
	 * @return Property\Caption
	 */
	public function getCaption() {
		return $this->caption;
	}

	/**
	 * Get exif data.
	 * 
	 * @return Property\ExifData
	 */
	public function getExifData() {
		return $this->exifData;
	}

	/**
	 * Get representative of page.
	 * 
	 * @return Property\RepresentativeOfPage
	 */
	public function getRepresentativeOfPage() {
		return $this->representativeOfPage;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ImageObject';
	}

	/**
	 * Get thumbnail.
	 * 
	 * @return Property\Thumbnail
	 */
	public function getThumbnail() {
		return $this->thumbnail;
	}

	/**
	 * Set caption.
	 * 
	 * @param Property\Caption $caption
	 * @return ImageObject
	 */
	public function setCaption(Property\Caption $caption) {
		$this->caption = $caption;

		return $this;
	}

	/**
	 * Set exif data.
	 * 
	 * @param Property\ExifData $exifData
	 * @return ImageObject
	 */
	public function setExifData(Property\ExifData $exifData) {
		$this->exifData = $exifData;

		return $this;
	}

	/**
	 * Set representative of page.
	 * 
	 * @param Property\RepresentativeOfPage $representativeOfPage
	 * @return ImageObject
	 */
	public function setRepresentativeOfPage(Property\RepresentativeOfPage $representativeOfPage) {
		$this->representativeOfPage = $representativeOfPage;

		return $this;
	}

	/**
	 * Set thumbnail.
	 * 
	 * @param Property\Thumbnail $thumbnail
	 * @return ImageObject
	 */
	public function setThumbnail(Property\Thumbnail $thumbnail) {
		$this->thumbnail = $thumbnail;

		return $this;
	}
}