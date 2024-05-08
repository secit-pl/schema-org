<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A unique instance of a radio BroadcastService on a CableOrSatelliteService lineup.
 * 
 * @method RadioChannelType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RadioChannelType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RadioChannelType setBroadcastChannelId(Property\BroadcastChannelIdProperty $broadcastChannelId)
 * @method RadioChannelType setBroadcastFrequency(Property\BroadcastFrequencyProperty $broadcastFrequency)
 * @method RadioChannelType setBroadcastServiceTier(Property\BroadcastServiceTierProperty $broadcastServiceTier)
 * @method RadioChannelType setDescription(Property\DescriptionProperty $description)
 * @method RadioChannelType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RadioChannelType setGenre(Property\GenreProperty $genre)
 * @method RadioChannelType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RadioChannelType setImage(Property\ImageProperty $image)
 * @method RadioChannelType setInBroadcastLineup(Property\InBroadcastLineupProperty $inBroadcastLineup)
 * @method RadioChannelType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RadioChannelType setName(Property\NameProperty $name)
 * @method RadioChannelType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RadioChannelType setProvidesBroadcastService(Property\ProvidesBroadcastServiceProperty $providesBroadcastService)
 * @method RadioChannelType setSameAs(Property\SameAsProperty $sameAs)
 * @method RadioChannelType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RadioChannelType setUrl(Property\UrlProperty $url)
 */
class RadioChannelType extends BroadcastChannelType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RadioChannel';
	}
}