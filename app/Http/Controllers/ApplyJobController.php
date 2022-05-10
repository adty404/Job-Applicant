<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplyJobRequest;
use App\Models\ApplyJob;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ApplyJobController extends Controller
{
    public function index($id)
    {
        return view('apply_job.index', [
            'job' => JobApplication::find($id),
        ]);
    }

    public function post(ApplyJobRequest $request)
    {
        $job = JobApplication::find($request->job_id);

        ApplyJob::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'whatsapp' => $request->whatsapp,
            'job_application_id' => $request->job_application_id,
        ]);

        Alert::success('Success', 'Berhasil apply pekerjaan!');
        return redirect()->route('landing_page.index');
    }
}
