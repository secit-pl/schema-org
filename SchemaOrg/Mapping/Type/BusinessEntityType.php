<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A business entity type is a conceptual entity representing the legal form, the size, the main line of business, the position in the value chain, or any combination thereof, of an organization or business person. Commonly used values: http://purl.org/goodrelations/v1#Business http://purl.org/goodrelations/v1#Enduser http://purl.org/goodrelations/v1#PublicInstitution http://purl.org/goodrelations/v1#Reseller
 * 
 * @method BusinessEntityType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BusinessEntityType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BusinessEntityType setDescription(Property\DescriptionProperty $description)
 * @method BusinessEntityType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BusinessEntityType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BusinessEntityType setImage(Property\ImageProperty $image)
 * @method BusinessEntityType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BusinessEntityType setName(Property\NameProperty $name)
 * @method BusinessEntityType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BusinessEntityType setSameAs(Property\SameAsProperty $sameAs)
 * @method BusinessEntityType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BusinessEntityType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method BusinessEntityType setUrl(Property\UrlProperty $url)
 */
class BusinessEntityType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BusinessEntityType';
	}
}