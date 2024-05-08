<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Book format: GraphicNovel. May represent a bound collection of ComicIssue instances.
 * 
 * @method GraphicNovelType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GraphicNovelType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GraphicNovelType setDescription(Property\DescriptionProperty $description)
 * @method GraphicNovelType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GraphicNovelType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GraphicNovelType setImage(Property\ImageProperty $image)
 * @method GraphicNovelType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GraphicNovelType setName(Property\NameProperty $name)
 * @method GraphicNovelType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GraphicNovelType setSameAs(Property\SameAsProperty $sameAs)
 * @method GraphicNovelType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method GraphicNovelType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method GraphicNovelType setUrl(Property\UrlProperty $url)
 */
class GraphicNovelType extends BookFormatType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GraphicNovel';
	}
}