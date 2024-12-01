<?php

namespace App\Http\Controllers;

use App\Models\ExamineeModel;
use Illuminate\Http\Request;

class Examinee extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allExaminee = ExamineeModel::all();

        return view('examinee.index', compact('allExaminee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('examinee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'eName' => 'required',
                'eExamProject' => 'required|numeric|max:55',
                'eConsoleApplication' => 'required|numeric|max:15',
                'eDesktopApplication' => 'required|numeric|max:10',
                'eWebsite' => 'required|numeric|max:10',
                'eBackend' => 'required|numeric|max:15',
                'eFrontend' => 'required|numeric|max:15',
            ],
            [
                'eName.required' => 'A név nem lehet üres!',
                'eExamProject.required' => 'A vizsgaremek pontja nem lehet üres!',
                'eExamProject.max' => 'A vizsgaremek pontja nem lehet nagyobb, mint 55!',
                'eConsoleApplication.required' => 'A konzol alkalmazás pontja nem lehet üres!',
                'eConsoleApplication.max' => 'A konzol alkalmazás pontja nem lehet nagyobb, mint 15!',
                'eDesktopApplication.required' => 'A grafikus asztali alkalmazás pontja nem lehet üres!',
                'eDesktopApplication.max' => 'A grafikus asztali alkalmazás pontja nem lehet nagyobb, mint 10!',
                'eWebsite.required' => 'A reszponzív viselkedésű weboldal pontja nem lehet üres!',
                'eWebsite.max' => 'A reszponzív viselkedésű weboldal pontja nem lehet nagyobb, mint 10!',
                'eBackend.required' => 'A backend programozás pontja nem lehet üres!',
                'eBackend.max' => 'A backend programozás pontja nem lehet nagyobb, mint 15!',
                'eFrontend.required' => 'A frontend programozás pontja nem lehet üres!',
                'eFrontend.max' => 'A frontend programozás pontja nem lehet nagyobb, mint 15!',
            ]
        );

        $newExaminee = new ExamineeModel();
        $newExaminee->name = $request->eName;
        $newExaminee->exam_project = $request->eExamProject;
        $newExaminee->console_application = $request->eConsoleApplication;
        $newExaminee->desktop_application = $request->eDesktopApplication;
        $newExaminee->website = $request->eWebsite;
        $newExaminee->backend = $request->eBackend;
        $newExaminee->frontend = $request->eFrontend;
        $newExaminee->save();

        return redirect()->route('examinee.index')->with('success', 'Sikeres Mentés!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $oneExaminee = ExamineeModel::find($id);

        return view('examinee.show', compact('oneExaminee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $oneExaminee = ExamineeModel::find($id);

        return view('examinee.edit', compact('oneExaminee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'eName' => 'required',
                'eExamProject' => 'required|numeric|max:55',
                'eConsoleApplication' => 'required|numeric|max:15',
                'eDesktopApplication' => 'required|numeric|max:10',
                'eWebsite' => 'required|numeric|max:10',
                'eBackend' => 'required|numeric|max:15',
                'eFrontend' => 'required|numeric|max:15',
            ],
            [
                'eName.required' => 'A név nem lehet üres!',
                'eExamProject.required' => 'A vizsgaremek pontja nem lehet üres!',
                'eExamProject.max' => 'A vizsgaremek pontja nem lehet nagyobb, mint 55!',
                'eConsoleApplication.required' => 'A konzol alkalmazás pontja nem lehet üres!',
                'eConsoleApplication.max' => 'A konzol alkalmazás pontja nem lehet nagyobb, mint 15!',
                'eDesktopApplication.required' => 'A grafikus asztali alkalmazás pontja nem lehet üres!',
                'eDesktopApplication.max' => 'A grafikus asztali alkalmazás pontja nem lehet nagyobb, mint 10!',
                'eWebsite.required' => 'A reszponzív viselkedésű weboldal pontja nem lehet üres!',
                'eWebsite.max' => 'A reszponzív viselkedésű weboldal pontja nem lehet nagyobb, mint 10!',
                'eBackend.required' => 'A backend programozás pontja nem lehet üres!',
                'eBackend.max' => 'A backend programozás pontja nem lehet nagyobb, mint 15!',
                'eFrontend.required' => 'A frontend programozás pontja nem lehet üres!',
                'eFrontend.max' => 'A frontend programozás pontja nem lehet nagyobb, mint 15!',
            ]
        );

        $oneExaminee = ExamineeModel::find($id);
        $oneExaminee->name = $request->eName;
        $oneExaminee->exam_project = $request->eExamProject;
        $oneExaminee->console_application = $request->eConsoleApplication;
        $oneExaminee->desktop_application = $request->eDesktopApplication;
        $oneExaminee->website = $request->eWebsite;
        $oneExaminee->backend = $request->eBackend;
        $oneExaminee->frontend = $request->eFrontend;
        $oneExaminee->save();

        return redirect()->route('examinee.index')->with('success', 'Sikeres Módosítás!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $oneExaminee = ExamineeModel::find($id);
        $oneExaminee->delete();

        return redirect()->route('examinee.index')->with('success', 'Sikeres Törlés!');
    }
}
