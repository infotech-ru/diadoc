<?php

namespace infotech\diadoc\Signer\Interfaces;

use infotech\diadoc\Exception\SignerProviderException;

interface SignerProviderInterface
{
    /**
     * Encrypt plain data
     * @param string $plainData Input data
     * @return string Encrypted data in DER format
     * @throws SignerProviderException
     */
    public function encrypt(string $plainData): string;

    /**
     * Decrypt encrypted data
     * @param string $encryptedData Encrypted data in DER format
     * @return string Encrypted value
     * @throws SignerProviderException
     */
    public function decrypt(string $encryptedData): string;

    /**
     * Sign data
     * @param string $data Input data
     * @return string Signature
     * @throws SignerProviderException
     */
    public function sign(string $data): string;

    /**
     * Check signature for input data
     * @param string $data Input data
     * @param string $sign Signature in DER format
     * @return bool Signature is valid
     * @throws SignerProviderException
     */
    public function checkSign(string $data, string $sign): bool;
}
