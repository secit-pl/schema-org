<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MusicVideoObject.
 * 
 * @method MusicVideoObject setAssociatedArticle(Property\AssociatedArticle $associatedArticle)
 * @method MusicVideoObject setBitrate(Property\Bitrate $bitrate)
 * @method MusicVideoObject setContentSize(Property\ContentSize $contentSize)
 * @method MusicVideoObject setContentUrl(Property\ContentUrl $contentUrl)
 * @method MusicVideoObject setDuration(Property\Duration $duration)
 * @method MusicVideoObject setEmbedUrl(Property\EmbedUrl $embedUrl)
 * @method MusicVideoObject setEncodesCreativeWork(Property\EncodesCreativeWork $encodesCreativeWork)
 * @method MusicVideoObject setEncodingFormat(Property\EncodingFormat $encodingFormat)
 * @method MusicVideoObject setExpires(Property\Expires $expires)
 * @method MusicVideoObject setHeight(Property\Height $height)
 * @method MusicVideoObject setPlayerType(Property\PlayerType $playerType)
 * @method MusicVideoObject setProductionCompany(Property\ProductionCompany $productionCompany)
 * @method MusicVideoObject setRegionsAllowed(Property\RegionsAllowed $regionsAllowed)
 * @method MusicVideoObject setRequiresSubscription(Property\RequiresSubscription $requiresSubscription)
 * @method MusicVideoObject setUploadDate(Property\UploadDate $uploadDate)
 * @method MusicVideoObject setWidth(Property\Width $width)
 */
class MusicVideoObject extends MediaObject {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MusicVideoObject';
	}
}