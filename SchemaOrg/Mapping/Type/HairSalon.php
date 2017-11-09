<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HairSalon.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\HairSalonType instead.
 * 
 * @method HairSalon setAdditionalType(Property\AdditionalType $additionalType)
 * @method HairSalon setAddress(Property\Address $address)
 * @method HairSalon setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method HairSalon setAlternateName(Property\AlternateName $alternateName)
 * @method HairSalon setAlumni(Property\Alumni $alumni)
 * @method HairSalon setAreaServed(Property\AreaServed $areaServed)
 * @method HairSalon setAward(Property\Award $award)
 * @method HairSalon setBrand(Property\Brand $brand)
 * @method HairSalon setContactPoint(Property\ContactPoint $contactPoint)
 * @method HairSalon setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method HairSalon setDepartment(Property\Department $department)
 * @method HairSalon setDescription(Property\Description $description)
 * @method HairSalon setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method HairSalon setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method HairSalon setDuns(Property\Duns $duns)
 * @method HairSalon setEmail(Property\Email $email)
 * @method HairSalon setEmployee(Property\Employee $employee)
 * @method HairSalon setEvent(Property\Event $event)
 * @method HairSalon setFaxNumber(Property\FaxNumber $faxNumber)
 * @method HairSalon setFounder(Property\Founder $founder)
 * @method HairSalon setFoundingDate(Property\FoundingDate $foundingDate)
 * @method HairSalon setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method HairSalon setFunder(Property\Funder $funder)
 * @method HairSalon setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method HairSalon setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method HairSalon setHasPOS(Property\HasPOS $hasPOS)
 * @method HairSalon setIdentifier(Property\Identifier $identifier)
 * @method HairSalon setImage(Property\Image $image)
 * @method HairSalon setIsicV4(Property\IsicV4 $isicV4)
 * @method HairSalon setLegalName(Property\LegalName $legalName)
 * @method HairSalon setLeiCode(Property\LeiCode $leiCode)
 * @method HairSalon setLocation(Property\Location $location)
 * @method HairSalon setLogo(Property\Logo $logo)
 * @method HairSalon setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method HairSalon setMakesOffer(Property\MakesOffer $makesOffer)
 * @method HairSalon setMember(Property\Member $member)
 * @method HairSalon setMemberOf(Property\MemberOf $memberOf)
 * @method HairSalon setNaics(Property\Naics $naics)
 * @method HairSalon setName(Property\Name $name)
 * @method HairSalon setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method HairSalon setOpeningHours(Property\OpeningHours $openingHours)
 * @method HairSalon setOwns(Property\Owns $owns)
 * @method HairSalon setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method HairSalon setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method HairSalon setPotentialAction(Property\PotentialAction $potentialAction)
 * @method HairSalon setPriceRange(Property\PriceRange $priceRange)
 * @method HairSalon setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method HairSalon setReview(Property\Review $review)
 * @method HairSalon setSameAs(Property\SameAs $sameAs)
 * @method HairSalon setSeeks(Property\Seeks $seeks)
 * @method HairSalon setSponsor(Property\Sponsor $sponsor)
 * @method HairSalon setSubOrganization(Property\SubOrganization $subOrganization)
 * @method HairSalon setTaxID(Property\TaxID $taxID)
 * @method HairSalon setTelephone(Property\Telephone $telephone)
 * @method HairSalon setUrl(Property\Url $url)
 * @method HairSalon setVatID(Property\VatID $vatID)
 */
class HairSalon extends HealthAndBeautyBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HairSalon';
	}
}