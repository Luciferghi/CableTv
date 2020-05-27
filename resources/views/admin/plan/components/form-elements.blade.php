<div class="form-group row align-items-center" :class="{'has-danger': errors.has('plan_name'), 'has-success': fields.plan_name && fields.plan_name.valid }">
    <label for="plan_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.plan.columns.plan_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.plan_name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('plan_name'), 'form-control-success': fields.plan_name && fields.plan_name.valid}" id="plan_name" name="plan_name" placeholder="{{ trans('admin.plan.columns.plan_name') }}">
        <div v-if="errors.has('plan_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('plan_name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('plan_price'), 'has-success': fields.plan_price && fields.plan_price.valid }">
    <label for="plan_price" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.plan.columns.plan_price') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.plan_price" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('plan_price'), 'form-control-success': fields.plan_price && fields.plan_price.valid}" id="plan_price" name="plan_price" placeholder="{{ trans('admin.plan.columns.plan_price') }}">
        <div v-if="errors.has('plan_price')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('plan_price') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('description'), 'has-success': fields.description && fields.description.valid }">
    <label for="description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.plan.columns.description') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <wysiwyg v-model="form.description" v-validate="'required'" id="description" name="description" :config="mediaWysiwygConfig"></wysiwyg>
        </div>
        <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('description') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('employee_id'), 'has-success': fields.employee_id && fields.employee_id.valid }">
    <label for="employee_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.plan.columns.employee_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.employee_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('employee_id'), 'form-control-success': fields.employee_id && fields.employee_id.valid}" id="employee_id" name="employee_id" placeholder="{{ trans('admin.plan.columns.employee_id') }}">
        <div v-if="errors.has('employee_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('employee_id') }}</div>
    </div>
</div>


