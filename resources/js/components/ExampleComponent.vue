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
                   <!-- <div id="loader">Please Wait</div>-->
                    <div v-if="submitted" class="card-body text-center" style="font-size: 20px;color: #022D9D">
                        <i class="fa fa-check-circle fa-5x"></i><br/>
                        Dear customer,<br/>
                        Your KYC update request has been received. We will manually verify and update your details. We will inform
                        you after completion.
                        <br/>Thank you for using RBB EKYC <br/><br/>
                        <img width="150px" src="https://www.rbb.com.np/uploads/config/1588430290-348980.jpg" alt=""/>
                    </div>
                    <div class="card-body" v-else>
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
                            <li @click="set(4)"
                                v-bind:class="{ active: step === 4, error: customerInfo.documentsInfo.hasError===1, success: customerInfo.documentsInfo.hasError===0 }"
                                id="document">
                                <strong>Documents Upload</strong></li>
                            <li @click="set(5)" v-bind:class="{ active: step === 5 }" id="confirm">
                                <strong>Finish</strong></li>
                        </ul>
                        <account-details
                            ref="accountInfo"
                            v-model="customerInfo.accountInfo"
                            @next="next"
                            @back="prev"
                            v-show="step === 1"/>
                        <personal-details
                            ref="personalInfo"
                            v-model="customerInfo.personalInfo"
                            @next="next"
                            @back="prev"
                            v-show="step === 2"/>
                        <address-details
                            ref="addressInfo"
                            v-model="customerInfo.addressInfo"
                            @next="next"
                            @back="prev"
                            v-show="step === 3"/>
                        <upload-files
                            ref="documentsInfo"
                            v-model="customerInfo.documentsInfo"
                            @next="next"
                            @back="prev"
                            v-show="step === 4"/>
                        <confirm-details
                            @next="next"
                            @back="prev"
                            @submit="handleSubmit"
                            :data="customerInfo"
                            ref="confirmDetails"
                            v-show="step === 5"/>
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
    import ConfirmDetails from "./ConfirmDetails";

    export default {
        data() {
            return {
                customerInfo1: {
                    accountInfo: {
                        branch: {
                            value: "153",
                            text: "ANBUKHAIRENI [319]"
                        },
                        acType: "Current",
                        acNumber: "1111111111111111",
                        hasError: 0
                    },
                    "personalInfo": {
                        "initial": "Miss.",
                        "firstName": "Jacob",
                        "middleName": "Hamilton Guthrie",
                        "lastName": "Dillard",
                        "nationality": "1",
                        "email": "rokiwoxugy@mailinator.com",
                        "mobileNo": "1111111111",
                        "maritalStatus": "Other",
                        "religion": "hindu",
                        "gender": "female",
                        "education": "SLC/SEE",
                        "spouseName": "Simon Norman",
                        "grandfatherName": "Giacomo Klein",
                        "fatherName": "Selma Conley",
                        "motherName": "Amber Mejia",
                        "ctzNumber": "Anim eu sequi blandi",
                        "ctzIssuingDistrict": {
                            "value": "2",
                            "text": "Arghakhanchi"
                        },
                        "ctzIssueDate": "071976",
                        "ctzIssuingAuthority": "DISTRICT ADMINISTRATION OFFICE",
                        "hasError": 0
                    },
                    "addressInfo": {
                        "sameAsPermanent": true,
                        "hasError": 0,
                        "permanentAddress": {
                            "province": {
                                "value": 3,
                                "text": "Bagmati Province"
                            },
                            "district": {
                                "id": 24,
                                "province_id": 3,
                                "districtName": "Chitwan",
                                "activeStatus": "A",
                                "created_at": "2021-06-08T03:14:48.000000Z",
                                "updated_at": "2021-06-08T03:14:48.000000Z"
                            },
                            "municipality": {
                                "id": 270,
                                "district_id": 24,
                                "municipalityName": "Kalika",
                                "activeStatus": "A",
                                "created_at": "2021-06-08T03:14:48.000000Z",
                                "updated_at": "2021-06-08T03:14:48.000000Z"
                            },
                            "ward": "1",
                            "street": "amrit tmang",
                            "address": "धनकुटा"
                        },
                        "currentAddress": {
                            "province": {
                                "value": 3,
                                "text": "Bagmati Province"
                            },
                            "district": {
                                "id": 24,
                                "province_id": 3,
                                "districtName": "Chitwan",
                                "activeStatus": "A",
                                "created_at": "2021-06-08T03:14:48.000000Z",
                                "updated_at": "2021-06-08T03:14:48.000000Z"
                            },
                            "municipality": {
                                "id": 270,
                                "district_id": 24,
                                "municipalityName": "Kalika",
                                "activeStatus": "A",
                                "created_at": "2021-06-08T03:14:48.000000Z",
                                "updated_at": "2021-06-08T03:14:48.000000Z"
                            },
                            "ward": "1",
                            "street": "amrit tmang",
                            "address": "धनकुटा"
                        }
                    },
                    "documentsInfo": {
                        "hasError": 0,
                        "citizenship": "files/ucUhEaiL9FqKgtaAApAIEBSublqluafeBYSy3IwN.jpg",
                        "photo": "files/i1IqtQe1fmU4RR87VKLCGDCKw29xQUlDLZqr7E0H.jpg",
                        "signature": "files/hO92JvCDga98Zc0PPW5TTNhKYps3ZPhV70DhuFvv.jpg",
                        "electricityBill": "files/rmoXcd4pkZrHNJgxVBmu5dZ4Wt2cQrvJB3PLb9qn.jpg"
                    }
                },
                customerInfo: {
                    accountInfo: '',
                    personalInfo: '',
                    addressInfo: '',
                    documentsInfo: '',
                },
                step: 1,
                submitted: false
            }
        },
        components: {ConfirmDetails, UploadFiles, AddressDetails, PersonalDetails, AccountDetails, TheMask},
        methods: {
            prev() {
                this.step--;
            },
            next() {
                this.step++;
            },
            set(step) {
                switch (this.step) {
                    case 1:
                        this.$refs.accountInfo.handleNext('go');
                        break;
                    case 2:
                        this.$refs.personalInfo.handleNext('go');
                        break;
                    case 3:
                        this.$refs.addressInfo.handleNext('go');
                        break;
                    case 4:
                        this.$refs.documentsInfo.handleNext('go');
                        break;
                }
                this.step = step;
            },
            handleSubmit() {
                this.submitted = true;
            }
        }
    }
</script>
<style>
    #loader {
        opacity: 0.9;
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('https://www.isostech.com/wp-content/uploads/2015/04/loader.gif.pagespeed.ce.T8p3DJRaGA.gif') 50% 50% no-repeat rgb(249, 249, 249);
    }
</style>
