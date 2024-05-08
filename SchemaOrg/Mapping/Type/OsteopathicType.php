<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A system of medicine focused on promoting the body's innate ability to heal itself.
 * 
 * @method OsteopathicType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OsteopathicType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OsteopathicType setDescription(Property\DescriptionProperty $description)
 * @method OsteopathicType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OsteopathicType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OsteopathicType setImage(Property\ImageProperty $image)
 * @method OsteopathicType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OsteopathicType setName(Property\NameProperty $name)
 * @method OsteopathicType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OsteopathicType setSameAs(Property\SameAsProperty $sameAs)
 * @method OsteopathicType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OsteopathicType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method OsteopathicType setUrl(Property\UrlProperty $url)
 */
class OsteopathicType extends MedicineSystemType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Osteopathic';
	}
}