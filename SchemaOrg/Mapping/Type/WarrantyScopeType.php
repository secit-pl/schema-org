<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A range of services that will be provided to a customer free of charge in case of a defect or malfunction of a product. Commonly used values: http://purl.org/goodrelations/v1#Labor-BringIn http://purl.org/goodrelations/v1#PartsAndLabor-BringIn http://purl.org/goodrelations/v1#PartsAndLabor-PickUp
 * 
 * @method WarrantyScopeType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WarrantyScopeType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WarrantyScopeType setDescription(Property\DescriptionProperty $description)
 * @method WarrantyScopeType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WarrantyScopeType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WarrantyScopeType setImage(Property\ImageProperty $image)
 * @method WarrantyScopeType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WarrantyScopeType setName(Property\NameProperty $name)
 * @method WarrantyScopeType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WarrantyScopeType setSameAs(Property\SameAsProperty $sameAs)
 * @method WarrantyScopeType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method WarrantyScopeType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method WarrantyScopeType setUrl(Property\UrlProperty $url)
 */
class WarrantyScopeType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WarrantyScope';
	}
}