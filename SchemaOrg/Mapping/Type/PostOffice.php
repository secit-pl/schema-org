<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PostOffice.
 * 
 * @method PostOffice setAddress(Property\Address $address)
 * @method PostOffice setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method PostOffice setAlumni(Property\Alumni $alumni)
 * @method PostOffice setAreaServed(Property\AreaServed $areaServed)
 * @method PostOffice setAward(Property\Award $award)
 * @method PostOffice setBrand(Property\Brand $brand)
 * @method PostOffice setContactPoint(Property\ContactPoint $contactPoint)
 * @method PostOffice setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method PostOffice setDepartment(Property\Department $department)
 * @method PostOffice setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method PostOffice setDuns(Property\Duns $duns)
 * @method PostOffice setEmail(Property\Email $email)
 * @method PostOffice setEmployee(Property\Employee $employee)
 * @method PostOffice setEvent(Property\Event $event)
 * @method PostOffice setFaxNumber(Property\FaxNumber $faxNumber)
 * @method PostOffice setFounder(Property\Founder $founder)
 * @method PostOffice setFoundingDate(Property\FoundingDate $foundingDate)
 * @method PostOffice setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method PostOffice setFunder(Property\Funder $funder)
 * @method PostOffice setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method PostOffice setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method PostOffice setHasPOS(Property\HasPOS $hasPOS)
 * @method PostOffice setIsicV4(Property\IsicV4 $isicV4)
 * @method PostOffice setLegalName(Property\LegalName $legalName)
 * @method PostOffice setLeiCode(Property\LeiCode $leiCode)
 * @method PostOffice setLocation(Property\Location $location)
 * @method PostOffice setLogo(Property\Logo $logo)
 * @method PostOffice setMakesOffer(Property\MakesOffer $makesOffer)
 * @method PostOffice setMember(Property\Member $member)
 * @method PostOffice setMemberOf(Property\MemberOf $memberOf)
 * @method PostOffice setNaics(Property\Naics $naics)
 * @method PostOffice setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method PostOffice setOpeningHours(Property\OpeningHours $openingHours)
 * @method PostOffice setOwns(Property\Owns $owns)
 * @method PostOffice setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method PostOffice setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method PostOffice setPriceRange(Property\PriceRange $priceRange)
 * @method PostOffice setReview(Property\Review $review)
 * @method PostOffice setSeeks(Property\Seeks $seeks)
 * @method PostOffice setSponsor(Property\Sponsor $sponsor)
 * @method PostOffice setSubOrganization(Property\SubOrganization $subOrganization)
 * @method PostOffice setTaxID(Property\TaxID $taxID)
 * @method PostOffice setTelephone(Property\Telephone $telephone)
 * @method PostOffice setVatID(Property\VatID $vatID)
 */
class PostOffice extends GovernmentOffice {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PostOffice';
	}
}