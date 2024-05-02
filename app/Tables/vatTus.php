<?php

namespace App\Tables;

use App\Models\vatTu;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;

class vatTus extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return vatTu::query();
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['name'])
            ->defaultSort('id')
            ->column('id', sortable: true)
            ->column('idCode', sortable: true)
            ->column('name', sortable: true, searchable: true)
            ->column('unit', sortable: true, searchable: true)
            ->column('action')

            // ->column('created_at', sortable: true)
            // ->column('updated_at', sortable: true)

            ->paginate();
    }
}
