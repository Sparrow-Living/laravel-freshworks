<?php

namespace CodeGreenCreative\Freshworks\Api;

use CodeGreenCreative\Freshworks\Client;
use CodeGreenCreative\Freshworks\Traits\HasFilters;
use CodeGreenCreative\Freshworks\Traits\CanBeForgotten;
use CodeGreenCreative\Freshworks\Traits\CanBulkDestroy;
use CodeGreenCreative\Freshworks\Traits\CanCloneItself;
use CodeGreenCreative\Freshworks\Traits\PerformsCrudOperations;

class Accounts extends Client
{
    use PerformsCrudOperations;
    use CanCloneItself;
    use CanBulkDestroy;
    use HasFilters;
    use HasFields;
    use CanBeForgotten;

    private $resource = 'sales_accounts';
}
