<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SportsActivityLocation.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\SportsActivityLocationType instead.
 * 
 * @method SportsActivityLocation setAdditionalType(Property\AdditionalType $additionalType)
 * @method SportsActivityLocation setAddress(Property\Address $address)
 * @method SportsActivityLocation setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method SportsActivityLocation setAlternateName(Property\AlternateName $alternateName)
 * @method SportsActivityLocation setAlumni(Property\Alumni $alumni)
 * @method SportsActivityLocation setAreaServed(Property\AreaServed $areaServed)
 * @method SportsActivityLocation setAward(Property\Award $award)
 * @method SportsActivityLocation setBrand(Property\Brand $brand)
 * @method SportsActivityLocation setContactPoint(Property\ContactPoint $contactPoint)
 * @method SportsActivityLocation setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method SportsActivityLocation setDepartment(Property\Department $department)
 * @method SportsActivityLocation setDescription(Property\Description $description)
 * @method SportsActivityLocation setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SportsActivityLocation setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method SportsActivityLocation setDuns(Property\Duns $duns)
 * @method SportsActivityLocation setEmail(Property\Email $email)
 * @method SportsActivityLocation setEmployee(Property\Employee $employee)
 * @method SportsActivityLocation setEvent(Property\Event $event)
 * @method SportsActivityLocation setFaxNumber(Property\FaxNumber $faxNumber)
 * @method SportsActivityLocation setFounder(Property\Founder $founder)
 * @method SportsActivityLocation setFoundingDate(Property\FoundingDate $foundingDate)
 * @method SportsActivityLocation setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method SportsActivityLocation setFunder(Property\Funder $funder)
 * @method SportsActivityLocation setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method SportsActivityLocation setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method SportsActivityLocation setHasPOS(Property\HasPOS $hasPOS)
 * @method SportsActivityLocation setIdentifier(Property\Identifier $identifier)
 * @method SportsActivityLocation setImage(Property\Image $image)
 * @method SportsActivityLocation setIsicV4(Property\IsicV4 $isicV4)
 * @method SportsActivityLocation setLegalName(Property\LegalName $legalName)
 * @method SportsActivityLocation setLeiCode(Property\LeiCode $leiCode)
 * @method SportsActivityLocation setLocation(Property\Location $location)
 * @method SportsActivityLocation setLogo(Property\Logo $logo)
 * @method SportsActivityLocation setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SportsActivityLocation setMakesOffer(Property\MakesOffer $makesOffer)
 * @method SportsActivityLocation setMember(Property\Member $member)
 * @method SportsActivityLocation setMemberOf(Property\MemberOf $memberOf)
 * @method SportsActivityLocation setNaics(Property\Naics $naics)
 * @method SportsActivityLocation setName(Property\Name $name)
 * @method SportsActivityLocation setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method SportsActivityLocation setOpeningHours(Property\OpeningHours $openingHours)
 * @method SportsActivityLocation setOwns(Property\Owns $owns)
 * @method SportsActivityLocation setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method SportsActivityLocation setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method SportsActivityLocation setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SportsActivityLocation setPriceRange(Property\PriceRange $priceRange)
 * @method SportsActivityLocation setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method SportsActivityLocation setReview(Property\Review $review)
 * @method SportsActivityLocation setSameAs(Property\SameAs $sameAs)
 * @method SportsActivityLocation setSeeks(Property\Seeks $seeks)
 * @method SportsActivityLocation setSponsor(Property\Sponsor $sponsor)
 * @method SportsActivityLocation setSubOrganization(Property\SubOrganization $subOrganization)
 * @method SportsActivityLocation setTaxID(Property\TaxID $taxID)
 * @method SportsActivityLocation setTelephone(Property\Telephone $telephone)
 * @method SportsActivityLocation setUrl(Property\Url $url)
 * @method SportsActivityLocation setVatID(Property\VatID $vatID)
 */
class SportsActivityLocation extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SportsActivityLocation';
	}
}