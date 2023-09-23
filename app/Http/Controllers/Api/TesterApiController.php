<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\TesterRepositoryInterface;
use Illuminate\Http\Request;

class TesterApiController extends Controller
{
    protected $testerRepository;

    public function __construct(TesterRepositoryInterface $testerRepository)
    {
        $this->testerRepository = $testerRepository;
    }

    public function index()
    {
        $testers = $this->testerRepository->getAll();
        return view('api.testers.index', compact('testers'));
    }

    public function create()
    {
        return view('api.testers.create');
    }

    public function store(Request $request)
    {
        $this->testerRepository->create($request->all());
        return redirect()->route('api.testers.index');
    }

    public function edit($id)
    {
        $tester = $this->testerRepository->getById($id);
        return view('api.testers.edit', compact('tester'));
    }

    public function update(Request $request, $id)
    {
        $this->testerRepository->update($id, $request->all());
        return redirect()->route('api.testers.index');
    }

    public function delete($id)
    {
        $this->testerRepository->delete($id);
        return redirect()->route('api.testers.index');
    }
}
