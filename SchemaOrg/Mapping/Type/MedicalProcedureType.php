<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A process of care used in either a diagnostic, therapeutic, preventive or palliative capacity that relies on invasive (surgical), non-invasive, or other techniques.
 * 
 * @method MedicalProcedureType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalProcedureType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalProcedureType setCode(Property\CodeProperty $code)
 * @method MedicalProcedureType setDescription(Property\DescriptionProperty $description)
 * @method MedicalProcedureType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalProcedureType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalProcedureType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalProcedureType setImage(Property\ImageProperty $image)
 * @method MedicalProcedureType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalProcedureType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalProcedureType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalProcedureType setName(Property\NameProperty $name)
 * @method MedicalProcedureType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalProcedureType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalProcedureType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalProcedureType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalProcedureType setStudy(Property\StudyProperty $study)
 * @method MedicalProcedureType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalProcedureType setUrl(Property\UrlProperty $url)
 */
class MedicalProcedureType extends MedicalEntityType {

	/**
	 * @var Property\BodyLocationProperty
	 */
	private $bodyLocation;

	/**
	 * @var Property\FollowupProperty
	 */
	private $followup;

	/**
	 * @var Property\HowPerformedProperty
	 */
	private $howPerformed;

	/**
	 * @var Property\PreparationProperty
	 */
	private $preparation;

	/**
	 * @var Property\ProcedureTypeProperty
	 */
	private $procedureType;

	/**
	 * @var Property\StatusProperty
	 */
	private $status;

	/**
	 * Get body location.
	 *
	 * @return Property\BodyLocationProperty
	 */
	public function getBodyLocation() {
		return $this->bodyLocation;
	}

	/**
	 * Get followup.
	 *
	 * @return Property\FollowupProperty
	 */
	public function getFollowup() {
		return $this->followup;
	}

	/**
	 * Get how performed.
	 *
	 * @return Property\HowPerformedProperty
	 */
	public function getHowPerformed() {
		return $this->howPerformed;
	}

	/**
	 * Get preparation.
	 *
	 * @return Property\PreparationProperty
	 */
	public function getPreparation() {
		return $this->preparation;
	}

	/**
	 * Get procedure type.
	 *
	 * @return Property\ProcedureTypeProperty
	 */
	public function getProcedureType() {
		return $this->procedureType;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalProcedure';
	}

	/**
	 * Get status.
	 *
	 * @return Property\StatusProperty
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * Set body location.
	 *
	 * @param Property\BodyLocationProperty $bodyLocation
	 * @return MedicalProcedureType
	 */
	public function setBodyLocation(Property\BodyLocationProperty $bodyLocation) {
		$this->bodyLocation = $bodyLocation;

		return $this;
	}

	/**
	 * Set followup.
	 *
	 * @param Property\FollowupProperty $followup
	 * @return MedicalProcedureType
	 */
	public function setFollowup(Property\FollowupProperty $followup) {
		$this->followup = $followup;

		return $this;
	}

	/**
	 * Set how performed.
	 *
	 * @param Property\HowPerformedProperty $howPerformed
	 * @return MedicalProcedureType
	 */
	public function setHowPerformed(Property\HowPerformedProperty $howPerformed) {
		$this->howPerformed = $howPerformed;

		return $this;
	}

	/**
	 * Set preparation.
	 *
	 * @param Property\PreparationProperty $preparation
	 * @return MedicalProcedureType
	 */
	public function setPreparation(Property\PreparationProperty $preparation) {
		$this->preparation = $preparation;

		return $this;
	}

	/**
	 * Set procedure type.
	 *
	 * @param Property\ProcedureTypeProperty $procedureType
	 * @return MedicalProcedureType
	 */
	public function setProcedureType(Property\ProcedureTypeProperty $procedureType) {
		$this->procedureType = $procedureType;

		return $this;
	}

	/**
	 * Set status.
	 *
	 * @param Property\StatusProperty $status
	 * @return MedicalProcedureType
	 */
	public function setStatus(Property\StatusProperty $status) {
		$this->status = $status;

		return $this;
	}
}