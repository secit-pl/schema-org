<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Any object used in a medical capacity, such as to diagnose or treat a patient.
 * 
 * @method MedicalDeviceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalDeviceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalDeviceType setCode(Property\CodeProperty $code)
 * @method MedicalDeviceType setDescription(Property\DescriptionProperty $description)
 * @method MedicalDeviceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalDeviceType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalDeviceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalDeviceType setImage(Property\ImageProperty $image)
 * @method MedicalDeviceType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalDeviceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalDeviceType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalDeviceType setName(Property\NameProperty $name)
 * @method MedicalDeviceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalDeviceType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalDeviceType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalDeviceType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalDeviceType setStudy(Property\StudyProperty $study)
 * @method MedicalDeviceType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalDeviceType setUrl(Property\UrlProperty $url)
 */
class MedicalDeviceType extends MedicalEntityType {

	/**
	 * @var Property\AdverseOutcomeProperty
	 */
	private $adverseOutcome;

	/**
	 * @var Property\ContraindicationProperty
	 */
	private $contraindication;

	/**
	 * @var Property\PostOpProperty
	 */
	private $postOp;

	/**
	 * @var Property\PreOpProperty
	 */
	private $preOp;

	/**
	 * @var Property\ProcedureProperty
	 */
	private $procedure;

	/**
	 * @var Property\SeriousAdverseOutcomeProperty
	 */
	private $seriousAdverseOutcome;

	/**
	 * Get adverse outcome.
	 *
	 * @return Property\AdverseOutcomeProperty
	 */
	public function getAdverseOutcome() {
		return $this->adverseOutcome;
	}

	/**
	 * Get contraindication.
	 *
	 * @return Property\ContraindicationProperty
	 */
	public function getContraindication() {
		return $this->contraindication;
	}

	/**
	 * Get post op.
	 *
	 * @return Property\PostOpProperty
	 */
	public function getPostOp() {
		return $this->postOp;
	}

	/**
	 * Get pre op.
	 *
	 * @return Property\PreOpProperty
	 */
	public function getPreOp() {
		return $this->preOp;
	}

	/**
	 * Get procedure.
	 *
	 * @return Property\ProcedureProperty
	 */
	public function getProcedure() {
		return $this->procedure;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalDevice';
	}

	/**
	 * Get serious adverse outcome.
	 *
	 * @return Property\SeriousAdverseOutcomeProperty
	 */
	public function getSeriousAdverseOutcome() {
		return $this->seriousAdverseOutcome;
	}

	/**
	 * Set adverse outcome.
	 *
	 * @param Property\AdverseOutcomeProperty $adverseOutcome
	 * @return MedicalDeviceType
	 */
	public function setAdverseOutcome(Property\AdverseOutcomeProperty $adverseOutcome) {
		$this->adverseOutcome = $adverseOutcome;

		return $this;
	}

	/**
	 * Set contraindication.
	 *
	 * @param Property\ContraindicationProperty $contraindication
	 * @return MedicalDeviceType
	 */
	public function setContraindication(Property\ContraindicationProperty $contraindication) {
		$this->contraindication = $contraindication;

		return $this;
	}

	/**
	 * Set post op.
	 *
	 * @param Property\PostOpProperty $postOp
	 * @return MedicalDeviceType
	 */
	public function setPostOp(Property\PostOpProperty $postOp) {
		$this->postOp = $postOp;

		return $this;
	}

	/**
	 * Set pre op.
	 *
	 * @param Property\PreOpProperty $preOp
	 * @return MedicalDeviceType
	 */
	public function setPreOp(Property\PreOpProperty $preOp) {
		$this->preOp = $preOp;

		return $this;
	}

	/**
	 * Set procedure.
	 *
	 * @param Property\ProcedureProperty $procedure
	 * @return MedicalDeviceType
	 */
	public function setProcedure(Property\ProcedureProperty $procedure) {
		$this->procedure = $procedure;

		return $this;
	}

	/**
	 * Set serious adverse outcome.
	 *
	 * @param Property\SeriousAdverseOutcomeProperty $seriousAdverseOutcome
	 * @return MedicalDeviceType
	 */
	public function setSeriousAdverseOutcome(Property\SeriousAdverseOutcomeProperty $seriousAdverseOutcome) {
		$this->seriousAdverseOutcome = $seriousAdverseOutcome;

		return $this;
	}
}