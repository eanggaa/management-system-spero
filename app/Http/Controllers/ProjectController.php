<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $project = Project::all();
        return view('back.pages.project.index', compact('project'));
    }

    public function create(){
        return view('back.pages.project.create');
    }

    public function store(Request $request){
        $request->validate([
            'client' => 'required',
            'end_user' => 'required',
            'project_name' => 'required',
            'no_penawaran' => 'required',
            'jenis_pekerjaan' => 'required',
            'progamming_language' => 'required',
            'project_entry_date' => 'required',
            'project_start_date' => 'required',
            'project_completion_date' => 'required',
        ]);

        $project = array(
            'client' => $request['client'],
            'end_user' => $request['end_user'],
            'project_name' => $request['project_name'],
            'no_penawaran' => $request['no_penawaran'],
            'jenis_pekerjaan' => $request['jenis_pekerjaan'],
            'progamming_language' => $request['progamming_language'],
            'project_entry_date' => $request['project_entry_date'],
            'project_start_date' => $request['project_start_date'],
            'project_completion_date' => $request['project_completion_date'],
        );

        Project::create($project);

        return redirect()->route('admin.project.index')->with('success', 'dsadsa. dsasadasddadasdas');
    }

    public function show($id){
        $project = Project::find($id);
        return view('back.pages.project.show', compact('project'));
    }

    public function edit($id){
        $project = Project::find($id);
        return view('back.pages.project.edit', compact('project'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'client' => 'required',
            'end_user' => 'required',
            'project_name' => 'required',
            'no_penawaran' => 'required',
            'jenis_pekerjaan' => 'required',
            'progamming_language' => 'required',
            'project_entry_date' => 'required',
            'project_start_date' => 'required',
            'project_completion_date' => 'required',
        ]);

        $project = Project::find($id);

        $project->update([
            'client' => $request['client'],
            'end_user' => $request['end_user'],
            'project_name' => $request['project_name'],
            'no_penawaran' => $request['no_penawaran'],
            'jenis_pekerjaan' => $request['jenis_pekerjaan'],
            'progamming_language' => $request['progamming_language'],
            'project_entry_date' => $request['project_entry_date'],
            'project_start_date' => $request['project_start_date'],
            'project_completion_date' => $request['project_completion_date'],
        ]);

        return redirect()->route('admin.project.index')->with('success', 'dsadsa. das');
    }

    public function destroy($id){
        $project = Project::find($id);

        $project->update([
            'status_aktif' => 2,
        ]);

        return redirect()->route('admin.project.index')->with('fail', 'dsadsa. adnsbsdnasdsandbasdnasdbasd');
    }
}
