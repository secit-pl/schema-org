<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Lists or enumerations dealing with status types.
 * 
 * @method StatusEnumerationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method StatusEnumerationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method StatusEnumerationType setDescription(Property\DescriptionProperty $description)
 * @method StatusEnumerationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method StatusEnumerationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method StatusEnumerationType setImage(Property\ImageProperty $image)
 * @method StatusEnumerationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method StatusEnumerationType setName(Property\NameProperty $name)
 * @method StatusEnumerationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method StatusEnumerationType setSameAs(Property\SameAsProperty $sameAs)
 * @method StatusEnumerationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method StatusEnumerationType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method StatusEnumerationType setUrl(Property\UrlProperty $url)
 */
class StatusEnumerationType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/StatusEnumeration';
	}
}