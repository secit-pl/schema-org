<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The associated telephone number is toll free.
 * 
 * @method TollFreeType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TollFreeType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TollFreeType setDescription(Property\DescriptionProperty $description)
 * @method TollFreeType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TollFreeType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TollFreeType setImage(Property\ImageProperty $image)
 * @method TollFreeType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TollFreeType setName(Property\NameProperty $name)
 * @method TollFreeType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TollFreeType setSameAs(Property\SameAsProperty $sameAs)
 * @method TollFreeType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TollFreeType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method TollFreeType setUrl(Property\UrlProperty $url)
 */
class TollFreeType extends ContactPointOptionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TollFree';
	}
}