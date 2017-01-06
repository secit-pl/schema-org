<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Pharmacy.
 * 
 * @method Pharmacy setAdditionalType(Property\AdditionalType $additionalType)
 * @method Pharmacy setAddress(Property\Address $address)
 * @method Pharmacy setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Pharmacy setAlternateName(Property\AlternateName $alternateName)
 * @method Pharmacy setAlumni(Property\Alumni $alumni)
 * @method Pharmacy setAreaServed(Property\AreaServed $areaServed)
 * @method Pharmacy setAward(Property\Award $award)
 * @method Pharmacy setBrand(Property\Brand $brand)
 * @method Pharmacy setContactPoint(Property\ContactPoint $contactPoint)
 * @method Pharmacy setDepartment(Property\Department $department)
 * @method Pharmacy setDescription(Property\Description $description)
 * @method Pharmacy setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Pharmacy setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Pharmacy setDuns(Property\Duns $duns)
 * @method Pharmacy setEmail(Property\Email $email)
 * @method Pharmacy setEmployee(Property\Employee $employee)
 * @method Pharmacy setEvent(Property\Event $event)
 * @method Pharmacy setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Pharmacy setFounder(Property\Founder $founder)
 * @method Pharmacy setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Pharmacy setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Pharmacy setFunder(Property\Funder $funder)
 * @method Pharmacy setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Pharmacy setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Pharmacy setHasPOS(Property\HasPOS $hasPOS)
 * @method Pharmacy setImage(Property\Image $image)
 * @method Pharmacy setIsicV4(Property\IsicV4 $isicV4)
 * @method Pharmacy setLegalName(Property\LegalName $legalName)
 * @method Pharmacy setLeiCode(Property\LeiCode $leiCode)
 * @method Pharmacy setLocation(Property\Location $location)
 * @method Pharmacy setLogo(Property\Logo $logo)
 * @method Pharmacy setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Pharmacy setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Pharmacy setMember(Property\Member $member)
 * @method Pharmacy setMemberOf(Property\MemberOf $memberOf)
 * @method Pharmacy setNaics(Property\Naics $naics)
 * @method Pharmacy setName(Property\Name $name)
 * @method Pharmacy setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Pharmacy setOwns(Property\Owns $owns)
 * @method Pharmacy setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Pharmacy setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Pharmacy setReview(Property\Review $review)
 * @method Pharmacy setSameAs(Property\SameAs $sameAs)
 * @method Pharmacy setSeeks(Property\Seeks $seeks)
 * @method Pharmacy setSponsor(Property\Sponsor $sponsor)
 * @method Pharmacy setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Pharmacy setTaxID(Property\TaxID $taxID)
 * @method Pharmacy setTelephone(Property\Telephone $telephone)
 * @method Pharmacy setUrl(Property\Url $url)
 * @method Pharmacy setVatID(Property\VatID $vatID)
 */
class Pharmacy extends MedicalOrganization {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Pharmacy';
	}
}