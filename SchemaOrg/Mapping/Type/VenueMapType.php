<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A venue map (e.g. for malls, auditoriums, museums, etc.).
 * 
 * @method VenueMapType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method VenueMapType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method VenueMapType setDescription(Property\DescriptionProperty $description)
 * @method VenueMapType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method VenueMapType setIdentifier(Property\IdentifierProperty $identifier)
 * @method VenueMapType setImage(Property\ImageProperty $image)
 * @method VenueMapType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method VenueMapType setName(Property\NameProperty $name)
 * @method VenueMapType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method VenueMapType setSameAs(Property\SameAsProperty $sameAs)
 * @method VenueMapType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method VenueMapType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method VenueMapType setUrl(Property\UrlProperty $url)
 */
class VenueMapType extends MapCategoryType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/VenueMap';
	}
}