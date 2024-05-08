<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The business function specifies the type of activity or access (i.e., the bundle of rights) offered by the organization or business person through the offer. Typical are sell, rental or lease, maintenance or repair, manufacture / produce, recycle / dispose, engineering / construction, or installation. Proprietary specifications of access rights are also instances of this class. Commonly used values: http://purl.org/goodrelations/v1#ConstructionInstallation http://purl.org/goodrelations/v1#Dispose http://purl.org/goodrelations/v1#LeaseOut http://purl.org/goodrelations/v1#Maintain http://purl.org/goodrelations/v1#ProvideService http://purl.org/goodrelations/v1#Repair http://purl.org/goodrelations/v1#Sell http://purl.org/goodrelations/v1#Buy
 * 
 * @method BusinessFunctionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BusinessFunctionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BusinessFunctionType setDescription(Property\DescriptionProperty $description)
 * @method BusinessFunctionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BusinessFunctionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BusinessFunctionType setImage(Property\ImageProperty $image)
 * @method BusinessFunctionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BusinessFunctionType setName(Property\NameProperty $name)
 * @method BusinessFunctionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BusinessFunctionType setSameAs(Property\SameAsProperty $sameAs)
 * @method BusinessFunctionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BusinessFunctionType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method BusinessFunctionType setUrl(Property\UrlProperty $url)
 */
class BusinessFunctionType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BusinessFunction';
	}
}