<div id="bloodDonationsAddModal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h3>{{ __('messages.blood_donation.new_blood_donation') }}</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            {{ Form::open(['id'=>'bloodDonationsAddNewForm']) }}
            <div class="modal-body">
                <div class="alert alert-danger d-none hide" id="bloodDonationsValidationErrorsBox"></div>
                <div class="row">
                    <div class="form-group col-sm-12 mb-5">
                        {{ Form::label('blood_donor_id', __('messages.blood_donation.donor_name').(':'),['class' => 'form-label']) }}
                        <span class="required"></span>
                        {{ Form::select('blood_donor_id', $donorName, null, ['class' => 'form-select select2Selector', 'required', 'id' => 'bloodDonationsDonorName', 'placeholder' => __('messages.user.select_donor_name'), 'data-control' => 'select2', 'required']) }}
                    </div>
                    <div class="form-group col-sm-12">
                        {{ Form::label('bags', __('messages.blood_donation.bags').(':'),['class' => 'form-label']) }}
                        <span class="required"></span>
                        {{ Form::number('bags', 1, ['id'=>'bloodDonationsBags','class' => 'form-control','required','min' => 1, 'max' => 100, 'placeholder' => __('messages.blood_donation.bags')]) }}
                    </div>
                </div>
            </div>
            <div class="modal-footer pt-0">
                {{ Form::button(__('messages.common.save'), ['type' => 'submit','class' => 'btn btn-primary me-2','id' => 'bloodDonationsBtnSave','data-loading-text' => "<span class='spinner-border spinner-border-sm'></span> Processing..."]) }}
                <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">{{ __('messages.common.cancel') }}</button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
