<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 *
 * Modified by __root__ on 27-May-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Mailster\Gmail\Google\Service\Gmail;

class SignAndEncryptKeyPairs extends \Mailster\Gmail\Google\Model
{
  /**
   * @var string
   */
  public $encryptionKeyPairId;
  /**
   * @var string
   */
  public $signingKeyPairId;

  /**
   * @param string
   */
  public function setEncryptionKeyPairId($encryptionKeyPairId)
  {
    $this->encryptionKeyPairId = $encryptionKeyPairId;
  }
  /**
   * @return string
   */
  public function getEncryptionKeyPairId()
  {
    return $this->encryptionKeyPairId;
  }
  /**
   * @param string
   */
  public function setSigningKeyPairId($signingKeyPairId)
  {
    $this->signingKeyPairId = $signingKeyPairId;
  }
  /**
   * @return string
   */
  public function getSigningKeyPairId()
  {
    return $this->signingKeyPairId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SignAndEncryptKeyPairs::class, 'Google_Service_Gmail_SignAndEncryptKeyPairs');