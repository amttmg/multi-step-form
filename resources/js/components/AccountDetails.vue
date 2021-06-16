<template>
    <div>
        <ValidationObserver ref="form">
            <fieldset class="border-blue px-3 pb-3" style="border-opacity: 0.5">
                <legend class="w-auto px-2 text-primary">Account Information:</legend>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider name="Branch" rules="required" v-slot="{ errors }">
                                <label for="branch">Branch</label>
                                <v-select v-model="accountInfo.branch" id="branch" label="text"
                                          placeholder="Please Select"
                                          :options="branches"></v-select>
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <ValidationProvider name="Account Type" rules="required" v-slot="{ errors }">
                                    <label for="acType">Account Type</label>
                                    <v-select v-model="accountInfo.acType" placeholder="Please Select"
                                              :options="['Saving', 'Current', 'Loan']"></v-select>
                                    <small class="text-danger form-text">{{errors[0]}}</small>
                                </ValidationProvider>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider name="Account Number" rules="required|digits:16" v-slot="{ errors }">

                                <label for="acNumber">Account Number</label>
                                <the-mask v-model="accountInfo.acNumber" class="form-control"
                                          placeholder="Please enter 16 digit account number"
                                          :mask="['################']"/>
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                </div>
            </fieldset>
            <action-buttons :back="false" @next="handleNext('next')"></action-buttons>
        </ValidationObserver>
    </div>
</template>

<script>
    import {branches} from '../data'
    import {ValidationObserver, ValidationProvider} from 'vee-validate';

    export default {
        name: "AccountDetails",
        components: {ValidationObserver, ValidationProvider},
        data() {
            return {
                branches: branches,
                accountInfo: {
                    branch: '',
                    acType: '',
                    acNumber: '',
                }
            }
        },
        methods: {
            handleNext(event) {
                this.validateForm().then(isSuccess => {
                    if (isSuccess) {
                        this.$emit(event);
                    }
                })
            },
            validateForm() {
                return this.$refs.form.validate();
            }
        }
    }
</script>

<style scoped>

</style>
