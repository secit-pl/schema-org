<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Campground.
 * 
 * @method Campground setAdditionalType(Property\AdditionalType $additionalType)
 * @method Campground setAddress(Property\Address $address)
 * @method Campground setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Campground setAlternateName(Property\AlternateName $alternateName)
 * @method Campground setAlumni(Property\Alumni $alumni)
 * @method Campground setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Campground setAreaServed(Property\AreaServed $areaServed)
 * @method Campground setAudience(Property\Audience $audience)
 * @method Campground setAvailableLanguage(Property\AvailableLanguage $availableLanguage)
 * @method Campground setAward(Property\Award $award)
 * @method Campground setBrand(Property\Brand $brand)
 * @method Campground setCheckinTime(Property\CheckinTime $checkinTime)
 * @method Campground setCheckoutTime(Property\CheckoutTime $checkoutTime)
 * @method Campground setContactPoint(Property\ContactPoint $contactPoint)
 * @method Campground setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method Campground setDepartment(Property\Department $department)
 * @method Campground setDescription(Property\Description $description)
 * @method Campground setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Campground setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Campground setDuns(Property\Duns $duns)
 * @method Campground setEmail(Property\Email $email)
 * @method Campground setEmployee(Property\Employee $employee)
 * @method Campground setEvent(Property\Event $event)
 * @method Campground setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Campground setFounder(Property\Founder $founder)
 * @method Campground setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Campground setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Campground setFunder(Property\Funder $funder)
 * @method Campground setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Campground setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Campground setHasPOS(Property\HasPOS $hasPOS)
 * @method Campground setImage(Property\Image $image)
 * @method Campground setIsicV4(Property\IsicV4 $isicV4)
 * @method Campground setLegalName(Property\LegalName $legalName)
 * @method Campground setLeiCode(Property\LeiCode $leiCode)
 * @method Campground setLocation(Property\Location $location)
 * @method Campground setLogo(Property\Logo $logo)
 * @method Campground setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Campground setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Campground setMember(Property\Member $member)
 * @method Campground setMemberOf(Property\MemberOf $memberOf)
 * @method Campground setNaics(Property\Naics $naics)
 * @method Campground setName(Property\Name $name)
 * @method Campground setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Campground setOpeningHours(Property\OpeningHours $openingHours)
 * @method Campground setOwns(Property\Owns $owns)
 * @method Campground setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Campground setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method Campground setPetsAllowed(Property\PetsAllowed $petsAllowed)
 * @method Campground setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Campground setPriceRange(Property\PriceRange $priceRange)
 * @method Campground setReview(Property\Review $review)
 * @method Campground setSameAs(Property\SameAs $sameAs)
 * @method Campground setSeeks(Property\Seeks $seeks)
 * @method Campground setSponsor(Property\Sponsor $sponsor)
 * @method Campground setStarRating(Property\StarRating $starRating)
 * @method Campground setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Campground setTaxID(Property\TaxID $taxID)
 * @method Campground setTelephone(Property\Telephone $telephone)
 * @method Campground setUrl(Property\Url $url)
 * @method Campground setVatID(Property\VatID $vatID)
 */
class Campground extends LodgingBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Campground';
	}
}