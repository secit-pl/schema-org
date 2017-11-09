<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OfficeEquipmentStore.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\OfficeEquipmentStoreType instead.
 * 
 * @method OfficeEquipmentStore setAdditionalType(Property\AdditionalType $additionalType)
 * @method OfficeEquipmentStore setAddress(Property\Address $address)
 * @method OfficeEquipmentStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method OfficeEquipmentStore setAlternateName(Property\AlternateName $alternateName)
 * @method OfficeEquipmentStore setAlumni(Property\Alumni $alumni)
 * @method OfficeEquipmentStore setAreaServed(Property\AreaServed $areaServed)
 * @method OfficeEquipmentStore setAward(Property\Award $award)
 * @method OfficeEquipmentStore setBrand(Property\Brand $brand)
 * @method OfficeEquipmentStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method OfficeEquipmentStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method OfficeEquipmentStore setDepartment(Property\Department $department)
 * @method OfficeEquipmentStore setDescription(Property\Description $description)
 * @method OfficeEquipmentStore setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OfficeEquipmentStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method OfficeEquipmentStore setDuns(Property\Duns $duns)
 * @method OfficeEquipmentStore setEmail(Property\Email $email)
 * @method OfficeEquipmentStore setEmployee(Property\Employee $employee)
 * @method OfficeEquipmentStore setEvent(Property\Event $event)
 * @method OfficeEquipmentStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method OfficeEquipmentStore setFounder(Property\Founder $founder)
 * @method OfficeEquipmentStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method OfficeEquipmentStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method OfficeEquipmentStore setFunder(Property\Funder $funder)
 * @method OfficeEquipmentStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method OfficeEquipmentStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method OfficeEquipmentStore setHasPOS(Property\HasPOS $hasPOS)
 * @method OfficeEquipmentStore setIdentifier(Property\Identifier $identifier)
 * @method OfficeEquipmentStore setImage(Property\Image $image)
 * @method OfficeEquipmentStore setIsicV4(Property\IsicV4 $isicV4)
 * @method OfficeEquipmentStore setLegalName(Property\LegalName $legalName)
 * @method OfficeEquipmentStore setLeiCode(Property\LeiCode $leiCode)
 * @method OfficeEquipmentStore setLocation(Property\Location $location)
 * @method OfficeEquipmentStore setLogo(Property\Logo $logo)
 * @method OfficeEquipmentStore setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OfficeEquipmentStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method OfficeEquipmentStore setMember(Property\Member $member)
 * @method OfficeEquipmentStore setMemberOf(Property\MemberOf $memberOf)
 * @method OfficeEquipmentStore setNaics(Property\Naics $naics)
 * @method OfficeEquipmentStore setName(Property\Name $name)
 * @method OfficeEquipmentStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method OfficeEquipmentStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method OfficeEquipmentStore setOwns(Property\Owns $owns)
 * @method OfficeEquipmentStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method OfficeEquipmentStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method OfficeEquipmentStore setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OfficeEquipmentStore setPriceRange(Property\PriceRange $priceRange)
 * @method OfficeEquipmentStore setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method OfficeEquipmentStore setReview(Property\Review $review)
 * @method OfficeEquipmentStore setSameAs(Property\SameAs $sameAs)
 * @method OfficeEquipmentStore setSeeks(Property\Seeks $seeks)
 * @method OfficeEquipmentStore setSponsor(Property\Sponsor $sponsor)
 * @method OfficeEquipmentStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method OfficeEquipmentStore setTaxID(Property\TaxID $taxID)
 * @method OfficeEquipmentStore setTelephone(Property\Telephone $telephone)
 * @method OfficeEquipmentStore setUrl(Property\Url $url)
 * @method OfficeEquipmentStore setVatID(Property\VatID $vatID)
 */
class OfficeEquipmentStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OfficeEquipmentStore';
	}
}