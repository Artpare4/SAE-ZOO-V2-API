<?php

namespace App\Tests\Api\User;

use App\Entity\User;
use App\Factory\UserFactory;
use App\Tests\Support\ApiTester;

class UserPatchCest
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

    // tests
    public function userCanPatchHisOwnData(ApiTester $I): void
    {
        // 1. Arrange
        $dataPatch = ['pnomUser' => 'test'];
        $user = UserFactory::createOne()->object();

        // 2. Act
        $I->amLoggedInAs($user);
        $I->sendPatch('/api/users/1', $dataPatch);

        // 3. Assert
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseIsJson();
        $I->seeResponseIsAnEntity(User::class, '/api/users/1');
        $I->seeResponseIsAnItem(self::expectedProperties(), $dataPatch);
    }

    public function anonymousUserCantPatch(ApiTester $I): void
    {
        // 1. Arrange
        UserFactory::createOne();

        // 2. Act
        $I->sendPatch('/api/users/1');

        // 3. Assert
        $I->seeResponseCodeIs(401);
    }

    public function authenticatedUserCantPatchOtherUser(ApiTester $I): void
    {
        // 1. Arrange
        UserFactory::createOne();
        $user = UserFactory::createOne()->object();

        // 2. Act
        $I->amLoggedInAs($user);
        $I->sendPatch('/api/users/1');

        // 3. Assert
        $I->seeResponseCodeIs(403);
    }
}
