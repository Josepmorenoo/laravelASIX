<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    // Funció per mostrar tots els jugadors
    public function index()
    {
        $players = Player::all(); // Obtén tots els jugadors de la base de dades
        return view('players.index', compact('players')); // Passa els jugadors a la vista
    }


    // Funció per mostrar el formulari de creació d'un jugador
    public function create()
    {
        return view('players.create');
    }

    // Funció per emmagatzemar un nou jugador a la base de dades
    public function store(Request $request)
    {
        // Validació dels camps
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'team' => 'nullable|string|max:255',
            'nationality' => 'nullable|string|max:255',
        ]);

        // Creació del jugador
        $player = new Player();
        // Usant el mètode fill per assignar múltiples atributs de cop
        $player->fill($validated);
        $player->save();

        // Redirigir a la llista de jugadors amb un missatge d'èxit
        return redirect()->route('players.index')->with('success', 'Jugador creat correctament!');
    }

    // Funció per mostrar els detalls d'un jugador
    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    // Funció per mostrar el formulari d'edició d'un jugador
    public function edit(Player $player)
    {
        return view('players.edit', compact('player'));
    }

    // Funció per actualitzar la informació d'un jugador
    public function update(Request $request, $id)
    {
        // Validació dels camps
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'team' => 'nullable|string|max:255',
            'nationality' => 'nullable|string|max:255',
        ]);

        // Buscar el jugador i actualitzar-lo
        $player = Player::findOrFail($id);
        $player->fill($validated); // Usar fill per assignar els atributs
        $player->save();

        // Redirigir amb missatge d'èxit
        return redirect()->route('players.index')->with('success', 'Jugador actualitzat correctament!');
    }

    // Funció per eliminar un jugador
    public function destroy(Player $player)
    {
        $player->delete();
        return redirect()->route('players.index')->with('success', 'Jugador eliminat correctament!');
    }
}
