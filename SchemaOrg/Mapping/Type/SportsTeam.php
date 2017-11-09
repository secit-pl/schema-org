<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SportsTeam.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\SportsTeamType instead.
 * 
 * @method SportsTeam setAdditionalType(Property\AdditionalType $additionalType)
 * @method SportsTeam setAddress(Property\Address $address)
 * @method SportsTeam setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method SportsTeam setAlternateName(Property\AlternateName $alternateName)
 * @method SportsTeam setAlumni(Property\Alumni $alumni)
 * @method SportsTeam setAreaServed(Property\AreaServed $areaServed)
 * @method SportsTeam setAward(Property\Award $award)
 * @method SportsTeam setBrand(Property\Brand $brand)
 * @method SportsTeam setContactPoint(Property\ContactPoint $contactPoint)
 * @method SportsTeam setDepartment(Property\Department $department)
 * @method SportsTeam setDescription(Property\Description $description)
 * @method SportsTeam setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SportsTeam setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method SportsTeam setDuns(Property\Duns $duns)
 * @method SportsTeam setEmail(Property\Email $email)
 * @method SportsTeam setEmployee(Property\Employee $employee)
 * @method SportsTeam setEvent(Property\Event $event)
 * @method SportsTeam setFaxNumber(Property\FaxNumber $faxNumber)
 * @method SportsTeam setFounder(Property\Founder $founder)
 * @method SportsTeam setFoundingDate(Property\FoundingDate $foundingDate)
 * @method SportsTeam setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method SportsTeam setFunder(Property\Funder $funder)
 * @method SportsTeam setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method SportsTeam setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method SportsTeam setHasPOS(Property\HasPOS $hasPOS)
 * @method SportsTeam setIdentifier(Property\Identifier $identifier)
 * @method SportsTeam setImage(Property\Image $image)
 * @method SportsTeam setIsicV4(Property\IsicV4 $isicV4)
 * @method SportsTeam setLegalName(Property\LegalName $legalName)
 * @method SportsTeam setLeiCode(Property\LeiCode $leiCode)
 * @method SportsTeam setLocation(Property\Location $location)
 * @method SportsTeam setLogo(Property\Logo $logo)
 * @method SportsTeam setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SportsTeam setMakesOffer(Property\MakesOffer $makesOffer)
 * @method SportsTeam setMember(Property\Member $member)
 * @method SportsTeam setMemberOf(Property\MemberOf $memberOf)
 * @method SportsTeam setNaics(Property\Naics $naics)
 * @method SportsTeam setName(Property\Name $name)
 * @method SportsTeam setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method SportsTeam setOwns(Property\Owns $owns)
 * @method SportsTeam setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method SportsTeam setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SportsTeam setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method SportsTeam setReview(Property\Review $review)
 * @method SportsTeam setSameAs(Property\SameAs $sameAs)
 * @method SportsTeam setSeeks(Property\Seeks $seeks)
 * @method SportsTeam setSponsor(Property\Sponsor $sponsor)
 * @method SportsTeam setSport(Property\Sport $sport)
 * @method SportsTeam setSubOrganization(Property\SubOrganization $subOrganization)
 * @method SportsTeam setTaxID(Property\TaxID $taxID)
 * @method SportsTeam setTelephone(Property\Telephone $telephone)
 * @method SportsTeam setUrl(Property\Url $url)
 * @method SportsTeam setVatID(Property\VatID $vatID)
 */
class SportsTeam extends SportsOrganization {

	/**
	 * @var Property\Athlete
	 */
	private $athlete;

	/**
	 * @var Property\Coach
	 */
	private $coach;

	/**
	 * Get athlete.
	 * 
	 * @return Property\Athlete
	 */
	public function getAthlete() {
		return $this->athlete;
	}

	/**
	 * Get coach.
	 * 
	 * @return Property\Coach
	 */
	public function getCoach() {
		return $this->coach;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SportsTeam';
	}

	/**
	 * Set athlete.
	 * 
	 * @param Property\Athlete $athlete
	 * @return SportsTeam
	 */
	public function setAthlete(Property\Athlete $athlete) {
		$this->athlete = $athlete;

		return $this;
	}

	/**
	 * Set coach.
	 * 
	 * @param Property\Coach $coach
	 * @return SportsTeam
	 */
	public function setCoach(Property\Coach $coach) {
		$this->coach = $coach;

		return $this;
	}
}