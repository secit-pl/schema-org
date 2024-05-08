<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A seating map.
 * 
 * @method SeatingMapType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SeatingMapType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SeatingMapType setDescription(Property\DescriptionProperty $description)
 * @method SeatingMapType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SeatingMapType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SeatingMapType setImage(Property\ImageProperty $image)
 * @method SeatingMapType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SeatingMapType setName(Property\NameProperty $name)
 * @method SeatingMapType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SeatingMapType setSameAs(Property\SameAsProperty $sameAs)
 * @method SeatingMapType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SeatingMapType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method SeatingMapType setUrl(Property\UrlProperty $url)
 */
class SeatingMapType extends MapCategoryType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SeatingMap';
	}
}