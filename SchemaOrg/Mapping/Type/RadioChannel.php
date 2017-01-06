<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RadioChannel.
 * 
 * @method RadioChannel setAdditionalType(Property\AdditionalType $additionalType)
 * @method RadioChannel setAlternateName(Property\AlternateName $alternateName)
 * @method RadioChannel setBroadcastChannelId(Property\BroadcastChannelId $broadcastChannelId)
 * @method RadioChannel setBroadcastServiceTier(Property\BroadcastServiceTier $broadcastServiceTier)
 * @method RadioChannel setDescription(Property\Description $description)
 * @method RadioChannel setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
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