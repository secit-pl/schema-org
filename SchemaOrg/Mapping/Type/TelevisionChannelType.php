<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TelevisionChannelType.
 * 
 * @method TelevisionChannelType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TelevisionChannelType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TelevisionChannelType setBroadcastChannelId(Property\BroadcastChannelIdProperty $broadcastChannelId)
 * @method TelevisionChannelType setBroadcastServiceTier(Property\BroadcastServiceTierProperty $broadcastServiceTier)
 * @method TelevisionChannelType setDescription(Property\DescriptionProperty $description)
 * @method TelevisionChannelType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TelevisionChannelType setGenre(Property\GenreProperty $genre)
 * @method TelevisionChannelType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TelevisionChannelType setImage(Property\ImageProperty $image)
 * @method TelevisionChannelType setInBroadcastLineup(Property\InBroadcastLineupProperty $inBroadcastLineup)
 * @method TelevisionChannelType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TelevisionChannelType setName(Property\NameProperty $name)
 * @method TelevisionChannelType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TelevisionChannelType setProvidesBroadcastService(Property\ProvidesBroadcastServiceProperty $providesBroadcastService)
 * @method TelevisionChannelType setSameAs(Property\SameAsProperty $sameAs)
 * @method TelevisionChannelType setUrl(Property\UrlProperty $url)
 */
class TelevisionChannelType extends BroadcastChannelType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TelevisionChannel';
	}
}