<div id="add_expenses_modal" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">{{ __('messages.expense.new_expense') }}</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            {{ Form::open(['id'=>'addExpenseForm', 'files' => true]) }}
            <div class="modal-body">
                <div class="alert alert-danger d-none hide" id="expenseErrorsBox"></div>
                <div class="row">
                    <div class="form-group col-sm-6 mb-5">
                        {{ Form::label('expense_head', __('messages.expense.expense_head').(':'), ['class' => 'form-label']) }}
                        <span class="required"></span>
                        {{ Form::select('expense_head', $expenseHeads, null, ['class' => 'form-select', 'required', 'id' => 'expenseId', 'placeholder' => __('messages.expense.select_expense_head'), 'data-control' => 'select2']) }}
                    </div>
                    <div class="form-group col-sm-6 mb-5">
                        {{ Form::label('name', __('messages.expense.name').(':'), ['class' => 'form-label']) }}
                        <span class="required"></span>
                        {{ Form::text('name', null, ['class' => 'form-control','required', 'placeholder' => __('messages.expense.name')]) }}
                    </div>
                    <div class="form-group col-sm-6 mb-5">
                        {{ Form::label('date', __('messages.incomes.date').(':'), ['class' => 'form-label']) }}
                        <span class="required"></span>
                        {{ Form::text('date', null, ['class' => (getLoggedInUser()->thememode ? 'bg-light form-control' : 'bg-white form-control'),'required', 'id' => 'expenseDate', 'autocomplete' => 'off', 'placeholder' => __('messages.incomes.date')]) }}
                    </div>
                    <div class="form-group col-sm-6 mb-5">
                        {{ Form::label('invoice_number', __('messages.incomes.invoice_number').(':'), ['class' => 'form-label']) }}
                        {{ Form::text('invoice_number', null, ['class' => 'form-control', 'placeholder' => __('messages.incomes.invoice_number')]) }}
                    </div>
                    <div class="form-group col-sm-6 mb-5">
                        {{ Form::label('amount', __('messages.incomes.amount').(':'), ['class' => 'form-label']) }}
                        <span class="required"></span>
                        {{ Form::text('amount', null, ['id'=>'expenseAmount','class' => 'form-control price-input', 'autocomplete' => 'off', 'required', 'required', 'placeholder' => __('messages.incomes.amount')]) }}
                    </div>
                    <div class="form-group col-sm-6 mb-5">
                        {{ Form::label('attachment', __('messages.incomes.attachment').':', ['class' => 'form-label']) }}
                        <div class="d-block">
                            <?php
                            $style = 'style=';
                            $background = 'background-image:';
                            ?>
                            <div class="image-picker">
                                <div class="image previewImage" id="expensePreviewImage"
                                {{$style}}"{{$background}} url('{{ asset('assets/img/default_image.jpg') }}')">
                            </div>
                            <span class="picker-edit rounded-circle text-gray-500 fs-small"
                                  title="{{ __('messages.incomes.attachment') }}">
                                    <label>
                                    <i class="fa-solid fa-pen" id="profileImageIcon"></i>
                                        <input type="file" id="expenseAttachments" name="attachment"
                                               class="image-upload d-none profileImage"
                                               accept=".png, .jpg, .jpeg, .gif, .webp"/>
                                        <input type="hidden" name="avatar_remove"/>
                                    </label>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group col-sm-12 mb-5">
                {{ Form::label('description', __('messages.incomes.description').(':'),['class' => 'form-label']) }}
                {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => 4, 'placeholder' => __('messages.incomes.description')]) }}
            </div>
        </div>
        <div class="modal-footer pt-0">
            {{ Form::button(__('messages.common.save'), ['type' => 'submit','class' => 'btn btn-primary m-0','id' => 'expenseSave','data-loading-text' => "<span class='spinner-border spinner-border-sm'></span> Processing..."]) }}
            <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">{{ __('messages.common.cancel') }}</button>
        </div>
        {{ Form::close() }}
    </div>
</div>
</div>
