<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    public $notes = ["Mohamed Alaoui" => "16", "Ahmed Bennani" => "14", "Rachida kich" => "6", "Aicha Saaoudi" => "19", "Noura Alaoui" => "7", "Samar Rhaoussi" => "13", "Aicha Siraj" => "10", "Samiha Hakim" => "09", "Mohamed Rami" => "17", "Sami Tazi" => "7", "Noura Tazi" => "14"];

    private function sortedNotes(array $notes): array
    {
        arsort($notes);
        return $notes;
    }

    public function getNotes(Request $request)
    {
        $search = $request->query('search');

        $filtred = $this->notes;

        if ($search) {
            $filtred = array_filter($this->notes, function ($note, $name) use ($search) {
                return stripos($name, $search) !== false;
            }, ARRAY_FILTER_USE_BOTH);
        }

        return redirect()->route("all")->with('result', $filtred)->withInput();
    }

    public function all(Request $request)
    {
        $result = session('result');

        if (!is_array($result)) {
            $result = $this->notes;
        }

        $result = $this->sortedNotes($result);

        return view('notes', ['notes' => $result]);
    }
}
