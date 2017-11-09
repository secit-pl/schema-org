<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MobilePhoneStore.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\MobilePhoneStoreType instead.
 * 
 * @method MobilePhoneStore setAdditionalType(Property\AdditionalType $additionalType)
 * @method MobilePhoneStore setAddress(Property\Address $address)
 * @method MobilePhoneStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method MobilePhoneStore setAlternateName(Property\AlternateName $alternateName)
 * @method MobilePhoneStore setAlumni(Property\Alumni $alumni)
 * @method MobilePhoneStore setAreaServed(Property\AreaServed $areaServed)
 * @method MobilePhoneStore setAward(Property\Award $award)
 * @method MobilePhoneStore setBrand(Property\Brand $brand)
 * @method MobilePhoneStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method MobilePhoneStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method MobilePhoneStore setDepartment(Property\Department $department)
 * @method MobilePhoneStore setDescription(Property\Description $description)
 * @method MobilePhoneStore setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MobilePhoneStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method MobilePhoneStore setDuns(Property\Duns $duns)
 * @method MobilePhoneStore setEmail(Property\Email $email)
 * @method MobilePhoneStore setEmployee(Property\Employee $employee)
 * @method MobilePhoneStore setEvent(Property\Event $event)
 * @method MobilePhoneStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method MobilePhoneStore setFounder(Property\Founder $founder)
 * @method MobilePhoneStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method MobilePhoneStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method MobilePhoneStore setFunder(Property\Funder $funder)
 * @method MobilePhoneStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method MobilePhoneStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method MobilePhoneStore setHasPOS(Property\HasPOS $hasPOS)
 * @method MobilePhoneStore setIdentifier(Property\Identifier $identifier)
 * @method MobilePhoneStore setImage(Property\Image $image)
 * @method MobilePhoneStore setIsicV4(Property\IsicV4 $isicV4)
 * @method MobilePhoneStore setLegalName(Property\LegalName $legalName)
 * @method MobilePhoneStore setLeiCode(Property\LeiCode $leiCode)
 * @method MobilePhoneStore setLocation(Property\Location $location)
 * @method MobilePhoneStore setLogo(Property\Logo $logo)
 * @method MobilePhoneStore setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MobilePhoneStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method MobilePhoneStore setMember(Property\Member $member)
 * @method MobilePhoneStore setMemberOf(Property\MemberOf $memberOf)
 * @method MobilePhoneStore setNaics(Property\Naics $naics)
 * @method MobilePhoneStore setName(Property\Name $name)
 * @method MobilePhoneStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method MobilePhoneStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method MobilePhoneStore setOwns(Property\Owns $owns)
 * @method MobilePhoneStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method MobilePhoneStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method MobilePhoneStore setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MobilePhoneStore setPriceRange(Property\PriceRange $priceRange)
 * @method MobilePhoneStore setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method MobilePhoneStore setReview(Property\Review $review)
 * @method MobilePhoneStore setSameAs(Property\SameAs $sameAs)
 * @method MobilePhoneStore setSeeks(Property\Seeks $seeks)
 * @method MobilePhoneStore setSponsor(Property\Sponsor $sponsor)
 * @method MobilePhoneStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method MobilePhoneStore setTaxID(Property\TaxID $taxID)
 * @method MobilePhoneStore setTelephone(Property\Telephone $telephone)
 * @method MobilePhoneStore setUrl(Property\Url $url)
 * @method MobilePhoneStore setVatID(Property\VatID $vatID)
 */
class MobilePhoneStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MobilePhoneStore';
	}
}