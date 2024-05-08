<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An organization such as a school, NGO, corporation, club, etc.
 * 
 * @method OrganizationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OrganizationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OrganizationType setDescription(Property\DescriptionProperty $description)
 * @method OrganizationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OrganizationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OrganizationType setImage(Property\ImageProperty $image)
 * @method OrganizationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OrganizationType setName(Property\NameProperty $name)
 * @method OrganizationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OrganizationType setSameAs(Property\SameAsProperty $sameAs)
 * @method OrganizationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OrganizationType setUrl(Property\UrlProperty $url)
 */
class OrganizationType extends ThingType {

	/**
	 * @var Property\AddressProperty
	 */
	private $address;

	/**
	 * @var Property\AggregateRatingProperty
	 */
	private $aggregateRating;

	/**
	 * @var Property\AlumniProperty
	 */
	private $alumni;

	/**
	 * @var Property\AreaServedProperty
	 */
	private $areaServed;

	/**
	 * @var Property\AwardProperty
	 */
	private $award;

	/**
	 * @var Property\BrandProperty
	 */
	private $brand;

	/**
	 * @var Property\ContactPointProperty
	 */
	private $contactPoint;

	/**
	 * @var Property\DepartmentProperty
	 */
	private $department;

	/**
	 * @var Property\DissolutionDateProperty
	 */
	private $dissolutionDate;

	/**
	 * @var Property\DunsProperty
	 */
	private $duns;

	/**
	 * @var Property\EmailProperty
	 */
	private $email;

	/**
	 * @var Property\EmployeeProperty
	 */
	private $employee;

	/**
	 * @var Property\EventProperty
	 */
	private $event;

	/**
	 * @var Property\FaxNumberProperty
	 */
	private $faxNumber;

	/**
	 * @var Property\FounderProperty
	 */
	private $founder;

	/**
	 * @var Property\FoundingDateProperty
	 */
	private $foundingDate;

	/**
	 * @var Property\FoundingLocationProperty
	 */
	private $foundingLocation;

	/**
	 * @var Property\FunderProperty
	 */
	private $funder;

	/**
	 * @var Property\GlobalLocationNumberProperty
	 */
	private $globalLocationNumber;

	/**
	 * @var Property\HasCertificationProperty
	 */
	private $hasCertification;

	/**
	 * @var Property\HasOfferCatalogProperty
	 */
	private $hasOfferCatalog;

	/**
	 * @var Property\HasPOSProperty
	 */
	private $hasPOS;

	/**
	 * @var Property\InteractionStatisticProperty
	 */
	private $interactionStatistic;

	/**
	 * @var Property\IsicV4Property
	 */
	private $isicV4;

	/**
	 * @var Property\KeywordsProperty
	 */
	private $keywords;

	/**
	 * @var Property\LegalNameProperty
	 */
	private $legalName;

	/**
	 * @var Property\LeiCodeProperty
	 */
	private $leiCode;

	/**
	 * @var Property\LocationProperty
	 */
	private $location;

	/**
	 * @var Property\LogoProperty
	 */
	private $logo;

	/**
	 * @var Property\MakesOfferProperty
	 */
	private $makesOffer;

	/**
	 * @var Property\MemberProperty
	 */
	private $member;

	/**
	 * @var Property\MemberOfProperty
	 */
	private $memberOf;

	/**
	 * @var Property\NaicsProperty
	 */
	private $naics;

	/**
	 * @var Property\NumberOfEmployeesProperty
	 */
	private $numberOfEmployees;

	/**
	 * @var Property\OwnsProperty
	 */
	private $owns;

	/**
	 * @var Property\ParentOrganizationProperty
	 */
	private $parentOrganization;

	/**
	 * @var Property\PublishingPrinciplesProperty
	 */
	private $publishingPrinciples;

	/**
	 * @var Property\ReviewProperty
	 */
	private $review;

	/**
	 * @var Property\SeeksProperty
	 */
	private $seeks;

