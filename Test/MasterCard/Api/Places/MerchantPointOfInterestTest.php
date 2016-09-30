<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are 
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of 
 * conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its 
 * contributors may be used to endorse or promote products derived from this software 
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES 
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT 
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, 
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; 
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER 
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING 
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF 
 * SUCH DAMAGE.
 *
 */

namespace MasterCard\Api\Places;

use MasterCard\Core\Model\RequestMap;
use MasterCard\Core\ApiConfig;
use MasterCard\Core\Security\OAuth\OAuthAuthentication;
use Test\BaseTest;



class MerchantPointOfInterestTest extends BaseTest {

    public static $responses = array();

    protected function setUp() {
        parent::setUp();
        //ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        BaseTest::resetAuthentication();
    }

    
    
                
        public function test_example_merchantpoi()
        {
            

            

            $map = new RequestMap();
            $map->set("pageOffset", "0");
            $map->set("pageLength", "10");
            $map->set("radiusSearch", "false");
            $map->set("unit", "km");
            $map->set("distance", "14");
            $map->set("place.countryCode", "USA");
            
            
            $response = MerchantPointOfInterest::create($map);

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.pageOffset", "0");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.totalCount", "2000");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].merchantName", "SABAS WESTERN WEAR");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].cleansedMerchantName", "SABA'S WESTERN WEAR");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].streetAddr", "67 W BOSTON");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].cleansedStreetAddr", "67 W BOSTON ST");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].cityName", "CHANDLER");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].cleansedCityName", "CHANDLER");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].stateProvidenceCode", "AZ");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].cleansedStateProvidenceCode", "AZ");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].postalCode", "85225");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].cleansedPostalCode", "85225-7801");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].countryCode", "USA");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].cleansedCountryCode", "USA");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].telephoneNumber", "4809634496");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].cleansedTelephoneNumber", "(480) 963-4496");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].mccCode", "5999");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].legalCorporateName", "SABA'S WESTERN WEAR");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].cleansedLegalCorporateName", "DAVID'S WESTERN STORES  INC.");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].industry", "DVG");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].superIndustry", "GEN");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].dateEstablished", "12/31/1997");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].newBusinessFlag", "FALSE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].inBusiness7DayFlag", "TRUE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].inBusiness30DayFlag", "TRUE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].inBusiness60DayFlag", "TRUE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].inBusiness90DayFlag", "TRUE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].inBusiness180DayFlag", "TRUE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].inBusiness360DayFlag", "TRUE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].latitude", "33.302154");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].longitude", "-111.842276");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].geocodeQualityIndicator", "STOREFRONT");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].primaryChannelOfDistribution", "B");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].cashBack", "FALSE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].payAtThePump", "FALSE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].nfcFlag", "TRUE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].aggregateMerchantId", "5999");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].aggregateMerchantName", "NON-AGGREGATED MISCELLANEOUS AND SPECIALTY RETAIL STORES 5999");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].keyAggregateMerchantId", "5999");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].parentAggregateMerchantId", "10001460");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].parentAggregateMerchantName", "NON-AGGREGATED");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].msaCode", "6200");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].naicsCode", "453998");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].dmaCode", "753");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[0].locationId", "55476524");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].merchantName", "THAKU'S MENS WEAR");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].cleansedMerchantName", "THAKU'S MENS WEAR");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].streetAddr", "4320 N SCOTTSDALE ROAD");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].cleansedStreetAddr", "4320 N SCOTTSDALE RD");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].cityName", "SCOTTSDALE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].cleansedCityName", "SCOTTSDALE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].stateProvidenceCode", "AZ");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].cleansedStateProvidenceCode", "AZ");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].postalCode", "85251");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].cleansedPostalCode", "85251-3312");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].countryCode", "USA");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].cleansedCountryCode", "USA");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].telephoneNumber", "4809477070");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].cleansedTelephoneNumber", "(480) 947-7070");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].mccCode", "5611");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].legalCorporateName", "THAKU'S MENSWEAR");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].cleansedLegalCorporateName", "THAKU OF HONG KONG  INC.");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].industry", "AAM");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].superIndustry", "AAP");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].dateEstablished", "12/31/1997");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].newBusinessFlag", "FALSE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].inBusiness7DayFlag", "TRUE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].inBusiness30DayFlag", "TRUE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].inBusiness60DayFlag", "TRUE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].inBusiness90DayFlag", "TRUE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].inBusiness180DayFlag", "TRUE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].inBusiness360DayFlag", "TRUE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].latitude", "33.499019");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].longitude", "-111.926223");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].geocodeQualityIndicator", "STOREFRONT");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].primaryChannelOfDistribution", "B");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].cashBack", "FALSE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].payAtThePump", "FALSE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].nfcFlag", "TRUE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].aggregateMerchantId", "5611");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].aggregateMerchantName", "NON-AGGREGATED MEN'S AND BOY'S CLOTHING AND ACCESSORIES STOR 5611");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].keyAggregateMerchantId", "5611");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].parentAggregateMerchantId", "10001460");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].parentAggregateMerchantName", "NON-AGGREGATED");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].msaCode", "6200");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].naicsCode", "424320");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].dmaCode", "753");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[1].locationId", "55475954");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].merchantName", "VAN HEUSEN #071");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].cleansedMerchantName", "VAN HEUSEN");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].streetAddr", "COOGAN BLVD");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].cleansedStreetAddr", "1 COOGAN BLVD");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].cityName", "MYSTIC");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].cleansedCityName", "MYSTIC");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].stateProvidenceCode", "CT");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].cleansedStateProvidenceCode", "CT");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].postalCode", "06355");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].cleansedPostalCode", "06355-1927");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].countryCode", "USA");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].cleansedCountryCode", "USA");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].telephoneNumber", "8605729972");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].cleansedTelephoneNumber", "8605729972");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].mccCode", "5611");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].legalCorporateName", "VAN HEUSEN RETAI");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].cleansedLegalCorporateName", "VAN HEUSEN RETAI");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].industry", "AAF");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].superIndustry", "AAP");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].dateEstablished", "12/31/1997");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].newBusinessFlag", "FALSE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].inBusiness7DayFlag", "TRUE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].inBusiness30DayFlag", "TRUE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].inBusiness60DayFlag", "TRUE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].inBusiness90DayFlag", "TRUE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].inBusiness180DayFlag", "TRUE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].inBusiness360DayFlag", "TRUE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].latitude", "41.372157");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].longitude", "-71.955404");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].geocodeQualityIndicator", "STOREFRONT");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].primaryChannelOfDistribution", "B");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].cashBack", "FALSE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].payAtThePump", "FALSE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].nfcFlag", "FALSE");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].aggregateMerchantId", "11917");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].aggregateMerchantName", "VAN HEUSEN");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].keyAggregateMerchantId", "11917");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].parentAggregateMerchantId", "10000205");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].parentAggregateMerchantName", "PHILLIPS-VAN HEUSEN CORP");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].naicsCode", "448140");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].dmaCode", "533");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantPOIResponse.places.place[2].locationId", "55475387");
            

            self::putResponse("example_merchantpoi", $response);
            
        }
        
    
    
    
    
    
    
    
}



