<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A type of bed. This is used for indicating the bed or beds available in an accommodation.
 * 
 * @method BedType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BedType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BedType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BedType setDescription(Property\DescriptionProperty $description)
 * @method BedType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BedType setEqual(Property\EqualProperty $equal)
 * @method BedType setGreater(Property\GreaterProperty $greater)
 * @method BedType setGreaterOrEqual(Property\GreaterOrEqualProperty $greaterOrEqual)
 * @method BedType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BedType setImage(Property\ImageProperty $image)
 * @method BedType setLesser(Property\LesserProperty $lesser)
 * @method BedType setLesserOrEqual(Property\LesserOrEqualProperty $lesserOrEqual)
 * @method BedType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BedType setName(Property\NameProperty $name)
 * @method BedType setNonEqual(Property\NonEqualProperty $nonEqual)
 * @method BedType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BedType setSameAs(Property\SameAsProperty $sameAs)
 * @method BedType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BedType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method BedType setUrl(Property\UrlProperty $url)
 * @method BedType setValueReference(Property\ValueReferenceProperty $valueReference)
 */
class BedType extends QualitativeValueType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BedType';
	}
}