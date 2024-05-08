<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An enumeration of genders.
 * 
 * @method GenderType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GenderType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GenderType setDescription(Property\DescriptionProperty $description)
 * @method GenderType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GenderType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GenderType setImage(Property\ImageProperty $image)
 * @method GenderType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GenderType setName(Property\NameProperty $name)
 * @method GenderType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GenderType setSameAs(Property\SameAsProperty $sameAs)
 * @method GenderType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method GenderType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method GenderType setUrl(Property\UrlProperty $url)
 */
class GenderType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GenderType';
	}
}