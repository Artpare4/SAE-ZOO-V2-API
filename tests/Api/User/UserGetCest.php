<?php

namespace App\Tests\Api\User;

use App\Entity\User;
use App\Factory\UserFactory;
use App\Tests\Support\ApiTester;

class UserGetCest
{
    protected static function expectedProperties(): array
    {
        return [
            'id' => 'integer',
            'email' => 'string',
            'reservations' => 'array',
            'phoneUser' => 'string',
            'nomUser' => 'string',
            'pnomUser' => 'string',
        ];
    }

    public function adminsCanGetUsers(ApiTester $I): void
    {
        // 1. Arrange
        UserFactory::createOne();
        $admin = UserFactory::createOne(['roles' => ['ROLE_ADMIN']])->object();
        codecept_debug($admin);
        // 2. Act
        $I->amLoggedInAs($admin);
        $I->sendGet('/api/users/1');

        // 3. Assert
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseIsJson();
        $I->seeResponseIsAnEntity(User::class, '/api/users/1');
        $I->seeResponseIsAnItem(self::expectedProperties());
    }

    public function anonymousCantGetUsers(ApiTester $I): void
    {
        // 1. Arrange
        UserFactory::createOne();

        // 2. Act
        $I->sendGet('/api/users/1');

        // 3. Assert
        $I->seeResponseCodeIs(401);
    }

    public function notAdminUserCantGetUsers(ApiTester $I): void
    {
        // 1. Arrange
        UserFactory::createOne();
        $user = UserFactory::createOne()->object();

        // 2. Act
        $I->amLoggedInAs($user);
        $I->sendGet('/api/users/1');

        // 3. Assert
        $I->seeResponseCodeIs(403);
    }
}
