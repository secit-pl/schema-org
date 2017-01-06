<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Organization.
 * 
 * @method Organization setAdditionalType(Property\AdditionalType $additionalType)
 * @method Organization setAlternateName(Property\AlternateName $alternateName)
 * @method Organization setDescription(Property\Description $description)
 * @method Organization setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Organization setImage(Property\Image $image)
 * @method Organization setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Organization setName(Property\Name $name)
 * @method Organization setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Organization setSameAs(Property\SameAs $sameAs)
 * @method Organization setUrl(Property\Url $url)
 */
class Organization extends Thing {

	/**
	 * @var Property\Address
	 */
	private $address;

	/**
	 * @var Property\AggregateRating
	 */
	private $aggregateRating;

	/**
	 * @var Property\Alumni
	 */
	private $alumni;

	/**
	 * @var Property\AreaServed
	 */
	private $areaServed;

	/**
	 * @var Property\Award
	 */
	private $award;

	/**
	 * @var Property\Brand
	 */
	private $brand;

	/**
	 * @var Property\ContactPoint
	 */
	private $contactPoint;

	/**
	 * @var Property\Department
	 */
	private $department;

	/**
	 * @var Property\DissolutionDate
	 */
	private $dissolutionDate;

	/**
	 * @var Property\Duns
	 */
	private $duns;

	/**
	 * @var Property\Email
	 */
	private $email;

	/**
	 * @var Property\Employee
	 */
	private $employee;

	/**
	 * @var Property\Event
	 */
	private $event;

	/**
	 * @var Property\FaxNumber
	 */
	private $faxNumber;

	/**
	 * @var Property\Founder
	 */
	private $founder;

	/**
	 * @var Property\FoundingDate
	 */
	private $foundingDate;

	/**
	 * @var Property\FoundingLocation
	 */
	private $foundingLocation;

	/**
	 * @var Property\Funder
	 */
	private $funder;

	/**
	 * @var Property\GlobalLocationNumber
	 */
	private $globalLocationNumber;

	/**
	 * @var Property\HasOfferCatalog
	 */
	private $hasOfferCatalog;

	/**
	 * @var Property\HasPOS
	 */
	private $hasPOS;

	/**
	 * @var Property\IsicV4
	 */
	private $isicV4;

	/**
	 * @var Property\LegalName
	 */
	private $legalName;

	/**
	 * @var Property\LeiCode
	 */
	private $leiCode;

	/**
	 * @var Property\Location
	 */
	private $location;

	/**
	 * @var Property\Logo
	 */
	private $logo;

	/**
	 * @var Property\MakesOffer
	 */
	private $makesOffer;

	/**
	 * @var Property\Member
	 */
	private $member;

	/**
	 * @var Property\MemberOf
	 */
	private $memberOf;

	/**
	 * @var Property\Naics
	 */
	private $naics;

	/**
	 * @var Property\NumberOfEmployees
	 */
	private $numberOfEmployees;

	/**
	 * @var Property\Owns
	 */
	private $owns;

	/**
	 * @var Property\ParentOrganization
	 */
	private $parentOrganization;

	/**
	 * @var Property\Review
	 */
	private $review;

	/**
	 * @var Property\Seeks
	 */
	private $seeks;

	/**
	 * @var Property\Sponsor
	 */
	private $sponsor;

	/**
	 * @var Property\SubOrganization
	 */
	private $subOrganization;

	/**
	 * @var Property\TaxID
	 */
	private $taxID;

	/**
	 * @var Property\Telephone
	 */
	private $telephone;

	/**
	 * @var Property\VatID
	 */
	private $vatID;

	/**
	 * Get address.
	 * 
	 * @return Property\Address
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * Get aggregate rating.
	 * 
	 * @return Property\AggregateRating
	 */
	public function getAggregateRating() {
		return $this->aggregateRating;
	}

	/**
	 * Get alumni.
	 * 
	 * @return Property\Alumni
	 */
	public function getAlumni() {
		return $this->alumni;
	}

	/**
	 * Get area served.
	 * 
	 * @return Property\AreaServed
	 */
	public function getAreaServed() {
		return $this->areaServed;
	}

	/**
	 * Get award.
	 * 
	 * @return Property\Award
	 */
	public function getAward() {
		return $this->award;
	}

	/**
	 * Get brand.
	 * 
	 * @return Property\Brand
	 */
	public function getBrand() {
		return $this->brand;
	}

	/**
	 * Get contact point.
	 * 
	 * @return Property\ContactPoint
	 */
	public function getContactPoint() {
		return $this->contactPoint;
	}

	/**
	 * Get department.
	 * 
	 * @return Property\Department
	 */
	public function getDepartment() {
		return $this->department;
	}

