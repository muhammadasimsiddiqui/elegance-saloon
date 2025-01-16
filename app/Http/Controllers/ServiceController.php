<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function updateService(Request $req, $id)
    {
        // Find the service by its ID
        $service = Service::findOrFail($id);

        // Update the service details
        $service->name = $req->name;
        $service->price = $req->price;
        $service->duration = $req->time;
        $service->description = $req->desc;

        // Handle the file upload if an image is provided
        // Handle the file upload if an image is provided
        if ($req->hasFile('serviceImg')) {
            $imageName = time() . '.' . $req->serviceImg->extension();
            $imageFullPath = 'images/services/' . $imageName;
            $req->serviceImg->move(public_path('images/services'), $imageName);

            // Delete the old image if exists
            if ($service->image_urls) {
                $oldImages = json_decode($service->image_urls, true);
                if (is_array($oldImages)) {
                    foreach ($oldImages as $oldImage) {
                        File::delete(public_path('images/services/' . $oldImage));
                    }
                } else {
                    File::delete(public_path('images/services/' . $service->image_urls));
                }
            };

            // Store the new image URL in a JSON format (even if it's just one image)
            // Store the image name inside an array
            $service->image_urls = $imageFullPath;  // Ensure the value is a valid JSON
        }

        // Save the updated service
        $service->save();

        // Redirect to the service list page with success message
        return redirect('/view-services');
    }

    public function storeService(Request $req)
    {
        if ($req->hasFile('serviceImg')) {
            $imageName = time() . '.' . $req->serviceImg->extension();
            $req->serviceImg->move(public_path('images/services'), $imageName);
            $imageFullPath = 'images/services/' . $imageName;  // Full URL to the image
        }

        $ser = new Service();
        $ser->name = $req->name;
        $ser->price = $req->price;
        $ser->duration = (string) $req->time;
        $ser->description = $req->desc;
        $ser->image_urls = $imageFullPath;
        $ser->save();

        return redirect('/view-services');
    }

    public function deleteService($id)
    {
        // Find the service by its ID
        $service = Service::findOrFail($id);

        // Optionally, you can delete any associated files (if any)
        if ($service->image && File::exists(public_path('storage/' . $service->image))) {
            File::delete(public_path('storage/' . $service->image));
        }

        // Delete the service record
        $service->delete();

        // Redirect back to the services list with a success message
        return redirect('/view-services');
    }

    public function editService($id)
    {
        // Find the service by ID or fail with a 404 error
        $service = Service::findOrFail($id);

        // Return the edit view with the service data
        return view('backend.crudPartials.services.editServices', compact('service'));
    }

    public function showServices($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.crudPartials.services.showServices', compact('service'));
    }

    // public function servicesDetail($id)
    // {
    //     $service = Service::findOrFail($id);
    //     return view('frontend.singleservice', compact('service'));
    // }
    public function servicesDetail($name)
    {
        // Replace hyphens with spaces
        $name = strtolower(str_replace('-', ' ', $name));

        // Find the service by name (you could also add more robust validation)
        $service = Service::where('name', $name)->firstOrFail();

        // Return the view with the service data
        return view('frontend.singleservice', compact('service'));
    }

    public function listAllServices()
    {
        $services = Service::all();  // Fetch all services
        return view('frontend.services', compact('services'));
    }

    // {{ $services->links() }}
}
