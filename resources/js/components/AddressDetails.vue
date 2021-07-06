<template>
    <div>
        <ValidationObserver ref="form">
            <fieldset class="border-blue px-3 pb-3" style="border-opacity: 0.5">
                <legend class="w-auto px-2 text-primary">Permanent Address:</legend>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider name="Province" rules="required" v-slot="{ errors }">
                                <label for="province">Province</label>
                                <v-select v-model="address.permanentAddress.province"
                                          v-on:input="changePermanentProvince"
                                          label="text"
                                          :options="proviences"
                                          placeholder="Please Select"></v-select>
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider name="District" rules="required" v-slot="{ errors }">
                                <label for="district">District: </label>
                                <v-select v-model="address.permanentAddress.district"
                                          v-on:input="changePermanentDistrict"
                                          label="districtName"
                                          :options="permanentDistrictsList"
                                          placeholder="Please Select"></v-select>
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider name="Municipality" rules="required" v-slot="{ errors }">
                                <label for="Municipality">Municipality: </label>
                                <v-select v-model="address.permanentAddress.municipality" label="municipalityName"
                                          :options="permanentMunicipalityList"
                                          placeholder="Please Select"></v-select>
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider name="Tole/Street" rules="required" v-slot="{ errors }">
                                <label for="tole">Tole/Street</label>
                                <input v-model="address.permanentAddress.street" type="text" class="form-control"
                                       id="tole"/>
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider name="Ward No" rules="required" v-slot="{ errors }">
                                <label for="ward">Ward No</label>
                                <input v-model="address.permanentAddress.ward" type="text" class="form-control"
                                       id="ward"/>
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider name="Address" rules="required" v-slot="{ errors }">
                                <label for="address">Address</label>
                                <input v-model="address.permanentAddress.address" type="text" class="form-control"
                                       id="address"/>
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="form-check">
                        <input v-model="address.sameAsPermanent" @change="copyAddress" class="form-check-input"
                               type="checkbox"
                               value="1"
                               id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Current address is same as permanent Address
                        </label>
                    </div>
                </div>
            </div>
            <fieldset class="border-blue px-3 pb-3" style="border-opacity: 0.5">
                <legend class="w-auto px-2 text-primary">Current Address:</legend>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider name="Province" rules="required" v-slot="{ errors }">
                                <label for="province">Province</label>
                                <v-select v-model="address.currentAddress.province" v-on:input="changeCurrentProvince"
                                          label="text"
                                          :options="proviences"
                                          placeholder="Please Select"></v-select>
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider name="District" rules="required" v-slot="{ errors }">
                                <label for="district">District: </label>
                                <v-select v-model="address.currentAddress.district" v-on:input="changeCurrentDistrict"
                                          label="districtName"
                                          :options="currentDistrictsList"
                                          placeholder="Please Select"></v-select>
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider name="Municipality" rules="required" v-slot="{ errors }">
                                <label for="Municipality">Municipality: </label>
                                <v-select v-model="address.currentAddress.municipality" label="municipalityName"
                                          :options="currentMunicipalityList"
                                          placeholder="Please Select"></v-select>
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider name="Tole/Street" rules="required" v-slot="{ errors }">
                                <label for="tole">Tole/Street</label>
                                <input v-model="address.currentAddress.street" type="text" class="form-control"
                                       id="tole"/>
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider name="Ward" rules="required|numeric" v-slot="{ errors }">
                                <label for="ward">Ward No</label>
                                <input v-model="address.currentAddress.ward" type="text" class="form-control"
                                       id="ward"/>
                                <small class="text-danger form-text">{{errors[0]}}</small>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider name="Address" rules="required" v-slot="{ errors }">
                                <label for="address">Address</label>
                                <input v-model="address.currentAddress.address" type="text" class="form-control"
                                       id="address"/>
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
    import {proviences} from '../data'
    import {getDistricts, getMunicipalities} from '../functions'
    import {ValidationObserver, ValidationProvider} from 'vee-validate';

    export default {
        name: "AddressDetails",
        components: {ValidationObserver, ValidationProvider},
        watch: {
            address: {
                handler(val) {
                    this.$emit('input', val)
                },
                deep: true
            }
        },
        data() {
            return {
                proviences: proviences,
                permanentDistrictsList: [],
                currentDistrictsList: [],
                permanentMunicipalityList: [],
                currentMunicipalityList: [],
                address1: {
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
                address: {
                    sameAsPermanent: false,
                    hasError: 2,
                    permanentAddress: {
                        province: '',
                        district: '',
                        municipality: '',
                        ward: '',
                        street: '',
                        address: ''
                    },
                    currentAddress: {
                        province: '',
                        district: '',
                        municipality: '',
                        ward: '',
                        street: '',
                        address: ''
                    }
                }
            }
        },
        methods: {
            changeCurrentProvince(e) {
                getDistricts(e.value).then(res => {
                    this.currentDistrictsList = res.data;
                })
            },
            changeCurrentDistrict(e) {
                getMunicipalities(e.id).then(res => {
                    this.currentMunicipalityList = res.data;
                })
            },
            changePermanentProvince(e) {
                getDistricts(e.value).then(res => {
                    this.permanentDistrictsList = res.data;
                })
            },
            changePermanentDistrict(e) {
                getMunicipalities(e.id).then(res => {
                    this.permanentMunicipalityList = res.data;
                })
            },
            handleNext(event) {
                this.validateForm().then(isSuccess => {
                    if (isSuccess) {
                        this.$emit(event);
                        this.address.hasError = 0;
                    } else {
                        this.address.hasError = 1;
                    }
                })
            },
            validateForm() {
                return this.$refs.form.validate();
            },
            copyAddress(e) {
                console.log(this.address.sameAsPermanent);
                if (this.address.sameAsPermanent) {
                    this.address.currentAddress = this.address.permanentAddress;
                } else {
                    this.address.currentAddress = {
                        province: '',
                        district: '',
                        municipality: '',
                        ward: '',
                        street: '',
                        address: ''
                    }
                }
            }
        }
    }
</script>

<style scoped>

</style>
