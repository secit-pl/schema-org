<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EmergencyService.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\EmergencyServiceType instead.
 * 
 * @method EmergencyService setAdditionalType(Property\AdditionalType $additionalType)
 * @method EmergencyService setAddress(Property\Address $address)
 * @method EmergencyService setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method EmergencyService setAlternateName(Property\AlternateName $alternateName)
 * @method EmergencyService setAlumni(Property\Alumni $alumni)
 * @method EmergencyService setAreaServed(Property\AreaServed $areaServed)
 * @method EmergencyService setAward(Property\Award $award)
 * @method EmergencyService setBrand(Property\Brand $brand)
 * @method EmergencyService setContactPoint(Property\ContactPoint $contactPoint)
 * @method EmergencyService setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method EmergencyService setDepartment(Property\Department $department)
 * @method EmergencyService setDescription(Property\Description $description)
 * @method EmergencyService setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method EmergencyService setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method EmergencyService setDuns(Property\Duns $duns)
 * @method EmergencyService setEmail(Property\Email $email)
 * @method EmergencyService setEmployee(Property\Employee $employee)
 * @method EmergencyService setEvent(Property\Event $event)
 * @method EmergencyService setFaxNumber(Property\FaxNumber $faxNumber)
 * @method EmergencyService setFounder(Property\Founder $founder)
 * @method EmergencyService setFoundingDate(Property\FoundingDate $foundingDate)
 * @method EmergencyService setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method EmergencyService setFunder(Property\Funder $funder)
 * @method EmergencyService setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method EmergencyService setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method EmergencyService setHasPOS(Property\HasPOS $hasPOS)
 * @method EmergencyService setIdentifier(Property\Identifier $identifier)
 * @method EmergencyService setImage(Property\Image $image)
 * @method EmergencyService setIsicV4(Property\IsicV4 $isicV4)
 * @method EmergencyService setLegalName(Property\LegalName $legalName)
 * @method EmergencyService setLeiCode(Property\LeiCode $leiCode)
 * @method EmergencyService setLocation(Property\Location $location)
 * @method EmergencyService setLogo(Property\Logo $logo)
 * @method EmergencyService setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method EmergencyService setMakesOffer(Property\MakesOffer $makesOffer)
 * @method EmergencyService setMember(Property\Member $member)
 * @method EmergencyService setMemberOf(Property\MemberOf $memberOf)
 * @method EmergencyService setNaics(Property\Naics $naics)
 * @method EmergencyService setName(Property\Name $name)
 * @method EmergencyService setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method EmergencyService setOpeningHours(Property\OpeningHours $openingHours)
 * @method EmergencyService setOwns(Property\Owns $owns)
 * @method EmergencyService setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method EmergencyService setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method EmergencyService setPotentialAction(Property\PotentialAction $potentialAction)
 * @method EmergencyService setPriceRange(Property\PriceRange $priceRange)
 * @method EmergencyService setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method EmergencyService setReview(Property\Review $review)
 * @method EmergencyService setSameAs(Property\SameAs $sameAs)
 * @method EmergencyService setSeeks(Property\Seeks $seeks)
 * @method EmergencyService setSponsor(Property\Sponsor $sponsor)
 * @method EmergencyService setSubOrganization(Property\SubOrganization $subOrganization)
 * @method EmergencyService setTaxID(Property\TaxID $taxID)
 * @method EmergencyService setTelephone(Property\Telephone $telephone)
 * @method EmergencyService setUrl(Property\Url $url)
 * @method EmergencyService setVatID(Property\VatID $vatID)
 */
class EmergencyService extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EmergencyService';
	}
}