<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class JobPostingType.
 * 
 * @method JobPostingType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method JobPostingType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method JobPostingType setDescription(Property\DescriptionProperty $description)
 * @method JobPostingType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method JobPostingType setIdentifier(Property\IdentifierProperty $identifier)
 * @method JobPostingType setImage(Property\ImageProperty $image)
 * @method JobPostingType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method JobPostingType setName(Property\NameProperty $name)
 * @method JobPostingType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method JobPostingType setSameAs(Property\SameAsProperty $sameAs)
 * @method JobPostingType setUrl(Property\UrlProperty $url)
 */
class JobPostingType extends IntangibleType {

	/**
	 * @var Property\BaseSalaryProperty
	 */
	private $baseSalary;

	/**
	 * @var Property\DatePostedProperty
	 */
	private $datePosted;

	/**
	 * @var Property\EmploymentTypeProperty
	 */
	private $employmentType;

	/**
	 * @var Property\HiringOrganizationProperty
	 */
	private $hiringOrganization;

	/**
	 * @var Property\IncentiveCompensationProperty
	 */
	private $incentiveCompensation;

	/**
	 * @var Property\IndustryProperty
	 */
	private $industry;

	/**
	 * @var Property\JobBenefitsProperty
	 */
	private $jobBenefits;

	/**
	 * @var Property\JobLocationProperty
	 */
	private $jobLocation;

	/**
	 * @var Property\SalaryCurrencyProperty
	 */
	private $salaryCurrency;

	/**
	 * @var Property\SpecialCommitmentsProperty
	 */
	private $specialCommitments;

	/**
	 * @var Property\TitleProperty
	 */
	private $title;

	/**
	 * @var Property\ValidThroughProperty
	 */
	private $validThrough;

	/**
	 * @var Property\WorkHoursProperty
	 */
	private $workHours;

	/**
	 * Get base salary.
	 * 
	 * @return Property\BaseSalaryProperty
	 */
	public function getBaseSalary() {
		return $this->baseSalary;
	}

	/**
	 * Get date posted.
	 * 
	 * @return Property\DatePostedProperty
	 */
	public function getDatePosted() {
		return $this->datePosted;
	}

	/**
	 * Get employment type.
	 * 
	 * @return Property\EmploymentTypeProperty
	 */
	public function getEmploymentType() {
		return $this->employmentType;
	}

	/**
	 * Get hiring organization.
	 * 
	 * @return Property\HiringOrganizationProperty
	 */
	public function getHiringOrganization() {
		return $this->hiringOrganization;
	}

	/**
	 * Get incentive compensation.
	 * 
	 * @return Property\IncentiveCompensationProperty
	 */
	public function getIncentiveCompensation() {
		return $this->incentiveCompensation;
	}

	/**
	 * Get industry.
	 * 
	 * @return Property\IndustryProperty
	 */
	public function getIndustry() {
		return $this->industry;
	}

	/**
	 * Get job benefits.
	 * 
	 * @return Property\JobBenefitsProperty
	 */
	public function getJobBenefits() {
		return $this->jobBenefits;
	}

	/**
	 * Get job location.
	 * 
	 * @return Property\JobLocationProperty
	 */
	public function getJobLocation() {
		return $this->jobLocation;
	}

	/**
	 * Get salary currency.
	 * 
	 * @return Property\SalaryCurrencyProperty
	 */
	public function getSalaryCurrency() {
		return $this->salaryCurrency;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/JobPosting';
	}

	/**
	 * Get special commitments.
	 * 
	 * @return Property\SpecialCommitmentsProperty
	 */
	public function getSpecialCommitments() {
		return $this->specialCommitments;
	}

	/**
	 * Get title.
	 * 
	 * @return Property\TitleProperty
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Get valid through.
	 * 
	 * @return Property\ValidThroughProperty
	 */
	public function getValidThrough() {
		return $this->validThrough;
	}

	/**
	 * Get work hours.
	 * 
	 * @return Property\WorkHoursProperty
	 */
	public function getWorkHours() {
		return $this->workHours;
	}

