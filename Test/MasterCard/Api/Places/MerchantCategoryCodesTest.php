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



class MerchantCategoryCodesTest extends BaseTest {

    public static $responses = array();

    protected function setUp() {
        parent::setUp();
        //ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        BaseTest::resetAuthentication();
    }

    
    
    
    
    
    
    
                

        public function test_example_merchantcategorycodes()
        {
            

            

            $map = new RequestMap();
            $map->set("Mcc_Codes", "true");
            
            
            $response = MerchantCategoryCodes::query($map);

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "MerchantCategoryCodeList.MerchantCategoryCodeArray.MerchantCategoryCode[0].MerchantCatCode", "0001");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantCategoryCodeList.MerchantCategoryCodeArray.MerchantCategoryCode[0].MerchantCategoryName", "TAP (PORTUGAL)");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantCategoryCodeList.MerchantCategoryCodeArray.MerchantCategoryCode[1].MerchantCatCode", "0002");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantCategoryCodeList.MerchantCategoryCodeArray.MerchantCategoryCode[1].MerchantCategoryName", "ANSA INTERNATIONAL");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantCategoryCodeList.MerchantCategoryCodeArray.MerchantCategoryCode[2].MerchantCatCode", "0003");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantCategoryCodeList.MerchantCategoryCodeArray.MerchantCategoryCode[2].MerchantCategoryName", "CARLTON HOTELS");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantCategoryCodeList.MerchantCategoryCodeArray.MerchantCategoryCode[3].MerchantCatCode", "0004");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantCategoryCodeList.MerchantCategoryCodeArray.MerchantCategoryCode[3].MerchantCategoryName", "AIR CARRIERS  AIRLINES-NOT ELSEWHERE CLASSIFIED");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantCategoryCodeList.MerchantCategoryCodeArray.MerchantCategoryCode[4].MerchantCatCode", "0005");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantCategoryCodeList.MerchantCategoryCodeArray.MerchantCategoryCode[4].MerchantCategoryName", "TRAVEL AGENCIES AND TOUR OPERATORS");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantCategoryCodeList.MerchantCategoryCodeArray.MerchantCategoryCode[5].MerchantCatCode", "0006");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantCategoryCodeList.MerchantCategoryCodeArray.MerchantCategoryCode[5].MerchantCategoryName", "UTLTS-ELCTRC  GAS  HEATING OIL  SANITARY  WATER");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantCategoryCodeList.MerchantCategoryCodeArray.MerchantCategoryCode[6].MerchantCatCode", "0007");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantCategoryCodeList.MerchantCategoryCodeArray.MerchantCategoryCode[6].MerchantCategoryName", "COMPUTERS  COMPUTER PERIPHERAL EQUIPMENT  SOFTWARE");
            

            self::putResponse("example_merchantcategorycodes", $response);
            
        }
        
    
    
}



