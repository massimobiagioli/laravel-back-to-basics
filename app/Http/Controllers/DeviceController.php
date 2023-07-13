<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeviceRequest;
use App\Http\Requests\UpdateDeviceRequest;
use App\Models\Device;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DeviceController extends Controller
{
    public function index(): View
    {
        $devices = Device::all();

        return view('devices.index', compact('devices'));
    }

    public function create(): View
    {
        return view('devices.create');
    }

    public function store(StoreDeviceRequest $request): RedirectResponse
    {
        Device::create($request->validated());

        return to_route('devices.index');
    }

    public function edit(Device $device): View
    {
        return view('devices.edit', compact('device'));
    }

    public function update(UpdateDeviceRequest $request, Device $device): RedirectResponse
    {
        $device->update($request->validated());

        return to_route('devices.index');
    }

    public function destroy(Device $device): RedirectResponse
    {
        $device->delete();

        return to_route('devices.index');
    }
}
