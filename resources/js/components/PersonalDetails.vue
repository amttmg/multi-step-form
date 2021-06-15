<template>
    <div>
        <fieldset class="border-blue px-3 pb-3" style="border-opacity: 0.5">
            <legend class="w-auto px-2 text-primary">Personal Information:</legend>
            <div class="row">
                <div class="col-md-3">
                    <label for="initial">Initial</label>
                    <select v-validate="'required'" id="initial" class="form-control" name="initial">
                        <option value="" selected>Please Select</option>
                        <option value="1">Mr.</option>
                        <option value="2">Mrs.</option>
                        <option value="3">Miss.</option>
                    </select>
                    <small class="text-danger form-text">{{ errors.first('initial') }}</small>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input v-validate="'required'" type="text" name="fname" class="form-control" id="fname">
                        <small class="text-danger form-text">{{ errors.first('fname') }}</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="mname">Middle Name</label>
                            <input type="text" class="form-control" id="mname">
                            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email
                                with anyone else.</small>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" id="lname">
                        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email
                            with anyone else.</small>-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="nationality">Nationality</label>
                        <select id="nationality" class="form-control">
                            <option value="" selected>Please Select</option>
                            <option value="1">Nepalies</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email">
                        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email
                            with anyone else.</small>-->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="mobile">Mobile Number</label>
                        <the-mask class="form-control" :mask="['##########']"/>
                        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email
                            with anyone else.</small>-->
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="maritalStatus">Marital Status</label>
                        <select id="maritalStatus" class="form-control">
                            <option value="">Please Select</option>
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Religion">Religion</label>
                        <select id="Religion" class="form-control">
                            <option value="">Please Select</option>
                            <option value="hindu">Hindu</option>
                            <option value="buddhist">Buddhist</option>
                            <option value="Other">Other</option>
                        </select>
                        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email
                            with anyone else.</small>-->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Gender">Gender</label>
                        <select id="Gender" class="form-control">
                            <option value="">Please Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="education">Education</label>
                        <select class="form-control" id="education" name="education">
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
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="spousename">Spouse Name</label>
                        <input type="text" id="spousename" name="spousename" value=""
                               class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="grandfather">Grand Father Name</label>
                        <input type="text" id="grandfather" name="grandfather" value=""
                               class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="father">Father Name</label>
                        <input type="text" id="father" name="father" value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="mother">Mother Name</label>
                        <input type="text" id="mother" name="mother" value="" class="form-control">
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Citizenshipno">Citizenship Certificate No.<span
                            class="required">*</span></label>
                        <input class="form-control idnumbers" id="citizenshipno"
                               name="citizenshipno"
                               value="" autocomplete="off" placeholder="Citizenship Certificate No"
                               type="text" required="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="issuingdistrict">Issuing District <span
                            class="required">*</span></label>
                        <v-select label="text" :options="districts">
                            <option value=""> Select District</option>
                        </v-select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="issuingauthority">Issuing Authority <span
                            class="required">*</span></label>
                        <input disabled class="form-control" id="issuingauthority"
                               name="issuingauthority" value="DISTRICT ADMINISTRATION OFFICE"
                               autocomplete="off" placeholder="Issuing Authority" type="text">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="cissuedate">Issued Date(A.D.) <span
                            class="required">*</span></label>
                        <the-mask class="form-control"
                                  placeholder="YYYY/MM/DD"
                                  :mask="['####/##/##']"/>
                    </div>
                </div>
            </div>
        </fieldset>
        <action-buttons @next="$emit('next')" @back="$emit('back')"></action-buttons>
    </div>
</template>

<script>
    import {districts} from '../data'

    export default {
        name: "PersonalDetails",
        data() {
            return {
                districts: districts,
            }
        }
    }
</script>

<style scoped>

</style>
