<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class JobPosting.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\JobPostingType instead.
 * 
 * @method JobPosting setAdditionalType(Property\AdditionalType $additionalType)
 * @method JobPosting setAlternateName(Property\AlternateName $alternateName)
 * @method JobPosting setDescription(Property\Description $description)
 * @method JobPosting setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method JobPosting setIdentifier(Property\Identifier $identifier)
 * @method JobPosting setImage(Property\Image $image)
 * @method JobPosting setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method JobPosting setName(Property\Name $name)
 * @method JobPosting setPotentialAction(Property\PotentialAction $potentialAction)
 * @method JobPosting setSameAs(Property\SameAs $sameAs)
 * @method JobPosting setUrl(Property\Url $url)
 */
class JobPosting extends Intangible {

	/**
	 * @var Property\BaseSalary
	 */
	private $baseSalary;

	/**
	 * @var Property\DatePosted
	 */
	private $datePosted;

	/**
	 * @var Property\EmploymentType
	 */
	private $employmentType;

	/**
	 * @var Property\HiringOrganization
	 */
	private $hiringOrganization;

	/**
	 * @var Property\IncentiveCompensation
	 */
	private $incentiveCompensation;

	/**
	 * @var Property\Industry
	 */
	private $industry;

	/**
	 * @var Property\JobBenefits
	 */
	private $jobBenefits;

	/**
	 * @var Property\JobLocation
	 */
	private $jobLocation;

	/**
	 * @var Property\SalaryCurrency
	 */
	private $salaryCurrency;

	/**
	 * @var Property\SpecialCommitments
	 */
	private $specialCommitments;

	/**
	 * @var Property\Title
	 */
	private $title;

	/**
	 * @var Property\ValidThrough
	 */
	private $validThrough;

	/**
	 * @var Property\WorkHours
	 */
	private $workHours;

	/**
	 * Get base salary.
	 * 
	 * @return Property\BaseSalary
	 */
	public function getBaseSalary() {
		return $this->baseSalary;
	}

	/**
	 * Get date posted.
	 * 
	 * @return Property\DatePosted
	 */
	public function getDatePosted() {
		return $this->datePosted;
	}

	/**
	 * Get employment type.
	 * 
	 * @return Property\EmploymentType
	 */
	public function getEmploymentType() {
		return $this->employmentType;
	}

	/**
	 * Get hiring organization.
	 * 
	 * @return Property\HiringOrganization
	 */
	public function getHiringOrganization() {
		return $this->hiringOrganization;
	}

	/**
	 * Get incentive compensation.
	 * 
	 * @return Property\IncentiveCompensation
	 */
	public function getIncentiveCompensation() {
		return $this->incentiveCompensation;
	}

	/**
	 * Get industry.
	 * 
	 * @return Property\Industry
	 */
	public function getIndustry() {
		return $this->industry;
	}

	/**
	 * Get job benefits.
	 * 
	 * @return Property\JobBenefits
	 */
	public function getJobBenefits() {
		return $this->jobBenefits;
	}

	/**
	 * Get job location.
	 * 
	 * @return Property\JobLocation
	 */
	public function getJobLocation() {
		return $this->jobLocation;
	}

	/**
	 * Get salary currency.
	 * 
	 * @return Property\SalaryCurrency
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
	 * @return Property\SpecialCommitments
	 */
	public function getSpecialCommitments() {
		return $this->specialCommitments;
	}

	/**
	 * Get title.
	 * 
	 * @return Property\Title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Get valid through.
	 * 
	 * @return Property\ValidThrough
	 */
	public function getValidThrough() {
		return $this->validThrough;
	}

	/**
	 * Get work hours.
	 * 
	 * @return Property\WorkHours
	 */
	public function getWorkHours() {
		return $this->workHours;
	}

	/**
	 * Set base salary.
	 * 
	 * @param Property\BaseSalary $baseSalary
	 * @return JobPosting
	 */
	public function setBaseSalary(Property\BaseSalary $baseSalary) {
		$this->baseSalary = $baseSalary;

		return $this;
	}

	/**
	 * Set date posted.
	 * 
	 * @param Property\DatePosted $datePosted
	 * @return JobPosting
	 */
	public function setDatePosted(Property\DatePosted $datePosted) {
		$this->datePosted = $datePosted;

		return $this;
	}

	/**
	 * Set employment type.
	 * 
	 * @param Property\EmploymentType $employmentType
	 * @return JobPosting
	 */
	public function setEmploymentType(Property\EmploymentType $employmentType) {
		$this->employmentType = $employmentType;

		return $this;
	}

	/**
	 * Set hiring organization.
	 * 
	 * @param Property\HiringOrganization $hiringOrganization
	 * @return JobPosting
	 */
	public function setHiringOrganization(Property\HiringOrganization $hiringOrganization) {
		$this->hiringOrganization = $hiringOrganization;

		return $this;
	}

	/**
	 * Set incentive compensation.
	 * 
	 * @param Property\IncentiveCompensation $incentiveCompensation
	 * @return JobPosting
	 */
	public function setIncentiveCompensation(Property\IncentiveCompensation $incentiveCompensation) {
		$this->incentiveCompensation = $incentiveCompensation;

		return $this;
	}

	/**
	 * Set industry.
	 * 
	 * @param Property\Industry $industry
	 * @return JobPosting
	 */
	public function setIndustry(Property\Industry $industry) {
		$this->industry = $industry;

		return $this;
	}

	/**
	 * Set job benefits.
	 * 
	 * @param Property\JobBenefits $jobBenefits
	 * @return JobPosting
	 */
	public function setJobBenefits(Property\JobBenefits $jobBenefits) {
		$this->jobBenefits = $jobBenefits;

		return $this;
	}

	/**
	 * Set job location.
	 * 
	 * @param Property\JobLocation $jobLocation
	 * @return JobPosting
	 */
	public function setJobLocation(Property\JobLocation $jobLocation) {
		$this->jobLocation = $jobLocation;

		return $this;
	}

	/**
	 * Set salary currency.
	 * 
	 * @param Property\SalaryCurrency $salaryCurrency
	 * @return JobPosting
	 */
	public function setSalaryCurrency(Property\SalaryCurrency $salaryCurrency) {
		$this->salaryCurrency = $salaryCurrency;

		return $this;
	}

	/**
	 * Set special commitments.
	 * 
	 * @param Property\SpecialCommitments $specialCommitments
	 * @return JobPosting
	 */
	public function setSpecialCommitments(Property\SpecialCommitments $specialCommitments) {
		$this->specialCommitments = $specialCommitments;

		return $this;
	}

	/**
	 * Set title.
	 * 
	 * @param Property\Title $title
	 * @return JobPosting
	 */
	public function setTitle(Property\Title $title) {
		$this->title = $title;

		return $this;
	}

	/**
	 * Set valid through.
	 * 
	 * @param Property\ValidThrough $validThrough
	 * @return JobPosting
	 */
	public function setValidThrough(Property\ValidThrough $validThrough) {
		$this->validThrough = $validThrough;

		return $this;
	}

	/**
	 * Set work hours.
	 * 
	 * @param Property\WorkHours $workHours
	 * @return JobPosting
	 */
	public function setWorkHours(Property\WorkHours $workHours) {
		$this->workHours = $workHours;

		return $this;
	}
}