	/**
	 * Get dissolution date.
	 * 
	 * @return Property\DissolutionDate
	 */
	public function getDissolutionDate() {
		return $this->dissolutionDate;
	}

	/**
	 * Get duns.
	 * 
	 * @return Property\Duns
	 */
	public function getDuns() {
		return $this->duns;
	}

	/**
	 * Get email.
	 * 
	 * @return Property\Email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Get employee.
	 * 
	 * @return Property\Employee
	 */
	public function getEmployee() {
		return $this->employee;
	}

	/**
	 * Get event.
	 * 
	 * @return Property\Event
	 */
	public function getEvent() {
		return $this->event;
	}

	/**
	 * Get fax number.
	 * 
	 * @return Property\FaxNumber
	 */
	public function getFaxNumber() {
		return $this->faxNumber;
	}

	/**
	 * Get founder.
	 * 
	 * @return Property\Founder
	 */
	public function getFounder() {
		return $this->founder;
	}

	/**
	 * Get founding date.
	 * 
	 * @return Property\FoundingDate
	 */
	public function getFoundingDate() {
		return $this->foundingDate;
	}

	/**
	 * Get founding location.
	 * 
	 * @return Property\FoundingLocation
	 */
	public function getFoundingLocation() {
		return $this->foundingLocation;
	}

	/**
	 * Get funder.
	 * 
	 * @return Property\Funder
	 */
	public function getFunder() {
		return $this->funder;
	}

	/**
	 * Get global location number.
	 * 
	 * @return Property\GlobalLocationNumber
	 */
	public function getGlobalLocationNumber() {
		return $this->globalLocationNumber;
	}

	/**
	 * Get has offer catalog.
	 * 
	 * @return Property\HasOfferCatalog
	 */
	public function getHasOfferCatalog() {
		return $this->hasOfferCatalog;
	}

	/**
	 * Get haspos.
	 * 
	 * @return Property\HasPOS
	 */
	public function getHasPOS() {
		return $this->hasPOS;
	}

	/**
	 * Get isicv4.
	 * 
	 * @return Property\IsicV4
	 */
	public function getIsicV4() {
		return $this->isicV4;
	}

	/**
	 * Get legal name.
	 * 
	 * @return Property\LegalName
	 */
	public function getLegalName() {
		return $this->legalName;
	}

	/**
	 * Get lei code.
	 * 
	 * @return Property\LeiCode
	 */
	public function getLeiCode() {
		return $this->leiCode;
	}

	/**
	 * Get location.
	 * 
	 * @return Property\Location
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Get logo.
	 * 
	 * @return Property\Logo
	 */
	public function getLogo() {
		return $this->logo;
	}

	/**
	 * Get makes offer.
	 * 
	 * @return Property\MakesOffer
	 */
	public function getMakesOffer() {
		return $this->makesOffer;
	}

	/**
	 * Get member.
	 * 
	 * @return Property\Member
	 */
	public function getMember() {
		return $this->member;
	}

	/**
	 * Get member of.
	 * 
	 * @return Property\MemberOf
	 */
	public function getMemberOf() {
		return $this->memberOf;
	}

	/**
	 * Get naics.
	 * 
	 * @return Property\Naics
	 */
	public function getNaics() {
		return $this->naics;
	}

	/**
	 * Get number of employees.
	 * 
	 * @return Property\NumberOfEmployees
	 */
	public function getNumberOfEmployees() {
		return $this->numberOfEmployees;
	}

	/**
	 * Get owns.
	 * 
	 * @return Property\Owns
	 */
	public function getOwns() {
		return $this->owns;
	}

	/**
	 * Get parent organization.
	 * 
	 * @return Property\ParentOrganization
	 */
	public function getParentOrganization() {
		return $this->parentOrganization;
	}

	/**
	 * Get review.
	 * 
	 * @return Property\Review
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
	 * @return Property\Seeks
	 */
	public function getSeeks() {
		return $this->seeks;
	}

	/**
	 * Get sponsor.
	 * 
	 * @return Property\Sponsor
	 */
	public function getSponsor() {
		return $this->sponsor;
	}

	/**
	 * Get sub organization.
	 * 
	 * @return Property\SubOrganization
	 */
	public function getSubOrganization() {
		return $this->subOrganization;
	}

	/**
	 * Get taxid.
	 * 
	 * @return Property\TaxID
	 */
	public function getTaxID() {
		return $this->taxID;
	}

	/**
	 * Get telephone.
	 * 
	 * @return Property\Telephone
	 */
	public function getTelephone() {
		return $this->telephone;
	}

	/**
	 * Get vatid.
	 * 
	 * @return Property\VatID
	 */
	public function getVatID() {
		return $this->vatID;
	}

	/**
	 * Set address.
	 * 
	 * @param Property\Address $address
	 * @return Organization
	 */
	public function setAddress(Property\Address $address) {
		$this->address = $address;

		return $this;
	}

