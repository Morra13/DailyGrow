<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /** @var string  */
    const ROUTE_CLIENTS = 'clients';

    /** @var string  */
    const ROUTE_ADD_CLIENTS = 'addClients';

    /** @var string  */
    const ROUTE_ADD_CLIENTS_XLS_CVS = 'addClientsXlsCvs';

    /**
     * Clients
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function clients()
    {
        return view('clients.clients', [
                'clients' => (new Client())->all(),
            ]
        );
    }

    /**
     * Add clients
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function addClients()
    {
        return view('clients.addClients');
    }

    /**
     * Add clients xls
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function addClientsXlsCvs()
    {
        return view('clients.addClientsXlsCvs');
    }
}
