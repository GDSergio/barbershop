<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Client;
use App\Employee;
use App\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function show() {
        $employees = Employee::all();
        $reservation = Appointment::all();
        $services = Service::all();
        return view('reservations', ['employees' => $employees, 'services' => $services, 'reservation' => $reservation]);
    }

    public function getAvailableTimes(Request $request) {
        $employeeId = $request->employee_id;
        $selectedDate = $request->selected_date;
    
        // Filtrar las citas del empleado en la fecha seleccionada
        $reservations = Appointment::where('employee_id', $employeeId)
                                   ->whereDate('start_time', $selectedDate)
                                   ->get(['start_time', 'finish_time']);
    
        return response()->json($reservations);
    }
    

    public function createAppointment(Request $request) {
        $request->validate([
            'name'    =>  'required',
            'email'    =>  'required',
            'phoneNumber' => 'required',
            'services' => 'required'
        ]);
        $name = $request->input('name');
        $email = $request->input('email');
        $phoneNumber = $request->input('phoneNumber');

        $client = new Client();
        $client->name = $name;
        $client->email = $email;
        $client->phone = $phoneNumber;
        $client->save();

        $appointment = new Appointment();
        $appointment->client_id = $client->id;

        $employee_id = $request->input('employee');

        $appointment->employee_id = $employee_id;
        $start_time = $request->input('start_time');
        $date = Carbon::parse($start_time)->format('Y-m-d H:i');
        $appointment->start_time = $date;
        $finish_time = Carbon::parse($date)->addMinutes(30)->format('Y-m-d H:i');
        $appointment->finish_time = $finish_time;
        $appointment->comments = $request->input('comments');
        $appointment->save();
        if($request->input('services') != "Pasirinkite paslaugą") {
            $appointment->services()->sync($request->input('services', []));
        }

        return redirect()->route('success');
    }
}
