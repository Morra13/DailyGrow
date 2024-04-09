<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Imports\ClientImport;
use App\Models\Client;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ClientController extends Controller
{
    /** @var string  */
    const ROUTE_ADD_CLIENT = 'api.addClient';

    /** @var string  */
    const ROUTE_ADD_CLIENT_XLS_CVS = 'api.addClientXlsCvs';

    /** @var string  */
    const ROUTE_DELETE_CLIENT = 'api.deleteClient';

    /**
     * Add clients
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addClient(Request $request)
    {
        $obClients = new Client();
        $obClients->name = $request->get('name');
        $obClients->email = $request->get('email');
        $obClients->phone = $request->get('phone');
        $obClients->birthday = $request->get('birthday');
        $obClients->save();

        return redirect()->route(\App\Http\Controllers\ClientController::ROUTE_ADD_CLIENTS);
    }

    /**
     * Add clients xls/cvs
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addClientXlsCvs(Request $request)
    {
        Excel::import(new ClientImport, $request->file('file'), 'filename');

        return redirect()->route(\App\Http\Controllers\ClientController::ROUTE_ADD_CLIENTS_XLS_CVS);
    }

    /**
     * Delete client by id
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteClient($id)
    {
        (new Client())
            ->where('id', $id)
            ->delete()
        ;

        return redirect()->route(\App\Http\Controllers\ClientController::ROUTE_CLIENTS);
    }
}
