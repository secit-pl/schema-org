<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Multicellular parasite that causes an infection.
 * 
 * @method MulticellularParasiteType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MulticellularParasiteType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MulticellularParasiteType setDescription(Property\DescriptionProperty $description)
 * @method MulticellularParasiteType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MulticellularParasiteType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MulticellularParasiteType setImage(Property\ImageProperty $image)
 * @method MulticellularParasiteType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MulticellularParasiteType setName(Property\NameProperty $name)
 * @method MulticellularParasiteType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MulticellularParasiteType setSameAs(Property\SameAsProperty $sameAs)
 * @method MulticellularParasiteType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MulticellularParasiteType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MulticellularParasiteType setUrl(Property\UrlProperty $url)
 */
class MulticellularParasiteType extends InfectiousAgentClassType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MulticellularParasite';
	}
}