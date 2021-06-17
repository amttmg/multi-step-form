<template>
    <div>
        <ValidationObserver ref="form">
            <fieldset class="border-blue px-3 pb-3" style="border-opacity: 0.5">
                <legend class="w-auto px-2 text-primary">Document Upload:</legend>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <tr>
                                <td width="10%">1.</td>
                                <td width="50%"><strong>Citizenship Front</strong></td>
                                <td width="40%">
                                    <ValidationProvider name="Citizenship" rules="required" v-slot="{ errors }">
                                        <upload-button v-model="documents.citizenship" index="1"/>
                                        <small class="text-danger form-text">{{errors[0]}}</small>
                                    </ValidationProvider>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td><strong>Photo</strong></td>
                                <td>
                                    <ValidationProvider name="Photo" rules="required" v-slot="{ errors }">
                                        <upload-button v-model="documents.photo" index="3"/>
                                        <small class="text-danger form-text">{{errors[0]}}</small>
                                    </ValidationProvider>
                                </td>
                            </tr>

                            <tr>
                                <td>4.</td>
                                <td><strong>Signature</strong></td>
                                <td>
                                    <ValidationProvider name="Signature" rules="required" v-slot="{ errors }">
                                        <upload-button v-model="documents.signature" index="4"/>
                                        <small class="text-danger form-text">{{errors[0]}}</small>
                                    </ValidationProvider>
                                </td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td><strong>Electricity Bill</strong></td>
                                <td>
                                    <ValidationProvider name="Electricity Bill" rules="required" v-slot="{ errors }">
                                        <upload-button v-model="documents.electricityBill" index="5"/>
                                        <small class="text-danger form-text">{{errors[0]}}</small>
                                    </ValidationProvider>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </fieldset>
        </ValidationObserver>
        <action-buttons @next="handleNext('next')" @back="handleNext('back')"></action-buttons>
    </div>
</template>

<script>
    import UploadButton from "./UploadButton";
    import {ValidationObserver, ValidationProvider} from 'vee-validate';

    export default {
        name: "UploadFiles",
        components: {UploadButton, ValidationProvider, ValidationObserver},
        watch: {
            documents: {
                handler(val) {
                    this.$emit('input', val)
                },
                deep: true
            }
        },
        data() {
            return {
                documents: {
                    hasError: 2,
                    citizenship: '',
                    photo: '',
                    signature: '',
                    electricityBill: ''
                }
            }
        },
        methods: {
            validateForm() {
                return this.$refs.form.validate();
            },
            handleNext(event) {
                this.validateForm().then(isSuccess => {
                    if (isSuccess) {
                        this.$emit(event);
                        this.documents.hasError = 0;
                    } else {
                        this.documents.hasError = 1;
                    }
                })
            },
        }

    }
</script>

<style scoped>

</style>
