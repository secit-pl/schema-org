<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Book format: Hardcover.
 * 
 * @method HardcoverType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HardcoverType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HardcoverType setDescription(Property\DescriptionProperty $description)
 * @method HardcoverType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HardcoverType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HardcoverType setImage(Property\ImageProperty $image)
 * @method HardcoverType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HardcoverType setName(Property\NameProperty $name)
 * @method HardcoverType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HardcoverType setSameAs(Property\SameAsProperty $sameAs)
 * @method HardcoverType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HardcoverType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method HardcoverType setUrl(Property\UrlProperty $url)
 */
class HardcoverType extends BookFormatType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Hardcover';
	}
}