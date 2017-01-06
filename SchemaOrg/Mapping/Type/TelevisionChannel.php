<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TelevisionChannel.
 * 
 * @method TelevisionChannel setAdditionalType(Property\AdditionalType $additionalType)
 * @method TelevisionChannel setAlternateName(Property\AlternateName $alternateName)
 * @method TelevisionChannel setBroadcastChannelId(Property\BroadcastChannelId $broadcastChannelId)
 * @method TelevisionChannel setBroadcastServiceTier(Property\BroadcastServiceTier $broadcastServiceTier)
 * @method TelevisionChannel setDescription(Property\Description $description)
 * @method TelevisionChannel setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TelevisionChannel setImage(Property\Image $image)
 * @method TelevisionChannel setInBroadcastLineup(Property\InBroadcastLineup $inBroadcastLineup)
 * @method TelevisionChannel setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TelevisionChannel setName(Property\Name $name)
 * @method TelevisionChannel setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TelevisionChannel setProvidesBroadcastService(Property\ProvidesBroadcastService $providesBroadcastService)
 * @method TelevisionChannel setSameAs(Property\SameAs $sameAs)
 * @method TelevisionChannel setUrl(Property\Url $url)
 */
class TelevisionChannel extends BroadcastChannel {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TelevisionChannel';
	}
}