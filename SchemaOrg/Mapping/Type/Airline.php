<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Airline.
 * 
 * @method Airline setAdditionalType(Property\AdditionalType $additionalType)
 * @method Airline setAddress(Property\Address $address)
 * @method Airline setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Airline setAlternateName(Property\AlternateName $alternateName)
 * @method Airline setAlumni(Property\Alumni $alumni)
 * @method Airline setAreaServed(Property\AreaServed $areaServed)
 * @method Airline setAward(Property\Award $award)
 * @method Airline setBrand(Property\Brand $brand)
 * @method Airline setContactPoint(Property\ContactPoint $contactPoint)
 * @method Airline setDepartment(Property\Department $department)
 * @method Airline setDescription(Property\Description $description)
 * @method Airline setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Airline setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Airline setDuns(Property\Duns $duns)
 * @method Airline setEmail(Property\Email $email)
 * @method Airline setEmployee(Property\Employee $employee)
 * @method Airline setEvent(Property\Event $event)
 * @method Airline setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Airline setFounder(Property\Founder $founder)
 * @method Airline setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Airline setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Airline setFunder(Property\Funder $funder)
 * @method Airline setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Airline setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Airline setHasPOS(Property\HasPOS $hasPOS)
 * @method Airline setImage(Property\Image $image)
 * @method Airline setIsicV4(Property\IsicV4 $isicV4)
 * @method Airline setLegalName(Property\LegalName $legalName)
 * @method Airline setLeiCode(Property\LeiCode $leiCode)
 * @method Airline setLocation(Property\Location $location)
 * @method Airline setLogo(Property\Logo $logo)
 * @method Airline setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Airline setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Airline setMember(Property\Member $member)
 * @method Airline setMemberOf(Property\MemberOf $memberOf)
 * @method Airline setNaics(Property\Naics $naics)
 * @method Airline setName(Property\Name $name)
 * @method Airline setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Airline setOwns(Property\Owns $owns)
 * @method Airline setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Airline setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Airline setReview(Property\Review $review)
 * @method Airline setSameAs(Property\SameAs $sameAs)
 * @method Airline setSeeks(Property\Seeks $seeks)
 * @method Airline setSponsor(Property\Sponsor $sponsor)
 * @method Airline setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Airline setTaxID(Property\TaxID $taxID)
 * @method Airline setTelephone(Property\Telephone $telephone)
 * @method Airline setUrl(Property\Url $url)
 * @method Airline setVatID(Property\VatID $vatID)
 */
class Airline extends Organization {

	/**
	 * @var Property\BoardingPolicy
	 */
	private $boardingPolicy;

	/**
	 * @var Property\IataCode
	 */
	private $iataCode;

	/**
	 * Get boarding policy.
	 * 
	 * @return Property\BoardingPolicy
	 */
	public function getBoardingPolicy() {
		return $this->boardingPolicy;
	}

	/**
	 * Get iata code.
	 * 
	 * @return Property\IataCode
	 */
	public function getIataCode() {
		return $this->iataCode;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Airline';
	}

	/**
	 * Set boarding policy.
	 * 
	 * @param Property\BoardingPolicy $boardingPolicy
	 * @return Airline
	 */
	public function setBoardingPolicy(Property\BoardingPolicy $boardingPolicy) {
		$this->boardingPolicy = $boardingPolicy;

		return $this;
	}

	/**
	 * Set iata code.
	 * 
	 * @param Property\IataCode $iataCode
	 * @return Airline
	 */
	public function setIataCode(Property\IataCode $iataCode) {
		$this->iataCode = $iataCode;

		return $this;
	}
}