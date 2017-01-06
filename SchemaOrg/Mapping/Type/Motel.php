<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Motel.
 * 
 * @method Motel setAdditionalType(Property\AdditionalType $additionalType)
 * @method Motel setAddress(Property\Address $address)
 * @method Motel setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Motel setAlternateName(Property\AlternateName $alternateName)
 * @method Motel setAlumni(Property\Alumni $alumni)
 * @method Motel setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Motel setAreaServed(Property\AreaServed $areaServed)
 * @method Motel setAudience(Property\Audience $audience)
 * @method Motel setAvailableLanguage(Property\AvailableLanguage $availableLanguage)
 * @method Motel setAward(Property\Award $award)
 * @method Motel setBrand(Property\Brand $brand)
 * @method Motel setCheckinTime(Property\CheckinTime $checkinTime)
 * @method Motel setCheckoutTime(Property\CheckoutTime $checkoutTime)
 * @method Motel setContactPoint(Property\ContactPoint $contactPoint)
 * @method Motel setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method Motel setDepartment(Property\Department $department)
 * @method Motel setDescription(Property\Description $description)
 * @method Motel setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Motel setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Motel setDuns(Property\Duns $duns)
 * @method Motel setEmail(Property\Email $email)
 * @method Motel setEmployee(Property\Employee $employee)
 * @method Motel setEvent(Property\Event $event)
 * @method Motel setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Motel setFounder(Property\Founder $founder)
 * @method Motel setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Motel setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Motel setFunder(Property\Funder $funder)
 * @method Motel setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Motel setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Motel setHasPOS(Property\HasPOS $hasPOS)
 * @method Motel setImage(Property\Image $image)
 * @method Motel setIsicV4(Property\IsicV4 $isicV4)
 * @method Motel setLegalName(Property\LegalName $legalName)
 * @method Motel setLeiCode(Property\LeiCode $leiCode)
 * @method Motel setLocation(Property\Location $location)
 * @method Motel setLogo(Property\Logo $logo)
 * @method Motel setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Motel setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Motel setMember(Property\Member $member)
 * @method Motel setMemberOf(Property\MemberOf $memberOf)
 * @method Motel setNaics(Property\Naics $naics)
 * @method Motel setName(Property\Name $name)
 * @method Motel setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Motel setOpeningHours(Property\OpeningHours $openingHours)
 * @method Motel setOwns(Property\Owns $owns)
 * @method Motel setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Motel setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method Motel setPetsAllowed(Property\PetsAllowed $petsAllowed)
 * @method Motel setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Motel setPriceRange(Property\PriceRange $priceRange)
 * @method Motel setReview(Property\Review $review)
 * @method Motel setSameAs(Property\SameAs $sameAs)
 * @method Motel setSeeks(Property\Seeks $seeks)
 * @method Motel setSponsor(Property\Sponsor $sponsor)
 * @method Motel setStarRating(Property\StarRating $starRating)
 * @method Motel setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Motel setTaxID(Property\TaxID $taxID)
 * @method Motel setTelephone(Property\Telephone $telephone)
 * @method Motel setUrl(Property\Url $url)
 * @method Motel setVatID(Property\VatID $vatID)
 */
class Motel extends LodgingBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Motel';
	}
}