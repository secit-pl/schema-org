<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A radio channel that uses FM.
 * 
 * @method FMRadioChannelType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FMRadioChannelType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FMRadioChannelType setBroadcastChannelId(Property\BroadcastChannelIdProperty $broadcastChannelId)
 * @method FMRadioChannelType setBroadcastFrequency(Property\BroadcastFrequencyProperty $broadcastFrequency)
 * @method FMRadioChannelType setBroadcastServiceTier(Property\BroadcastServiceTierProperty $broadcastServiceTier)
 * @method FMRadioChannelType setDescription(Property\DescriptionProperty $description)
 * @method FMRadioChannelType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FMRadioChannelType setGenre(Property\GenreProperty $genre)
 * @method FMRadioChannelType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FMRadioChannelType setImage(Property\ImageProperty $image)
 * @method FMRadioChannelType setInBroadcastLineup(Property\InBroadcastLineupProperty $inBroadcastLineup)
 * @method FMRadioChannelType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FMRadioChannelType setName(Property\NameProperty $name)
 * @method FMRadioChannelType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FMRadioChannelType setProvidesBroadcastService(Property\ProvidesBroadcastServiceProperty $providesBroadcastService)
 * @method FMRadioChannelType setSameAs(Property\SameAsProperty $sameAs)
 * @method FMRadioChannelType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FMRadioChannelType setUrl(Property\UrlProperty $url)
 */
class FMRadioChannelType extends RadioChannelType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FMRadioChannel';
	}
}