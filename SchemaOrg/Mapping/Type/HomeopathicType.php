<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A system of medicine based on the principle that a disease can be cured by a substance that produces similar symptoms in healthy people.
 * 
 * @method HomeopathicType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HomeopathicType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HomeopathicType setDescription(Property\DescriptionProperty $description)
 * @method HomeopathicType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HomeopathicType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HomeopathicType setImage(Property\ImageProperty $image)
 * @method HomeopathicType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HomeopathicType setName(Property\NameProperty $name)
 * @method HomeopathicType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HomeopathicType setSameAs(Property\SameAsProperty $sameAs)
 * @method HomeopathicType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HomeopathicType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method HomeopathicType setUrl(Property\UrlProperty $url)
 */
class HomeopathicType extends MedicineSystemType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Homeopathic';
	}
}