<template>
    <div>
        <ValidationObserver ref="form">
            <fieldset class="border-blue px-3 pb-3" style="border-opacity: 0.5">
                <legend class="w-auto px-2 text-primary">Personal Information:</legend>
                <div class="row">
                    <div class="col-md-3">
                        <label for="initial">Initial<span class="text-danger">*</span></label>
                        <ValidationProvider name="Initial" rules="required" v-slot="{ errors }">
                            <select v-model="personalInfo.initial" id="initial" class="form-control" name="initial">
                                <option value="" selected>Please Select</option>
                                <option value="Mr.">Mr.</option>
                                <option value="Mrs.">Mrs.</option>
                                <option value="Miss.">Miss.</option>
                            </select>
                            <small class="text-danger form-text">{{errors[0]}}</small>
                        </ValidationProvider>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <ValidationProvider name="First Name" rules="required" v-slot="{ errors }">
                                <label for="fname">First Name<span class="text-danger">*</span></label>
                                <input v-model="personalInfo.firstName" type="text" name="fname" class="form-control"
                                       id="fname">
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <ValidationProvider name="Middle Name" rules="" v-slot="{ errors }">
                                <label for="mname">Middle Name</label>
                                <input v-model="personalInfo.middleName" type="text" class="form-control" id="mname">
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <ValidationProvider name="Middle Name" rules="required" v-slot="{ errors }">
                                <label for="lname">Last Name<span class="text-danger">*</span></label>
                                <input v-model="personalInfo.lastName" type="text" class="form-control" id="lname">
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <ValidationProvider name="Nationality" rules="required" v-slot="{ errors }">
                                <label for="nationality">Nationality<span class="text-danger">*</span></label>
                                <select v-model="personalInfo.nationality" id="nationality" class="form-control">
                                    <option value="" selected>Please Select</option>
                                    <option value="1">Nepalies</option>
                                </select>
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <ValidationProvider name="email" rules="email" v-slot="{ errors }">
                                <label for="email">Email Address<span class="text-danger">*</span></label>
                                <input v-model="personalInfo.email" type="email" class="form-control" id="email">
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <ValidationProvider name="Mobile No" rules="required|digits:10" v-slot="{ errors }">
                                <label for="mobile">Mobile Number<span class="text-danger">*</span></label>
                                <the-mask v-model="personalInfo.mobileNo" class="form-control" :mask="['##########']"/>
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <ValidationProvider name="Marital Status" rules="required" v-slot="{ errors }">
                                <label for="maritalStatus">Marital Status<span class="text-danger">*</span></label>
                                <select v-model="personalInfo.maritalStatus" id="maritalStatus" class="form-control">
                                    <option value="">Please Select</option>
                                    <option value="Married">Married</option>
                                    <option value="Single">Single</option>
                                    <option value="Other">Other</option>
                                </select>
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <ValidationProvider name="Religion" rules="required" v-slot="{ errors }">
                                <label for="Religion">Religion<span class="text-danger">*</span></label>
                                <select v-model="personalInfo.religion" id="Religion" class="form-control">
                                    <option value="">Please Select</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="buddhist">Buddhist</option>
                                    <option value="Other">Other</option>
                                </select>
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <ValidationProvider name="Gender" rules="required" v-slot="{ errors }">
                                <label for="Gender">Gender<span class="text-danger">*</span></label>
                                <select v-model="personalInfo.gender" id="Gender" class="form-control">
                                    <option value="">Please Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <ValidationProvider name="Education" rules="required" v-slot="{ errors }">
                                <label for="education">Education<span class="text-danger">*</span></label>
                                <select v-model="personalInfo.education" class="form-control" id="education"
                                        name="education">
                                    <option value="">Please Select</option>
                                    <option value="Literate">
                                        Literate
                                    </option>
                                    <option value="SLC/SEE">
                                        SLC/SEE
                                    </option>
                                    <option value="Intermediate">
                                        Intermediate
                                    </option>
                                    <option value="Graduate">
                                        Graduate
                                    </option>
                                    <option value="Masters">
                                        Masters
                                    </option>
                                    <option value="Other">
                                        Other (please specify)
                                    </option>
                                </select>
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <ValidationProvider name="Spouse Name" rules="required" v-slot="{ errors }">
                                <label for="spousename">Spouse Name<span class="text-danger">*</span></label>
                                <input v-model="personalInfo.spouseName" type="text" id="spousename" name="spousename"
                                       value=""
                                       class="form-control">
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <ValidationProvider name="Grandfather Name" rules="required" v-slot="{ errors }">
                                <label for="grandfather">Grand Father Name<span class="text-danger">*</span></label>
                                <input v-model="personalInfo.grandfatherName" type="text" id="grandfather"
                                       name="grandfather"
                                       value=""
                                       class="form-control">
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <ValidationProvider name="Father Name" rules="required" v-slot="{ errors }">
                                <label for="father">Father Name<span class="text-danger">*</span></label>
                                <input v-model="personalInfo.fatherName" type="text" id="father" name="father" value=""
                                       class="form-control">
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <ValidationProvider name="Mother Name" rules="required" v-slot="{ errors }">
                                <label for="mother">Mother Name<span class="text-danger">*</span></label>

                                <input v-model="personalInfo.motherName" type="text" id="mother" name="mother" value=""
                                       class="form-control">
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <ValidationProvider name="Citizenship Number" rules="required" v-slot="{ errors }">
                                <label for="citizenshipno">Citizenship Certificate No.<span
                                    class="text-danger">*</span></label>
                                <input v-model="personalInfo.ctzNumber" class="form-control" id="citizenshipno"
                                       name="citizenshipno"
                                       placeholder="Citizenship Certificate No"
                                       type="text">
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <ValidationProvider name="Issuing District" rules="required" v-slot="{ errors }">
                                <label for="issuingdistrict">Issuing District <span
                                    class="text-danger">*</span></label>
                                <v-select v-model="personalInfo.ctzIssuingDistrict" label="text" :options="districts"
                                          id="issuingdistrict">
                                    <option value=""> Select District</option>
                                </v-select>
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <ValidationProvider name="Issuing Authority" rules="required" v-slot="{ errors }">
                                <label for="issuingauthority">Issuing Authority <span
                                    class="text-danger">*</span></label>
                                <input v-model="personalInfo.ctzIssuingAuthority" disabled class="form-control"
                                       id="issuingauthority"
                                       name="issuingauthority"
                                       autocomplete="off" placeholder="Issuing Authority" type="text">
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <ValidationProvider name="Issued Date" rules="required" v-slot="{ errors }">
                                <label for="cissuedate">Issued Date(B.S.)
                                    <span class="text-danger">*</span></label>
                                <the-mask
                                    v-model="personalInfo.ctzIssueDate"
                                    id="cissuedate"
                                    class="form-control"
                                    placeholder="YYYY/MM/DD"
                                    :mask="['####/##/##']"/>
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                </div>
            </fieldset>
        </ValidationObserver>
        <action-buttons @next="handleNext('next')" @back="handleNext('back')"></action-buttons>
    </div>
</template>

<script>
    import {districts} from '../data'
    import {ValidationObserver, ValidationProvider} from 'vee-validate';

    export default {
        name: "PersonalDetails",
        components: {ValidationObserver, ValidationProvider},
        watch: {
            personalInfo: {
                handler(val) {
                    this.$emit('input', val)
                },
                deep: true
            }
        },
        data() {
            return {
                districts: districts,
                personalInfo: {
                    initial: '',
                    firstName: '',
                    middleName: '',
                    lastName: '',
                    nationality: '',
                    email: '',
                    mobileNo: '',
                    maritalStatus: '',
                    religion: '',
                    gender: '',
                    education: '',
                    spouseName: '',
                    grandfatherName: '',
                    fatherName: '',
                    motherName: '',
                    ctzNumber: '',
                    ctzIssuingDistrict: '',
                    ctzIssueDate: '',
                    ctzIssuingAuthority: 'DISTRICT ADMINISTRATION OFFICE',
                    hasError: 2,
            }
        }
        },
        methods: {
            handleNext(event) {
                this.validateForm().then(isSuccess => {
                    if (isSuccess) {
                        this.$emit(event);
                        this.personalInfo.hasError = 0;
                    } else {
                        this.personalInfo.hasError = 1;
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
