<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RadioChannel.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\RadioChannelType instead.
 * 
 * @method RadioChannel setAdditionalType(Property\AdditionalType $additionalType)
 * @method RadioChannel setAlternateName(Property\AlternateName $alternateName)
 * @method RadioChannel setBroadcastChannelId(Property\BroadcastChannelId $broadcastChannelId)
 * @method RadioChannel setBroadcastServiceTier(Property\BroadcastServiceTier $broadcastServiceTier)
 * @method RadioChannel setDescription(Property\Description $description)
 * @method RadioChannel setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RadioChannel setGenre(Property\Genre $genre)
 * @method RadioChannel setIdentifier(Property\Identifier $identifier)
 * @method RadioChannel setImage(Property\Image $image)
 * @method RadioChannel setInBroadcastLineup(Property\InBroadcastLineup $inBroadcastLineup)
 * @method RadioChannel setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RadioChannel setName(Property\Name $name)
 * @method RadioChannel setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RadioChannel setProvidesBroadcastService(Property\ProvidesBroadcastService $providesBroadcastService)
 * @method RadioChannel setSameAs(Property\SameAs $sameAs)
 * @method RadioChannel setUrl(Property\Url $url)
 */
class RadioChannel extends BroadcastChannel {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RadioChannel';
	}
}