<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The frequency in MHz and the modulation used for a particular BroadcastService.
 * 
 * @method BroadcastFrequencySpecificationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BroadcastFrequencySpecificationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BroadcastFrequencySpecificationType setDescription(Property\DescriptionProperty $description)
 * @method BroadcastFrequencySpecificationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BroadcastFrequencySpecificationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BroadcastFrequencySpecificationType setImage(Property\ImageProperty $image)
 * @method BroadcastFrequencySpecificationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BroadcastFrequencySpecificationType setName(Property\NameProperty $name)
 * @method BroadcastFrequencySpecificationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BroadcastFrequencySpecificationType setSameAs(Property\SameAsProperty $sameAs)
 * @method BroadcastFrequencySpecificationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BroadcastFrequencySpecificationType setUrl(Property\UrlProperty $url)
 */
class BroadcastFrequencySpecificationType extends IntangibleType {

	/**
	 * @var Property\BroadcastFrequencyValueProperty
	 */
	private $broadcastFrequencyValue;

	/**
	 * Get broadcast frequency value.
	 *
	 * @return Property\BroadcastFrequencyValueProperty
	 */
	public function getBroadcastFrequencyValue() {
		return $this->broadcastFrequencyValue;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BroadcastFrequencySpecification';
	}

	/**
	 * Set broadcast frequency value.
	 *
	 * @param Property\BroadcastFrequencyValueProperty $broadcastFrequencyValue
	 * @return BroadcastFrequencySpecificationType
	 */
	public function setBroadcastFrequencyValue(Property\BroadcastFrequencyValueProperty $broadcastFrequencyValue) {
		$this->broadcastFrequencyValue = $broadcastFrequencyValue;

		return $this;
	}
}