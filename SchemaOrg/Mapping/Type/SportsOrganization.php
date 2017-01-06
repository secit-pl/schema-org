<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SportsOrganization.
 * 
 * @method SportsOrganization setAdditionalType(Property\AdditionalType $additionalType)
 * @method SportsOrganization setAddress(Property\Address $address)
 * @method SportsOrganization setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method SportsOrganization setAlternateName(Property\AlternateName $alternateName)
 * @method SportsOrganization setAlumni(Property\Alumni $alumni)
 * @method SportsOrganization setAreaServed(Property\AreaServed $areaServed)
 * @method SportsOrganization setAward(Property\Award $award)
 * @method SportsOrganization setBrand(Property\Brand $brand)
 * @method SportsOrganization setContactPoint(Property\ContactPoint $contactPoint)
 * @method SportsOrganization setDepartment(Property\Department $department)
 * @method SportsOrganization setDescription(Property\Description $description)
 * @method SportsOrganization setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SportsOrganization setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method SportsOrganization setDuns(Property\Duns $duns)
 * @method SportsOrganization setEmail(Property\Email $email)
 * @method SportsOrganization setEmployee(Property\Employee $employee)
 * @method SportsOrganization setEvent(Property\Event $event)
 * @method SportsOrganization setFaxNumber(Property\FaxNumber $faxNumber)
 * @method SportsOrganization setFounder(Property\Founder $founder)
 * @method SportsOrganization setFoundingDate(Property\FoundingDate $foundingDate)
 * @method SportsOrganization setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method SportsOrganization setFunder(Property\Funder $funder)
 * @method SportsOrganization setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method SportsOrganization setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method SportsOrganization setHasPOS(Property\HasPOS $hasPOS)
 * @method SportsOrganization setImage(Property\Image $image)
 * @method SportsOrganization setIsicV4(Property\IsicV4 $isicV4)
 * @method SportsOrganization setLegalName(Property\LegalName $legalName)
 * @method SportsOrganization setLeiCode(Property\LeiCode $leiCode)
 * @method SportsOrganization setLocation(Property\Location $location)
 * @method SportsOrganization setLogo(Property\Logo $logo)
 * @method SportsOrganization setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SportsOrganization setMakesOffer(Property\MakesOffer $makesOffer)
 * @method SportsOrganization setMember(Property\Member $member)
 * @method SportsOrganization setMemberOf(Property\MemberOf $memberOf)
 * @method SportsOrganization setNaics(Property\Naics $naics)
 * @method SportsOrganization setName(Property\Name $name)
 * @method SportsOrganization setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method SportsOrganization setOwns(Property\Owns $owns)
 * @method SportsOrganization setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method SportsOrganization setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SportsOrganization setReview(Property\Review $review)
 * @method SportsOrganization setSameAs(Property\SameAs $sameAs)
 * @method SportsOrganization setSeeks(Property\Seeks $seeks)
 * @method SportsOrganization setSponsor(Property\Sponsor $sponsor)
 * @method SportsOrganization setSubOrganization(Property\SubOrganization $subOrganization)
 * @method SportsOrganization setTaxID(Property\TaxID $taxID)
 * @method SportsOrganization setTelephone(Property\Telephone $telephone)
 * @method SportsOrganization setUrl(Property\Url $url)
 * @method SportsOrganization setVatID(Property\VatID $vatID)
 */
class SportsOrganization extends Organization {

	/**
	 * @var Property\Sport
	 */
	private $sport;

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SportsOrganization';
	}

	/**
	 * Get sport.
	 * 
	 * @return Property\Sport
	 */
	public function getSport() {
		return $this->sport;
	}

	/**
	 * Set sport.
	 * 
	 * @param Property\Sport $sport
	 * @return SportsOrganization
	 */
	public function setSport(Property\Sport $sport) {
		$this->sport = $sport;

		return $this;
	}
}