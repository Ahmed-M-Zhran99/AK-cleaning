<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;


class ServiceController extends Controller
{
     public function index()
    {
        $services = Service::all();
        return view('AK.home');
    }

    public function service()
    {
        $services=Service::all();
        return view('AK.service');
    }

    public function show($id)
    {
        $service = service::findOrFail($id);
        return response()->json($service);
    }
    public function create()
    {
        $service=service::all();
        return response()->json($service);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price_per_kg' => 'required|numeric',
        ]);

        $service = Service::create($request->all());
        return response()->json($service, 201);
    }
    public function update(Request $request,$id)

    {
        $service=service::findOrFail($id);
        $service->update($request->all());
        return response()->json($service);

    }

    public function destroy($id)
    {
        $service = service::findOrFail($id);
        $service->delete();
        return response()->json(null, 204);
    }

}
