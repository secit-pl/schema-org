<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PetStore.
 * 
 * @method PetStore setAddress(Property\Address $address)
 * @method PetStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method PetStore setAlumni(Property\Alumni $alumni)
 * @method PetStore setAreaServed(Property\AreaServed $areaServed)
 * @method PetStore setAward(Property\Award $award)
 * @method PetStore setBrand(Property\Brand $brand)
 * @method PetStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method PetStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method PetStore setDepartment(Property\Department $department)
 * @method PetStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method PetStore setDuns(Property\Duns $duns)
 * @method PetStore setEmail(Property\Email $email)
 * @method PetStore setEmployee(Property\Employee $employee)
 * @method PetStore setEvent(Property\Event $event)
 * @method PetStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method PetStore setFounder(Property\Founder $founder)
 * @method PetStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method PetStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method PetStore setFunder(Property\Funder $funder)
 * @method PetStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method PetStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method PetStore setHasPOS(Property\HasPOS $hasPOS)
 * @method PetStore setIsicV4(Property\IsicV4 $isicV4)
 * @method PetStore setLegalName(Property\LegalName $legalName)
 * @method PetStore setLeiCode(Property\LeiCode $leiCode)
 * @method PetStore setLocation(Property\Location $location)
 * @method PetStore setLogo(Property\Logo $logo)
 * @method PetStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method PetStore setMember(Property\Member $member)
 * @method PetStore setMemberOf(Property\MemberOf $memberOf)
 * @method PetStore setNaics(Property\Naics $naics)
 * @method PetStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method PetStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method PetStore setOwns(Property\Owns $owns)
 * @method PetStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method PetStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method PetStore setPriceRange(Property\PriceRange $priceRange)
 * @method PetStore setReview(Property\Review $review)
 * @method PetStore setSeeks(Property\Seeks $seeks)
 * @method PetStore setSponsor(Property\Sponsor $sponsor)
 * @method PetStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method PetStore setTaxID(Property\TaxID $taxID)
 * @method PetStore setTelephone(Property\Telephone $telephone)
 * @method PetStore setVatID(Property\VatID $vatID)
 */
class PetStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PetStore';
	}
}