	/**
	 * @var Property\SloganProperty
	 */
	private $slogan;

	/**
	 * @var Property\SponsorProperty
	 */
	private $sponsor;

	/**
	 * @var Property\SubOrganizationProperty
	 */
	private $subOrganization;

	/**
	 * @var Property\TaxIDProperty
	 */
	private $taxID;

	/**
	 * @var Property\TelephoneProperty
	 */
	private $telephone;

	/**
	 * @var Property\VatIDProperty
	 */
	private $vatID;

	/**
	 * Get address.
	 *
	 * @return Property\AddressProperty
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * Get aggregate rating.
	 *
	 * @return Property\AggregateRatingProperty
	 */
	public function getAggregateRating() {
		return $this->aggregateRating;
	}

	/**
	 * Get alumni.
	 *
	 * @return Property\AlumniProperty
	 */
	public function getAlumni() {
		return $this->alumni;
	}

	/**
	 * Get area served.
	 *
	 * @return Property\AreaServedProperty
	 */
	public function getAreaServed() {
		return $this->areaServed;
	}

	/**
	 * Get award.
	 *
	 * @return Property\AwardProperty
	 */
	public function getAward() {
		return $this->award;
	}

	/**
	 * Get brand.
	 *
	 * @return Property\BrandProperty
	 */
	public function getBrand() {
		return $this->brand;
	}

	/**
	 * Get contact point.
	 *
	 * @return Property\ContactPointProperty
	 */
	public function getContactPoint() {
		return $this->contactPoint;
	}

	/**
	 * Get department.
	 *
	 * @return Property\DepartmentProperty
	 */
	public function getDepartment() {
		return $this->department;
	}

	/**
	 * Get dissolution date.
	 *
	 * @return Property\DissolutionDateProperty
	 */
	public function getDissolutionDate() {
		return $this->dissolutionDate;
	}

	/**
	 * Get duns.
	 *
	 * @return Property\DunsProperty
	 */
	public function getDuns() {
		return $this->duns;
	}

	/**
	 * Get email.
	 *
	 * @return Property\EmailProperty
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Get employee.
	 *
	 * @return Property\EmployeeProperty
	 */
	public function getEmployee() {
		return $this->employee;
	}

	/**
	 * Get event.
	 *
	 * @return Property\EventProperty
	 */
	public function getEvent() {
		return $this->event;
	}

	/**
	 * Get fax number.
	 *
	 * @return Property\FaxNumberProperty
	 */
	public function getFaxNumber() {
		return $this->faxNumber;
	}

	/**
	 * Get founder.
	 *
	 * @return Property\FounderProperty
	 */
	public function getFounder() {
		return $this->founder;
	}

	/**
	 * Get founding date.
	 *
	 * @return Property\FoundingDateProperty
	 */
	public function getFoundingDate() {
		return $this->foundingDate;
	}

	/**
	 * Get founding location.
	 *
	 * @return Property\FoundingLocationProperty
	 */
	public function getFoundingLocation() {
		return $this->foundingLocation;
	}

	/**
	 * Get funder.
	 *
	 * @return Property\FunderProperty
	 */
	public function getFunder() {
		return $this->funder;
	}

	/**
	 * Get global location number.
	 *
	 * @return Property\GlobalLocationNumberProperty
	 */
	public function getGlobalLocationNumber() {
		return $this->globalLocationNumber;
	}

	/**
	 * Get has certification.
	 *
	 * @return Property\HasCertificationProperty
	 */
	public function getHasCertification() {
		return $this->hasCertification;
	}

	/**
	 * Get has offer catalog.
	 *
	 * @return Property\HasOfferCatalogProperty
	 */
	public function getHasOfferCatalog() {
		return $this->hasOfferCatalog;
	}

	/**
	 * Get haspos.
	 *
	 * @return Property\HasPOSProperty
	 */
	public function getHasPOS() {
		return $this->hasPOS;
	}

