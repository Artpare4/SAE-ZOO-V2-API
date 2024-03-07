<?php

namespace App\Tests\Api\User;

use App\Tests\Support\ApiTester;

class UserPostCest
{
    // tests
    public function anonymousCanPostUser(ApiTester $I)
    {
        // 1. Arrange
        $dataPost = [
            'email' => 'ici@test.com',
            'phoneUser' => '0606060606',
            'nomUser' => 'nom',
            'pnomUser' => 'prenom',
            'plainPassword' => 'test',
        ];

        // 2. Act
        $I->sendPost('/api/users', $dataPost);

        // 3. Assert
        $I->seeResponseCodeIs(201);
    }
}
