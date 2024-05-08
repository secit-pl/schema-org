<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A Workers Union (also known as a Labor Union, Labour Union, or Trade Union) is an organization that promotes the interests of its worker members by collectively bargaining with management, organizing, and political lobbying.
 * 
 * @method WorkersUnionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WorkersUnionType setAddress(Property\AddressProperty $address)
 * @method WorkersUnionType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method WorkersUnionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WorkersUnionType setAlumni(Property\AlumniProperty $alumni)
 * @method WorkersUnionType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method WorkersUnionType setAward(Property\AwardProperty $award)
 * @method WorkersUnionType setBrand(Property\BrandProperty $brand)
 * @method WorkersUnionType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method WorkersUnionType setDepartment(Property\DepartmentProperty $department)
 * @method WorkersUnionType setDescription(Property\DescriptionProperty $description)
 * @method WorkersUnionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WorkersUnionType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method WorkersUnionType setDuns(Property\DunsProperty $duns)
 * @method WorkersUnionType setEmail(Property\EmailProperty $email)
 * @method WorkersUnionType setEmployee(Property\EmployeeProperty $employee)
 * @method WorkersUnionType setEvent(Property\EventProperty $event)
 * @method WorkersUnionType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method WorkersUnionType setFounder(Property\FounderProperty $founder)
 * @method WorkersUnionType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method WorkersUnionType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method WorkersUnionType setFunder(Property\FunderProperty $funder)
 * @method WorkersUnionType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method WorkersUnionType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method WorkersUnionType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method WorkersUnionType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method WorkersUnionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WorkersUnionType setImage(Property\ImageProperty $image)
 * @method WorkersUnionType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method WorkersUnionType setIsicV4(Property\IsicV4Property $isicV4)
 * @method WorkersUnionType setKeywords(Property\KeywordsProperty $keywords)
 * @method WorkersUnionType setLegalName(Property\LegalNameProperty $legalName)
 * @method WorkersUnionType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method WorkersUnionType setLocation(Property\LocationProperty $location)
 * @method WorkersUnionType setLogo(Property\LogoProperty $logo)
 * @method WorkersUnionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WorkersUnionType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method WorkersUnionType setMember(Property\MemberProperty $member)
 * @method WorkersUnionType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method WorkersUnionType setNaics(Property\NaicsProperty $naics)
 * @method WorkersUnionType setName(Property\NameProperty $name)
 * @method WorkersUnionType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method WorkersUnionType setOwns(Property\OwnsProperty $owns)
 * @method WorkersUnionType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method WorkersUnionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WorkersUnionType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method WorkersUnionType setReview(Property\ReviewProperty $review)
 * @method WorkersUnionType setSameAs(Property\SameAsProperty $sameAs)
 * @method WorkersUnionType setSeeks(Property\SeeksProperty $seeks)
 * @method WorkersUnionType setSlogan(Property\SloganProperty $slogan)
 * @method WorkersUnionType setSponsor(Property\SponsorProperty $sponsor)
 * @method WorkersUnionType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method WorkersUnionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method WorkersUnionType setTaxID(Property\TaxIDProperty $taxID)
 * @method WorkersUnionType setTelephone(Property\TelephoneProperty $telephone)
 * @method WorkersUnionType setUrl(Property\UrlProperty $url)
 * @method WorkersUnionType setVatID(Property\VatIDProperty $vatID)
 */
class WorkersUnionType extends OrganizationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WorkersUnion';
	}
}