	/**
	 * Get interaction statistic.
	 *
	 * @return Property\InteractionStatisticProperty
	 */
	public function getInteractionStatistic() {
		return $this->interactionStatistic;
	}

	/**
	 * Get isicv4.
	 *
	 * @return Property\IsicV4Property
	 */
	public function getIsicV4() {
		return $this->isicV4;
	}

	/**
	 * Get keywords.
	 *
	 * @return Property\KeywordsProperty
	 */
	public function getKeywords() {
		return $this->keywords;
	}

	/**
	 * Get legal name.
	 *
	 * @return Property\LegalNameProperty
	 */
	public function getLegalName() {
		return $this->legalName;
	}

	/**
	 * Get lei code.
	 *
	 * @return Property\LeiCodeProperty
	 */
	public function getLeiCode() {
		return $this->leiCode;
	}

	/**
	 * Get location.
	 *
	 * @return Property\LocationProperty
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Get logo.
	 *
	 * @return Property\LogoProperty
	 */
	public function getLogo() {
		return $this->logo;
	}

	/**
	 * Get makes offer.
	 *
	 * @return Property\MakesOfferProperty
	 */
	public function getMakesOffer() {
		return $this->makesOffer;
	}

	/**
	 * Get member.
	 *
	 * @return Property\MemberProperty
	 */
	public function getMember() {
		return $this->member;
	}

	/**
	 * Get member of.
	 *
	 * @return Property\MemberOfProperty
	 */
	public function getMemberOf() {
		return $this->memberOf;
	}

	/**
	 * Get naics.
	 *
	 * @return Property\NaicsProperty
	 */
	public function getNaics() {
		return $this->naics;
	}

	/**
	 * Get number of employees.
	 *
	 * @return Property\NumberOfEmployeesProperty
	 */
	public function getNumberOfEmployees() {
		return $this->numberOfEmployees;
	}

	/**
	 * Get owns.
	 *
	 * @return Property\OwnsProperty
	 */
	public function getOwns() {
		return $this->owns;
	}

	/**
	 * Get parent organization.
	 *
	 * @return Property\ParentOrganizationProperty
	 */
	public function getParentOrganization() {
		return $this->parentOrganization;
	}

	/**
	 * Get publishing principles.
	 *
	 * @return Property\PublishingPrinciplesProperty
	 */
	public function getPublishingPrinciples() {
		return $this->publishingPrinciples;
	}

	/**
	 * Get review.
	 *
	 * @return Property\ReviewProperty
	 */
	public function getReview() {
		return $this->review;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Organization';
	}

	/**
	 * Get seeks.
	 *
	 * @return Property\SeeksProperty
	 */
	public function getSeeks() {
		return $this->seeks;
	}

	/**
	 * Get slogan.
	 *
	 * @return Property\SloganProperty
	 */
	public function getSlogan() {
		return $this->slogan;
	}

	/**
	 * Get sponsor.
	 *
	 * @return Property\SponsorProperty
	 */
	public function getSponsor() {
		return $this->sponsor;
	}

	/**
	 * Get sub organization.
	 *
	 * @return Property\SubOrganizationProperty
	 */
	public function getSubOrganization() {
		return $this->subOrganization;
	}

	/**
	 * Get taxid.
	 *
	 * @return Property\TaxIDProperty
	 */
	public function getTaxID() {
		return $this->taxID;
	}

	/**
	 * Get telephone.
	 *
	 * @return Property\TelephoneProperty
	 */
	public function getTelephone() {
		return $this->telephone;
	}

	/**
	 * Get vatid.
	 *
	 * @return Property\VatIDProperty
	 */
	public function getVatID() {
		return $this->vatID;
	}

	/**
	 * Set address.
	 *
	 * @param Property\AddressProperty $address
	 * @return OrganizationType
	 */
	public function setAddress(Property\AddressProperty $address) {
		$this->address = $address;

		return $this;
	}