	/**
	 * Set aggregate rating.
	 * 
	 * @param Property\AggregateRating $aggregateRating
	 * @return Organization
	 */
	public function setAggregateRating(Property\AggregateRating $aggregateRating) {
		$this->aggregateRating = $aggregateRating;

		return $this;
	}

	/**
	 * Set alumni.
	 * 
	 * @param Property\Alumni $alumni
	 * @return Organization
	 */
	public function setAlumni(Property\Alumni $alumni) {
		$this->alumni = $alumni;

		return $this;
	}

	/**
	 * Set area served.
	 * 
	 * @param Property\AreaServed $areaServed
	 * @return Organization
	 */
	public function setAreaServed(Property\AreaServed $areaServed) {
		$this->areaServed = $areaServed;

		return $this;
	}

	/**
	 * Set award.
	 * 
	 * @param Property\Award $award
	 * @return Organization
	 */
	public function setAward(Property\Award $award) {
		$this->award = $award;

		return $this;
	}

	/**
	 * Set brand.
	 * 
	 * @param Property\Brand $brand
	 * @return Organization
	 */
	public function setBrand(Property\Brand $brand) {
		$this->brand = $brand;

		return $this;
	}

	/**
	 * Set contact point.
	 * 
	 * @param Property\ContactPoint $contactPoint
	 * @return Organization
	 */
	public function setContactPoint(Property\ContactPoint $contactPoint) {
		$this->contactPoint = $contactPoint;

		return $this;
	}

	/**
	 * Set department.
	 * 
	 * @param Property\Department $department
	 * @return Organization
	 */
	public function setDepartment(Property\Department $department) {
		$this->department = $department;

		return $this;
	}

	/**
	 * Set dissolution date.
	 * 
	 * @param Property\DissolutionDate $dissolutionDate
	 * @return Organization
	 */
	public function setDissolutionDate(Property\DissolutionDate $dissolutionDate) {
		$this->dissolutionDate = $dissolutionDate;

		return $this;
	}

	/**
	 * Set duns.
	 * 
	 * @param Property\Duns $duns
	 * @return Organization
	 */
	public function setDuns(Property\Duns $duns) {
		$this->duns = $duns;

		return $this;
	}

	/**
	 * Set email.
	 * 
	 * @param Property\Email $email
	 * @return Organization
	 */
	public function setEmail(Property\Email $email) {
		$this->email = $email;

		return $this;
	}

	/**
	 * Set employee.
	 * 
	 * @param Property\Employee $employee
	 * @return Organization
	 */
	public function setEmployee(Property\Employee $employee) {
		$this->employee = $employee;

		return $this;
	}

	/**
	 * Set event.
	 * 
	 * @param Property\Event $event
	 * @return Organization
	 */
	public function setEvent(Property\Event $event) {
		$this->event = $event;

		return $this;
	}

	/**
	 * Set fax number.
	 * 
	 * @param Property\FaxNumber $faxNumber
	 * @return Organization
	 */
	public function setFaxNumber(Property\FaxNumber $faxNumber) {
		$this->faxNumber = $faxNumber;

		return $this;
	}

	/**
	 * Set founder.
	 * 
	 * @param Property\Founder $founder
	 * @return Organization
	 */
	public function setFounder(Property\Founder $founder) {
		$this->founder = $founder;

		return $this;
	}

	/**
	 * Set founding date.
	 * 
	 * @param Property\FoundingDate $foundingDate
	 * @return Organization
	 */
	public function setFoundingDate(Property\FoundingDate $foundingDate) {
		$this->foundingDate = $foundingDate;

		return $this;
	}

	/**
	 * Set founding location.
	 * 
	 * @param Property\FoundingLocation $foundingLocation
	 * @return Organization
	 */
	public function setFoundingLocation(Property\FoundingLocation $foundingLocation) {
		$this->foundingLocation = $foundingLocation;

		return $this;
	}

	/**
	 * Set funder.
	 * 
	 * @param Property\Funder $funder
	 * @return Organization
	 */
	public function setFunder(Property\Funder $funder) {
		$this->funder = $funder;

		return $this;
	}

