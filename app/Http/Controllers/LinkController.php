<?php
namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Position;
use Illuminate\Http\Request;

class LinkController
{
    public function add(Position $position)
    {
        return view('components.link-form', compact('position'));
    }

    public function create(Request $request, Link $link, Position $position)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url',
            'color' => 'required|string|max:255',
        ]);

        $newLink = $link->create([
            'title' => $request->input('title'),
            'url' => $request->input('url'),
            'color' => $request->input('color'),
        ]);

        $position->update([
            'link_id' => $newLink->id,
        ]);

        return redirect()->route('dashboard')->with('success', 'Link created successfully');
    }

    public function edit(Link $link)
    {
        return view('components.link-form', compact('link'));
    }

    public function update(Request $request, Link $link)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url',
            'color' => 'required|string|max:255',
        ]);

        $link->update([
            'title' => $request->input('title'),
            'url' => $request->input('url'),
            'color' => $request->input('color'),
        ]);

        return redirect()->route('dashboard')->with('success', 'Link updated successfully');
    }

    public function delete(Link $link)
    {
        $link->delete();

        return redirect()->route('dashboard')->with('success', 'Link deleted successfully');
    }
}
