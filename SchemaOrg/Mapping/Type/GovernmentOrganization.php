<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GovernmentOrganization.
 * 
 * @method GovernmentOrganization setAdditionalType(Property\AdditionalType $additionalType)
 * @method GovernmentOrganization setAddress(Property\Address $address)
 * @method GovernmentOrganization setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method GovernmentOrganization setAlternateName(Property\AlternateName $alternateName)
 * @method GovernmentOrganization setAlumni(Property\Alumni $alumni)
 * @method GovernmentOrganization setAreaServed(Property\AreaServed $areaServed)
 * @method GovernmentOrganization setAward(Property\Award $award)
 * @method GovernmentOrganization setBrand(Property\Brand $brand)
 * @method GovernmentOrganization setContactPoint(Property\ContactPoint $contactPoint)
 * @method GovernmentOrganization setDepartment(Property\Department $department)
 * @method GovernmentOrganization setDescription(Property\Description $description)
 * @method GovernmentOrganization setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method GovernmentOrganization setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method GovernmentOrganization setDuns(Property\Duns $duns)
 * @method GovernmentOrganization setEmail(Property\Email $email)
 * @method GovernmentOrganization setEmployee(Property\Employee $employee)
 * @method GovernmentOrganization setEvent(Property\Event $event)
 * @method GovernmentOrganization setFaxNumber(Property\FaxNumber $faxNumber)
 * @method GovernmentOrganization setFounder(Property\Founder $founder)
 * @method GovernmentOrganization setFoundingDate(Property\FoundingDate $foundingDate)
 * @method GovernmentOrganization setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method GovernmentOrganization setFunder(Property\Funder $funder)
 * @method GovernmentOrganization setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method GovernmentOrganization setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method GovernmentOrganization setHasPOS(Property\HasPOS $hasPOS)
 * @method GovernmentOrganization setImage(Property\Image $image)
 * @method GovernmentOrganization setIsicV4(Property\IsicV4 $isicV4)
 * @method GovernmentOrganization setLegalName(Property\LegalName $legalName)
 * @method GovernmentOrganization setLeiCode(Property\LeiCode $leiCode)
 * @method GovernmentOrganization setLocation(Property\Location $location)
 * @method GovernmentOrganization setLogo(Property\Logo $logo)
 * @method GovernmentOrganization setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method GovernmentOrganization setMakesOffer(Property\MakesOffer $makesOffer)
 * @method GovernmentOrganization setMember(Property\Member $member)
 * @method GovernmentOrganization setMemberOf(Property\MemberOf $memberOf)
 * @method GovernmentOrganization setNaics(Property\Naics $naics)
 * @method GovernmentOrganization setName(Property\Name $name)
 * @method GovernmentOrganization setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method GovernmentOrganization setOwns(Property\Owns $owns)
 * @method GovernmentOrganization setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method GovernmentOrganization setPotentialAction(Property\PotentialAction $potentialAction)
 * @method GovernmentOrganization setReview(Property\Review $review)
 * @method GovernmentOrganization setSameAs(Property\SameAs $sameAs)
 * @method GovernmentOrganization setSeeks(Property\Seeks $seeks)
 * @method GovernmentOrganization setSponsor(Property\Sponsor $sponsor)
 * @method GovernmentOrganization setSubOrganization(Property\SubOrganization $subOrganization)
 * @method GovernmentOrganization setTaxID(Property\TaxID $taxID)
 * @method GovernmentOrganization setTelephone(Property\Telephone $telephone)
 * @method GovernmentOrganization setUrl(Property\Url $url)
 * @method GovernmentOrganization setVatID(Property\VatID $vatID)
 */
class GovernmentOrganization extends Organization {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GovernmentOrganization';
	}
}