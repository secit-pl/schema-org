<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FireStation.
 * 
 * @method FireStation setAdditionalType(Property\AdditionalType $additionalType)
 * @method FireStation setAddress(Property\Address $address)
 * @method FireStation setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method FireStation setAlternateName(Property\AlternateName $alternateName)
 * @method FireStation setAlumni(Property\Alumni $alumni)
 * @method FireStation setAreaServed(Property\AreaServed $areaServed)
 * @method FireStation setAward(Property\Award $award)
 * @method FireStation setBrand(Property\Brand $brand)
 * @method FireStation setContactPoint(Property\ContactPoint $contactPoint)
 * @method FireStation setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method FireStation setDepartment(Property\Department $department)
 * @method FireStation setDescription(Property\Description $description)
 * @method FireStation setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method FireStation setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method FireStation setDuns(Property\Duns $duns)
 * @method FireStation setEmail(Property\Email $email)
 * @method FireStation setEmployee(Property\Employee $employee)
 * @method FireStation setEvent(Property\Event $event)
 * @method FireStation setFaxNumber(Property\FaxNumber $faxNumber)
 * @method FireStation setFounder(Property\Founder $founder)
 * @method FireStation setFoundingDate(Property\FoundingDate $foundingDate)
 * @method FireStation setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method FireStation setFunder(Property\Funder $funder)
 * @method FireStation setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method FireStation setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method FireStation setHasPOS(Property\HasPOS $hasPOS)
 * @method FireStation setImage(Property\Image $image)
 * @method FireStation setIsicV4(Property\IsicV4 $isicV4)
 * @method FireStation setLegalName(Property\LegalName $legalName)
 * @method FireStation setLeiCode(Property\LeiCode $leiCode)
 * @method FireStation setLocation(Property\Location $location)
 * @method FireStation setLogo(Property\Logo $logo)
 * @method FireStation setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method FireStation setMakesOffer(Property\MakesOffer $makesOffer)
 * @method FireStation setMember(Property\Member $member)
 * @method FireStation setMemberOf(Property\MemberOf $memberOf)
 * @method FireStation setNaics(Property\Naics $naics)
 * @method FireStation setName(Property\Name $name)
 * @method FireStation setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method FireStation setOpeningHours(Property\OpeningHours $openingHours)
 * @method FireStation setOwns(Property\Owns $owns)
 * @method FireStation setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method FireStation setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method FireStation setPotentialAction(Property\PotentialAction $potentialAction)
 * @method FireStation setPriceRange(Property\PriceRange $priceRange)
 * @method FireStation setReview(Property\Review $review)
 * @method FireStation setSameAs(Property\SameAs $sameAs)
 * @method FireStation setSeeks(Property\Seeks $seeks)
 * @method FireStation setSponsor(Property\Sponsor $sponsor)
 * @method FireStation setSubOrganization(Property\SubOrganization $subOrganization)
 * @method FireStation setTaxID(Property\TaxID $taxID)
 * @method FireStation setTelephone(Property\Telephone $telephone)
 * @method FireStation setUrl(Property\Url $url)
 * @method FireStation setVatID(Property\VatID $vatID)
 */
class FireStation extends EmergencyService {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FireStation';
	}
}