<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Translation;
use Illuminate\Http\Request;

class TranslationController extends Controller
{

    public function index()
    {
        $translations = Translation::all();
        return view('admin.translations.index', compact('translations'));
    }

    public function show($section)
    {
        $translations = Translation::where('section', $section)->get();
        return view('admin.translations.show', compact('translations', 'section'));
    }

    public function create($section)
    {
        return view('admin.translations.create', compact('section'));
    }

    public function store(Request $request, $section)
    {
        $validatedData = $request->validate([
            'key' => 'required|string|unique:translations,key',
            'en_translation' => 'required|string',
            'ja_translation' => 'required|string',
        ]);

        Translation::create([
            'section' => $section,
            'key' => $validatedData['key'],
            'translations' => [
                'en' => $validatedData['en_translation'],
                'ja' => $validatedData['ja_translation'],
            ],
        ]);

        return redirect()->route('translations.show', $section);
    }

    public function edit($section, $id)
    {
        $translation = Translation::findOrFail($id);
        return view('admin.translations.edit', compact('translation', 'section'));
    }

    public function update(Request $request, $section, $id)
    {
        $validatedData = $request->validate([
            'key' => 'required',
            'en_translation' => 'required|string',
            'ja_translation' => 'required|string',
        ]);

        $translation = Translation::findOrFail($id);
        $translation->update([
            'key' => $validatedData['key'],
            'translations' => [
                'en' => $validatedData['en_translation'],
                'ja' => $validatedData['ja_translation'],
            ],
        ]);

        return redirect()->route('translations.show', $section);
    }

    public function destroy($section, $id)
    {
        $translation = Translation::findOrFail($id);
        $translation->delete();
        return redirect()->route('translations.show', $section);
    }
}
