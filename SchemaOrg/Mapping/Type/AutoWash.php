<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AutoWash.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\AutoWashType instead.
 * 
 * @method AutoWash setAdditionalType(Property\AdditionalType $additionalType)
 * @method AutoWash setAddress(Property\Address $address)
 * @method AutoWash setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method AutoWash setAlternateName(Property\AlternateName $alternateName)
 * @method AutoWash setAlumni(Property\Alumni $alumni)
 * @method AutoWash setAreaServed(Property\AreaServed $areaServed)
 * @method AutoWash setAward(Property\Award $award)
 * @method AutoWash setBrand(Property\Brand $brand)
 * @method AutoWash setContactPoint(Property\ContactPoint $contactPoint)
 * @method AutoWash setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method AutoWash setDepartment(Property\Department $department)
 * @method AutoWash setDescription(Property\Description $description)
 * @method AutoWash setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AutoWash setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method AutoWash setDuns(Property\Duns $duns)
 * @method AutoWash setEmail(Property\Email $email)
 * @method AutoWash setEmployee(Property\Employee $employee)
 * @method AutoWash setEvent(Property\Event $event)
 * @method AutoWash setFaxNumber(Property\FaxNumber $faxNumber)
 * @method AutoWash setFounder(Property\Founder $founder)
 * @method AutoWash setFoundingDate(Property\FoundingDate $foundingDate)
 * @method AutoWash setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method AutoWash setFunder(Property\Funder $funder)
 * @method AutoWash setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method AutoWash setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method AutoWash setHasPOS(Property\HasPOS $hasPOS)
 * @method AutoWash setIdentifier(Property\Identifier $identifier)
 * @method AutoWash setImage(Property\Image $image)
 * @method AutoWash setIsicV4(Property\IsicV4 $isicV4)
 * @method AutoWash setLegalName(Property\LegalName $legalName)
 * @method AutoWash setLeiCode(Property\LeiCode $leiCode)
 * @method AutoWash setLocation(Property\Location $location)
 * @method AutoWash setLogo(Property\Logo $logo)
 * @method AutoWash setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AutoWash setMakesOffer(Property\MakesOffer $makesOffer)
 * @method AutoWash setMember(Property\Member $member)
 * @method AutoWash setMemberOf(Property\MemberOf $memberOf)
 * @method AutoWash setNaics(Property\Naics $naics)
 * @method AutoWash setName(Property\Name $name)
 * @method AutoWash setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method AutoWash setOpeningHours(Property\OpeningHours $openingHours)
 * @method AutoWash setOwns(Property\Owns $owns)
 * @method AutoWash setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method AutoWash setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method AutoWash setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AutoWash setPriceRange(Property\PriceRange $priceRange)
 * @method AutoWash setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method AutoWash setReview(Property\Review $review)
 * @method AutoWash setSameAs(Property\SameAs $sameAs)
 * @method AutoWash setSeeks(Property\Seeks $seeks)
 * @method AutoWash setSponsor(Property\Sponsor $sponsor)
 * @method AutoWash setSubOrganization(Property\SubOrganization $subOrganization)
 * @method AutoWash setTaxID(Property\TaxID $taxID)
 * @method AutoWash setTelephone(Property\Telephone $telephone)
 * @method AutoWash setUrl(Property\Url $url)
 * @method AutoWash setVatID(Property\VatID $vatID)
 */
class AutoWash extends AutomotiveBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutoWash';
	}
}