	/**
	 * Set aggregate rating.
	 *
	 * @param Property\AggregateRatingProperty $aggregateRating
	 * @return OrganizationType
	 */
	public function setAggregateRating(Property\AggregateRatingProperty $aggregateRating) {
		$this->aggregateRating = $aggregateRating;

		return $this;
	}

	/**
	 * Set alumni.
	 *
	 * @param Property\AlumniProperty $alumni
	 * @return OrganizationType
	 */
	public function setAlumni(Property\AlumniProperty $alumni) {
		$this->alumni = $alumni;

		return $this;
	}

	/**
	 * Set area served.
	 *
	 * @param Property\AreaServedProperty $areaServed
	 * @return OrganizationType
	 */
	public function setAreaServed(Property\AreaServedProperty $areaServed) {
		$this->areaServed = $areaServed;

		return $this;
	}

	/**
	 * Set award.
	 *
	 * @param Property\AwardProperty $award
	 * @return OrganizationType
	 */
	public function setAward(Property\AwardProperty $award) {
		$this->award = $award;

		return $this;
	}

	/**
	 * Set brand.
	 *
	 * @param Property\BrandProperty $brand
	 * @return OrganizationType
	 */
	public function setBrand(Property\BrandProperty $brand) {
		$this->brand = $brand;

		return $this;
	}

	/**
	 * Set contact point.
	 *
	 * @param Property\ContactPointProperty $contactPoint
	 * @return OrganizationType
	 */
	public function setContactPoint(Property\ContactPointProperty $contactPoint) {
		$this->contactPoint = $contactPoint;

		return $this;
	}

	/**
	 * Set department.
	 *
	 * @param Property\DepartmentProperty $department
	 * @return OrganizationType
	 */
	public function setDepartment(Property\DepartmentProperty $department) {
		$this->department = $department;

		return $this;
	}

