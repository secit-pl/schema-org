<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AmusementPark.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\AmusementParkType instead.
 * 
 * @method AmusementPark setAdditionalType(Property\AdditionalType $additionalType)
 * @method AmusementPark setAddress(Property\Address $address)
 * @method AmusementPark setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method AmusementPark setAlternateName(Property\AlternateName $alternateName)
 * @method AmusementPark setAlumni(Property\Alumni $alumni)
 * @method AmusementPark setAreaServed(Property\AreaServed $areaServed)
 * @method AmusementPark setAward(Property\Award $award)
 * @method AmusementPark setBrand(Property\Brand $brand)
 * @method AmusementPark setContactPoint(Property\ContactPoint $contactPoint)
 * @method AmusementPark setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method AmusementPark setDepartment(Property\Department $department)
 * @method AmusementPark setDescription(Property\Description $description)
 * @method AmusementPark setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AmusementPark setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method AmusementPark setDuns(Property\Duns $duns)
 * @method AmusementPark setEmail(Property\Email $email)
 * @method AmusementPark setEmployee(Property\Employee $employee)
 * @method AmusementPark setEvent(Property\Event $event)
 * @method AmusementPark setFaxNumber(Property\FaxNumber $faxNumber)
 * @method AmusementPark setFounder(Property\Founder $founder)
 * @method AmusementPark setFoundingDate(Property\FoundingDate $foundingDate)
 * @method AmusementPark setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method AmusementPark setFunder(Property\Funder $funder)
 * @method AmusementPark setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method AmusementPark setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method AmusementPark setHasPOS(Property\HasPOS $hasPOS)
 * @method AmusementPark setIdentifier(Property\Identifier $identifier)
 * @method AmusementPark setImage(Property\Image $image)
 * @method AmusementPark setIsicV4(Property\IsicV4 $isicV4)
 * @method AmusementPark setLegalName(Property\LegalName $legalName)
 * @method AmusementPark setLeiCode(Property\LeiCode $leiCode)
 * @method AmusementPark setLocation(Property\Location $location)
 * @method AmusementPark setLogo(Property\Logo $logo)
 * @method AmusementPark setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AmusementPark setMakesOffer(Property\MakesOffer $makesOffer)
 * @method AmusementPark setMember(Property\Member $member)
 * @method AmusementPark setMemberOf(Property\MemberOf $memberOf)
 * @method AmusementPark setNaics(Property\Naics $naics)
 * @method AmusementPark setName(Property\Name $name)
 * @method AmusementPark setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method AmusementPark setOpeningHours(Property\OpeningHours $openingHours)
 * @method AmusementPark setOwns(Property\Owns $owns)
 * @method AmusementPark setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method AmusementPark setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method AmusementPark setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AmusementPark setPriceRange(Property\PriceRange $priceRange)
 * @method AmusementPark setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method AmusementPark setReview(Property\Review $review)
 * @method AmusementPark setSameAs(Property\SameAs $sameAs)
 * @method AmusementPark setSeeks(Property\Seeks $seeks)
 * @method AmusementPark setSponsor(Property\Sponsor $sponsor)
 * @method AmusementPark setSubOrganization(Property\SubOrganization $subOrganization)
 * @method AmusementPark setTaxID(Property\TaxID $taxID)
 * @method AmusementPark setTelephone(Property\Telephone $telephone)
 * @method AmusementPark setUrl(Property\Url $url)
 * @method AmusementPark setVatID(Property\VatID $vatID)
 */
class AmusementPark extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AmusementPark';
	}
}