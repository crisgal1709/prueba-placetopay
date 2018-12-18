<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Support\Str;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }

    public function createTransactionForTest()
    {
        $person = [
            "document"     => '1020447057',
            "documentType" => 'CC',
            "firstName"    => 'Cristian',
            "lastName"     => 'Galeano',
            "company"      => 'Luma',
            "emailAddress" => 'cristian.galeano1913@gmail.com',
            "address"      => 'carrera 46 # 118 - 25',
            "city"         => 'Medellín',
            "province"     => 'Antioquia',
            "country"      => 'Co',
            "phone"        => '30122222',
            "mobile"       => '12336754'
        ];

        $shipping = [
            'document'     => '43817979',
            'documentType' => 'CC',
            'firstName'    => 'Rosa Elena',
            'lastName'     => 'Galeano',
            'company'      => 'House Inc',
            'emailAddress' => 'rosa@gmail.com',
            'address'      => 'carrera 46 # 100-10',
            'city'         => 'Medellin',
            'province'     => 'Antioquia',
            'country'      => 'CO',
            'phone'        => '3010292010',
            'mobile'       => '3102093920',
        ];

        $transaction= [
            "bankCode"       => 1022,
            "bankInterface"  => 0,
            "returnURL"      => 'http://localhost/transacciones/callback',
            "reference"      => 'PUS' . Str::random(16),
            "description"    => 'Transacción de Prueba',
            "language"       => 'ES',
            "currency"       => 'COP',
            "totalAmount"    => (double) 50000,
            "taxAmount"      => (double) 1000,
            "devolutionBase" => (double)0,
            "tipAmount"      => (double)0,
            "payer"          => $person,
            "buyer"          => $person,
            "shipping"       => $shipping,
            "ipAddress"      => '::1',
            "userAgent"      => request()->userAgent(),
            "additionalData" => [],
        ];

     return $transaction;
    }
}
