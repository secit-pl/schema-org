<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EducationalOrganization.
 * 
 * @method EducationalOrganization setAdditionalType(Property\AdditionalType $additionalType)
 * @method EducationalOrganization setAddress(Property\Address $address)
 * @method EducationalOrganization setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method EducationalOrganization setAlternateName(Property\AlternateName $alternateName)
 * @method EducationalOrganization setAlumni(Property\Alumni $alumni)
 * @method EducationalOrganization setAreaServed(Property\AreaServed $areaServed)
 * @method EducationalOrganization setAward(Property\Award $award)
 * @method EducationalOrganization setBrand(Property\Brand $brand)
 * @method EducationalOrganization setContactPoint(Property\ContactPoint $contactPoint)
 * @method EducationalOrganization setDepartment(Property\Department $department)
 * @method EducationalOrganization setDescription(Property\Description $description)
 * @method EducationalOrganization setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method EducationalOrganization setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method EducationalOrganization setDuns(Property\Duns $duns)
 * @method EducationalOrganization setEmail(Property\Email $email)
 * @method EducationalOrganization setEmployee(Property\Employee $employee)
 * @method EducationalOrganization setEvent(Property\Event $event)
 * @method EducationalOrganization setFaxNumber(Property\FaxNumber $faxNumber)
 * @method EducationalOrganization setFounder(Property\Founder $founder)
 * @method EducationalOrganization setFoundingDate(Property\FoundingDate $foundingDate)
 * @method EducationalOrganization setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method EducationalOrganization setFunder(Property\Funder $funder)
 * @method EducationalOrganization setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method EducationalOrganization setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method EducationalOrganization setHasPOS(Property\HasPOS $hasPOS)
 * @method EducationalOrganization setIdentifier(Property\Identifier $identifier)
 * @method EducationalOrganization setImage(Property\Image $image)
 * @method EducationalOrganization setIsicV4(Property\IsicV4 $isicV4)
 * @method EducationalOrganization setLegalName(Property\LegalName $legalName)
 * @method EducationalOrganization setLeiCode(Property\LeiCode $leiCode)
 * @method EducationalOrganization setLocation(Property\Location $location)
 * @method EducationalOrganization setLogo(Property\Logo $logo)
 * @method EducationalOrganization setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method EducationalOrganization setMakesOffer(Property\MakesOffer $makesOffer)
 * @method EducationalOrganization setMember(Property\Member $member)
 * @method EducationalOrganization setMemberOf(Property\MemberOf $memberOf)
 * @method EducationalOrganization setNaics(Property\Naics $naics)
 * @method EducationalOrganization setName(Property\Name $name)
 * @method EducationalOrganization setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method EducationalOrganization setOwns(Property\Owns $owns)
 * @method EducationalOrganization setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method EducationalOrganization setPotentialAction(Property\PotentialAction $potentialAction)
 * @method EducationalOrganization setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method EducationalOrganization setReview(Property\Review $review)
 * @method EducationalOrganization setSameAs(Property\SameAs $sameAs)
 * @method EducationalOrganization setSeeks(Property\Seeks $seeks)
 * @method EducationalOrganization setSponsor(Property\Sponsor $sponsor)
 * @method EducationalOrganization setSubOrganization(Property\SubOrganization $subOrganization)
 * @method EducationalOrganization setTaxID(Property\TaxID $taxID)
 * @method EducationalOrganization setTelephone(Property\Telephone $telephone)
 * @method EducationalOrganization setUrl(Property\Url $url)
 * @method EducationalOrganization setVatID(Property\VatID $vatID)
 */
class EducationalOrganization extends Organization {

	/**
	 * @var Property\Alumni
	 */
	private $alumni;

	/**
	 * Get alumni.
	 * 
	 * @return Property\Alumni
	 */
	public function getAlumni() {
		return $this->alumni;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EducationalOrganization';
	}

	/**
	 * Set alumni.
	 * 
	 * @param Property\Alumni $alumni
	 * @return EducationalOrganization
	 */
	public function setAlumni(Property\Alumni $alumni) {
		$this->alumni = $alumni;

		return $this;
	}
}