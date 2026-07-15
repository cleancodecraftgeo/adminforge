<?php



namespace App\Services;

use App\Contracts\InventoryServiceInterface;
use Override;

class InventoryService implements InventoryServiceInterface
{

        public function __construct(){
            logger('InventoryService yaradildi! ');
        }


        public function reserve(): void
        {
            logger("stock reserv edildi");
        }
}
