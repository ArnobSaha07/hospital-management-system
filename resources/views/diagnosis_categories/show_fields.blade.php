<div>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="poverview" role="tabpanel">
            <div class="card mb-5 mb-xl-10">
                <div>
                    <div class="card-body">
                        <div class="row mb-7">
                            <div class="col-md-6 d-flex flex-column mb-md-10 mb-5">
                                <label
                                    class="pb-2 fs-5 text-gray-600">{{ __('messages.diagnosis_category.diagnosis_category')  }}</label>
                                <span class="fs-5 text-gray-800">{{ $diagnosisCategory->name}}</span>
                            </div>
                            <div class="col-lg-6 d-flex flex-column">
                                <label class="pb-2 fs-5 text-gray-600">{{ __('messages.diagnosis_category.description')  }}</label>
                                <span class="fs-5 text-gray-800"> {!! !empty($diagnosisCategory->description)? nl2br(e($diagnosisCategory->description)):'N/A' !!}</span>
                            </div>
                            <div class="col-md-6 d-flex flex-column mb-md-10 mb-5">
                                <label class="pb-2 fs-5 text-gray-600">{{ __('messages.common.created_on')  }}</label>
                                <span class="fs-5 text-gray-800"data-toggle="tooltip" data-placement="right" title="{{ \Carbon\Carbon::parse($diagnosisCategory->created_at)->translatedFormat('jS M, Y') }}">{{ \Carbon\Carbon::parse($diagnosisCategory->created_at)->diffForHumans() }}</span>
                            </div>
                            <div class="col-md-6 d-flex flex-column mb-md-10 mb-5">
                                <label class="pb-2 fs-5 text-gray-600">{{ __('messages.common.last_updated')  }}</label>
                                <span class="fs-5 text-gray-800"data-toggle="tooltip" data-placement="right" title="{{ \Carbon\Carbon::parse($diagnosisCategory->updated_at)->translatedFormat('jS M, Y') }}">{{ \Carbon\Carbon::parse($diagnosisCategory->updated_at)->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
