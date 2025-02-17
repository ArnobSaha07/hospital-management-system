<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "//www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="icon" href="{{ asset('hms-saas-favicon.ico') }}" type="image/png">
    <title>{{ __('messages.new_change.patient_diagnosis_test_report') }}</title>
    <link href="{{ asset('assets/css/diagnosis-test-pdf.css') }}" rel="stylesheet" type="text/css"/>
    <style>
        * {
            font-family: DejaVu Sans, Arial, "Helvetica", Arial, "Liberation Sans", sans-serif;
        }
    </style>
</head>
<body>
<table width="100%">
    <tr>
        <td class="header-left">
            <div class="main-heading">{{ __('messages.new_change.patient_diagnosis_test_report') }}</div>
            <div class="invoice-number font-color-gray">{{ __('messages.new_change.diagnosis_report_id') }}
                #{{ $patientDiagnosisTest->report_number }}</div>
        </td>
        <td class="header-right">
            <div class="logo"><img width="100px" src="{{ $app_logo }}" alt=""></div>
            <div class="hospital-name">{{ $app_name }}</div>
            <div class="hospital-name font-color-gray">{{ $hospital_address }}</div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <table class="address">
                <tr>
                    <td>
                        <span class="font-weight-bold patient-detail-heading">{{ __('messages.ipd_patient_diagnosis.report_date') }}:</span>
                        {{ \Carbon\Carbon::parse($patientDiagnosisTest->created_at)->translatedFormat('jS M,Y g:i A') }}
                    </td>
                </tr>
                <tr>
                    <td colspan="2"
                        class="font-weight-bold patient-detail-heading">{{ __('messages.patient.patient_details') }}:
                    </td>
                </tr>
                <tr>
                    <td class="patient-details">
                        <table class="patient-detail-one">
                            <tr>
                                <td class="font-weight-bold">{{ __('messages.investigation_report.patient') }}:</td>
                                <td>{{ $patientDiagnosisTest->patient->user->full_name }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">{{ __('messages.user.email') }}:</td>
                                <td>{{ $patientDiagnosisTest->patient->user->email }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">{{ __('messages.bill.cell_no') }}:</td>
                                <td>{{ !empty($patientDiagnosisTest->patient->user->phone)  ? $patientDiagnosisTest->patient->user->region_code.$patientDiagnosisTest->patient->user->phone : __('messages.common.n/a') }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">{{ __('messages.user.gender') }}:</td>
                                <td>{{ $patientDiagnosisTest->patient->user->gender == 0 ? 'Male' : 'Female' }}</td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table class="patient-detail-two">
                            <tr>
                                <td class="font-weight-bold">{{ __('messages.investigation_report.doctor') }}:</td>
                                <td>{{ $patientDiagnosisTest->doctor->user->full_name }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">{{ __('messages.diagnosis_category.diagnosis_category') }}
                                    :
                                </td>
                                <td> {{ $patientDiagnosisTest->category->name}}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <table class="items-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{ __('messages.patient_diagnosis_test.diagnosis_property_name') }}</th>
                    <th>{{ __('messages.patient_diagnosis_test.diagnosis_property_value') }}</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($patientDiagnosisTests))
                    @foreach($patientDiagnosisTests as $key => $patientDiagnosisTest)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ str_replace("_"," ",Str::title($patientDiagnosisTest->property_name)) }}</td>
                            <td>{{ !empty($patientDiagnosisTest->property_value)?$patientDiagnosisTest->property_value:__('messages.common.n/a') }}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </td>
    </tr>
</table>
</body>
