<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MedicalOrganization.
 * 
 * @method MedicalOrganization setAddress(Property\Address $address)
 * @method MedicalOrganization setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method MedicalOrganization setAlumni(Property\Alumni $alumni)
 * @method MedicalOrganization setAreaServed(Property\AreaServed $areaServed)
 * @method MedicalOrganization setAward(Property\Award $award)
 * @method MedicalOrganization setBrand(Property\Brand $brand)
 * @method MedicalOrganization setContactPoint(Property\ContactPoint $contactPoint)
 * @method MedicalOrganization setDepartment(Property\Department $department)
 * @method MedicalOrganization setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method MedicalOrganization setDuns(Property\Duns $duns)
 * @method MedicalOrganization setEmail(Property\Email $email)
 * @method MedicalOrganization setEmployee(Property\Employee $employee)
 * @method MedicalOrganization setEvent(Property\Event $event)
 * @method MedicalOrganization setFaxNumber(Property\FaxNumber $faxNumber)
 * @method MedicalOrganization setFounder(Property\Founder $founder)
 * @method MedicalOrganization setFoundingDate(Property\FoundingDate $foundingDate)
 * @method MedicalOrganization setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method MedicalOrganization setFunder(Property\Funder $funder)
 * @method MedicalOrganization setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method MedicalOrganization setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method MedicalOrganization setHasPOS(Property\HasPOS $hasPOS)
 * @method MedicalOrganization setIsicV4(Property\IsicV4 $isicV4)
 * @method MedicalOrganization setLegalName(Property\LegalName $legalName)
 * @method MedicalOrganization setLeiCode(Property\LeiCode $leiCode)
 * @method MedicalOrganization setLocation(Property\Location $location)
 * @method MedicalOrganization setLogo(Property\Logo $logo)
 * @method MedicalOrganization setMakesOffer(Property\MakesOffer $makesOffer)
 * @method MedicalOrganization setMember(Property\Member $member)
 * @method MedicalOrganization setMemberOf(Property\MemberOf $memberOf)
 * @method MedicalOrganization setNaics(Property\Naics $naics)
 * @method MedicalOrganization setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method MedicalOrganization setOwns(Property\Owns $owns)
 * @method MedicalOrganization setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method MedicalOrganization setReview(Property\Review $review)
 * @method MedicalOrganization setSeeks(Property\Seeks $seeks)
 * @method MedicalOrganization setSponsor(Property\Sponsor $sponsor)
 * @method MedicalOrganization setSubOrganization(Property\SubOrganization $subOrganization)
 * @method MedicalOrganization setTaxID(Property\TaxID $taxID)
 * @method MedicalOrganization setTelephone(Property\Telephone $telephone)
 * @method MedicalOrganization setVatID(Property\VatID $vatID)
 */
class MedicalOrganization extends Organization {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalOrganization';
	}
}