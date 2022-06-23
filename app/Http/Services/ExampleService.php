<?php namespace App\Http\Services;

use App\Http\Resources\ExampleResource;

use App\Http\Validations\ExampleValidation;
use SamagTech\CoreLumen\Core\BaseService;

class ExampleService extends BaseService {

    protected string $jsonResource = ExampleResource::class;

    protected array $onlyUsedFields = [
        'field',
    ];

    protected array $genericRules = [
        ExampleValidation::class,
    ];

    /**
     * Lista delle validazioni da utilizzare
     * in fase di modifica
     *
     * @var array
     * @access protected
     */
    protected array $insertRules = [
        ExampleValidation::class
    ];

    /**
     * Lista delle validazioni da utilizzare
     * in fase di modifica
     *
     * @var array
     * @access protected
     */
    protected array $updateRules = [];

}