<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A SpeakableSpecification indicates (typically via xpath or cssSelector) sections of a document that are highlighted as particularly speakable. Instances of this type are expected to be used primarily as values of the speakable property.
 * 
 * @method SpeakableSpecificationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SpeakableSpecificationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SpeakableSpecificationType setDescription(Property\DescriptionProperty $description)
 * @method SpeakableSpecificationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SpeakableSpecificationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SpeakableSpecificationType setImage(Property\ImageProperty $image)
 * @method SpeakableSpecificationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SpeakableSpecificationType setName(Property\NameProperty $name)
 * @method SpeakableSpecificationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SpeakableSpecificationType setSameAs(Property\SameAsProperty $sameAs)
 * @method SpeakableSpecificationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SpeakableSpecificationType setUrl(Property\UrlProperty $url)
 */
class SpeakableSpecificationType extends IntangibleType {

	/**
	 * @var Property\CssSelectorProperty
	 */
	private $cssSelector;

	/**
	 * @var Property\XpathProperty
	 */
	private $xpath;

	/**
	 * Get css selector.
	 *
	 * @return Property\CssSelectorProperty
	 */
	public function getCssSelector() {
		return $this->cssSelector;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SpeakableSpecification';
	}

	/**
	 * Get xpath.
	 *
	 * @return Property\XpathProperty
	 */
	public function getXpath() {
		return $this->xpath;
	}

	/**
	 * Set css selector.
	 *
	 * @param Property\CssSelectorProperty $cssSelector
	 * @return SpeakableSpecificationType
	 */
	public function setCssSelector(Property\CssSelectorProperty $cssSelector) {
		$this->cssSelector = $cssSelector;

		return $this;
	}

	/**
	 * Set xpath.
	 *
	 * @param Property\XpathProperty $xpath
	 * @return SpeakableSpecificationType
	 */
	public function setXpath(Property\XpathProperty $xpath) {
		$this->xpath = $xpath;

		return $this;
	}
}