import AppForm from '../app-components/Form/AppForm';

Vue.component('plan-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                plan_name:  '' ,
                plan_price:  '' ,
                description:  '' ,
                employee_id:  '' ,
                
            }
        }
    }

});