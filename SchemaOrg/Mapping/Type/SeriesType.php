<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A Series in schema.org is a group of related items, typically but not necessarily of the same kind. See also CreativeWorkSeries, EventSeries.
 * 
 * @method SeriesType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SeriesType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SeriesType setDescription(Property\DescriptionProperty $description)
 * @method SeriesType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SeriesType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SeriesType setImage(Property\ImageProperty $image)
 * @method SeriesType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SeriesType setName(Property\NameProperty $name)
 * @method SeriesType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SeriesType setSameAs(Property\SameAsProperty $sameAs)
 * @method SeriesType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SeriesType setUrl(Property\UrlProperty $url)
 */
class SeriesType extends IntangibleType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Series';
	}
}