<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use Illuminate\Http\Request;
use App\Models\{Scrumboard, Ticket};

class TicketController extends Controller
{
    //
    public function index()
    {
        $tickets = Ticket::query()
            ->orderByDesc('created_at')
            ->get();
        return response()->json($tickets);
    }

    public function store(Scrumboard $scrumboard, StoreTicketRequest $request)
    {
        // if() for checking if a model really exists in DB ? i would think not needed since you cannot create a ticket without sending a board id.
        $data = $request->validated();

        $ticket=$scrumboard->tickets()->create($data);

        return response()->json([
            'data' => $ticket->id,
        ], 201);

    }

    public function show($id)
    {
        $ticket = Ticket::findOrFail($id);

        return response()->json($ticket);
    }

    public function update(UpdateTicketRequest $request, $id)
    {
        $data = $request->validated();

        $ticket = Ticket::findOrFail($id);

        $ticket->update($data);

        return response()->json([
            'message' => 'Ticket updated successfully!',
            'data' => $ticket,
        ]);

    }

    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->destroy();

        return response()->json([
            'message' => 'Ticket deleted!',
        ]);
    }

}