	/**
	 * Set dissolution date.
	 *
	 * @param Property\DissolutionDateProperty $dissolutionDate
	 * @return OrganizationType
	 */
	public function setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate) {
		$this->dissolutionDate = $dissolutionDate;

		return $this;
	}

	/**
	 * Set duns.
	 *
	 * @param Property\DunsProperty $duns
	 * @return OrganizationType
	 */
	public function setDuns(Property\DunsProperty $duns) {
		$this->duns = $duns;

		return $this;
	}

	/**
	 * Set email.
	 *
	 * @param Property\EmailProperty $email
	 * @return OrganizationType
	 */
	public function setEmail(Property\EmailProperty $email) {
		$this->email = $email;

		return $this;
	}

	/**
	 * Set employee.
	 *
	 * @param Property\EmployeeProperty $employee
	 * @return OrganizationType
	 */
	public function setEmployee(Property\EmployeeProperty $employee) {
		$this->employee = $employee;

		return $this;
	}

	/**
	 * Set event.
	 *
	 * @param Property\EventProperty $event
	 * @return OrganizationType
	 */
	public function setEvent(Property\EventProperty $event) {
		$this->event = $event;

		return $this;
	}

	/**
	 * Set fax number.
	 *
	 * @param Property\FaxNumberProperty $faxNumber
	 * @return OrganizationType
	 */
	public function setFaxNumber(Property\FaxNumberProperty $faxNumber) {
		$this->faxNumber = $faxNumber;

		return $this;
	}

	/**
	 * Set founder.
	 *
	 * @param Property\FounderProperty $founder
	 * @return OrganizationType
	 */
	public function setFounder(Property\FounderProperty $founder) {
		$this->founder = $founder;

		return $this;
	}

	/**
	 * Set founding date.
	 *
	 * @param Property\FoundingDateProperty $foundingDate
	 * @return OrganizationType
	 */
	public function setFoundingDate(Property\FoundingDateProperty $foundingDate) {
		$this->foundingDate = $foundingDate;

		return $this;
	}

	/**
	 * Set founding location.
	 *
	 * @param Property\FoundingLocationProperty $foundingLocation
	 * @return OrganizationType
	 */
	public function setFoundingLocation(Property\FoundingLocationProperty $foundingLocation) {
		$this->foundingLocation = $foundingLocation;

		return $this;
	}

	/**
	 * Set funder.
	 *
	 * @param Property\FunderProperty $funder
	 * @return OrganizationType
	 */
	public function setFunder(Property\FunderProperty $funder) {
		$this->funder = $funder;

		return $this;
	}

	/**
	 * Set global location number.
	 *
	 * @param Property\GlobalLocationNumberProperty $globalLocationNumber
	 * @return OrganizationType
	 */
	public function setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber) {
		$this->globalLocationNumber = $globalLocationNumber;

		return $this;
	}

	/**
	 * Set has certification.
	 *
	 * @param Property\HasCertificationProperty $hasCertification
	 * @return OrganizationType
	 */
	public function setHasCertification(Property\HasCertificationProperty $hasCertification) {
		$this->hasCertification = $hasCertification;

		return $this;
	}

	/**
	 * Set has offer catalog.
	 *
	 * @param Property\HasOfferCatalogProperty $hasOfferCatalog
	 * @return OrganizationType
	 */
	public function setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog) {
		$this->hasOfferCatalog = $hasOfferCatalog;

		return $this;
	}

	/**
	 * Set haspos.
	 *
	 * @param Property\HasPOSProperty $hasPOS
	 * @return OrganizationType
	 */
	public function setHasPOS(Property\HasPOSProperty $hasPOS) {
		$this->hasPOS = $hasPOS;

		return $this;
	}

	/**
	 * Set interaction statistic.
	 *
	 * @param Property\InteractionStatisticProperty $interactionStatistic
	 * @return OrganizationType
	 */
	public function setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic) {
		$this->interactionStatistic = $interactionStatistic;

		return $this;
	}

	/**
	 * Set isicv4.
	 *
	 * @param Property\IsicV4Property $isicV4
	 * @return OrganizationType
	 */
	public function setIsicV4(Property\IsicV4Property $isicV4) {
		$this->isicV4 = $isicV4;

		return $this;
	}

	/**
	 * Set keywords.
	 *
	 * @param Property\KeywordsProperty $keywords
	 * @return OrganizationType
	 */
	public function setKeywords(Property\KeywordsProperty $keywords) {
		$this->keywords = $keywords;

		return $this;
	}

	/**
	 * Set legal name.
	 *
	 * @param Property\LegalNameProperty $legalName
	 * @return OrganizationType
	 */
	public function setLegalName(Property\LegalNameProperty $legalName) {
		$this->legalName = $legalName;

		return $this;
	}

	/**
	 * Set lei code.
	 *
	 * @param Property\LeiCodeProperty $leiCode
	 * @return OrganizationType
	 */
	public function setLeiCode(Property\LeiCodeProperty $leiCode) {
		$this->leiCode = $leiCode;

		return $this;
	}

	/**
	 * Set location.
	 *
	 * @param Property\LocationProperty $location
	 * @return OrganizationType
	 */
	public function setLocation(Property\LocationProperty $location) {
		$this->location = $location;

		return $this;
	}

	/**
	 * Set logo.
	 *
	 * @param Property\LogoProperty $logo
	 * @return OrganizationType
	 */
	public function setLogo(Property\LogoProperty $logo) {
		$this->logo = $logo;

		return $this;
	}

	/**
	 * Set makes offer.
	 *
	 * @param Property\MakesOfferProperty $makesOffer
	 * @return OrganizationType
	 */
	public function setMakesOffer(Property\MakesOfferProperty $makesOffer) {
		$this->makesOffer = $makesOffer;

		return $this;
	}

	/**
	 * Set member.
	 *
	 * @param Property\MemberProperty $member
	 * @return OrganizationType
	 */
	public function setMember(Property\MemberProperty $member) {
		$this->member = $member;

		return $this;
	}

	/**
	 * Set member of.
	 *
	 * @param Property\MemberOfProperty $memberOf
	 * @return OrganizationType
	 */
	public function setMemberOf(Property\MemberOfProperty $memberOf) {
		$this->memberOf = $memberOf;

		return $this;
	}

	/**
	 * Set naics.
	 *
	 * @param Property\NaicsProperty $naics
	 * @return OrganizationType
	 */
	public function setNaics(Property\NaicsProperty $naics) {
		$this->naics = $naics;

		return $this;
	}

	/**
	 * Set number of employees.
	 *
	 * @param Property\NumberOfEmployeesProperty $numberOfEmployees
	 * @return OrganizationType
	 */
	public function setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees) {
		$this->numberOfEmployees = $numberOfEmployees;

		return $this;
	}

	/**
	 * Set owns.
	 *
	 * @param Property\OwnsProperty $owns
	 * @return OrganizationType
	 */
	public function setOwns(Property\OwnsProperty $owns) {
		$this->owns = $owns;

		return $this;
	}

	/**
	 * Set parent organization.
	 *
	 * @param Property\ParentOrganizationProperty $parentOrganization
	 * @return OrganizationType
	 */
	public function setParentOrganization(Property\ParentOrganizationProperty $parentOrganization) {
		$this->parentOrganization = $parentOrganization;

		return $this;
	}

	/**
	 * Set publishing principles.
	 *
	 * @param Property\PublishingPrinciplesProperty $publishingPrinciples
	 * @return OrganizationType
	 */
	public function setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples) {
		$this->publishingPrinciples = $publishingPrinciples;

		return $this;
	}

	/**
	 * Set review.
	 *
	 * @param Property\ReviewProperty $review
	 * @return OrganizationType
	 */
	public function setReview(Property\ReviewProperty $review) {
		$this->review = $review;

		return $this;
	}

	/**
	 * Set seeks.
	 *
	 * @param Property\SeeksProperty $seeks
	 * @return OrganizationType
	 */
	public function setSeeks(Property\SeeksProperty $seeks) {
		$this->seeks = $seeks;

		return $this;
	}

	/**
	 * Set slogan.
	 *
	 * @param Property\SloganProperty $slogan
	 * @return OrganizationType
	 */
	public function setSlogan(Property\SloganProperty $slogan) {
		$this->slogan = $slogan;

		return $this;
	}

	/**
	 * Set sponsor.
	 *
	 * @param Property\SponsorProperty $sponsor
	 * @return OrganizationType
	 */
	public function setSponsor(Property\SponsorProperty $sponsor) {
		$this->sponsor = $sponsor;

		return $this;
	}

	/**
	 * Set sub organization.
	 *
	 * @param Property\SubOrganizationProperty $subOrganization
	 * @return OrganizationType
	 */
	public function setSubOrganization(Property\SubOrganizationProperty $subOrganization) {
		$this->subOrganization = $subOrganization;

		return $this;
	}

	/**
	 * Set taxid.
	 *
	 * @param Property\TaxIDProperty $taxID
	 * @return OrganizationType
	 */
	public function setTaxID(Property\TaxIDProperty $taxID) {
		$this->taxID = $taxID;

		return $this;
	}

	/**
	 * Set telephone.
	 *
	 * @param Property\TelephoneProperty $telephone
	 * @return OrganizationType
	 */
	public function setTelephone(Property\TelephoneProperty $telephone) {
		$this->telephone = $telephone;

		return $this;
	}

	/**
	 * Set vatid.
	 *
	 * @param Property\VatIDProperty $vatID
	 * @return OrganizationType
	 */
	public function setVatID(Property\VatIDProperty $vatID) {
		$this->vatID = $vatID;

		return $this;
	}
}