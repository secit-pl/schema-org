<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The male gender.
 * 
 * @method MaleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MaleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MaleType setDescription(Property\DescriptionProperty $description)
 * @method MaleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MaleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MaleType setImage(Property\ImageProperty $image)
 * @method MaleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MaleType setName(Property\NameProperty $name)
 * @method MaleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MaleType setSameAs(Property\SameAsProperty $sameAs)
 * @method MaleType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MaleType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MaleType setUrl(Property\UrlProperty $url)
 */
class MaleType extends GenderType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Male';
	}
}