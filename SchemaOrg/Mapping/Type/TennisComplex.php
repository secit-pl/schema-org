<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TennisComplex.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\TennisComplexType instead.
 * 
 * @method TennisComplex setAdditionalType(Property\AdditionalType $additionalType)
 * @method TennisComplex setAddress(Property\Address $address)
 * @method TennisComplex setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method TennisComplex setAlternateName(Property\AlternateName $alternateName)
 * @method TennisComplex setAlumni(Property\Alumni $alumni)
 * @method TennisComplex setAreaServed(Property\AreaServed $areaServed)
 * @method TennisComplex setAward(Property\Award $award)
 * @method TennisComplex setBrand(Property\Brand $brand)
 * @method TennisComplex setContactPoint(Property\ContactPoint $contactPoint)
 * @method TennisComplex setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method TennisComplex setDepartment(Property\Department $department)
 * @method TennisComplex setDescription(Property\Description $description)
 * @method TennisComplex setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TennisComplex setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method TennisComplex setDuns(Property\Duns $duns)
 * @method TennisComplex setEmail(Property\Email $email)
 * @method TennisComplex setEmployee(Property\Employee $employee)
 * @method TennisComplex setEvent(Property\Event $event)
 * @method TennisComplex setFaxNumber(Property\FaxNumber $faxNumber)
 * @method TennisComplex setFounder(Property\Founder $founder)
 * @method TennisComplex setFoundingDate(Property\FoundingDate $foundingDate)
 * @method TennisComplex setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method TennisComplex setFunder(Property\Funder $funder)
 * @method TennisComplex setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method TennisComplex setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method TennisComplex setHasPOS(Property\HasPOS $hasPOS)
 * @method TennisComplex setIdentifier(Property\Identifier $identifier)
 * @method TennisComplex setImage(Property\Image $image)
 * @method TennisComplex setIsicV4(Property\IsicV4 $isicV4)
 * @method TennisComplex setLegalName(Property\LegalName $legalName)
 * @method TennisComplex setLeiCode(Property\LeiCode $leiCode)
 * @method TennisComplex setLocation(Property\Location $location)
 * @method TennisComplex setLogo(Property\Logo $logo)
 * @method TennisComplex setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TennisComplex setMakesOffer(Property\MakesOffer $makesOffer)
 * @method TennisComplex setMember(Property\Member $member)
 * @method TennisComplex setMemberOf(Property\MemberOf $memberOf)
 * @method TennisComplex setNaics(Property\Naics $naics)
 * @method TennisComplex setName(Property\Name $name)
 * @method TennisComplex setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method TennisComplex setOpeningHours(Property\OpeningHours $openingHours)
 * @method TennisComplex setOwns(Property\Owns $owns)
 * @method TennisComplex setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method TennisComplex setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method TennisComplex setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TennisComplex setPriceRange(Property\PriceRange $priceRange)
 * @method TennisComplex setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method TennisComplex setReview(Property\Review $review)
 * @method TennisComplex setSameAs(Property\SameAs $sameAs)
 * @method TennisComplex setSeeks(Property\Seeks $seeks)
 * @method TennisComplex setSponsor(Property\Sponsor $sponsor)
 * @method TennisComplex setSubOrganization(Property\SubOrganization $subOrganization)
 * @method TennisComplex setTaxID(Property\TaxID $taxID)
 * @method TennisComplex setTelephone(Property\Telephone $telephone)
 * @method TennisComplex setUrl(Property\Url $url)
 * @method TennisComplex setVatID(Property\VatID $vatID)
 */
class TennisComplex extends SportsActivityLocation {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TennisComplex';
	}
}