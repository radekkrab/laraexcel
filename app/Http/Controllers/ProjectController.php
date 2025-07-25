<?php

namespace App\Http\Controllers;

use App\Http\Requests\Project\ImportStoreRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ProjectController extends Controller
{
    public function index(): Response {
        return Inertia::render('Project/Index');
    }

    public function import(): Response {
        return Inertia::render('Project/Import');
    }

    public function importStore(ImportStoreRequest $request): Response {
        $data = $request->validated();

    }
}
