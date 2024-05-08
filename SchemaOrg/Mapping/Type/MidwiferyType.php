<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A nurse-like health profession that deals with pregnancy, childbirth, and the postpartum period (including care of the newborn), besides sexual and reproductive health of women throughout their lives.
 * 
 * @method MidwiferyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MidwiferyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MidwiferyType setDescription(Property\DescriptionProperty $description)
 * @method MidwiferyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MidwiferyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MidwiferyType setImage(Property\ImageProperty $image)
 * @method MidwiferyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MidwiferyType setName(Property\NameProperty $name)
 * @method MidwiferyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MidwiferyType setSameAs(Property\SameAsProperty $sameAs)
 * @method MidwiferyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MidwiferyType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MidwiferyType setUrl(Property\UrlProperty $url)
 */
class MidwiferyType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Midwifery';
	}
}