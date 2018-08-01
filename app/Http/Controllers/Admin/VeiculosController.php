<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\Controllers\ResourceController;
use App\Models\Veiculo;

class VeiculosController extends Controller
{
    use ResourceController;

    /**
     * @var string
     */
    protected $resourceAlias = 'admin.veiculos';

    /**
     * @var string
     */
    protected $resourceRoutesAlias = 'admin::veiculos';

    /**
     * Fully qualified class name
     *
     * @var string
     */
    protected $resourceModel = Veiculo::class;

    /**
     * @var string
     */
    protected $resourceTitle = 'Veiculos';

     /**
     * Used to validate store.
     *
     * @return array
     */
    private function resourceStoreValidationData()
    {
        return [
            'rules' => [
                'marca' => 'required|min:3|max:255',
                'tipo' => 'required',
                'km_inicial' => 'required|integer',
                'trem_forca' => 'required'
            ],
            'messages' => [],
            'attributes' => [],
        ];
    }

    /**
     * Used to validate update.
     *
     * @param $record
     * @return array
     */
    private function resourceUpdateValidationData($record)
    {
        return $this->resourceStoreValidationData();
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param null $record
     * @return array
     */
    private function getValuesToSave(Request $request, $record = null)
    {
        $values = $request->only([
            'marca', 'tipo', 'km_inicial', 'trem_forca',
        ]);

        return $values;
    }

    /**
     * Retrieve the list of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $perPage
     * @param string|null $search
     * @return \Illuminate\Support\Collection
     */
    private function getSearchRecords(Request $request, $perPage = 15, $search = null)
    {
        $query = $this->getResourceModel()::when(! empty($search), function ($query) use ($search) {
            $query->like('tipo', $search);
        });

        return $query->paginate($perPage);
    }
}
