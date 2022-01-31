<?php

namespace App\Http\Livewire;

use App\Models\Visitors;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\Rules\Rule;

final class VisitorsTable extends PowerGridComponent
{
    use ActionButton;

    //Messages informing success/error data is updated.
    public bool $showUpdateMessages = true;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): void
    {
        $this->showCheckBox()
            ->showPerPage()
            ->showSearchInput()
            ->showToggleColumns()
            ->showExportOption('download', ['excel', 'csv']);
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */
    public function datasource(): ?Builder
    {
        return Visitors::query();
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): ?PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('name')
            ->addColumn('city')
            ->addColumn('marital_status', function(Visitors $model){
                if ($model->marital_status == 'single') {
                    return 'Solteiro';
                } if($model->marital_status == 'married-in-civil'){
                    return 'Casado';
                } if($model->marital_status == 'widower'){
                    return 'Viuvo';
                } if($model->marital_status == 'divorced'){
                    return 'Divorciado';
                };
            })
            ->addColumn('sex', function(Visitors $model) {
                return ($model->sex == 'male') ? 'Masculino' : 'feminino';
            })
            ->addColumn('age')
            ->addColumn('attends_some_cell', function(Visitors $model) {
                return ($model->attends_some_cell == 'yes') ? '<span class="inline-block px-2 py-1 mr-3 text-xs font-bold text-white bg-green-500 rounded">Sim</span>' : '<span class="inline-block px-2 py-1 mr-3 text-xs font-bold text-white bg-red-500 rounded">Não</span>';
            })
            ->addColumn('leader_cell')
            ->addColumn('baptized', function(Visitors $model) {
                return ($model->baptized == 'yes') ? '<span class="inline-block px-2 py-1 mr-3 text-xs bg-green-500 rounded font-boldtext-white ">Sim</span>' : '<span class="inline-block px-2 py-1 mr-3 text-xs font-bold text-white bg-red-500 rounded">Não</span>';
            })
            ->addColumn('is_away', function(Visitors $model) {
                return ($model->is_away == 'yes') ? '<span class="inline-block px-2 py-1 mr-3 text-xs font-bold text-white bg-red-500 rounded">Sim</span>' : '<span class="inline-block px-2 py-1 mr-3 text-xs font-bold text-white bg-green-500 rounded">Não</span>';
            })
            ->addColumn('created_at_formatted', function(Visitors $model) {
                return Carbon::parse($model->created_at)->format('d/m/Y H:i:s');
            })
            ->addColumn('updated_at_formatted', function(Visitors $model) {
                return Carbon::parse($model->updated_at)->format('d/m/Y H:i:s');
            });
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

     /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [

            Column::add()
                ->title('Nome')
                ->field('name')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('Cidade')
                ->field('city')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('Estado civil')
                ->field('marital_status')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('Sexo')
                ->field('sex')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('Idade')
                ->field('age')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('Frequenta alguma célula?')
                ->field('attends_some_cell')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('Líder de célula')
                ->field('leader_cell')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('É batizado?')
                ->field('baptized')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('Está afastado do evangelho?')
                ->field('is_away')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('Registrado em:')
                ->field('created_at_formatted', 'created_at')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker('created_at'),

        ]
;
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

     /**
     * PowerGrid Visitors Action Buttons.
     *
     * @return array<int, \PowerComponents\LivewirePowerGrid\Button>
     */

    /*
    public function actions(): array
    {
       return [
           Button::add('edit')
               ->caption('Edit')
               ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
               ->route('visitors.edit', ['visitors' => 'id']),

           Button::add('destroy')
               ->caption('Delete')
               ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
               ->route('visitors.destroy', ['visitors' => 'id'])
               ->method('delete')
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

     /**
     * PowerGrid Visitors Action Rules.
     *
     * @return array<int, \PowerComponents\LivewirePowerGrid\Rules\Rule>
     */

    /*
    public function actionRules(): array
    {
       return [
           
           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($visitors) => $visitors->id === 1)
                ->hide(),
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Edit Method
    |--------------------------------------------------------------------------
    | Enable the method below to use editOnClick() or toggleable() methods.
    | Data must be validated and treated (see "Update Data" in PowerGrid doc).
    |
    */

     /**
     * PowerGrid Visitors Update.
     *
     * @param array<string,string> $data
     */

    /*
    public function update(array $data ): bool
    {
       try {
           $updated = Visitors::query()->findOrFail($data['id'])
                ->update([
                    $data['field'] => $data['value'],
                ]);
       } catch (QueryException $exception) {
           $updated = false;
       }
       return $updated;
    }

    public function updateMessages(string $status = 'error', string $field = '_default_message'): string
    {
        $updateMessages = [
            'success'   => [
                '_default_message' => __('Data has been updated successfully!'),
                //'custom_field'   => __('Custom Field updated successfully!'),
            ],
            'error' => [
                '_default_message' => __('Error updating the data.'),
                //'custom_field'   => __('Error updating custom field.'),
            ]
        ];

        $message = ($updateMessages[$status][$field] ?? $updateMessages[$status]['_default_message']);

        return (is_string($message)) ? $message : 'Error!';
    }
    */

}

