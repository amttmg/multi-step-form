<template>
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-lg-6 col-md-12 text-lg-left text-center">
                <img width="250px" src="https://www.rbb.com.np/uploads/config/1588430290-348980.jpg" alt=""/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <ul id="progressbar">
                            <li @click="set(1)"
                                v-bind:class="{ active: step === 1, error: customerInfo.accountInfo.hasError===1, success: customerInfo.accountInfo.hasError===0 }"
                                id="account"><strong>Account
                                Information</strong>
                            </li>
                            <li @click="set(2)"
                                v-bind:class="{ active: step === 2, error: customerInfo.personalInfo.hasError===1, success: customerInfo.personalInfo.hasError===0 }"
                                id="personal"><strong>Personal
                                Information</strong></li>
                            <li @click="set(3)"
                                v-bind:class="{ active: step === 3, error: customerInfo.addressInfo.hasError===1, success: customerInfo.addressInfo.hasError===0 }"
                                id="address"><strong>Address
                                Details</strong></li>
                            <li @click="set(4)" v-bind:class="{ active: step === 4 }" id="document">
                                <strong>Documents Upload</strong></li>
                            <li @click="set(5)" v-bind:class="{ active: step === 5 }" id="confirm">
                                <strong>Finish</strong></li>
                        </ul> <!-- fieldsets -->
                        <account-details v-model="customerInfo.accountInfo" @next="next" @back="prev"
                                         v-show="step === 1"></account-details>
                        <personal-details v-model="customerInfo.personalInfo" @next="next" @back="prev"
                                          v-show="step === 2"></personal-details>
                        <address-details v-model="customerInfo.addressInfo" @next="next" @back="prev"
                                         v-show="step === 3"></address-details>
                        <upload-files v-model="customerInfo.documentsInfo" @next="next" @back="prev"
                                      v-show="step === 4"></upload-files>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import {TheMask} from 'vue-the-mask'
    import AccountDetails from "./AccountDetails";
    import PersonalDetails from "./PersonalDetails";
    import AddressDetails from "./AddressDetails";
    import UploadFiles from "./UploadFiles";

    export default {
        data() {
            return {
                customerInfo: {
                    accountInfo: '',
                    personalInfo: '',
                    addressInfo: '',
                    documentsInfo: '',
                },
                step: 1,
            }
        },
        components: {UploadFiles, AddressDetails, PersonalDetails, AccountDetails, TheMask},
        methods: {
            prev() {
                this.step--;
            },
            next() {
                this.step++;
            },
            set(step) {
                this.step = step;
            },
            submit() {
                alert('Submit to blah and show blah and etc.');
            }
        }
    }
</script>
