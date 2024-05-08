<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Enumerated options related to a ContactPoint.
 * 
 * @method ContactPointOptionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ContactPointOptionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ContactPointOptionType setDescription(Property\DescriptionProperty $description)
 * @method ContactPointOptionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ContactPointOptionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ContactPointOptionType setImage(Property\ImageProperty $image)
 * @method ContactPointOptionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ContactPointOptionType setName(Property\NameProperty $name)
 * @method ContactPointOptionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ContactPointOptionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ContactPointOptionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ContactPointOptionType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method ContactPointOptionType setUrl(Property\UrlProperty $url)
 */
class ContactPointOptionType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ContactPointOption';
	}
}