<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SportsClub.
 * 
 * @method SportsClub setAdditionalType(Property\AdditionalType $additionalType)
 * @method SportsClub setAddress(Property\Address $address)
 * @method SportsClub setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method SportsClub setAlternateName(Property\AlternateName $alternateName)
 * @method SportsClub setAlumni(Property\Alumni $alumni)
 * @method SportsClub setAreaServed(Property\AreaServed $areaServed)
 * @method SportsClub setAward(Property\Award $award)
 * @method SportsClub setBrand(Property\Brand $brand)
 * @method SportsClub setContactPoint(Property\ContactPoint $contactPoint)
 * @method SportsClub setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method SportsClub setDepartment(Property\Department $department)
 * @method SportsClub setDescription(Property\Description $description)
 * @method SportsClub setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SportsClub setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method SportsClub setDuns(Property\Duns $duns)
 * @method SportsClub setEmail(Property\Email $email)
 * @method SportsClub setEmployee(Property\Employee $employee)
 * @method SportsClub setEvent(Property\Event $event)
 * @method SportsClub setFaxNumber(Property\FaxNumber $faxNumber)
 * @method SportsClub setFounder(Property\Founder $founder)
 * @method SportsClub setFoundingDate(Property\FoundingDate $foundingDate)
 * @method SportsClub setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method SportsClub setFunder(Property\Funder $funder)
 * @method SportsClub setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method SportsClub setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method SportsClub setHasPOS(Property\HasPOS $hasPOS)
 * @method SportsClub setIdentifier(Property\Identifier $identifier)
 * @method SportsClub setImage(Property\Image $image)
 * @method SportsClub setIsicV4(Property\IsicV4 $isicV4)
 * @method SportsClub setLegalName(Property\LegalName $legalName)
 * @method SportsClub setLeiCode(Property\LeiCode $leiCode)
 * @method SportsClub setLocation(Property\Location $location)
 * @method SportsClub setLogo(Property\Logo $logo)
 * @method SportsClub setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SportsClub setMakesOffer(Property\MakesOffer $makesOffer)
 * @method SportsClub setMember(Property\Member $member)
 * @method SportsClub setMemberOf(Property\MemberOf $memberOf)
 * @method SportsClub setNaics(Property\Naics $naics)
 * @method SportsClub setName(Property\Name $name)
 * @method SportsClub setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method SportsClub setOpeningHours(Property\OpeningHours $openingHours)
 * @method SportsClub setOwns(Property\Owns $owns)
 * @method SportsClub setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method SportsClub setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method SportsClub setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SportsClub setPriceRange(Property\PriceRange $priceRange)
 * @method SportsClub setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method SportsClub setReview(Property\Review $review)
 * @method SportsClub setSameAs(Property\SameAs $sameAs)
 * @method SportsClub setSeeks(Property\Seeks $seeks)
 * @method SportsClub setSponsor(Property\Sponsor $sponsor)
 * @method SportsClub setSubOrganization(Property\SubOrganization $subOrganization)
 * @method SportsClub setTaxID(Property\TaxID $taxID)
 * @method SportsClub setTelephone(Property\Telephone $telephone)
 * @method SportsClub setUrl(Property\Url $url)
 * @method SportsClub setVatID(Property\VatID $vatID)
 */
class SportsClub extends SportsActivityLocation {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SportsClub';
	}
}