	/**
	 * Set global location number.
	 * 
	 * @param Property\GlobalLocationNumber $globalLocationNumber
	 * @return Organization
	 */
	public function setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber) {
		$this->globalLocationNumber = $globalLocationNumber;

		return $this;
	}

	/**
	 * Set has offer catalog.
	 * 
	 * @param Property\HasOfferCatalog $hasOfferCatalog
	 * @return Organization
	 */
	public function setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog) {
		$this->hasOfferCatalog = $hasOfferCatalog;

		return $this;
	}

	/**
	 * Set haspos.
	 * 
	 * @param Property\HasPOS $hasPOS
	 * @return Organization
	 */
	public function setHasPOS(Property\HasPOS $hasPOS) {
		$this->hasPOS = $hasPOS;

		return $this;
	}

	/**
	 * Set isicv4.
	 * 
	 * @param Property\IsicV4 $isicV4
	 * @return Organization
	 */
	public function setIsicV4(Property\IsicV4 $isicV4) {
		$this->isicV4 = $isicV4;

		return $this;
	}

	/**
	 * Set legal name.
	 * 
	 * @param Property\LegalName $legalName
	 * @return Organization
	 */
	public function setLegalName(Property\LegalName $legalName) {
		$this->legalName = $legalName;

		return $this;
	}

	/**
	 * Set lei code.
	 * 
	 * @param Property\LeiCode $leiCode
	 * @return Organization
	 */
	public function setLeiCode(Property\LeiCode $leiCode) {
		$this->leiCode = $leiCode;

		return $this;
	}

	/**
	 * Set location.
	 * 
	 * @param Property\Location $location
	 * @return Organization
	 */
	public function setLocation(Property\Location $location) {
		$this->location = $location;

		return $this;
	}

	/**
	 * Set logo.
	 * 
	 * @param Property\Logo $logo
	 * @return Organization
	 */
	public function setLogo(Property\Logo $logo) {
		$this->logo = $logo;

		return $this;
	}

	/**
	 * Set makes offer.
	 * 
	 * @param Property\MakesOffer $makesOffer
	 * @return Organization
	 */
	public function setMakesOffer(Property\MakesOffer $makesOffer) {
		$this->makesOffer = $makesOffer;

		return $this;
	}

	/**
	 * Set member.
	 * 
	 * @param Property\Member $member
	 * @return Organization
	 */
	public function setMember(Property\Member $member) {
		$this->member = $member;

		return $this;
	}

	/**
	 * Set member of.
	 * 
	 * @param Property\MemberOf $memberOf
	 * @return Organization
	 */
	public function setMemberOf(Property\MemberOf $memberOf) {
		$this->memberOf = $memberOf;

		return $this;
	}

	/**
	 * Set naics.
	 * 
	 * @param Property\Naics $naics
	 * @return Organization
	 */
	public function setNaics(Property\Naics $naics) {
		$this->naics = $naics;

		return $this;
	}

	/**
	 * Set number of employees.
	 * 
	 * @param Property\NumberOfEmployees $numberOfEmployees
	 * @return Organization
	 */
	public function setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees) {
		$this->numberOfEmployees = $numberOfEmployees;

		return $this;
	}

	/**
	 * Set owns.
	 * 
	 * @param Property\Owns $owns
	 * @return Organization
	 */
	public function setOwns(Property\Owns $owns) {
		$this->owns = $owns;

		return $this;
	}

	/**
	 * Set parent organization.
	 * 
	 * @param Property\ParentOrganization $parentOrganization
	 * @return Organization
	 */
	public function setParentOrganization(Property\ParentOrganization $parentOrganization) {
		$this->parentOrganization = $parentOrganization;

		return $this;
	}

	/**
	 * Set review.
	 * 
	 * @param Property\Review $review
	 * @return Organization
	 */
	public function setReview(Property\Review $review) {
		$this->review = $review;

		return $this;
	}

	/**
	 * Set seeks.
	 * 
	 * @param Property\Seeks $seeks
	 * @return Organization
	 */
	public function setSeeks(Property\Seeks $seeks) {
		$this->seeks = $seeks;

		return $this;
	}

	/**
	 * Set sponsor.
	 * 
	 * @param Property\Sponsor $sponsor
	 * @return Organization
	 */
	public function setSponsor(Property\Sponsor $sponsor) {
		$this->sponsor = $sponsor;

		return $this;
	}

	/**
	 * Set sub organization.
	 * 
	 * @param Property\SubOrganization $subOrganization
	 * @return Organization
	 */
	public function setSubOrganization(Property\SubOrganization $subOrganization) {
		$this->subOrganization = $subOrganization;

		return $this;
	}

	/**
	 * Set taxid.
	 * 
	 * @param Property\TaxID $taxID
	 * @return Organization
	 */
	public function setTaxID(Property\TaxID $taxID) {
		$this->taxID = $taxID;

		return $this;
	}

	/**
	 * Set telephone.
	 * 
	 * @param Property\Telephone $telephone
	 * @return Organization
	 */
	public function setTelephone(Property\Telephone $telephone) {
		$this->telephone = $telephone;

		return $this;
	}

	/**
	 * Set vatid.
	 * 
	 * @param Property\VatID $vatID
	 * @return Organization
	 */
	public function setVatID(Property\VatID $vatID) {
		$this->vatID = $vatID;

		return $this;
	}
}