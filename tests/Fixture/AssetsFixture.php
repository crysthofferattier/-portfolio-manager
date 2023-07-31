<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AssetsFixture
 */
class AssetsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'symbol' => 'Lorem ipsum dolor ',
                'name' => 'Lorem ipsum dolor sit amet',
                'asset_type_id' => 1,
                'created' => '2023-07-31 21:29:17',
            ],
        ];
        parent::init();
    }
}
