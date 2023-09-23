<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TesterRepositoryInterface;

class TesterController extends Controller
{
    protected $testerRepository;

    public function __construct(TesterRepositoryInterface $testerRepository)
    {
        $this->testerRepository = $testerRepository;
    }

    public function index()
    {
        $testers = $this->testerRepository->getAll();
        return view('testers.index', compact('testers'));
    }

    public function create()
    {
        return view('testers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'memo' => 'nullable',
        ]);
        $this->testerRepository->create($validated);
        return redirect()->route('testers.index');
    }

    public function show($id)
    {
        $tester = $this->testerRepository->getById($id);
        return view('testers.show', compact('tester'));
    }

    public function edit($id)
    {
        $tester = $this->testerRepository->getById($id);
        return view('testers.edit', compact('tester'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'memo' => 'nullable',
        ]);
        $this->testerRepository->update($id, $validated);
        return redirect()->route('testers.index');
    }

    public function destroy($id)
    {
        $this->testerRepository->delete($id);
        return redirect()->route('testers.index');
    }
}
