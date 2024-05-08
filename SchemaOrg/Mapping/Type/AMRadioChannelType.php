<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A radio channel that uses AM.
 * 
 * @method AMRadioChannelType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AMRadioChannelType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AMRadioChannelType setBroadcastChannelId(Property\BroadcastChannelIdProperty $broadcastChannelId)
 * @method AMRadioChannelType setBroadcastFrequency(Property\BroadcastFrequencyProperty $broadcastFrequency)
 * @method AMRadioChannelType setBroadcastServiceTier(Property\BroadcastServiceTierProperty $broadcastServiceTier)
 * @method AMRadioChannelType setDescription(Property\DescriptionProperty $description)
 * @method AMRadioChannelType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AMRadioChannelType setGenre(Property\GenreProperty $genre)
 * @method AMRadioChannelType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AMRadioChannelType setImage(Property\ImageProperty $image)
 * @method AMRadioChannelType setInBroadcastLineup(Property\InBroadcastLineupProperty $inBroadcastLineup)
 * @method AMRadioChannelType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AMRadioChannelType setName(Property\NameProperty $name)
 * @method AMRadioChannelType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AMRadioChannelType setProvidesBroadcastService(Property\ProvidesBroadcastServiceProperty $providesBroadcastService)
 * @method AMRadioChannelType setSameAs(Property\SameAsProperty $sameAs)
 * @method AMRadioChannelType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AMRadioChannelType setUrl(Property\UrlProperty $url)
 */
class AMRadioChannelType extends RadioChannelType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AMRadioChannel';
	}
}