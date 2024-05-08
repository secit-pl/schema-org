<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A case series (also known as a clinical series) is a medical research study that tracks patients with a known exposure given similar treatment or examines their medical records for exposure and outcome. A case series can be retrospective or prospective and usually involves a smaller number of patients than the more powerful case-control studies or randomized controlled trials. Case series may be consecutive or non-consecutive, depending on whether all cases presenting to the reporting authors over a period of time were included, or only a selection.
 * 
 * @method CaseSeriesType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CaseSeriesType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CaseSeriesType setDescription(Property\DescriptionProperty $description)
 * @method CaseSeriesType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CaseSeriesType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CaseSeriesType setImage(Property\ImageProperty $image)
 * @method CaseSeriesType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CaseSeriesType setName(Property\NameProperty $name)
 * @method CaseSeriesType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CaseSeriesType setSameAs(Property\SameAsProperty $sameAs)
 * @method CaseSeriesType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CaseSeriesType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method CaseSeriesType setUrl(Property\UrlProperty $url)
 */
class CaseSeriesType extends MedicalObservationalStudyDesignType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CaseSeries';
	}
}