	/**
	 * Set base salary.
	 * 
	 * @param Property\BaseSalaryProperty $baseSalary
	 * @return JobPostingType
	 */
	public function setBaseSalary(Property\BaseSalaryProperty $baseSalary) {
		$this->baseSalary = $baseSalary;

		return $this;
	}

	/**
	 * Set date posted.
	 * 
	 * @param Property\DatePostedProperty $datePosted
	 * @return JobPostingType
	 */
	public function setDatePosted(Property\DatePostedProperty $datePosted) {
		$this->datePosted = $datePosted;

		return $this;
	}

	/**
	 * Set employment type.
	 * 
	 * @param Property\EmploymentTypeProperty $employmentType
	 * @return JobPostingType
	 */
	public function setEmploymentType(Property\EmploymentTypeProperty $employmentType) {
		$this->employmentType = $employmentType;

		return $this;
	}

	/**
	 * Set hiring organization.
	 * 
	 * @param Property\HiringOrganizationProperty $hiringOrganization
	 * @return JobPostingType
	 */
	public function setHiringOrganization(Property\HiringOrganizationProperty $hiringOrganization) {
		$this->hiringOrganization = $hiringOrganization;

		return $this;
	}

	/**
	 * Set incentive compensation.
	 * 
	 * @param Property\IncentiveCompensationProperty $incentiveCompensation
	 * @return JobPostingType
	 */
	public function setIncentiveCompensation(Property\IncentiveCompensationProperty $incentiveCompensation) {
		$this->incentiveCompensation = $incentiveCompensation;

		return $this;
	}

	/**
	 * Set industry.
	 * 
	 * @param Property\IndustryProperty $industry
	 * @return JobPostingType
	 */
	public function setIndustry(Property\IndustryProperty $industry) {
		$this->industry = $industry;

		return $this;
	}

	/**
	 * Set job benefits.
	 * 
	 * @param Property\JobBenefitsProperty $jobBenefits
	 * @return JobPostingType
	 */
	public function setJobBenefits(Property\JobBenefitsProperty $jobBenefits) {
		$this->jobBenefits = $jobBenefits;

		return $this;
	}

	/**
	 * Set job location.
	 * 
	 * @param Property\JobLocationProperty $jobLocation
	 * @return JobPostingType
	 */
	public function setJobLocation(Property\JobLocationProperty $jobLocation) {
		$this->jobLocation = $jobLocation;

		return $this;
	}

	/**
	 * Set salary currency.
	 * 
	 * @param Property\SalaryCurrencyProperty $salaryCurrency
	 * @return JobPostingType
	 */
	public function setSalaryCurrency(Property\SalaryCurrencyProperty $salaryCurrency) {
		$this->salaryCurrency = $salaryCurrency;

		return $this;
	}

	/**
	 * Set special commitments.
	 * 
	 * @param Property\SpecialCommitmentsProperty $specialCommitments
	 * @return JobPostingType
	 */
	public function setSpecialCommitments(Property\SpecialCommitmentsProperty $specialCommitments) {
		$this->specialCommitments = $specialCommitments;

		return $this;
	}

	/**
	 * Set title.
	 * 
	 * @param Property\TitleProperty $title
	 * @return JobPostingType
	 */
	public function setTitle(Property\TitleProperty $title) {
		$this->title = $title;

		return $this;
	}

	/**
	 * Set valid through.
	 * 
	 * @param Property\ValidThroughProperty $validThrough
	 * @return JobPostingType
	 */
	public function setValidThrough(Property\ValidThroughProperty $validThrough) {
		$this->validThrough = $validThrough;

		return $this;
	}

	/**
	 * Set work hours.
	 * 
	 * @param Property\WorkHoursProperty $workHours
	 * @return JobPostingType
	 */
	public function setWorkHours(Property\WorkHoursProperty $workHours) {
		$this->workHours = $workHours;

		return $this;
	}
}